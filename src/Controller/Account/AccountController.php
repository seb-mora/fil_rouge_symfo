<?php

namespace App\Controller\Account;

use App\Form\UserType;
use App\Form\UserEditType;
use App\Entity\Commentaires;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentairesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/account')]
class AccountController extends AbstractController
{
    #[Route('/', name: 'app_account')]
    public function index(): Response
    {
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    #[Route('/commentaires/{id}', name: 'app_account_commentaires', methods: ['GET'])]
    public function userCommentaires(CommentairesRepository $commentairesRepository, $id): Response
    {
        return $this->render('account/actions/showCommentaires.html.twig', [
            'commentaires' => $commentairesRepository->findBy(['auteur' => $id]),
        ]);
    }

    #[Route('/commentaires/delete/{id}', name: 'app_commentaires_delete', methods: ['POST'])]
    public function userDeleteCommentaires(Request $request, Commentaires $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_account_commentaires', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/edit', name: 'public_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserEditType::class, $user);
        // $form->add('password', RepeatedType::class, [
        //     'type' => PasswordType::class,
        //     'invalid_message' => 'mots de passe différents',
        //     'options' => ['attr' => [
        //         'class' => 'password-field',
        //         'autocomplete' => 'new-password'
        //     ]],
        //     'required' => false,
        //     'first_options' => ['label' => 'Mot de passe'],
        //     'second_options' => ['label' => 'Confirmer mot de passe']
        // ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_account', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('account/actions/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
}

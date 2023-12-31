<?php

namespace App\Controller\Account;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\Commentaires;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentairesRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/account')]
class AccountController extends AbstractController
{
    #[Route('/', name: 'app_account')]
    public function index(ArticleRepository $articleRepository, CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('account/actions/indexArt.html.twig', [
            'controller_name' => 'AccountController',
            'articles' => $articleRepository->findAll(),
            'categories' => $categoriesRepository->findAll()
        ]);
    }

    #[Route('/commentaires/delete/{id}', name: 'app_commentaires_delete', methods: ['POST'])]
    public function userDeleteCommentaires(Request $request, Commentaires $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_commentaires', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/edit', name: 'public_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    {
        $user = new User();
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $brutPassword = $user->getPassword();
            $hashedPassword = $userPasswordHasherInterface->hashPassword(
                $user,
                $brutPassword
            );
            $user->setPassword($hashedPassword);
            $user->setRoles(["ROLE_VISITOR"]);
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_account', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('account/actions/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'public_user_delete', methods: ['POST'])]
    public function deleteUser(Request $request, User $user, EntityManagerInterface $entityManager, CommentairesRepository $commentairesRepository, $id): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $commentairesRepository->setCommentsToNull($id);
            $entityManager->remove($user);
            $entityManager->flush();
            $this->container->get('security.token_storage')->setToken(null);
        }

        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }
}

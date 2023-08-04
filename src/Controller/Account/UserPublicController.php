<?php

namespace App\Controller\Account;

use DateTime;
use App\Entity\User;
use App\Form\UserType;
use App\Entity\Article;
use App\Form\UserEditType;
use App\Entity\Commentaires;
use App\Form\CommentairesType;
use App\Repository\UserRepository;
use App\Repository\ArticleRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentairesRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


#[Route('/public/user')]
class UserPublicController extends AbstractController
{
    #[Route('/', name: 'public_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('account/actions/index.html.twig', [
            'categ' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'public_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    {
        $user = new User();
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
            return $this->redirectToRoute('user_login');
        }

        return $this->render('account/create/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'user_commentaires_delete', methods: ['POST'])]
    public function deleteCom(Request $request, Commentaires $commentaire, EntityManagerInterface $entityManager): Response
    {
        // $user = $this->getUser();
        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_account_commentaires', ['id' => $commentaire->getAuteur()->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/categorie/{id}', name: 'user_categorie_show', methods: ['GET'])]
    public function showCat(ArticleRepository $articleRepository, CategoriesRepository $categoriesRepository, $id): Response
    {
        return $this->render('account/actions/showCat.html.twig', [
            'articles' => $articleRepository->findBy(['categorie' => $id]),
            'categorie' => $categoriesRepository->find($id)
        ]);
    }

    #[Route('/artice/{id}', name: 'user_article_show', methods: ['GET'])]
    public function showArt(Article $article, CommentairesRepository $commentairesRepository, $id): Response
    {

        return $this->render('account/actions/showArt.html.twig', [
            'article' => $article,
            'commentaires' => $commentairesRepository->findBy(['article' => $id, 'status' => 1])
        ]);
    }

    #[Route('/new/commentaire/{id}', name: 'user_commentaires_new', methods: ['GET', 'POST'])]
    public function newCom(Request $request, EntityManagerInterface $entityManager, ArticleRepository $articleRepository, $id): Response
    {
        $article = $articleRepository->findBy(['id' => $id]);
        $commentaire = new Commentaires();
        $form = $this->createForm(CommentairesType::class, $commentaire);
        $form->handleRequest($request);
        $date = date('Y-m-d');
        $format = 'Y-m-d';
        $date = DateTime::createFromFormat($format, $date);
        // $user = $this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDate($date);
            $commentaire->setStatus(0);
            $commentaire->setArticle($article[0]);
            $commentaire->setAuteur($this->getUser());
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('user_article_show', ['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->render('account/actions/newCom.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

    // #[Route('/edit', name: 'public_user_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    // {
    //     $user = $this->getUser();
    //     $form = $this->createForm(UserType::class, $user);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {

    //         $brutPassword = $user->getPassword();
    //         $hashedPassword = $userPasswordHasherInterface->hashPassword(
    //             $user,
    //             $brutPassword
    //         );
    //         $user->setPassword($hashedPassword);

    //         $user->setRoles(["ROLE_VISITOR"]);

    //         $entityManager->persist($user);


    //         $entityManager->flush();

    //         // return $this->redirectToRoute('app_account', [], Response::HTTP_SEE_OTHER);

    //         return $this->render('account/index.html.twig');
    //     }

    //     return $this->render('account/actions/edit.html.twig', [
    //         'user' => $user,
    //         'form' => $form,
    //     ]);
    // }
}

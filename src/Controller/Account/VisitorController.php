<?php

namespace App\Controller\Account;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\Article;
use App\Entity\Categories;
use App\Repository\ArticleRepository;
use App\Repository\CommentairesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/visitor/user')]
class VisitorController extends AbstractController
{
    #[Route('/', name: 'visitor_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('account/actions/index.html.twig', [
            'categ' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/artice/{id}', name: 'visitor_article_show', methods: ['GET'])]
    public function showArt(Article $article, CommentairesRepository $commentairesRepository, $id): Response
    {
        return $this->render('visitor/article/show.html.twig', [
            'article' => $article,
            'commentaires' => $commentairesRepository->findBy(['article' => $id, 'status' => 1])
        ]);
    }

    #[Route('/categorie/{id}', name: 'visitor_categorie_show', methods: ['GET'])]
    public function showCat(ArticleRepository $articleRepository, Categories $categorie, $id): Response
    {
        return $this->render('visitor/showCat.html.twig', [
            'articles' => $articleRepository->findBy(['categorie' => $id]),
            'categorie' => $categorie,
        ]);
    }

    #[Route('/new', name: 'visitor_user_new', methods: ['GET', 'POST'])]
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

            return $this->redirectToRoute('user_login', ['params' => $user->getEmail()]);
        }

        return $this->render('account/create/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'visitor_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}

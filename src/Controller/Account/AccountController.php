<?php

namespace App\Controller\Account;

use App\Repository\CommentairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}

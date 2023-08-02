<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository): Response
    {

        return $this->render('account/actions/index.html.twig', [
            'articles' => $articleRepository->findAll()
        ]);

        // return $this->render('visitor/article/index.html.twig', [
        //     'articles' => $articleRepository->findAll(),
        // ]);
    }
}

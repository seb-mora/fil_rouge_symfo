<?php

namespace App\Controller\Admin;

use DateTime;
use App\Entity\Article;
use App\Form\ArticleType;
use App\Service\FileUploaderService;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentairesRepository;
use Symfony\Component\Form\FileUploadError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('admin/article')]
class ArticleController extends AbstractController
{
    #[Route('/list/{categorie?}', name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, $categorie): Response
    {
        if ($categorie === null) {
            return $this->render('admin/article/index.html.twig', [
                'articles' => $articleRepository->findAll(),
            ]);
        } else {
            return $this->render('admin/article/index.html.twig', [
                'articles' => $articleRepository->findBy(['categorie' => $categorie]),
            ]);
        }
    }

    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, FileUploaderService $fileUploaderService, $publicUploadDir): Response
    {
        $date = date('Y-m-d');
        $format = 'Y-m-d';
        $date = DateTime::createFromFormat($format, $date);

        $article = new Article();


        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form['logo']->getData();
            if ($file !== null) {
                $this->upload($file, $article, $fileUploaderService, $publicUploadDir);
            }
            $article->setDate($date);
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article, CommentairesRepository $commentairesRepository, $id): Response
    {
        return $this->render('admin/article/show.html.twig', [
            'article' => $article,
            'commentaires' => $commentairesRepository->findBy(['article' => $id, 'status' => 1])
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager, FileUploaderService $fileUploaderService, $publicUploadDir,  ArticleRepository $articleRepository, $deleteFolder): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $articlebdd = $articleRepository->findBy(['id' => $article->getId()]);

            $file = $form['logo']->getData();
            if ($file !== null) {

                $parts = explode('\\', $article->getLogo());
                dd($articlebdd);
                unlink($deleteFolder . "/" . $parts[2]);

                $this->upload($file, $article, $fileUploaderService, $publicUploadDir);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }


    // #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, Article $article, ArticleRepository $articleRepository, EntityManagerInterface $entityManager, FileUploaderService $file_uploader, $publicUploadDir, $deleteFolder): Response
    // {
    //     $old_article = $articleRepository->findBy(['id' => $article->getId()]);
    //     $logo = $old_article[0]->getLogo();
    //     // $now=Carbon::now();
    //     $date = date('Y-m-d');
    //     $format = 'Y-m-d';
    //     $date = DateTime::createFromFormat($format, $date);

    //     $form = $this->createForm(ArticleType::class, $article);
    //     $form->handleRequest($request);
    //     // $article->setCreatedDate($now);
    //     $article->setDate($date);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $file = $form['logo']->getData();
    //         if ($file) {
    //             if ($logo !== null)
    //                 unlink($deleteFolder . $logo);
    //             $this->upload($file, $article, $file_uploader, $publicUploadDir);
    //         }
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_article_index', ['fk_category' => $article->getCategorie()->getId()], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('admin/article/edit.html.twig', [
    //         'article' => $article,
    //         'form' => $form,
    //         'fk_category' => $article->getCategorie()->getId()
    //     ]);
    // }




    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }

    public function upload($file, $article, $fileUploaderService, $publicUploadDir)
    {
        $fileName = $fileUploaderService->upload($file);
        if ($file !== null) {
            $full_path = $publicUploadDir . '/' . $fileName;
            $article->setLogo($full_path);
        }
    }
}

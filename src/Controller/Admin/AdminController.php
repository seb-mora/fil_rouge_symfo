<?php

namespace App\Controller\Admin;

use App\Entity\Commentaires;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentairesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/validCom/{id}', name: 'valid_com_admin')]
    public function validCom(CommentairesRepository $commentairesRepository, EntityManagerInterface $entityManager, $id): Response
    {
        $foundCommentaires = $commentairesRepository->findBy(['id' => $id]);
        $commentaire = $foundCommentaires[0];
        $commentaire->setStatus(1);
        $entityManager->persist($commentaire);
        $entityManager->flush();
        return $this->render('admin/commentaires/index.html.twig', [
            'commentaires' => $commentairesRepository->findBy(['status' => 0]),
        ]);
    }

    #[Route('/deleteCom/{id}', name: 'delete_com_admin', methods: ['POST'])]
    public function deleteCom(Request $request, Commentaires $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_account_commentaires', ['id' => $commentaire->getAuteur()->getId()], Response::HTTP_SEE_OTHER);
    }
}

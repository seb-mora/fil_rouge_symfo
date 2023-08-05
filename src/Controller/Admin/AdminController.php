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
    public function index(CommentairesRepository $commentairesRepository): Response
    {
        // $nbrComsNotValid = count($commentairesRepository->findBy(['status' => 0]));

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            // 'nbrComsNotValid' => $nbrComsNotValid,
        ]);
    }

    #[Route('/validCom/{id}', name: 'valid_com_admin')]
    public function validCom(CommentairesRepository $commentairesRepository, EntityManagerInterface $entityManagerInterface, $id): Response
    {
        $foundCommentaires = $commentairesRepository->findBy(['id' => $id]);
        $commentaire = $foundCommentaires[0];
        $commentaire->setStatus(1);
        $entityManagerInterface->persist($commentaire);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('app_commentaires_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/deleteCom/{id}', name: 'delete_com_admin', methods: ['POST'])]
    public function deleteCom(Request $request, CommentairesRepository $commentairesRepository, Commentaires $commentaire, EntityManagerInterface $entityManager, $id): Response
    {
        $foundCommentaires = $commentairesRepository->findBy(['id' => $id]);
        $commentaire = $foundCommentaires[0];
        $commentaire->setStatus(1);
        $entityManager->remove($commentaire);
        $entityManager->flush();


        return $this->redirectToRoute('app_commentaires_index', [], Response::HTTP_SEE_OTHER);

        // return $this->render('admin/commentaires/index.html.twig', [
        //     'commentaires' => $commentairesRepository->findBy(['status' => 0]),
        // ]);
    }

    #[Route('/comstovalid', name: 'coms_to_validation')]
    public function nbrComsToValid(CommentairesRepository $commentairesRepository): Response
    {
        $comsToValidation = count($commentairesRepository->findBy(['status' => 0]));

        return $this->render('admin/partials/_sidebar.html.twig', [
            // 'controller_name' => 'AdminController',
            'comsToValidation' => $comsToValidation,
        ]);
    }
}

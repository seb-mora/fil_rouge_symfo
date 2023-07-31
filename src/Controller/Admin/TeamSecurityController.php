<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


#[Route('/admin')]
class TeamSecurityController extends AbstractController
{

    public function __construct(private UrlGeneratorInterface $urlGeneratorInterface)
    {
        $this->urlGeneratorInterface = $urlGeneratorInterface;
    }


    #[Route(path: '/login', name: 'admin_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_admin');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('admin/account/index.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'admin_logout')]
    public function logout(): Response
    {
        return new RedirectResponse($this->urlGeneratorInterface->generate('admin_login'));
    }
}

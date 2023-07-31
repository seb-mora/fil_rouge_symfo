<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /admin/partials/_sidebar.html.twig */
class __TwigTemplate_33ab334fcc1181d8fe64f0aa44e2c2d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"/admin\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fa-solid fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">Légion</div>
            </a>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                    <i class=\"fa-solid fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class=\"sidebar-divider\">

            <div class=\"sidebar-heading\">
                <i class=\"fa-solid fa-users\"></i> Administrateur
            </div>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        echo "\"><span>Administrateurs</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"><span>Utilisateurs</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index");
        echo "\"><span>Catégories</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\"><span>Articles</span></a>
            </li>
         
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaires_index");
        echo "\"><span>Commentaires</span></a>
            </li>

            <hr class=\"sidebar-divider d-none d-md-block\">

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link  dropdown-toggle\" href=\"#\" id=\"paramsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Paramètres</span>
                </a>
                <ul class=\"dropdown-menu bg-white ml-3 collapse-inner rounded\" aria-labelledby=\"paramsDropdown\">
                    <li><a class=\"dropdown-item\" href=\"\">Types d'utilisateurs</a></li>
                </ul>
            </li>

            <hr class=\"sidebar-divider d-none d-md-block\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\"><span>Mon profil</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><span>Déconnexion</span></a>
            </li>

            <li class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </li>

        </ul>
    <!-- End of Sidebar -->";
    }

    public function getTemplateName()
    {
        return "/admin/partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 61,  93 => 40,  86 => 36,  80 => 33,  74 => 30,  68 => 27,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/partials/_sidebar.html.twig", "C:\\Users\\Moras\\Desktop\\formationCDA\\symfony\\blog\\my_project_directory\\templates\\admin\\partials\\_sidebar.html.twig");
    }
}

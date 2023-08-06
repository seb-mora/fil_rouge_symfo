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

/* admin/partials/_sidebar.html.twig */
class __TwigTemplate_8ad8664702b2b0edb4b9ffe5bdea6b63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_sidebar.html.twig"));

        // line 1
        echo "<!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"/admin\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fa-solid fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">Sebfony</div>
            </a>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                    <i class=\"fa-solid fa-fw fa-tachometer-alt\"></i>
                    <span>Accueil</span>
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
        echo "\"><span>Catégories </span></a>
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
        echo "\"><span>Commentaires 
                ";
        // line 41
        if (((isset($context["comsToValidation"]) || array_key_exists("comsToValidation", $context) ? $context["comsToValidation"] : (function () { throw new RuntimeError('Variable "comsToValidation" does not exist.', 41, $this->source); })()) && ((isset($context["comsToValidation"]) || array_key_exists("comsToValidation", $context) ? $context["comsToValidation"] : (function () { throw new RuntimeError('Variable "comsToValidation" does not exist.', 41, $this->source); })()) > 0))) {
            // line 42
            echo "                &nbsp;&nbsp;&nbsp;&nbsp; <span style =\"color:#ff5757\">";
            echo twig_escape_filter($this->env, (isset($context["comsToValidation"]) || array_key_exists("comsToValidation", $context) ? $context["comsToValidation"] : (function () { throw new RuntimeError('Variable "comsToValidation" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</span>
                ";
        }
        // line 44
        echo "                </span>     
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        echo "\"><span>Déconnexion</span></a>
            </li>

            <li class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </li>

        </ul>
    <!-- End of Sidebar -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  111 => 44,  105 => 42,  103 => 41,  99 => 40,  92 => 36,  86 => 33,  80 => 30,  74 => 27,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"/admin\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fa-solid fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">Sebfony</div>
            </a>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_admin') }}\">
                    <i class=\"fa-solid fa-fw fa-tachometer-alt\"></i>
                    <span>Accueil</span>
                </a>
            </li>

            <hr class=\"sidebar-divider\">

            <div class=\"sidebar-heading\">
                <i class=\"fa-solid fa-users\"></i> Administrateur
            </div>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_team_index') }}\"><span>Administrateurs</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\"><span>Utilisateurs</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_categories_index') }}\"><span>Catégories </span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_article_index') }}\"><span>Articles</span></a>
            </li>
         
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_commentaires_index') }}\"><span>Commentaires 
                {% if comsToValidation and comsToValidation > 0 %}
                &nbsp;&nbsp;&nbsp;&nbsp; <span style =\"color:#ff5757\">{{comsToValidation}}</span>
                {% endif %}
                </span>     
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('admin_logout') }}\"><span>Déconnexion</span></a>
            </li>

            <li class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </li>

        </ul>
    <!-- End of Sidebar -->", "admin/partials/_sidebar.html.twig", "C:\\Users\\Moras\\Desktop\\formationCDA\\symfony\\blog\\my_project_directory\\templates\\admin\\partials\\_sidebar.html.twig");
    }
}

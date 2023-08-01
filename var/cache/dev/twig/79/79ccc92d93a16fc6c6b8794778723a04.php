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

/* admin/login/admin_login.html.twig */
class __TwigTemplate_17cc00df704df97621db9e89950131b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/login/base_admin_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login/admin_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login/admin_login.html.twig"));

        $this->parent = $this->loadTemplate("admin/login/base_admin_login.html.twig", "admin/login/admin_login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>

.row {
    background-color : #6b0606;
}
</style>
    <div class=\"row justify-content-center\">
                <div class=\"col-xl-10 col-lg-12 col-md-9\">
                    <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
                                <div class=\"col-lg-6 card-block-text\">
                                    <div class=\"p-5\">
                                        <div class=\"text-center\">
                                            <h1 class=\"h4 text-gray-900 mb-4\">Administration</h1>
                                        </div>

                                        <form method=\"post\">
                                            ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "</div>
                                            ";
        }
        // line 26
        echo "
                                            <div class=\"form-group\">
                                                <input type=\"email\" class=\"form-control form-control-user\" aria-describedby=\"emailHelp\" placeholder=\"Votre email ...\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" class=\"form-control form-control-user\"
                                                    id=\"exampleInputPassword\" placeholder=\"Mot de passe\" name=\"password\" id=\"inputPassword\">
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-checkbox small\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                                                    <label class=\"custom-control-label\" for=\"customCheck\">Se souvenir de moi</label>
                                                </div>
                                            </div>

                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                            >

                                            <button class=\"btn btn-primary btn-user btn-block\" type=\"submit\">
                                                Me connecter
                                            </button>
                                        </form>
                                        <br>
                                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_login");
        echo "\">Connection utilisateur</a>
                                  <br>
                                 <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_user_new");
        echo "\"> Créer un compte utilisateur</a>
                                        <hr>
                                        ";
        // line 55
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/login/admin_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 55,  134 => 52,  129 => 50,  118 => 42,  101 => 28,  97 => 26,  91 => 24,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/login/base_admin_login.html.twig' %}

{% block body %}
<style>

.row {
    background-color : #6b0606;
}
</style>
    <div class=\"row justify-content-center\">
                <div class=\"col-xl-10 col-lg-12 col-md-9\">
                    <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
                                <div class=\"col-lg-6 card-block-text\">
                                    <div class=\"p-5\">
                                        <div class=\"text-center\">
                                            <h1 class=\"h4 text-gray-900 mb-4\">Administration</h1>
                                        </div>

                                        <form method=\"post\">
                                            {% if error %}
                                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                            {% endif %}

                                            <div class=\"form-group\">
                                                <input type=\"email\" class=\"form-control form-control-user\" aria-describedby=\"emailHelp\" placeholder=\"Votre email ...\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" class=\"form-control form-control-user\"
                                                    id=\"exampleInputPassword\" placeholder=\"Mot de passe\" name=\"password\" id=\"inputPassword\">
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-checkbox small\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                                                    <label class=\"custom-control-label\" for=\"customCheck\">Se souvenir de moi</label>
                                                </div>
                                            </div>

                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                value=\"{{ csrf_token('authenticate') }}\"
                                            >

                                            <button class=\"btn btn-primary btn-user btn-block\" type=\"submit\">
                                                Me connecter
                                            </button>
                                        </form>
                                        <br>
                                    <a href=\"{{path('user_login')}}\">Connection utilisateur</a>
                                  <br>
                                 <a href=\"{{path('public_user_new')}}\"> Créer un compte utilisateur</a>
                                        <hr>
                                        {# <a href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié</a> #}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{% endblock %}", "admin/login/admin_login.html.twig", "C:\\Users\\Moras\\Desktop\\formationCDA\\symfony\\blog\\my_project_directory\\templates\\admin\\login\\admin_login.html.twig");
    }
}

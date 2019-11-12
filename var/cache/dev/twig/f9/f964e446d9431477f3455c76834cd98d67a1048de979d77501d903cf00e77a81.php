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

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_6613c956cc6c320441e0c8a2ee2bf81743912c370b61fca60820705b3dc8b64a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "<div class=\"text-center\">
    <h1 class=\"h4 text-gray-900 mb-2\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.forget_password", [], "FOSUserBundle"), "html", null, true);
        echo "</h1>
    <p class=\"mb-4\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.help", [], "FOSUserBundle"), "html", null, true);
        echo " </p>
</div>
<form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request user\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control form-control-user\" aria-describedby=\"emailHelp\"
               placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.username", [], "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"username\"
               value=\"\" required=\"required\" autocomplete=\"username\"/>
    </div>
    <div>
        <input class=\"btn btn-primary btn-user btn-block\" type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
    </div>
</form>
<hr>
<div class=\"text-center\">
    <a class=\"small\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.have_an_account", [], "FOSUserBundle"), "html", null, true);
        echo "</a>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  65 => 13,  58 => 9,  52 => 6,  47 => 4,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"text-center\">
    <h1 class=\"h4 text-gray-900 mb-2\">{{ 'resetting.request.forget_password'|trans }}</h1>
    <p class=\"mb-4\"> {{ 'resetting.request.help'|trans }} </p>
</div>
<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request user\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control form-control-user\" aria-describedby=\"emailHelp\"
               placeholder=\"{{ 'resetting.request.username'|trans }}\" id=\"username\" name=\"username\"
               value=\"\" required=\"required\" autocomplete=\"username\"/>
    </div>
    <div>
        <input class=\"btn btn-primary btn-user btn-block\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\"/>
    </div>
</form>
<hr>
<div class=\"text-center\">
    <a class=\"small\" href=\"{{ path('fos_user_security_login') }}\"> {{ 'security.login.have_an_account'|trans }}</a>
</div>", "@FOSUser/Resetting/request_content.html.twig", "/home/mdw/Bureau/projets/symfony4/espace-login-multi-utilisateurs/templates/bundles/FOSUserBundle/Resetting/request_content.html.twig");
    }
}

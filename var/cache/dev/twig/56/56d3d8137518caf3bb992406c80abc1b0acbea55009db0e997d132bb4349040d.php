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

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_a2f0ff0cf4d202906812b38c3d66350724b872c7a52c50813d8bcde9035f3d5d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        // line 1
        echo "              <div class=\"text-center\">
                <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
              </div>
<div class=\"text-center\">
    <h1 class=\"h4 text-gray-900 mb-2\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.forget_password", [], "FOSUserBundle"), "html", null, true);
        echo "</h1>
</div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 7, $this->source); })())]), "attr" => ["class" => "fos_user_resetting_reset"]]);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        echo "
<div>
    <input class=\"btn btn-primary btn-user btn-block\" type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
</div>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
<hr>
<div class=\"text-center\">
    <a class=\"small\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.have_an_account", [], "FOSUserBundle"), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  65 => 12,  60 => 10,  55 => 8,  51 => 7,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}              <div class=\"text-center\">
                <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
              </div>
<div class=\"text-center\">
    <h1 class=\"h4 text-gray-900 mb-2\">{{ 'resetting.reset.forget_password'|trans }}</h1>
</div>
{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
<div>
    <input class=\"btn btn-primary btn-user btn-block\" type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\"/>
</div>
{{ form_end(form) }}
<hr>
<div class=\"text-center\">
    <a class=\"small\" href=\"{{ path('fos_user_security_login') }}\"> {{ 'security.login.have_an_account'|trans }}</a>
</div>
", "@FOSUser/Resetting/reset_content.html.twig", "/home/mdw/Bureau/projets/symfony4/espace-login-multi-utilisateurs/templates/bundles/FOSUserBundle/Resetting/reset_content.html.twig");
    }
}

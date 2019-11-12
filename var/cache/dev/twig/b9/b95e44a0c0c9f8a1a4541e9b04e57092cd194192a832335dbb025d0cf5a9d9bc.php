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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0820d1c8d19d83a0814a4854c0d14db35c0744ec9911f204aa17e284a460c594 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<div class=\"text-center\">
    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
</div>
";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    <div class=\"text-center text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageData", [], "any", false, false, false, 6), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form class=\"user\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 10
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\"/>
    ";
        }
        // line 13
        echo "    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control form-control-user\" aria-describedby=\"emailHelp\"
               placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\"
               value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\"/>

    </div>
    <div class=\"form-group\">
        <input type=\"password\" class=\"form-control form-control-user\"
               placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\"
               autocomplete=\"current-password\"/>

    </div>
    <div class=\"form-group\">
        <div class=\"custom-control custom-checkbox small\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
            <label class=\"custom-control-label\" for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
    </div>
    <input type=\"submit\" class=\"btn btn-primary btn-user btn-block\" id=\"_submit\" name=\"_submit\"
           value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
</form>
<hr>
<div class=\"text-center\">
    <a class=\"small\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.forgot_password", [], "FOSUserBundle"), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  101 => 32,  94 => 28,  84 => 21,  76 => 16,  72 => 15,  68 => 13,  62 => 11,  60 => 10,  56 => 9,  53 => 8,  47 => 6,  45 => 5,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"text-center\">
    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
</div>
{% if error %}
    <div class=\"text-center text-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form class=\"user\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
    {% endif %}
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control form-control-user\" aria-describedby=\"emailHelp\"
               placeholder=\"{{ 'security.login.username'|trans }}\" id=\"username\" name=\"_username\"
               value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\"/>

    </div>
    <div class=\"form-group\">
        <input type=\"password\" class=\"form-control form-control-user\"
               placeholder=\"{{ 'security.login.password'|trans }}\" id=\"password\" name=\"_password\" required=\"required\"
               autocomplete=\"current-password\"/>

    </div>
    <div class=\"form-group\">
        <div class=\"custom-control custom-checkbox small\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
            <label class=\"custom-control-label\" for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
        </div>
    </div>
    <input type=\"submit\" class=\"btn btn-primary btn-user btn-block\" id=\"_submit\" name=\"_submit\"
           value=\"{{ 'security.login.submit'|trans }}\"/>
</form>
<hr>
<div class=\"text-center\">
    <a class=\"small\" href=\"{{ path('fos_user_resetting_request') }}\">{{ 'security.login.forgot_password'|trans }}</a>
</div>
", "@FOSUser/Security/login_content.html.twig", "/home/mdw/Bureau/projets/symfony4/espace-login-multi-utilisateurs/templates/bundles/FOSUserBundle/Security/login_content.html.twig");
    }
}

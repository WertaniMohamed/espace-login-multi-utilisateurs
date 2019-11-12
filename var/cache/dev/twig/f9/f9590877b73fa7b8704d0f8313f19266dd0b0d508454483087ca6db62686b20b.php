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

/* theme/footer.html.twig */
class __TwigTemplate_7a9b29f662d5a25a160ce51c7cfa0230a16aef33e22e98a6580490a7e7d7d6a8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/footer.html.twig"));

        // line 1
        echo "<footer class=\"sticky-footer bg-white\">
    <div class=\"container my-auto\">
        <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "theme/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"sticky-footer bg-white\">
    <div class=\"container my-auto\">
        <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
", "theme/footer.html.twig", "/home/mdw/Bureau/projets/symfony4/espace-login-multi-utilisateurs/templates/theme/footer.html.twig");
    }
}

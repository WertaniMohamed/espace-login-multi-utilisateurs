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

/* base.html.twig */
class __TwigTemplate_5fb26b538b22d6106d1df7370127eda0a1eceec4605da84779a5a99b58aef0e9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'topbar' => [$this, 'block_topbar'],
            'body' => [$this, 'block_body'],
            'heading' => [$this, 'block_heading'],
            'heading_h1' => [$this, 'block_heading_h1'],
            'heading_btn' => [$this, 'block_heading_btn'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'logoutmodal' => [$this, 'block_logoutmodal'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
          rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">
    <!-- Sidebar -->
    ";
        // line 28
        $this->displayBlock('sidebar', $context, $blocks);
        // line 31
        echo "    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">
            <!-- Topbar -->
            ";
        // line 38
        $this->displayBlock('topbar', $context, $blocks);
        // line 41
        echo "            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 383
        echo "            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        ";
        // line 387
        $this->displayBlock('footer', $context, $blocks);
        // line 390
        echo "        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
";
        // line 403
        $this->displayBlock('logoutmodal', $context, $blocks);
        // line 424
        echo "<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Core plugin JavaScript-->
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level plugins -->
<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level custom scripts -->
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-admin-2/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>

";
        // line 442
        echo "

";
        // line 444
        $this->displayBlock('javascripts', $context, $blocks);
        // line 445
        echo "
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SB Admin 2 - Dashboard!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "        ";
        $this->loadTemplate("theme/sidebar.html.twig", "base.html.twig", 29)->display($context);
        // line 30
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_topbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 39
        echo "                ";
        $this->loadTemplate("theme/topbar.html.twig", "base.html.twig", 39)->display($context);
        // line 40
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    ";
        // line 47
        $this->displayBlock('heading', $context, $blocks);
        // line 61
        echo "                    <!-- Content Row -->
                    ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 380
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heading"));

        // line 48
        echo "                        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                            <h1 class=\"h3 mb-0 text-gray-800\">
                                ";
        // line 50
        $this->displayBlock('heading_h1', $context, $blocks);
        // line 51
        echo "                            </h1>
                            ";
        // line 52
        $this->displayBlock('heading_btn', $context, $blocks);
        // line 58
        echo "
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_heading_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heading_h1"));

        echo " WELCOM ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_heading_btn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heading_btn"));

        // line 53
        echo "                                <a href=\"#\"
                                   class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                            class=\"fas fa-download fa-sm text-white-50\"></i> Generate
                                    Report</a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 63
        echo "                        <div class=\"row\">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-primary shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Earnings
                                                    (Monthly)
                                                </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-success shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                    Earnings
                                                    (Annual)
                                                </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-info shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                                    Tasks
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%
                                                        </div>
                                                    </div>
                                                    <div class=\"col\">
                                                        <div class=\"progress progress-sm mr-2\">
                                                            <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                                 style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                                 aria-valuemax=\"100\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-warning shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                    Pending
                                                    Requests
                                                </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Row -->

                        <div class=\"row\">

                            <!-- Area Chart -->
                            <div class=\"col-xl-8 col-lg-7\">
                                <div class=\"card shadow mb-4\">
                                    <!-- Card Header - Dropdown -->
                                    <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                        <div class=\"dropdown no-arrow\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                                 aria-labelledby=\"dropdownMenuLink\">
                                                <div class=\"dropdown-header\">Dropdown Header:</div>
                                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                <div class=\"dropdown-divider\"></div>
                                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class=\"card-body\">
                                        <div class=\"chart-area\">
                                            <canvas id=\"myAreaChart\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <div class=\"col-xl-4 col-lg-5\">
                                <div class=\"card shadow mb-4\">
                                    <!-- Card Header - Dropdown -->
                                    <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                        <div class=\"dropdown no-arrow\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                                 aria-labelledby=\"dropdownMenuLink\">
                                                <div class=\"dropdown-header\">Dropdown Header:</div>
                                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                <div class=\"dropdown-divider\"></div>
                                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class=\"card-body\">
                                        <div class=\"chart-pie pt-4 pb-2\">
                                            <canvas id=\"myPieChart\"></canvas>
                                        </div>
                                        <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                                            <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                                            <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class=\"row\">

                            <!-- Content Column -->
                            <div class=\"col-lg-6 mb-4\">

                                <!-- Project Card Example -->
                                <div class=\"card shadow mb-4\">
                                    <div class=\"card-header py-3\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"small font-weight-bold\">Server Migration <span
                                                    class=\"float-right\">20%</span>
                                        </h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                                 aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                                    class=\"float-right\">40%</span>
                                        </h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                                 aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Customer Database <span
                                                    class=\"float-right\">60%</span></h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                                 aria-valuenow=\"60\"
                                                 aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Payout Details <span
                                                    class=\"float-right\">80%</span>
                                        </h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                                 aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Account Setup <span
                                                    class=\"float-right\">Complete!</span></h4>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                                 aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Color System -->
                                <div class=\"row\">
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-primary text-white shadow\">
                                            <div class=\"card-body\">
                                                Primary
                                                <div class=\"text-white-50 small\">#4e73df</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-success text-white shadow\">
                                            <div class=\"card-body\">
                                                Success
                                                <div class=\"text-white-50 small\">#1cc88a</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-info text-white shadow\">
                                            <div class=\"card-body\">
                                                Info
                                                <div class=\"text-white-50 small\">#36b9cc</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-warning text-white shadow\">
                                            <div class=\"card-body\">
                                                Warning
                                                <div class=\"text-white-50 small\">#f6c23e</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-danger text-white shadow\">
                                            <div class=\"card-body\">
                                                Danger
                                                <div class=\"text-white-50 small\">#e74a3b</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-secondary text-white shadow\">
                                            <div class=\"card-body\">
                                                Secondary
                                                <div class=\"text-white-50 small\">#858796</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class=\"col-lg-6 mb-4\">

                                <!-- Illustrations -->
                                <div class=\"card shadow mb-4\">
                                    <div class=\"card-header py-3\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"text-center\">
                                            <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                                 src=\"img/undraw_posting_photo.svg\" alt=\"\">
                                        </div>
                                        <p>Add some quality, svg illustrations to your project courtesy of <a
                                                    target=\"_blank\"
                                                    rel=\"nofollow\"
                                                    href=\"https://undraw.co/\">unDraw</a>,
                                            a constantly updated collection of beautiful svg images that you can use
                                            completely
                                            free and without attribution!</p>
                                        <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations
                                            on
                                            unDraw &rarr;</a>
                                    </div>
                                </div>

                                <!-- Approach -->
                                <div class=\"card shadow mb-4\">
                                    <div class=\"card-header py-3\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                                    </div>
                                    <div class=\"card-body\">
                                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to
                                            reduce
                                            CSS
                                            bloat and poor page performance. Custom CSS classes are used to create
                                            custom
                                            components and custom utility classes.</p>
                                        <p class=\"mb-0\">Before working with this theme, you should become familiar with
                                            the
                                            Bootstrap framework, especially the utility classes.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 387
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 388
        echo "            ";
        $this->loadTemplate("theme/footer.html.twig", "base.html.twig", 388)->display($context);
        // line 389
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 403
    public function block_logoutmodal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logoutmodal"));

        // line 404
        echo "
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 444
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 444,  693 => 404,  686 => 403,  679 => 389,  676 => 388,  669 => 387,  346 => 63,  339 => 62,  328 => 53,  321 => 52,  308 => 50,  299 => 58,  297 => 52,  294 => 51,  292 => 50,  288 => 48,  281 => 47,  272 => 380,  270 => 62,  267 => 61,  265 => 47,  260 => 44,  253 => 43,  246 => 40,  243 => 39,  236 => 38,  229 => 30,  226 => 29,  219 => 28,  207 => 20,  194 => 12,  183 => 445,  181 => 444,  177 => 442,  172 => 439,  168 => 438,  162 => 435,  156 => 432,  150 => 429,  144 => 426,  140 => 425,  137 => 424,  135 => 403,  120 => 390,  118 => 387,  112 => 383,  110 => 43,  106 => 41,  104 => 38,  95 => 31,  93 => 28,  84 => 21,  82 => 20,  78 => 19,  70 => 14,  65 => 12,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}SB Admin 2 - Dashboard!{% endblock %}</title>
    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
          rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">
    <!-- Sidebar -->
    {% block sidebar %}
        {% include 'theme/sidebar.html.twig' %}
    {% endblock %}
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">
            <!-- Topbar -->
            {% block topbar %}
                {% include 'theme/topbar.html.twig' %}
            {% endblock %}
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            {% block body %}
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    {% block heading %}
                        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                            <h1 class=\"h3 mb-0 text-gray-800\">
                                {% block heading_h1 %} WELCOM {% endblock %}
                            </h1>
                            {% block heading_btn %}
                                <a href=\"#\"
                                   class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                            class=\"fas fa-download fa-sm text-white-50\"></i> Generate
                                    Report</a>
                            {% endblock %}

                        </div>
                    {% endblock %}
                    <!-- Content Row -->
                    {% block content %}
                        <div class=\"row\">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-primary shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Earnings
                                                    (Monthly)
                                                </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-success shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                    Earnings
                                                    (Annual)
                                                </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-info shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                                    Tasks
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%
                                                        </div>
                                                    </div>
                                                    <div class=\"col\">
                                                        <div class=\"progress progress-sm mr-2\">
                                                            <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                                 style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                                 aria-valuemax=\"100\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class=\"col-xl-3 col-md-6 mb-4\">
                                <div class=\"card border-left-warning shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                    Pending
                                                    Requests
                                                </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Row -->

                        <div class=\"row\">

                            <!-- Area Chart -->
                            <div class=\"col-xl-8 col-lg-7\">
                                <div class=\"card shadow mb-4\">
                                    <!-- Card Header - Dropdown -->
                                    <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                        <div class=\"dropdown no-arrow\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                                 aria-labelledby=\"dropdownMenuLink\">
                                                <div class=\"dropdown-header\">Dropdown Header:</div>
                                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                <div class=\"dropdown-divider\"></div>
                                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class=\"card-body\">
                                        <div class=\"chart-area\">
                                            <canvas id=\"myAreaChart\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <div class=\"col-xl-4 col-lg-5\">
                                <div class=\"card shadow mb-4\">
                                    <!-- Card Header - Dropdown -->
                                    <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                        <div class=\"dropdown no-arrow\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                                 aria-labelledby=\"dropdownMenuLink\">
                                                <div class=\"dropdown-header\">Dropdown Header:</div>
                                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                <div class=\"dropdown-divider\"></div>
                                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class=\"card-body\">
                                        <div class=\"chart-pie pt-4 pb-2\">
                                            <canvas id=\"myPieChart\"></canvas>
                                        </div>
                                        <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                                            <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                                            <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class=\"row\">

                            <!-- Content Column -->
                            <div class=\"col-lg-6 mb-4\">

                                <!-- Project Card Example -->
                                <div class=\"card shadow mb-4\">
                                    <div class=\"card-header py-3\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"small font-weight-bold\">Server Migration <span
                                                    class=\"float-right\">20%</span>
                                        </h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                                 aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                                    class=\"float-right\">40%</span>
                                        </h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                                 aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Customer Database <span
                                                    class=\"float-right\">60%</span></h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                                 aria-valuenow=\"60\"
                                                 aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Payout Details <span
                                                    class=\"float-right\">80%</span>
                                        </h4>
                                        <div class=\"progress mb-4\">
                                            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                                 aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <h4 class=\"small font-weight-bold\">Account Setup <span
                                                    class=\"float-right\">Complete!</span></h4>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                                 aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Color System -->
                                <div class=\"row\">
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-primary text-white shadow\">
                                            <div class=\"card-body\">
                                                Primary
                                                <div class=\"text-white-50 small\">#4e73df</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-success text-white shadow\">
                                            <div class=\"card-body\">
                                                Success
                                                <div class=\"text-white-50 small\">#1cc88a</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-info text-white shadow\">
                                            <div class=\"card-body\">
                                                Info
                                                <div class=\"text-white-50 small\">#36b9cc</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-warning text-white shadow\">
                                            <div class=\"card-body\">
                                                Warning
                                                <div class=\"text-white-50 small\">#f6c23e</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-danger text-white shadow\">
                                            <div class=\"card-body\">
                                                Danger
                                                <div class=\"text-white-50 small\">#e74a3b</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-4\">
                                        <div class=\"card bg-secondary text-white shadow\">
                                            <div class=\"card-body\">
                                                Secondary
                                                <div class=\"text-white-50 small\">#858796</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class=\"col-lg-6 mb-4\">

                                <!-- Illustrations -->
                                <div class=\"card shadow mb-4\">
                                    <div class=\"card-header py-3\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"text-center\">
                                            <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                                 src=\"img/undraw_posting_photo.svg\" alt=\"\">
                                        </div>
                                        <p>Add some quality, svg illustrations to your project courtesy of <a
                                                    target=\"_blank\"
                                                    rel=\"nofollow\"
                                                    href=\"https://undraw.co/\">unDraw</a>,
                                            a constantly updated collection of beautiful svg images that you can use
                                            completely
                                            free and without attribution!</p>
                                        <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations
                                            on
                                            unDraw &rarr;</a>
                                    </div>
                                </div>

                                <!-- Approach -->
                                <div class=\"card shadow mb-4\">
                                    <div class=\"card-header py-3\">
                                        <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                                    </div>
                                    <div class=\"card-body\">
                                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to
                                            reduce
                                            CSS
                                            bloat and poor page performance. Custom CSS classes are used to create
                                            custom
                                            components and custom utility classes.</p>
                                        <p class=\"mb-0\">Before working with this theme, you should become familiar with
                                            the
                                            Bootstrap framework, especially the utility classes.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    {% endblock %}

                </div>
            {% endblock %}
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        {% block footer %}
            {% include 'theme/footer.html.twig' %}
        {% endblock %}
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
{% block logoutmodal %}

    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
<!-- Bootstrap core JavaScript-->
<script src=\"{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

<!-- Core plugin JavaScript-->
<script src=\"{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

<!-- Custom scripts for all pages-->
<script src=\"{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}\"></script>

<!-- Page level plugins -->
<script src=\"{{ asset('sb-admin-2/vendor/chart.js/Chart.min.js') }}\"></script>

<!-- Page level custom scripts -->
<script src=\"{{ asset('sb-admin-2/js/demo/chart-area-demo.js') }}\"></script>
<script src=\"{{ asset('sb-admin-2/js/demo/chart-pie-demo.js') }}\"></script>

{#<script src=\"{{ asset('sb-admin-2/') }}') }}\"></script>#}


{% block javascripts %}{% endblock %}

</body>

</html>
", "base.html.twig", "/home/mdw/Bureau/projets/symfony4/espace-login-multi-utilisateurs/templates/base.html.twig");
    }
}

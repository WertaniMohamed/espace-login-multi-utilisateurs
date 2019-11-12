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

/* theme/topbar.html.twig */
class __TwigTemplate_4c5d196fcd89d263ca74b70786065f0f8cf382142a72dfb0dc07827e167e1699 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/topbar.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
        <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Search -->
    <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                   aria-label=\"Search\" aria-describedby=\"basic-addon2\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                    <i class=\"fas fa-search fa-sm\"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ml-auto\">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class=\"nav-item dropdown no-arrow d-sm-none\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                 aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                               placeholder=\"Search for...\" aria-label=\"Search\"
                               aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                    Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-primary\">
                            <i class=\"fas fa-file-alt text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">December 12, 2019</div>
                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-success\">
                            <i class=\"fas fa-donate text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">December 7, 2019</div>
                        \$290.29 has been deposited into your account!
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-warning\">
                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <!-- Counter - Messages -->
                <span class=\"badge badge-danger badge-counter\">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"messagesDropdown\">
                <h6 class=\"dropdown-header\">
                    Message Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div class=\"font-weight-bold\">
                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                            problem I've been having.
                        </div>
                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator\"></div>
                    </div>
                    <div>
                        <div class=\"text-truncate\">I have the photos that you ordered last month, how would
                            you like them sent to you?
                        </div>
                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator bg-warning\"></div>
                    </div>
                    <div>
                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with the
                            progress so far, keep up the good work!
                        </div>
                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div>
                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told
                            me that people say this to all dogs, even if they aren't good...
                        </div>
                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
            </div>
        </li>

        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>
                <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Settings
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Activity Log
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "theme/topbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
        <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Search -->
    <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                   aria-label=\"Search\" aria-describedby=\"basic-addon2\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                    <i class=\"fas fa-search fa-sm\"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ml-auto\">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class=\"nav-item dropdown no-arrow d-sm-none\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                 aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                               placeholder=\"Search for...\" aria-label=\"Search\"
                               aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                    Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-primary\">
                            <i class=\"fas fa-file-alt text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">December 12, 2019</div>
                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-success\">
                            <i class=\"fas fa-donate text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">December 7, 2019</div>
                        \$290.29 has been deposited into your account!
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-warning\">
                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <!-- Counter - Messages -->
                <span class=\"badge badge-danger badge-counter\">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"messagesDropdown\">
                <h6 class=\"dropdown-header\">
                    Message Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div class=\"font-weight-bold\">
                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                            problem I've been having.
                        </div>
                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator\"></div>
                    </div>
                    <div>
                        <div class=\"text-truncate\">I have the photos that you ordered last month, how would
                            you like them sent to you?
                        </div>
                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator bg-warning\"></div>
                    </div>
                    <div>
                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with the
                            progress so far, keep up the good work!
                        </div>
                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                             alt=\"\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div>
                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told
                            me that people say this to all dogs, even if they aren't good...
                        </div>
                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
            </div>
        </li>

        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>
                <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Settings
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Activity Log
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
", "theme/topbar.html.twig", "/home/mdw/Bureau/projets/symfony4/espace-login-multi-utilisateurs/templates/theme/topbar.html.twig");
    }
}

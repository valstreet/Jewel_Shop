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

/* header.twig */
class __TwigTemplate_2ed897f2ea2767637d9e7441473da2ac extends Template
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
        echo "<?php
session_start();
\$loggedIn = isset(\$_SESSION['user_id']);
\$username = \$loggedIn ? \$_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Urban Ice Navigation</title>
</head>
<body>
    
    <header>
<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-transparent \" role=\"navigation\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/public/index.php\">Urban Ice Jewelry</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>   
    <div class=\"sidebar offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
      <div class=\"offcanvas-header text-white border-bottom\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Urban Ice Menu</h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0\">
        <ul class=\"navbar-nav justify-content-center fs-5 flex-grow-1 pe-3\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"/public/index.php\" role=\"menuitem\">Home</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/public/shop.php\" role=\"menuitem\">Shop</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\" role=\"menuitem\">Custom 3D Pieces</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/public/about.php\" role=\"menuitem\">About Us</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/public/contact.php\" role=\"menuitem\">Contact</a>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" role=\"menuitem\">
              Collections
            </a>
            <ul class=\"dropdown-menu dropdown-menu-dark\" role=\"menu\">
              <li><a class=\"dropdown-item\" href=\"/public/rings.php\" role=\"menuitem\">Rings</a></li>
              <li><a class=\"dropdown-item\" href=\"/public/necklace.php\" role=\"menuitem\">Necklaces</a></li>
              <li><a class=\"dropdown-item\" href=\"/public/bracelets.php\" role=\"menuitem\">Bracelets</a></li>
              <li><a class=\"dropdown-item\" href=\"/public/watches.php\" role=\"menuitem\">Watches</a></li>
              <li><a class=\"dropdown-item\" href=\"/public/diamonds.php\" role=\"menuitem\">Diamonds</a></li>

              <li>
                <hr class=\"dropdown-divider\">
              </li>
              <li><a class=\"dropdown-item\" href=\"#\" role=\"menuitem\">3D-Printed Pieces</a></li>
            </ul>
          </li>
<form class=\"d-flex mt-3 search-form\" action=\"/public/search.php\" method=\"get\">
    <input class=\"form-control search-input\" type=\"search\" placeholder=\"Search\" name=\"q\" aria-label=\"Search\">
    <button class=\"btn search-button\" type=\"submit\">Search</button>
</form>


        </ul>
         <div class=\"d-flex flex-column align-items-center flex-lg-row justify-content-center gap-3 mt-4\">
                            ";
        // line 70
        if (($context["loggedIn"] ?? null)) {
            // line 71
            echo "                                <div class=\"d-flex align-items-center\">
                                    <span class=\"nav-link text-white col-lg-8\">Welcome, ";
            // line 72
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "</span>
                                    <a href=\"/public/logout.php\" class=\"btn btn-danger ms-2\">Log Out</a>
                                </div>
                            ";
        } else {
            // line 76
            echo "                                <a href=\"/public/Loginpage.php\" class=\"nav-link text-white\">Log In</a>
                                <a href=\"/public/Loginpage.php\" class=\"btn btn-success ms-2\">Sign Up</a>
                            ";
        }
        // line 79
        echo "                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>

</body>
</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  125 => 79,  120 => 76,  113 => 72,  110 => 71,  108 => 70,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\header.twig");
    }
}

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

/* footer.html */
class __TwigTemplate_25e1390c06d10889d134ef04ebee6afc extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Urban Ice Footer</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/0c3ed67f04.js\" crossorigin=\"anonymous\"></script>
</head>
<body>


    <footer class=\"bg-light text-center text-dark\">
        <div class=\"site-footer container-fluid\">
            <div class=\"footer-newsletter\">
                <h2 class=\"display-2 lead\">Join Our Secret Society</h2>
                <p>Subscribe to our newsletter for exclusive updates and offers:</p>
                <form action=\"/subscribe\" method=\"post\">
                    <input type=\"email\" name=\"email\" placeholder=\"Enter your email address\" required>
                    <button type=\"submit\" class=\"mt-2\">Subscribe</button>
                </form>
            </div>
            
            <div class=\"footer-links container-fluid\">
                <div class=\"footer-column\">
                    <h3>FAQs</h3>
                    <ul>
                        <li><a href=\"/public/about.php\">Shipping Information</a></li>
                        <li><a href=\"/public/about.php\">Returns & Exchanges</a></li>
                        <li><a href=\"/public/about.php\">Payment & Security</a></li>
                    </ul>
                </div>
                <div class=\"footer-column\">
                    <h3>Customer Care</h3>
                    <ul>
                        <li><a href=\"/public/contact.php\">Contact Us</a></li>
                        <li><a href=\"/public/contact.php\">Support Center</a></li>
                    </ul>
                </div>
                <div class=\"footer-column\">
                    <h3>Our Company</h3>
                    <ul>
                        <li><a href=\"/public/about.php\">About Us</a></li>
                    </ul>
                </div>
                <div class=\"footer-column\">
                    <h3>Follow Us</h3>
                    <div class=\"social-links\">
                        <a href=\"#\" class=\"fa fa-facebook\"></a>
                        <a href=\"#\" class=\"fab fa-x-twitter\"></a> 
                        <a href=\"#\" class=\"fa fa-instagram\"></a>
                    </div>
                </div>
            </div>
            <p>&copy; 2023 Urban Ice Online Shop. All rights reserved.</p>
        </div>
    </footer>

    <script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\footer.html");
    }
}

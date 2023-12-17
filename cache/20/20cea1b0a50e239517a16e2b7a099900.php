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

/* custom3D.twig */
class __TwigTemplate_9db50b4cb104e017ed101db1c82f98fd extends Template
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
    <!-- Include necessary meta tags and links -->
    <title>Custom 3D Jewelry - Urban Ice</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/productstyles.css\"> 
</head>

<body>
    ";
        // line 11
        $this->loadTemplate("header.twig", "custom3D.twig", 11)->display($context);
        // line 12
        echo "
    <main class=\"container my-5\">
        <h1>Custom 3D Jewelry Design</h1>
        <p>Welcome to our exclusive 3D jewelry design service. Transform your ideas into stunning jewelry pieces.</p>

        <section>
            <h2>How It Works</h2>
            <p>Describe your concept or upload a sketch, and our skilled designers will work with you to create a unique 3D printed jewelry piece.</p>
            <!-- Steps or process description -->
        </section>

        <section>
            <h2>Contact Us for a Custom Design</h2>
            <form action=\"/public/custom3D.php\" method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"form-label\">Your Name</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\">Email Address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"description\" class=\"form-label\">Description of Your Design</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Submit Request</button>
            </form>
        </section>
    </main>

    ";
        // line 43
        $this->loadTemplate("footer.html", "custom3D.twig", 43)->display($context);
        // line 44
        echo "    <!-- JavaScript files -->
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "custom3D.twig";
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
        return array (  86 => 44,  84 => 43,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "custom3D.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\custom3D.twig");
    }
}

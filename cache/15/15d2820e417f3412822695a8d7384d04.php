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

/* bracelets.twig */
class __TwigTemplate_544cd340a8d087862e035dad7de498dc extends Template
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bracelets Urban Ice</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/ringstyle.css\">
</head>
<body>
    ";
        // line 11
        $this->loadTemplate("header.twig", "bracelets.twig", 11)->display($context);
        // line 12
        echo "
<main class=\"container my-5\">
    <h2 class=\"text-center mb-4\">Our Bracelet Collection</h2>
    <div class=\"row\">
     ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bracelets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bracelet"]) {
            // line 17
            echo "    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <a href=\"/public/product.php?id=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bracelet"], "product_id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bracelet"], "image", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bracelet"], "product_name", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
            </a>
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bracelet"], "product_name", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5>
                <p class=\"card-text\"><strong>Price:</strong> \$";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bracelet"], "price", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                <a href=\"/public/product.php?id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bracelet"], "product_id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"btn btn-primary\">View Details</a>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bracelet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
</main>

    ";
        // line 34
        $this->loadTemplate("footer.php", "bracelets.twig", 34)->display($context);
        // line 35
        echo "    <script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>
</body>
</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bracelets.twig";
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
        return array (  104 => 35,  102 => 34,  96 => 30,  85 => 25,  81 => 24,  77 => 23,  69 => 20,  65 => 19,  61 => 17,  57 => 16,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bracelets.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\bracelets.twig");
    }
}

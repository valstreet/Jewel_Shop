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

/* product_detail.twig */
class __TwigTemplate_1f0a462fd73d0f33075a13d4d1eaff90 extends Template
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
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_name", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/productstyles.css\">
</head>
<body>
    ";
        // line 11
        $this->loadTemplate("header.twig", "product_detail.twig", 11)->display($context);
        // line 12
        echo "
    <main class=\"container my-5\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <!-- Check if product has multiple images -->
                ";
        // line 17
        $context["images"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 17), ";");
        // line 18
        echo "                ";
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 1)) {
            // line 19
            echo "                    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-indicators bg-dark\">
                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                echo "                                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                    echo "class=\"active\" aria-current=\"true\"";
                }
                echo " aria-label=\"Slide ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22), "html", null, true);
                echo "\"></button>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        </div>
                        <div class=\"carousel-inner\">
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "                                <div class=\"carousel-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 27)) {
                    echo "active";
                }
                echo "\">
                                    <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_name", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                                </div>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                ";
        } else {
            // line 42
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_name", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                ";
        }
        // line 44
        echo "            </div>

            <div class=\"col-md-6\">
                <h2>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_name", [], "any", false, false, false, 47), "html", null, true);
        echo "</h2>
                <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                <p><strong>Price:</strong> \$";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                
                <!-- Add to Cart Form -->
                <form action=\"/public/add_to_cart.php\" method=\"post\">
                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
                    <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" class=\"form-control mb-3\">
                    <button type=\"submit\" class=\"btn btn-primary\">Add to Cart</button>
                </form>
            </div>
        </div>
    </main>

    ";
        // line 61
        $this->loadTemplate("footer.php", "product_detail.twig", 61)->display($context);
        // line 62
        echo "    <script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product_detail.twig";
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
        return array (  211 => 62,  209 => 61,  198 => 53,  191 => 49,  187 => 48,  183 => 47,  178 => 44,  170 => 42,  157 => 31,  138 => 28,  131 => 27,  114 => 26,  110 => 24,  87 => 22,  70 => 21,  66 => 19,  63 => 18,  61 => 17,  54 => 12,  52 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product_detail.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\product_detail.twig");
    }
}

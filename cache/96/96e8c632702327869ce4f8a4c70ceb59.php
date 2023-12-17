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

/* shop.twig */
class __TwigTemplate_eccd7d51b2f195e494671926b2e81a35 extends Template
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
    <title>Urban Ice Shop</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/shop-styles.css\">


</head>
<body>
    <!-- Header Section -->
    ";
        // line 14
        $this->loadTemplate("header.twig", "shop.twig", 14)->display($context);
        // line 15
        echo " <div class=\"container my-5 text-center\">
        <h2 class=\"text-center mb-4 text-light fs-1\">Our Collection</h2>
        
        <!-- Row for regular-sized images -->
    <div class=\"row g-4 mb-4\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regularSizeProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "            <div class=\"col-md-6\">
                <div class=\"card h-100\">
                    <!-- Use the link provided in the product array -->
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "alt", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                    </a>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                        <!-- The 'View More' button can also use the same link -->
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"btn btn-primary\">View More</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
<div class= \"container-fluid bg-light text-center pt-5 pb-5 mb-4\">
    <h1 class =\"lead  fs-1 text-dark\">'Minimalistic and Stylish'</h1>
    <p >Delve into magnificent works of art</p>
</div>
        <!-- Rows for wide images -->
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["wideSizeProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "            <div class=\"row g-4 mb-4\">
                <div class=\"col\">
                    <div class=\"card\">
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"card-img-bot\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "alt", [], "any", false, false, false, 47), "html", null, true);
            echo "\"></a>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 49), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 51), "html", null, true);
            echo "\" class=\"btn btn-primary\">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
<!-- The Enigma of Blood Diamonds Section -->
<div class=\"container-fluid pt-5 pb-5 mb-4 text-center\">
    <h2 class=\"lead fs-1 text-dark\">'The Enigma of Blood Diamonds'</h2>
    <a href=\"/public/diamonds.php\" class=\"btn text-dark mt-3 lead fs-4 btn-outline-dark\">Check out the featured collection</a>
</div>

    <!-- Diamond Collection Section -->
    <div class=\"container my-5 text-center\">
        <div class=\"row\">
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diamondCollection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["diamond"]) {
            // line 68
            echo "                <div class=\"col-lg-3 diamond-gallery\">
                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "link", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["diamond"], "images", [], "any", false, false, false, 70));
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
                // line 71
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "title", [], "any", false, false, false, 71), "html", null, true);
                echo "\" class=\"img-fluid mb-3  rounded diamond-image ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 71)) {
                    echo "active";
                }
                echo "\">
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
            // line 73
            echo "                    </a>
                    <div class=\"gallery-navigation\">
                        <span class=\"arrow left-arrow\">&lt;</span>
                        <span class=\"arrow right-arrow\">&gt;</span>
                    </div>
                    <h5>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "title", [], "any", false, false, false, 78), "html", null, true);
            echo "</h5>
                    <p>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "description", [], "any", false, false, false, 79), "html", null, true);
            echo "</p>
                    <a href=\"/public/diamonds.php\" class=\"btn btn-outline-dark mt-2\">Contact us for a quote</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diamond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </div>
    </div>

<<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    document.querySelectorAll('.diamond-gallery').forEach(gallery => {
        const images = gallery.querySelectorAll('.diamond-image');
        const leftArrow = gallery.querySelector('.left-arrow');
        const rightArrow = gallery.querySelector('.right-arrow');

        let currentIndex = 0;

        const showImage = index => {
            images.forEach(img => img.classList.remove('active'));
            images[index].classList.add('active');
        };

        leftArrow.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        });

        rightArrow.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        });
    });
});
</script>

       <script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <!-- Footer Section -->
    ";
        // line 115
        $this->loadTemplate("footer.html", "shop.twig", 115)->display($context);
        // line 116
        echo "
</body>

</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shop.twig";
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
        return array (  270 => 116,  268 => 115,  234 => 83,  224 => 79,  220 => 78,  213 => 73,  190 => 71,  173 => 70,  169 => 69,  166 => 68,  162 => 67,  150 => 57,  138 => 51,  134 => 50,  130 => 49,  123 => 47,  119 => 46,  114 => 43,  110 => 42,  102 => 36,  91 => 31,  86 => 29,  82 => 28,  74 => 25,  70 => 24,  65 => 21,  61 => 20,  54 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\shop.twig");
    }
}

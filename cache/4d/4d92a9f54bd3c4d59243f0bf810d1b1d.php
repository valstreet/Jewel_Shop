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

/* diamonds.twig */
class __TwigTemplate_286f1c11cd7acd21d57aefb028b8c70c extends Template
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
    <title>Diamonds Urban Ice</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/diamondstyle.css\">
</head>
<body>
    ";
        // line 11
        $this->loadTemplate("header.twig", "diamonds.twig", 11)->display($context);
        // line 12
        echo "    <div class=\"container my-5 text-center\">
        <div class=\"row\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diamondCollection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["diamond"]) {
            // line 15
            echo "                <div class=\"col-lg-3 diamond-gallery\">
                    <!-- Link to the product detail page with product_id -->
                    <a href=\"/public/product.php?id=";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "product_id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                        <div class=\"image-container\">
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["diamond"], "images", [], "any", false, false, false, 19));
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
                // line 20
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "title", [], "any", false, false, false, 20), "html", null, true);
                echo "\" class=\"img-fluid mb-3 rounded diamond-image ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
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
            // line 22
            echo "                        </div>
                    </a>
                    <button class=\"btn btn-primary left-arrow\">Left</button>
                    <button class=\"btn btn-primary right-arrow\">Right</button>
                    <h5>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
                    <p class=\"text-dark\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    <!-- 'View Details' button also uses product_id -->
                    <a href=\"/public/product.php?id=";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diamond"], "product_id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"btn btn-outline-dark mt-2\">View Details</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diamond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </div>
    ";
        // line 34
        $this->loadTemplate("footer.php", "diamonds.twig", 34)->display($context);
        // line 35
        echo "
    <script>
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
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "diamonds.twig";
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
        return array (  138 => 35,  136 => 34,  132 => 32,  123 => 29,  118 => 27,  114 => 26,  108 => 22,  85 => 20,  68 => 19,  63 => 17,  59 => 15,  55 => 14,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "diamonds.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\diamonds.twig");
    }
}

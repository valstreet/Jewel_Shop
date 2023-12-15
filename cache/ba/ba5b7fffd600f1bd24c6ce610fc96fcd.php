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

/* about.twig */
class __TwigTemplate_4cf7426b075e722ccc3c83a996945999 extends Template
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
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/aboutstyles.css\">
    <link rel=\"stylesheet\" href=\"/assets/styles.css\">
</head>
<header class = \"bg-dark\">
    ";
        // line 12
        $this->loadTemplate("header.twig", "about.twig", 12)->display($context);
        // line 13
        echo "</header>
<body>

 <section class=\"about-us text-dark text-center lead m-4 p-4\">
    <h1 class = \"fs-1\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aboutUsSection"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aboutUsSection"] ?? null), "paragraphs", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 19
            echo "        <p>";
            echo twig_escape_filter($this->env, $context["paragraph"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " </section>

<section class=\"3d-printing text-dark text-center lead m-4 p-4\">
    <h2>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["printingInnovationSection"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h2>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["printingInnovationSection"] ?? null), "paragraphs", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 26
            echo "        <p>";
            echo twig_escape_filter($this->env, $context["paragraph"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</section>

<section class=\"faqs text-dark text-center\">
    <h2>Frequently Asked Questions</h2>
    <div class=\"accordion\" id=\"faqAccordion\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 34
            echo "            <div class=\"accordion-item\">
                <h3 class=\"accordion-header\" id=\"heading";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                        ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 37), "html", null, true);
            echo "
                    </button>
                </h3>
                <div id=\"collapse";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 42), "html", null, true);
            echo "
                    </div>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>
</section>



<section class=\"contact-info text-dark text-center\">
    <h2>Contact Us</h2>
    <p>
        Address: ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "address", [], "any", false, false, false, 55), "html", null, true);
        echo "<br>
        Phone: ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "phone", [], "any", false, false, false, 56), "html", null, true);
        echo "<br>
        Email: ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 57), "html", null, true);
        echo "
    </p>
</section>

";
        // line 61
        $this->loadTemplate("footer.php", "about.twig", 61)->display($context);
        // line 62
        echo "
<script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\" defer></script>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "about.twig";
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
        return array (  196 => 62,  194 => 61,  187 => 57,  183 => 56,  179 => 55,  169 => 47,  150 => 42,  143 => 40,  137 => 37,  131 => 36,  127 => 35,  124 => 34,  107 => 33,  100 => 28,  91 => 26,  87 => 25,  83 => 24,  78 => 21,  69 => 19,  65 => 18,  61 => 17,  55 => 13,  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\about.twig");
    }
}

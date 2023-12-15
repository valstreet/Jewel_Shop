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

/* contact.twig */
class __TwigTemplate_77ed13fad5596ec8eaa88a08b46808e0 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/contactstyles.css\">
    <link rel=\"stylesheet\" href=\"/assets/styles.css\">
</head>
<body>
 <!-- Header Section -->
    ";
        // line 13
        $this->loadTemplate("header.twig", "contact.twig", 13)->display($context);
        // line 14
        echo "  <main>
        <section class=\"contact-us-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 contact-details\">
                        <h2 class=\"contact-title\">Contact Us</h2>
                        <p class=\"contact-description\">In need of a quote or assistance? Feel free to reach out to us.</p>
                        <div class=\"office-info\">
                            <h4>Our Office</h4>
                            <p><strong>Address:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "address", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                            <p><strong>Email:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                            <p><strong>Phone:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "phone", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 contact-form\">
<form id=\"contactForm\">
    <div class=\"mb-3\">
        <label for=\"name\" class=\"form-label\">Name</label>
        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Enter your name\">
    </div>
    <div class=\"mb-3\">
        <label for=\"email\" class=\"form-label\">Email</label>
        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Enter your email\">
    </div>
    <div class=\"mb-3\">
        <label for=\"message\" class=\"form-label\">Message</label>
        <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"5\" placeholder=\"Your message\"></textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-primary send-btn\">Send Message</button>
</form>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contactForm');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            var formData = new FormData(form);
            fetch('/public/contact_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                if (data.status === 'success') {
                    form.reset(); // Reset the form if submission is successful
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>

</body>
  <!-- Footer Section -->
    ";
        // line 76
        $this->loadTemplate("footer.php", "contact.twig", 76)->display($context);
        // line 77
        echo "</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact.twig";
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
        return array (  131 => 77,  129 => 76,  75 => 25,  71 => 24,  67 => 23,  56 => 14,  54 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\contact.twig");
    }
}

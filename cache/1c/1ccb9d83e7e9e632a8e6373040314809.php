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

/* index.twig */
class __TwigTemplate_e0a4b6375e88a83eea457ee0dbb68255 extends Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>3D Printing Jewel Online Shop</title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    
    <link rel=\"stylesheet\" href=\"/assets/styles.css\">

</head>

<body>
";
        // line 15
        $this->loadTemplate("header.twig", "index.twig", 15)->display($context);
        // line 16
        echo "
<div id=\"videoContainer\">
    <video autoplay muted loop id=\"diamond\" loading=\"lazy\">
        <source src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["diamondVideo"] ?? null), "html", null, true);
        echo "\" type=\"video/mp4\">
    </video>
    <video autoplay muted loop id=\"3dPrint\" loading=\"lazy\">
        <source src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["print3DVideo"] ?? null), "html", null, true);
        echo "\" type=\"video/mp4\">
    </video>
    <video autoplay muted loop id=\"bracelet\" loading=\"lazy\">
        <source src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["braceletVideo"] ?? null), "html", null, true);
        echo "\" type=\"video/mp4\">
    </video>
</div>

<main class=\"main-content\">
    <div class=\"jumbotron jumbotron-fluid text-white\">
        <div class=\"container\">
            <h1 class=\"display-1\">";
        // line 32
        echo twig_escape_filter($this->env, ($context["jumbotronTitle"] ?? null), "html", null, true);
        echo "</h1>
            <p class=\"lead\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["jumbotronSubtitle"] ?? null), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["learnMoreLink"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary mb-3\">Learn More</a>
        </div>
    </div>
</main>

<section class=\"three-cards container-fluid bg-dark rounded p-5\">
    <div class=\"container mt-2 mb-5\">
        <div class=\"row g-4\">
            <div class=\"col-6 col-md-4\">
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["shopNowLink"] ?? null), "html", null, true);
        echo "\" class=\"card-link text-decoration-none\">
                    <div class=\"card rounded hover-card h-100\">
                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["shopImage"] ?? null), "html", null, true);
        echo "\" class=\"card-img-top rounded-top\" alt=\"Shop Now\" loading=\"lazy\">
                        <div class=\"card-body bg-dark text-light\">
                            <h5 class=\"card-title\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["cardTitle1"] ?? null), "html", null, true);
        echo "</h5>
                            <p class=\"lead card-text\">";
        // line 48
        echo twig_escape_filter($this->env, ($context["cardDesc1"] ?? null), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-6 col-md-4\">
                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["customJewelryLink"] ?? null), "html", null, true);
        echo "\" class=\"card-link text-decoration-none\">
                    <div class=\"card rounded hover-card h-100 \">
                        <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["customJewelryImage"] ?? null), "html", null, true);
        echo "\" class=\"card-img-top rounded-top\" alt=\"Custom Jewelry\" loading=\"lazy\">
                        <div class=\"card-body bg-dark text-light\">
                            <h5 class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["cardTitle2"] ?? null), "html", null, true);
        echo "</h5>
                            <p class=\"lead card-text\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["cardDesc2"] ?? null), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-12 col-md-4\">
                <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["discoverUsLink"] ?? null), "html", null, true);
        echo "\" class=\"card-link text-decoration-none\">
                    <div class=\"card rounded hover-card h-100 \">
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["printingImage"] ?? null), "html", null, true);
        echo "\" class=\"card-img-top rounded-top\" alt=\"3D Printing\" loading=\"lazy\">
                        <div class=\"card-body bg-dark text-light\">
                            <h5 class=\"card-title\">";
        // line 69
        echo twig_escape_filter($this->env, ($context["cardTitle3"] ?? null), "html", null, true);
        echo "</h5>
                            <p class=\"lead card-text\">";
        // line 70
        echo twig_escape_filter($this->env, ($context["cardDesc3"] ?? null), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class=\"company-highlights bg-light align-items-center\">
    <div class=\"container bg-light p-5\">
        <div class=\"d-flex flex-column flex-md-row flex-wrap rounded-pill justify-content-center\">
            <div class=\"highlight-item col-12 col-md-4 text-center d-flex flex-column flex-md-row align-items-center justify-content-center  \">
                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["customIcon"] ?? null), "html", null, true);
        echo "\" alt=\"Customization Icon\" class=\"me-2\">
                <strong>Innovative Customization</strong>
            </div>
            <div class=\"highlight-item col-12 col-md-4 text-center d-flex flex-column flex-md-row align-items-center justify-content-center  \">
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["craftsmanshipIcon"] ?? null), "html", null, true);
        echo "\" alt=\"Craftsmanship Icon\" class=\"me-2\">
                <strong>Expert Craftsmanship</strong>
            </div>
            <div class=\"highlight-item col-12 col-md-4 text-center d-flex flex-column flex-md-row align-items-center justify-content-center  \">
                <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["sourcingIcon"] ?? null), "html", null, true);
        echo "\" alt=\"Sourcing Icon\" class=\"me-2\">
                <strong>Ethical Sourcing</strong>
            </div>
            <div class=\"highlight-item col-12 col-md-4 text-center d-flex flex-column flex-md-row align-items-center justify-content-center\">
                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["collectionsIcon"] ?? null), "html", null, true);
        echo "\" alt=\"Collections Icon\" class=\"me-2\">
                <strong>Finest Collections</strong>
            </div>
            <div class=\"highlight-item col-12 col-md-4 text-center d-flex flex-column flex-md-row align-items-center justify-content-center\">
                <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["clientCareIcon"] ?? null), "html", null, true);
        echo "\" alt=\"Customer Service Icon\" class=\"me-2\">
                <strong>Comprehensive Service</strong>
            </div>
        </div>
    </div>
</section>

<section class=\"alpha-male-jewelry bg-secondary text-light\" id=\"printingSection\">
  <div class=\"container py-5\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <h2 class=\"display-4 text-uppercase font-weight-bold\">Define Your Presence</h2>
        <p class=\"lead\">";
        // line 111
        echo twig_escape_filter($this->env, ($context["carouseltext1"] ?? null), "html", null, true);
        echo "</p>
        <p>";
        // line 112
        echo twig_escape_filter($this->env, ($context["carouseltext2"] ?? null), "html", null, true);
        echo "</p>
        <p>";
        // line 113
        echo twig_escape_filter($this->env, ($context["carouseltext3"] ?? null), "html", null, true);
        echo "</p>
      </div>

      <div class=\"col-lg-6\">
  <div id=\"jewelryCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner rounded\">
        <div class=\"carousel-item active\">
            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["carouselImage1"] ?? null), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Exquisite 3D printed ring\">
            <div class=\"carousel-caption d-none d-md-block text-bg\">
                <h5 class=\"animate-text\">Signature Rings</h5>
                <p class=\"animate-text\">The embodiment of strength and sophistication in every detail.</p>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, ($context["carouselImage2"] ?? null), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Elegant 3D printed pendant\">
            <div class=\"carousel-caption d-none d-md-block text-bg\">
                <h5 class=\"animate-text\">Pendants of Power</h5>
                <p class=\"animate-text\">A centerpiece that speaks volumes of your stature.</p>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["carouselImage3"] ?? null), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Sophisticated 3D printed cufflinks\">
            <div class=\"carousel-caption d-none d-md-block text-bg\">
                <h5 class=\"animate-text\">Cufflinks of Character</h5>
                <p class=\"animate-text\">Refined details that complete the look of a modern conqueror.</p>
            </div>
        </div>
    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#jewelryCarousel\" data-bs-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#jewelryCarousel\" data-bs-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Next</span>
    </button>
</div>
</div>
</section>

<section class=\"flip-cards-section container-fluid p-4 text-center bg-dark\">
    <h2 class=\"section-title text-light display-1 pt-3 mt-3\">";
        // line 154
        echo twig_escape_filter($this->env, ($context["sectionTitle"] ?? null), "html", null, true);
        echo "</h2>
    <div class=\"row p-2 \">
        <div class=\"col-md-4 col-sm-6 col-12 mb-4 pt-5 pb-5\">
            <div class=\"flip-card\">
                <div class=\"flip-card-inner\">
                    <div class=\"flip-card-front bg-dark\">
                        <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, ($context["goldRingImage"] ?? null), "html", null, true);
        echo "\" alt=\"Gold Ring\" class=\"card-img rounded\">
                        <h3 class=\"card-title lead text-light\">";
        // line 161
        echo twig_escape_filter($this->env, ($context["goldRingTitle"] ?? null), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"flip-card-back\">
                        <h4>Our Gold Ring</h4>
                        <p>";
        // line 165
        echo twig_escape_filter($this->env, ($context["goldRingDesc"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, ($context["customDesignLink"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-dark\">Contact us to craft your personalized piece</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 col-12 mb-4 pt-5 pb-5\">
            <div class=\"flip-card\">
                <div class=\"flip-card-inner\">
                    <div class=\"flip-card-front bg-dark\">
                        <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, ($context["silverNecklaceImage"] ?? null), "html", null, true);
        echo "\" alt=\"Silver Necklace\" class=\"card-img rounded\">
                        <h3 class=\"card-title lead text-light\">";
        // line 176
        echo twig_escape_filter($this->env, ($context["silverNecklaceTitle"] ?? null), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"flip-card-back\">
                        <h4>Our Silver Necklace</h4>
                        <p>";
        // line 180
        echo twig_escape_filter($this->env, ($context["silverNecklaceDesc"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 181
        echo twig_escape_filter($this->env, ($context["customDesignLink"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-dark\">Contact us to craft your personalized piece</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 col-12 mb-4 pt-5 pb-5\">
             <div class=\"flip-card\">
                <div class=\"flip-card-inner\">
                    <div class=\"flip-card-front bg-dark\">
                        <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, ($context["whiteGoldBraceletImage"] ?? null), "html", null, true);
        echo "\" alt=\"White Gold Bracelet\" class=\"card-img rounded\">
                        <h3 class=\"card-title lead text-light\">";
        // line 191
        echo twig_escape_filter($this->env, ($context["whiteGoldBraceletTitle"] ?? null), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"flip-card-back\">
                        <h4>Our White Gold Bracelet</h4>
                        <p>";
        // line 195
        echo twig_escape_filter($this->env, ($context["whiteGoldBraceletDesc"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 196
        echo twig_escape_filter($this->env, ($context["customDesignLink"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-dark\">Contact us to craft your personalized piece</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=\"testimonials-section\">
    <div class=\"testimonials-container fs-4 lead\">
        <figure class=\"testimonial\">
            <blockquote><p>\"";
        // line 208
        echo twig_escape_filter($this->env, ($context["testimonial1"] ?? null), "html", null, true);
        echo "\"</p></blockquote>
            <figcaption class=\"blockquote-footer text-dark\">";
        // line 209
        echo twig_escape_filter($this->env, ($context["testimonial1Author"] ?? null), "html", null, true);
        echo "</figcaption>
        </figure>
        <figure class=\"testimonial\">
            <blockquote><p>\"";
        // line 212
        echo twig_escape_filter($this->env, ($context["testimonial2"] ?? null), "html", null, true);
        echo "\"</p></blockquote>
            <figcaption class=\"blockquote-footer text-dark\">";
        // line 213
        echo twig_escape_filter($this->env, ($context["testimonial2Author"] ?? null), "html", null, true);
        echo "</figcaption>
        </figure>
        <figure class=\"testimonial\">
            <blockquote><p>\"";
        // line 216
        echo twig_escape_filter($this->env, ($context["testimonial3"] ?? null), "html", null, true);
        echo "\"</p></blockquote>
            <figcaption class=\"blockquote-footer text-dark\">";
        // line 217
        echo twig_escape_filter($this->env, ($context["testimonial3Author"] ?? null), "html", null, true);
        echo "</figcaption>
        </figure>
        <figure class=\"testimonial\">
            <blockquote><p>\"";
        // line 220
        echo twig_escape_filter($this->env, ($context["testimonial4"] ?? null), "html", null, true);
        echo "\"</p></blockquote>
            <figcaption class=\"blockquote-footer text-dark\">";
        // line 221
        echo twig_escape_filter($this->env, ($context["testimonial4Author"] ?? null), "html", null, true);
        echo "</figcaption>
        </figure>
        <figure class=\"testimonial\">
            <blockquote><p>\"";
        // line 224
        echo twig_escape_filter($this->env, ($context["testimonial5"] ?? null), "html", null, true);
        echo "\"</p></blockquote>
            <figcaption class=\"blockquote-footer text-dark\">";
        // line 225
        echo twig_escape_filter($this->env, ($context["testimonial5Author"] ?? null), "html", null, true);
        echo "</figcaption>
        </figure>
        <figure class=\"testimonial\">
            <blockquote><p>\"";
        // line 228
        echo twig_escape_filter($this->env, ($context["testimonial6"] ?? null), "html", null, true);
        echo "\"</p></blockquote>
            <figcaption class=\"blockquote-footer text-dark\">";
        // line 229
        echo twig_escape_filter($this->env, ($context["testimonial6Author"] ?? null), "html", null, true);
        echo "</figcaption>
        </figure>
    </div>
    <div class=\"cta-button-container\">
        <a href=\"";
        // line 233
        echo twig_escape_filter($this->env, ($context["customDesignLink"] ?? null), "html", null, true);
        echo "\" class=\"btn cta-button lead\">Start Your Custom Design</a>
    </div>
</section>

<script src=\"/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"/assets/main.js\" defer></script>
";
        // line 239
        $this->loadTemplate("footer.php", "index.twig", 239)->display($context);
        // line 240
        echo "
</body>
</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.twig";
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
        return array (  447 => 240,  445 => 239,  436 => 233,  429 => 229,  425 => 228,  419 => 225,  415 => 224,  409 => 221,  405 => 220,  399 => 217,  395 => 216,  389 => 213,  385 => 212,  379 => 209,  375 => 208,  360 => 196,  356 => 195,  349 => 191,  345 => 190,  333 => 181,  329 => 180,  322 => 176,  318 => 175,  306 => 166,  302 => 165,  295 => 161,  291 => 160,  282 => 154,  259 => 134,  249 => 127,  239 => 120,  229 => 113,  225 => 112,  221 => 111,  206 => 99,  199 => 95,  192 => 91,  185 => 87,  178 => 83,  162 => 70,  158 => 69,  153 => 67,  148 => 65,  139 => 59,  135 => 58,  130 => 56,  125 => 54,  116 => 48,  112 => 47,  107 => 45,  102 => 43,  90 => 34,  86 => 33,  82 => 32,  72 => 25,  66 => 22,  60 => 19,  55 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\index.twig");
    }
}

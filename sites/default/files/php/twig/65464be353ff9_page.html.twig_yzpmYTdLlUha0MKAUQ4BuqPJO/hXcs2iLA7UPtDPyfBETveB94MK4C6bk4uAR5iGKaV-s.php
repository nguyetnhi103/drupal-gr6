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

/* themes/contrib/decorx/templates/layout/page.html.twig */
class __TwigTemplate_d690419c32cf8091cf395566373f516e extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["front_header"] = ((($context["is_front"] ?? null)) ? ("front-header") : ("nofront-header"));
        // line 2
        echo "<div class=\"layout-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_header"] ?? null), 2, $this->source), "html", null, true);
        echo "\">
    <!-- Start: Header Section -->
  <header id=\"header\" class=\"header d-flex align-items-center main-header\">
    <div class=\"container\">
      <nav class=\"navbar navbar-expand-lg navbar-light .bg-transparent\">
        <div class=\"container\">
          ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 8)) {
            // line 9
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 11
        echo "          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse justify-content-end m-auto\" id=\"navbarNavDropdown\">
            ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 13)) {
            // line 14
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 16
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 16)) {
            // line 17
            echo "              <div class=\"full-page-search\">
                <div class=\"search-icon\">
                  <a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a>
                </div>
                <div class=\"search-box\">
                  <div class=\"search-close\"></div>
                  <div class=\"search-content\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>
                  <div class=\"search-close\">×</div>
                </div>
              </div>
            ";
        }
        // line 28
        echo "          </div>
        </div>
        <div class=\"align-items-end d-flex\"></div>
      </nav>
    </div>
  </header>
      <!-- End: Header Section -->
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    <!-- Start: Slider Section -->
    ";
        // line 38
        if (($context["is_front"] ?? null)) {
            // line 39
            echo "      <section class=\"slider-section\">
        ";
            // line 40
            if (($context["show_slideshow"] ?? null)) {
                // line 41
                echo "          <div class=\"container-fluid p-0\">
            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                    // line 43
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 43, $this->source));
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            <a class=\"prev\" onclick=\"plusSlides(-1)\">❮</a>
            <a id=\"next\" class=\"next\" onclick=\"plusSlides(1)\">❯</a>
          </div>
        ";
            }
            // line 49
            echo "      </section>
    ";
        }
        // line 51
        echo "    <!-- End: Slider Section -->
      <!-- Start: Content Section -->
    <div class=\"layout-content container\" data-aos=\"fade-right \" data-aos-delay=\"250\">
      ";
        // line 54
        if ( !($context["is_front"] ?? null)) {
            // line 55
            echo "        <div class=\"inner-content\">
        <div class=\"decorx-breadcrumb\">
          ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 60
        echo "      <div class=\"tabs\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</div>
      <div class=\"page-title\">";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "</div>
      <div class=\"highlighted\">";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "</div>
      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
      ";
        // line 64
        if ( !($context["is_front"] ?? null)) {
            echo " 
        </div>
      ";
        }
        // line 67
        echo "    </div>
  </main>
    <!-- End: Content Section -->
      <!-- Start: Footer Section -->
  <section id=\"last-section\" class=\"section\"></section>
  <footer id=\"footer\" class=\"footer\">
    <div class=\"footer-content position-relative\">
      <div class=\"container\">
        <div class=\"row fl\">
          <div class=\"col-md-4 footer-links\">
            ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 77)) {
            // line 78
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 80
        echo "
            ";
        // line 81
        if (($context["about_title"] ?? null)) {
            // line 82
            echo "              <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["about_title"] ?? null), 82, $this->source), "html", null, true);
            echo "</h2>
            ";
        }
        // line 84
        echo "            ";
        if (($context["about_description"] ?? null)) {
            // line 85
            echo "              <p class=\"decorx-about\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["about_description"] ?? null), 85, $this->source), "<ul><li><p>"));
            echo "</p>
            ";
        }
        // line 87
        echo "
            ";
        // line 88
        if (($context["show_social_icons"] ?? null)) {
            // line 89
            echo "              <div class=\"social-links\">
                ";
            // line 90
            if (($context["twitter_url"] ?? null)) {
                // line 91
                echo "                  <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 91, $this->source), "html", null, true);
                echo "\" class=\"d-flex align-items-center justify-content-center\"><i class=\"fa fa-twitter\"></i></a>
                ";
            }
            // line 93
            echo "                ";
            if (($context["facebook_url"] ?? null)) {
                // line 94
                echo "                  <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 94, $this->source), "html", null, true);
                echo "\" class=\"d-flex align-items-center justify-content-center\"><i class=\"fa fa-facebook\"></i></a>
                ";
            }
            // line 96
            echo "                ";
            if (($context["instagram_url"] ?? null)) {
                // line 97
                echo "                  <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 97, $this->source), "html", null, true);
                echo "\" class=\"d-flex align-items-center justify-content-center\"><i class=\"fa fa-instagram\"></i></a>
                ";
            }
            // line 99
            echo "                ";
            if (($context["linkedin_url"] ?? null)) {
                // line 100
                echo "                  <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 100, $this->source), "html", null, true);
                echo "\" class=\"d-flex align-items-center justify-content-center\"><i class=\"fa fa-linkedin\"></i></a>
                ";
            }
            // line 102
            echo "              </div>
            ";
        }
        // line 104
        echo "          </div>
          <div class=\"col-md-4 footer-links mt\">
            ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 106)) {
            // line 107
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 109
        echo "            ";
        if (($context["contact_title"] ?? null)) {
            // line 110
            echo "              <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_title"] ?? null), 110, $this->source), "html", null, true);
            echo "</h2>
            ";
        }
        // line 112
        echo "            ";
        if (($context["contact_description"] ?? null)) {
            // line 113
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["contact_description"] ?? null), 113, $this->source), "<ul><li><p>"));
            echo "
            ";
        }
        // line 115
        echo "          </div>
          <div class=\"col-md-4 footer-links mt\">
            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 117)) {
            // line 118
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 120
        echo "            ";
        if ((($context["footer_newsletter_on"] ?? null) == 1)) {
            // line 121
            echo "              <h2>Subscribe</h2>
              <div class=\"form-group row form-row align-items-center mb-0\">
                <div class=\"col-sm-9\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Email Address"));
            echo "\" />
                </div>
                <div class=\"col-sm-3\">
                  <a href=\"#\" class=\"btn btn-light subscribe\">";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Subscribe"));
            echo "</a>
                </div>
              </div>
            ";
        }
        // line 131
        echo "          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-legal text-center position-relative\">
      <div class=\"container\">
        <div class=\"copyright\">
          ";
        // line 138
        if (($context["show_copyright"] ?? null)) {
            // line 139
            echo "            ";
            if (($context["copyright_text"] ?? null)) {
                // line 140
                echo "              <p class=\"footer-para\">
                <span id=\"displayYear\">© ";
                // line 141
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 141, $this->source), "html", null, true);
                echo "</span>
                ";
                // line 142
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 142, $this->source), "html", null, true);
                echo "
              </p>
            ";
            }
            // line 145
            echo "          ";
        }
        // line 146
        echo "        </div>
      </div>
    </div>
  </footer>
    <!-- End: Footer Section -->
  ";
        // line 151
        if (($context["scrolltotop_on"] ?? null)) {
            // line 152
            echo "    <div class=\"scrolltop\">
      <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
    </div>
  ";
        }
        // line 156
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/decorx/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 156,  366 => 152,  364 => 151,  357 => 146,  354 => 145,  348 => 142,  342 => 141,  339 => 140,  336 => 139,  334 => 138,  325 => 131,  318 => 127,  312 => 124,  307 => 121,  304 => 120,  298 => 118,  296 => 117,  292 => 115,  286 => 113,  283 => 112,  277 => 110,  274 => 109,  268 => 107,  266 => 106,  262 => 104,  258 => 102,  252 => 100,  249 => 99,  243 => 97,  240 => 96,  234 => 94,  231 => 93,  225 => 91,  223 => 90,  220 => 89,  218 => 88,  215 => 87,  209 => 85,  206 => 84,  200 => 82,  198 => 81,  195 => 80,  189 => 78,  187 => 77,  175 => 67,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  152 => 60,  146 => 57,  142 => 55,  140 => 54,  135 => 51,  131 => 49,  125 => 45,  116 => 43,  112 => 42,  109 => 41,  107 => 40,  104 => 39,  102 => 38,  90 => 28,  82 => 23,  74 => 17,  71 => 16,  65 => 14,  63 => 13,  59 => 11,  53 => 9,  51 => 8,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/decorx/templates/layout/page.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\decorx\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8, "for" => 42);
        static $filters = array("escape" => 2, "raw" => 43, "striptags" => 85, "t" => 124, "date" => 141);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'raw', 'striptags', 't', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

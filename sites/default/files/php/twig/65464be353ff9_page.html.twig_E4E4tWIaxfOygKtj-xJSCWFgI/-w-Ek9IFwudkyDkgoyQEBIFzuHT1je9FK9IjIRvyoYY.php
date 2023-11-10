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

/* themes/contrib/rover/templates/layout/page.html.twig */
class __TwigTemplate_d0957632697f80d6771890f008600935 extends Template
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
        // line 48
        echo "<div class=\"page\">

  <header role=\"banner\">
    <div class=\"px-4 navbar navbar-expand-lg navbar-dark ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_bg_colors"] ?? null), 51, $this->source), "html", null, true);
        echo "\">
      ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
      ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 53)) {
            // line 54
            echo "        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#main_nav\" aria-controls=\"main_nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
        ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_menu", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 60
        echo "    </div>
  </header>

  ";
        // line 63
        if (($context["is_front"] ?? null)) {
            // line 64
            echo "    ";
            if (($context["banner_display"] ?? null)) {
                // line 65
                echo "      <section class=\"site-section bg-image site-banner\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_path"] ?? null), 65, $this->source), "html", null, true);
                echo ");\">
        <div class=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 66, $this->source), "html", null, true);
                echo "\">
          <div class=\"row justify-content-center\">
            <div class=\"col-md-7 mx-auto text-center align-self-center\">
              ";
                // line 69
                if (($context["banner_title"] ?? null)) {
                    // line 70
                    echo "                <h1 class=\"font-weight-bold mb-0 text-white\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_title"] ?? null), 70, $this->source), "html", null, true);
                    echo "</h1>
              ";
                }
                // line 72
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["banner_desc"] ?? null), "value", [], "any", false, false, true, 72)) {
                    // line 73
                    echo "                <div class=\"text-white\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["banner_desc"] ?? null), "value", [], "any", false, false, true, 73), 73, $this->source));
                    echo "</div>
              ";
                }
                // line 75
                echo "              ";
                if (($context["banner_url_title"] ?? null)) {
                    // line 76
                    echo "                ";
                    if (($context["banner_url"] ?? null)) {
                        // line 77
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_url"] ?? null), 77, $this->source), "html", null, true);
                        echo "\" class=\"btn btn-primary px-4 py-3\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_url_title"] ?? null), 77, $this->source), "html", null, true);
                        echo "</a>
                ";
                    } else {
                        // line 79
                        echo "                  <span class=\"btn-primary px-4 py-3\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_url_title"] ?? null), 79, $this->source), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 81
                    echo "              ";
                }
                // line 82
                echo "            </div>
          </div>
        </div>
      </section>
    ";
            }
            // line 87
            echo "  ";
        }
        // line 88
        echo "
  ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 89)) {
            // line 90
            echo "    <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 90, $this->source), "html", null, true);
            echo "\">
      ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "

  ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "

  <main role=\"main\" class=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 99, $this->source), "html", null, true);
        echo "\">
    <div class=\"row\">
      <a id=\"main-content\" tabindex=\"-1\"></a>
      ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 102)) {
            // line 103
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 103, $this->source), "html", null, true);
            echo ">
          <aside class=\"layout-sidebar-first\" role=\"complementary\">
            ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 109
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 109, $this->source), "html", null, true);
        echo ">
        <section class=\"section\">
          ";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
        </section>
      </div>
      ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 114)) {
            // line 115
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 115, $this->source), "html", null, true);
            echo ">
          <aside class=\"layout-sidebar-second\" role=\"complementary\">
            ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 121
        echo "    </div>
  </main>

  ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 124)) {
            // line 125
            echo "    <footer class=\"site-footer\" role=\"contentinfo\">
      <div class=\"";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 126, $this->source), "html", null, true);
            echo "\">
        ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 131
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rover/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 131,  230 => 127,  226 => 126,  223 => 125,  221 => 124,  216 => 121,  209 => 117,  203 => 115,  201 => 114,  195 => 111,  189 => 109,  182 => 105,  176 => 103,  174 => 102,  168 => 99,  163 => 97,  158 => 95,  155 => 94,  149 => 91,  144 => 90,  142 => 89,  139 => 88,  136 => 87,  129 => 82,  126 => 81,  120 => 79,  112 => 77,  109 => 76,  106 => 75,  100 => 73,  97 => 72,  91 => 70,  89 => 69,  83 => 66,  78 => 65,  75 => 64,  73 => 63,  68 => 60,  63 => 58,  59 => 57,  54 => 54,  52 => 53,  48 => 52,  44 => 51,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rover/templates/layout/page.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\rover\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 53);
        static $filters = array("escape" => 51, "raw" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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

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

/* themes/contrib/revolt/templates/views/views-view-table.html.twig */
class __TwigTemplate_98f9c3bd7785ec55b3dc8a5a8a17c23e extends Template
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
        // line 34
        $context["classes"] = [0 => "vt-items-table", 1 => "vt-table", 2 => ((        // line 37
($context["hover"] ?? null)) ? ("vt-table-hover") : ("")), 3 =>         // line 38
($context["table_class"] ?? null), 4 => "vt-view-table", 5 => ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 40
($context["header"] ?? null), 40, $this->source))), 6 => ((        // line 41
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 7 => ((        // line 42
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 45
        echo "<div class=\"vt-table\">
<table";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo ">
  ";
        // line 47
        if (($context["caption_needed"] ?? null)) {
            // line 48
            echo "    <caption>
    ";
            // line 49
            if (($context["caption"] ?? null)) {
                // line 50
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 50, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 52
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 52, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 54
            echo "    ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 55
                echo "      <details>
        ";
                // line 56
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 57
                    echo "          <summary>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 57, $this->source), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 59
                echo "        ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 60
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 60, $this->source), "html", null, true);
                    echo "
        ";
                }
                // line 62
                echo "      </details>
    ";
            }
            // line 64
            echo "    </caption>
  ";
        }
        // line 66
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 67
            echo "    <thead class='";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["thead_class"] ?? null), 67, $this->source), "html", null, true);
            echo "'>
      <tr class=\"vt-table-head-row\">
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 70
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 70)) {
                    // line 71
                    echo "            ";
                    // line 72
                    $context["column_classes"] = [0 => "vt-table-head-cell", 1 => ("vt-table-head-cell-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 74
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 74, $this->source))];
                    // line 77
                    echo "          ";
                }
                // line 78
                echo "          <th";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 78), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 78), "setAttribute", [0 => "scope", 1 => "col"], "method", false, false, true, 78), 78, $this->source), "html", null, true);
                echo ">";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 79)) {
                    // line 80
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo ">";
                    // line 81
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 81)) {
                        // line 82
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 84
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    }
                    // line 86
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 88
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 88)) {
                        // line 89
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 91
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                    }
                }
                // line 94
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "      </tr>
    </thead>
  ";
        }
        // line 99
        echo "  <tbody class=\"vt-table-body\">
    ";
        // line 107
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 108
            echo "      ";
            // line 109
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo ">
        ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 110));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 111
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 111)) {
                    // line 112
                    echo "            ";
                    // line 113
                    $context["column_classes"] = [0 => "vt-table-cell"];
                    // line 117
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 117));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 118
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 118, $this->source), [0 => ("vt-table-cell-" . $this->sandbox->ensureToStringAllowed($context["field"], 118, $this->source))]);
                        // line 119
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "          ";
                }
                // line 121
                echo "          <td";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 121), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 121), 121, $this->source), "html", null, true);
                echo ">";
                // line 122
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 122)) {
                    // line 123
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 124));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 125
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "              </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 129));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 130
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 133
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "  </tbody>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/revolt/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 137,  279 => 135,  272 => 133,  264 => 130,  260 => 129,  255 => 127,  245 => 125,  241 => 124,  236 => 123,  234 => 122,  230 => 121,  227 => 120,  221 => 119,  218 => 118,  213 => 117,  211 => 113,  209 => 112,  206 => 111,  202 => 110,  197 => 109,  195 => 108,  190 => 107,  187 => 99,  182 => 96,  175 => 94,  170 => 91,  160 => 89,  158 => 88,  153 => 86,  149 => 84,  139 => 82,  137 => 81,  133 => 80,  131 => 79,  127 => 78,  124 => 77,  122 => 74,  121 => 72,  119 => 71,  116 => 70,  112 => 69,  106 => 67,  103 => 66,  99 => 64,  95 => 62,  89 => 60,  86 => 59,  80 => 57,  78 => 56,  75 => 55,  72 => 54,  66 => 52,  60 => 50,  58 => 49,  55 => 48,  53 => 47,  49 => 46,  46 => 45,  44 => 42,  43 => 41,  42 => 40,  41 => 38,  40 => 37,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/revolt/templates/views/views-view-table.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\revolt\\templates\\views\\views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 47, "for" => 69);
        static $filters = array("length" => 40, "escape" => 46, "merge" => 118);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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

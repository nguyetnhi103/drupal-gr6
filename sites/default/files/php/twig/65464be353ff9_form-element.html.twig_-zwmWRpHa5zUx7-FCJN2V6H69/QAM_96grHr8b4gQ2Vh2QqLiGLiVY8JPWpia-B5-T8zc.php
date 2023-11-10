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

/* themes/contrib/rover/templates/form/form-element.html.twig */
class __TwigTemplate_b634f4a11a2651d59791cbf87429d4d3 extends Template
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
        // line 47
        echo "
";
        // line 49
        $context["label_attributes"] = ((($context["label_attributes"] ?? null)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        echo "
";
        // line 53
        $context["classes"] = [0 => "form-wraper", 1 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["type"] ?? null), 55, $this->source))), 2 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["name"] ?? null), 56, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 57
($context["name"] ?? null), 57, $this->source))), 4 => ((!twig_in_filter(        // line 58
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 5 => (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), 6 => ((        // line 60
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 63
        echo "
";
        // line 64
        if ((($context["title_display"] ?? null) == "invisible")) {
            // line 65
            echo "  ";
            if (array_key_exists("labelclass", $context)) {
                // line 66
                echo "    ";
                $context["labelclass"] = ($this->sandbox->ensureToStringAllowed(($context["labelclass"] ?? null), 66, $this->source) . " visually-hidden");
                // line 67
                echo "  ";
            } else {
                // line 68
                echo "    ";
                $context["labelclass"] = "visually-hidden";
                // line 69
                echo "  ";
            }
        }
        // line 71
        echo "
";
        // line 73
        $context["description_classes"] = [0 => "description", 1 => "text-muted", 2 => (((($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 75
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 76
            echo "    ";
            // line 77
            $context["style_classes"] = [0 => "custom-control", 1 => "form-wraper", 2 => ("custom-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 80
($context["type"] ?? null), 80, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 81
($context["name"] ?? null), 81, $this->source)))];
            // line 84
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["style_classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            echo ">
    ";
            // line 85
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 86
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 86, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 88
            echo "
    ";
            // line 89
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 89))) {
                // line 90
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo ">
        ";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 94
            echo "
    ";
            // line 95
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 96
                echo "      <input";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null), 1 => "custom-control-input"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "></input>
      <label ";
                // line 97
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null), 1 => "custom-control-label"], "method", false, false, true, 97), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 97)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
                echo ">
        ";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 98, $this->source));
                echo "
      </label>
    ";
            }
            // line 101
            echo "
    ";
            // line 102
            if ((($context["checkbox_style"] ?? null) == "form-button")) {
                // line 103
                echo "      <input";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null), 1 => "custom-control-input"], "method", false, false, true, 103), "setAttribute", [0 => "autocomplete", 1 => "off"], "method", false, false, true, 103), 103, $this->source), "html", null, true);
                echo ">
    ";
            }
            // line 105
            echo "
    ";
            // line 106
            if ((($context["label_display"] ?? null) == "after")) {
                // line 107
                echo "      <input";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null), 1 => "custom-control-input"], "method", false, false, true, 107), 107, $this->source), "html", null, true);
                echo ">
      <label ";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null), 1 => "custom-control-label"], "method", false, false, true, 108), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 108)], "method", false, false, true, 108), 108, $this->source), "html", null, true);
                echo ">
        ";
                // line 109
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 109, $this->source));
                echo "
      </label>
    ";
            }
            // line 112
            echo "
    ";
            // line 113
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 114
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 114, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 116
            echo "
    ";
            // line 117
            if (($context["errors"] ?? null)) {
                // line 118
                echo "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 119, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 122
            echo "
    ";
            // line 123
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 123))) {
                // line 124
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 124), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 124), 124, $this->source), "html", null, true);
                echo ">
        ";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 128
            echo "
  </div>

";
        } else {
            // line 132
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 132), 132, $this->source), "html", null, true);
            echo ">
    ";
            // line 133
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 134
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 134, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 136
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 137
                echo "      <div class=\"input-group";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["errors"] ?? null)) ? (" is-invalid") : ("")));
                echo "\">
    ";
            }
            // line 139
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 140
                echo "      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">";
                // line 141
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 141, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 144
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 144))) {
                // line 145
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                echo ">
        ";
                // line 146
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 149
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 149, $this->source), "html", null, true);
            echo "
    ";
            // line 150
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 151
                echo "      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">";
                // line 152
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 152, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 155
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 156
                echo "      </div>
    ";
            }
            // line 158
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 159
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 159, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 161
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 162
                echo "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 163
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 163, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 166
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 166))) {
                // line 167
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 167), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 167), 167, $this->source), "html", null, true);
                echo ">
        ";
                // line 168
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 171
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/rover/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 171,  316 => 168,  311 => 167,  308 => 166,  302 => 163,  299 => 162,  296 => 161,  290 => 159,  287 => 158,  283 => 156,  280 => 155,  274 => 152,  271 => 151,  269 => 150,  264 => 149,  258 => 146,  253 => 145,  250 => 144,  244 => 141,  241 => 140,  238 => 139,  232 => 137,  229 => 136,  223 => 134,  221 => 133,  216 => 132,  210 => 128,  204 => 125,  199 => 124,  197 => 123,  194 => 122,  188 => 119,  185 => 118,  183 => 117,  180 => 116,  174 => 114,  172 => 113,  169 => 112,  163 => 109,  159 => 108,  154 => 107,  152 => 106,  149 => 105,  143 => 103,  141 => 102,  138 => 101,  132 => 98,  128 => 97,  123 => 96,  121 => 95,  118 => 94,  112 => 91,  107 => 90,  105 => 89,  102 => 88,  96 => 86,  94 => 85,  89 => 84,  87 => 81,  86 => 80,  85 => 77,  83 => 76,  81 => 75,  79 => 73,  76 => 71,  72 => 69,  69 => 68,  66 => 67,  63 => 66,  60 => 65,  58 => 64,  55 => 63,  53 => 60,  52 => 59,  51 => 58,  50 => 57,  49 => 56,  48 => 55,  47 => 53,  44 => 51,  42 => 49,  39 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rover/templates/form/form-element.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\rover\\templates\\form\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 64);
        static $filters = array("clean_class" => 55, "escape" => 84, "raw" => 98);
        static $functions = array("create_attribute" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['create_attribute']
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

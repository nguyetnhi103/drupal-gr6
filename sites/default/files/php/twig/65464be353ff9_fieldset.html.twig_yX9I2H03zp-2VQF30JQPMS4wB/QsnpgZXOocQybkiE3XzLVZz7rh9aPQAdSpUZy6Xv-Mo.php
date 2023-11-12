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

/* themes/contrib/revolt/templates/form/fieldset.html.twig */
class __TwigTemplate_4540774172778a13f112029e0b722d1e extends Template
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
        // line 24
        $context["classes"] = [0 => "vt-form-wraper", 1 => "form-wrapper", 2 => ((        // line 27
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 30
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
  ";
        // line 32
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 34
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 35
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 38
        echo "  ";
        // line 39
        echo "  <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
    <span";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 40), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 43
        if (($context["errors"] ?? null)) {
            // line 44
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 45, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 48
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 49
            echo "      <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 49, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 51
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 51, $this->source), "html", null, true);
        echo "
    ";
        // line 52
        if (($context["suffix"] ?? null)) {
            // line 53
            echo "      <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 53, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 55
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 55)) {
            // line 56
            echo "      <small";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 56), "addClass", [0 => "description", 1 => "text-muted"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</small>
    ";
        }
        // line 58
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/revolt/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 58,  102 => 56,  99 => 55,  93 => 53,  91 => 52,  86 => 51,  80 => 49,  77 => 48,  71 => 45,  68 => 44,  66 => 43,  58 => 40,  53 => 39,  51 => 38,  49 => 35,  48 => 34,  47 => 32,  42 => 30,  40 => 27,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/revolt/templates/form/fieldset.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\revolt\\templates\\form\\fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 43);
        static $filters = array("escape" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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

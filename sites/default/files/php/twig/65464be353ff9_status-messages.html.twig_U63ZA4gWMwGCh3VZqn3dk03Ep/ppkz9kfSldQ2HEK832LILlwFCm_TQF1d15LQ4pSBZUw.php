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

/* themes/contrib/rover/templates/system/status-messages.html.twig */
class __TwigTemplate_45d351025f1b48ff16cd88c67e6732cf extends Template
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
        echo "<div data-drupal-messages class=\"status-message col-12\">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "    ";
            // line 27
            $context["classes"] = [0 => "col-12", 1 => "alert", 2 => (((            // line 30
$context["type"] == "status")) ? ("alert-success") : ("")), 3 => (((            // line 31
$context["type"] == "warning")) ? ("alert-warning") : ("")), 4 => (((            // line 32
$context["type"] == "error")) ? ("alert-danger") : ("")), 5 => (((            // line 33
$context["type"] == "info")) ? ("alert-primary") : (""))];
            // line 36
            echo "    <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 36, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 36, $this->source), "role", "aria-label"), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo " >
      <div class=\"message-content\">
        ";
            // line 38
            if (($context["type"] == "error")) {
                // line 39
                echo "          <div role=\"alert\">
        ";
            }
            // line 41
            echo "        ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 42
                echo "          <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 42, $this->source), "html", null, true);
                echo "</h2>
        ";
            }
            // line 44
            echo "        ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 45
                echo "          <ul>
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 47
                    echo "              <li>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 47, $this->source), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "          </ul>
        ";
            } else {
                // line 51
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 51, $this->source)), "html", null, true);
                echo "
        ";
            }
            // line 53
            echo "        ";
            if (($context["type"] == "error")) {
                // line 54
                echo "          </div>
        ";
            }
            // line 56
            echo "      </div>
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rover/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 60,  113 => 56,  109 => 54,  106 => 53,  100 => 51,  96 => 49,  87 => 47,  83 => 46,  80 => 45,  77 => 44,  71 => 42,  68 => 41,  64 => 39,  62 => 38,  54 => 36,  52 => 33,  51 => 32,  50 => 31,  49 => 30,  48 => 27,  46 => 26,  42 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rover/templates/system/status-messages.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\rover\\templates\\system\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 25, "set" => 27, "if" => 38);
        static $filters = array("escape" => 36, "without" => 36, "length" => 44, "first" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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

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

/* themes/contrib/rover/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_fa351c412a3aec199c4587f363408577 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "  <div class=\"navbar-collapse ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["derivative_plugin_id"] ?? null) == "main")) ? ("collapse") : ("")));
        echo "\" id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["derivative_plugin_id"] ?? null), 37, $this->source), "html", null, true);
        echo "_nav\">
    ";
        // line 39
        $context["classes"] = [0 => "block", 1 => "block-menu", 2 => "ml-auto", 3 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["derivative_plugin_id"] ?? null), 43, $this->source)))];
        // line 46
        echo "    ";
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 46), 46, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 47
        echo "    <nav role=\"navigation\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 47, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
      ";
        // line 49
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 49)) {
            // line 50
            echo "        ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 50);
            // line 51
            echo "      ";
        }
        // line 52
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 52, $this->source), "html", null, true);
        echo "
      <h2";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "</h2>
      ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 54, $this->source), "html", null, true);
        echo "
      ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "    </nav>
  </div>
";
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 56, $this->source), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rover/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 56,  92 => 55,  86 => 58,  84 => 55,  80 => 54,  74 => 53,  69 => 52,  66 => 51,  63 => 50,  60 => 49,  53 => 47,  50 => 46,  48 => 43,  47 => 39,  40 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rover/templates/block/block--system-menu-block.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\rover\\templates\\block\\block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 39, "if" => 49, "block" => 55);
        static $filters = array("escape" => 37, "clean_class" => 43, "clean_id" => 46, "without" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 'clean_id', 'without'],
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

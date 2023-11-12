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

/* themes/contrib/revolt/templates/navigation/menu.html.twig */
class __TwigTemplate_9c8d4d55d7b42621eb222f8f1a61e2ac extends Template
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
        // line 22
        echo "
";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 24, $context, $this->getSourceContext()));
        echo "
    ";
    }

    // line 25
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 26
            echo "      ";
            $macros["menus"] = $this;
            // line 27
            echo "        ";
            if (($context["items"] ?? null)) {
                // line 28
                echo "          ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 29
                    echo "            ";
                    // line 30
                    $context["menu_class"] = [0 => ("vt-menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 31
($context["menu_name"] ?? null), 31, $this->source)))];
                    // line 34
                    echo "            <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_class"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo ">
          ";
                } else {
                    // line 36
                    echo "            <ul class=\"vt-submenu\">
          ";
                }
                // line 38
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "            ";
                    // line 40
                    $context["classes"] = [0 => "vt-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 42
$context["item"], "is_expanded", [], "any", false, false, true, 42)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "is_collapsed", [], "any", false, false, true, 43)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("menu-item--active-trail") : (""))];
                    // line 47
                    echo "            <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 49
                    $context["link_classes"] = [0 => "vt-link", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "in_active_trail", [], "any", false, false, true, 51)) ? ("active") : (""))];
                    // line 54
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 54), 54, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), 54, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "
              ";
                    // line 55
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55)) {
                        // line 56
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 56, $context, $this->getSourceContext()));
                        echo "
              ";
                    }
                    // line 58
                    echo "            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "          </ul>
        ";
            }
            // line 62
            echo "      ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/revolt/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 62,  131 => 60,  124 => 58,  118 => 56,  116 => 55,  111 => 54,  109 => 51,  108 => 49,  103 => 47,  101 => 44,  100 => 43,  99 => 42,  98 => 40,  96 => 39,  91 => 38,  87 => 36,  81 => 34,  79 => 31,  78 => 30,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  51 => 25,  44 => 24,  42 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/revolt/templates/navigation/menu.html.twig", "C:\\xampp\\htdocs\\drupal-gr6-1\\themes\\contrib\\revolt\\templates\\navigation\\menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 25, "if" => 27, "set" => 30, "for" => 38);
        static $filters = array("clean_class" => 31, "escape" => 34);
        static $functions = array("link" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['clean_class', 'escape'],
                ['link']
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

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

/* themes/contrib/rover/templates/navigation/menu--main.html.twig */
class __TwigTemplate_30ca35c19561cab99dcf3e0dee6b1fde extends Template
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
        echo "<div class=\"navbar-nav\">
  ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 25, $context, $this->getSourceContext()));
        echo "
    ";
        // line 72
        echo "      <ul class=\"user_profile\">
        ";
        // line 73
        if (($context["profile_pic"] ?? null)) {
            // line 74
            echo "          <li><img class=\"user_dp\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["userPictureUrl"] ?? null), 74, $this->source)), "html", null, true);
            echo "\" alt=\"user_picture\" > </li>
        ";
        } else {
            // line 76
            echo "          <li class=\"user_dp\">
            <span>";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["userPictureUrl"] ?? null), 77, $this->source), "html", null, true);
            echo "</span>
          </li>
        ";
        }
        // line 80
        echo "      </ul>
</div>
";
    }

    // line 26
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
            // line 27
            echo "      ";
            $macros["menus"] = $this;
            // line 28
            echo "        ";
            if (($context["items"] ?? null)) {
                // line 29
                echo "          ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    echo "            ";
                    // line 31
                    $context["menu_class"] = [0 => "navbar-nav", 1 => ("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 33
($context["menu_name"] ?? null), 33, $this->source)))];
                    // line 36
                    echo "            <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_class"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo ">
          ";
                } else {
                    // line 38
                    echo "            <ul class=\"dropdown-menu active\">
          ";
                }
                // line 40
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "            ";
                    // line 42
                    $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "below", [], "any", false, false, true, 44)) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "is_expanded", [], "any", false, false, true, 45)) ? ("menu-item--expanded") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "is_collapsed", [], "any", false, false, true, 46)) ? ("menu-item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "in_active_trail", [], "any", false, false, true, 47)) ? ("menu-item--active-trail") : (""))];
                    // line 50
                    echo "            <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 50), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 52
                    $context["link_classes"] = [0 => "dropdown-item", 1 => (( !                    // line 54
($context["menu_level"] ?? null)) ? ("nav-link") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 55
$context["item"], "in_active_trail", [], "any", false, false, true, 55)) ? ("active") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 56
$context["item"], "below", [], "any", false, false, true, 56)) ? ("dropdown-toggle") : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 57
$context["item"], "url", [], "any", false, false, true, 57), "getOption", [0 => "attributes"], "method", false, false, true, 57), "class", [], "any", false, false, true, 57)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), "getOption", [0 => "attributes"], "method", false, false, true, 57), "class", [], "any", false, false, true, 57), 57, $this->source), " ")) : ("")), 5 => ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 58
$context["item"], "url", [], "any", false, false, true, 58), "toString", [], "method", false, false, true, 58), 58, $this->source)))];
                    // line 61
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61)) {
                        // line 62
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 62), 62, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), 62, $this->source), ["class" => ($context["link_classes"] ?? null), "data-bs-toggle" => "dropdown", "aria-expanded" => "false", "aria-haspopup" => "true"]), "html", null, true);
                        echo "
                ";
                        // line 63
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 63), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 63, $context, $this->getSourceContext()));
                        echo "
              ";
                    } else {
                        // line 65
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 65), 65, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 65), 65, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
              ";
                    }
                    // line 67
                    echo "            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "          </ul>
        ";
            }
            // line 71
            echo "      ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/rover/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 71,  168 => 69,  161 => 67,  155 => 65,  150 => 63,  145 => 62,  142 => 61,  140 => 58,  139 => 57,  138 => 56,  137 => 55,  136 => 54,  135 => 52,  130 => 50,  128 => 47,  127 => 46,  126 => 45,  125 => 44,  124 => 42,  122 => 41,  117 => 40,  113 => 38,  107 => 36,  105 => 33,  104 => 31,  102 => 30,  99 => 29,  96 => 28,  93 => 27,  77 => 26,  71 => 80,  65 => 77,  62 => 76,  56 => 74,  54 => 73,  51 => 72,  47 => 25,  44 => 24,  42 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rover/templates/navigation/menu--main.html.twig", "D:\\Study\\App\\xampp\\htdocs\\drupal\\themes\\contrib\\rover\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "if" => 73, "macro" => 26, "set" => 31, "for" => 40);
        static $filters = array("escape" => 74, "clean_class" => 33, "join" => 57);
        static $functions = array("file_url" => 74, "link" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'set', 'for'],
                ['escape', 'clean_class', 'join'],
                ['file_url', 'link']
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

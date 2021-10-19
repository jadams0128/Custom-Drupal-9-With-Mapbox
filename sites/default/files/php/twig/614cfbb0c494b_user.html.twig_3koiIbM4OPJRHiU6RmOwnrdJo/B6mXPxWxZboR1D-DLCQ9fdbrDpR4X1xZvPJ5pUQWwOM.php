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

/* themes/custom/custombootstrap/templates/content/user.html.twig */
class __TwigTemplate_6be72abbb3c1e7f3df240de7e8034a4b35254c111549751f7784bf5ff37dac8b extends \Twig\Template
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
        // line 20
        echo "
<div class=\"person-header white-text custom-block-title text-center mar-top-20 mar-bottom-20\">
  ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "field_name", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
</div>

<div class=\"people-container no-padding white-bg\" ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 25, $this->source), "html", null, true);
        echo ">
  <div class=\"people-header-image text-center\">
    ";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user_picture", [], "any", false, false, true, 27))) {
            // line 28
            echo "      <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user_picture", [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "uri", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source)]), "html", null, true);
            echo "\">
    ";
        } else {
            // line 30
            echo "      <img src=\"/sites/default/files/default_images/no-person.png\">
    ";
        }
        // line 32
        echo "  </div>

  <div class=\"person-meta padding-25\">
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasRole", [0 => "student"], "method", false, false, true, 35)) {
            // line 36
            echo "    \t<div class=\"col text-center\">
    \t\t";
            // line 37
            $context["email"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37);
            // line 38
            echo "    \t\t<p class=\"person-info\"><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 38, $this->source), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 38, $this->source), "html", null, true);
            echo "</a></p>
    \t\t
    \t</div>
    \t<div class=\"row justify-content-md-center\">
    \t\t<div class=\"col-md-auto\">
\t    \t\t<h1>Aproved Tool List</h1>
\t\t\t    <ul>
\t\t\t    \t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "field_tools", [], "any", false, false, true, 45));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 46
                echo "\t\t\t\t\t    ";
                $context["lower_title"] = twig_title_string_filter($this->env, twig_replace_filter($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, $context["item"], "target_id", [], "any", false, false, true, 46)]), ["/tool/" => "", "-" => " "]));
                // line 47
                echo "\t\t\t\t\t    <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lower_title"] ?? null), 47, $this->source), "html", null, true);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t    </ul>
    \t\t</div>
    \t</div>
\t";
        } else {
            // line 53
            echo "\t\t<table class=\"responsive-table striped\">
\t      <tbody>
\t        <tr>
\t          <td>
\t            <h4>Title:</h4>
\t          </td>
\t          <td>
\t            <p class=\"person-info\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "field_shop_title", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</p>
\t          </td>
\t        </tr>
\t        <tr>
\t          <td>
\t            <h4>Department:</h4>
\t          </td>
\t          <td>
\t            <p class=\"person-info\">";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "field_department", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</p>
\t          </td>
\t        </tr>
\t        <tr>
\t          <td>
\t            <h4>Email:</h4>
\t          </td>
\t          <td>
\t            <p class=\"person-info\">";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</p>
\t          </td>
\t        </tr>
\t        <tr>
\t          <td>
\t            <h4>Phone:</h4>
\t          </td>
\t          <td>
\t            <p class=\"person-info\">";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "field_phone", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "</p>
\t          </td>
\t        </tr>
\t        <tr>
\t          <td>
\t            <h4>Location:</h4>
\t          </td>
\t          <td>
\t            <p class=\"person-info\"><a href=\"";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "field_location", [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "id", [], "any", false, false, true, 92)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "field_location", [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "title", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "</a></p>
\t          </td>
\t        </tr>
\t      </tbody>
\t    </table>
    ";
        }
        // line 98
        echo "  </div>
</div>




";
    }

    public function getTemplateName()
    {
        return "themes/custom/custombootstrap/templates/content/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 98,  166 => 92,  155 => 84,  144 => 76,  133 => 68,  122 => 60,  113 => 53,  107 => 49,  98 => 47,  95 => 46,  91 => 45,  78 => 38,  76 => 37,  73 => 36,  71 => 35,  66 => 32,  62 => 30,  56 => 28,  54 => 27,  49 => 25,  43 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custombootstrap/templates/content/user.html.twig", "/home/makergro/public_html/themes/custom/custombootstrap/templates/content/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 27, "set" => 37, "for" => 45);
        static $filters = array("escape" => 22, "title" => 46, "replace" => 46);
        static $functions = array("file_url" => 28, "path" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'title', 'replace'],
                ['file_url', 'path']
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

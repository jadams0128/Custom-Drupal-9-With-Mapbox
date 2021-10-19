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

/* themes/custom/custombootstrap/templates/content/node--location.html.twig */
class __TwigTemplate_d39e65e28e7077dd87bdcd76723126bf5bb4be8fc4df2fd56db264c927a8962f extends \Twig\Template
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
        // line 75
        echo "
<div class=\"location-header white-text custom-block-title text-center mar-top-20 mar-bottom-20\">
\t";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 77, $this->source), "html", null, true);
        echo "
</div>

<div class=\"location-container no-padding white-bg\" ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 80, $this->source), "html", null, true);
        echo ">
\t<div class=\"location-header-image text-center\">

    ";
        // line 83
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lab_image", [], "any", false, false, true, 83))) {
            // line 84
            echo "      <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lab_image", [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "uri", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84), 84, $this->source)]), "html", null, true);
            echo "\">
    ";
        } else {
            // line 86
            echo "      <img src=\"/sites/default/files/default_images/no-location.png\">
    ";
        }
        // line 88
        echo "
\t\t<div class=\"location-body text-left padding-25\">
\t\t\t";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 90), "value", [], "any", false, false, true, 90), 90, $this->source));
        echo "
\t\t</div>

    ";
        // line 93
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_link", [], "any", false, false, true, 93), "uri", [], "any", false, false, true, 93))) {
            // line 94
            echo "      <div class=\"location-lab-link text-left padding-25\">
        <a class=\"btn makergr-btn\" href=\"";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_link", [], "any", false, false, true, 95), "uri", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_link", [], "any", false, false, true, 95), "title", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 98
        echo "\t\t
\t</div>

\t<div class=\"location-meta padding-25\">
\t\t<table class=\"responsive-table striped\">
        <tbody>
          <tr>
            <td>
              <h4>Location:</h4>
            </td>
            <td>
              <p class=\"location-info\">";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_location", [], "any", false, false, true, 109), "value", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "</p>
            </td>
          </tr>
          <tr>
            <td>
              <h4>Access:</h4>
            </td>
            <td>
              <p class=\"location-info\">";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_access", [], "any", false, false, true, 117), "value", [], "any", false, false, true, 117), 117, $this->source));
        echo "</p>
            </td>
          </tr>
          <tr>
            <td>
              <h4>Hours:</h4>
            </td>
            <td>
              <p class=\"location-info\">";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_hours", [], "any", false, false, true, 125), "value", [], "any", false, false, true, 125), 125, $this->source));
        echo "</p>
            </td>
          </tr>
          <tr>
            <td>
              <h4>Contact:</h4>
            </td>
            <td>
              <p class=\"location-info\">
                <i class=\"material-icons\">Email: </i>
                <a class=\"mailto\" href=\"mailto:";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_email", [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_email", [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "</a>
              </p>
              <p class=\"location-info\">
                <i class=\"material-icons\">Phone: </i>
                <a class=\"phone\" href=\"tel:";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_phone", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_phone", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "</a>
              </p>
            </td>
          </tr>
        </tbody>
      </table>
\t</div>

  ";
        // line 147
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_images", [], "any", false, false, true, 147))) {
            // line 148
            echo "    <div class=\"location-images padding-25\">
      <h1>Images</h1>
      <div class=\"row\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_images", [], "any", false, false, true, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 152
                echo "          <div class=\"col-lg-3 col-md-4 col-6\">
            <a href=\"";
                // line 153
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 153), "uri", [], "any", false, false, true, 153), "value", [], "any", false, false, true, 153), 153, $this->source)]), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 153), "uri", [], "any", false, false, true, 153), "value", [], "any", false, false, true, 153), 153, $this->source)]), "html", null, true);
                echo "\" class=\"img-fluid img-thumbnail\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "\"></a>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "      </div>  
    </div>
  ";
        }
        // line 159
        echo "
  <div class=\"location-tools padding-25\">
    ";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("tools", "tools_by_location"), "html", null, true);
        echo "
  </div>

  <div class=\"location-people padding-25\">
    ";
        // line 165
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("user_admin_people", "people_by_location"), "html", null, true);
        echo "
  </div>
</div>








";
    }

    public function getTemplateName()
    {
        return "themes/custom/custombootstrap/templates/content/node--location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 165,  196 => 161,  192 => 159,  187 => 156,  174 => 153,  171 => 152,  167 => 151,  162 => 148,  160 => 147,  147 => 139,  138 => 135,  125 => 125,  114 => 117,  103 => 109,  90 => 98,  82 => 95,  79 => 94,  77 => 93,  71 => 90,  67 => 88,  63 => 86,  57 => 84,  55 => 83,  49 => 80,  43 => 77,  39 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custombootstrap/templates/content/node--location.html.twig", "/home/makergro/public_html/themes/custom/custombootstrap/templates/content/node--location.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 83, "for" => 151);
        static $filters = array("escape" => 77, "raw" => 90);
        static $functions = array("file_url" => 84, "drupal_view" => 161);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
                ['file_url', 'drupal_view']
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

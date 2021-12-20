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

/* themes/icecream/templates/region--header.html.twig */
class __TwigTemplate_4a3e7adc853f563556741b00bf18ada5d6051a1dc5b45181fa4d5ae8c59d2243 extends \Twig\Template
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
        // line 16
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source)))];
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">

    ";
            // line 25
            echo "    <div class=\"bars-block contextual-region\">
      <span id = \"bars\">
        <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
      </span>
    </div>
    ";
            // line 31
            echo "    <span class=\"close\" id=\"close\" onclick='toggleHide()'>&times;</span>

\t\t";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 33, $this->source), "html", null, true);
            echo "

    ";
            // line 36
            echo "    <div class=\"search-block contextual-region\">
      <span onclick = 'toggleShow()' id = \"search\">
        <img src=\"https://www.republicworld.com/assets/images/search_logo.png\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
      </span>
    </div>

\t</div>
";
        }
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/icecream/templates/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  66 => 36,  61 => 33,  57 => 31,  50 => 25,  44 => 22,  42 => 21,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{%
  set classes = [
    'region',
    'region-' ~ region|clean_class,
  ]
%}
{% if content %}
\t<div{{attributes.addClass(classes)}}>

    {# hamburger block #}
    <div class=\"bars-block contextual-region\">
      <span id = \"bars\">
        <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
      </span>
    </div>
    {# close icon #}
    <span class=\"close\" id=\"close\" onclick='toggleHide()'>&times;</span>

\t\t{{ content }}

    {# search block #}
    <div class=\"search-block contextual-region\">
      <span onclick = 'toggleShow()' id = \"search\">
        <img src=\"https://www.republicworld.com/assets/images/search_logo.png\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
      </span>
    </div>

\t</div>
{% endif %}

", "themes/icecream/templates/region--header.html.twig", "/var/www/html/republicnews/web/themes/icecream/templates/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 21);
        static $filters = array("clean_class" => 18, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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

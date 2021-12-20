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

/* themes/icecream/templates/page.html.twig */
class __TwigTemplate_99dcd6377b2becf07b57bec314a7e825ca4441073518d65e8a80b9742d143457 extends \Twig\Template
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
        // line 45
        echo "
";
        // line 47
        echo "


<div class=\"layout-container republic-dom\">

  <div class=\"main-header\">
    <div class=\"inner-main-header\">
      ";
        // line 55
        echo "      <header role=\"banner\" class=\"header\">
        ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
      </header>
      ";
        // line 59
        echo "

      <section class=\"menu-section\">
        <div class=\"menu-container\">
          ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
        </div>
      </section>

      ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
   </div>

  </div>
  ";
        // line 72
        echo "

  <main role=\"main\" class=\"news-main\">

    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 77
        echo "
    <div class=\"sub-menu\" id=\"sub-menu\">
      <div class = \"inner-sub-menu\">
        ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"hero-banner\">
      ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"highlighted-section\">
      <div class=\"masthead-wrapper\">
        ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 90)) {
            // line 91
            echo "          <aside class=\"highlight_first news-aside\" role=\"complementary\">
            ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 95
        echo "
        ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 96)) {
            // line 97
            echo "          <aside class=\"highlight_second news-aside\" role=\"complementary\">
            ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 101
        echo "
        ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 102)) {
            // line 103
            echo "          <aside class=\"highlight_third \" role=\"complementary\">
            ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 107
        echo "      </div>
    </div> ";
        // line 109
        echo "
    <div class=\"homepage-wrapper\">
      ";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
    </div>";
        // line 113
        echo "
  </main> ";
        // line 115
        echo "
  <footer class = \"footer-section\">
    <div class=\"section-xl\">
      <div class=\"section-xs\">
        <div class=\"footer-menu-section\">
          ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 120)) {
            // line 121
            echo "            <aside class=\"footer_menu_first\" role=\"complementary\">
              ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 125
        echo "
          ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 126)) {
            // line 127
            echo "            <aside class=\"footer_menu_second\" role=\"complementary\">
              ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 131
        echo "
          ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 132)) {
            // line 133
            echo "            <aside class=\"footer_menu_third\" role=\"complementary\">
              ";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 137
        echo "
          ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 138)) {
            // line 139
            echo "            <aside class=\"footer_menu_fourth\" role=\"complementary\">
              ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 143
        echo "
          ";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 144)) {
            // line 145
            echo "            <aside class=\"footer_menu_fifth\" role=\"complementary\">
              ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 149
        echo "
        </div>
      </div>
    </div>

    <div class=\"banner-bottom\">
      ";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_bottom", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
        echo "
    </div>";
        // line 157
        echo "

    ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 159)) {
            // line 160
            echo "      <div class=\"outer-footer\">
        <div role=\"contentinfo\" class=\"outer-footer-div\">
          ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 166
        echo "
  </footer> ";
        // line 168
        echo "


</div>";
    }

    public function getTemplateName()
    {
        return "themes/icecream/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 168,  262 => 166,  255 => 162,  251 => 160,  249 => 159,  245 => 157,  241 => 155,  233 => 149,  227 => 146,  224 => 145,  222 => 144,  219 => 143,  213 => 140,  210 => 139,  208 => 138,  205 => 137,  199 => 134,  196 => 133,  194 => 132,  191 => 131,  185 => 128,  182 => 127,  180 => 126,  177 => 125,  171 => 122,  168 => 121,  166 => 120,  159 => 115,  156 => 113,  152 => 111,  148 => 109,  145 => 107,  139 => 104,  136 => 103,  134 => 102,  131 => 101,  125 => 98,  122 => 97,  120 => 96,  117 => 95,  111 => 92,  108 => 91,  106 => 90,  98 => 85,  90 => 80,  85 => 77,  79 => 72,  72 => 67,  65 => 63,  59 => 59,  54 => 56,  51 => 55,  42 => 47,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{# {{ kint(_context) }} #}



<div class=\"layout-container republic-dom\">

  <div class=\"main-header\">
    <div class=\"inner-main-header\">
      {# <div class=\"flex\"> #}
      <header role=\"banner\" class=\"header\">
        {{ page.header }}
      </header>
      {# </div> #}


      <section class=\"menu-section\">
        <div class=\"menu-container\">
          {{ page.primary_menu }}
        </div>
      </section>

      {{ page.help }}
   </div>

  </div>
  {# end of main-header #}


  <main role=\"main\" class=\"news-main\">

    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"sub-menu\" id=\"sub-menu\">
      <div class = \"inner-sub-menu\">
        {{ page.secondary_menu }}
      </div>
    </div>

    <div class=\"hero-banner\">
      {{ page.banner_top }}
    </div>

    <div class=\"highlighted-section\">
      <div class=\"masthead-wrapper\">
        {% if page.highlight_first %}
          <aside class=\"highlight_first news-aside\" role=\"complementary\">
            {{ page.highlight_first }}
          </aside>
        {% endif %}

        {% if page.highlight_second %}
          <aside class=\"highlight_second news-aside\" role=\"complementary\">
            {{ page.highlight_second }}
          </aside>
        {% endif %}

        {% if page.highlight_third %}
          <aside class=\"highlight_third \" role=\"complementary\">
            {{ page.highlight_third }}
          </aside>
        {% endif %}
      </div>
    </div> {# end of highlighted-section #}

    <div class=\"homepage-wrapper\">
      {{ page.content }}
    </div>{# /.news-layout-content #}

  </main> {# end of main -- news main#}

  <footer class = \"footer-section\">
    <div class=\"section-xl\">
      <div class=\"section-xs\">
        <div class=\"footer-menu-section\">
          {% if page.footer_menu_first %}
            <aside class=\"footer_menu_first\" role=\"complementary\">
              {{ page.footer_menu_first }}
            </aside>
          {% endif %}

          {% if page.footer_menu_second %}
            <aside class=\"footer_menu_second\" role=\"complementary\">
              {{ page.footer_menu_second }}
            </aside>
          {% endif %}

          {% if page.footer_menu_third %}
            <aside class=\"footer_menu_third\" role=\"complementary\">
              {{ page.footer_menu_third }}
            </aside>
          {% endif %}

          {% if page.footer_menu_fourth %}
            <aside class=\"footer_menu_fourth\" role=\"complementary\">
              {{ page.footer_menu_fourth }}
            </aside>
          {% endif %}

          {% if page.footer_menu_fifth %}
            <aside class=\"footer_menu_fifth\" role=\"complementary\">
              {{ page.footer_menu_fifth }}
            </aside>
          {% endif %}

        </div>
      </div>
    </div>

    <div class=\"banner-bottom\">
      {{ page.banner_bottom }}
    </div>{# banner bottom  #}


    {% if page.footer %}
      <div class=\"outer-footer\">
        <div role=\"contentinfo\" class=\"outer-footer-div\">
          {{ page.footer }}
        </div>
      </div>
    {% endif %}

  </footer> {# end of footer-section  #}



</div>{# /.layout-container #}
", "themes/icecream/templates/page.html.twig", "/var/www/html/republicnews/web/themes/icecream/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 90);
        static $filters = array("escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

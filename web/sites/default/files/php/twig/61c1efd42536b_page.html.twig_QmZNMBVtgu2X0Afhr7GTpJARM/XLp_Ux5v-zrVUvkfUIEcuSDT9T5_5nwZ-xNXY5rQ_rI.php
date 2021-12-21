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

<div class=\"layout-container republic-dom\">

  <div class=\"main-header\">
    <div class=\"inner-main-header\">
      ";
        // line 52
        echo "      <header role=\"banner\" class=\"header\">
        ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
      </header>
      ";
        // line 56
        echo "

      <section class=\"menu-section\">
        <div class=\"menu-container\">
          ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
        </div>
      </section>

      ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
   </div>

  </div>
  ";
        // line 69
        echo "

  <main role=\"main\" class=\"news-main\">

    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 74
        echo "
    <div class=\"sub-menu\" id=\"sub-menu\">
      <div class = \"inner-sub-menu\">
        ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"hero-banner\">
      ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"highlighted-section\">
      <div class=\"masthead-wrapper\">
        ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 87)) {
            // line 88
            echo "          <aside class=\"highlight_first news-aside\" role=\"complementary\">
            ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 92
        echo "
        ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 93)) {
            // line 94
            echo "          <aside class=\"highlight_second news-aside\" role=\"complementary\">
            ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 98
        echo "
        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 99)) {
            // line 100
            echo "          <aside class=\"highlight_third \" role=\"complementary\">
            ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 104
        echo "      </div>
    </div> ";
        // line 106
        echo "
    <div class=\"homepage-wrapper\">
      ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "
    </div>";
        // line 110
        echo "
  </main> ";
        // line 112
        echo "
  <footer class = \"footer-section\">
    <div class=\"section-xl\">
      <div class=\"section-xs\">
        <div class=\"footer-menu-section\">
          ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 117)) {
            // line 118
            echo "            <aside class=\"footer_menu_first\" role=\"complementary\">
              ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 122
        echo "
          ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 123)) {
            // line 124
            echo "            <aside class=\"footer_menu_second\" role=\"complementary\">
              ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 128
        echo "
          ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 129)) {
            // line 130
            echo "            <aside class=\"footer_menu_third\" role=\"complementary\">
              ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 134
        echo "
          ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 135)) {
            // line 136
            echo "            <aside class=\"footer_menu_fourth\" role=\"complementary\">
              ";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 140
        echo "
          ";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 141)) {
            // line 142
            echo "            <aside class=\"footer_menu_fifth\" role=\"complementary\">
              ";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 146
        echo "
        </div>
      </div>
    </div>

    <div class=\"banner-bottom\">
      ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_bottom", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
    </div>";
        // line 154
        echo "

    ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 156)) {
            // line 157
            echo "      <div class=\"outer-footer\">
        <div role=\"contentinfo\" class=\"outer-footer-div\">
          ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 163
        echo "
  </footer> ";
        // line 165
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
        return array (  261 => 165,  258 => 163,  251 => 159,  247 => 157,  245 => 156,  241 => 154,  237 => 152,  229 => 146,  223 => 143,  220 => 142,  218 => 141,  215 => 140,  209 => 137,  206 => 136,  204 => 135,  201 => 134,  195 => 131,  192 => 130,  190 => 129,  187 => 128,  181 => 125,  178 => 124,  176 => 123,  173 => 122,  167 => 119,  164 => 118,  162 => 117,  155 => 112,  152 => 110,  148 => 108,  144 => 106,  141 => 104,  135 => 101,  132 => 100,  130 => 99,  127 => 98,  121 => 95,  118 => 94,  116 => 93,  113 => 92,  107 => 89,  104 => 88,  102 => 87,  94 => 82,  86 => 77,  81 => 74,  75 => 69,  68 => 64,  61 => 60,  55 => 56,  50 => 53,  47 => 52,  39 => 45,);
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
        static $tags = array("if" => 87);
        static $filters = array("escape" => 53);
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

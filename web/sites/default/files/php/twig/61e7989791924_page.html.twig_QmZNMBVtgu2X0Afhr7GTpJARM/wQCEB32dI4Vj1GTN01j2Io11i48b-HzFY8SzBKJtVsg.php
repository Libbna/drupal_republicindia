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

  <div class=\"main-header\" id=\"main-header\">
    <div class=\"inner-main-header\">
      ";
        // line 51
        echo "      <header role=\"banner\" class=\"header\">
        ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
      </header>
      ";
        // line 55
        echo "

      <section class=\"menu-section\">
        <div class=\"menu-container\">
          ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
        </div>
      </section>

      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
   </div>

  </div>
  ";
        // line 68
        echo "

  <main role=\"main\" class=\"news-main\">

    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 73
        echo "
    <div class=\"sub-menu\" id=\"sub-menu\">
      <div class = \"inner-sub-menu\">
        ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"hero-banner\">
      ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"highlighted-section\">
      <div class=\"masthead-wrapper\">
        ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 86)) {
            // line 87
            echo "          <aside class=\"highlight_first news-aside\" role=\"complementary\">
            ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 91
        echo "
        ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 92)) {
            // line 93
            echo "          <aside class=\"highlight_second news-aside\" role=\"complementary\">
            ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 97
        echo "
        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 98)) {
            // line 99
            echo "          <aside class=\"highlight_third \" role=\"complementary\">
            ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 103
        echo "      </div>
    </div> ";
        // line 105
        echo "
    <div class=\"homepage-wrapper\">
      ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
    </div>";
        // line 109
        echo "
  </main> ";
        // line 111
        echo "
  <footer class = \"footer-section\">
    <div class=\"section-xl\">
      <div class=\"section-xs\">
        <div class=\"footer-menu-section\">
          ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 116)) {
            // line 117
            echo "            <aside class=\"footer_menu_first\" role=\"complementary\">
              ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 121
        echo "
          ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 122)) {
            // line 123
            echo "            <aside class=\"footer_menu_second\" role=\"complementary\">
              ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 127
        echo "
          ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 128)) {
            // line 129
            echo "            <aside class=\"footer_menu_third\" role=\"complementary\">
              ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 133
        echo "
          ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 134)) {
            // line 135
            echo "            <aside class=\"footer_menu_fourth\" role=\"complementary\">
              ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 139
        echo "
          ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 140)) {
            // line 141
            echo "            <aside class=\"footer_menu_fifth\" role=\"complementary\">
              ";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 145
        echo "
        </div>
      </div>
    </div>

    <div class=\"banner-bottom\">
      ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_bottom", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
    </div>";
        // line 153
        echo "

    ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 155)) {
            // line 156
            echo "      <div class=\"outer-footer\">
        <div role=\"contentinfo\" class=\"outer-footer-div\">
          ";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 162
        echo "
  </footer> ";
        // line 164
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
        return array (  260 => 164,  257 => 162,  250 => 158,  246 => 156,  244 => 155,  240 => 153,  236 => 151,  228 => 145,  222 => 142,  219 => 141,  217 => 140,  214 => 139,  208 => 136,  205 => 135,  203 => 134,  200 => 133,  194 => 130,  191 => 129,  189 => 128,  186 => 127,  180 => 124,  177 => 123,  175 => 122,  172 => 121,  166 => 118,  163 => 117,  161 => 116,  154 => 111,  151 => 109,  147 => 107,  143 => 105,  140 => 103,  134 => 100,  131 => 99,  129 => 98,  126 => 97,  120 => 94,  117 => 93,  115 => 92,  112 => 91,  106 => 88,  103 => 87,  101 => 86,  93 => 81,  85 => 76,  80 => 73,  74 => 68,  67 => 63,  60 => 59,  54 => 55,  49 => 52,  46 => 51,  39 => 45,);
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

  <div class=\"main-header\" id=\"main-header\">
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
        static $tags = array("if" => 86);
        static $filters = array("escape" => 52);
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

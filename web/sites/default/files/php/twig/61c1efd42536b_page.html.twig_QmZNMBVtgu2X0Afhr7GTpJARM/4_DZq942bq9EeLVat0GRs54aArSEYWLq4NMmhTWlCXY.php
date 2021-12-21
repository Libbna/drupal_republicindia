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
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->kint($this->env, $context, [0 => $this->sandbox->ensureToStringAllowed(($context["__field_my_date"] ?? null), 46, $this->source)]));
        echo "



";
        // line 51
        echo "
<div class=\"layout-container republic-dom\">

  <div class=\"main-header\">
    <div class=\"inner-main-header\">
      ";
        // line 57
        echo "      <header role=\"banner\" class=\"header\">
        ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
      </header>
      ";
        // line 61
        echo "

      <section class=\"menu-section\">
        <div class=\"menu-container\">
          ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
        </div>
      </section>

      ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
   </div>

  </div>
  ";
        // line 74
        echo "

  <main role=\"main\" class=\"news-main\">

    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 79
        echo "
    <div class=\"sub-menu\" id=\"sub-menu\">
      <div class = \"inner-sub-menu\">
        ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"hero-banner\">
      ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"highlighted-section\">
      <div class=\"masthead-wrapper\">
        ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 92)) {
            // line 93
            echo "          <aside class=\"highlight_first news-aside\" role=\"complementary\">
            ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_first", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 97
        echo "
        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 98)) {
            // line 99
            echo "          <aside class=\"highlight_second news-aside\" role=\"complementary\">
            ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_second", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 104)) {
            // line 105
            echo "          <aside class=\"highlight_third \" role=\"complementary\">
            ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight_third", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 109
        echo "      </div>
    </div> ";
        // line 111
        echo "
    <div class=\"homepage-wrapper\">
      ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
    </div>";
        // line 115
        echo "
  </main> ";
        // line 117
        echo "
  <footer class = \"footer-section\">
    <div class=\"section-xl\">
      <div class=\"section-xs\">
        <div class=\"footer-menu-section\">
          ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 122)) {
            // line 123
            echo "            <aside class=\"footer_menu_first\" role=\"complementary\">
              ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_first", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 127
        echo "
          ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 128)) {
            // line 129
            echo "            <aside class=\"footer_menu_second\" role=\"complementary\">
              ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_second", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 133
        echo "
          ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 134)) {
            // line 135
            echo "            <aside class=\"footer_menu_third\" role=\"complementary\">
              ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_third", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 139
        echo "
          ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 140)) {
            // line 141
            echo "            <aside class=\"footer_menu_fourth\" role=\"complementary\">
              ";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fourth", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 145
        echo "
          ";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 146)) {
            // line 147
            echo "            <aside class=\"footer_menu_fifth\" role=\"complementary\">
              ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu_fifth", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 151
        echo "
        </div>
      </div>
    </div>

    <div class=\"banner-bottom\">
      ";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_bottom", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "
    </div>";
        // line 159
        echo "

    ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 161)) {
            // line 162
            echo "      <div class=\"outer-footer\">
        <div role=\"contentinfo\" class=\"outer-footer-div\">
          ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 168
        echo "
  </footer> ";
        // line 170
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
        return array (  270 => 170,  267 => 168,  260 => 164,  256 => 162,  254 => 161,  250 => 159,  246 => 157,  238 => 151,  232 => 148,  229 => 147,  227 => 146,  224 => 145,  218 => 142,  215 => 141,  213 => 140,  210 => 139,  204 => 136,  201 => 135,  199 => 134,  196 => 133,  190 => 130,  187 => 129,  185 => 128,  182 => 127,  176 => 124,  173 => 123,  171 => 122,  164 => 117,  161 => 115,  157 => 113,  153 => 111,  150 => 109,  144 => 106,  141 => 105,  139 => 104,  136 => 103,  130 => 100,  127 => 99,  125 => 98,  122 => 97,  116 => 94,  113 => 93,  111 => 92,  103 => 87,  95 => 82,  90 => 79,  84 => 74,  77 => 69,  70 => 65,  64 => 61,  59 => 58,  56 => 57,  49 => 51,  42 => 46,  39 => 45,);
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

{{ kint(__field_my_date) }}



{# {{ field_my_date }} #}

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
        static $tags = array("if" => 92);
        static $filters = array("escape" => 58);
        static $functions = array("kint" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['kint']
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

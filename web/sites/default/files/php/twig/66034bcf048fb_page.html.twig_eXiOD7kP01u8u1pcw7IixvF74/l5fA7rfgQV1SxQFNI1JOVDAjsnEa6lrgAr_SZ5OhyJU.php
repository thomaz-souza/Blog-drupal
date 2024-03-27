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

/* themes/contrib/d8_blog_theme/templates/page.html.twig */
class __TwigTemplate_829753dc4a6f93cc222526d00d77993a extends Template
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
        // line 73
        echo "<div id=\"page-wrapper\">

  <header role=\"banner\" id=\"header\" class=\"clearfix\">
    <div class=\"container\">
\t";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
\t
\t</div>
  </header>

  ";
        // line 83
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 84
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 87
                echo "          <li>
            <a href=\"";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "url", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "\"><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "src", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "\"></a>
            <p class=\"flex-caption\">";
                // line 89
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "</p>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      </ul>
    </div>
  ";
        }
        // line 95
        echo "
  ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 96)) {
            // line 97
            echo "    <div id=\"highlighted\"><div class=\"container\">
\t<div class=\"row\">";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "</div>
\t</div></div>
  ";
        }
        // line 101
        echo "\t<div class=\"container\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "</div>
  ";
        // line 103
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high1", [], "any", false, false, true, 103) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high2", [], "any", false, false, true, 103)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high3", [], "any", false, false, true, 103))) {
            // line 104
            echo "    <div id=\"home-highlights\" class=\"row\">
      <div class=\"container\">";
            // line 105
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high1", [], "any", false, false, true, 105)) {
                // line 106
                echo "        <div class=\"home-high-1 col-md-4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high1", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 108
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high2", [], "any", false, false, true, 108)) {
                // line 109
                echo "        <div class=\"home-high-2 col-md-4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high2", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 111
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high3", [], "any", false, false, true, 111)) {
                // line 112
                echo "        <div class=\"home-high-3 col-md-4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high3", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 113
            echo "</div>
    </div>
  ";
        }
        // line 116
        echo "
  <main id=\"main\" class=\"clearfix\">
    <div class=\"container\">
\t<div class=\"row\">";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119)) {
            // line 120
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 120, $this->source), "html", null, true);
            echo "\" role=\"complementary\">
\t          ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
\t\t\t  \t";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "

\t\t\t  </div>
       <!-- /#sidebar-first -->
    ";
        }
        // line 127
        echo "
    <div class=\"";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["conditionalStr"] ?? null), 128, $this->source), "html", null, true);
        echo "\" role=\"main\">
      ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 129)) {
            // line 130
            echo "        <div id=\"content_top\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 132
        echo "
      ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "

    </div>";
        // line 136
        echo "
    ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 137)) {
            // line 138
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 138, $this->source), "html", null, true);
            echo "\" role=\"complementary\">
        ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 141
        echo "</div>
</div>
  </main>

  ";
        // line 146
        echo "  ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 146) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 146)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 146)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 146))) {
            // line 147
            echo "    <div id=\"footer-saran\" class=\"row\">
      <div id=\"footer-wrap\">
        ";
            // line 149
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 149)) {
                // line 150
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 152
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 152)) {
                // line 153
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 155
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 155)) {
                // line 156
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 158
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 158)) {
                // line 159
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 161
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 165
        echo "
  <footer class=\"site-footer\">
      <div class=\"container\">
        ";
        // line 168
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 168) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 168)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 168)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 168))) {
            // line 169
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
            ";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "
            ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "
            ";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 176
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 176)) {
            // line 177
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 178
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 181
        echo "      </div>
    </footer>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "slider", "sidebarfirst", "conditionalStr", "sidebarsecond"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/d8_blog_theme/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  300 => 181,  294 => 178,  291 => 177,  288 => 176,  282 => 173,  278 => 172,  274 => 171,  270 => 170,  267 => 169,  265 => 168,  260 => 165,  254 => 161,  248 => 159,  245 => 158,  239 => 156,  236 => 155,  230 => 153,  227 => 152,  221 => 150,  219 => 149,  215 => 147,  212 => 146,  206 => 141,  200 => 139,  195 => 138,  193 => 137,  190 => 136,  185 => 133,  182 => 132,  176 => 130,  174 => 129,  170 => 128,  167 => 127,  159 => 122,  155 => 121,  150 => 120,  148 => 119,  143 => 116,  138 => 113,  132 => 112,  129 => 111,  123 => 109,  120 => 108,  114 => 106,  112 => 105,  109 => 104,  106 => 103,  101 => 101,  95 => 98,  92 => 97,  90 => 96,  87 => 95,  82 => 92,  73 => 89,  67 => 88,  64 => 87,  60 => 86,  56 => 84,  53 => 83,  45 => 77,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8_blog_theme/templates/page.html.twig", "C:\\xampp\\htdocs\\Blog-drupal\\web\\themes\\contrib\\d8_blog_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 83, "for" => 86);
        static $filters = array("escape" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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

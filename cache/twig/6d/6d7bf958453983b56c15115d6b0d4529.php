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

/* partials/plugin-data.html.twig */
class __TwigTemplate_50068b3ba21dc51f0a70a2aee6fb8ae6 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<table>
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 2)) {
            // line 3
            echo "    <tr>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
        <td class=\"double\">
            ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 6), "url", [], "any", false, false, false, 6)) {
                // line 7
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 7), "url", [], "any", false, false, false, 7), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
                echo "
            ";
            }
            // line 11
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11)) {
                // line 12
                echo "                - <a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "author", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12), "html", null, true);
                echo "</a>
            ";
            }
            // line 14
            echo "        </td>
    </tr>
    ";
        }
        // line 17
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "homepage", [], "any", false, false, false, 17)) {
            // line 18
            echo "        <tr>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "homepage", [], "any", false, false, false, 20), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "homepage", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 23
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "demo", [], "any", false, false, false, 23)) {
            // line 24
            echo "        <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "demo", [], "any", false, false, false, 26), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "demo", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "bugs", [], "any", false, false, false, 29)) {
            // line 30
            echo "        <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "bugs", [], "any", false, false, false, 32), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "bugs", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 35
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "keywords", [], "any", false, false, false, 35)) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 38
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "keywords", [], "any", false, false, false, 38), ", "), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 41
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "license", [], "any", false, false, false, 41)) {
            // line 42
            echo "        <tr>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
            ";
            // line 44
            if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->startsWithFilter(twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "license", [], "any", false, false, false, 44), "http")) {
                // line 45
                echo "                <td class=\"double\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "license", [], "any", false, false, false, 45), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "license", [], "any", false, false, false, 45), "html", null, true);
                echo "</a></td>
            ";
            } else {
                // line 47
                echo "                <td class=\"double\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "license", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
            ";
            }
            // line 49
            echo "        </tr>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "description", [], "any", false, false, false, 52)) {
            // line 53
            echo "        <tr>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "description_html", [], "any", false, false, false, 55);
            echo "</td>
        </tr>
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "readme", [], "any", false, false, false, 59) || twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "homepage", [], "any", false, false, false, 59))) {
            // line 60
            echo "        ";
            $context["readme_link"] = ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "readme", [], "any", false, false, false, 60)) ? (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "readme", [], "any", false, false, false, 60)) : (((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "docs", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "docs", [], "any", false, false, false, 60), (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "homepage", [], "any", false, false, false, 60) . "/blob/master/README.md"))) : ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "homepage", [], "any", false, false, false, 60) . "/blob/master/README.md")))));
            // line 61
            echo "        <tr>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "readme", [], "any", false, false, false, 62)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.README")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DOCS"))), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 67), "findPackage", [0 => twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "slug", [], "any", false, false, false, 67), 1 => true], "method", false, false, false, 67), "changelog", [], "any", false, false, false, 67)) {
            // line 68
            echo "    <tr>
        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CHANGELOG"), "html", null, true);
            echo ":</td>
        <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/changelog/slug:" . twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "slug", [], "any", false, false, false, 70))), "html", null, true);
            echo "\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
    </tr>
    ";
        }
        // line 73
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "partials/plugin-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 73,  235 => 70,  231 => 69,  228 => 68,  226 => 67,  223 => 66,  215 => 63,  211 => 62,  208 => 61,  205 => 60,  203 => 59,  200 => 58,  194 => 55,  190 => 54,  187 => 53,  185 => 52,  182 => 51,  178 => 49,  172 => 47,  164 => 45,  162 => 44,  158 => 43,  155 => 42,  152 => 41,  146 => 38,  142 => 37,  139 => 36,  136 => 35,  128 => 32,  124 => 31,  121 => 30,  118 => 29,  110 => 26,  106 => 25,  103 => 24,  100 => 23,  92 => 20,  88 => 19,  85 => 18,  82 => 17,  77 => 14,  69 => 12,  66 => 11,  60 => 9,  52 => 7,  50 => 6,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table>
    {% if plugin.author %}
    <tr>
        <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|t }}:</td>
        <td class=\"double\">
            {% if plugin.author.url %}
                <a href=\"{{ plugin.author.url }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ plugin.author.name }}</a>
            {% else %}
                {{ plugin.author.name }}
            {% endif %}
            {% if plugin.author.email %}
                - <a href=\"mailto:{{ plugin.author.email }}\">{{ plugin.author.email }}</a>
            {% endif %}
        </td>
    </tr>
    {% endif %}
    {% if plugin.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|t }}:</td>
            <td class=\"double\"><a href=\"{{ plugin.homepage }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ plugin.homepage }}</a></td>
        </tr>
    {% endif %}
    {% if plugin.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|t }}:</td>
            <td class=\"double\"><a href=\"{{ plugin.demo }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ plugin.demo }}</a></td>
        </tr>
    {% endif %}
    {% if plugin.bugs %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|t }}:</td>
            <td class=\"double\"><a href=\"{{ plugin.bugs }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ plugin.bugs }}</a></td>
        </tr>
    {% endif %}
    {% if plugin.keywords %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|t }}:</td>
            <td class=\"double\">{{ plugin.keywords|join(', ') }}</td>
        </tr>
    {% endif %}
    {% if plugin.license %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.LICENSE\"|t }}:</td>
            {% if plugin.license|starts_with('http') %}
                <td class=\"double\"><a href=\"{{ plugin.license }}\" target=\"_blank\">{{ plugin.license }}</a></td>
            {% else %}
                <td class=\"double\">{{ plugin.license }}</td>
            {% endif %}
        </tr>
    {% endif %}

    {% if plugin.description %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|t }}:</td>
            <td class=\"double\">{{ plugin.description_html|raw }}</td>
        </tr>
    {% endif %}

    {% if plugin.readme or plugin.homepage %}
        {% set readme_link = plugin.readme ?: plugin.docs|default(plugin.homepage ~ '/blob/master/README.md') %}
        <tr>
            <td>{{ plugin.readme ? \"PLUGIN_ADMIN.README\"|t : \"PLUGIN_ADMIN.DOCS\"|t }}:</td>
            <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ readme_link }}</a></td>
        </tr>
    {% endif %}

    {% if admin.gpm.findPackage(plugin.slug, true).changelog %}
    <tr>
        <td>{{ \"PLUGIN_ADMIN.CHANGELOG\"|t }}:</td>
        <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"{{ admin_route('/changelog/slug:' ~ plugin.slug) }}\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
    </tr>
    {% endif %}

</table>
", "partials/plugin-data.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\plugin-data.html.twig");
    }
}

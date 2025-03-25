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

/* partials/dashboard-pages.html.twig */
class __TwigTemplate_19a26bfe8ee26aa7ec49264d5ddbbd29 extends \Twig\Template
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
        if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.pages.list", 1 => "admin.pages", 2 => "admin.super"])) {
            // line 2
            echo "    <div id=\"latest\">
        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/pages"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</a>
        </div>
        <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LATEST_PAGE_UPDATES"), "html", null, true);
            echo "</h1>
        <table>
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "latestPages", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "latestPages", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "            ";
                    $context["route"] = twig_get_attribute($this->env, $this->source, $context["latest"], "rawRoute", [], "any", false, false, false, 9);
                    // line 10
                    echo "            <tr>
                <td class=\"triple page-title\">
                    <a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/pages/" . twig_trim_filter(($context["route"] ?? null), "/"))), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["latest"], "title", [], "any", false, false, false, 12), "html", null, true);
                    echo "</a></td>
                <td class=\"triple page-route\">";
                    // line 13
                    echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminNicetimeFilter(twig_get_attribute($this->env, $this->source, $context["latest"], "modified", [], "any", false, false, false, 13)), "html", null, true);
                    echo "</td>
            </tr>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </table>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/dashboard-pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  73 => 13,  67 => 12,  63 => 10,  60 => 9,  55 => 8,  50 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.pages.list', 'admin.pages', 'admin.super']) %}
    <div id=\"latest\">
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/pages') }}\"><i class=\"fa fa-fw fa-file-text-o\"></i>{{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|t }}</a>
        </div>
        <h1>{{ \"PLUGIN_ADMIN.LATEST_PAGE_UPDATES\"|t }}</h1>
        <table>
        {% for latest in admin.latestPages if admin.latestPages %}
            {% set route = latest.rawRoute %}
            <tr>
                <td class=\"triple page-title\">
                    <a href=\"{{ admin_route('/pages/' ~ route|trim('/')) }}\"><i class=\"fa fa-fw fa-file-text-o\"></i> {{ latest.title }}</a></td>
                <td class=\"triple page-route\">{{ route }}</td><td>{{ latest.modified|adminNicetime }}</td>
            </tr>
        {% endfor %}
        </table>
    </div>
{% endif %}
", "partials/dashboard-pages.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-pages.html.twig");
    }
}

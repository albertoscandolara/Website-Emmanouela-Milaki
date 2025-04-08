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

/* flex-objects/layouts/accounts/partials/top.html.twig */
class __TwigTemplate_c8ee12fc46262fd920651dd75bd85071 extends \Twig\Template
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
        $context["active_html"] = "class=\"active\"";
        // line 2
        $context["is_configure"] = (twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "gravParam", [0 => ""], "method", false, false, false, 2) === "configure");
        // line 3
        $context["authorize"] = (((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method", false, false, false, 3)) : ((((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", false, false, false, 3)) : ("admin.super"))));
        // line 4
        echo "
";
        // line 5
        if (($context["allowed"] ?? null)) {
            // line 6
            echo "<div class=\"form-tabs\">
    <div class=\"tabs-nav\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["user-accounts" => "PLUGIN_ADMIN.USERS", "user-groups" => "PLUGIN_ADMIN.GROUPS"]);
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 9
                echo "        ";
                $context["current"] = twig_get_attribute($this->env, $this->source, ($context["flex"] ?? null), "directory", [0 => $context["name"]], "method", false, false, false, 9);
                // line 10
                echo "        ";
                if ((($context["current"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["current"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 10))) {
                    // line 11
                    echo "        ";
                    $context["active"] = ( !($context["is_configure"] ?? null) && $this->extensions['Grav\Common\Twig\Extension\GravExtension']->startsWithFilter(($context["nav_route"] ?? null), (twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["flex"] ?? null), "adminRoute", [0 => ($context["current"] ?? null)], "method", false, false, false, 11), "/") . "/")));
                    // line 12
                    echo "        <a ";
                    echo ((($context["active"] ?? null)) ? (($context["active_html"] ?? null)) : (""));
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(twig_get_attribute($this->env, $this->source, ($context["flex"] ?? null), "adminRoute", [0 => ($context["current"] ?? null)], "method", false, false, false, 12)), "html", null, true);
                    echo "\">
            <span>";
                    // line 13
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter($context["title"]), "html", null, true);
                    echo "</span>
        </a>
        ";
                }
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
        ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => ($context["authorize"] ?? null)], "method", false, false, false, 18) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => "admin.super"], "method", false, false, false, 18))) {
                // line 19
                echo "        <a ";
                echo ((($context["is_configure"] ?? null)) ? (($context["active_html"] ?? null)) : (""));
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/accounts/configure"), "html", null, true);
                echo "\">
            <span>";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
                echo "</span>
        </a>
        ";
            }
            // line 23
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/layouts/accounts/partials/top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  96 => 20,  89 => 19,  87 => 18,  84 => 17,  78 => 16,  72 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  52 => 8,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set active_html = 'class=\"active\"' %}
{% set is_configure = route.gravParam('') is same as('configure') %}
{% set authorize = directory.config('admin.views.configure.authorize') ?? directory.config('admin.configure.authorize') ?? 'admin.super' %}

{% if allowed %}
<div class=\"form-tabs\">
    <div class=\"tabs-nav\">
        {% for name,title in {'user-accounts': 'PLUGIN_ADMIN.USERS', 'user-groups': 'PLUGIN_ADMIN.GROUPS'} %}
        {% set current = flex.directory(name) %}
        {% if current and current.isAuthorized('list', 'admin', user) %}
        {% set active = not is_configure and nav_route|starts_with(flex.adminRoute(current)|trim('/') ~ '/') %}
        <a {{active ? active_html|raw }} href=\"{{ admin_route(flex.adminRoute(current)) }}\">
            <span>{{ title|tu }}</span>
        </a>
        {% endif %}
        {% endfor %}

        {% if user.authorize(authorize) or user.authorize('admin.super') %}
        <a {{is_configure ? active_html|raw }} href=\"{{ admin_route('/accounts/configure') }}\">
            <span>{{ 'PLUGIN_ADMIN.CONFIGURATION'|tu }}</span>
        </a>
        {% endif %}
    </div>
</div>
{% endif %}
", "flex-objects/layouts/accounts/partials/top.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\layouts\\accounts\\partials\\top.html.twig");
    }
}

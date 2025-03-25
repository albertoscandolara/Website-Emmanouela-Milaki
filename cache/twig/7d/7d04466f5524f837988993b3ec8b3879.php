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

/* partials/javascript-config.html.twig */
class __TwigTemplate_be54f2d64d46c3a87d3c2b18d65ae51d extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorized", [], "any", false, false, false, 1) && $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.login", 1 => "admin.super"]))) {
            // line 2
            $context["notifications"] = ((((((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "widgets", [], "any", false, false, false, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dashboard-notifications"] ?? null) : null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "notifications", [], "any", false, false, false, 2), "dashboard", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "notifications", [], "any", false, false, false, 2), "plugins", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "notifications", [], "any", false, false, false, 2), "themes", [], "any", false, false, false, 2))) ? (1) : (0));
            // line 3
            switch (($context["template_route"] ?? null)) {
                case "dashboard":
                {
                    // line 5
                    echo "        ";
                    $context["notifications_filters"] = "['feed', 'dashboard', 'top']";
                    // line 6
                    echo "    ";
                    break;
                }
                case "plugins":
                {
                    // line 7
                    echo "        ";
                    $context["notifications_filters"] = "['plugins', 'top']";
                    // line 8
                    echo "    ";
                    break;
                }
                case "themes":
                {
                    // line 9
                    echo "        ";
                    $context["notifications_filters"] = "['themes', 'top']";
                    // line 10
                    echo "    ";
                    break;
                }
                default:
                {
                    // line 11
                    echo "        ";
                    $context["notifications_filters"] = "['top']";
                }
            }
            // line 13
            echo "<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "getCurrentRoute", [], "method", false, false, false, 16), "withLanguage", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 16), "active", [], "any", false, false, false, 16)], "method", false, false, false, 16), "withExtension", [0 => ""], "method", false, false, false, 16), "withoutParams", [], "method", false, false, false, 16), "toString", [0 => true], "method", false, false, false, 16), "html", null, true);
            echo "',
        base_url_relative: '";
            // line 17
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "',
        base_url_simple: '";
            // line 18
            echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
            echo "',
        route: '";
            // line 19
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 19), "/"), "html", null, true);
            echo "',
        param_sep: '";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 20), "param_sep", [], "any", false, false, false, 20), "html", null, true);
            echo "',
        ";
            // line 21
            if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                // line 22
                echo "        enable_auto_updates_check: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 22), "admin", [], "any", false, false, false, 22), "enable_auto_updates_check", [], "any", false, false, false, 22), "html", null, true);
                echo "',
        ";
            }
            // line 24
            echo "        admin_timeout: '";
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 24), "admin", [], "any", false, false, false, 24), "session", [], "any", false, false, false, 24), "timeout", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 24), "admin", [], "any", false, false, false, 24), "session", [], "any", false, false, false, 24), "timeout", [], "any", false, false, false, 24), "html", null, true))) : (print (1800)));
            echo "',
        admin_nonce: '";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getNonce", [], "any", false, false, false, 25), "html", null, true);
            echo "',
        language: '";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, true, false, 26), "language", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, true, false, 26), "language", [], "any", false, false, false, 26), "en")) : ("en")), "html", null, true);
            echo "',
        pro_enabled: '";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 27)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["admin-pro"] ?? null) : null), "enabled", [], "any", false, false, false, 27), "html", null, true);
            echo "',
        notifications: {
            enabled: ";
            // line 29
            echo twig_escape_filter($this->env, ($context["notifications"] ?? null), "html", null, true);
            echo ",
            filters: ";
            // line 30
            echo ($context["notifications_filters"] ?? null);
            echo "
        },
        local_notifications: '";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, true, false, 32), "local_notifications", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, true, false, 32), "local_notifications", [], "any", false, false, false, 32), false)) : (false)), "html", null, true);
            echo "',
        site: {
            delimiter: '";
            // line 34
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, true, false, 34), "summary", [], "any", false, true, false, 34), "delimiter", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, true, false, 34), "summary", [], "any", false, true, false, 34), "delimiter", [], "any", false, false, false, 34), "===")) : ("===")), "html", null, true);
            echo "'
        }
    };
    window.GravAdmin.uri_params = {};

    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 39), "params", [0 => null, 1 => true], "method", false, false, false, 39));
            foreach ($context['_seq'] as $context["param"] => $context["value"]) {
                // line 40
                echo "        window.GravAdmin.uri_params[";
                echo json_encode($context["param"]);
                echo "] = \"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["value"], ["\\" => "/"]), "html", null, true);
                echo "\";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/javascript-config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  154 => 40,  150 => 39,  142 => 34,  137 => 32,  132 => 30,  128 => 29,  123 => 27,  119 => 26,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  77 => 13,  72 => 11,  66 => 10,  63 => 9,  57 => 8,  54 => 7,  48 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user.authorized and authorize(['admin.login', 'admin.super']) %}
{% set notifications = (config.plugins.admin.widgets['dashboard-notifications'] or config.plugins.admin.notifications.dashboard or config.plugins.admin.notifications.plugins or config.plugins.admin.notifications.themes) ? 1 : 0 %}
{% switch template_route %}
    {% case 'dashboard' %}
        {% set notifications_filters = \"['feed', 'dashboard', 'top']\" %}
    {% case 'plugins' %}
        {% set notifications_filters = \"['plugins', 'top']\" %}
    {% case 'themes' %}
        {% set notifications_filters = \"['themes', 'top']\" %}
    {% default %}
        {% set notifications_filters = \"['top']\" %}
{% endswitch %}
<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '{{ uri.getCurrentRoute().withLanguage(grav.language.active).withExtension('').withoutParams().toString(true) }}',
        base_url_relative: '{{ base_url_relative }}',
        base_url_simple: '{{ base_url_simple }}',
        route: '{{ admin.route|trim('/') }}',
        param_sep: '{{ config.system.param_sep }}',
        {% if authorize(['admin.maintenance', 'admin.super']) %}
        enable_auto_updates_check: '{{ config.plugins.admin.enable_auto_updates_check }}',
        {% endif %}
        admin_timeout: '{{ config.plugins.admin.session.timeout ?: 1800 }}',
        admin_nonce: '{{ admin.getNonce }}',
        language: '{{ grav.user.language|default('en') }}',
        pro_enabled: '{{ config.plugins[\"admin-pro\"].enabled }}',
        notifications: {
            enabled: {{ notifications }},
            filters: {{ notifications_filters|raw }}
        },
        local_notifications: '{{ config.system.local_notifications|default(false) }}',
        site: {
            delimiter: '{{ config.site.summary.delimiter|default('===') }}'
        }
    };
    window.GravAdmin.uri_params = {};

    {% for param, value in grav.uri.params(null, true) %}
        window.GravAdmin.uri_params[{{ param|json_encode|raw }}] = \"{{value|replace({'\\\\': '/'})}}\";
    {% endfor %}
</script>
{% endif %}
", "partials/javascript-config.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\javascript-config.html.twig");
    }
}

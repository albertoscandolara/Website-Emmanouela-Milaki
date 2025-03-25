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

/* plugins.html.twig */
class __TwigTemplate_0c2ed755b475e81a38009022d01c085b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["plugin_slug"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 3);
        // line 4
        $context["enabled"] = true;
        // line 6
        if (($context["plugin_slug"] ?? null)) {
            // line 7
            $context["installing"] = (is_string($__internal_compile_0 = ($context["plugin_slug"] ?? null)) && is_string($__internal_compile_1 = "install") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)));
            // line 9
            if (($context["installing"] ?? null)) {
                // line 10
                $context["title"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGINS");
            } else {
                // line 12
                $context["installed"] = true;
                // line 15
                $context["package"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "plugins", [0 => true], "method", false, false, false, 15)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 15)] ?? null) : null);
                // line 16
                if ( !($context["package"] ?? null)) {
                    // line 17
                    $context["package"] = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "plugins", [0 => false], "method", false, false, false, 17)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 17)] ?? null) : null);
                    // line 18
                    $context["installed"] = false;
                }
                // line 21
                $context["plugin"] = twig_get_attribute($this->env, $this->source, ($context["package"] ?? null), "toArray", [], "method", false, false, false, 21);
                // line 22
                $context["title"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGIN") . ": ") . twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 22));
                // line 23
                $context["data"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "data", [0 => ("plugins/" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 23))], "method", false, false, false, 23);
                // line 24
                $context["enabled"] = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "enabled"], "method", false, false, false, 24);
            }
        } else {
            // line 27
            $context["title"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGINS");
        }
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 30) || ($context["installing"] ?? null))) {
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        ";
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method", false, false, false, 32);
        // line 33
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 41
    public function block_titlebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 42) || ($context["installing"] ?? null))) {
            // line 43
            echo "        <div class=\"button-bar\">
        ";
            // line 44
            if (($context["installing"] ?? null)) {
                // line 45
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins"), "html", null, true);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 47
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/"), "html", null, true);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins/install"), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 49
                if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                    // line 50
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 52
                echo "        ";
            }
            // line 53
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGINS"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 56
            echo "        ";
            if (($context["installed"] ?? null)) {
                // line 57
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins"), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins/install"), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 60
                $__internal_compile_4 = null;
                try {
                    $__internal_compile_4 =                     $this->loadTemplate((("plugins/" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 60)) . "-buttons.html.twig"), "plugins.html.twig", 60);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_4) {
                    $__internal_compile_4->display($context);
                }
                // line 61
                echo "            ";
                if (($context["enabled"] ?? null)) {
                    // line 62
                    echo "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 64
                echo "        </div>
        ";
            } else {
                // line 66
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins/install"), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 70
            echo "
        <h1><i class=\"fa fa-fw fa-";
            // line 71
            (((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "icon", [], "any", true, true, false, 71) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "icon", [], "any", false, false, false, 71)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "icon", [], "any", false, false, false, 71), "html", null, true))) : (print ("plug")));
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGIN"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 71), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 75
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
    ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "notifications", [], "any", false, false, false, 77), "plugins", [], "any", false, false, false, 77)) {
            // line 78
            echo "        <div class=\"plugins-notifications-container hidden\"></div>
    ";
        }
    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "    <div class=\"gpm gpm-plugins\">
        ";
        // line 84
        if (( !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 84) || ($context["installing"] ?? null))) {
            // line 85
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 85)->display($context);
            // line 86
            echo "        ";
        } else {
            // line 87
            echo "            ";
            if ((null === ($context["plugin"] ?? null))) {
                // line 88
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->redirectFunc((($context["base_url_relative"] ?? null) . "/404")), "html", null, true);
                echo "
            ";
            }
            // line 90
            echo "
            ";
            // line 91
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 91)->display($context);
            // line 92
            echo "        ";
        }
        // line 93
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 93,  280 => 92,  278 => 91,  275 => 90,  269 => 88,  266 => 87,  263 => 86,  260 => 85,  258 => 84,  255 => 83,  251 => 82,  245 => 78,  243 => 77,  238 => 76,  234 => 75,  223 => 71,  220 => 70,  212 => 67,  209 => 66,  205 => 64,  199 => 62,  196 => 61,  186 => 60,  180 => 59,  174 => 58,  171 => 57,  168 => 56,  163 => 54,  160 => 53,  157 => 52,  151 => 50,  149 => 49,  143 => 48,  136 => 47,  128 => 45,  126 => 44,  123 => 43,  120 => 42,  116 => 41,  109 => 37,  105 => 36,  98 => 33,  95 => 32,  91 => 31,  86 => 1,  83 => 30,  80 => 27,  76 => 24,  74 => 23,  72 => 22,  70 => 21,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  59 => 12,  56 => 10,  54 => 9,  52 => 7,  50 => 6,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set plugin_slug = admin.route %}
{% set enabled = true %}

{% if plugin_slug %}
    {% set installing = plugin_slug starts with 'install' %}

    {% if installing %}
        {% set title = \"PLUGIN_ADMIN.PLUGINS\"|t %}
    {% else %}
        {% set installed = true %}

        {# Try installed packages first, then remote #}
        {% set package = admin.plugins(true)[admin.route] %}
        {% if (not package) %}
            {% set package = admin.plugins(false)[admin.route] %}
            {% set installed = false %}
        {% endif %}

        {% set plugin = package.toArray() %}
        {% set title = \"PLUGIN_ADMIN.PLUGIN\"|t ~ \": \" ~ plugin.name %}
        {% set data = admin.data('plugins/' ~ admin.route) %}
        {% set enabled = data.get('enabled') %}
    {% endif %}
{% else %}
    {% set title = \"PLUGIN_ADMIN.PLUGINS\"|t %}
{% endif %}

{% if admin.route or installing %}
    {% block stylesheets %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
        {{ parent() }}
    {% endblock %}

    {% block javascripts %}
        {{ parent() }}
    {% endblock %}
{% endif %}

{% block titlebar %}
    {% if not admin.route or installing %}
        <div class=\"button-bar\">
        {% if (installing) %}
            <a class=\"button\" href=\"{{ admin_route('/plugins') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
        {% else %}
            <a class=\"button\" href=\"{{ admin_route('/') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
            <a class=\"button\" href=\"{{ admin_route('/plugins/install') }}\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|t }}</a>
            {% if authorize(['admin.maintenance', 'admin.super']) %}
                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> {{ \"PLUGIN_ADMIN.CHECK_FOR_UPDATES\"|t }}</button>
            {% endif %}
        {% endif %}
        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> {{ \"PLUGIN_ADMIN.PLUGINS\"|t }}</h1>
    {% else %}
        {% if (installed) %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/plugins') }}\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_PLUGINS\"|t }}</a>
            <a class=\"button\" href=\"{{ admin_route('/plugins/install') }}\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|t }}</a>
            {% include 'plugins/'~admin.route~'-buttons.html.twig' ignore missing %}
            {% if enabled %}
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|t }}</button>
            {% endif %}
        </div>
        {% else %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/plugins/install') }}\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_PLUGINS\"|t }}</a>
        </div>
        {% endif %}

        <h1><i class=\"fa fa-fw fa-{{ plugin.icon ?? 'plug' }}\"></i> {{ \"PLUGIN_ADMIN.PLUGIN\"|t }}: {{ plugin.name }}</h1>
    {% endif %}
{% endblock %}

{% block messages %}
    {{ parent() }}
    {% if config.plugins.admin.notifications.plugins %}
        <div class=\"plugins-notifications-container hidden\"></div>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"gpm gpm-plugins\">
        {% if not admin.route or installing %}
            {% include 'partials/plugins-list.html.twig' %}
        {% else %}
            {% if plugin is null %}
                {{redirect_me(base_url_relative ~ '/404')}}
            {% endif %}

            {% include 'partials/plugins-details.html.twig' %}
        {% endif %}
    </div>
{% endblock %}
", "plugins.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\plugins.html.twig");
    }
}

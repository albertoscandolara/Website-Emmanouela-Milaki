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

/* partials/nav.html.twig */
class __TwigTemplate_192ca803e82a3cf47e4c383af28da4b0 extends \Twig\Template
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
        $context["nav_hover"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 1), "admin", [], "any", false, false, false, 1), "sidebar", [], "any", false, false, false, 1), "activate", [], "any", false, false, false, 1) == "hover");
        // line 2
        if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 3
            echo "    <nav id=\"admin-sidebar\" data-quickopen=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "sidebar", [], "any", false, false, false, 3), "activate", [], "any", false, false, false, 3) == "hover")) ? ("true") : ("false"));
            echo "\" data-quickopen-delay=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "sidebar", [], "any", false, false, false, 3), "hover_delay", [], "any", false, false, false, 3), "html", null, true);
            echo "\">

        <div id=\"admin-logo\" class=\"";
            // line 5
            echo ((($context["nav_hover"] ?? null)) ? ("nav-hover") : (""));
            echo "\">
            ";
            // line 6
            if ( !($context["nav_hover"] ?? null)) {
                // line 7
                echo "                <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-right\"></i></div>
            ";
            }
            // line 9
            echo "            ";
            $this->loadTemplate("partials/logo.html.twig", "partials/nav.html.twig", 9)->display($context);
            // line 10
            echo "        </div>

        ";
            // line 12
            $this->loadTemplate("partials/nav-user-details.html.twig", "partials/nav.html.twig", 12)->display($context);
            // line 13
            echo "
        ";
            // line 14
            $this->loadTemplate("partials/nav-quick-tray.html.twig", "partials/nav.html.twig", 14)->display($context);
            // line 15
            echo "
        <div data-simplebar class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 18), "plugins_hooked_nav", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 19
                echo "                    ";
                $context["route"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 19)))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 19)) : (twig_get_attribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 19))), "/");
                // line 20
                echo "                    ";
                $context["location"] = (twig_trim_filter((((twig_get_attribute($this->env, $this->source, $context["item"], "location", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 20)))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 20)) : (twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 20))), "/") . "/");
                // line 21
                echo "                    ";
                $context["auth_rule"] = ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21)) : ([0 => ((twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21)) : (("admin." . ($context["route"] ?? null)))), 1 => "admin.super"]));
                // line 22
                echo "                    ";
                if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(($context["auth_rule"] ?? null))) {
                    // line 23
                    echo "                        <li class=\"";
                    echo (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->startsWithFilter(($context["nav_route"] ?? null), ($context["location"] ?? null))) ? ("selected") : (""));
                    echo "\">
                            <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["route"] ?? null)), "html", null, true);
                    echo "\">
                                <i class=\"fa fa-fw ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 25), "html", null, true);
                    echo "\"></i>
                                <em>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["label"]), "html", null, true);
                    echo "</em>
                                ";
                    // line 27
                    $context["badge"] = (((twig_get_attribute($this->env, $this->source, $context["item"], "badge", [], "any", true, true, false, 27) &&  !(null === twig_get_attribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, false, 27)))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, false, 27)) : (null));
                    // line 28
                    echo "                                ";
                    if (($context["badge"] ?? null)) {
                        // line 29
                        echo "                                <span class=\"badges ";
                        if (twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", false, false, false, 29)) {
                            echo "with-updates";
                        }
                        echo "\">
                                    ";
                        // line 30
                        if (twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", true, true, false, 30)) {
                            echo "<span class=\"badge updates\">";
                            ((twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", false, false, false, 30), "html", null, true))) : (print ("")));
                            echo "</span>";
                        }
                        // line 31
                        echo "                                    <span class=\"badge count\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "count", [], "any", false, false, false, 31), "html", null, true);
                        echo "</span>
                                </span>
                                ";
                    }
                    // line 34
                    echo "                            </a>
                        </li>
                    ";
                }
                // line 37
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
                ";
            // line 39
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("partials/nav-pro.html.twig", "partials/nav.html.twig", 39);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
            // line 40
            echo "
                <li>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [0 => (((($context["base_url_relative"] ?? null) . "/task") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 42), "param_sep", [], "any", false, false, false, 42)) . "logout"), 1 => "logout-form", 2 => "logout-nonce"], "method", false, false, false, 42), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-sign-out\"></i><em>";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            echo "</em></a>
                </li>
            </ul>
        </div>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 42,  160 => 40,  150 => 39,  147 => 38,  141 => 37,  136 => 34,  129 => 31,  123 => 30,  116 => 29,  113 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  78 => 18,  73 => 15,  71 => 14,  68 => 13,  66 => 12,  62 => 10,  59 => 9,  55 => 7,  53 => 6,  49 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set nav_hover = config.plugins.admin.sidebar.activate == 'hover' %}
{% if authorize(['admin.login', 'admin.super']) %}
    <nav id=\"admin-sidebar\" data-quickopen=\"{{ config.plugins.admin.sidebar.activate == 'hover' ? 'true' : 'false' }}\" data-quickopen-delay=\"{{ config.plugins.admin.sidebar.hover_delay }}\">

        <div id=\"admin-logo\" class=\"{{ nav_hover ? 'nav-hover' }}\">
            {% if not nav_hover %}
                <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-right\"></i></div>
            {% endif %}
            {% include 'partials/logo.html.twig' %}
        </div>

        {% include 'partials/nav-user-details.html.twig' %}

        {% include 'partials/nav-quick-tray.html.twig' %}

        <div data-simplebar class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                {% for label, item in grav.twig.plugins_hooked_nav %}
                    {% set route = (item.route ?? item.location)|trim('/') %}
                    {% set location = (item.location ?? item.route)|trim('/') ~ '/' %}
                    {% set auth_rule = item.authorize is iterable ? item.authorize : [item.authorize ?: 'admin.' ~ route, 'admin.super'] %}
                    {% if authorize(auth_rule) %}
                        <li class=\"{{ nav_route|starts_with(location) ? 'selected' : '' }}\">
                            <a href=\"{{ admin_route(route) }}\">
                                <i class=\"fa fa-fw {{ item.icon }}\"></i>
                                <em>{{ label|t }}</em>
                                {% set badge = item.badge ?? null %}
                                {% if badge %}
                                <span class=\"badges {% if badge.updates %}with-updates{% endif %}\">
                                    {% if badge.updates is defined %}<span class=\"badge updates\">{{ badge.updates ?: '' }}</span>{% endif %}
                                    <span class=\"badge count\">{{ badge.count }}</span>
                                </span>
                                {% endif %}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% include 'partials/nav-pro.html.twig' ignore missing %}

                <li>
                    <a href=\"{{ uri.addNonce(base_url_relative ~ '/task' ~ config.system.param_sep ~ 'logout', 'logout-form', 'logout-nonce') }}\"><i class=\"fa fa-fw fa-sign-out\"></i><em>{{ \"PLUGIN_ADMIN.LOGOUT\"|t }}</em></a>
                </li>
            </ul>
        </div>
    </nav>
{% endif %}
", "partials/nav.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\nav.html.twig");
    }
}

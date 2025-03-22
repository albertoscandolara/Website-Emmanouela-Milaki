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

/* partials/nav-quick-tray.html.twig */
class __TwigTemplate_601c025d4d6a453775793484a1c50945 extends \Twig\Template
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
        $context["clear_cache_url"] = (((($context["base_url_relative"] ?? null) . "/cache.json/task") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 1), "param_sep", [], "any", false, false, false, 1)) . twig_escape_filter($this->env, "clearCache", "html_attr"));
        // line 2
        echo "<ul id=\"admin-nav-quick-tray\">
    ";
        // line 3
        if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.maintenance", 1 => "admin.super", 2 => "admin.cache"])) {
            // line 4
            echo "    <li class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            echo "\">
        <a data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [0 => ($context["clear_cache_url"] ?? null), 1 => "admin-form", 2 => "admin-nonce"], "method", false, false, false, 5), "html", null, true);
            echo "\">
            <i class=\"fa fa-retweet\"></i>
        </a>
    </li>
    ";
        }
        // line 10
        echo "    ";
        if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.super"]) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 10), "admin", [], "any", false, false, false, 10), "whitelabel", [], "any", false, false, false, 10), "quicktray_recompile", [], "any", false, false, false, 10))) {
            // line 11
            echo "        <li class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.QUICKTRAY_RECOMPILE_HELP"), "html", null, true);
            echo "\">
            <a data-recompile-scss href=\"#\">
                <i class=\"fa fa-paint-brush\"></i>
            </a>
        </li>
    ";
        }
        // line 17
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 17), "plugins_quick_tray", [], "any", false, false, false, 17)) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 18), "plugins_quick_tray", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 19
                echo "        ";
                if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize((((twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", true, true, false, 19) && twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)) : ([0 => ((twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)) : (("admin." . ((twig_get_attribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 19)) : (twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 19)))))), 1 => "admin.super"])))) {
                    // line 20
                    echo "            ";
                    $context["data_tags"] = "";
                    // line 21
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "data", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "data", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 23
                            echo "                    ";
                            $context["data_tags"] = (((((($context["data_tags"] ?? null) . " data-") . $context["key"]) . "=\"") . $context["value"]) . "\"");
                            // line 24
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "            ";
                    }
                    // line 26
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 26), "html", null, true);
                    echo " hint--bottom\" data-hint=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "hint", [], "any", false, false, false, 26), "html", null, true);
                    echo "\" ";
                    echo ($context["data_tags"] ?? null);
                    echo ">
            ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 28)), "html", null, true);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, false, 28)) {
                            echo "target=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, false, 28), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                    <i class=\"fa fa-fw ";
                        // line 29
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 29), "html", null, true);
                        echo "\"></i>
                </a>
            ";
                    } else {
                        // line 32
                        echo "                <i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 32), "html", null, true);
                        echo "\"></i>
            ";
                    }
                    // line 34
                    echo "            </li>
        ";
                }
                // line 36
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        ";
            if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                // line 39
                echo "        <li class=\"hint--bottom\" data-hint=\"Add the 'quick-tray-links' plugin for more...\">
            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins/install"), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus\"></i>
            </a>
        </li>
        ";
            }
            // line 45
            echo "    ";
        }
        // line 46
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "partials/nav-quick-tray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 46,  165 => 45,  157 => 40,  154 => 39,  151 => 38,  148 => 37,  142 => 36,  138 => 34,  132 => 32,  126 => 29,  115 => 28,  113 => 27,  104 => 26,  101 => 25,  95 => 24,  92 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  73 => 18,  70 => 17,  60 => 11,  57 => 10,  49 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set clear_cache_url = base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache'|e('html_attr') %}
<ul id=\"admin-nav-quick-tray\">
    {% if authorize(['admin.maintenance', 'admin.super', 'admin.cache']) %}
    <li class=\"hint--bottom\" data-hint=\"{{ \"PLUGIN_ADMIN.CLEAR_CACHE\"|t }}\">
        <a data-clear-cache-type=\"\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url, 'admin-form', 'admin-nonce') }}\">
            <i class=\"fa fa-retweet\"></i>
        </a>
    </li>
    {% endif %}
    {% if authorize(['admin.super']) and config.plugins.admin.whitelabel.quicktray_recompile %}
        <li class=\"hint--bottom\" data-hint=\"{{ \"PLUGIN_ADMIN.QUICKTRAY_RECOMPILE_HELP\"|t }}\">
            <a data-recompile-scss href=\"#\">
                <i class=\"fa fa-paint-brush\"></i>
            </a>
        </li>
    {% endif %}
    {% if grav.twig.plugins_quick_tray %}
    {% for label, item in grav.twig.plugins_quick_tray %}
        {% if authorize((item.authorize is defined and item.authorize is iterable) ? item.authorize : [item.authorize ?: ('admin.' ~ (item.location ?: item.route)), 'admin.super']) %}
            {% set data_tags = '' %}
            {% if (item.data) %}
                {% for key, value in item.data %}
                    {% set data_tags = data_tags ~ ' data-' ~ key ~ '=\"' ~ value ~ '\"' %}
                {% endfor %}
            {% endif %}
            <li class=\"{{ item.class }} hint--bottom\" data-hint=\"{{ item.hint }}\" {{ data_tags|raw }}>
            {% if item.route %}
                <a href=\"{{ url(item.route) }}\" {% if item.target %}target=\"{{ item.target }}\"{% endif %}>
                    <i class=\"fa fa-fw {{ item.icon }}\"></i>
                </a>
            {% else %}
                <i class=\"fa fa-fw {{ item.icon }}\"></i>
            {% endif %}
            </li>
        {% endif %}
    {% endfor %}
    {% else %}
        {% if authorize(['admin.maintenance', 'admin.super']) %}
        <li class=\"hint--bottom\" data-hint=\"Add the 'quick-tray-links' plugin for more...\">
            <a href=\"{{ admin_route('/plugins/install') }}\">
                <i class=\"fa fa-plus\"></i>
            </a>
        </li>
        {% endif %}
    {% endif %}
</ul>

", "partials/nav-quick-tray.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\nav-quick-tray.html.twig");
    }
}

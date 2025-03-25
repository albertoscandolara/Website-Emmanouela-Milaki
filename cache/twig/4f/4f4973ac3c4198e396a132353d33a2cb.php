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

/* partials/plugins-details.html.twig */
class __TwigTemplate_239e30ec6438b514039173326c851770 extends \Twig\Template
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
        $context["gpm"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "method", false, false, false, 1);
        // line 2
        $context["installed"] = twig_get_attribute($this->env, $this->source, ($context["gpm"] ?? null), "isPluginInstalled", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        // line 3
        $context["isTestingRelease"] = twig_get_attribute($this->env, $this->source, ($context["gpm"] ?? null), "isTestingRelease", [0 => twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "slug", [], "any", false, false, false, 3)], "method", false, false, false, 3);
        // line 4
        $context["gumroad_loaded"] = false;
        // line 5
        echo "
<div class=\"grav-update plugin\" data-gpm-plugin=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isTeamGrav", [0 => ($context["plugin"] ?? null)], "method", false, false, false, 11)) {
            // line 12
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isPremiumProduct", [0 => ($context["plugin"] ?? null)], "method", false, false, false, 14)) {
            // line 15
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 17
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "symlink", [], "any", false, false, false, 17)) {
            // line 18
            echo "    <small class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 22
        echo "    <small>";
        ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "version", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, ("v" . twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "version", [], "any", false, false, false, 22)), "html", null, true))) : (print ("")));
        echo "</small>
    ";
        // line 23
        if (($context["isTestingRelease"] ?? null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 24
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "icon", [], "any", false, false, false, 26), "html", null, true);
        echo "\"></i>
    ";
        // line 27
        $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-details.html.twig", 27)->display(twig_array_merge($context, ["plugin" => ($context["plugin"] ?? null)]));
        // line 28
        echo "</div>

";
        // line 30
        if (($context["installed"] ?? null)) {
            // line 31
            echo "    ";
            $context["data"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "data", [0 => ("plugins/" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 31))], "method", false, false, false, 31);
            // line 32
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "enabled"], "method", false, false, false, 32)) {
                // line 33
                echo "      ";
                $this->loadTemplate("partials/blueprints.html.twig", "partials/plugins-details.html.twig", 33)->display(twig_array_merge($context, ["data" => ($context["data"] ?? null), "blueprints" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "blueprints", [], "any", false, false, false, 33)]));
                // line 34
                echo "    ";
            } else {
                // line 35
                echo "      <form>
        <div class=\"form-field grid\">
          <div class=\"form-label block size-1-3\">
            <label>";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGINS_MUST_BE_ENABLED"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"form-data block size-2-3\">
            <a class=\"button\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url_relative"] ?? null) . "/plugins/") . twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "slug", [], "any", false, false, false, 41)) . "/task") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 41), "param_sep", [], "any", false, false, false, 41)) . "enable"), 1 => "admin-form", 2 => "admin-nonce"], "method", false, false, false, 41) . "/redirect:true"), "html", null, true);
                echo "\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> ";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ENABLE"), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</strong>
            </a>
          </div>
        </div>
      </form>
    ";
            }
            // line 48
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "form", [], "any", false, false, false, 48), "fields", [], "any", false, false, false, 48), "enabled", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48) != "hidden") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "form", [], "any", false, false, false, 48), "fields", [], "any", false, false, false, 48), "tabs", [], "any", false, false, false, 48), "fields", [], "any", false, false, false, 48), "login", [], "any", false, false, false, 48), "fields", [], "any", false, false, false, 48), "enabled", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48) != "hidden"))) {
                // line 49
                echo "        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            ";
                // line 51
                if ( !twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "symlink", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REINSTALL_PLUGIN"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 54
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVE_PLUGIN"), "html", null, true);
                echo "</a>
        </div>
    ";
            }
        } else {
            // line 58
            echo "    <div class=\"button-bar success\">
        ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "premium", [], "any", false, false, false, 59) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "license", [0 => twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "slug", [], "any", false, false, false, 59)], "method", false, false, false, 59))) {
                // line 60
                echo "            ";
                if ( !($context["gumroad_loaded"] ?? null)) {
                    // line 61
                    echo "                ";
                    $context["gumroad_loaded"] = true;
                    // line 62
                    echo "                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            ";
                }
                // line 64
                echo "            <a class=\"gumroad-button button\" href=\"https://gum.co/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "premium", [], "any", false, false, false, 64), "permalink", [], "any", false, false, false, 64), "html", null, true);
                echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "premium", [], "any", false, true, false, 64), "button", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "premium", [], "any", false, true, false, 64), "button", [], "any", false, false, false, 64), "Purchase")) : ("Purchase")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 66
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "slug", [], "any", false, false, false, 66), "html", null, true);
                echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALL_PLUGIN"), "html", null, true);
                echo "</a>
        ";
            }
            // line 68
            echo "    </div>
";
        }
        // line 70
        echo "
";
        // line 71
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/plugins-details.html.twig", 71)->display($context);
        // line 72
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-details.html.twig", 72)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 73
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-details.html.twig", 73)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 74
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/plugins-details.html.twig", 74)->display(twig_array_merge($context, ["type" => "plugin", "package" => ($context["plugin"] ?? null)]));
        // line 75
        $this->loadTemplate("partials/modal-reinstall-package.html.twig", "partials/plugins-details.html.twig", 75)->display(twig_array_merge($context, ["type" => "plugin", "package" => ($context["plugin"] ?? null)]));
        // line 76
        $this->loadTemplate("partials/modal-changelog.html.twig", "partials/plugins-details.html.twig", 76)->display(twig_array_merge($context, ["package" => ($context["plugin"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "partials/plugins-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 76,  219 => 75,  217 => 74,  215 => 73,  213 => 72,  211 => 71,  208 => 70,  204 => 68,  196 => 66,  188 => 64,  184 => 62,  181 => 61,  178 => 60,  176 => 59,  173 => 58,  165 => 54,  159 => 52,  157 => 51,  153 => 49,  150 => 48,  139 => 42,  135 => 41,  129 => 38,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  112 => 31,  110 => 30,  106 => 28,  104 => 27,  100 => 26,  96 => 24,  92 => 23,  87 => 22,  79 => 18,  76 => 17,  70 => 15,  67 => 14,  61 => 12,  59 => 11,  55 => 10,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set gpm = admin.gpm() %}
{% set installed = gpm.isPluginInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}
{% set gumroad_loaded = false %}

<div class=\"grav-update plugin\" data-gpm-plugin=\"{{ admin.route }}\">
</div>

<h1>
    {{ plugin.name }}
    {% if admin.isTeamGrav(plugin) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN\"|t }}\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(plugin) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|t }}</span></small>
    {% endif %}
    {% if plugin.symlink %}
    <small class=\"hint--bottom\" data-hint=\"{{ \"PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED\"|t }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ plugin.version ? 'v' ~ plugin.version }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{ plugin.icon }}\"></i>
    {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}
</div>

{% if (installed) %}
    {% set data = admin.data('plugins/' ~ admin.route) %}
    {% if data.get('enabled') %}
      {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}
    {% else %}
      <form>
        <div class=\"form-field grid\">
          <div class=\"form-label block size-1-3\">
            <label>{{ \"PLUGIN_ADMIN.PLUGINS_MUST_BE_ENABLED\"|t }}</label>
          </div>
          <div class=\"form-data block size-2-3\">
            <a class=\"button\" href=\"{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ plugin.slug ~ '/task' ~ config.system.param_sep ~ 'enable', 'admin-form', 'admin-nonce') ~ '/redirect:true' }}\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> {{ \"PLUGIN_ADMIN.ENABLE\"|t }} <strong>{{ plugin.name }}</strong>
            </a>
          </div>
        </div>
      </form>
    {% endif %}
    {% if (plugin.form.fields.enabled.type != 'hidden' and plugin.form.fields.tabs.fields.login.fields.enabled.type != 'hidden') %}
        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            {% if not plugin.symlink %}
                <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> {{ \"PLUGIN_ADMIN.REINSTALL_PLUGIN\"|t }}</a>
            {% endif %}
            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_PLUGIN\"|t }}</a>
        </div>
    {% endif %}
{% else %}
    <div class=\"button-bar success\">
        {% if (plugin.premium and not admin.license(plugin.slug)) %}
            {% if not gumroad_loaded %}
                {% set gumroad_loaded = true %}
                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            {% endif %}
            <a class=\"gumroad-button button\" href=\"https://gum.co/{{ plugin.premium.permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ plugin.premium.button|default('Purchase') }}</a>
        {% else %}
            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ plugin.slug }}\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_PLUGIN\"|t }}</a>
        {% endif %}
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'plugin', package: plugin } %}
{% include 'partials/modal-reinstall-package.html.twig' with { type: 'plugin', package: plugin } %}
{% include 'partials/modal-changelog.html.twig' with { package: plugin} %}
", "partials/plugins-details.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\plugins-details.html.twig");
    }
}

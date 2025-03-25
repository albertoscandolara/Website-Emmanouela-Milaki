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

/* partials/plugins-list.html.twig */
class __TwigTemplate_2f775597f476fae497cb318d18e77b72 extends \Twig\Template
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
        $context["gumroad_loaded"] = false;
        // line 2
        echo "<div class=\"grav-update plugins\"></div>
";
        // line 3
        if (($context["installing"] ?? null)) {
            // line 4
            echo "    ";
            $this->loadTemplate("partials/release-toggle.html.twig", "partials/plugins-list.html.twig", 4)->display($context);
        }
        // line 6
        $this->loadTemplate("partials/list-sort.html.twig", "partials/plugins-list.html.twig", 6)->display(twig_array_merge($context, ["list_view" => "plugins"]));
        // line 7
        echo "<h1>
    ";
        // line 8
        echo twig_escape_filter($this->env, ((($context["installing"] ?? null)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AVAILABLE_PLUGINS")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALLED_PLUGINS"))), "html", null, true);
        echo "
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESOURCE_FILTER"), "html", null, true);
        echo "\" data-gpm-filter>
    </div>
</form>

<table>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->ksortFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "plugins", [0 =>  !($context["installing"] ?? null)], "method", false, false, false, 17), "toArray", [], "any", false, false, false, 17)));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["slug"] => $context["plugin"]) {
            // line 18
            echo "        ";
            $context["data"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "data", [0 => ("plugins/" . $context["slug"])], "method", false, false, false, 18);
            // line 19
            echo "        ";
            $context["isTestingRelease"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 19), "isTestingRelease", [0 => $context["slug"]], "method", false, false, false, 19);
            // line 20
            echo "        ";
            $context["isPremium"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isPremiumProduct", [0 => $context["plugin"]], "method", false, false, false, 20);
            // line 21
            echo "        ";
            $context["releaseDate"] = ((twig_get_attribute($this->env, $this->source, $context["plugin"], "date", [], "any", false, false, false, 21)) ? (twig_get_attribute($this->env, $this->source, $context["plugin"], "date", [], "any", false, false, false, 21)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 21), "findPackage", [0 => $context["slug"], 1 => true], "method", false, false, false, 21), "date", [], "any", false, false, false, 21)));
            // line 22
            echo "
        <tr data-gpm-plugin=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\" data-gpm-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\" data-gpm-release-date=\"";
            echo twig_escape_filter($this->env, ($context["releaseDate"] ?? null), "html", null, true);
            echo "\" data-gpm-author=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "author", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\" data-gpm-official=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isTeamGrav", [0 => $context["plugin"]], "method", false, false, false, 23)) ? ("1") : ("2"));
            echo "\" data-gpm-updatable=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 23), "isUpdatable", [0 => $context["slug"]], "method", false, false, false, 23)) ? ("1") : ("2"));
            echo "\" data-gpm-enabled=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "enabled"], "method", false, false, false, 23)) ? ("1") : ("2"));
            echo "\" data-gpm-testing=\"";
            echo ((($context["isTestingRelease"] ?? null)) ? ("1") : ("2"));
            echo "\" data-gpm-premium=\"";
            echo ((($context["isPremium"] ?? null)) ? ("1") : ("2"));
            echo "\">
            <td class=\"gpm-name quadruple\">
                <i class=\"fa fa-fw fa-";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "icon", [], "any", false, false, false, 25), "html", null, true);
            echo "\"></i>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/plugins/" . twig_urlencode_filter($context["slug"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isTeamGrav", [0 => $context["plugin"]], "method", false, false, false, 27)) {
                // line 28
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
                echo "\"></i></span></small>
                ";
            }
            // line 30
            echo "                ";
            if (($context["isPremium"] ?? null)) {
                // line 31
                echo "                    ";
                if ( !($context["gumroad_loaded"] ?? null)) {
                    // line 32
                    echo "                        ";
                    $context["gumroad_loaded"] = true;
                    // line 33
                    echo "                        <script src=\"//gumroad.com/js/gumroad.js\"></script>
                    ";
                }
                // line 35
                echo "                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
                echo "</span></small>
                ";
            }
            // line 37
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["plugin"], "symlink", [], "any", false, false, false, 37)) {
                // line 38
                echo "                <span class=\"hint--bottom\"  data-hint=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 42
            echo "                <span class=\"gpm-version\">v";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                ";
            // line 43
            if (($context["isTestingRelease"] ?? null)) {
                echo "<span class=\"gpm-testing\">test release</span>";
            }
            // line 44
            echo "            </td>
            <td class=\"gpm-actions\">
                ";
            // line 46
            if (( !($context["installing"] ?? null) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "form", [], "any", false, false, false, 46), "fields", [], "any", false, false, false, 46), "enabled", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46) != "hidden") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "form", [], "any", false, false, false, 46), "fields", [], "any", false, false, false, 46), "tabs", [], "any", false, false, false, 46), "fields", [], "any", false, false, false, 46), "options", [], "any", false, false, false, 46), "fields", [], "any", false, false, false, 46), "enabled", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46) != "hidden")))) {
                // line 47
                echo "                    <a class=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "enabled"], "method", false, false, false, 47)) ? ("enabled") : ("disabled"));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url_relative"] ?? null) . "/plugins/") . $context["slug"]) . "/task") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 47), "param_sep", [], "any", false, false, false, 47)) . ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "enabled"], "method", false, false, false, 47)) ? ("disable") : ("enable"))), 1 => "admin-form", 2 => "admin-nonce"], "method", false, false, false, 47), "html", null, true);
                echo "\">
                        <i class=\"fa fa-fw fa-toggle-";
                // line 48
                echo ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "enabled"], "method", false, false, false, 48)) ? ("on") : ("off"));
                echo "\"></i>
                    </a>
                ";
            } elseif (            // line 50
($context["installing"] ?? null)) {
                // line 51
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "premium", [], "any", false, false, false, 51) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "license", [0 => twig_get_attribute($this->env, $this->source, $context["plugin"], "slug", [], "any", false, false, false, 51)], "method", false, false, false, 51))) {
                    // line 52
                    echo "                        ";
                    if ( !($context["gumroad_loaded"] ?? null)) {
                        // line 53
                        echo "                            ";
                        $context["gumroad_loaded"] = true;
                        // line 54
                        echo "                            <script src=\"//gumroad.com/js/gumroad.js\"></script>
                        ";
                    }
                    // line 56
                    echo "                        <a class=\"gumroad-button button\" href=\"https://gum.co/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "premium", [], "any", false, false, false, 56), "permalink", [], "any", false, false, false, 56), "html", null, true);
                    echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "premium", [], "any", false, true, false, 56), "button", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "premium", [], "any", false, true, false, 56), "button", [], "any", false, false, false, 56), "Purchase")) : ("Purchase")), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 58
                    echo "                      <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "slug", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALL"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 60
                echo "                ";
            }
            // line 61
            echo "                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    ";
            // line 65
            $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-list.html.twig", 65)->display(twig_array_merge($context, ["plugin" => $context["plugin"]]));
            // line 66
            echo "                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 70
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.OFFLINE_WARNING"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</table>

";
        // line 74
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-list.html.twig", 74)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 75
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-list.html.twig", 75)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 76
        $this->loadTemplate("partials/modal-changelog.html.twig", "partials/plugins-list.html.twig", 76)->display(twig_array_merge($context, ["package" => ($context["plugin"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "partials/plugins-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 76,  270 => 75,  268 => 74,  264 => 72,  255 => 70,  239 => 66,  237 => 65,  231 => 61,  228 => 60,  220 => 58,  212 => 56,  208 => 54,  205 => 53,  202 => 52,  199 => 51,  197 => 50,  192 => 48,  185 => 47,  183 => 46,  179 => 44,  175 => 43,  170 => 42,  162 => 38,  159 => 37,  153 => 35,  149 => 33,  146 => 32,  143 => 31,  140 => 30,  134 => 28,  132 => 27,  126 => 26,  122 => 25,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  68 => 17,  60 => 12,  53 => 8,  50 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set gumroad_loaded = false %}
<div class=\"grav-update plugins\"></div>
{% if installing %}
    {% include 'partials/release-toggle.html.twig' %}
{% endif %}
{% include 'partials/list-sort.html.twig' with { list_view: 'plugins' } %}
<h1>
    {{ installing ? \"PLUGIN_ADMIN.AVAILABLE_PLUGINS\"|t : \"PLUGIN_ADMIN.INSTALLED_PLUGINS\"|t }}
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.RESOURCE_FILTER\"|t }}\" data-gpm-filter>
    </div>
</form>

<table>
    {% for slug, plugin in admin.plugins(not installing).toArray|ksort %}
        {% set data = admin.data('plugins/' ~ slug) %}
        {% set isTestingRelease = admin.gpm.isTestingRelease(slug) %}
        {% set isPremium = admin.isPremiumProduct(plugin) %}
        {% set releaseDate = plugin.date ?: admin.gpm.findPackage(slug, true).date %}

        <tr data-gpm-plugin=\"{{ slug|url_encode }}\" data-gpm-name=\"{{ plugin.name }}\" data-gpm-release-date=\"{{ releaseDate }}\" data-gpm-author=\"{{ plugin.author.name }}\" data-gpm-official=\"{{ admin.isTeamGrav(plugin) ? '1' : '2' }}\" data-gpm-updatable=\"{{ admin.gpm.isUpdatable(slug) ? '1' : '2' }}\" data-gpm-enabled=\"{{ data.get('enabled') ? '1' : '2' }}\" data-gpm-testing=\"{{ isTestingRelease ? '1' : '2' }}\" data-gpm-premium=\"{{ isPremium ? '1' : '2' }}\">
            <td class=\"gpm-name quadruple\">
                <i class=\"fa fa-fw fa-{{ plugin.icon }}\"></i>
                <a href=\"{{ admin_route('/plugins/' ~ slug|url_encode) }}\">{{ plugin.name }}</a>
                {% if admin.isTeamGrav(plugin) %}
                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN\"|t }}\"></i></span></small>
                {% endif %}
                {% if isPremium %}
                    {% if not gumroad_loaded %}
                        {% set gumroad_loaded = true %}
                        <script src=\"//gumroad.com/js/gumroad.js\"></script>
                    {% endif %}
                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|t }}</span></small>
                {% endif %}
                {% if plugin.symlink %}
                <span class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED\"|t }}\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                {% endif %}
                <span class=\"gpm-version\">v{{ plugin.version }}</span>
                {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
            </td>
            <td class=\"gpm-actions\">
                {% if (not installing and (plugin.form.fields.enabled.type != 'hidden' and plugin.form.fields.tabs.fields.options.fields.enabled.type != 'hidden')) %}
                    <a class=\"{{ data.get('enabled') ? 'enabled' : 'disabled' }}\" href=\"{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ slug ~ '/task' ~ config.system.param_sep ~ (data.get('enabled') ? 'disable' : 'enable'), 'admin-form', 'admin-nonce') }}\">
                        <i class=\"fa fa-fw fa-toggle-{{ data.get('enabled') ? 'on' : 'off' }}\"></i>
                    </a>
                {% elseif (installing) %}
                    {% if (plugin.premium and not admin.license(plugin.slug)) %}
                        {% if not gumroad_loaded %}
                            {% set gumroad_loaded = true %}
                            <script src=\"//gumroad.com/js/gumroad.js\"></script>
                        {% endif %}
                        <a class=\"gumroad-button button\" href=\"https://gum.co/{{ plugin.premium.permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ plugin.premium.button|default('Purchase') }}</a>
                    {% else %}
                      <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ plugin.slug }}\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL\"|t }}</a>
                    {% endif %}
                {% endif %}
                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}
                </div>
            </td>
        </tr>
    {% else %}
        <tr><td>{{ \"PLUGIN_ADMIN.OFFLINE_WARNING\"|t }}</td></tr>
    {% endfor %}
</table>

{% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-changelog.html.twig' with { package: plugin} %}
", "partials/plugins-list.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\plugins-list.html.twig");
    }
}

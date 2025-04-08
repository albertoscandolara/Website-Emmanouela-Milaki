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

/* flex-objects/types/default/list.html.twig */
class __TwigTemplate_c6b826607680f200abd00006b2dac2bb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $_trait_0 = $this->loadTemplate("flex-objects/types/default/titlebar/list.html.twig", "flex-objects/types/default/list.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/types/default/titlebar/list.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'body' => [$this, 'block_body'],
                'content_top' => [$this, 'block_content_top'],
                'content' => [$this, 'block_content'],
                'content_list' => [$this, 'block_content_list'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["export"] = (((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.export"], "method", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.export"], "method", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.export"], "method", false, false, false, 5)) : ((((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.export"], "method", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.export"], "method", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.export"], "method", false, false, false, 5)) : ([]))));
        // line 6
        $context["can_export"] = (($context["can_export"]) ?? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->boolFilter((((twig_get_attribute($this->env, $this->source, ($context["export"] ?? null), "enabled", [], "array", true, true, false, 6) &&  !(null === (($__internal_compile_0 = ($context["export"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["enabled"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["export"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["enabled"] ?? null) : null)) : (count($this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(($context["export"] ?? null))))))));
        // line 7
        $context["can_create"] = (($context["can_create"]) ?? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 7)));
        // line 8
        $context["can_translate"] = (($context["can_translate"]) ?? ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 8) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "object", [], "any", false, false, false, 8), "hasFlexFeature", [0 => "flex-translate"], "method", false, false, false, 8))));
        // line 10
        $context["per_page"] = (($context["per_page"]) ?? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 10), "currentUri", [], "any", false, false, false, 10), "queryParam", [0 => "per_page"], "method", false, false, false, 10)));
        // line 13
        if (($context["can_translate"] ?? null)) {
            // line 14
            $context["translate_include_default"] = (($context["translate_include_default"]) ?? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 14), "get", [0 => "system.languages.include_default_lang_file_extension", 1 => true], "method", false, false, false, 14)));
            // line 15
            $context["all_languages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 15), "siteLanguages", [], "any", false, false, false, 15);
            // line 16
            $context["admin_languages"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "languages_enabled", [], "any", false, false, false, 16);
            // line 17
            $context["default_language"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 17), "default", [], "any", false, false, false, 17);
            // line 18
            $context["language"] = twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "language", [], "any", false, false, false, 18);
            // line 25
            $context["language"] = ((($context["language"] ?? null)) ? (($context["language"] ?? null)) : (($context["default_language"] ?? null)));
        }
        // line 30
        $context["allowed"] = (($context["allowed"]) ?? ((($context["directory"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 30))));
        // line 31
        $context["back_route"] = (($context["back_route"]) ?? (twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [0 => 1, 1 =>  -1], "method", false, false, false, 31)));
        // line 33
        $context["configure_path"] = twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.router.actions.configure.path"], "method", false, false, false, 33);
        // line 34
        $context["configure_route"] = (($context["configure_route"]) ?? (((($context["configure_path"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withRoute", [0 => twig_trim_filter(twig_get_attribute($this->env, $this->source, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["configure_path"] ?? null)), "toString", [0 => true], "method", false, false, false, 34), "/")], "method", false, false, false, 34)) : (null))));
        // line 35
        $context["configure_route"] = (($context["configure_route"]) ?? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withGravParam", [0 => "", 1 => "configure"], "method", false, false, false, 35), "toString", [0 => true], "method", false, false, false, 35)));
        // line 37
        $context["title_icon"] = (($context["title_icon"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["view_config"] ?? null), "icon", [], "array", true, true, false, 37) &&  !(null === (($__internal_compile_2 = ($context["view_config"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["view_config"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["icon"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 37), "admin", [], "any", false, true, false, 37), "menu", [], "any", false, true, false, 37), "list", [], "any", false, true, false, 37), "icon", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 37), "admin", [], "any", false, true, false, 37), "menu", [], "any", false, true, false, 37), "list", [], "any", false, true, false, 37), "icon", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 37), "admin", [], "any", false, true, false, 37), "menu", [], "any", false, true, false, 37), "list", [], "any", false, true, false, 37), "icon", [], "any", false, false, false, 37)) : ("fa-file-text-o"))))));
        // line 38
        ob_start();
        // line 39
        $context["title_config"] = (((twig_get_attribute($this->env, $this->source, ($context["view_config"] ?? null), "title", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_4 = ($context["view_config"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["title"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["view_config"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["title"] ?? null) : null)) : (null));
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 40)) {
            // line 41
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 41), "configure title template"));
        } else {
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "title", [], "any", false, false, false, 43)), "html", null, true);
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        $context["schema"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "blueprint", [], "any", false, false, false, 47), "schema", [], "any", false, false, false, 47);
        // line 49
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://flex-objects/js/flex-objects.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 49);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects/types/default/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    ";
        $context["collection"] = ((($context["directory"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collection"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 52)) : (""));
        // line 53
        echo "    ";
        $context["directory_config"] = (((twig_get_attribute($this->env, $this->source, ($context["view_config"] ?? null), "options", [], "array", true, true, false, 53) &&  !(null === (($__internal_compile_6 = ($context["view_config"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["options"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["view_config"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["options"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "plugins.flex-objects.admin_list", 1 => ["per_page" => 15, "order" => ["by" => "updated_timestamp", "dir" => "desc"]]], "method", false, false, false, 53)));
        // line 54
        echo "    ";
        $context["per_page"] = max(1, (($context["per_page"]) ?? (twig_get_attribute($this->env, $this->source, ($context["directory_config"] ?? null), "per_page", [], "any", false, false, false, 54))));
        // line 55
        echo "    ";
        $context["table"] = ((($context["directory"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["flex"] ?? null), "dataTable", [0 => twig_get_attribute($this->env, $this->source, ($context["collection"] ?? null), "flexDirectory", [], "method", false, false, false, 55), 1 => ["collection" => ($context["collection"] ?? null), "limit" => ($context["per_page"] ?? null), "sort" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory_config"] ?? null), "order", [], "any", false, false, false, 55), "by", [], "any", false, false, false, 55) . "|") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory_config"] ?? null), "order", [], "any", false, false, false, 55), "dir", [], "any", false, false, false, 55))]], "method", false, false, false, 55)) : (""));
        // line 56
        echo "    ";
        $context["back_url"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["back_route"] ?? null));
        // line 57
        echo "    ";
        $context["configure_url"] = (( !((((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.hidden"], "method", true, true, false, 57) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.hidden"], "method", false, false, false, 57)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.hidden"], "method", false, false, false, 57)) : (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.configure.hidden", 1 => false], "method", false, false, false, 57))) === true)) ? (twig_get_attribute($this->env, $this->source, ($context["configure_route"] ?? null), "toString", [0 => true], "method", false, false, false, 57)) : (""));
        // line 58
        echo "
    ";
        // line 59
        $context["fields"] = twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getColumns", [], "method", false, false, false, 59);
        // line 60
        echo "    ";
        $context["fields_count"] = ((($context["fields"] ?? null)) ? (count(($context["fields"] ?? null))) : (0));
        // line 61
        echo "    ";
        $context["fields_width"] = 8;
        // line 62
        echo "    ";
        $context["fields_set"] = 0;
        // line 63
        echo "    ";
        $context["title_field"] = (($__internal_compile_8 = ($context["view_config"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["title"] ?? null) : null);
        // line 64
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["options"]) {
            // line 65
            echo "        ";
            $context["fields_width"] = (((($context["fields_width"] ?? null) + twig_get_attribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 65))) ? ((($context["fields_width"] ?? null) + twig_get_attribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 65))) : (0));
            // line 66
            echo "        ";
            $context["fields_set"] = (($context["fields_set"] ?? null) + ((twig_get_attribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 66)) ? (1) : (0)));
            // line 67
            echo "        ";
            if (( !($context["title_field"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["options"], "link", [], "any", false, false, false, 67) == "edit"))) {
                // line 68
                echo "            ";
                $context["title_field"] = $context["key"];
                // line 69
                echo "        ";
            }
            // line 70
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
    ";
        // line 72
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 75
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        if ((($context["allowed"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => "admin.super"], "method", false, false, false, 76))) {
            // line 77
            echo "    ";
            $context["save_location"] = twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "getStorageFolder", [], "method", false, false, false, 77);
            // line 78
            echo "    <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo "</b></div>
";
        }
    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        if (($context["allowed"] ?? null)) {
            // line 84
            echo "    ";
            $this->displayBlock('content_list', $context, $blocks);
        } else {
            // line 88
            echo "    ";
            twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "modifyHeader", [0 => "http_response_code", 1 => 404], "method", false, false, false, 88);
            // line 89
            echo "    <div class=\"error-block\">
        <h1>";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            echo " 404</h1>
        <div class=\"padding\">
            <p>
                ";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.PAGE_NOT_EXIST"), "html", null, true);
            echo "
            </p>
        </div>
    </div>
";
        }
    }

    // line 84
    public function block_content_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/list/list.html.twig"), 1 => "flex-objects/types/default/list/list.html.twig"], "flex-objects/types/default/list.html.twig", 85)->display($context);
        // line 86
        echo "    ";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 86,  245 => 85,  241 => 84,  231 => 93,  225 => 90,  222 => 89,  219 => 88,  215 => 84,  213 => 83,  209 => 82,  199 => 78,  196 => 77,  194 => 76,  190 => 75,  184 => 72,  181 => 71,  175 => 70,  172 => 69,  169 => 68,  166 => 67,  163 => 66,  160 => 65,  155 => 64,  152 => 63,  149 => 62,  146 => 61,  143 => 60,  141 => 59,  138 => 58,  135 => 57,  132 => 56,  129 => 55,  126 => 54,  123 => 53,  120 => 52,  116 => 51,  111 => 1,  109 => 49,  107 => 47,  103 => 43,  100 => 41,  98 => 40,  96 => 39,  94 => 38,  92 => 37,  90 => 35,  88 => 34,  86 => 33,  84 => 31,  82 => 30,  79 => 25,  77 => 18,  75 => 17,  73 => 16,  71 => 15,  69 => 14,  67 => 13,  65 => 10,  63 => 8,  61 => 7,  59 => 6,  57 => 5,  50 => 1,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% use 'flex-objects/types/default/titlebar/list.html.twig' %}

{# Allowed actions #}
{% set export = directory.config('admin.views.export') ?? directory.config('admin.export') ?? [] %}
{% set can_export = can_export ?? (export['enabled'] ?? export|array|count)|bool %}
{% set can_create = can_create ?? directory.isAuthorized('create', 'admin', user) %}
{% set can_translate = can_translate ?? (admin.multilang and directory.object.hasFlexFeature('flex-translate')) %}

{% set per_page = per_page ?? grav.uri.currentUri.queryParam('per_page') %}

{# Translations #}
{% if can_translate %}
    {% set translate_include_default = translate_include_default ?? grav.config.get('system.languages.include_default_lang_file_extension', true) %}
    {% set all_languages = grav.admin.siteLanguages %}
    {% set admin_languages = admin.languages_enabled %}
    {% set default_language = grav.language.default %}
    {% set language = controller.language %}
    {#
    {% if translate_include_default %}
        {% set all_languages = all_languages|merge({'': 'Default'}) %}
        {% set admin_languages = admin_languages|merge({'': ''}) %}
    {% else %}
    #}
        {% set language = language ?: default_language %}
    {# endif #}
{% endif %}

{# These variables can be overridden from the main template file #}
{% set allowed = allowed ?? (directory and directory.isAuthorized('list', 'admin', user)) %}
{% set back_route = back_route ?? route.getRoute(1, -1) %}

{% set configure_path = directory.config('admin.router.actions.configure.path') %}
{% set configure_route = configure_route ?? (configure_path ? route.withRoute(admin_route(configure_path).toString(true)|trim('/')) : null) %}
{% set configure_route = configure_route ?? route.withGravParam('', 'configure').toString(true) %}

{% set title_icon = title_icon ?? view_config['icon'] ?? directory.config.admin.menu.list.icon ?? 'fa-file-text-o' %}
{% set title -%}
    {%- set title_config = view_config['title'] ?? null -%}
    {%- if title_config.template -%}
        {{- include(template_from_string(title_config.template, 'configure title template')) -}}
    {%- else -%}
        {{- directory.title|tu -}}
    {% endif %}
{%- endset %}

{% set schema = directory.blueprint.schema %}

{% do assets.addJs('plugin://flex-objects/js/flex-objects.js', { 'group': 'bottom', 'loading': 'defer' }) %}

{% block body %}
    {% set collection = directory ? collection.isAuthorized('list', 'admin', user) %}
    {% set directory_config = view_config['options'] ?? config.get('plugins.flex-objects.admin_list', { per_page: 15, order: { by: 'updated_timestamp', dir: 'desc' }}) %}
    {% set per_page = max(1, per_page ?? directory_config.per_page) %}
    {% set table = directory ? flex.dataTable(collection.flexDirectory(), {  collection: collection, limit: per_page, sort: directory_config.order.by ~ '|' ~ directory_config.order.dir }) %}
    {% set back_url = admin_route(back_route) %}
    {% set configure_url = (directory.config('admin.views.configure.hidden') ?? directory.config('admin.configure.hidden', false)) is not same as(true) ? configure_route.toString(true) %}

    {% set fields = table.getColumns() %}
    {% set fields_count = fields ? count(fields) : 0 %}
    {% set fields_width = 8 %}
    {% set fields_set = 0 %}
    {% set title_field = view_config['title'] %}
    {% for key,options in fields %}
        {% set fields_width = fields_width + options.width ?: 0 %}
        {% set fields_set = fields_set + (options.width ? 1 : 0) %}
        {% if not title_field and options.link == 'edit' %}
            {% set title_field = key %}
        {% endif %}
    {% endfor %}

    {{ parent() }}
{% endblock body %}

{% block content_top %}
{% if allowed and user.authorize('admin.super') %}
    {% set save_location = directory.getStorageFolder() %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }}</b></div>
{% endif %}
{% endblock %}

{% block content %}
{% if allowed %}
    {% block content_list %}
    {% include ['flex-objects/types/' ~ target ~ '/list/list.html.twig', 'flex-objects/types/default/list/list.html.twig'] %}
    {% endblock %}
{% else %}
    {% do page.modifyHeader('http_response_code', 404) %}
    <div class=\"error-block\">
        <h1>{{ 'PLUGIN_ADMIN.ERROR'|tu }} 404</h1>
        <div class=\"padding\">
            <p>
                {{ 'PLUGIN_FLEX_OBJECTS.ERROR.PAGE_NOT_EXIST'|tu }}
            </p>
        </div>
    </div>
{% endif %}
{% endblock %}
", "flex-objects/types/default/list.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\list.html.twig");
    }
}

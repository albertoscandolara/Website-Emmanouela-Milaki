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

/* flex-objects/types/default/edit.html.twig */
class __TwigTemplate_ace32d523dab471e2b4506404e06db26 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $_trait_0 = $this->loadTemplate("flex-objects/types/default/titlebar/edit.html.twig", "flex-objects/types/default/edit.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/types/default/titlebar/edit.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'body' => [$this, 'block_body'],
                'content_top' => [$this, 'block_content_top'],
                'content' => [$this, 'block_content'],
                'topbar' => [$this, 'block_topbar'],
                'edit' => [$this, 'block_edit'],
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
        if ( !array_key_exists("form", $context)) {
            // line 6
            $context["form"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, false, false, 6);
            // line 7
            $context["object"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 7);
        }
        // line 11
        $context["can_list"] = (($context["can_list"]) ?? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 11)));
        // line 12
        $context["can_read"] = (($context["can_read"]) ?? (((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "read", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 12)))));
        // line 13
        $context["can_create"] = (($context["can_create"]) ?? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 13)));
        // line 14
        $context["can_save"] = (($context["can_save"]) ?? (((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 14)) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "update", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 14)))));
        // line 15
        $context["can_delete"] = (($context["can_delete"]) ?? ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 15) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "delete", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 15))));
        // line 16
        $context["can_translate"] = (($context["can_translate"]) ?? ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 16) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", [0 => "flex-translate"], "method", false, false, false, 16))));
        // line 17
        $context["can_preview"] = (($context["can_preview"]) ?? (((($context["can_read"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 17)) && (((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.preview.enabled"], "method", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.preview.enabled"], "method", false, false, false, 17)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.preview.enabled"], "method", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.preview.enabled", 1 => false], "method", false, false, false, 17))))));
        // line 20
        if (($context["can_translate"] ?? null)) {
            // line 21
            $context["translate_include_default"] = (($context["translate_include_default"]) ?? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 21), "get", [0 => "system.languages.include_default_lang_file_extension", 1 => true], "method", false, false, false, 21)));
            // line 22
            $context["all_languages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 22), "siteLanguages", [], "any", false, false, false, 22);
            // line 23
            $context["admin_languages"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "languages_enabled", [], "any", false, false, false, 23);
            // line 24
            $context["default_language"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 24), "default", [], "any", false, false, false, 24);
            // line 25
            $context["object_language"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "language", [], "any", false, false, false, 25);
            // line 26
            $context["language"] = twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "language", [], "any", false, false, false, 26);
            // line 27
            $context["has_translation"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "hasTranslation", [0 => ($context["language"] ?? null), 1 => false], "method", false, false, false, 27);
            // line 36
            $context["language"] = ((($context["language"] ?? null)) ? (($context["language"] ?? null)) : (($context["default_language"] ?? null)));
            // line 37
            $context["object_language"] = ((($context["object_language"] ?? null)) ? (($context["object_language"] ?? null)) : (($context["default_language"] ?? null)));
            // line 38
            $context["object_languages"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "languages", [0 => false], "method", false, false, false, 38);
        }
        // line 43
        $context["allowed"] = (($context["allowed"]) ?? (((($context["directory"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 43) && (($context["can_read"] ?? null) || ($context["can_save"] ?? null)))) || ((($context["action"] ?? null) == "add") && ($context["can_read"] ?? null)))));
        // line 44
        $context["back_route"] = (($context["back_route"]) ?? (("/" . ((((($context["action"] ?? null) != "edit") &&  !($context["key"] ?? null))) ? (twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [0 => 1, 1 => (( !($context["can_list"] ?? null)) ? ( -1) : (null))], "method", false, false, false, 44)) : (twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [0 => 1, 1 => (( !($context["can_list"] ?? null)) ? ( -2) : ( -1))], "method", false, false, false, 44))))));
        // line 45
        $context["title_icon"] = (($context["title_icon"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["view_config"] ?? null), "icon", [], "array", true, true, false, 45) &&  !(null === (($__internal_compile_0 = ($context["view_config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["icon"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["view_config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["icon"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 45), "admin", [], "any", false, true, false, 45), "menu", [], "any", false, true, false, 45), "list", [], "any", false, true, false, 45), "icon", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 45), "admin", [], "any", false, true, false, 45), "menu", [], "any", false, true, false, 45), "list", [], "any", false, true, false, 45), "icon", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 45), "admin", [], "any", false, true, false, 45), "menu", [], "any", false, true, false, 45), "list", [], "any", false, true, false, 45), "icon", [], "any", false, false, false, 45)) : ("fa-file-text-o"))))));
        // line 46
        ob_start();
        // line 47
        $context["title_config"] = (($__internal_compile_2 = ($context["view_config"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["title"] ?? null) : null);
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 48)) {
            // line 49
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 49), "edit title template"));
        } else {
            // line 51
            echo twig_escape_filter($this->env, (($context["title"]) ?? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, true, false, 51), "getValue", [0 => "title"], "method", true, true, false, 51) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, true, false, 51), "getValue", [0 => "title"], "method", false, false, false, 51)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, true, false, 51), "getValue", [0 => "title"], "method", false, false, false, 51)) : ((((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", true, true, false, 51) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 51)))) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 51)) : (($context["key"] ?? null))))))), "html", null, true);
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects/types/default/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["back_route"] ?? null))));
        // line 57
        echo "    ";
        $context["id"] = ($context["key"] ?? null);
        // line 58
        echo "    ";
        $context["blueprint"] = (($context["blueprint"]) ?? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 58)));
        // line 59
        echo "
    ";
        // line 60
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 63
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    ";
        if ((($context["allowed"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => "admin.super"], "method", false, false, false, 64))) {
            // line 65
            echo "        ";
            if (((($context["directory"] ?? null) && ($context["object"] ?? null)) || (($context["action"] ?? null) == "add"))) {
                // line 66
                echo "            ";
                $context["save_location"] = (((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", true, true, false, 66) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 66)))) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 66)) : (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "getStorageFolder", [], "method", false, false, false, 66)));
                // line 67
                echo "            <div class=\"alert notice\">";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
                echo ": <b>";
                echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
                echo " ";
                (( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, (("[" . twig_upper_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true))) : (print ("")));
                echo "</b></div>
        ";
            }
            // line 69
            echo "    ";
        }
        // line 70
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 70) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "flash", [], "any", false, false, false, 70), "exists", [], "any", false, false, false, 70))) {
            // line 71
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT"), "html", null, true);
            echo " <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            echo "</button>
        </div>
    ";
        }
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        if (($context["allowed"] ?? null)) {
            // line 79
            echo "        <div class=\"clear directory admin-";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\">
            <div class=\"admin-form-wrapper\">
                <div id=\"admin-topbar\">
                    ";
            // line 82
            $this->displayBlock('topbar', $context, $blocks);
            // line 83
            echo "                </div>
                ";
            // line 84
            $this->displayBlock('edit', $context, $blocks);
            // line 87
            echo "            </div>
        </div>

        ";
            // line 90
            $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/default/edit.html.twig", 90)->display($context);
            // line 91
            echo "
        ";
            // line 92
            if (($context["can_delete"] ?? null)) {
                // line 93
                echo "            ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/modals/remove.html.twig"), 1 => "flex-objects/types/default/modals/remove.html.twig"], "flex-objects/types/default/edit.html.twig", 93)->display(twig_array_merge($context, ["name" => ($context["target"] ?? null)]));
                // line 94
                echo "        ";
            }
            // line 95
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 96
($context["object"] ?? null), "exists", [], "any", false, false, false, 96)) {
            // line 97
            echo "
        ";
            // line 98
            twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "modifyHeader", [0 => "http_response_code", 1 => 403], "method", false, false, false, 98);
            // line 99
            echo "        <div class=\"error-block\">
            <h1>";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            echo " 403</h1>
            <div class=\"padding\">
                <p>
                    ";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.PAGE_FORBIDDEN"), "html", null, true);
            echo "
                </p>
            </div>
        </div>

    ";
        } else {
            // line 109
            echo "
        ";
            // line 110
            twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "modifyHeader", [0 => "http_response_code", 1 => 404], "method", false, false, false, 110);
            // line 111
            echo "        <div class=\"error-block\">
            <h1>";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            echo " 404</h1>
            <div class=\"padding\">
                <p>
                    ";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.PAGE_NOT_EXIST"), "html", null, true);
            echo "
                </p>
            </div>
        </div>

    ";
        }
    }

    // line 82
    public function block_topbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 84
    public function block_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/default/edit.html.twig", 85)->display(twig_array_merge($context, ["form" => ($context["form"] ?? null), "context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null)]));
        // line 86
        echo "                ";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 86,  292 => 85,  288 => 84,  282 => 82,  271 => 115,  265 => 112,  262 => 111,  260 => 110,  257 => 109,  248 => 103,  242 => 100,  239 => 99,  237 => 98,  234 => 97,  232 => 96,  229 => 95,  226 => 94,  223 => 93,  221 => 92,  218 => 91,  216 => 90,  211 => 87,  209 => 84,  206 => 83,  204 => 82,  197 => 79,  194 => 78,  190 => 77,  180 => 72,  177 => 71,  174 => 70,  171 => 69,  161 => 67,  158 => 66,  155 => 65,  152 => 64,  148 => 63,  142 => 60,  139 => 59,  136 => 58,  133 => 57,  130 => 56,  126 => 55,  121 => 1,  117 => 51,  114 => 49,  112 => 48,  110 => 47,  108 => 46,  106 => 45,  104 => 44,  102 => 43,  99 => 38,  97 => 37,  95 => 36,  93 => 27,  91 => 26,  89 => 25,  87 => 24,  85 => 23,  83 => 22,  81 => 21,  79 => 20,  77 => 17,  75 => 16,  73 => 15,  71 => 14,  69 => 13,  67 => 12,  65 => 11,  62 => 7,  60 => 6,  58 => 5,  51 => 1,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% use 'flex-objects/types/default/titlebar/edit.html.twig' %}

{# Avoid defining form and object twice: object should always come from the form! #}
{% if form is not defined %}
  {% set form = object.form %}
  {% set object = form.object %}
{% endif %}

{# Allowed actions #}
{% set can_list = can_list ?? directory.isAuthorized('list', 'admin', user) %}
{% set can_read = can_read ?? (object.exists ? object.isAuthorized('read', 'admin', user) : directory.isAuthorized('create', 'admin', user)) %}
{% set can_create = can_create ?? object.isAuthorized('create', 'admin', user) %}
{% set can_save = can_save ?? (object.exists ? object.isAuthorized('update', 'admin', user) : directory.isAuthorized('create', 'admin', user)) %}
{% set can_delete = can_delete ?? (object.exists and object.isAuthorized('delete', 'admin', user)) %}
{% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('flex-translate')) %}
{% set can_preview = can_preview ?? (can_read and object.exists and (directory.config('admin.views.preview.enabled') ?? directory.config('admin.preview.enabled', false))) %}

{# Translations #}
{% if can_translate %}
    {% set translate_include_default = translate_include_default ?? grav.config.get('system.languages.include_default_lang_file_extension', true) %}
    {% set all_languages = grav.admin.siteLanguages %}
    {% set admin_languages = admin.languages_enabled %}
    {% set default_language = grav.language.default %}
    {% set object_language = object.language %}
    {% set language = controller.language %}
    {% set has_translation = object.hasTranslation(language, false) %}

    {#
    {% if translate_include_default %}
        {% set all_languages = all_languages|merge({'': 'Default'}) %}
        {% set admin_languages = admin_languages|merge({'': ''}) %}
        {% set object_languages = object.languages(true) %}
    {% else %}
    #}
        {% set language = language ?: default_language %}
        {% set object_language = object_language ?: default_language %}
        {% set object_languages = object.languages(false) %}
    {# endif #}
{% endif %}

{# These variables can be overridden from the main template file #}
{% set allowed = allowed ?? (directory and (object.exists and (can_read or can_save)) or (action == 'add' and can_read)) %}
{% set back_route = back_route ?? ('/' ~ (action != 'edit' and not key ? route.getRoute(1, not can_list ? -1 : null) : route.getRoute(1, not can_list ? -2 : -1))) %}
{% set title_icon = title_icon ?? view_config['icon'] ?? directory.config.admin.menu.list.icon ?? 'fa-file-text-o' %}
{% set title -%}
    {%- set title_config = view_config['title'] -%}
    {%- if title_config.template -%}
        {{- include(template_from_string(title_config.template, 'edit title template')) -}}
    {%- else -%}
        {{- title ?? object.form.getValue('title') ?? object.title ?? key -}}
    {% endif %}
{%- endset %}

{% block body %}
    {% set back_url = back_url ?? admin_route(back_route) %}
    {% set id = key %}
    {% set blueprint = blueprint ?? form.blueprint %}

    {{ parent() }}
{% endblock body %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
        {% if directory and object or action == 'add' %}
            {% set save_location = object.getStorageFolder() ?? directory.getStorageFolder() %}
            <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }} {{ not object.exists ? '[' ~ 'PLUGIN_FLEX_OBJECTS.NEW'|tu|upper ~ ']' }}</b></div>
        {% endif %}
    {% endif %}
    {% if object.exists and form.flash.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> {{ 'PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT'|tu }} <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.RESET\"|tu }}</button>
        </div>
    {% endif %}
{% endblock %}

{% block content %}
    {% if allowed %}
        <div class=\"clear directory admin-{{ target }}\">
            <div class=\"admin-form-wrapper\">
                <div id=\"admin-topbar\">
                    {% block topbar %}{% endblock %}
                </div>
                {% block edit %}
                    {% include 'partials/blueprints.html.twig' with { form: form, context: object, data: object } %}
                {% endblock %}
            </div>
        </div>

        {% include 'partials/modal-changes-detected.html.twig' %}

        {% if can_delete %}
            {% include ['flex-objects/types/' ~ target ~ '/modals/remove.html.twig', 'flex-objects/types/default/modals/remove.html.twig'] with { name: target } %}
        {% endif %}

    {% elseif (object.exists) %}

        {% do page.modifyHeader('http_response_code', 403) %}
        <div class=\"error-block\">
            <h1>{{ 'PLUGIN_ADMIN.ERROR'|tu }} 403</h1>
            <div class=\"padding\">
                <p>
                    {{ 'PLUGIN_FLEX_OBJECTS.ERROR.PAGE_FORBIDDEN'|tu }}
                </p>
            </div>
        </div>

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
", "flex-objects/types/default/edit.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\edit.html.twig");
    }
}

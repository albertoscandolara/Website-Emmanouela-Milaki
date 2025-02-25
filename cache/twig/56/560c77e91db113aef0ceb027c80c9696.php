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

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_c1ba554138ba345f409250599c32de99 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 3)) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pagemedia/pagemedia.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "folderExists", [], "any", false, false, false, 6)) {
            // line 7
            echo "    ";
            $context["pagemedia"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "plugins.admin.pagemedia"], "method", false, false, false, 7);
            // line 8
            echo "    ";
            $context["pagemedia_settings"] = ["resolution" => ["min" => ["width" => ((twig_get_attribute($this->env, $this->source,             // line 11
($context["pagemedia"] ?? null), "res_min_width", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_min_width", [], "any", false, false, false, 11)) : (null)), "height" => ((twig_get_attribute($this->env, $this->source,             // line 12
($context["pagemedia"] ?? null), "res_min_height", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_min_height", [], "any", false, false, false, 12)) : (null))], "max" => ["width" => ((twig_get_attribute($this->env, $this->source,             // line 15
($context["pagemedia"] ?? null), "res_max_width", [], "any", false, false, false, 15)) ? (twig_get_attribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_max_width", [], "any", false, false, false, 15)) : (null)), "height" => ((twig_get_attribute($this->env, $this->source,             // line 16
($context["pagemedia"] ?? null), "res_max_height", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_max_height", [], "any", false, false, false, 16)) : (null))]], "resizeWidth" => ((twig_get_attribute($this->env, $this->source,             // line 19
($context["pagemedia"] ?? null), "resize_width", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, ($context["pagemedia"] ?? null), "resize_width", [], "any", false, false, false, 19)) : (null)), "resizeHeight" => ((twig_get_attribute($this->env, $this->source,             // line 20
($context["pagemedia"] ?? null), "resize_height", [], "any", false, false, false, 20)) ? (twig_get_attribute($this->env, $this->source, ($context["pagemedia"] ?? null), "resize_height", [], "any", false, false, false, 20)) : (null)), "resizeQuality" => ((twig_get_attribute($this->env, $this->source,             // line 21
($context["pagemedia"] ?? null), "resize_quality", [], "any", false, false, false, 21)) ? (twig_get_attribute($this->env, $this->source, ($context["pagemedia"] ?? null), "resize_quality", [], "any", false, false, false, 21)) : (0.8))];
            // line 23
            echo "
    ";
            // line 24
            $context["media_url"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [], "method", false, false, false, 24)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [], "method", false, false, false, 24)) : ((("/media/" . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 24), "/")) . ".json")));
            // line 25
            echo "    ";
            $context["media_local"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMediaRoute", [], "method", false, false, false, 25)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMediaRoute", [], "method", false, false, false, 25)) : ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . "/") . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 25), "/"))));
            // line 26
            echo "    ";
            $context["media_path"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "relativePagePath", [], "any", false, false, false, 26));
            // line 27
            echo "    ";
            $context["media_uri"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "mediaUri", [], "method", false, false, false, 27);
            // line 28
            echo "    ";
            $context["dropzone_settings"] = twig_array_merge(["maxFilesize" => ($context["form_max_filesize"] ?? null)], ($context["pagemedia_settings"] ?? null));
            // line 29
            echo "    ";
            $context["pageMediaStore"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonDecodeFilter(_twig_default_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie("grav-admin-pagemedia"), "{\"width\":200,\"collapsed\":false}"));
            // line 30
            echo "
    <div class=\"pagemedia-field form-field grid vertical ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 31)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 31), "html", null, true);
            }
            echo "\">
    <div class=\"form-label\">
        <label class=\"media-collapser ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
          <i class=\"fa fa-fw small fa-chevron-";
            // line 34
            echo ((twig_get_attribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "collapsed", [], "any", false, false, false, 34)) ? ("right") : ("down"));
            echo "\"></i>
          ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 35)), "html", null, true);
            echo " <span data-pagemedia-count>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "page", [], "any", false, false, false, 35), "media", [], "any", false, false, false, 35)), "html", null, true);
            echo ")</span>
        </label>
        <div class=\"";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "collapsed", [], "any", false, false, false, 37)) ? ("hidden") : (""));
            echo "\">
          <input type=\"range\" min=\"70\" step=\"10\" max=\"200\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "width", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"media-resizer\">
        </div>
    </div>
    <div class=\"form-data form-uploads-wrapper\" style=\"";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "collapsed", [], "any", false, false, false, 41)) ? ("display: none;") : (""));
            echo "\">
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 44
            echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . ($context["media_url"] ?? null)), "html_attr");
            echo "\"
             data-media-local=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["media_local"] ?? null), "html_attr");
            echo "\"
             data-media-path=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["media_path"] ?? null), "html_attr");
            echo "\"
             data-media-uri=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["media_uri"] ?? null), "html_attr");
            echo "\"
             data-dropzone-options=\"";
            // line 48
            echo twig_escape_filter($this->env, json_encode(($context["dropzone_settings"] ?? null)), "html_attr");
            echo "\"
             data-dropzone-field=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 49))), "html", null, true);
            echo "\"></div>

        ";
            // line 51
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "session", [], "any", false, false, false, 51), "expert", [], "any", false, false, false, 51) == "0") ||  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => "admin.super"], "method", false, false, false, 51))) {
                // line 52
                echo "        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 52))), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" />
        ";
            }
            // line 54
            echo "    </div>
</div>
";
        } else {
            // line 57
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 60,  169 => 57,  164 => 54,  156 => 52,  154 => 51,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  129 => 44,  123 => 41,  117 => 38,  113 => 37,  106 => 35,  102 => 34,  98 => 33,  91 => 31,  88 => 30,  85 => 29,  82 => 28,  79 => 27,  76 => 26,  73 => 25,  71 => 24,  68 => 23,  66 => 21,  65 => 20,  64 => 19,  63 => 16,  62 => 15,  61 => 12,  60 => 11,  58 => 8,  55 => 7,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}

{% block field %}
{% if context.folderExists %}
    {% set pagemedia = config.get('plugins.admin.pagemedia') %}
    {% set pagemedia_settings = {
        resolution: {
            min: {
                width: pagemedia.res_min_width ?: null,
                height: pagemedia.res_min_height ?: null
            },
            max: {
                width: pagemedia.res_max_width ?: null,
                height: pagemedia.res_max_height ?: null
            }
        },
        resizeWidth: pagemedia.resize_width ?: null,
        resizeHeight: pagemedia.resize_height ?: null,
        resizeQuality: pagemedia.resize_quality ?: 0.8
    } %}

    {% set media_url = form.getMediaTaskRoute() ?: '/media/' ~ admin.route|trim('/') ~ '.json' %}
    {% set media_local = form.getMediaRoute() ?: base_url_relative_frontend|rtrim('/') ~ '/' ~ admin.route|trim('/') %}
    {% set media_path = url(context.relativePagePath) %}
    {% set media_uri = context.mediaUri() %}
    {% set dropzone_settings = { maxFilesize: form_max_filesize }|merge(pagemedia_settings) %}
    {% set pageMediaStore = get_cookie('grav-admin-pagemedia')|default('{\"width\":200,\"collapsed\":false}')|json_decode %}

    <div class=\"pagemedia-field form-field grid vertical {% if field.classes is defined %}{{ field.classes }}{% endif %}\">
    <div class=\"form-label\">
        <label class=\"media-collapser {{ field.labelclasses }}\">
          <i class=\"fa fa-fw small fa-chevron-{{ pageMediaStore.collapsed ? 'right' : 'down' }}\"></i>
          {{ field.label|t }} <span data-pagemedia-count>({{ admin.page.media|length }})</span>
        </label>
        <div class=\"{{ pageMediaStore.collapsed ? 'hidden' : '' }}\">
          <input type=\"range\" min=\"70\" step=\"10\" max=\"200\" value=\"{{ pageMediaStore.width }}\" class=\"media-resizer\">
        </div>
    </div>
    <div class=\"form-data form-uploads-wrapper\" style=\"{{ pageMediaStore.collapsed ? 'display: none;' : '' }}\">
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"{{ (base_url ~ media_url)|e('html_attr') }}\"
             data-media-local=\"{{ media_local|e('html_attr') }}\"
             data-media-path=\"{{ media_path|e('html_attr') }}\"
             data-media-uri=\"{{ media_uri|e('html_attr') }}\"
             data-dropzone-options=\"{{ dropzone_settings|json_encode|e('html_attr') }}\"
             data-dropzone-field=\"{{ (scope ~ field.name)|fieldName }}\"></div>

        {% if admin.session.expert == '0' or not user.authorize('admin.super') %}
        <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value }}\" />
        {% endif %}
    </div>
</div>
{% else %}
<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            {{ \"PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED\"|t }}
        </div>
    </div>
</div>
{% endif %}
{% endblock %}
", "forms/fields/pagemedia/pagemedia.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\pagemedia\\pagemedia.html.twig");
    }
}

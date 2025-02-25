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

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_c6f47b7647ece00d2697390d16fb77be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/parents/parents.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 16
        echo "
    ";
        // line 17
        $context["name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)));
        // line 18
        echo "    ";
        if (($context["form"] ?? null)) {
            // line 19
            echo "        ";
            $context["parent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 19), "parent", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19);
            // line 20
            echo "    ";
        } elseif (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["grav"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["flex_objects"] ?? null) : null), "hasDirectory", [0 => "pages"], "method", false, false, false, 20)) {
            // line 21
            echo "        ";
            $context["directory"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["grav"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["flex_objects"] ?? null) : null), "getDirectory", [0 => "pages"], "method", false, false, false, 21);
            // line 22
            echo "        ";
            $context["parent"] = ((($context["value"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "getObject", [0 => twig_trim_filter(($context["value"] ?? null), "/")], "method", false, false, false, 22), "title", [], "any", false, false, false, 22)) : ("<root>"));
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "        ";
            twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "enablePages", [], "method", false, false, false, 24);
            // line 25
            echo "        ";
            $context["parent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "find", [0 => ($context["value"] ?? null)], "method", false, false, false, 25), "title", [], "any", false, false, false, 25);
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div class=\"parents-wrapper\">
        <div class=\"form-input-wrapper\" data-parents=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" data-remodal-target=\"parents\">
            <div class=\"parent-title\" data-parents-field-name=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
        echo "</div>
            <span><i class=\"fa fa-folder-o\"></i> <span data-parents-field-label=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter(($context["value"] ?? null), "/")) : ("/")), "html", null, true);
        echo "</span></span>
        </div>

        <input type=\"hidden\" class=\"input\" name=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" data-field-name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\" />
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/parents/parents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  97 => 30,  91 => 29,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  75 => 24,  72 => 23,  69 => 22,  66 => 21,  63 => 20,  60 => 19,  57 => 18,  55 => 17,  52 => 16,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    {#
    {% set defaults = {
        show_root: true,
        show_all: show_all_val,
        show_modular: show_modular_val,
        show_slug: show_slug_val,
        show_fullpath: show_fullpath_val,
        default: last_page_route,
        limit_levels: limit_levels_val
    } %}
    {% set field = field|merge(defaults) %}
    #}

    {% set name = (scope ~ field.name)|fieldName %}
    {% if form %}
        {% set parent = form.object.parent.title %}
    {% elseif grav['flex_objects'].hasDirectory('pages') %}
        {% set directory = grav['flex_objects'].getDirectory('pages') %}
        {% set parent = value ? directory.getObject(value|trim('/')).title : '<root>' %}
    {% else %}
        {% do admin.enablePages() %}
        {% set parent = page.find(value).title %}
    {% endif %}
    <div class=\"parents-wrapper\">
        <div class=\"form-input-wrapper\" data-parents=\"{{ name }}\" data-remodal-target=\"parents\">
            <div class=\"parent-title\" data-parents-field-name=\"{{ name }}\">{{ parent }}</div>
            <span><i class=\"fa fa-folder-o\"></i> <span data-parents-field-label=\"{{ name }}\">{{ value|default('/') }}</span></span>
        </div>

        <input type=\"hidden\" class=\"input\" name=\"{{ name }}\" data-field-name=\"{{ field.name }}\" value=\"{{ value|join(', ') }}\" />
    </div>

    {#{% set last_page_route = admin.page.getLastPageRoute %}
    {% set show_slug_val = true %}
    {% set show_fullpath_val = false %}
    {% set show_all_val = true %}

    {% set show_parents = config.get('plugins.admin.pages.show_parents') %}
    {% if show_parents == 'folder' %}
        {% set show_slug_val = false %}
    {% elseif show_parents == 'fullpath' %}
        {% set show_fullpath_val = true %}
    {% endif %}

    {% set limit_levels_val = config.get('plugins.admin.pages.parents_levels') %}

    {% set show_modular_val = config.get('plugins.admin.pages.show_modular', true) %}
    {% if show_modular_val == false %}
        {% set show_all_val = false %}
    {% endif %}

    {% set defaults = {show_root:true, show_all:show_all_val, show_modular:show_modular_val, show_slug:show_slug_val, show_fullpath:show_fullpath_val, default:last_page_route, limit_levels:limit_levels_val} %}
    {% set field = field|merge(defaults) %}
    {{ parent() }}#}
{% endblock %}
", "forms/fields/parents/parents.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\parents\\parents.html.twig");
    }
}

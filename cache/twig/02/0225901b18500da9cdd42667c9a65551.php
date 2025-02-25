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

/* forms/fields/taxonomy/taxonomy.html.twig */
class __TwigTemplate_58b75146f589cf05241eb60dca556752 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/taxonomy/taxonomy.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["object"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 4);
        // line 5
        $context["taxonomies"] = (($context["taxonomies"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "taxonomies", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "taxonomies", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "taxonomies", [], "any", false, false, false, 5)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "data", [0 => "config/site"], "method", false, true, false, 5), "taxonomies", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "data", [0 => "config/site"], "method", false, true, false, 5), "taxonomies", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "data", [0 => "config/site"], "method", false, true, false, 5), "taxonomies", [], "any", false, false, false, 5)) : ([]))))));
        // line 6
        $context["parentname"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6);
        // line 7
        $context["options"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 7);
        // line 8
        $context["default"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 8);
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxonomies"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 11
            echo "    ";
            $context["field_name"] = ((($context["parentname"] ?? null) . ".") . $context["name"]);
            // line 12
            echo "    ";
            $context["value"] = ((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => ($context["field_name"] ?? null)], "method", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [0 => ($context["field_name"] ?? null)], "method", false, false, false, 12)));
            // line 13
            echo "    ";
            $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter((($context["value"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["default"] ?? null), $context["name"], [], "array", true, true, false, 13) &&  !(null === (($__internal_compile_0 = ($context["default"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["name"]] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["default"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["name"]] ?? null) : null)) : ([])))));
            // line 14
            echo "    ";
            if (($context["object"] ?? null)) {
                // line 15
                echo "        ";
                $context["can_translate"] = (($context["can_translate"]) ?? ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 15) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", [0 => "flex-translate"], "method", false, false, false, 15))));
                // line 16
                echo "        ";
                $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getFlexDirectory", [], "method", false, false, false, 16), "getIndex", [], "method", false, false, false, 16);
                // line 17
                echo "        ";
                $context["translated"] = ((($context["can_translate"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "withTranslated", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "language", [], "any", false, false, false, 17)], "method", false, false, false, 17)) : (($context["index"] ?? null)));
                // line 18
                echo "        ";
                $context["sub_taxonomies"] = twig_get_attribute($this->env, $this->source, ($context["translated"] ?? null), "getDistinctValues", [0 => ($context["field_name"] ?? null)], "method", false, false, false, 18);
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                $context["sub_taxonomies"] = twig_get_array_keys_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "taxonomy", [], "any", false, true, false, 20), "taxonomy", [], "any", false, true, false, 20), $context["name"], [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "taxonomy", [], "any", false, true, false, 20), "taxonomy", [], "any", false, true, false, 20), $context["name"], [], "any", false, false, false, 20)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "taxonomy", [], "any", false, true, false, 20), "taxonomy", [], "any", false, true, false, 20), $context["name"], [], "any", false, false, false, 20)) : ([])));
                // line 21
                echo "    ";
            }
            // line 22
            echo "    ";
            $context["list"] = array_unique(twig_array_merge(twig_array_merge((((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), $context["name"], [], "array", true, true, false, 22) &&  !(null === (($__internal_compile_2 = ($context["options"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["options"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["name"]] ?? null) : null)) : ([])), ($context["sub_taxonomies"] ?? null)), ($context["value"] ?? null)));
            // line 23
            echo "
    ";
            // line 24
            $context["field"] = ["type" => "select", "classes" => "fancy create", "label" => twig_capitalize_string_filter($this->env,             // line 27
$context["name"]), "name" =>             // line 28
($context["field_name"] ?? null), "multiple" => true, "options" =>             // line 30
($context["list"] ?? null), "style" => twig_get_attribute($this->env, $this->source,             // line 31
($context["field"] ?? null), "style", [], "any", false, false, false, 31), "selectize" => ["create" => true]];
            // line 36
            echo "
    ";
            // line 37
            $this->loadTemplate("forms/fields/select/select.html.twig", "forms/fields/taxonomy/taxonomy.html.twig", 37)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/taxonomy/taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 37,  125 => 36,  123 => 31,  122 => 30,  121 => 28,  120 => 27,  119 => 24,  116 => 23,  113 => 22,  110 => 21,  107 => 20,  104 => 19,  101 => 18,  98 => 17,  95 => 16,  92 => 15,  89 => 14,  86 => 13,  83 => 12,  80 => 11,  63 => 10,  60 => 9,  58 => 8,  56 => 7,  54 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
{% set object = form.object %}
{% set taxonomies = taxonomies ?? field.taxonomies ?? admin.data('config/site').taxonomies ?? [] %}
{% set parentname = field.name %}
{% set options = field.options %}
{% set default = field.default %}

{% for name in taxonomies %}
    {% set field_name = parentname ~ '.' ~ name %}
    {% set value = form ? form.value(field_name) : data.value(field_name) %}
    {% set value = (value ?? default[name] ?? [])|array %}
    {% if object %}
        {% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('flex-translate')) %}
        {% set index = object.getFlexDirectory().getIndex() %}
        {% set translated = can_translate ? index.withTranslated(admin.language) : index %}
        {% set sub_taxonomies = translated.getDistinctValues(field_name) %}
    {% else %}
        {% set sub_taxonomies = (attribute(grav.taxonomy.taxonomy, name) ?? [])|keys %}
    {% endif %}
    {% set list = (options[name] ?? [])|merge(sub_taxonomies)|merge(value)|array_unique %}

    {% set field = {
        type: 'select',
        classes: 'fancy create',
        label: name|capitalize,
        name: field_name,
        multiple: true,
        options: list,
        style: field.style,
        selectize: {
            create: true
        }
    } %}

    {% include 'forms/fields/select/select.html.twig' %}
{% endfor %}
{% endblock %}
", "forms/fields/taxonomy/taxonomy.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\taxonomy\\taxonomy.html.twig");
    }
}

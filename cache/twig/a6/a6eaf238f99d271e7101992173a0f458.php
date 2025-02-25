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

/* forms/fields/array/array.html.twig */
class __TwigTemplate_1c9ba7e3c6cdc3feadd5370fe8250b1a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
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
        // line 43
        $macros["array_field"] = $this->macros["array_field"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/array/array.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_global_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 46))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_key", [], "any", false, false, false, 47)), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 48)), "html", null, true);
        echo "\"
    data-grav-array-textarea=\"";
        // line 49
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value_type", [], "any", false, false, false, 49) == "textarea"), "html", null, true);
        echo "\"
    ";
        // line 50
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 54), "html", null, true);
        echo "\" data-grav-array-type=\"container\"";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 54)) {
            echo " data-grav-array-mode=\"value_only\"";
        }
        echo (((twig_length_filter($this->env, ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 55
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 56
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 57
                if ( !twig_test_iterable($context["text"])) {
                    // line 58
                    echo "                    ";
                    echo twig_call_macro($macros["array_field"], "macro_renderer", [$context["key"], $context["text"], ($context["field"] ?? null), ($context["scope"] ?? null)], 58, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 60
                    echo "                    ";
                    // line 61
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["text"]);
                    foreach ($context['_seq'] as $context["subkey"] => $context["subtext"]) {
                        // line 62
                        echo twig_call_macro($macros["array_field"], "macro_renderer", [((($context["key"] . "[") . $context["subkey"]) . "]"), $context["subtext"], ($context["field"] ?? null), ($context["scope"] ?? null)], 62, $context, $this->getSourceContext());
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subtext'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                ";
                }
                // line 65
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 68
            echo "            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 70) != true)) {
                // line 71
                echo "                    <input
                        data-grav-array-type=\"key\"
                        type=\"text\"
                        ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 74) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 75
                echo "                        placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_key", [], "any", false, false, false, 75)), "html", null, true);
                echo "\" />
                ";
            }
            // line 77
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value_type", [], "any", false, false, false, 77) == "textarea")) {
                // line 78
                echo "                    <textarea
                        data-grav-array-type=\"value\"
                        name=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 80))), "html", null, true);
                echo "\"
                        ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 81) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 82
                echo "                        placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 82)), "html", null, true);
                echo "\"></textarea>
                ";
            } else {
                // line 84
                echo "                    <input
                        data-grav-array-type=\"value\"
                        type=\"text\"
                        name=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 87))), "html", null, true);
                echo "\"
                        ";
                // line 88
                if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 88) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 89
                echo "                        placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 89)), "html", null, true);
                echo "\" />
                ";
            }
            // line 91
            echo "                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>";
        }
        // line 95
        echo "    </div>
";
    }

    // line 3
    public function macro_renderer($__key__ = null, $__text__ = null, $__field__ = null, $__scope__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "text" => $__text__,
            "field" => $__field__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "
    ";
            // line 5
            if ( !twig_test_iterable(($context["text"] ?? null))) {
                // line 6
                echo "        <div class=\"form-row";
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 6)) {
                    echo " array-field-value_only";
                }
                echo "\"
             data-grav-array-type=\"row\">
            <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
            ";
                // line 9
                if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 9) != true)) {
                    // line 10
                    echo "                ";
                    if (((($context["key"] ?? null) == "0") && (($context["text"] ?? null) == ""))) {
                        // line 11
                        echo "                    ";
                        $context["key"] = "";
                        // line 12
                        echo "                ";
                    }
                    // line 13
                    echo "
                <input
                        data-grav-array-type=\"key\"
                        type=\"text\" value=\"";
                    // line 16
                    echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                    echo "\"
                        ";
                    // line 17
                    if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 17) || ($context["isDisabledToggleable"] ?? null))) {
                        echo "disabled=\"disabled\"";
                    }
                    // line 18
                    echo "                        placeholder=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_key", [], "any", false, false, false, 18)), "html", null, true);
                    echo "\" />
            ";
                }
                // line 20
                echo "
            ";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value_type", [], "any", false, false, false, 21) == "textarea")) {
                    // line 22
                    echo "                <textarea
                        data-grav-array-type=\"value\"
                        name=\"";
                    // line 24
                    echo twig_escape_filter($this->env, ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 24))) . "[") . ($context["key"] ?? null)) . "]"), "html", null, true);
                    echo "\"
                        placeholder=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 25)), "html", null, true);
                    echo "\"
                        ";
                    // line 26
                    if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 26) || ($context["isDisabledToggleable"] ?? null))) {
                        echo "disabled=\"disabled\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
                    echo "</textarea>
            ";
                } else {
                    // line 28
                    echo "                <input
                        data-grav-array-type=\"value\"
                        type=\"text\"
                        name=\"";
                    // line 31
                    echo twig_escape_filter($this->env, ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 31))) . "[") . ($context["key"] ?? null)) . "]"), "html", null, true);
                    echo "\"
                        placeholder=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 32)), "html", null, true);
                    echo "\"
                        ";
                    // line 33
                    if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 33) || ($context["isDisabledToggleable"] ?? null))) {
                        echo "disabled=\"disabled\"";
                    }
                    // line 34
                    echo "                        value=";
                    if ((($context["text"] ?? null) == "true")) {
                        echo "true";
                    } elseif ((($context["text"] ?? null) == "false")) {
                        echo "false";
                    } else {
                        echo "\"";
                        echo twig_escape_filter($this->env, twig_join_filter(($context["text"] ?? null), ", "), "html", null, true);
                        echo "\"";
                    }
                    echo " />
            ";
                }
                // line 36
                echo "
            <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
            <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/array/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 36,  305 => 34,  301 => 33,  297 => 32,  293 => 31,  288 => 28,  279 => 26,  275 => 25,  271 => 24,  267 => 22,  265 => 21,  262 => 20,  256 => 18,  252 => 17,  248 => 16,  243 => 13,  240 => 12,  237 => 11,  234 => 10,  232 => 9,  223 => 6,  221 => 5,  218 => 4,  202 => 3,  197 => 95,  192 => 91,  186 => 89,  182 => 88,  178 => 87,  173 => 84,  167 => 82,  163 => 81,  159 => 80,  155 => 78,  152 => 77,  146 => 75,  142 => 74,  137 => 71,  135 => 70,  131 => 68,  124 => 65,  121 => 64,  113 => 62,  108 => 61,  106 => 60,  100 => 58,  98 => 57,  93 => 56,  91 => 55,  81 => 54,  77 => 53,  71 => 50,  67 => 49,  63 => 48,  59 => 47,  54 => 46,  50 => 45,  45 => 1,  43 => 43,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% macro renderer(key, text, field, scope) %}

    {% if text is not iterable %}
        <div class=\"form-row{% if field.value_only %} array-field-value_only{% endif %}\"
             data-grav-array-type=\"row\">
            <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
            {% if field.value_only != true %}
                {% if key == '0' and text == '' %}
                    {% set key = '' %}
                {% endif %}

                <input
                        data-grav-array-type=\"key\"
                        type=\"text\" value=\"{{ key }}\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                        placeholder=\"{{ field.placeholder_key|t }}\" />
            {% endif %}

            {% if field.value_type == 'textarea' %}
                <textarea
                        data-grav-array-type=\"value\"
                        name=\"{{ ((scope ~ field.name)|fieldName) ~ '[' ~ key ~ ']' }}\"
                        placeholder=\"{{ field.placeholder_value|t }}\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}>{{ text }}</textarea>
            {% else %}
                <input
                        data-grav-array-type=\"value\"
                        type=\"text\"
                        name=\"{{ ((scope ~ field.name)|fieldName) ~ '[' ~ key ~ ']' }}\"
                        placeholder=\"{{ field.placeholder_value|t }}\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                        value={% if text == 'true' %}true{% elseif text == 'false' %}false{% else %}\"{{ text|join(', ') }}\"{% endif %} />
            {% endif %}

            <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
            <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
        </div>
    {% endif %}
{% endmacro %}

{% import _self as array_field %}

{% block global_attributes %}
    data-grav-array-name=\"{{ (scope ~ field.name)|fieldName }}\"
    data-grav-array-keyname=\"{{ field.placeholder_key|t }}\"
    data-grav-array-valuename=\"{{ field.placeholder_value|t }}\"
    data-grav-array-textarea=\"{{ field.value_type == 'textarea' }}\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div class=\"{{ field.size }}\" data-grav-array-type=\"container\"{% if field.value_only %} data-grav-array-mode=\"value_only\"{% endif %}{{ value|length <= 1 ? ' class=\"one-child\"' : '' }}>
        {% if value|length %}
            {% for key, text in value -%}
                {% if text is not iterable %}
                    {{ array_field.renderer(key, text, field, scope) }}
                {% else %}
                    {# Backward compatibility for nested arrays (metas) which are not supported anymore #}
                    {% for subkey, subtext in text -%}
                        {{ array_field.renderer(key ~ '[' ~ subkey ~ ']', subtext, field, scope) }}
                    {% endfor %}
                {% endif %}
            {% endfor %}
        {%- else -%}
            {# Empty value, mock the entry field#}
            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                {% if field.value_only != true %}
                    <input
                        data-grav-array-type=\"key\"
                        type=\"text\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                        placeholder=\"{{ field.placeholder_key|t }}\" />
                {% endif %}
                {% if field.value_type == 'textarea' %}
                    <textarea
                        data-grav-array-type=\"value\"
                        name=\"{{ (scope ~ field.name)|fieldName }}\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                        placeholder=\"{{ field.placeholder_value|t }}\"></textarea>
                {% else %}
                    <input
                        data-grav-array-type=\"value\"
                        type=\"text\"
                        name=\"{{ (scope ~ field.name)|fieldName }}\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                        placeholder=\"{{ field.placeholder_value|t }}\" />
                {% endif %}
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>
        {%- endif %}
    </div>
{% endblock %}
", "forms/fields/array/array.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\array\\array.html.twig");
    }
}

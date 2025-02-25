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

/* forms/fields/datetime/datetime.html.twig */
class __TwigTemplate_64b4c8036b84e62ef27e52ca5521cb7a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'input_attributes' => [$this, 'block_input_attributes'],
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
        // line 4
        $context["default_php_dateformat"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "guessDateFormat", [0 => ($context["value"] ?? null)], "method", false, false, false, 4);
        // line 5
        $context["php_dateformat"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "format", [], "any", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "format", [], "any", false, false, false, 5)) : (((((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "page", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)))) ? (((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "page", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 5), "pages", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5), "default", [], "any", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 5), "pages", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5), "default", [], "any", false, false, false, 5)) : (($context["default_php_dateformat"] ?? null)))))));
        // line 6
        $context["js_dateformat"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "dateformatToMomentJS", [0 => ($context["php_dateformat"] ?? null)], "method", false, false, false, 6);
        // line 7
        $context["value"] = (((null === ($context["value"] ?? null))) ? (($context["value"] ?? null)) : (twig_date_format_filter($this->env, ($context["value"] ?? null), ($context["php_dateformat"] ?? null))));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/datetime/datetime.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class=\"form-input-wrapper datetime-picker-wrapper ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    ";
        // line 11
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 12
        echo "    <input
            name=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 13))), "html", null, true);
        echo "\"
            value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
            ";
        // line 15
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 22
        echo "    />
    <span class=\"field-icons\">
        <i class=\"fa fa-fw fa-calendar\"></i>
    </span>
</div>
";
    }

    // line 15
    public function block_input_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                type=\"text\"
                data-grav-datetime=\"";
        // line 17
        echo twig_escape_filter($this->env, json_encode(["format" => ($context["js_dateformat"] ?? null)]), "html_attr");
        echo "\"
                ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18)) {
            echo "min=\"";
            echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18)) : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18), ($context["php_dateformat"] ?? null)))), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19)) {
            echo "max=\"";
            echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19)) : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19), ($context["php_dateformat"] ?? null)))), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "                ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "forms/fields/datetime/datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  108 => 19,  102 => 18,  98 => 17,  95 => 16,  91 => 15,  82 => 22,  80 => 15,  76 => 14,  72 => 13,  69 => 12,  67 => 11,  62 => 10,  58 => 9,  53 => 1,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}
{% set default_php_dateformat = admin.guessDateFormat(value) %}
{% set php_dateformat = field.format ?: (form ? form.object.dateformat : admin.page.dateformat) ?: config.system.pages.dateformat.default ?: default_php_dateformat %}
{% set js_dateformat = admin.dateformatToMomentJS(php_dateformat) %}
{% set value = (value is null ? value : value|date(php_dateformat)) %}

{% block input %}
<div class=\"form-input-wrapper datetime-picker-wrapper {{ field.size }}\">
    {% set input_value = value is iterable ? value|join(',') : value|string %}
    <input
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            value=\"{{ input_value }}\"
            {% block input_attributes %}
                type=\"text\"
                data-grav-datetime=\"{{ {'format': js_dateformat} | json_encode | e('html_attr') }}\"
                {% if field.validate.min %}min=\"{{ (field.validate.min is null ? field.validate.min : field.validate.min|date(php_dateformat)) }}\"{% endif %}
                {% if field.validate.max %}max=\"{{ (field.validate.max is null ? field.validate.max : field.validate.max|date(php_dateformat)) }}\"{% endif %}
                {{ parent() }}
            {% endblock %}
    />
    <span class=\"field-icons\">
        <i class=\"fa fa-fw fa-calendar\"></i>
    </span>
</div>
{% endblock %}
", "forms/fields/datetime/datetime.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\datetime\\datetime.html.twig");
    }
}

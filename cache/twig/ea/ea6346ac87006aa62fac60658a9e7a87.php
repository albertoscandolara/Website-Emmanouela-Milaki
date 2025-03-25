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

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_500c71e9acad604f8a5caf9d3179fa65 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/hidden/hidden.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 6
        $context["value"] = (($context["value"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 6)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 6)) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "evaluate", [], "any", false, false, false, 6)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->evaluateStringFunc($context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 6)))))));
        // line 7
        echo "
";
        // line 9
        if ((( !($context["has_value"] ?? null) && ($context["value"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "evaluate", [], "any", false, false, false, 9))) {
            // line 10
            echo "    ";
            $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->evaluateStringFunc($context, ($context["value"] ?? null));
        }
        // line 12
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 13
        echo "
<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 14)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 14));
            echo "\" ";
        }
        echo "type=\"hidden\" class=\"input\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 14))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html_attr");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  64 => 12,  60 => 10,  58 => 9,  55 => 7,  53 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}

{#  Used if the field is being used directly outside of form #}
{% set value = value ?? field.value ?? (field.evaluate ? evaluate(field.default) : field.default) %}

{# Evaluate support for the form #}
{% if not has_value and value and field.evaluate %}
    {% set value = evaluate(value) %}
{% endif %}
{% set input_value = value is iterable ? value|join(',') : value|string %}

<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}type=\"hidden\" class=\"input\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ input_value|e('html_attr') }}\" />
{% endblock %}
", "forms/fields/hidden/hidden.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\hidden\\hidden.html.twig");
    }
}

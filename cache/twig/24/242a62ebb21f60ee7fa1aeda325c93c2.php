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

/* forms/fields/conditional/conditional.html.twig */
class __TwigTemplate_ef6cf85ab42c0203921a4406f9c86f9d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/conditional/conditional.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->evaluateStringFunc($context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "condition", [], "any", false, false, false, 4));
        // line 5
        $context["value"] = (((($context["value"] ?? null) == "true")) ? (1) : (($context["value"] ?? null)));
        // line 6
        $context["value"] = (((($context["value"] ?? null) == "false")) ? (0) : (($context["value"] ?? null)));
        // line 7
        echo "
";
        // line 8
        if (($context["value"] ?? null)) {
            // line 9
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 9)) {
                // line 10
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/conditional/conditional.html.twig", 13)->display(twig_array_merge($context, ["name" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 13), "fields" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 13)]));
            // line 14
            echo "
    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 15)) {
                // line 16
                echo "    </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/conditional/conditional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  78 => 15,  75 => 14,  73 => 13,  70 => 12,  64 => 10,  61 => 9,  59 => 8,  56 => 7,  54 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
{% set value = evaluate(field.condition) %}
{% set value = value == 'true' ? 1 : value %}
{% set value = value == 'false' ? 0 : value %}

{% if value %}
    {% if field.classes %}
    <div class=\"{{ field.classes }}\">
    {% endif %}

    {% include 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}

    {% if field.classes %}
    </div>
    {% endif %}
{% endif %}
{% endblock %}", "forms/fields/conditional/conditional.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\conditional\\conditional.html.twig");
    }
}

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

/* forms/fields/columns/columns.html.twig */
class __TwigTemplate_a4a92d3d4d256ca86c61450d08ed2ae9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/columns/columns.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"form-columns grid pure-g\">
    ";
        // line 5
        $context["cols"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 5));
        // line 6
        echo "    ";
        $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/columns/columns.html.twig", 6)->display(twig_array_merge($context, ["name" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldParentFilter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6)), "fields" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 6), "fallback_field" => "column", "cols" => ($context["cols"] ?? null)]));
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/columns/columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
<div class=\"form-columns grid pure-g\">
    {% set cols = field.fields|length %}
    {% include 'forms/default/fields.html.twig' with {name: field.name|parent_field, fields: field.fields, fallback_field: 'column', cols: cols} %}
</div>
{% endblock %}
", "forms/fields/columns/columns.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\columns\\columns.html.twig");
    }
}

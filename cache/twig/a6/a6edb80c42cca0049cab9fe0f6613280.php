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

/* forms/fields/column/column.html.twig */
class __TwigTemplate_d0c0c5344954f265b9742feffa935efb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/column/column.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("forms/fields/column/column.html.twig", "forms/fields/column/column.html.twig", 4, "132362971")->display(twig_array_merge($context, ["name" => ($context["name"] ?? null), "fields" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 4)]));
    }

    public function getTemplateName()
    {
        return "forms/fields/column/column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
    {% embed 'forms/default/fields.html.twig' with {name: name, fields: field.fields} %}
        {% block outer_markup_field_open %}<div class=\"form-column block pure-u-1-{{ cols }}\">{% endblock %}
        {% block outer_markup_field_close %}</div>{% endblock %}
    {% endembed %}
{% endblock %}
", "forms/fields/column/column.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\column\\column.html.twig");
    }
}


/* forms/fields/column/column.html.twig */
class __TwigTemplate_d0c0c5344954f265b9742feffa935efb___132362971 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer_markup_field_open' => [$this, 'block_outer_markup_field_open'],
            'outer_markup_field_close' => [$this, 'block_outer_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/column/column.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_outer_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<div class=\"form-column block pure-u-1-";
        echo twig_escape_filter($this->env, ($context["cols"] ?? null), "html", null, true);
        echo "\">";
    }

    // line 6
    public function block_outer_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "forms/fields/column/column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 6,  115 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
    {% embed 'forms/default/fields.html.twig' with {name: name, fields: field.fields} %}
        {% block outer_markup_field_open %}<div class=\"form-column block pure-u-1-{{ cols }}\">{% endblock %}
        {% block outer_markup_field_close %}</div>{% endblock %}
    {% endembed %}
{% endblock %}
", "forms/fields/column/column.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\column\\column.html.twig");
    }
}

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

/* forms/fields/section/section.html.twig */
class __TwigTemplate_c04b94f4efa8b91aa9369a9ccb983099 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/section/section.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "security", [], "any", false, false, false, 4)) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize($this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "security", [], "any", false, false, false, 4))))) {
            // line 5
            echo "
    ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 6) || twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "underline", [], "any", false, false, false, 6))) {
                // line 7
                echo "    <h1 class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 7), "html", null, true);
                echo " ";
                ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "underline", [], "any", false, false, false, 7)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "underline", [], "any", false, false, false, 7), "html", null, true))) : (print ("no_underline")));
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 7)), "html", null, true);
                echo "</h1>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 10)) {
                // line 11
                echo "    <p>";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 11)));
                echo "</p>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $this->loadTemplate("forms/fields/section/section.html.twig", "forms/fields/section/section.html.twig", 14, "1597360546")->display(twig_array_merge($context, ["name" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 14), "fields" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 14)]));
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  81 => 14,  78 => 13,  72 => 11,  70 => 10,  67 => 9,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
{% if field.security is empty or authorize(array(field.security)) %}

    {% if field.title or field.underline %}
    <h1 class=\"{{ field.classes }} {{ field.underline ?: 'no_underline' }}\">{{ field.title|t }}</h1>
    {% endif %}

    {% if field.text %}
    <p>{{ field.text|t|markdown|raw }}</p>
    {% endif %}

    {% embed 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
        {% block outer_markup_field_open %}
            <div class=\"form-section {{ field.field_classes }} {{ field.outer_classes }}\">
        {% endblock %}
        {% block outer_markup_field_close %}
            </div>
        {% endblock %}
    {% endembed %}

{% endif %}
{% endblock %}
", "forms/fields/section/section.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\section\\section.html.twig");
    }
}


/* forms/fields/section/section.html.twig */
class __TwigTemplate_c04b94f4efa8b91aa9369a9ccb983099___1597360546 extends \Twig\Template
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
        // line 14
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/section/section.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_outer_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            <div class=\"form-section ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_classes", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "outer_classes", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        ";
    }

    // line 18
    public function block_outer_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 19,  179 => 18,  170 => 16,  166 => 15,  155 => 14,  83 => 22,  81 => 14,  78 => 13,  72 => 11,  70 => 10,  67 => 9,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
{% if field.security is empty or authorize(array(field.security)) %}

    {% if field.title or field.underline %}
    <h1 class=\"{{ field.classes }} {{ field.underline ?: 'no_underline' }}\">{{ field.title|t }}</h1>
    {% endif %}

    {% if field.text %}
    <p>{{ field.text|t|markdown|raw }}</p>
    {% endif %}

    {% embed 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
        {% block outer_markup_field_open %}
            <div class=\"form-section {{ field.field_classes }} {{ field.outer_classes }}\">
        {% endblock %}
        {% block outer_markup_field_close %}
            </div>
        {% endblock %}
    {% endembed %}

{% endif %}
{% endblock %}
", "forms/fields/section/section.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\section\\section.html.twig");
    }
}

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

/* forms/fields/save-redirect/save-redirect.html.twig */
class __TwigTemplate_e643ab485cb6ea4729c325b6a0c5b5ec extends \Twig\Template
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
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 4)) : (($context["value"] ?? null)));
        // line 5
        $context["isNew"] = ((($context["key"] ?? null)) ? (false) : (true));
        // line 6
        $context["savedOption"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, true, false, 6), "post_entries_save", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, true, false, 6), "post_entries_save", [], "any", false, false, false, 6), "edit")) : ("edit"));
        // line 8
        if (($context["isNew"] ?? null)) {
            // line 9
            $context["options"] = ["create-new" => "PLUGIN_FLEX_OBJECTS.ACTION.CREATE_NEW", "edit" => "PLUGIN_FLEX_OBJECTS.ACTION.EDIT_ITEM", "list" => "PLUGIN_FLEX_OBJECTS.ACTION.LIST_ITEMS"];
        } else {
            // line 11
            $context["options"] = ["edit" => "PLUGIN_FLEX_OBJECTS.ACTION.EDIT_ITEM", "list" => "PLUGIN_FLEX_OBJECTS.ACTION.LIST_ITEMS"];
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/save-redirect/save-redirect.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 16
            echo "        ";
            $context["id"] = ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 16))) . "-") . $context["key"]);
            // line 17
            echo "
        ";
            // line 18
            if ((($context["savedOption"] ?? null) == $context["key"])) {
                // line 19
                echo "            ";
                $context["value"] = ($context["savedOption"] ?? null);
                // line 20
                echo "        ";
            }
            // line 21
            echo "
        <span class=\"radio\">
            <input type=\"radio\"
                   value=\"";
            // line 24
            echo twig_escape_filter($this->env, $context["key"]);
            echo "\"
                   id=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                   name=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 26)), "html", null, true);
            echo "\"
                   ";
            // line 27
            if (($context["key"] == ($context["value"] ?? null))) {
                echo "checked=\"checked\" ";
            }
            // line 28
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 28) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 29
            echo "                    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 29), "required", [], "any", false, false, false, 29), [0 => "on", 1 => "true", 2 => 1])) {
                echo "required=\"required\"";
            }
            // line 30
            echo "            />
            <label style=\"display: inline\" class=\"inline\" for=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter($context["text"]));
            echo "</label>
        </span>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/save-redirect/save-redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  117 => 30,  112 => 29,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  86 => 21,  83 => 20,  80 => 19,  78 => 18,  75 => 17,  72 => 16,  67 => 15,  63 => 14,  58 => 1,  55 => 11,  52 => 9,  50 => 8,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set originalValue = value %}
{% set value = (value is null ? field.default : value) %}
{% set isNew = key ? false : true %}
{% set savedOption = grav.session.post_entries_save|default('edit') %}

{% if isNew %}
    {% set options = {'create-new':'PLUGIN_FLEX_OBJECTS.ACTION.CREATE_NEW', 'edit':'PLUGIN_FLEX_OBJECTS.ACTION.EDIT_ITEM', 'list':'PLUGIN_FLEX_OBJECTS.ACTION.LIST_ITEMS'} %}
{% else %}
    {% set options = {'edit':'PLUGIN_FLEX_OBJECTS.ACTION.EDIT_ITEM', 'list':'PLUGIN_FLEX_OBJECTS.ACTION.LIST_ITEMS'} %}
{% endif %}

{% block input %}
    {% for key, text in options %}
        {% set id = field.id|default(field.name) ~ '-' ~ key %}

        {% if savedOption == key %}
            {% set value = savedOption %}
        {% endif %}

        <span class=\"radio\">
            <input type=\"radio\"
                   value=\"{{ key|e }}\"
                   id=\"{{ id|e }}\"
                   name=\"{{ (field.name)|fieldName }}\"
                   {% if key == value %}checked=\"checked\" {% endif %}
                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
            />
            <label style=\"display: inline\" class=\"inline\" for=\"{{ id|e }}\">{{ text|tu|e }}</label>
        </span>


    {% endfor %}
{% endblock %}", "forms/fields/save-redirect/save-redirect.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\forms\\fields\\save-redirect\\save-redirect.html.twig");
    }
}

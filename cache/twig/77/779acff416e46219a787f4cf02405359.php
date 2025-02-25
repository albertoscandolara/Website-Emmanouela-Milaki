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

/* forms/fields/checkboxes/checkboxes.html.twig */
class __TwigTemplate_2f99c32def58c39f43b2fe4270b18931 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkboxes/checkboxes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-keys=\"";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 5) == "keys")) ? ("true") : ("false"));
        echo "\"
    data-grav-field-name=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6))), "html", null, true);
        echo "\"
";
    }

    // line 9
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $context["value"] = (((null === ($context["value"] ?? null))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 10)) : (($context["value"] ?? null)));
        // line 11
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 11) == "keys") && twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 11))) {
            // line 12
            echo "        ";
            $context["value"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 12), ($context["value"] ?? null));
            // line 13
            echo "    ";
        }
        // line 14
        echo "
        <div class=\"checkboxes ";
        // line 15
        echo twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 17
            echo "                ";
            $context["id"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17))) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)))) . "-") . $context["key"]);
            // line 18
            echo "                ";
            $context["name"] = (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 18) == "keys")) ? ($context["key"]) : (($context["id"] ?? null)));
            // line 19
            echo "                ";
            $context["val"] = (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 19) == "keys")) ? ("1") : ($context["key"]));
            // line 20
            echo "                ";
            $context["checked"] = (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 20) == "keys")) ? ((($__internal_compile_0 = ($context["value"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null)) : (twig_in_filter($context["key"], ($context["value"] ?? null))));
            // line 21
            echo "                ";
            $context["help"] = ((twig_in_filter($context["key"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help_options", [], "any", false, false, false, 21)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help_options", [], "any", false, false, false, 21)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null)) : (false));
            // line 22
            echo "                ";
            $context["disabled"] = twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled_options", [], "any", false, false, false, 22));
            // line 23
            echo "                <input type=\"checkbox\"
                    id=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                    value=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["val"] ?? null));
            echo "\"
                    name=\"";
            // line 26
            echo twig_escape_filter($this->env, ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 26))) . "[") . ($context["name"] ?? null)) . "]"), "html", null, true);
            echo "\"
                    class=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["form_field_checkbox_classes"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 27), "html", null, true);
            echo "\"
                    ";
            // line 28
            if (($context["checked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 29
            echo "                    ";
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            // line 30
            echo "                >
                <label style=\"display: inline; ";
            // line 31
            if (($context["disabled"] ?? null)) {
                echo "opacity: 0.6; cursor: no-drop;";
            }
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">
                    ";
            // line 32
            if (($context["help"] ?? null)) {
                // line 33
                echo "                        <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["help"] ?? null)), "html_attr");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
                echo "</span>
                    ";
            } else {
                // line 35
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
                echo "
                    ";
            }
            // line 37
            echo "                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
    
";
    }

    public function getTemplateName()
    {
        return "forms/fields/checkboxes/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 39,  170 => 37,  164 => 35,  156 => 33,  154 => 32,  146 => 31,  143 => 30,  138 => 29,  134 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  113 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  91 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    {{ parent() }}
    data-grav-keys=\"{{ field.use == 'keys' ? 'true' : 'false' }}\"
    data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% block input %}
    {% set value = (value is null ? field.default : value) %}
    {% if field.use == 'keys' and field.default %}
        {% set value = field.default|merge(value) %}
    {% endif %}

        <div class=\"checkboxes {{ form_field_wrapper_classes }} {{ field.wrapper_classes }}\">
            {% for key, text in field.options %}
                {% set id = field.id|default(field.name)|hyphenize ~ '-' ~ key %}
                {% set name = field.use == 'keys' ? key : id %}
                {% set val = field.use == 'keys' ? '1' : key %}
                {% set checked = (field.use == 'keys' ? value[key] : key in value) %}
                {% set help = (key in field.help_options|keys ? field.help_options[key] : false) %}
                {% set disabled = key in field.disabled_options %}
                <input type=\"checkbox\"
                    id=\"{{ id|e }}\"
                    value=\"{{ val|e }}\"
                    name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ name ~ ']' }}\"
                    class=\"{{ form_field_checkbox_classes }} {{ field.classes }}\"
                    {% if checked %}checked=\"checked\"{% endif %}
                    {% if disabled %}disabled=\"disabled\"{% endif %}
                >
                <label style=\"display: inline; {% if disabled %}opacity: 0.6; cursor: no-drop;{% endif %}\" for=\"{{ id|e }}\">
                    {% if help %}
                        <span class=\"hint--bottom\" data-hint=\"{{ help|t|e('html_attr') }}\">{{ text|t|e }}</span>
                    {% else %}
                        {{ text|t|e }}
                    {% endif %}
                </label>
            {% endfor %}
        </div>
    
{% endblock %}", "forms/fields/checkboxes/checkboxes.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\checkboxes\\checkboxes.html.twig");
    }
}

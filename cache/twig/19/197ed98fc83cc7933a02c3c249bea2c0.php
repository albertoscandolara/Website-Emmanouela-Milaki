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

/* forms/fields/text/text.html.twig */
class __TwigTemplate_6086eebc517cbb08425b252bec91e1a8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend", [], "any", false, false, false, 1) || twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append", [], "any", false, false, false, 1)) || twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 1))) {
            // line 2
            $context["field"] = twig_array_merge(($context["field"] ?? null), ["wrapper_classes" => "form-input-addon-wrapper"]);
        }
        // line 5
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/text/text.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend", [], "any", false, false, false, 8)) {
            // line 9
            echo "    <div class=\"form-input-addon form-input-prepend\">";
            // line 10
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend", [], "any", false, false, false, 10));
            // line 11
            echo "</div>
";
        }
    }

    // line 15
    public function block_input_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    type=\"text\"
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 17)) {
            echo "size=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 17), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 18) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 18), "min", [], "any", true, true, false, 18))) {
            echo "minlength=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18))), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 19) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 19), "max", [], "any", true, true, false, 19))) {
            echo "maxlength=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19))), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_append($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 24)) {
            // line 25
            echo "        <div class=\"form-input-addon form-input-append copy-to-clipboard\">
            ";
            // line 26
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 26), [0 => "0", 1 => "1"])) {
                // line 27
                echo "                <i class=\"fa fa-clipboard\"></i>
            ";
            } else {
                // line 29
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 29));
            }
            // line 31
            echo "        </div>
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 32
($context["field"] ?? null), "append", [], "any", false, false, false, 32)) {
            // line 33
            echo "        <div class=\"form-input-addon form-input-append\">";
            // line 34
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append", [], "any", false, false, false, 34));
            // line 35
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/text/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 35,  130 => 34,  128 => 33,  126 => 32,  123 => 31,  120 => 29,  116 => 27,  114 => 26,  111 => 25,  108 => 24,  104 => 23,  97 => 20,  90 => 19,  83 => 18,  77 => 17,  74 => 16,  70 => 15,  64 => 11,  62 => 10,  60 => 9,  58 => 8,  54 => 7,  49 => 5,  46 => 2,  44 => 1,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% if field.prepend or field.append or field.copy_to_clipboard %}
    {% set field = field|merge({'wrapper_classes': 'form-input-addon-wrapper'}) %}
{% endif %}

{% extends \"forms/field.html.twig\" %}

{% block prepend %}
{% if field.prepend %}
    <div class=\"form-input-addon form-input-prepend\">
        {{- field.prepend|t|raw -}}
    </div>
{% endif %}
{% endblock %}

{% block input_attributes %}
    type=\"text\"
    {% if field.size %}size=\"{{ field.size }}\"{% endif %}
    {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
    {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
    {{ parent() }}
{% endblock %}

{% block append %}
    {% if field.copy_to_clipboard %}
        <div class=\"form-input-addon form-input-append copy-to-clipboard\">
            {% if field.copy_to_clipboard in ['0', '1'] %}
                <i class=\"fa fa-clipboard\"></i>
            {% else %}
                {{- field.copy_to_clipboard|t|raw -}}
            {% endif %}
        </div>
    {% elseif field.append %}
        <div class=\"form-input-addon form-input-append\">
            {{- field.append|t|raw -}}
        </div>
    {% endif %}
{% endblock %}


", "forms/fields/text/text.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\text\\text.html.twig");
    }
}

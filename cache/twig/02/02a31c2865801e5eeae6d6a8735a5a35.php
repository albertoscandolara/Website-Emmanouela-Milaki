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

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_d737e4cdbe24fdb398c50cddc69723c1 extends \Twig\Template
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
        // line 8
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 10
        $context["has_hidden"] = false;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 12
            if (twig_test_empty($context["key"])) {
                // line 13
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_global_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
  data-grav-field-name=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 19))), "html", null, true);
        echo "\"
";
    }

    // line 22
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  <div class=\"switch-toggle switch-grav ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 23), "html", null, true);
        echo " switch-";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 23)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
    ";
        // line 24
        $context["maxLen"] = 0;
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 26
            echo "      ";
            $context["translation"] = twig_trim_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
            // line 27
            echo "      ";
            $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
            // line 28
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    ";
        // line 31
        echo "    ";
        $context["highlight"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "highlight", [], "any", false, false, false, 31));
        // line 32
        echo "    ";
        $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter((($context["value"]) ?? ((($context["default"]) ?? (($context["highlight"] ?? null))))));
        // line 33
        echo "
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 35
            echo "      ";
            $context["key"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter($context["key"]);
            // line 36
            echo "      ";
            $context["id"] = ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 36)) : (("toggle_" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 36)))) . $context["key"]);
            // line 37
            echo "      ";
            $context["translation"] = twig_trim_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
            // line 38
            echo "
      <input type=\"radio\"
             value=\"";
            // line 40
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
             id=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"
             name=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 42))), "html", null, true);
            echo "\"
             ";
            // line 43
            if ((($context["highlight"] ?? null) === $context["key"])) {
                echo "class=\"highlight\"";
            }
            // line 44
            echo "             ";
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 44) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 45
            echo "             ";
            if (($context["key"] === ($context["value"] ?? null))) {
                echo "checked=\"checked\"";
            }
            // line 46
            echo "             ";
            if (($context["required"] ?? null)) {
                echo "required=\"required\"";
            }
            // line 47
            echo "             ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 47)) {
                echo "tabindex=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 47), "html", null, true);
                echo "\"";
            }
            // line 48
            echo "      />
      <label for=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo twig_trim_filter(twig_call_macro($macros["macro"], "macro_spanToggle", [($context["translation"] ?? null), ($context["maxLen"] ?? null)], 49, $context, $this->getSourceContext()));
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </div>
";
    }

    // line 3
    public function macro_spanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "  ";
            $context["space"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "  ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 5,  211 => 4,  197 => 3,  192 => 51,  182 => 49,  179 => 48,  172 => 47,  167 => 46,  162 => 45,  157 => 44,  153 => 43,  149 => 42,  145 => 41,  141 => 40,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  124 => 34,  121 => 33,  118 => 32,  115 => 31,  112 => 29,  106 => 28,  103 => 27,  100 => 26,  95 => 25,  93 => 24,  84 => 23,  80 => 22,  74 => 19,  69 => 18,  65 => 17,  60 => 1,  53 => 13,  51 => 12,  47 => 11,  45 => 10,  43 => 8,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% macro spanToggle(input, length) %}
  {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
  {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% import _self as macro %}

{% set has_hidden = false %}
{% for key, text in field.options %}
  {% if key is empty %}
    {% set has_hidden = true %}
  {% endif %}
{% endfor %}

{% block global_attributes %}
  {{ parent() }}
  data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% block input %}
  <div class=\"switch-toggle switch-grav {{ field.size }} switch-{{ field.options|length }} {{ field.classes }}\">
    {% set maxLen = 0 %}
    {% for text in field.options %}
      {% set translation = text|t|trim %}
      {% set maxLen = max(translation|length, maxLen) %}
    {% endfor %}

    {# Value falls back to highlight instead of default #}
    {% set highlight = field.highlight|string %}
    {% set value = (value ?? default ?? highlight)|string %}

    {% for key, text in field.options %}
      {% set key = key|string %}
      {% set id = (field.id ?? (\"toggle_\" ~ field.name)) ~ key %}
      {% set translation = text|t|trim %}

      <input type=\"radio\"
             value=\"{{ key }}\"
             id=\"{{ id }}\"
             name=\"{{ (scope ~ field.name)|fieldName }}\"
             {% if highlight is same as(key) %}class=\"highlight\"{% endif %}
             {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
             {% if key is same as(value) %}checked=\"checked\"{% endif %}
             {% if required %}required=\"required\"{% endif %}
             {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
      />
      <label for=\"{{ id }}\">{{ (macro.spanToggle(translation, maxLen)|trim)|raw }}</label>
    {% endfor %}
  </div>
{% endblock %}
", "forms/fields/toggle/toggle.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\toggle\\toggle.html.twig");
    }
}

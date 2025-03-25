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

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_ac71bede42eda9fdd34f13f0fde51b5c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/textarea/textarea.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"";
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-textarea-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
        ";
        // line 5
        $this->displayBlock('prepend', $context, $blocks);
        // line 6
        echo "        <textarea
            ";
        // line 8
        echo "            name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 8))), "html", null, true);
        echo "\"
            ";
        // line 10
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 43
        echo "            >";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["value"] ?? null)), "html");
        echo "</textarea>
            ";
        // line 44
        $this->displayBlock('append', $context, $blocks);
        // line 45
        echo "            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 46
            echo "                <div class=\"";
            ((($context["form_errors_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_errors_classes"] ?? null), "html", null, true))) : (print ("form-errors")));
            echo "\">
                    <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, twig_first($this->env, ($context["errors"] ?? null)), "html", null, true);
            echo "</p>
                </div>
            ";
        }
        // line 50
        echo "    </div>
";
    }

    // line 5
    public function block_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_input_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                class=\"";
        echo twig_escape_filter($this->env, ($context["form_field_textarea_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
                ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 12)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 12));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 13)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 13));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 14) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 15
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 15)) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 15)), "html", null, true);
            echo "\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 16), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 17
        echo "                ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 17), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 18), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 19
        echo "                ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 19), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 19), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 20)) {
            echo "tabindex=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 20), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 22
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 22), "pattern", [], "any", false, false, false, 22)) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 22), "pattern", [], "any", false, false, false, 22), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 23), "message", [], "any", false, false, false, 23)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 23), "message", [], "any", false, false, false, 23)));
            echo "\"";
        }
        // line 24
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows", [], "any", true, true, false, 24)) {
            echo "rows=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows", [], "any", false, false, false, 24), "html", null, true);
            echo "\"";
        }
        // line 25
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cols", [], "any", true, true, false, 25)) {
            echo "cols=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cols", [], "any", false, false, false, 25), "html", null, true);
            echo "\"";
        }
        // line 26
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 26) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 26), "min", [], "any", true, true, false, 26))) {
            echo "minlength=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 26), "min", [], "any", false, false, false, 26))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 26), "min", [], "any", false, false, false, 26))), "html", null, true);
            echo "\"";
        }
        // line 27
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 27) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 27), "max", [], "any", true, true, false, 27))) {
            echo "maxlength=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 27), "max", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 27), "max", [], "any", false, false, false, 27))), "html", null, true);
            echo "\"";
        }
        // line 28
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 28)) {
            // line 29
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 30
                echo "                        data-";
                echo twig_escape_filter($this->env, $context["datakey"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
        }
        // line 33
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", true, true, false, 33)) {
            // line 34
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 35
                echo "                    ";
                if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) {
                    // line 36
                    echo "                      ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 36), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 36), "html_attr");
                    echo "\"
                    ";
                } else {
                    // line 38
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
                    ";
                }
                // line 40
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                ";
        }
        // line 42
        echo "            ";
    }

    // line 44
    public function block_append($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "forms/fields/textarea/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 44,  279 => 42,  276 => 41,  270 => 40,  262 => 38,  254 => 36,  251 => 35,  246 => 34,  243 => 33,  240 => 32,  229 => 30,  224 => 29,  221 => 28,  214 => 27,  207 => 26,  200 => 25,  193 => 24,  186 => 23,  179 => 22,  174 => 21,  167 => 20,  160 => 19,  155 => 18,  150 => 17,  145 => 16,  138 => 15,  133 => 14,  126 => 13,  120 => 12,  111 => 11,  107 => 10,  101 => 5,  96 => 50,  90 => 47,  85 => 46,  82 => 45,  80 => 44,  75 => 43,  72 => 10,  67 => 8,  64 => 6,  62 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-textarea-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        {% block prepend %}{% endblock prepend %}
        <textarea
            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            {# input attribute structures #}
            {% block input_attributes %}
                class=\"{{ form_field_textarea_classes }} {{ field.classes }} {{ field.size }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"{% endif %}
                {% if field.rows is defined %}rows=\"{{ field.rows }}\"{% endif %}
                {% if field.cols is defined %}cols=\"{{ field.cols }}\"{% endif %}
                {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
                {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
                {% if field.datasets %}
                    {% for datakey, datavalue in field.datasets %}
                        data-{{ datakey }}=\"{{ datavalue|e('html_attr') }}\"
                    {% endfor %}
                {% endif %}
                {% if field.attributes is defined %}
                  {% for key,attribute in field.attributes %}
                    {% if attribute|of_type('array') %}
                      {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
                    {% else %}
                      {{ key }}=\"{{ attribute|e('html_attr') }}\"
                    {% endif %}
                  {% endfor %}
                {% endif %}
            {% endblock %}
            >{{ value|trim|e('html') }}</textarea>
            {% block append %}{% endblock append %}
            {% if inline_errors and errors %}
                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                    <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ errors|first }}</p>
                </div>
            {% endif %}
    </div>
{% endblock %}
", "forms/fields/textarea/textarea.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\textarea\\textarea.html.twig");
    }
}

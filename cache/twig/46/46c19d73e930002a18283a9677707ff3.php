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

/* forms/fields/editor/editor.html.twig */
class __TwigTemplate_035e8fa89775574daf2b694e13c67876 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'label' => [$this, 'block_label'],
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
        $context["whitelabel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "whitelabel", [], "any", false, false, false, 3);
        // line 4
        $context["theme"] = (((twig_get_attribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_theme", [], "any", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_theme", [], "any", false, false, false, 4)))) ? (twig_get_attribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_theme", [], "any", false, false, false, 4)) : ("paper.css"));
        // line 5
        $context["fontsize"] = (((twig_get_attribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_fontsize", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_fontsize", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_fontsize", [], "any", false, false, false, 5)) : ("lg"));
        // line 7
        $context["value"] = (($context["value"]) ?? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 7))));
        // line 8
        if ( !($context["codemirrorOptions"] ?? null)) {
            // line 9
            $context["codemirrorOptions"] = twig_array_merge(["mode" => "gfm", "theme" => ($context["theme"] ?? null), "ignore" => [0 => "code", 1 => "preview"], "font" => "mono"], ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", false, false, false, 9), [])) : ([])));
        }
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "theme", [], "any", false, false, false, 12)) {
            // line 13
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (((($context["theme_url"] ?? null) . "/css/codemirror/themes/") . twig_get_attribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "theme", [], "any", false, false, false, 13)) . ".css")], "method", false, false, false, 13);
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/editor/editor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->displayBlock('label', $context, $blocks);
        // line 28
        echo "    <div class=\"form-field ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 28), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"form-data grav-editor\">
            <div class=\"grav-editor-content is-active fontsize-";
        // line 30
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "font_size", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "font_size", [], "any", false, false, false, 30), ($context["fontsize"] ?? null))) : (($context["fontsize"] ?? null))), "html", null, true);
        echo " fontfamily-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "font", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
                ";
        // line 31
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), "
")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 32
        echo "                <textarea
                    data-grav-editor=\"";
        // line 33
        echo twig_escape_filter($this->env, json_encode(["codemirror" => ($context["codemirrorOptions"] ?? null)]), "html_attr");
        echo "\"
                    data-grav-editor-mode=\"editor\"
                    name=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 35))), "html", null, true);
        echo "\"
                    ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 36)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 36), "html", null, true);
            echo "\" ";
        }
        // line 37
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 37)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" ";
        }
        // line 38
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 38)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 38), "html", null, true);
            echo "\" ";
        }
        // line 39
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 39) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 40
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 40)) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 40)), "html", null, true);
            echo "\"";
        }
        // line 41
        echo "                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 41), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 42
        echo "                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 42), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 43
        echo "                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 43), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 44
        echo "                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 44), "required", [], "any", false, false, false, 44), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 45
        echo "                    ";
        if (!twig_in_filter("preview", twig_get_attribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "ignore", [], "any", false, false, false, 45))) {
            echo "data-grav-urlpreview=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 45), "/"), "html", null, true);
            echo ".json\"";
        }
        // line 46
        echo "                >";
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "</textarea>
            </div>
            ";
        // line 48
        if (( !twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "resizer", [], "any", true, true, false, 48) || !twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "resizer", [], "any", false, false, false, 48), [0 => "off", 1 => "false", 2 => 0]))) {
            echo "<div class=\"grav-editor-resizer\"></div>";
        }
        // line 49
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 49)) {
            // line 50
            echo "                <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 50), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
                    <span class=\"form-description\">
                        ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 52)) {
                // line 53
                echo "                            ";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 53)), false);
                echo "
                        ";
            } else {
                // line 55
                echo "                            ";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 55));
                echo "
                        ";
            }
            // line 57
            echo "                    </span>
                </div>
            ";
        }
        // line 60
        echo "        </div>
    </div>
";
    }

    // line 17
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 18)) {
            // line 19
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 19)) {
                // line 20
                echo "                ";
                $context["hint"] = (("data-hint=\"" . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 20))) . "\"");
                // line 21
                echo "            ";
            }
            // line 22
            echo "            <div class=\"form-label form-field hint--bottom ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 22), "html", null, true);
            echo "\" ";
            echo ($context["hint"] ?? null);
            echo ">
                ";
            // line 23
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 23));
            echo "
                ";
            // line 24
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 24), "required", [], "any", false, false, false, 24), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
            echo "
            </div>
        ";
        }
        // line 27
        echo "    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/editor/editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 27,  234 => 24,  230 => 23,  223 => 22,  220 => 21,  217 => 20,  214 => 19,  211 => 18,  207 => 17,  201 => 60,  196 => 57,  190 => 55,  184 => 53,  182 => 52,  174 => 50,  171 => 49,  167 => 48,  161 => 46,  152 => 45,  147 => 44,  142 => 43,  137 => 42,  132 => 41,  125 => 40,  120 => 39,  113 => 38,  106 => 37,  100 => 36,  96 => 35,  91 => 33,  88 => 32,  85 => 31,  79 => 30,  73 => 28,  70 => 17,  66 => 16,  61 => 1,  58 => 13,  56 => 12,  53 => 9,  51 => 8,  49 => 7,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set whitelabel = config.plugins.admin.whitelabel %}
{% set theme = whitelabel.codemirror_theme ?? 'paper.css' %}
{% set fontsize = whitelabel.codemirror_fontsize ?? 'lg' %}

{% set value = value ?? field.default|t %}
{% if not codemirrorOptions %}
    {% set codemirrorOptions = {'mode': 'gfm', 'theme': theme, 'ignore': ['code', 'preview'], 'font': 'mono'}|merge(field.codemirror|default({})) %}
{% endif %}

{% if codemirrorOptions.theme %}
    {% do assets.addCss(theme_url ~ '/css/codemirror/themes/' ~ codemirrorOptions.theme ~ '.css') %}
{% endif %}

{% block field %}
    {% block label %}
        {% if field.label %}
            {% if field.help %}
                {% set hint = 'data-hint=\"' ~ field.help|t|raw ~ '\"' %}
            {% endif %}
            <div class=\"form-label form-field hint--bottom {{ field.labelclasses }}\" {{ hint|raw }}>
                {{ field.label|t|raw }}
                {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
            </div>
        {% endif %}
    {% endblock %}
    <div class=\"form-field {{ field.classes|default('') }}\">
        <div class=\"form-data grav-editor\">
            <div class=\"grav-editor-content is-active fontsize-{{ codemirrorOptions.font_size|default(fontsize) }} fontfamily-{{ codemirrorOptions.font }}\">
                {% set input_value = value is iterable ? value|join(\"\\n\") : value|string %}
                <textarea
                    data-grav-editor=\"{{ {'codemirror': codemirrorOptions} | json_encode|e('html_attr') }}\"
                    data-grav-editor-mode=\"editor\"
                    name=\"{{ (scope ~ field.name)|fieldName }}\"
                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                    {% if field.id is defined %}id=\"{{ field.id }}\" {% endif %}
                    {% if field.style is defined %}style=\"{{ field.style }}\" {% endif %}
                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                    {% if 'preview' not in codemirrorOptions.ignore %}data-grav-urlpreview=\"{{ base_url }}/media/{{ admin.route|trim('/') }}.json\"{% endif %}
                >{{ input_value }}</textarea>
            </div>
            {% if field.resizer is not defined or field.resizer not in ['off', 'false', 0] %}<div class=\"grav-editor-resizer\"></div>{% endif %}
            {% if field.description %}
                <div class=\"form-extra-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                    <span class=\"form-description\">
                        {% if field.markdown %}
                            {{ field.description|t|markdown(false)|raw }}
                        {% else %}
                            {{ field.description|t|raw }}
                        {% endif %}
                    </span>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "forms/fields/editor/editor.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\editor\\editor.html.twig");
    }
}

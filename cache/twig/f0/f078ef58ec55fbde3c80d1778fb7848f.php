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

/* partials/blueprints.html.twig */
class __TwigTemplate_d5734c088d3c80bc95d7be0e883efbc2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["blueprints"] = (($context["blueprints"]) ?? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 1)));
        // line 2
        $context["data"] = (($context["data"]) ?? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "data", [], "any", false, false, false, 2)));
        // line 3
        $context["form_id"] = (($context["form_id"]) ?? ("blueprints"));
        // line 4
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 5
        $context["field_layout"] = "admin";
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "findFormFields", [0 => "file", 1 => twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 7)], "method", false, false, false, 7)) {
            // line 8
            echo "    ";
            $context["multipart"] = " enctype=\"multipart/form-data\"";
        }
        // line 10
        echo "
<form ";
        // line 11
        if (($context["form_action"] ?? null)) {
            echo "action=\"";
            echo twig_escape_filter($this->env, ($context["form_action"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " id=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "novalidate", [], "any", false, false, false, 11)) {
            echo "novalidate";
        }
        echo " data-grav-keepalive=\"true\"";
        echo ($context["multipart"] ?? null);
        echo ">
    ";
        // line 12
        $this->loadTemplate("partials/blueprints.html.twig", "partials/blueprints.html.twig", 12, "97767663")->display(twig_array_merge($context, ["name" => null, "fields" => twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 12)]));
        // line 16
        echo "
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "extra", [], "any", false, false, false, 17)) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "extra", [], "any", false, false, false, 18));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 19
                echo "        ";
                if (!twig_in_filter($context["name"], [0 => "_json", 1 => "task", 2 => "admin-nonce"])) {
                    // line 20
                    echo "            ";
                    $context["field"] = ["name" => ("_json." . $context["name"])];
                    // line 21
                    echo "            ";
                    $context["value"] = json_encode($context["value"]);
                    // line 22
                    echo "            ";
                    $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "partials/blueprints.html.twig", 22)->display($context);
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (($context["form"] ?? null)) {
            // line 28
            echo "        ";
            $this->loadTemplate("forms/fields/formname/formname.html.twig", "partials/blueprints.html.twig", 28)->display($context);
            // line 29
            echo "        ";
            $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "partials/blueprints.html.twig", 29)->display($context);
            // line 30
            echo "        ";
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 30), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 30));
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc("admin-form", "admin-nonce");
            echo "
    ";
        }
        // line 34
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 34,  151 => 32,  145 => 30,  142 => 29,  139 => 28,  137 => 27,  134 => 26,  131 => 25,  117 => 24,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  84 => 18,  82 => 17,  79 => 16,  77 => 12,  59 => 11,  56 => 10,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set blueprints = blueprints ?? form.blueprint %}
{% set data = data ?? form.data %}
{% set form_id = form_id ?? 'blueprints' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

{% if admin.findFormFields('file', blueprints.fields) %}
    {% set multipart = ' enctype=\"multipart/form-data\"' %}
{% endif %}

<form {% if form_action %}action=\"{{ form_action }}\"{% endif %} id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" {% if form.novalidate %}novalidate{% endif %} data-grav-keepalive=\"true\"{{ multipart|raw }}>
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    {% if data.extra %}
    {% for name, value in data.extra %}
        {% if name not in ['_json','task','admin-nonce'] %}
            {% set field = {name: '_json.' ~ name} %}
            {% set value = value|json_encode %}
            {% include 'forms/fields/hidden/hidden.html.twig' %}
        {% endif %}
    {% endfor %}
    {% endif %}

    {% if form %}
        {% include \"forms/fields/formname/formname.html.twig\" %}
        {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
        {{ nonce_field(form.getNonceAction(), form.getNonceName())|raw }}
    {% else %}
        {{ nonce_field('admin-form', 'admin-nonce')|raw }}
    {% endif %}
</form>
", "partials/blueprints.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\blueprints.html.twig");
    }
}


/* partials/blueprints.html.twig */
class __TwigTemplate_d5734c088d3c80bc95d7be0e883efbc2___97767663 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "partials/blueprints.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<div class=\"block block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 13), "html", null, true);
        echo "\">";
    }

    // line 14
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/blueprints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 14,  249 => 13,  238 => 12,  157 => 34,  151 => 32,  145 => 30,  142 => 29,  139 => 28,  137 => 27,  134 => 26,  131 => 25,  117 => 24,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  84 => 18,  82 => 17,  79 => 16,  77 => 12,  59 => 11,  56 => 10,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set blueprints = blueprints ?? form.blueprint %}
{% set data = data ?? form.data %}
{% set form_id = form_id ?? 'blueprints' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

{% if admin.findFormFields('file', blueprints.fields) %}
    {% set multipart = ' enctype=\"multipart/form-data\"' %}
{% endif %}

<form {% if form_action %}action=\"{{ form_action }}\"{% endif %} id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" {% if form.novalidate %}novalidate{% endif %} data-grav-keepalive=\"true\"{{ multipart|raw }}>
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    {% if data.extra %}
    {% for name, value in data.extra %}
        {% if name not in ['_json','task','admin-nonce'] %}
            {% set field = {name: '_json.' ~ name} %}
            {% set value = value|json_encode %}
            {% include 'forms/fields/hidden/hidden.html.twig' %}
        {% endif %}
    {% endfor %}
    {% endif %}

    {% if form %}
        {% include \"forms/fields/formname/formname.html.twig\" %}
        {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
        {{ nonce_field(form.getNonceAction(), form.getNonceName())|raw }}
    {% else %}
        {{ nonce_field('admin-form', 'admin-nonce')|raw }}
    {% endif %}
</form>
", "partials/blueprints.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\blueprints.html.twig");
    }
}

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

/* forms/default/fields.html.twig */
class __TwigTemplate_e6750b2dabc8ddb1b6b32f15e78173b8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'outer_markup_field_open' => [$this, 'block_outer_markup_field_open'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'outer_markup_field_close' => [$this, 'block_outer_markup_field_close'],
            'empty_fields_markup' => [$this, 'block_empty_fields_markup'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["fields"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormFields($context, ($context["fields"] ?? null), ($context["name"] ?? null));
        // line 2
        $context["originalValue"] = null;
        // line 3
        if (twig_length_filter($this->env, ($context["fields"] ?? null))) {
            // line 4
            echo "  ";
            $this->displayBlock('outer_markup_field_open', $context, $blocks);
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
                // line 6
                echo "    ";
                $context["value"] = ((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 6)], "method", false, false, false, 6)) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 6)], "method", false, false, false, 6)));
                // line 7
                echo "    ";
                $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 7), ($context["field_layout"] ?? null), (($context["fallback_field"]) ?? ("text")));
                // line 8
                echo "    ";
                $this->displayBlock('inner_markup_field_open', $context, $blocks);
                // line 9
                echo "    ";
                $this->displayBlock('field', $context, $blocks);
                // line 12
                echo "    ";
                $this->displayBlock('inner_markup_field_close', $context, $blocks);
                // line 13
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  ";
            $this->displayBlock('outer_markup_field_close', $context, $blocks);
        } else {
            // line 16
            echo "  ";
            $this->displayBlock('empty_fields_markup', $context, $blocks);
        }
    }

    // line 4
    public function block_outer_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
        $this->loadTemplate(($context["field_templates"] ?? null), "forms/default/fields.html.twig", 10)->display($context);
        // line 11
        echo "    ";
    }

    // line 12
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_outer_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_empty_fields_markup($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "forms/default/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 16,  138 => 14,  132 => 12,  128 => 11,  125 => 10,  121 => 9,  115 => 8,  109 => 4,  103 => 16,  99 => 14,  85 => 13,  82 => 12,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set fields = prepare_form_fields(fields, name) %}
{% set originalValue = null %}
{% if fields|length %}
  {% block outer_markup_field_open %}{% endblock %}
  {% for field_name, field in fields %}
    {% set value = form ? form.value(field.name) : data.value(field.name) %}
    {% set field_templates = include_form_field(field.type, field_layout, fallback_field ?? 'text') %}
    {% block inner_markup_field_open %}{% endblock %}
    {% block field %}
        {% include field_templates %}
    {% endblock %}
    {% block inner_markup_field_close %}{% endblock %}
  {% endfor %}
  {% block outer_markup_field_close %}{% endblock %}
{% else %}
  {% block empty_fields_markup %}{% endblock %}
{% endif %}
", "forms/default/fields.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\default\\fields.html.twig");
    }
}

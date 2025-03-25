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

/* forms/fields/email/email.html.twig */
class __TwigTemplate_ad39c163f019ea61263eba29dcaba894 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/email/email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    type=\"email\"
    ";
        // line 5
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 5), [0 => "on", 1 => "true", 2 => 1])) {
            echo "multiple=\"multiple\"";
        }
        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 6)) {
            echo "size=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 6), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 7) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 7), "min", [], "any", true, true, false, 7))) {
            echo "minlength=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 7), "min", [], "any", false, false, false, 7))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 7), "min", [], "any", false, false, false, 7))), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 8) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 8), "max", [], "any", true, true, false, 8))) {
            echo "maxlength=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 8), "max", [], "any", false, false, false, 8))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 8), "max", [], "any", false, false, false, 8))), "html", null, true);
            echo "\"";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/email/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  71 => 8,  64 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input_attributes %}
    type=\"email\"
    {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
    {% if field.size %}size=\"{{ field.size }}\"{% endif %}
    {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
    {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
    {{ parent() }}
{% endblock %}
", "forms/fields/email/email.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\email\\email.html.twig");
    }
}

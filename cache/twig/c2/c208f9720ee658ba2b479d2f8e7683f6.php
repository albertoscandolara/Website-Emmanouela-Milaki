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

/* forms/fields/uniqueid/uniqueid.html.twig */
class __TwigTemplate_29daf62ab693eb7ad754d723ff1fca09 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/uniqueid/uniqueid.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<input type=\"hidden\" name=\"__unique_form_id__\" value=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uniqueid", [], "method", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uniqueid", [], "method", false, false, false, 4)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uniqueid", [], "method", false, false, false, 4)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->randomStringFunc(20))), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/uniqueid/uniqueid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
<input type=\"hidden\" name=\"__unique_form_id__\" value=\"{{ form.uniqueid() ?? random_string(20) }}\" />
{% endblock %}", "forms/fields/uniqueid/uniqueid.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\uniqueid\\uniqueid.html.twig");
    }
}

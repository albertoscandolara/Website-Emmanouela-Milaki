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

/* forms/layouts/field.html.twig */
class __TwigTemplate_43c3672ec3f5c47d73fd5381eed9a762 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate([0 => (("forms/layouts/field/" . ($context["layout"] ?? null)) . "-field.html.twig"), 1 => "forms/layouts/field/default-field.html.twig"], "forms/layouts/field.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["layout"] = (($context["layout"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)) : ("default"))));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/layouts/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  41 => 3,  34 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# DEPRECATED: Do not override this file! Use forms/layouts/field/[FORM_LAYOUT]-field.html.twig instead #}

{% set layout = layout ?? form.layout ?? 'default' %}
{% extends [\"forms/layouts/field/#{layout}-field.html.twig\", 'forms/layouts/field/default-field.html.twig'] %}
", "forms/layouts/field.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\layouts\\field.html.twig");
    }
}

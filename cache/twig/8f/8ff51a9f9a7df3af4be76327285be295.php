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

/* flex-objects/types/user-accounts/edit.html.twig */
class __TwigTemplate_1d9ec1ebdfaff7142da5f6652b001c51 extends \Twig\Template
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
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 3)) {
            // line 4
            $context["back_route"] = "/";
        }
        // line 7
        if ( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 7)) {
            // line 8
            twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "onPrepareRegistration", [], "method", false, false, false, 8);
        }
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/edit.html.twig", "flex-objects/types/user-accounts/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "flex-objects/types/user-accounts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 1,  48 => 8,  46 => 7,  43 => 4,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/edit.html.twig' %}

{% if not directory.isAuthorized('list', 'admin', user) %}
    {% set back_route = '/' %}
{% endif %}

{% if not object.exists %}
    {% do object.onPrepareRegistration() %}
{% endif %}", "flex-objects/types/user-accounts/edit.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\user-accounts\\edit.html.twig");
    }
}

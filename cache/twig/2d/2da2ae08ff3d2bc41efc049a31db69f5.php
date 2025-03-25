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

/* flex-objects.html.twig */
class __TwigTemplate_83c433a50a226009c16876fb493ce888 extends \Twig\Template
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
        $context["user"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "user", [], "any", false, false, false, 1);
        // line 2
        $context["route"] = twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "route", [], "any", false, false, false, 2);
        // line 3
        $context["type"] = (((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.template"], "method", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.template"], "method", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.template"], "method", false, false, false, 3)) : (($context["target"] ?? null)));
        // line 6
        if ((($context["key"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "currentUri", [], "method", false, false, false, 6), "queryParam", [0 => "preview"], "method", false, false, false, 6))) {
            // line 7
            echo "    ";
            $context["action"] = "preview";
        }
        // line 10
        ob_start();
        // line 11
        if ((($context["action"] ?? null) == "add")) {
            // line 12
            echo "edit";
        } elseif ((        // line 13
($context["action"] ?? null) == "delete")) {
            // line 14
            echo "list";
        } else {
            // line 16
            echo twig_escape_filter($this->env, ((($context["action"] ?? null)) ? (($context["action"] ?? null)) : (((($context["task"] ?? null)) ? (($context["task"] ?? null)) : ("types")))), "html", null, true);
        }
        $context["template"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        $context["separator"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 20), "param_sep", [], "any", false, false, false, 20);
        // line 21
        $context["view_config"] = (((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => ("admin.views." . ($context["template"] ?? null))], "method", true, true, false, 21) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => ("admin.views." . ($context["template"] ?? null))], "method", false, false, false, 21)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => ("admin.views." . ($context["template"] ?? null))], "method", false, false, false, 21)) : ((((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => ("admin." . ($context["template"] ?? null))], "method", true, true, false, 21) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => ("admin." . ($context["template"] ?? null))], "method", false, false, false, 21)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => ("admin." . ($context["template"] ?? null))], "method", false, false, false, 21)) : ([]))));
        // line 23
        $this->loadTemplate(((($context["target"] ?? null)) ? ([0 => (((("flex-objects/types/" .         // line 24
($context["type"] ?? null)) . "/") . ($context["template"] ?? null)) . ".html.twig"), 1 => (("flex-objects/types/default/" .         // line 25
($context["template"] ?? null)) . ".html.twig"), 2 => "flex-objects/layouts/404.html.twig"]) : ([0 => (("flex-objects/types/default/" .         // line 28
($context["template"] ?? null)) . ".html.twig"), 1 => "flex-objects/layouts/404.html.twig"])), "flex-objects.html.twig", 23)->display($context);
    }

    public function getTemplateName()
    {
        return "flex-objects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  70 => 25,  69 => 24,  68 => 23,  66 => 21,  64 => 20,  60 => 16,  57 => 14,  55 => 13,  53 => 12,  51 => 11,  49 => 10,  45 => 7,  43 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set user = admin.user -%}
{%- set route = controller.route -%}
{%- set type = directory.config('admin.template') ?? target -%}

{# Set action from ?preview=1 #}
{%- if key and uri.currentUri().queryParam('preview') %}
    {% set action = 'preview' %}
{% endif -%}

{%- set template -%}
    {%- if action == 'add' -%}
        edit
    {%- elseif action == 'delete' -%}
        list
    {%- else -%}
        {{- action ?: task ?: 'types' -}}
    {%- endif -%}
{%- endset -%}

{%- set separator = config.system.param_sep -%}
{%- set view_config = directory.config('admin.views.' ~ template) ?? directory.config('admin.' ~ template) ?? [] -%}

{%- include target ? [
        'flex-objects/types/' ~ type ~ '/' ~ template ~ '.html.twig',
        'flex-objects/types/default/' ~ template ~ '.html.twig',
        'flex-objects/layouts/404.html.twig'
    ] : [
        'flex-objects/types/default/' ~ template ~ '.html.twig',
        'flex-objects/layouts/404.html.twig'
    ] -%}
", "flex-objects.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects.html.twig");
    }
}

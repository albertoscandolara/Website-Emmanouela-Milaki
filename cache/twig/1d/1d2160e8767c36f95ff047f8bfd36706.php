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

/* error.html.twig */
class __TwigTemplate_03c1a1556d74725c26aa45166c02f74f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div id=\"error\">
\t\t<div>
\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ERROR.ERROR"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "http_response_code", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 8);
        echo "
\t\t\t</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
\t<div id=\"error\">
\t\t<div>
\t\t\t<h1>{{ 'PLUGIN_ERROR.ERROR'|t }} {{ page.header.http_response_code }}</h1>
\t\t\t<p>
\t\t\t\t{{ page.content|raw }}
\t\t\t</p>
\t\t</div>
\t</div>
{% endblock %}
", "error.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\error.html.twig");
    }
}

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

/* forms/fields/folder-slug/folder-slug.html.twig */
class __TwigTemplate_73397aaada3a1fa19679a2703fcb32dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/text/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["field"] = twig_array_merge(($context["field"] ?? null), ["wrapper_classes" => "form-input-addon-wrapper"]);
        // line 1
        $this->parent = $this->loadTemplate("forms/fields/text/text.html.twig", "forms/fields/folder-slug/folder-slug.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_append($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"form-input-addon form-input-append hint--top\" data-hint=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AUTOREGENERATE_FOLDER_SLUG"), "html", null, true);
        echo "\" data-regenerate='[name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 5))), "html", null, true);
        echo "\"]'>
        <i class=\"fa fa-refresh\"></i>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/folder-slug/folder-slug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 4,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/fields/text/text.html.twig\" %}
{% set field = field|merge({'wrapper_classes': 'form-input-addon-wrapper'}) %}

{% block append %}
    <div class=\"form-input-addon form-input-append hint--top\" data-hint=\"{{ 'PLUGIN_ADMIN.AUTOREGENERATE_FOLDER_SLUG'|t }}\" data-regenerate='[name=\"{{ (scope ~ field.name)|fieldName }}\"]'>
        <i class=\"fa fa-refresh\"></i>
    </div>
{% endblock %}
", "forms/fields/folder-slug/folder-slug.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\folder-slug\\folder-slug.html.twig");
    }
}

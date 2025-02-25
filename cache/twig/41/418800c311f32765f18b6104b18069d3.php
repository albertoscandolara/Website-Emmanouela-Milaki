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

/* forms/fields/codemirror/codemirror.html.twig */
class __TwigTemplate_fd6547b1bfe0ee89056e8a65b84780d6 extends \Twig\Template
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
        return "forms/fields/editor/editor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["theme"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 2), "admin", [], "any", false, true, false, 2), "whitelabel", [], "any", false, true, false, 2), "codemirror_theme", [], "any", true, true, false, 2) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 2), "admin", [], "any", false, true, false, 2), "whitelabel", [], "any", false, true, false, 2), "codemirror_theme", [], "any", false, false, false, 2)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 2), "admin", [], "any", false, true, false, 2), "whitelabel", [], "any", false, true, false, 2), "codemirror_theme", [], "any", false, false, false, 2)) : ("paper.css"));
        // line 3
        $context["font"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 3), "admin", [], "any", false, true, false, 3), "whitelabel", [], "any", false, true, false, 3), "codemirror_md_font", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 3), "admin", [], "any", false, true, false, 3), "whitelabel", [], "any", false, true, false, 3), "codemirror_md_font", [], "any", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 3), "admin", [], "any", false, true, false, 3), "whitelabel", [], "any", false, true, false, 3), "codemirror_md_font", [], "any", false, false, false, 3)) : ("sans"));
        // line 4
        $context["codemirrorOptions"] = twig_array_merge(["spellcheck" => "true", "inputStyle" => "contenteditable", "mode" => "gfm", "theme" => ($context["theme"] ?? null), "font" => ($context["font"] ?? null), "ignore" => []], ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", false, false, false, 4), [])) : ([])));
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "showPreview", [], "any", false, false, false, 7)) {
            // line 8
            $context["codemirrorOptions"] = twig_array_merge(($context["codemirrorOptions"] ?? null), ["ignore" => []]);
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/fields/editor/editor.html.twig", "forms/fields/codemirror/codemirror.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/codemirror/codemirror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 1,  49 => 8,  47 => 7,  45 => 4,  43 => 3,  41 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/fields/editor/editor.html.twig\" %}
{% set theme = config.plugins.admin.whitelabel.codemirror_theme ?? 'paper.css' %}
{% set font = config.plugins.admin.whitelabel.codemirror_md_font ?? 'sans' %}
{% set codemirrorOptions = {'spellcheck': 'true', 'inputStyle': 'contenteditable', 'mode': 'gfm', 'theme': theme, 'font': font, 'ignore': []}|merge(field.codemirror|default({})) %}

{# backward compatibility #}
{% if field.showPreview %}
    {% set codemirrorOptions = codemirrorOptions|merge({'ignore': []}) %}
{% endif %}
{# end backward compatibility #}
", "forms/fields/codemirror/codemirror.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\codemirror\\codemirror.html.twig");
    }
}

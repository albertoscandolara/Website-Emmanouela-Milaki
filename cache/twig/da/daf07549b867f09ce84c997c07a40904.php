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

/* partials/stylesheets.html.twig */
class __TwigTemplate_08709ff0f026d353eb2e332ec606a019 extends \Twig\Template
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
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/nucleus.css"), 1 => ["priority" => 20]], "method", false, false, false, 1);
        // line 2
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/template.css"), 1 => ["priority" => 20]], "method", false, false, false, 2);
        // line 3
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => "asset://admin-preset.css", 1 => ["priority" => 5]], "method", false, false, false, 3);
        // line 4
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/simple-fonts.css")], "method", false, false, false, 4);
        // line 5
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/fork-awesome.min.css")], "method", false, false, false, 5);
        // line 6
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/chartist.min.css")], "method", false, false, false, 6);
        // line 7
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/selectize.min.css")], "method", false, false, false, 7);
        // line 8
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/hint.base.min.css")], "method", false, false, false, 8);
        // line 9
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/iconpicker.css")], "method", false, false, false, 9);
        // line 10
        if ((((twig_get_attribute($this->env, $this->source, ($context["browser"] ?? null), "getBrowser", [], "any", false, false, false, 10) == "msie") && (twig_get_attribute($this->env, $this->source, ($context["browser"] ?? null), "getVersion", [], "any", false, false, false, 10) >= 8)) && (twig_get_attribute($this->env, $this->source, ($context["browser"] ?? null), "getVersion", [], "any", false, false, false, 10) <= 9))) {
            // line 11
            echo "    ";
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/nucleus-ie9.css")], "method", false, false, false, 11);
            // line 12
            echo "    ";
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/pure-0.5.0/grids-min.css")], "method", false, false, false, 12);
        }
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["language_codes"] ?? null), "rtl", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 14), "language", [], "any", false, false, false, 14)], "method", false, false, false, 14)) {
            // line 15
            echo "    ";
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/rtl.css")], "method", false, false, false, 15);
        }
    }

    public function getTemplateName()
    {
        return "partials/stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  64 => 14,  60 => 12,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.addCss(theme_url~'/css-compiled/nucleus.css', {priority: 20}) %}
{% do assets.addCss(theme_url~'/css-compiled/template.css', {priority: 20}) %}
{% do assets.addCss('asset://admin-preset.css', {priority: 5}) %}
{% do assets.addCss(theme_url~'/css-compiled/simple-fonts.css') %}
{% do assets.addCss(theme_url~'/css/fork-awesome.min.css') %}
{% do assets.addCss(theme_url~'/css/chartist.min.css') %}
{% do assets.addCss(theme_url~'/css/selectize.min.css') %}
{% do assets.addCss(theme_url~'/css/hint.base.min.css') %}
{% do assets.addCss(theme_url~'/css/iconpicker.css') %}
{% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
    {% do assets.addCss(theme_url~'/css/nucleus-ie9.css') %}
    {% do assets.addCss(theme_url~'/css/pure-0.5.0/grids-min.css') %}
{% endif %}
{% if language_codes.rtl(grav.user.language) %}
    {% do assets.addCss(theme_url~'/css/rtl.css') %}
{% endif %}
", "partials/stylesheets.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\stylesheets.html.twig");
    }
}

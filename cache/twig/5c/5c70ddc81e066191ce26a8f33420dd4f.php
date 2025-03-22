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

/* partials/javascripts.html.twig */
class __TwigTemplate_03eda8401d0f7ac7297fa43a67e2e490 extends \Twig\Template
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
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method", false, false, false, 1);
        // line 2
        if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 3
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/vendor.min.js"), 1 => ["loading" => "defer"]], "method", false, false, false, 3);
            // line 4
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/admin.min.js"), 1 => ["loading" => "defer"]], "method", false, false, false, 4);
            // line 5
            echo "
";
            // line 6
            if (((twig_get_attribute($this->env, $this->source, ($context["browser"] ?? null), "getBrowser", [], "any", false, false, false, 6) == "msie") || (twig_get_attribute($this->env, $this->source, ($context["browser"] ?? null), "getBrowser", [], "any", false, false, false, 6) == "edge"))) {
                // line 7
                echo "    ";
                twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/form-attr.polyfill.js")], "method", false, false, false, 7);
            }
            // line 9
            echo "
";
            // line 10
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("partials/javascripts-extra.html.twig", "partials/javascripts.html.twig", 10);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  54 => 9,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.add('jquery',101) %}
{% if authorize(['admin.login', 'admin.super']) %}
{% do assets.addJs(theme_url~'/js/vendor.min.js', { 'loading':'defer' }) %}
{% do assets.addJs(theme_url~'/js/admin.min.js' , { 'loading':'defer' }) %}

{% if browser.getBrowser == 'msie' or browser.getBrowser == 'edge' %}
    {% do assets.addJs(theme_url~'/js/form-attr.polyfill.js') %}
{% endif %}

{% include 'partials/javascripts-extra.html.twig' ignore missing %}
{% endif %}
", "partials/javascripts.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\javascripts.html.twig");
    }
}

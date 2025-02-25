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

/* forms/fields/xss/xss.html.twig */
class __TwigTemplate_02ff1ca427a0f0e38fcbda52a8c6363e extends \Twig\Template
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
        $context["xss_header"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "header"], "method", false, false, false, 1)) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [0 => "header"], "method", false, false, false, 1))));
        // line 2
        $context["xss_content"] = ((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "content"], "method", false, false, false, 2)) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [0 => "content"], "method", false, false, false, 2)));
        // line 3
        $context["xss_status"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->xssFunc(["header" => ($context["xss_header"] ?? null), "content" => ($context["xss_content"] ?? null)]);
        // line 4
        if ( !twig_test_empty(($context["xss_status"] ?? null))) {
            // line 5
            echo "    <div class=\"notice alert\">";
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.XSS_ISSUE", ($context["xss_status"] ?? null));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/xss/xss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set xss_header = (form ? form.value('header') : data.value('header'))|array %}
{% set xss_content = form ? form.value('content') : data.value('content') %}
{% set xss_status = xss({header: xss_header, content: xss_content}) %}
{% if xss_status is not empty %}
    <div class=\"notice alert\">{{ \"PLUGIN_ADMIN.XSS_ISSUE\"|t(xss_status)|raw }}</div>
{% endif %}
", "forms/fields/xss/xss.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\xss\\xss.html.twig");
    }
}

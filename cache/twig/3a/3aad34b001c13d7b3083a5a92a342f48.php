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

/* modular/default.html.twig */
class __TwigTemplate_ce493b24eb3ed51974cd6642c983a197 extends \Twig\Template
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
        // line 2
        echo "<h3 style=\"color:red\">ERROR: <code>";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "method", false, false, false, 2) . ".") . twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "templateFormat", [], "method", false, false, false, 2)) . ".twig"), "html", null, true);
        echo "</code> template not found for page: <code>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "method", false, false, false, 2), "html", null, true);
        echo "</code></h3>
<h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "method", false, false, false, 3), "html", null, true);
        echo "</h1>
";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "method", false, false, false, 4);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  44 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Default output if no theme #}
<h3 style=\"color:red\">ERROR: <code>{{ page.template() ~'.'~ page.templateFormat() ~\".twig\" }}</code> template not found for page: <code>{{ page.route() }}</code></h3>
<h1>{{ page.title() }}</h1>
{{ page.content()|raw }}
", "modular/default.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\system\\templates\\modular\\default.html.twig");
    }
}

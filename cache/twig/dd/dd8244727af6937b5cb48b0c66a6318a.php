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

/* edit title template (string template a2b65de5a8af64fb59fe4086515a434b) */
class __TwigTemplate_495551502ee4db2982fe45f6d5b0a4c6 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "any", false, false, false, 1)) {
            echo "Root <small>( &lt;root&gt; )</small>";
        } else {
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "header.title"], "method", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "header.title"], "method", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "header.title"], "method", false, false, false, 1)) : (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "folder"], "method", false, false, false, 1))));
            echo " <small>( ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getRoute", [], "method", false, false, false, 1), "toString", [0 => false], "method", false, false, false, 1)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getRoute", [], "method", false, false, false, 1), "toString", [0 => false], "method", false, false, false, 1)) : ("/")));
            echo " )</small>";
        }
    }

    public function getTemplateName()
    {
        return "edit title template (string template a2b65de5a8af64fb59fe4086515a434b)";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if object.root %}Root <small>( &lt;root&gt; )</small>{% else %}{{ (form.value('header.title') ?? form.value('folder'))|e }} <small>( {{ (object.getRoute().toString(false) ?: '/')|e }} )</small>{% endif %}", "edit title template (string template a2b65de5a8af64fb59fe4086515a434b)", "");
    }
}

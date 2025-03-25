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

/* edit title template (string template 71646238ce7744769b5e9b151817c96c) */
class __TwigTemplate_c44f8c923661de9400f8ee653fd0c2bd extends \Twig\Template
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
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "fullname"], "method", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "fullname"], "method", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "fullname"], "method", false, false, false, 1)) : (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "username"], "method", false, false, false, 1))), "html", null, true);
        echo " &lt;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => "email"], "method", false, false, false, 1), "html", null, true);
        echo "&gt;";
    }

    public function getTemplateName()
    {
        return "edit title template (string template 71646238ce7744769b5e9b151817c96c)";
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
        return new Source("{{ form.value('fullname') ?? form.value('username') }} &lt;{{ form.value('email') }}&gt;", "edit title template (string template 71646238ce7744769b5e9b151817c96c)", "");
    }
}

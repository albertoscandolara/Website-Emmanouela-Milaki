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

/* login.html.twig */
class __TwigTemplate_e82657f59fa145468f71bd6d3f5dc7d3 extends \Twig\Template
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
        $context["user"] = twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 3) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authenticated", [], "any", false, false, false, 3))) {
            // line 4
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorized", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twofa_enabled", [], "any", false, false, false, 4))) {
                // line 5
                echo "        ";
                $this->loadTemplate("partials/login-twofa.html.twig", "login.html.twig", 5)->display($context);
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                $this->loadTemplate("partials/login-logout.html.twig", "login.html.twig", 7)->display($context);
                // line 8
                echo "    ";
            }
        } else {
            // line 10
            echo "    ";
            $this->loadTemplate("partials/login-form.html.twig", "login.html.twig", 10)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set user = grav.user %}

{% if user.username and user.authenticated %}
    {% if not user.authorized and user.twofa_enabled %}
        {% include 'partials/login-twofa.html.twig' %}
    {% else %}
        {% include 'partials/login-logout.html.twig' %}
    {% endif %}
{% else %}
    {% include 'partials/login-form.html.twig' %}
{% endif %}", "login.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\login.html.twig");
    }
}

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

/* forms/fields/userinfo/userinfo.html.twig */
class __TwigTemplate_842b12e164b552e6f94132055d5c09e0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/userinfo/userinfo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        ";
        // line 6
        $this->loadTemplate("partials/userinfo-avatar.html.twig", "forms/fields/userinfo/userinfo.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"form-data block size-2-3\">
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "fullname", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
        <h5>
        <a href=\"mailto:";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "</a>
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 12)) {
            // line 13
            echo "        - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "        </h5>
        ";
        // line 16
        $this->loadTemplate("partials/userinfo-avatar-credit.html.twig", "forms/fields/userinfo/userinfo.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/userinfo/userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  82 => 16,  79 => 15,  73 => 13,  71 => 12,  65 => 11,  60 => 9,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        {% include 'partials/userinfo-avatar.html.twig' %}
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>{{ data.fullname }}</h2>
        <h5>
        <a href=\"mailto:{{ data.email }}\">{{ data.email }}</a>
        {% if data.title %}
        - {{ data.title }}
        {% endif %}
        </h5>
        {% include 'partials/userinfo-avatar-credit.html.twig' %}
    </div>
</div>
{% endblock %}", "forms/fields/userinfo/userinfo.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\userinfo\\userinfo.html.twig");
    }
}

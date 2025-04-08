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

/* flex-objects/types/default/buttons/configuration.html.twig */
class __TwigTemplate_fe72dd0494b3aa65bfd6908b37e70e3c extends \Twig\Template
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
        $context["authorize"] = (((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method", false, false, false, 1)) : ((((twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", false, false, false, 1)) : ("admin.super"))));
        // line 3
        if ((($context["configure_url"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => ($context["authorize"] ?? null)], "method", false, false, false, 3))) {
            // line 4
            echo "<a id=\"titlebar-button-configure\" class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["configure_url"] ?? null), "html", null, true);
            echo "\">
    <i class=\"fa fa-cog\"></i> ";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
            echo "
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/buttons/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  41 => 4,  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set authorize = directory.config('admin.views.configure.authorize') ?? directory.config('admin.configure.authorize') ?? 'admin.super' %}

{%- if configure_url and user.authorize(authorize) %}
<a id=\"titlebar-button-configure\" class=\"button\" href=\"{{ configure_url }}\">
    <i class=\"fa fa-cog\"></i> {{ 'PLUGIN_ADMIN.CONFIGURATION'|tu }}
</a>
{% endif %}
", "flex-objects/types/default/buttons/configuration.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\buttons\\configuration.html.twig");
    }
}

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

/* partials/nav-user-details.html.twig */
class __TwigTemplate_7c4ff0aae276527808f212d696a2b3a9 extends \Twig\Template
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
        echo "<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
";
        // line 4
        $context["flex"] = (((twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "flex_objects", [], "array", true, true, false, 4) &&  !(null === (($__internal_compile_0 = ($context["grav"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["flex_objects"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["grav"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["flex_objects"] ?? null) : null)) : (null));
        // line 5
        $context["user"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "user", [], "any", false, false, false, 5);
        // line 6
        if ((($context["flex"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasFlexFeature", [0 => "user"], "method", false, false, false, 6))) {
            // line 7
            echo "    ";
            $context["route"] = twig_get_attribute($this->env, $this->source, ($context["flex"] ?? null), "adminRoute", [0 => ($context["user"] ?? null)], "method", false, false, false, 7);
        } else {
            // line 9
            echo "    ";
            $context["route"] = ("/user/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 9));
        }
        // line 11
        echo "
<div id=\"admin-user-details\">
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["route"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 14
        $this->loadTemplate("partials/nav-user-avatar.html.twig", "partials/nav-user-details.html.twig", 14)->display($context);
        // line 15
        echo "
        <div class=\"admin-user-names\">
            <h4>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullname", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twofa_enabled", [], "any", false, false, false, 17) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 17), "admin", [], "any", false, false, false, 17), "twofa_enabled", [], "any", false, false, false, 17))) {
            echo "<span class=\"badge\">2FA</span>";
        }
        echo "</h4>
            <h5>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</h5>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  70 => 17,  66 => 15,  64 => 14,  60 => 13,  56 => 11,  52 => 9,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
{% set flex = grav['flex_objects'] ?? null %}
{% set user = admin.user %}
{% if flex and user.hasFlexFeature('user') %}
    {% set route = flex.adminRoute(user) %}
{% else %}
    {% set route = '/user/' ~ user.username %}
{% endif %}

<div id=\"admin-user-details\">
    <a href=\"{{ admin_route(route) }}\">
        {% include 'partials/nav-user-avatar.html.twig' %}

        <div class=\"admin-user-names\">
            <h4>{{ user.fullname }} {% if user.twofa_enabled and config.plugins.admin.twofa_enabled %}<span class=\"badge\">2FA</span>{% endif %}</h4>
            <h5>{{ user.title }}</h5>
        </div>
    </a>
</div>
", "partials/nav-user-details.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\nav-user-details.html.twig");
    }
}

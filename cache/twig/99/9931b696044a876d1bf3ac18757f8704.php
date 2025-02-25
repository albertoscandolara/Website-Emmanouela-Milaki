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

/* partials/messages.html.twig */
class __TwigTemplate_8d8b49d36adad20b5234b6181bd50964 extends \Twig\Template
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
        $context["admin_messages"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "messages", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTempMessages", [], "method", false, false, false, 1));
        // line 2
        $context["form_message"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 2);
        // line 3
        echo "<div id=\"messages\" class=\"top-notifications-container";
        echo (((twig_length_filter($this->env, ($context["admin_messages"] ?? null)) || ($context["form_message"] ?? null))) ? (" default-box-shadow") : (""));
        echo "\">
    <div class=\"single-notification info alert hidden\" data-gpm-grav></div>";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admin_messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "<div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "scope", [], "any", false, false, false, 6), "html", null, true);
            echo " alert\">";
            echo twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 6);
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        if (($context["form_message"] ?? null)) {
            // line 9
            echo "<div class=\"error alert\">";
            echo ($context["form_message"] ?? null);
            echo "</div>";
        }
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugin_messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "<div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "scope", [], "any", false, false, false, 12), "html", null, true);
            echo " alert\">";
            echo twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 12);
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  71 => 12,  67 => 11,  62 => 9,  60 => 8,  50 => 6,  46 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set admin_messages = admin.messages|merge(admin.getTempMessages()) %}
{% set form_message = form.message %}
<div id=\"messages\" class=\"top-notifications-container{{ admin_messages|length or form_message ? ' default-box-shadow' : '' }}\">
    <div class=\"single-notification info alert hidden\" data-gpm-grav></div>
    {%- for message in admin_messages -%}
    <div class=\"{{ message.scope }} alert\">{{ message.message|raw }}</div>
    {%- endfor -%}
    {%- if form_message -%}
    <div class=\"error alert\">{{ form_message|raw }}</div>
    {%- endif -%}
    {%- for message in plugin_messages -%}
        <div class=\"{{ message.scope }} alert\">{{ message.message|raw }}</div>
    {%- endfor -%}
</div>
", "partials/messages.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\messages.html.twig");
    }
}

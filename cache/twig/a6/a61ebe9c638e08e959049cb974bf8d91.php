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

/* partials/notification-feed-block.html.twig */
class __TwigTemplate_ed32dc668885df488228be6948f9e5db extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "<li class=\"single-notification ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 2), "html", null, true);
            echo "-notification\"><span class=\"badge alert ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 2), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 2)), "html", null, true);
            echo "</span><a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "link", [], "any", false, false, false, 2), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["entry"], "message", [], "any", false, false, false, 2)), "html_attr");
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "message", [], "any", false, false, false, 2);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/notification-feed-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for entry in notifications %}
<li class=\"single-notification {{ entry.type }}-notification\"><span class=\"badge alert {{ entry.type }}\">{{ entry.type|capitalize }}</span><a target=\"_blank\" href=\"{{ entry.link }}\" title=\"{{ entry.message|striptags|e('html_attr') }}\">{{ entry.message|raw }}</a></li>
{% endfor %}
", "partials/notification-feed-block.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\notification-feed-block.html.twig");
    }
}

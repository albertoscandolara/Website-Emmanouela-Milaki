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

/* partials/feed-block.html.twig */
class __TwigTemplate_a6ec81fe0e1810a4072c3c86eafe08bf extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "<li><span class=\"date\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "nicetime", [], "any", false, false, false, 2), "html", null, true);
            echo "</span> <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 2), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 2)), "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 2), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/feed-block.html.twig";
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
        return new Source("{% for entry in feed %}
<li><span class=\"date\">{{ entry.nicetime }}</span> <a href=\"{{ entry.url }}\" target=\"_blank\" title=\"{{ entry.title|striptags|e('html_attr') }}\">{{ entry.title }}</a>
{% endfor %}
", "partials/feed-block.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\feed-block.html.twig");
    }
}

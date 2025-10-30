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

/* partials/metadata.html.twig */
class __TwigTemplate_d768e07d64d6eb9aed0fb32a02af2966 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            echo "    <meta ";
            if (twig_get_attribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 2)) {
                echo "name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 2));
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, false, 2)) {
                echo "http-equiv=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, false, 2));
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, false, 2)) {
                echo "charset=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, false, 2));
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, false, 2)) {
                echo "property=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, false, 2));
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 2)) {
                echo "content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 2);
                echo "\" ";
            }
            echo "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/metadata.html.twig";
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
        return new Source("{% for meta in page.metadata %}
    <meta {% if meta.name %}name=\"{{ meta.name|e }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv|e }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset|e }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property|e }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content|raw }}\" {% endif %}/>
{% endfor %}
", "partials/metadata.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\system\\templates\\partials\\metadata.html.twig");
    }
}

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

/* partials/navbar.html.twig */
class __TwigTemplate_034d279b21fb736e42ab49df9ecd2595 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navbar.html.twig", 1)->unwrap();
        // line 2
        echo "<nav class=\"navbar\">
    <ul class=\"nav-links\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 4), "visible", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "        <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 5) || twig_get_attribute($this->env, $this->source, $context["page"], "activeChild", [], "any", false, false, false, 5))) {
                echo "selected";
            }
            echo "\"
            title=\"";
            // line 6
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 6)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 6))), "html", null, true);
            echo "\">
            <button>
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 8)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 8))), "html", null, true);
            echo "</a>
            </button>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
</nav>
<div class=\"overlay\"></div>";
    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  59 => 8,  54 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}
<nav class=\"navbar\">
    <ul class=\"nav-links\">
        {% for page in pages.children.visible %}
        <li class=\"{% if page.active or page.activeChild %}selected{% endif %}\"
            title=\"{{ page.menu ?: page.title }}\">
            <button>
                <a href=\"{{ page.url }}\">{{ page.menu ?: page.title }}</a>
            </button>
        </li>
        {% endfor %}
    </ul>
</nav>
<div class=\"overlay\"></div>", "partials/navbar.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\navbar.html.twig");
    }
}

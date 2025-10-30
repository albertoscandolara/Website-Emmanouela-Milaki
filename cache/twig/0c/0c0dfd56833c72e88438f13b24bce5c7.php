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

/* partials/menu_desktop.html.twig */
class __TwigTemplate_6beeae98c5d19f5f7eead7ce7c07eb22 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/menu_desktop.html.twig", 1)->unwrap();
        // line 2
        echo "<section class=\"menu-desktop-wrapper\">
    <nav class=\"navbar\">
        <ul class=\"nav-links\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 5), "visible", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "            <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 6) || twig_get_attribute($this->env, $this->source, $context["page"], "activeChild", [], "any", false, false, false, 6))) {
                echo "selected";
            }
            echo "\"
                title=\"";
            // line 7
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 7)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 7)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 7))), "html", null, true);
            echo "\">
                <button>
                    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 9), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 9)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 9)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 9))), "html", null, true);
            echo "</a>
                </button>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </nav>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/menu_desktop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  60 => 9,  55 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}
<section class=\"menu-desktop-wrapper\">
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
</section>", "partials/menu_desktop.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\menu_desktop.html.twig");
    }
}

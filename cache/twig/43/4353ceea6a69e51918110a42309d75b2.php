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

/* partials/menu_mobile.html.twig */
class __TwigTemplate_9897a0cac3d1d7168878cb77fa98c846 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/menu_mobile.html.twig", 1)->unwrap();
        // line 2
        echo "<section class=\"menu-mobile-wrapper\">
    <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon\">
        ☰
    </label>
    <input type=\"checkbox\" id=\"mobile-menu-toggle\" class=\"mobile-menu-checkbox\">
    
    <div class=\"mobile-menu-popup\">
        <section class=\"header\">
            <section class=\"left\"></section>
            <section class=\"right\">
                <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon\">
                    &#10005;
                </label>
                <input type=\"checkbox\" id=\"mobile-menu-toggle\" class=\"mobile-menu-checkbox\">
            </section>
        </section>
        <section class=\"body\">
            ";
        // line 24
        echo "            <nav class=\"navbar\">
                <ul class=\"nav-links\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 26), "visible", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 27
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 27) || twig_get_attribute($this->env, $this->source, $context["page"], "activeChild", [], "any", false, false, false, 27))) {
                echo "selected";
            }
            echo "\"
                        title=\"";
            // line 28
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 28)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 28)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 28))), "html", null, true);
            echo "\">
                        <button>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 30)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 30)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 30))), "html", null, true);
            echo "</a>
                        </button>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </ul>
            </nav>
        </section>
        <section class=\"footer\"></section>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/menu_mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  78 => 30,  73 => 28,  66 => 27,  62 => 26,  58 => 24,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}
<section class=\"menu-mobile-wrapper\">
    <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon\">
        ☰
    </label>
    <input type=\"checkbox\" id=\"mobile-menu-toggle\" class=\"mobile-menu-checkbox\">
    
    <div class=\"mobile-menu-popup\">
        <section class=\"header\">
            <section class=\"left\"></section>
            <section class=\"right\">
                <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon\">
                    &#10005;
                </label>
                <input type=\"checkbox\" id=\"mobile-menu-toggle\" class=\"mobile-menu-checkbox\">
            </section>
        </section>
        <section class=\"body\">
            {# <div class=\"language-switcher-container\">
                {% block language_switcher %}
                    {% include 'partials/components/language-switcher.html.twig' %}
                {% endblock %}
            </div> #}
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
        </section>
        <section class=\"footer\"></section>
    </div>
</section>", "partials/menu_mobile.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\menu_mobile.html.twig");
    }
}

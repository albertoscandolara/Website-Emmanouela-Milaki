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

/* macros/macros.html.twig */
class __TwigTemplate_372baaa6f70a150097087338cd306911 extends \Twig\Template
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
    }

    // line 1
    public function macro_nav_loop($__page__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  ";
            $macros["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 3), "visible", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "    ";
                $context["active_page"] = (((twig_get_attribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 4))) ? ("active") : (""));
                // line 5
                echo "    <li>
      <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 6), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 7), "html", null, true);
                echo "
      </a>
      ";
                // line 9
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 9), "visible", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 0)) {
                    // line 10
                    echo "      <ul>
        ";
                    // line 11
                    echo twig_call_macro($macros["macros"], "macro_nav_loop", [$context["p"]], 11, $context, $this->getSourceContext());
                    echo "
      </ul>
      ";
                }
                // line 14
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  82 => 11,  79 => 10,  77 => 9,  72 => 7,  66 => 6,  63 => 5,  60 => 4,  55 => 3,  52 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page) %}
  {% import _self as macros %}
  {% for p in page.children.visible %}
    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
    <li>
      <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
        {{ p.menu }}
      </a>
      {% if p.children.visible.count > 0 %}
      <ul>
        {{ macros.nav_loop(p) }}
      </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}", "macros/macros.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\macros\\macros.html.twig");
    }
}

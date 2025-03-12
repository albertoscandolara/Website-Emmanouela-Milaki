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

/* modular/features.html.twig */
class __TwigTemplate_e69c98c8f96fa53f3aa05e19c29fc094 extends \Twig\Template
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
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 2
        $context["columns"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "class", [], "any", false, false, false, 2) == "small")) ? ("col-3 col-md-4 col-sm-6") : ("col-4 col-md-6 col-sm-12"));
        // line 3
        echo "<section class=\"section modular-features ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "class", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
        <section class=\"container ";
        // line 4
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
            <div class=\"frame-box\">

                ";
        // line 7
        echo ($context["content"] ?? null);
        echo "

                <div class=\"columns\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "features", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 11
            echo "                   <div class=\"column ";
            echo twig_escape_filter($this->env, ($context["columns"] ?? null), "html", null, true);
            echo "\">
                      ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["feature"], "url", [], "any", false, false, false, 12)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "url", [], "any", false, false, false, 12), "html", null, true);
                echo "\">";
            }
            // line 13
            echo "                      <div class=\"feature-icon\">
                         <i class=\"fa fa-fw ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "icon", [], "any", false, false, false, 14), "html", null, true);
            echo "\"></i>
                         ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["feature"], "header", [], "any", false, false, false, 15)) {
                // line 16
                echo "                            <h6>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "header", [], "any", false, false, false, 16), "html", null, true);
                echo "</h6>
                         ";
            }
            // line 18
            echo "                      </div>
                      ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["feature"], "url", [], "any", false, false, false, 19)) {
                echo "</a>";
            }
            // line 20
            echo "                      <div class=\"feature-content\">
                         ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["feature"], "text", [], "any", false, false, false, 21)) {
                // line 22
                echo "                         <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "text", [], "any", false, false, false, 22), "html", null, true);
                echo "</p>
                         ";
            }
            // line 24
            echo "                      </div>
                   </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>
            </div>
        </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  106 => 24,  100 => 22,  98 => 21,  95 => 20,  91 => 19,  88 => 18,  82 => 16,  80 => 15,  76 => 14,  73 => 13,  67 => 12,  62 => 11,  58 => 10,  52 => 7,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set columns = page.header.class == 'small' ? 'col-3 col-md-4 col-sm-6' : 'col-4 col-md-6 col-sm-12'  %}
<section class=\"section modular-features {{ page.header.class}}\">
        <section class=\"container {{ grid_size }}\">
            <div class=\"frame-box\">

                {{ content|raw }}

                <div class=\"columns\">
                {% for feature in page.header.features %}
                   <div class=\"column {{ columns }}\">
                      {% if feature.url %}<a href=\"{{feature.url}}\">{% endif %}
                      <div class=\"feature-icon\">
                         <i class=\"fa fa-fw {{ feature.icon }}\"></i>
                         {% if feature.header %}
                            <h6>{{ feature.header }}</h6>
                         {% endif %}
                      </div>
                      {% if feature.url %}</a>{% endif %}
                      <div class=\"feature-content\">
                         {% if feature.text %}
                         <p>{{ feature.text }}</p>
                         {% endif %}
                      </div>
                   </div>
                {% endfor %}
                </div>
            </div>
        </section>
</section>
", "modular/features.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\features.html.twig");
    }
}

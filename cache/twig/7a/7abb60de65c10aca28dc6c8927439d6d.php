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

/* partials/components/publication.html.twig */
class __TwigTemplate_930da5091c6ee35a13e6340a2555dfdf extends \Twig\Template
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
        echo "<section class=\"publication-wrapper\">
    <div class=\"publication\">
        <div class=\"header\">
            ";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "                <h4>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h4>
            ";
        }
        // line 7
        echo "
            ";
        // line 8
        if (($context["authors"] ?? null)) {
            // line 9
            echo "                <ul class=\"authors\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 11
                echo "                        <li class=\"author\">";
                echo twig_escape_filter($this->env, $context["author"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                </ul>
            ";
        }
        // line 15
        echo "        </div>
        <div class=\"body\">
            ";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "                <div class=\"description\">";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 20
        echo "        </div>
        <div class=\"footer\">
            ";
        // line 22
        if (($context["date"] ?? null)) {
            // line 23
            echo "                <div class=\"date\">";
            echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 25
        echo "
            ";
        // line 26
        if (($context["conference"] ?? null)) {
            // line 27
            echo "                <div class=\"conference\">";
            echo twig_escape_filter($this->env, ($context["conference"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if (($context["link"] ?? null)) {
            // line 31
            echo "                <p class=\"link\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "READ_MODE"), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 33
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/components/publication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  115 => 31,  113 => 30,  110 => 29,  104 => 27,  102 => 26,  99 => 25,  93 => 23,  91 => 22,  87 => 20,  81 => 18,  79 => 17,  75 => 15,  71 => 13,  62 => 11,  58 => 10,  55 => 9,  53 => 8,  50 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"publication-wrapper\">
    <div class=\"publication\">
        <div class=\"header\">
            {% if title %}
                <h4>{{ title }}</h4>
            {% endif %}

            {% if authors %}
                <ul class=\"authors\">
                    {% for author in authors %}
                        <li class=\"author\">{{ author }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
        <div class=\"body\">
            {% if description %}
                <div class=\"description\">{{ description }}</div>
            {% endif %}
        </div>
        <div class=\"footer\">
            {% if date %}
                <div class=\"date\">{{ date }}</div>
            {% endif %}

            {% if conference %}
                <div class=\"conference\">{{ conference }}</div>
            {% endif %}

            {% if link  %}
                <p class=\"link\"><a href=\"{{ link }}\" target=\"_blank\">{{ \"READ_MODE\"|t }}</a></p>
            {% endif %}
        </div>
    </div>
</section>", "partials/components/publication.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\components\\publication.html.twig");
    }
}

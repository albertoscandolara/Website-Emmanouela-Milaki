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

/* partials/components/initiative.html.twig */
class __TwigTemplate_ec3ebe4323587bbc960e31ac1ade48f2 extends \Twig\Template
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
        echo "<section class=\"initiative-wrapper\">
    <div class=\"initiative\">
        <div class=\"header\">
            ";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "                <h2>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h2>
            ";
        }
        // line 7
        echo "
            ";
        // line 8
        if (($context["subtitle"] ?? null)) {
            // line 9
            echo "                <div class=\"subtitle-container\">
                    <h4>";
            // line 10
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
            echo "</h4>
                </div>
            ";
        }
        // line 13
        echo "        </div>
        <div class=\"body\">
            ";
        // line 15
        if (($context["image"] ?? null)) {
            // line 16
            echo "                <div class=\"image-container\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" class=\"image\"></img>
                </div>
            ";
        }
        // line 20
        echo "            
            ";
        // line 21
        if (($context["description"] ?? null)) {
            // line 22
            echo "                <div class=\"description\">";
            echo ($context["description"] ?? null);
            echo "</div>
            ";
        }
        // line 24
        echo "        </div>
        <div class=\"footer\">
            ";
        // line 26
        if (($context["date"] ?? null)) {
            // line 27
            echo "                <p>";
            echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
            echo "</p>
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if (($context["link_url"] ?? null)) {
            // line 31
            echo "                <p class=\"link\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["link_url"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, ($context["link_text"] ?? null), "html", null, true);
            echo "</a></p>
            ";
        } else {
            // line 33
            echo "                <p class=\"link\">&nbsp;</p>  ";
            // line 34
            echo "            ";
        }
        // line 35
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/components/initiative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  117 => 34,  115 => 33,  107 => 31,  105 => 30,  102 => 29,  96 => 27,  94 => 26,  90 => 24,  84 => 22,  82 => 21,  79 => 20,  73 => 17,  70 => 16,  68 => 15,  64 => 13,  58 => 10,  55 => 9,  53 => 8,  50 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"initiative-wrapper\">
    <div class=\"initiative\">
        <div class=\"header\">
            {% if title %}
                <h2>{{ title }}</h2>
            {% endif %}

            {% if subtitle %}
                <div class=\"subtitle-container\">
                    <h4>{{ subtitle }}</h4>
                </div>
            {% endif %}
        </div>
        <div class=\"body\">
            {% if image %}
                <div class=\"image-container\">
                    <img src=\"{{ image }}\" class=\"image\"></img>
                </div>
            {% endif %}
            
            {% if description %}
                <div class=\"description\">{{ description|raw }}</div>
            {% endif %}
        </div>
        <div class=\"footer\">
            {% if date %}
                <p>{{ date }}</p>
            {% endif %}

            {% if link_url  %}
                <p class=\"link\"><a href=\"{{ link_url }}\" target=\"_blank\">{{ link_text }}</a></p>
            {% else %}
                <p class=\"link\">&nbsp;</p>  {# Non-breaking space as a placeholder #}
            {% endif %}
        </div>
    </div>
</section>", "partials/components/initiative.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\components\\initiative.html.twig");
    }
}

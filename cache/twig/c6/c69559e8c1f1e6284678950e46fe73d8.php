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

/* partials/components/service.html.twig */
class __TwigTemplate_bee2fa7ce3caa3eadb565523893b38eb extends \Twig\Template
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
        echo "<section class=\"service-wrapper\">
    ";
        // line 2
        if (($context["icon"] ?? null)) {
            // line 3
            echo "        <div class=\"icon-container\">
            <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\" class=\"icon\"></img>
        </div>
    ";
        }
        // line 7
        echo "    <div class=\"service\">
        <div class=\"header\">
            <div class=\"header-top\">
                ";
        // line 10
        if (($context["title"] ?? null)) {
            // line 11
            echo "                    <div class=\"title-container\">
                        <h2>";
            // line 12
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h2>
                    </div>
                ";
        }
        // line 15
        echo "            </div>
        </div>
        <div class=\"body\">
            ";
        // line 18
        if (($context["image"] ?? null)) {
            // line 19
            echo "                <div class=\"image-container\">
                    <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" class=\"image\"></img>
                </div>
            ";
        }
        // line 23
        echo "        </div>
        <div class=\"footer\">
            ";
        // line 25
        if (($context["description"] ?? null)) {
            // line 26
            echo "                <div class=\"description\">";
            echo ($context["description"] ?? null);
            echo "</div>
            ";
        }
        // line 28
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/components/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  89 => 26,  87 => 25,  83 => 23,  77 => 20,  74 => 19,  72 => 18,  67 => 15,  61 => 12,  58 => 11,  56 => 10,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"service-wrapper\">
    {% if icon %}
        <div class=\"icon-container\">
            <img src=\"{{ icon }}\" class=\"icon\"></img>
        </div>
    {% endif %}
    <div class=\"service\">
        <div class=\"header\">
            <div class=\"header-top\">
                {% if title %}
                    <div class=\"title-container\">
                        <h2>{{ title }}</h2>
                    </div>
                {% endif %}
            </div>
        </div>
        <div class=\"body\">
            {% if image %}
                <div class=\"image-container\">
                    <img src=\"{{ image }}\" class=\"image\"></img>
                </div>
            {% endif %}
        </div>
        <div class=\"footer\">
            {% if description %}
                <div class=\"description\">{{ description|raw }}</div>
            {% endif %}
        </div>
    </div>
</section>", "partials/components/service.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\components\\service.html.twig");
    }
}

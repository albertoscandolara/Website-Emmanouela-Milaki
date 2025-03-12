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
    <div class=\"service\">
        <div class=\"header\">
            <div class=\"header-top\">
                ";
        // line 5
        if (($context["icon"] ?? null)) {
            // line 6
            echo "                    <div class=\"icon-container\">
                        <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\" class=\"icon\"></img>
                    </div>
                ";
        }
        // line 10
        echo "                ";
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
            ";
        // line 16
        if (($context["short_description"] ?? null)) {
            // line 17
            echo "                <div class=\"short-description\">";
            echo ($context["short_description"] ?? null);
            echo "</div>
            ";
        }
        // line 19
        echo "        </div>
        <div class=\"body\">
            ";
        // line 21
        if (($context["target"] ?? null)) {
            // line 22
            echo "                <div class=\"body-block target-container\">
                    <span class=\"label\">Intended For:</span>
                    <span>";
            // line 24
            echo ($context["target"] ?? null);
            echo "</span>
                </div>
            ";
        }
        // line 27
        echo "            ";
        if (($context["method"] ?? null)) {
            // line 28
            echo "                <div class=\"body-block method-container\">
                    <span class=\"label\">Approach Used:</span>
                    <span>";
            // line 30
            echo ($context["method"] ?? null);
            echo "</span>
                </div>
            ";
        }
        // line 33
        echo "            ";
        if (($context["outcomes"] ?? null)) {
            // line 34
            echo "                <div class=\"body-block outcomes-container\">
                    <span class=\"label\">What You Gain:</span>
                    <span>";
            // line 36
            echo ($context["outcomes"] ?? null);
            echo "</span>
                </div>
            ";
        }
        // line 39
        echo "        </div>
        <div class=\"footer\">
            ";
        // line 41
        if (($context["description"] ?? null)) {
            // line 42
            echo "                <div class=\"description\">";
            echo ($context["description"] ?? null);
            echo "</div>
            ";
        }
        // line 44
        echo "            ";
        if (($context["image"] ?? null)) {
            // line 45
            echo "                <div class=\"image-container\">
                    <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" class=\"image\"></img>
                </div>
            ";
        }
        // line 49
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
        return array (  143 => 49,  137 => 46,  134 => 45,  131 => 44,  125 => 42,  123 => 41,  119 => 39,  113 => 36,  109 => 34,  106 => 33,  100 => 30,  96 => 28,  93 => 27,  87 => 24,  83 => 22,  81 => 21,  77 => 19,  71 => 17,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"service-wrapper\">
    <div class=\"service\">
        <div class=\"header\">
            <div class=\"header-top\">
                {% if icon %}
                    <div class=\"icon-container\">
                        <img src=\"{{ icon }}\" class=\"icon\"></img>
                    </div>
                {% endif %}
                {% if title %}
                    <div class=\"title-container\">
                        <h2>{{ title }}</h2>
                    </div>
                {% endif %}
            </div>
            {% if short_description %}
                <div class=\"short-description\">{{ short_description|raw }}</div>
            {% endif %}
        </div>
        <div class=\"body\">
            {% if target %}
                <div class=\"body-block target-container\">
                    <span class=\"label\">Intended For:</span>
                    <span>{{ target|raw }}</span>
                </div>
            {% endif %}
            {% if method %}
                <div class=\"body-block method-container\">
                    <span class=\"label\">Approach Used:</span>
                    <span>{{ method|raw }}</span>
                </div>
            {% endif %}
            {% if outcomes %}
                <div class=\"body-block outcomes-container\">
                    <span class=\"label\">What You Gain:</span>
                    <span>{{ outcomes|raw }}</span>
                </div>
            {% endif %}
        </div>
        <div class=\"footer\">
            {% if description %}
                <div class=\"description\">{{ description|raw }}</div>
            {% endif %}
            {% if image %}
                <div class=\"image-container\">
                    <img src=\"{{ image }}\" class=\"image\"></img>
                </div>
            {% endif %}
        </div>
    </div>
</section>", "partials/components/service.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\components\\service.html.twig");
    }
}

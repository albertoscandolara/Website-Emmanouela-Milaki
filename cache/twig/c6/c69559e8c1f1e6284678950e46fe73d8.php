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
        if (($context["image"] ?? null)) {
            // line 22
            echo "                <div class=\"image-container\">
                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" class=\"image\"></img>
                </div>
            ";
        }
        // line 26
        echo "            ";
        if (($context["target"] ?? null)) {
            // line 27
            echo "                <div class=\"body-block target-container\">
                    <span class=\"label\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "INTENDED_FOR"), "html", null, true);
            echo ":</span>
                    <span>";
            // line 29
            echo ($context["target"] ?? null);
            echo "</span>
                </div>
            ";
        }
        // line 32
        echo "            ";
        if (($context["method"] ?? null)) {
            // line 33
            echo "                <div class=\"body-block method-container\">
                    <span class=\"label\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "APPROACH_USED"), "html", null, true);
            echo ":</span>
                    <span>";
            // line 35
            echo ($context["method"] ?? null);
            echo "</span>
                </div>
            ";
        }
        // line 38
        echo "            ";
        if (($context["outcomes"] ?? null)) {
            // line 39
            echo "                <div class=\"body-block outcomes-container\">
                    <span class=\"label\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "WHAT_YOU_GAIN"), "html", null, true);
            echo ":</span>
                    <span>";
            // line 41
            echo ($context["outcomes"] ?? null);
            echo "</span>
                </div>
            ";
        }
        // line 44
        echo "        </div>
        <div class=\"footer\">
            ";
        // line 46
        if (($context["description"] ?? null)) {
            // line 47
            echo "                <div class=\"description\">";
            echo ($context["description"] ?? null);
            echo "</div>
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
        return array (  153 => 49,  147 => 47,  145 => 46,  141 => 44,  135 => 41,  131 => 40,  128 => 39,  125 => 38,  119 => 35,  115 => 34,  112 => 33,  109 => 32,  103 => 29,  99 => 28,  96 => 27,  93 => 26,  87 => 23,  84 => 22,  82 => 21,  78 => 19,  72 => 17,  70 => 16,  67 => 15,  61 => 12,  58 => 11,  56 => 10,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
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
            {% if short_description %}
                <div class=\"short-description\">{{ short_description|raw }}</div>
            {% endif %}
        </div>
        <div class=\"body\">
            {% if image %}
                <div class=\"image-container\">
                    <img src=\"{{ image }}\" class=\"image\"></img>
                </div>
            {% endif %}
            {% if target %}
                <div class=\"body-block target-container\">
                    <span class=\"label\">{{ \"INTENDED_FOR\"|t }}:</span>
                    <span>{{ target|raw }}</span>
                </div>
            {% endif %}
            {% if method %}
                <div class=\"body-block method-container\">
                    <span class=\"label\">{{ \"APPROACH_USED\"|t }}:</span>
                    <span>{{ method|raw }}</span>
                </div>
            {% endif %}
            {% if outcomes %}
                <div class=\"body-block outcomes-container\">
                    <span class=\"label\">{{ \"WHAT_YOU_GAIN\"|t }}:</span>
                    <span>{{ outcomes|raw }}</span>
                </div>
            {% endif %}
        </div>
        <div class=\"footer\">
            {% if description %}
                <div class=\"description\">{{ description|raw }}</div>
            {% endif %}
        </div>
    </div>
</section>", "partials/components/service.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\components\\service.html.twig");
    }
}

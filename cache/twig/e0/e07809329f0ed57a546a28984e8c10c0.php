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

/* partials/components/blockquote.html.twig */
class __TwigTemplate_f830b66595f611e419cfb6b4ad4c48e8 extends \Twig\Template
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
        echo "<section class=\"blockquote-wrapper\">
    <div class=\"blockquote\">
        <div class=\"left\"></div>
        <div class=\"right\">
            <div class=\"quote-symbol\">
                &#10077;
            </div>
            <div class=\"quote-container\">
                <div class=\"upper-container\">
                    ";
        // line 10
        if (($context["quote"] ?? null)) {
            // line 11
            echo "                        <blockquote class=\"quote\" cite=\"";
            echo ($context["quote"] ?? null);
            echo "\">
                            ";
            // line 12
            echo ($context["quote"] ?? null);
            echo "
                        </blockquote>
                    ";
        }
        // line 15
        echo "                </div>
                <div class=\"lower-container\">
                    ";
        // line 17
        if (($context["author"] ?? null)) {
            // line 18
            echo "                        <div class=\"author\"><cite>";
            echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
            echo "</cite></div>
                    ";
        }
        // line 20
        echo "                    ";
        if (($context["source"] ?? null)) {
            // line 21
            echo "                        <div class=\"source\"><span>";
            echo twig_escape_filter($this->env, ($context["source"] ?? null), "html", null, true);
            echo "</span></div>
                    ";
        }
        // line 23
        echo "                </div>
            </div>
        </div>
        ";
        // line 31
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/components/blockquote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  82 => 23,  76 => 21,  73 => 20,  67 => 18,  65 => 17,  61 => 15,  55 => 12,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"blockquote-wrapper\">
    <div class=\"blockquote\">
        <div class=\"left\"></div>
        <div class=\"right\">
            <div class=\"quote-symbol\">
                &#10077;
            </div>
            <div class=\"quote-container\">
                <div class=\"upper-container\">
                    {% if quote %}
                        <blockquote class=\"quote\" cite=\"{{ quote|raw }}\">
                            {{ quote|raw }}
                        </blockquote>
                    {% endif %}
                </div>
                <div class=\"lower-container\">
                    {% if author %}
                        <div class=\"author\"><cite>{{ author }}</cite></div>
                    {% endif %}
                    {% if source %}
                        <div class=\"source\"><span>{{ source }}</span></div>
                    {% endif %}
                </div>
            </div>
        </div>
        {# {% if image %}
            <div class=\"author-pic-container\">
                <img src=\"{{ image.url }}\" alt=\"{{ author|e }}\">
            </div>
        {% endif %} #}
    </div>
</section>", "partials/components/blockquote.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\components\\blockquote.html.twig");
    }
}

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

/* partials/blockquote.html.twig */
class __TwigTemplate_4ca2a6914e94bb1af3711a35cabc3470 extends \Twig\Template
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
        // line 26
        if (($context["image"] ?? null)) {
            // line 27
            echo "            <div class=\"author-pic-container\">
                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, false, 28), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, ($context["author"] ?? null));
            echo "\">
            </div>
        ";
        }
        // line 31
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/blockquote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  92 => 28,  89 => 27,  87 => 26,  82 => 23,  76 => 21,  73 => 20,  67 => 18,  65 => 17,  61 => 15,  55 => 12,  50 => 11,  48 => 10,  37 => 1,);
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
        {% if image %}
            <div class=\"author-pic-container\">
                <img src=\"{{ image.url }}\" alt=\"{{ author|e }}\">
            </div>
        {% endif %}
    </div>
</section>", "partials/blockquote.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\blockquote.html.twig");
    }
}

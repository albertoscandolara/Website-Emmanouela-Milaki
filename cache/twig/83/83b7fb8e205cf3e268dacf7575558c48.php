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

/* modular/home/intro.html.twig */
class __TwigTemplate_eaa8c9783fa54afd0a76cd6d57ec41a8 extends \Twig\Template
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
        echo "<article class=\"intro-wrapper\">
    <div class=\"intro\">
        <section class=\"body\">
            <section class=\"left\">
                ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 5), "item_paragraph", [], "any", false, false, false, 5)) {
            // line 6
            echo "                    <div class=\"paragraph-container\">
                        <p class=\"paragraph\">";
            // line 7
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 7), "item_paragraph", [], "any", false, false, false, 7);
            echo "</p>
                    </div>
                ";
        }
        // line 10
        echo "            </section>
        </section>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "modular/home/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"intro-wrapper\">
    <div class=\"intro\">
        <section class=\"body\">
            <section class=\"left\">
                {% if module.header.item_paragraph %}
                    <div class=\"paragraph-container\">
                        <p class=\"paragraph\">{{ module.header.item_paragraph|raw }}</p>
                    </div>
                {% endif %}
            </section>
        </section>
    </div>
</article>
", "modular/home/intro.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\modular\\home\\intro.html.twig");
    }
}

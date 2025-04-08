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
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 3), "item_title", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <h2 class=\"title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 4), "item_title", [], "any", false, false, false, 4), "html", null, true);
            echo "</h2>
        ";
        }
        // line 6
        echo "        <section class=\"body\">
            <section class=\"left\">
                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 8), "item_paragraph", [], "any", false, false, false, 8)) {
            // line 9
            echo "                    <div class=\"paragraph-container\">
                        <p class=\"paragraph\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 10), "item_paragraph", [], "any", false, false, false, 10);
            echo "</p>
                    </div>
                ";
        }
        // line 13
        echo "            </section>
            ";
        // line 26
        echo "        </section>
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
        return array (  67 => 26,  64 => 13,  58 => 10,  55 => 9,  53 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"intro-wrapper\">
    <div class=\"intro\">
        {% if module.header.item_title %}
            <h2 class=\"title\">{{ module.header.item_title }}</h2>
        {% endif %}
        <section class=\"body\">
            <section class=\"left\">
                {% if module.header.item_paragraph %}
                    <div class=\"paragraph-container\">
                        <p class=\"paragraph\">{{ module.header.item_paragraph|raw }}</p>
                    </div>
                {% endif %}
            </section>
            {# <section class=\"right\">
                {% if module.header.item_image %}
                    {% set localImage = module.media[module.header.item_image] %}
                    {% if localImage %}
                        {% set imageUrl = localImage.url %}
                    {% else %}
                        {% set imageUrl = theme_url ~ '/images/' ~ module.header.item_image %}
                    {% endif %}
                        <img class=\"image\" src=\"{{ imageUrl }}\" alt=\"{{ module.header.item_title }}\">
                        </img>
                {% endif %}
            </section> #}
        </section>
    </div>
</article>
", "modular/home/intro.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\home\\intro.html.twig");
    }
}

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

/* modular/home/template-2.html.twig */
class __TwigTemplate_4e1a516177e28fd4e766f9e7a4aa58cb extends \Twig\Template
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
        echo "<article class=\"template-2-wrapper ";
        echo twig_escape_filter($this->env, ($context["odd_even_class"] ?? null), "html", null, true);
        echo "\">
    <div class=\"template-2\">
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
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 6), "item_image", [], "any", false, false, false, 6)) {
            // line 7
            echo "            ";
            $context["localImage"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 7), "item_image", [], "any", false, false, false, 7)] ?? null) : null);
            // line 8
            echo "            ";
            if (($context["localImage"] ?? null)) {
                // line 9
                echo "                ";
                $context["imageUrl"] = twig_get_attribute($this->env, $this->source, ($context["localImage"] ?? null), "url", [], "any", false, false, false, 9);
                // line 10
                echo "            ";
            } else {
                // line 11
                echo "                ";
                $context["imageUrl"] = ((($context["theme_url"] ?? null) . "/images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 11), "item_image", [], "any", false, false, false, 11));
                // line 12
                echo "            ";
            }
            // line 13
            echo "                <img class=\"image\" src=\"";
            echo twig_escape_filter($this->env, ($context["imageUrl"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 13), "item_title", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                </img>
        ";
        }
        // line 16
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 16), "blockquote_quote", [], "any", false, false, false, 16)) {
            // line 17
            echo "            <div class=\"blockquote-container\">
                ";
            // line 18
            $context["image"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 18)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 18), "blockquote_image", [], "any", false, false, false, 18)] ?? null) : null);
            // line 19
            echo "                ";
            $this->loadTemplate("partials/components/blockquote.html.twig", "modular/home/template-2.html.twig", 19)->display(twig_array_merge($context, ["author" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["module"] ?? null), "header", [], "any", false, false, false, 20), "blockquote_author", [], "any", false, false, false, 20), "image" =>             // line 21
($context["image"] ?? null), "quote" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["module"] ?? null), "header", [], "any", false, false, false, 22), "blockquote_quote", [], "any", false, false, false, 22), "source" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
($context["module"] ?? null), "header", [], "any", false, false, false, 23), "blockquote_source", [], "any", false, false, false, 23)]));
            // line 25
            echo "            </div>
        ";
        }
        // line 27
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 27), "item_paragraph", [], "any", false, false, false, 27)) {
            // line 28
            echo "            <div class=\"paragraph-container\">
                <p class=\"paragraph\">";
            // line 29
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 29), "item_paragraph", [], "any", false, false, false, 29);
            echo "</p>
            </div>
        ";
        }
        // line 32
        echo "    </div>
</article>

";
    }

    public function getTemplateName()
    {
        return "modular/home/template-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  106 => 29,  103 => 28,  100 => 27,  96 => 25,  94 => 23,  93 => 22,  92 => 21,  91 => 20,  89 => 19,  87 => 18,  84 => 17,  81 => 16,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"template-2-wrapper {{ odd_even_class }}\">
    <div class=\"template-2\">
        {% if module.header.item_title %}
            <h2 class=\"title\">{{ module.header.item_title }}</h2>
        {% endif %}
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
        {% if module.header.blockquote_quote %}
            <div class=\"blockquote-container\">
                {% set image = module.media[module.header.blockquote_image] %}
                {% include 'partials/components/blockquote.html.twig' with {
                    author: module.header.blockquote_author,
                    image: image,
                    quote: module.header.blockquote_quote,
                    source: module.header.blockquote_source,
                } %}
            </div>
        {% endif %}
        {% if module.header.item_paragraph %}
            <div class=\"paragraph-container\">
                <p class=\"paragraph\">{{ module.header.item_paragraph|raw }}</p>
            </div>
        {% endif %}
    </div>
</article>

", "modular/home/template-2.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\home\\template-2.html.twig");
    }
}

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

/* modular/home/template-1.html.twig */
class __TwigTemplate_beb665343746c2a4f771c6bef99a0f57 extends \Twig\Template
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
        echo "<article class=\"template-1-wrapper\">
    <div class=\"template-1\">
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 8), "blockquote_quote", [], "any", false, false, false, 8)) {
            // line 9
            echo "                    <div class=\"blockquote-container\">
                        ";
            // line 10
            $context["image"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 10), "blockquote_image", [], "any", false, false, false, 10)] ?? null) : null);
            // line 11
            echo "                        ";
            $this->loadTemplate("partials/components/blockquote.html.twig", "modular/home/template-1.html.twig", 11)->display(twig_array_merge($context, ["author" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["module"] ?? null), "header", [], "any", false, false, false, 12), "blockquote_author", [], "any", false, false, false, 12), "image" =>             // line 13
($context["image"] ?? null), "quote" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
($context["module"] ?? null), "header", [], "any", false, false, false, 14), "blockquote_quote", [], "any", false, false, false, 14), "source" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
($context["module"] ?? null), "header", [], "any", false, false, false, 15), "blockquote_source", [], "any", false, false, false, 15)]));
            // line 17
            echo "                    </div>
                ";
        }
        // line 19
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 19), "item_paragraph", [], "any", false, false, false, 19)) {
            // line 20
            echo "                    <div class=\"paragraph-container\">
                        <p class=\"paragraph\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 21), "item_paragraph", [], "any", false, false, false, 21);
            echo "</p>
                    </div>
                ";
        }
        // line 24
        echo "            </section>
            <section class=\"right\">
                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 26), "item_image", [], "any", false, false, false, 26)) {
            // line 27
            echo "                    ";
            $context["localImage"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 27)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 27), "item_image", [], "any", false, false, false, 27)] ?? null) : null);
            // line 28
            echo "                    ";
            if (($context["localImage"] ?? null)) {
                // line 29
                echo "                        ";
                $context["imageUrl"] = twig_get_attribute($this->env, $this->source, ($context["localImage"] ?? null), "url", [], "any", false, false, false, 29);
                // line 30
                echo "                    ";
            } else {
                // line 31
                echo "                        ";
                $context["imageUrl"] = ((($context["theme_url"] ?? null) . "/images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 31), "item_image", [], "any", false, false, false, 31));
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                        <img class=\"image\" src=\"";
            echo twig_escape_filter($this->env, ($context["imageUrl"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 33), "item_title", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                        </img>
                ";
        }
        // line 36
        echo "            </section>
        </section>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "modular/home/template-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  87 => 26,  83 => 24,  77 => 21,  74 => 20,  71 => 19,  67 => 17,  65 => 15,  64 => 14,  63 => 13,  62 => 12,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"template-1-wrapper\">
    <div class=\"template-1\">
        {% if module.header.item_title %}
            <h2 class=\"title\">{{ module.header.item_title }}</h2>
        {% endif %}
        <section class=\"body\">
            <section class=\"left\">
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
            </section>
            <section class=\"right\">
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
            </section>
        </section>
    </div>
</article>
", "modular/home/template-1.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\home\\template-1.html.twig");
    }
}

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

/* modular/home/item.html.twig */
class __TwigTemplate_65671ac40237514543785fbdae7942ac extends \Twig\Template
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
        echo "<article class=\"module-content\">
    <div class=\"content-wrapper\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 3), "item_title", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 4), "item_title", [], "any", false, false, false, 4), "html", null, true);
            echo "</h2>
        ";
        }
        // line 6
        echo "
        <div class=\"text-image-container\">
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 8), "item_image", [], "any", false, false, false, 8)) {
            // line 9
            echo "                <div class=\"image-container\">
                    ";
            // line 10
            $context["localImage"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 10), "item_image", [], "any", false, false, false, 10)] ?? null) : null);
            // line 11
            echo "                    ";
            if (($context["localImage"] ?? null)) {
                // line 12
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["localImage"] ?? null), "url", [], "any", false, false, false, 12), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 12), "item_title", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 14
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
                echo "/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 14), "item_image", [], "any", false, false, false, 14), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 14), "item_title", [], "any", false, false, false, 14), "html", null, true);
                echo "\">
                    ";
            }
            // line 16
            echo "                </div>
            ";
        }
        // line 18
        echo "
            <div class=\"text-container\">
                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 20), "blockquote_quote", [], "any", false, false, false, 20)) {
            // line 21
            echo "                    ";
            $context["image"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 21)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 21), "blockquote_image", [], "any", false, false, false, 21)] ?? null) : null);
            // line 22
            echo "                    ";
            $this->loadTemplate("partials/blockquote.html.twig", "modular/home/item.html.twig", 22)->display(twig_array_merge($context, ["author" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
($context["module"] ?? null), "header", [], "any", false, false, false, 23), "blockquote_author", [], "any", false, false, false, 23), "image" =>             // line 24
($context["image"] ?? null), "quote" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
($context["module"] ?? null), "header", [], "any", false, false, false, 25), "blockquote_quote", [], "any", false, false, false, 25), "source" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
($context["module"] ?? null), "header", [], "any", false, false, false, 26), "blockquote_source", [], "any", false, false, false, 26)]));
            // line 28
            echo "                ";
        }
        // line 29
        echo "
                ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 30), "item_paragraph", [], "any", false, false, false, 30)) {
            // line 31
            echo "                    <p>";
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 31), "item_paragraph", [], "any", false, false, false, 31), "html", null, true));
            echo "</p>
                ";
        }
        // line 33
        echo "            </div>
        </div>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "modular/home/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  109 => 31,  107 => 30,  104 => 29,  101 => 28,  99 => 26,  98 => 25,  97 => 24,  96 => 23,  94 => 22,  91 => 21,  89 => 20,  85 => 18,  81 => 16,  71 => 14,  63 => 12,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"module-content\">
    <div class=\"content-wrapper\">
        {% if module.header.item_title %}
            <h2>{{ module.header.item_title }}</h2>
        {% endif %}

        <div class=\"text-image-container\">
            {% if module.header.item_image %}
                <div class=\"image-container\">
                    {% set localImage = module.media[module.header.item_image] %}
                    {% if localImage %}
                        <img src=\"{{ localImage.url }}\" alt=\"{{ module.header.item_title }}\">
                    {% else %}
                        <img src=\"{{ theme_url }}/images/{{ module.header.item_image }}\" alt=\"{{ module.header.item_title }}\">
                    {% endif %}
                </div>
            {% endif %}

            <div class=\"text-container\">
                {% if module.header.blockquote_quote %}
                    {% set image = module.media[module.header.blockquote_image] %}
                    {% include 'partials/blockquote.html.twig' with {
                        author: module.header.blockquote_author,
                        image: image,
                        quote: module.header.blockquote_quote,
                        source: module.header.blockquote_source,
                    } %}
                {% endif %}

                {% if module.header.item_paragraph %}
                    <p>{{ module.header.item_paragraph|nl2br }}</p>
                {% endif %}
            </div>
        </div>
    </div>
</article>
", "modular/home/item.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\home\\item.html.twig");
    }
}

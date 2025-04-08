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

/* modular/biography/motto.html.twig */
class __TwigTemplate_b6f20e113a8a59598a3fd88e38db7b38 extends \Twig\Template
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
        echo "<article class=\"motto-wrapper\">
    <div class=\"motto\">
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
            ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 7), "blockquote_quote", [], "any", false, false, false, 7)) {
            // line 8
            echo "                <div class=\"blockquote-container\">
                    ";
            // line 9
            $context["image"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 9)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 9), "blockquote_image", [], "any", false, false, false, 9)] ?? null) : null);
            // line 10
            echo "                    ";
            $this->loadTemplate("partials/components/blockquote.html.twig", "modular/biography/motto.html.twig", 10)->display(twig_array_merge($context, ["author" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
($context["module"] ?? null), "header", [], "any", false, false, false, 11), "blockquote_author", [], "any", false, false, false, 11), "image" =>             // line 12
($context["image"] ?? null), "quote" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["module"] ?? null), "header", [], "any", false, false, false, 13), "blockquote_quote", [], "any", false, false, false, 13), "source" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
($context["module"] ?? null), "header", [], "any", false, false, false, 14), "blockquote_source", [], "any", false, false, false, 14)]));
            // line 16
            echo "                </div>
            ";
        }
        // line 18
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 18), "item_image", [], "any", false, false, false, 18)) {
            // line 19
            echo "                ";
            $context["localImage"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 19)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 19), "item_image", [], "any", false, false, false, 19)] ?? null) : null);
            // line 20
            echo "                ";
            if (($context["localImage"] ?? null)) {
                // line 21
                echo "                    ";
                $context["imageUrl"] = twig_get_attribute($this->env, $this->source, ($context["localImage"] ?? null), "url", [], "any", false, false, false, 21);
                // line 22
                echo "                ";
            } else {
                // line 23
                echo "                    ";
                $context["imageUrl"] = ((($context["theme_url"] ?? null) . "/images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 23), "item_image", [], "any", false, false, false, 23));
                // line 24
                echo "                ";
            }
            // line 25
            echo "                    <img class=\"image\" src=\"";
            echo twig_escape_filter($this->env, ($context["imageUrl"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 25), "item_title", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                    </img>
            ";
        }
        // line 28
        echo "        </section>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "modular/biography/motto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  91 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  66 => 16,  64 => 14,  63 => 13,  62 => 12,  61 => 11,  59 => 10,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"motto-wrapper\">
    <div class=\"motto\">
        {% if module.header.item_title %}
            <h2 class=\"title\">{{ module.header.item_title }}</h2>
        {% endif %}
        <section class=\"body\">
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
    </div>
</article>
", "modular/biography/motto.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\biography\\motto.html.twig");
    }
}

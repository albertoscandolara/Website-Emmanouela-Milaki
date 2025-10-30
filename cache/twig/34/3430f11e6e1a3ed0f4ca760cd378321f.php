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
        <section class=\"body\">
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 4), "blockquote_quote", [], "any", false, false, false, 4)) {
            // line 5
            echo "                <div class=\"blockquote-container\">
                    ";
            // line 6
            $context["image"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 6), "blockquote_image", [], "any", false, false, false, 6)] ?? null) : null);
            // line 7
            echo "                    ";
            $this->loadTemplate("partials/components/blockquote.html.twig", "modular/biography/motto.html.twig", 7)->display(twig_array_merge($context, ["author" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
($context["module"] ?? null), "header", [], "any", false, false, false, 8), "blockquote_author", [], "any", false, false, false, 8), "image" =>             // line 9
($context["image"] ?? null), "quote" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 10
($context["module"] ?? null), "header", [], "any", false, false, false, 10), "blockquote_quote", [], "any", false, false, false, 10), "source" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
($context["module"] ?? null), "header", [], "any", false, false, false, 11), "blockquote_source", [], "any", false, false, false, 11)]));
            // line 13
            echo "                </div>
            ";
        }
        // line 15
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 15), "item_image", [], "any", false, false, false, 15)) {
            // line 16
            echo "                ";
            $context["localImage"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 16)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 16), "item_image", [], "any", false, false, false, 16)] ?? null) : null);
            // line 17
            echo "                ";
            if (($context["localImage"] ?? null)) {
                // line 18
                echo "                    ";
                $context["imageUrl"] = twig_get_attribute($this->env, $this->source, ($context["localImage"] ?? null), "url", [], "any", false, false, false, 18);
                // line 19
                echo "                ";
            } else {
                // line 20
                echo "                    ";
                $context["imageUrl"] = ((($context["theme_url"] ?? null) . "/images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 20), "item_image", [], "any", false, false, false, 20));
                // line 21
                echo "                ";
            }
            // line 22
            echo "                    <img class=\"image\" src=\"";
            echo twig_escape_filter($this->env, ($context["imageUrl"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 22), "item_title", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                    </img>
            ";
        }
        // line 25
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
        return array (  90 => 25,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  56 => 13,  54 => 11,  53 => 10,  52 => 9,  51 => 8,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"motto-wrapper\">
    <div class=\"motto\">
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
", "modular/biography/motto.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\modular\\biography\\motto.html.twig");
    }
}

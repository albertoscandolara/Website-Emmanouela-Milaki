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

/* modular/news/news.html.twig */
class __TwigTemplate_873825a54825933e55a21a292be6eefe extends \Twig\Template
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
        echo "<article class=\"news-wrapper\">
    <div class=\"news\">
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
            <ul class=\"news-list\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 8), "initiatives", [], "any", false, false, false, 8));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["initiative"]) {
            // line 9
            echo "                <li class=\"news-item\">
                    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["initiative"], "image", [], "any", false, false, false, 10)) {
                // line 11
                echo "                        ";
                $context["localImage"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["initiative"], "image", [], "any", false, false, false, 11)] ?? null) : null);
                // line 12
                echo "                        ";
                if (($context["localImage"] ?? null)) {
                    // line 13
                    echo "                            ";
                    $context["imageUrl"] = twig_get_attribute($this->env, $this->source, ($context["localImage"] ?? null), "url", [], "any", false, false, false, 13);
                    // line 14
                    echo "                        ";
                } else {
                    // line 15
                    echo "                            ";
                    $context["imageUrl"] = ((($context["theme_url"] ?? null) . "/images/") . twig_get_attribute($this->env, $this->source, $context["initiative"], "image", [], "any", false, false, false, 15));
                    // line 16
                    echo "                        ";
                }
                // line 17
                echo "                    ";
            }
            // line 18
            echo "                    ";
            $this->loadTemplate("partials/components/initiative.html.twig", "modular/news/news.html.twig", 18)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source,             // line 19
$context["initiative"], "title", [], "any", false, false, false, 19), "subtitle" => twig_get_attribute($this->env, $this->source,             // line 20
$context["initiative"], "subtitle", [], "any", false, false, false, 20), "date" => twig_get_attribute($this->env, $this->source,             // line 21
$context["initiative"], "date", [], "any", false, false, false, 21), "description" => twig_get_attribute($this->env, $this->source,             // line 22
$context["initiative"], "description", [], "any", false, false, false, 22), "image" =>             // line 23
($context["imageUrl"] ?? null), "link_url" => twig_get_attribute($this->env, $this->source,             // line 24
$context["initiative"], "link_url", [], "any", false, false, false, 24), "link_text" => twig_get_attribute($this->env, $this->source,             // line 25
$context["initiative"], "link_text", [], "any", false, false, false, 25)]));
            // line 27
            echo "                </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['initiative'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
        </section>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "modular/news/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  106 => 27,  104 => 25,  103 => 24,  102 => 23,  101 => 22,  100 => 21,  99 => 20,  98 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  73 => 10,  70 => 9,  53 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"news-wrapper\">
    <div class=\"news\">
        {% if module.header.item_title %}
            <h2 class=\"title\">{{ module.header.item_title }}</h2>
        {% endif %}
        <section class=\"body\">
            <ul class=\"news-list\">
                {% for initiative in module.header.initiatives %}
                <li class=\"news-item\">
                    {% if initiative.image %}
                        {% set localImage = module.media[initiative.image] %}
                        {% if localImage %}
                            {% set imageUrl = localImage.url %}
                        {% else %}
                            {% set imageUrl = theme_url ~ '/images/' ~ initiative.image %}
                        {% endif %}
                    {% endif %}
                    {% include 'partials/components/initiative.html.twig' with {
                        title: initiative.title,
                        subtitle: initiative.subtitle,
                        date: initiative.date,
                        description: initiative.description,
                        image: imageUrl,
                        link_url: initiative.link_url,
                        link_text: initiative.link_text,
                    } %}
                </li>
                {% endfor %}
            </ul>
        </section>
    </div>
</article>", "modular/news/news.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\news\\news.html.twig");
    }
}

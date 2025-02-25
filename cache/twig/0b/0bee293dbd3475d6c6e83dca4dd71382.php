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

/* modular/biography/publications.html.twig */
class __TwigTemplate_9de47cde37649b8c79b895cbb332526b extends \Twig\Template
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
        echo "<article class=\"publications-wrapper\">
    <div class=\"publications\">
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
            <ul class=\"publications-list\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 8), "publications", [], "any", false, false, false, 8));
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
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 9
            echo "                <li class=\"publication-item\">
                        ";
            // line 10
            $this->loadTemplate("partials/components/publication.html.twig", "modular/biography/publications.html.twig", 10)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source,             // line 11
$context["publication"], "title", [], "any", false, false, false, 11), "authors" => twig_get_attribute($this->env, $this->source,             // line 12
$context["publication"], "authors", [], "any", false, false, false, 12), "date" => twig_get_attribute($this->env, $this->source,             // line 13
$context["publication"], "date", [], "any", false, false, false, 13), "journal" => twig_get_attribute($this->env, $this->source,             // line 14
$context["publication"], "journal", [], "any", false, false, false, 14), "volume" => twig_get_attribute($this->env, $this->source,             // line 15
$context["publication"], "volume", [], "any", false, false, false, 15), "pages" => twig_get_attribute($this->env, $this->source,             // line 16
$context["publication"], "pages", [], "any", false, false, false, 16), "conference" => twig_get_attribute($this->env, $this->source,             // line 17
$context["publication"], "conference", [], "any", false, false, false, 17), "description" => twig_get_attribute($this->env, $this->source,             // line 18
$context["publication"], "description", [], "any", false, false, false, 18), "link" => twig_get_attribute($this->env, $this->source,             // line 19
$context["publication"], "link", [], "any", false, false, false, 19)]));
            // line 20
            echo "<p>";
            echo twig_escape_filter($this->env, ($context["paragraph"] ?? null), "html", null, true);
            echo "</p>
                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </ul>
        </section>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "modular/biography/publications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  84 => 20,  82 => 19,  81 => 18,  80 => 17,  79 => 16,  78 => 15,  77 => 14,  76 => 13,  75 => 12,  74 => 11,  73 => 10,  70 => 9,  53 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"publications-wrapper\">
    <div class=\"publications\">
        {% if module.header.item_title %}
            <h2 class=\"title\">{{ module.header.item_title }}</h2>
        {% endif %}
        <section class=\"body\">
            <ul class=\"publications-list\">
                {% for publication in module.header.publications %}
                <li class=\"publication-item\">
                        {% include 'partials/components/publication.html.twig' with {
                            title: publication.title,
                            authors: publication.authors,
                            date: publication.date,
                            journal: publication.journal,
                            volume: publication.volume,
                            pages: publication.pages,
                            conference: publication.conference,
                            description: publication.description,
                            link: publication.link
                        } %}<p>{{ paragraph }}</p>
                    </li>
                {% endfor %}
            </ul>
        </section>
    </div>
</article>
", "modular/biography/publications.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\biography\\publications.html.twig");
    }
}

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

/* partials/body.html.twig */
class __TwigTemplate_f2490d37b5a194eea3ed4ad907a7bb5b extends \Twig\Template
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
        echo "<section class=\"body-container\">
    <div class=\"page-sections\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 4
            echo "            ";
            $context["index"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 4);
            // line 5
            echo "            ";
            $context["odd_even_class"] = (((($context["index"] ?? null) % 2 == 0)) ? ("even") : ("odd"));
            // line 6
            echo "            
            <section class=\"page-section ";
            // line 7
            echo twig_escape_filter($this->env, ($context["odd_even_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 8
            $this->loadTemplate((twig_get_attribute($this->env, $this->source, $context["module"], "template", [], "any", false, false, false, 8) . ".html.twig"), "partials/body.html.twig", 8)->display(twig_array_merge($context, ["module" => $context["module"], "odd_even_class" => ($context["odd_even_class"] ?? null)]));
            // line 9
            echo "            </section>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  73 => 9,  71 => 8,  67 => 7,  64 => 6,  61 => 5,  58 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"body-container\">
    <div class=\"page-sections\">
        {% for module in page.collection() %}
            {% set index = loop.index0 %}
            {% set odd_even_class = (index is even) ? 'even' : 'odd' %}
            
            <section class=\"page-section {{ odd_even_class }}\">
                {% include module.template ~ '.html.twig' with { module: module, odd_even_class: odd_even_class } %}
            </section>
        {% endfor %}
    </div>
</section>", "partials/body.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\body.html.twig");
    }
}

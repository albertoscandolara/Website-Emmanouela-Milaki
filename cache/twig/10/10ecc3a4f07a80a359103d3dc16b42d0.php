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

/* modular/services/services.html.twig */
class __TwigTemplate_b31e964e06f8e332317ec3e6305b2d71 extends \Twig\Template
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
        echo "<article class=\"services-wrapper\">
    <div class=\"services\">
        <section class=\"body\">
            <ul class=\"services-list\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 5), "services", [], "any", false, false, false, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 6
            echo "                <li class=\"services-item\">
                    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["service"], "icon", [], "any", false, false, false, 7)) {
                // line 8
                echo "                        ";
                $context["localIcon"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["service"], "icon", [], "any", false, false, false, 8)] ?? null) : null);
                // line 9
                echo "                        ";
                if (($context["localIcon"] ?? null)) {
                    // line 10
                    echo "                            ";
                    $context["iconUrl"] = twig_get_attribute($this->env, $this->source, ($context["localIcon"] ?? null), "url", [], "any", false, false, false, 10);
                    // line 11
                    echo "                        ";
                } else {
                    // line 12
                    echo "                            ";
                    $context["iconUrl"] = ((($context["theme_url"] ?? null) . "/images/") . twig_get_attribute($this->env, $this->source, $context["service"], "icon", [], "any", false, false, false, 12));
                    // line 13
                    echo "                        ";
                }
                // line 14
                echo "                    ";
            }
            // line 15
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 15)) {
                // line 16
                echo "                        ";
                $context["localImage"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "media", [], "any", false, false, false, 16)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 16)] ?? null) : null);
                // line 17
                echo "                        ";
                if (($context["localImage"] ?? null)) {
                    // line 18
                    echo "                            ";
                    $context["imageUrl"] = twig_get_attribute($this->env, $this->source, ($context["localImage"] ?? null), "url", [], "any", false, false, false, 18);
                    // line 19
                    echo "                        ";
                } else {
                    // line 20
                    echo "                            ";
                    $context["imageUrl"] = ((($context["theme_url"] ?? null) . "/images/") . twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 20));
                    // line 21
                    echo "                        ";
                }
                // line 22
                echo "                    ";
            }
            // line 23
            echo "                    ";
            $this->loadTemplate("partials/components/service.html.twig", "modular/services/services.html.twig", 23)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source,             // line 24
$context["service"], "title", [], "any", false, false, false, 24), "icon" =>             // line 25
($context["iconUrl"] ?? null), "image" =>             // line 26
($context["imageUrl"] ?? null), "description" => twig_get_attribute($this->env, $this->source,             // line 27
$context["service"], "description", [], "any", false, false, false, 27)]));
            // line 29
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>
        </section>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "modular/services/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 31,  117 => 29,  115 => 27,  114 => 26,  113 => 25,  112 => 24,  110 => 23,  107 => 22,  104 => 21,  101 => 20,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  63 => 7,  60 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"services-wrapper\">
    <div class=\"services\">
        <section class=\"body\">
            <ul class=\"services-list\">
                {% for service in module.header.services %}
                <li class=\"services-item\">
                    {% if service.icon %}
                        {% set localIcon = module.media[service.icon] %}
                        {% if localIcon %}
                            {% set iconUrl = localIcon.url %}
                        {% else %}
                            {% set iconUrl = theme_url ~ '/images/' ~ service.icon %}
                        {% endif %}
                    {% endif %}
                    {% if service.image %}
                        {% set localImage = module.media[service.image] %}
                        {% if localImage %}
                            {% set imageUrl = localImage.url %}
                        {% else %}
                            {% set imageUrl = theme_url ~ '/images/' ~ service.image %}
                        {% endif %}
                    {% endif %}
                    {% include 'partials/components/service.html.twig' with {
                        title: service.title,
                        icon: iconUrl,
                        image: imageUrl,
                        description: service.description,
                    } %}
                </li>
                {% endfor %}
            </ul>
        </section>
    </div>
</article>", "modular/services/services.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\services\\services.html.twig");
    }
}

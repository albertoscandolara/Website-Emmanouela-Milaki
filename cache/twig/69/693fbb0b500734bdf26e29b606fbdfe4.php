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

/* modular/contacts/social.html.twig */
class __TwigTemplate_f017dc4b07b434dc9dc1cdd02fd2d8bf extends \Twig\Template
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
        echo "<article class=\"social-wrapper\">
    <section class=\"social\">
        <ul class=\"social-media\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 4), "social_links", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 5
            echo "                <li title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
                    <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 6), "html", null, true);
            echo "\" target=\"_blank\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "aria_label", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/icons/logos/" . twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 7))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "aria_label", [], "any", false, false, false, 7), "html", null, true);
            echo "\" />
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
    </section>
</article>";
    }

    public function getTemplateName()
    {
        return "modular/contacts/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  57 => 7,  51 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"social-wrapper\">
    <section class=\"social\">
        <ul class=\"social-media\">
            {% for link in module.header.social_links %}
                <li title=\"{{ link.title }}\">
                    <a href=\"{{ link.url }}\" target=\"_blank\" aria-label=\"{{ link.aria_label }}\">
                        <img src=\"{{ url('theme://images/icons/logos/' ~ link.icon) }}\" alt=\"{{ link.aria_label }}\" />
                    </a>
                </li>
            {% endfor %}
        </ul>
    </section>
</article>", "modular/contacts/social.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\contacts\\social.html.twig");
    }
}

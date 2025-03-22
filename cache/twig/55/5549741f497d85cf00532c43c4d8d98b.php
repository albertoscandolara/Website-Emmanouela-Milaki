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

/* modular/contacts/phone.html.twig */
class __TwigTemplate_b3e4a1150f406c4bcaa139134a756725 extends \Twig\Template
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
        echo "<article class=\"phone-wrapper\">
    <section class=\"phone\">
        <ul class=\"phone-numbers\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 4), "phones", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 5
            echo "                <li title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "GIVE_US_A_CALL"), "html", null, true);
            echo "!\">
                    <a href=\"tel:";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "number", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
                        <img class=\"phone\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/icons/phone.svg"), "html", null, true);
            echo "\" alt=\"Phone Icon\">
                        <img class=\"flag\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/icons/flags/" . twig_get_attribute($this->env, $this->source, $context["phone"], "flag", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo " Flag\">
                        <span class=\"number\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "number", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </section>
</article>";
    }

    public function getTemplateName()
    {
        return "modular/contacts/phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  65 => 9,  59 => 8,  55 => 7,  51 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"phone-wrapper\">
    <section class=\"phone\">
        <ul class=\"phone-numbers\">
            {% for phone in module.header.phones %}
                <li title=\"{{ \"GIVE_US_A_CALL\"|t }}!\">
                    <a href=\"tel:{{ phone.number }}\">
                        <img class=\"phone\" src=\"{{ url('theme://images/icons/phone.svg') }}\" alt=\"Phone Icon\">
                        <img class=\"flag\" src=\"{{ url('theme://images/icons/flags/' ~ phone.flag) }}\" alt=\"{{ phone.title }} Flag\">
                        <span class=\"number\">{{ phone.number }}</span>
                    </a>
                </li>
            {% endfor %}
        </ul>
    </section>
</article>", "modular/contacts/phone.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\contacts\\phone.html.twig");
    }
}

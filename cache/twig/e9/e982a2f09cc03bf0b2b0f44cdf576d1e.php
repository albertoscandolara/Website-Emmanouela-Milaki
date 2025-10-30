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

/* modular/contacts/opening-hours.html.twig */
class __TwigTemplate_5ce5f123692e38680246fe439df6d4e5 extends \Twig\Template
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
        echo "<article class=\"opening-hours-wrapper\">
    <div class=\"opening-hours\">
        <div class='title'>
            <h4>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h4>
        </div>
        <table>
            <tbody>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 8), "opening_hours", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 9
            echo "                    <tr>
                        <td class=\"day\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
                        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["day"], "is_open", [], "any", false, false, false, 11)) {
                // line 12
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "open", [], "any", false, false, false, 12), "html", null, true);
                echo "</td>
                            <td>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "close", [], "any", false, false, false, 13), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 15
                echo "                            <td colspan=\"2\">";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "CLOSED"), "html", null, true);
                echo "</td>
                        ";
            }
            // line 17
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </tbody>
        </table>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "modular/contacts/opening-hours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  78 => 17,  72 => 15,  67 => 13,  62 => 12,  60 => 11,  56 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"opening-hours-wrapper\">
    <div class=\"opening-hours\">
        <div class='title'>
            <h4>{{ module.header.title }}</h4>
        </div>
        <table>
            <tbody>
                {% for day in module.header.opening_hours %}
                    <tr>
                        <td class=\"day\">{{ day.day }}</td>
                        {% if day.is_open %}
                            <td>{{ day.open }}</td>
                            <td>{{ day.close }}</td>
                        {% else %}
                            <td colspan=\"2\">{{ \"CLOSED\"|t }}</td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</article>", "modular/contacts/opening-hours.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\modular\\contacts\\opening-hours.html.twig");
    }
}

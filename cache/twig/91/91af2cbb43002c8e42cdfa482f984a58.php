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

/* flex-objects/types/default/buttons/languages.html.twig */
class __TwigTemplate_70095d5a91d72385ac86a18f03d6528a extends \Twig\Template
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
        echo "<div id=\"titlebar-languages\" class=\"button-group\">
    <button type=\"button\" class=\"button disabled\">
        <i class=\"fa fa-flag-o\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array", true, true, false, 4) &&  !(null === (($__internal_compile_0 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["language"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["language"] ?? null)] ?? null) : null)) : (($context["language"] ?? null))), "html", null, true);
        echo "
    </button>
    ";
        // line 6
        if ((twig_length_filter($this->env, ($context["admin_languages"] ?? null)) > $this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(twig_in_filter(($context["language"] ?? null), ($context["admin_languages"] ?? null))))) {
            // line 7
            echo "        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-caret-down\"></i>
        </button>
        <ul class=\"dropdown-menu language-switcher\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["admin_languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                // line 12
                echo "                ";
                if (($context["lang_code"] != ($context["language"] ?? null))) {
                    // line 13
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [0 => 1], "method", false, false, false, 13), $context["lang_code"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true, false, 13) &&  !(null === (($__internal_compile_2 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["lang_code"]] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["lang_code"]] ?? null) : null)) : ($context["lang_code"])), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 15
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>
    ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/buttons/languages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  76 => 16,  70 => 15,  62 => 13,  59 => 12,  55 => 11,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"titlebar-languages\" class=\"button-group\">
    <button type=\"button\" class=\"button disabled\">
        <i class=\"fa fa-flag-o\"></i>
        {{ all_languages[language] ?? language }}
    </button>
    {%  if admin_languages|length > (language in admin_languages)|int %}
        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-caret-down\"></i>
        </button>
        <ul class=\"dropdown-menu language-switcher\">
            {% for lang_code in admin_languages %}
                {% if lang_code != language %}
                    <li><a href=\"{{ admin_route(route.getRoute(1), lang_code) }}\">{{ all_languages[lang_code] ?? lang_code }}</a></li>
                {% endif %}
            {% endfor %}
        </ul>
    {% endif %}
</div>
", "flex-objects/types/default/buttons/languages.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\buttons\\languages.html.twig");
    }
}

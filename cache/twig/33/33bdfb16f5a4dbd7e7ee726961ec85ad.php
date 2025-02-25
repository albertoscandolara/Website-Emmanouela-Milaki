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

/* flex-objects/types/pages/buttons/save.html.twig */
class __TwigTemplate_ac8b19046cff04bc69a9aba5b78ea180 extends \Twig\Template
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
        $context["task"] = (($context["task"]) ?? ("save"));
        // line 2
        echo "<div id=\"titlebar-save\" class=\"button-group\">
    <button class=\"button success\" type=\"submit\" name=\"task\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["task"] ?? null), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\" form=\"blueprints\">
        <i class=\"fa fa-check\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "
    </button>
    ";
        // line 6
        if (($context["can_translate"] ?? null)) {
            // line 7
            echo "        ";
            $context["untranslated"] = array_diff(($context["admin_languages"] ?? null), ($context["object_languages"] ?? null));
            // line 8
            echo "        ";
            if (count(($context["untranslated"] ?? null))) {
                // line 9
                echo "            <button id=\"titlebar-button-save\" type=\"button\" class=\"button success dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu lang-switcher\">
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["untranslated"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 14
                    echo "                    <li>
                        <button class=\"button success task\" type=\"submit\" name=\"task\" value=\"saveas\" lang=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $context["lang_code"], "html", null, true);
                    echo "\" form=\"blueprints\">
                            ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true, false, 16) &&  !(null === (($__internal_compile_0 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["lang_code"]] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["lang_code"]] ?? null) : null)) : ($context["lang_code"])), "html", null, true);
                    echo "
                        </button>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            </ul>
        ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  94 => 22,  90 => 20,  78 => 16,  74 => 15,  71 => 14,  67 => 13,  61 => 9,  58 => 8,  55 => 7,  53 => 6,  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set task = task ?? 'save' %}
<div id=\"titlebar-save\" class=\"button-group\">
    <button class=\"button success\" type=\"submit\" name=\"task\" value=\"{{ task }}\" lang=\"{{ language }}\" form=\"blueprints\">
        <i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}
    </button>
    {% if can_translate %}
        {% set untranslated = admin_languages|array_diff(object_languages) %}
        {% if count(untranslated) %}
            <button id=\"titlebar-button-save\" type=\"button\" class=\"button success dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu lang-switcher\">
                {% for lang_code in untranslated %}
                    <li>
                        <button class=\"button success task\" type=\"submit\" name=\"task\" value=\"saveas\" lang=\"{{ lang_code }}\" form=\"blueprints\">
                            {{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ all_languages[lang_code] ?? lang_code }}
                        </button>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endif %}
</div>
", "flex-objects/types/pages/buttons/save.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\save.html.twig");
    }
}

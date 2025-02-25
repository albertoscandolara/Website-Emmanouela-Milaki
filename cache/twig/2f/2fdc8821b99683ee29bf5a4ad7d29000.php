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

/* flex-objects/types/pages/buttons/add.html.twig */
class __TwigTemplate_68588afb555fab3607a0324c89045494 extends \Twig\Template
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
        echo "<div id=\"titlebar-add\" class=\"button-group\">
    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
        <i class=\"fa fa-plus\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
        echo "
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
        echo "</a></li>
        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
        echo "</a></li>
        ";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modularTypes", [], "any", false, false, false, 11))) {
            // line 12
            echo "        <li><a class=\"button\" href=\"#module\" data-remodal-target=\"module\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD_MODULE"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "add_modals", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 15
            echo "            ";
            if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(twig_get_attribute($this->env, $this->source, $context["add_modal"], "show_in", [], "any", false, false, false, 15), "bar") == "dropdown")) {
                // line 16
                echo "                <li><a class=\"button ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["add_modal"], "link_classes", [], "any", false, false, false, 16), "html", null, true);
                echo "\" href=\"#modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-target=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(twig_get_attribute($this->env, $this->source, $context["add_modal"], "label", [], "any", false, false, false, 16)), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  86 => 18,  74 => 16,  71 => 15,  66 => 14,  60 => 12,  58 => 11,  54 => 10,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"titlebar-add\" class=\"button-group\">
    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
        {% if admin.modularTypes is not empty %}
        <li><a class=\"button\" href=\"#module\" data-remodal-target=\"module\">{{ \"PLUGIN_ADMIN.ADD_MODULE\"|tu }}</a></li>
        {% endif %}
        {% for key, add_modal in config.plugins.admin.add_modals %}
            {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label|tu }}</a></li>
            {% endif %}
        {% endfor %}
    </ul>
</div>
", "flex-objects/types/pages/buttons/add.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\add.html.twig");
    }
}

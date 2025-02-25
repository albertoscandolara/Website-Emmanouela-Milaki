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

/* flex-objects/types/pages/list.html.twig */
class __TwigTemplate_a8bb9650b82e9781f0637b2479cfd9d0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'back_button' => [$this, 'block_back_button'],
            'create_button' => [$this, 'block_create_button'],
            'content_top' => [$this, 'block_content_top'],
            'content_list' => [$this, 'block_content_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["can_create"] = true;
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/list.html.twig", "flex-objects/types/pages/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_back_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/pages/buttons/back.html.twig"], "flex-objects/types/pages/list.html.twig", 6)->display($context);
    }

    // line 9
    public function block_create_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 10), "admin", [], "any", false, false, false, 10), "add_modals", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 11
            echo "        ";
            if ((((twig_get_attribute($this->env, $this->source, $context["add_modal"], "show_in", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["add_modal"], "show_in", [], "any", false, false, false, 11), "bar")) : ("bar")) == "bar")) {
                // line 12
                echo "            <a class=\"button ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["add_modal"], "link_classes", [], "any", false, false, false, 12), "html", null, true);
                echo "\" href=\"#modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-target=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(twig_get_attribute($this->env, $this->source, $context["add_modal"], "label", [], "any", false, false, false, 12)), "html", null, true);
                echo "</a>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/pages/buttons/add.html.twig"], "flex-objects/types/pages/list.html.twig", 16)->display($context);
    }

    // line 19
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_content_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $context["list_layout"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 22), "param", [0 => "layout", 1 => "columns"], "method", false, false, false, 22);
        // line 23
        echo "    ";
        $this->loadTemplate([0 => (((("flex-objects/types/" .         // line 24
($context["target"] ?? null)) . "/list/") . ($context["list_layout"] ?? null)) . ".html.twig"), 1 => (("flex-objects/types/pages/list/" .         // line 25
($context["list_layout"] ?? null)) . ".html.twig"), 2 => (("flex-objects/types/" .         // line 26
($context["target"] ?? null)) . "/list/list.html.twig"), 3 => "flex-objects/types/pages/list/list.html.twig"], "flex-objects/types/pages/list.html.twig", 23)->display($context);
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  114 => 25,  113 => 24,  111 => 23,  108 => 22,  104 => 21,  98 => 19,  94 => 16,  91 => 15,  85 => 14,  73 => 12,  70 => 11,  65 => 10,  61 => 9,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/list.html.twig' %}

{% set can_create = true %}

{% block back_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/pages/buttons/back.html.twig'] %}
{% endblock back_button %}

{% block create_button %}
    {% for key, add_modal in config.plugins.admin.add_modals %}
        {% if add_modal.show_in|default('bar') == 'bar' %}
            <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label|tu }}</a>
        {% endif %}
    {% endfor %}

    {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/pages/buttons/add.html.twig'] %}
{% endblock %}

{% block content_top %}{% endblock %}

{% block content_list %}
    {% set list_layout = grav.uri.param('layout', 'columns') %}
    {% include [
        'flex-objects/types/' ~ target ~ '/list/' ~ list_layout ~ '.html.twig',
        'flex-objects/types/pages/list/' ~ list_layout ~ '.html.twig',
        'flex-objects/types/' ~ target ~ '/list/list.html.twig',
        'flex-objects/types/pages/list/list.html.twig'
        ] %}
{% endblock %}
", "flex-objects/types/pages/list.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\list.html.twig");
    }
}

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

/* forms/fields/order/order.html.twig */
class __TwigTemplate_434c9addbc7fd672fbf77b83e9c183fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 3)) : (($context["value"] ?? null)));
        // line 4
        if (($context["form"] ?? null)) {
            // line 5
            $context["siblings"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 5), "parent", [], "any", false, false, false, 5), "children", [], "any", false, false, false, 5), "collection", [], "any", false, false, false, 5);
            // line 6
            $context["canOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 6), "order", [], "any", false, false, false, 6);
            // line 7
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 7), "exists", [], "any", false, false, false, 7)) {
                // line 8
                twig_get_attribute($this->env, $this->source, ($context["siblings"] ?? null), "add", [0 => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 8)], "method", false, false, false, 8);
            }
        } else {
            // line 11
            twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "enablePages", [], "method", false, false, false, 11);
            // line 12
            $context["siblings"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "parent", [], "any", false, false, false, 12), "children", [], "any", false, false, false, 12);
            // line 13
            $context["canOrder"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "order", [], "any", false, false, false, 13);
        }
        // line 15
        $context["vertical"] = (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 15) == "vertical");
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/order/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<div class=\"form-field grid pure-g";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        echo "\">
    <div class=\"form-label";
        // line 19
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        <label>
            ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 21)) {
            // line 22
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 22)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 22)), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 24
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 24)), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "            ";
        echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 26), "required", [], "any", false, false, false, 26), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 29
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\">
        <div class=\"form-order-wrapper ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 30), "html", null, true);
        echo "\">

            <input
                type=\"hidden\"
                data-order
                ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 35) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 36
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 36))), "html", null, true);
        echo "\"
                value=\"\" />
            ";
        // line 38
        if ( !($context["canOrder"] ?? null)) {
            // line 39
            echo "                <div class=\"notice\">";
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX");
            echo "</div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if ((twig_length_filter($this->env, ($context["siblings"] ?? null)) < 200)) {
            // line 43
            echo "                ";
            $context["sortable_count"] = 0;
            // line 44
            echo "                <ul id=\"ordering\" class=\"orderable ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "order", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                    <li class=\"drag-handle\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 47), "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 47) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "slug", [], "any", false, false, false, 47))) ? ("data-active-id") : (""));
                    echo "><span class=\"page-order\">";
                    echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(twig_get_attribute($this->env, $this->source, $context["page"], "order", [], "any", false, false, false, 47));
                    echo ".</span> ";
                    ((twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 47), "html", null, true))) : (print ("NEW")));
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->getPageUrl($context["page"]), "html", null, true);
                    echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                    ";
                    // line 48
                    $context["sortable_count"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48);
                    // line 49
                    echo "                    ";
                }
                // line 50
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>
                ";
            // line 52
            if ((($context["sortable_count"] ?? null) < twig_length_filter($this->env, ($context["siblings"] ?? null)))) {
                // line 53
                echo "                <label>";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UNSORTABLE_PAGES"), "html", null, true);
                echo "</label>
                <ul class=\"orderable disabled\">
                    ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 56
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["page"], "order", [], "any", false, false, false, 56)) {
                        // line 57
                        echo "                        <li ";
                        echo (((twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 57) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "slug", [], "any", false, false, false, 57))) ? ("data-active-id") : (""));
                        echo ">";
                        ((twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 57), "html", null, true))) : (print ("NEW")));
                        echo " <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->getPageUrl($context["page"]), "html", null, true);
                        echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                        ";
                    }
                    // line 59
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                </ul>
                ";
            }
            // line 62
            echo "            ";
        } else {
            // line 63
            echo "                <div class=\"notice\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
            echo "</div>
            ";
        }
        // line 65
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 65,  249 => 63,  246 => 62,  242 => 60,  236 => 59,  226 => 57,  223 => 56,  219 => 55,  213 => 53,  211 => 52,  208 => 51,  194 => 50,  191 => 49,  189 => 48,  176 => 47,  173 => 46,  156 => 45,  151 => 44,  148 => 43,  146 => 42,  143 => 41,  137 => 39,  135 => 38,  129 => 36,  125 => 35,  117 => 30,  111 => 29,  104 => 26,  98 => 24,  90 => 22,  88 => 21,  81 => 19,  74 => 18,  70 => 17,  65 => 1,  63 => 15,  60 => 13,  58 => 12,  56 => 11,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}
{% if form %}
    {% set siblings = form.object.parent.children.collection %}
    {% set canOrder = form.object.order %}
    {% if not form.object.exists %}
        {% do siblings.add(form.object) %}
    {% endif %}
{% else %}
    {% do admin.enablePages() %}
    {% set siblings = context.parent.children %}
    {% set canOrder = context.order %}
{% endif %}
{% set vertical = field.style == 'vertical' %}

{% block field %}
<div class=\"form-field grid pure-g{% if vertical %} vertical{% endif %}\">
    <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
        <label>
            {% if field.help %}
            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t }}\">{{ field.label|t }}</span>
            {% else %}
            {{ field.label|t }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\">
        <div class=\"form-order-wrapper {{ field.size }}\">

            <input
                type=\"hidden\"
                data-order
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                value=\"\" />
            {% if not canOrder %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX\"|t|raw }}</div>
            {% endif %}

            {% if siblings|length < 200 %}
                {% set sortable_count = 0 %}
                <ul id=\"ordering\" class=\"orderable {{ field.classes }}\">
                {% for page in siblings %}
                    {% if page.order %}
                    <li class=\"drag-handle\" data-id=\"{{ page.slug }}\" {{ page.slug == data.slug ? 'data-active-id' : ''}}><span class=\"page-order\">{{ page.order|int }}.</span> {{ page.title ?: 'NEW' }} <a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                    {% set sortable_count = loop.index %}
                    {% endif %}
                {% endfor %}
                </ul>
                {% if sortable_count < siblings|length %}
                <label>{{ \"PLUGIN_ADMIN.UNSORTABLE_PAGES\"|t }}</label>
                <ul class=\"orderable disabled\">
                    {% for page in siblings %}
                        {% if not page.order %}
                        <li {{ page.slug == data.slug ? 'data-active-id' : ''}}>{{ page.title ?: 'NEW' }} <a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
                {% endif %}
            {% else %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS\"|t }}</div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "forms/fields/order/order.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\order\\order.html.twig");
    }
}

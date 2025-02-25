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

/* flex-objects/types/default/titlebar/edit.html.twig */
class __TwigTemplate_161e8b6975fb1ddbe2a7c53a1ab9dfb2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'titlebar_button_bar' => [$this, 'block_titlebar_button_bar'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'titlebar_title' => [$this, 'block_titlebar_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('titlebar', $context, $blocks);
    }

    public function block_titlebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('titlebar_button_bar', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('titlebar_title', $context, $blocks);
        // line 45
        echo "
";
    }

    // line 2
    public function block_titlebar_button_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"button-bar\">
        ";
        // line 5
        echo "        ";
        $this->displayBlock('back_button', $context, $blocks);
        // line 8
        echo "
        ";
        // line 10
        echo "        ";
        if (($context["can_preview"] ?? null)) {
            // line 11
            echo "        ";
            $this->displayBlock('preview_button', $context, $blocks);
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        if (($context["can_delete"] ?? null)) {
            // line 18
            echo "        ";
            $this->displayBlock('delete_button', $context, $blocks);
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('extra_buttons', $context, $blocks);
        // line 24
        echo "
        ";
        // line 26
        echo "        ";
        if ((($context["allowed"] ?? null) && ($context["can_save"] ?? null))) {
            // line 27
            echo "        ";
            $this->displayBlock('save_button', $context, $blocks);
            // line 30
            echo "        ";
        }
        // line 31
        echo "    </div>
    ";
    }

    // line 5
    public function block_back_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/default/buttons/back.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 6)->display($context);
        // line 7
        echo "        ";
    }

    // line 11
    public function block_preview_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), 1 => "flex-objects/types/default/buttons/preview.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 12)->display($context);
        // line 13
        echo "        ";
    }

    // line 18
    public function block_delete_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), 1 => "flex-objects/types/default/buttons/delete.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 19)->display($context);
        // line 20
        echo "        ";
    }

    // line 23
    public function block_extra_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
    public function block_save_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), 1 => "flex-objects/types/default/buttons/save.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 28)->display(twig_array_merge($context, ["task" => "save"]));
        // line 29
        echo "        ";
    }

    // line 34
    public function block_titlebar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <h1>
        ";
        // line 36
        if (($context["allowed"] ?? null)) {
            // line 37
            echo "            <i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, ($context["title_icon"] ?? null), "html", null, true);
            echo "\"></i>
            ";
            // line 38
            (( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, (("[" . twig_upper_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true))) : (print ("")));
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(($context["title"] ?? null)), "html", null, true);
            echo "
        ";
        } else {
            // line 40
            echo "            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            ";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "    </h1>
    ";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/titlebar/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  200 => 43,  195 => 41,  192 => 40,  185 => 38,  180 => 37,  178 => 36,  175 => 35,  171 => 34,  167 => 29,  164 => 28,  160 => 27,  154 => 23,  150 => 20,  147 => 19,  143 => 18,  139 => 13,  136 => 12,  132 => 11,  128 => 7,  125 => 6,  121 => 5,  116 => 31,  113 => 30,  110 => 27,  107 => 26,  104 => 24,  102 => 23,  99 => 22,  96 => 21,  93 => 18,  90 => 17,  87 => 15,  84 => 14,  81 => 11,  78 => 10,  75 => 8,  72 => 5,  69 => 3,  65 => 2,  60 => 45,  58 => 34,  55 => 33,  52 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block titlebar %}
    {% block titlebar_button_bar %}
    <div class=\"button-bar\">
        {# BACK #}
        {% block back_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/default/buttons/back.html.twig'] %}
        {% endblock back_button %}

        {# PREVIEW #}
        {% if can_preview %}
        {% block preview_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/preview.html.twig', 'flex-objects/types/default/buttons/preview.html.twig'] %}
        {% endblock preview_button %}
        {% endif %}

        {# DELETE #}
        {% if can_delete %}
        {% block delete_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/delete.html.twig', 'flex-objects/types/default/buttons/delete.html.twig'] %}
        {% endblock delete_button %}
        {% endif %}

        {% block extra_buttons %}{% endblock extra_buttons %}

        {# SAVE #}
        {% if allowed and can_save %}
        {% block save_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/save.html.twig', 'flex-objects/types/default/buttons/save.html.twig'] with {task: 'save'} %}
        {% endblock save_button %}
        {% endif %}
    </div>
    {% endblock titlebar_button_bar %}

    {% block titlebar_title %}
    <h1>
        {% if allowed %}
            <i class=\"fa fa-fw {{ title_icon }}\"></i>
            {{ not object.exists ? '[' ~ 'PLUGIN_FLEX_OBJECTS.NEW'|tu|upper ~ ']' }} {{ title|tu }}
        {% else %}
            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            {{ 'PLUGIN_ADMIN.ERROR'|tu }}
        {% endif %}
    </h1>
    {% endblock titlebar_title %}

{% endblock %}
", "flex-objects/types/default/titlebar/edit.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\titlebar\\edit.html.twig");
    }
}

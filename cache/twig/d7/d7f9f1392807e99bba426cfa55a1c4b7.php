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

/* flex-objects/types/default/list/list_actions.html.twig */
class __TwigTemplate_e9bbbd156bcd83c59187159fb218984d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'action_preview' => [$this, 'block_action_preview'],
            'action_edit' => [$this, 'block_action_edit'],
            'action_read' => [$this, 'block_action_read'],
            'action_delete' => [$this, 'block_action_delete'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["object_title"] = ((($context["title_field"] ?? null)) ? ((("'" . twig_join_filter((($__internal_compile_0 = ($context["object"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["title_field"] ?? null)] ?? null) : null), " ")) . "'")) : ("Item"));
        // line 2
        $context["can_read"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "read", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 2);
        // line 3
        $context["can_update"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "update", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 3);
        // line 4
        $context["can_delete"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "delete", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        if ((($context["can_read"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getRoute", [], "method", false, false, false, 6))) {
            // line 7
            echo "    ";
            $this->displayBlock('action_preview', $context, $blocks);
        }
        // line 13
        echo "
";
        // line 14
        if (($context["can_update"] ?? null)) {
            // line 15
            echo "    ";
            $this->displayBlock('action_edit', $context, $blocks);
        } elseif (        // line 20
($context["can_read"] ?? null)) {
            // line 21
            echo "    ";
            $this->displayBlock('action_read', $context, $blocks);
        }
        // line 27
        echo "
";
        // line 28
        if (($context["can_delete"] ?? null)) {
            // line 29
            echo "    ";
            $this->displayBlock('action_delete', $context, $blocks);
        }
    }

    // line 7
    public function block_action_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withAddedPath", [0 => twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getKey", [], "method", false, false, false, 8)], "method", false, false, false, 8), "withoutParams", [], "method", false, false, false, 8), "withQueryParam", [0 => "preview", 1 => 1], "method", false, false, false, 8), "getUri", [], "method", false, false, false, 8), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.PREVIEW"), "html", null, true);
        echo "\" class=\"preview-action\">
            <i class=\"fa fa-eye\"></i>
        </a>
    ";
    }

    // line 15
    public function block_action_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withAddedPath", [0 => twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getKey", [], "method", false, false, false, 16)], "method", false, false, false, 16), "withoutParams", [], "method", false, false, false, 16), "getUri", [], "method", false, false, false, 16), "html", null, true);
        echo "\" title=\"Edit ";
        echo twig_escape_filter($this->env, ($context["object_title"] ?? null), "html", null, true);
        echo "\" class=\"edit-action\">
        <i class=\"fa fa-pencil\"></i>
    </a>
    ";
    }

    // line 21
    public function block_action_read($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withAddedPath", [0 => twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getKey", [], "method", false, false, false, 22)], "method", false, false, false, 22), "withoutParams", [], "method", false, false, false, 22), "getUri", [], "method", false, false, false, 22), "html", null, true);
        echo "\" title=\"View ";
        echo twig_escape_filter($this->env, ($context["object_title"] ?? null), "html", null, true);
        echo "\" class=\"edit-action\">
        <i class=\"fa fa-search\"></i>
    </a>
    ";
    }

    // line 29
    public function block_action_delete($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <a href=\"#delete\"
       class=\"page-delete delete-action\"
       title=\"Delete ";
        // line 32
        echo twig_escape_filter($this->env, ($context["object_title"] ?? null), "html", null, true);
        echo "\"
       data-remodal-target=\"delete\"
       data-delete-url=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 34), "addNonce", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withAddedPath", [0 => twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getKey", [], "method", false, false, false, 34)], "method", false, false, false, 34), "withoutParams", [], "method", false, false, false, 34), "withGravParam", [0 => "task", 1 => "delete"], "method", false, false, false, 34), "getUri", [], "method", false, false, false, 34), 1 => "admin-form", 2 => "admin-nonce"], "method", false, false, false, 34), "html", null, true);
        echo "\"
    >
        <i class=\"fa fa-close\"></i>
    </a>
    ";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/list/list_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 34,  136 => 32,  132 => 30,  128 => 29,  117 => 22,  113 => 21,  102 => 16,  98 => 15,  87 => 8,  83 => 7,  77 => 29,  75 => 28,  72 => 27,  68 => 21,  66 => 20,  63 => 15,  61 => 14,  58 => 13,  54 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set object_title = title_field ? \"'\" ~ object[title_field]|join(' ') ~ \"'\" : 'Item' %}
{% set can_read = object.isAuthorized('read', 'admin', user) %}
{% set can_update = object.isAuthorized('update', 'admin', user) %}
{% set can_delete = object.isAuthorized('delete', 'admin', user) %}

{% if can_read and object.getRoute() %}
    {% block action_preview %}
        <a href=\"{{ route.withAddedPath(object.getKey()).withoutParams().withQueryParam('preview', 1).getUri() }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIEW\"|tu }}\" class=\"preview-action\">
            <i class=\"fa fa-eye\"></i>
        </a>
    {% endblock %}
{% endif %}

{% if can_update %}
    {% block action_edit %}
    <a href=\"{{ route.withAddedPath(object.getKey()).withoutParams().getUri() }}\" title=\"Edit {{ object_title }}\" class=\"edit-action\">
        <i class=\"fa fa-pencil\"></i>
    </a>
    {% endblock %}
{% elseif can_read %}
    {% block action_read %}
    <a href=\"{{ route.withAddedPath(object.getKey()).withoutParams().getUri() }}\" title=\"View {{ object_title }}\" class=\"edit-action\">
        <i class=\"fa fa-search\"></i>
    </a>
    {% endblock %}
{% endif %}

{% if can_delete %}
    {% block action_delete %}
    <a href=\"#delete\"
       class=\"page-delete delete-action\"
       title=\"Delete {{ object_title }}\"
       data-remodal-target=\"delete\"
       data-delete-url=\"{{ grav.uri.addNonce(route.withAddedPath(object.getKey()).withoutParams().withGravParam('task', 'delete').getUri(), 'admin-form', 'admin-nonce') }}\"
    >
        <i class=\"fa fa-close\"></i>
    </a>
    {% endblock %}
{% endif %}
", "flex-objects/types/default/list/list_actions.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\list\\list_actions.html.twig");
    }
}

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

/* partials/page-move.html.twig */
class __TwigTemplate_9a00f54f7ad0d19195b28c619cf7246d extends \Twig\Template
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
        $context["form_id"] = ((($context["form_id"] ?? null)) ? (($context["form_id"] ?? null)) : ("page-move"));
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 3
        $context["field_layout"] = "admin";
        // line 4
        echo "
<form id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" data-page-move>
    <h1>Move</h1>
    <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
    <div class=\"parents-content\"></div>

    ";
        // line 10
        $this->loadTemplate("partials/page-move.html.twig", "partials/page-move.html.twig", 10, "756641224")->display(twig_array_merge($context, ["name" => null, "fields" => twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 10)]));
        // line 14
        echo "
    ";
        // line 15
        echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc("admin-form", "admin-nonce");
        echo "

    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
        <button class=\"button primary\" name=\"task\" value=\"save\" form=\"blueprints\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/page-move.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  67 => 18,  61 => 15,  58 => 14,  56 => 10,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set form_id = form_id ? form_id : 'page-move' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

<form id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" data-page-move>
    <h1>Move</h1>
    <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
    <div class=\"parents-content\"></div>

    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}

    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
        <button class=\"button primary\" name=\"task\" value=\"save\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>
    </div>
</form>
", "partials/page-move.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\page-move.html.twig");
    }
}


/* partials/page-move.html.twig */
class __TwigTemplate_9a00f54f7ad0d19195b28c619cf7246d___756641224 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "partials/page-move.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<div class=\"block block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 11), "html", null, true);
        echo "\">";
    }

    // line 12
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/page-move.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 12,  153 => 11,  142 => 10,  71 => 19,  67 => 18,  61 => 15,  58 => 14,  56 => 10,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set form_id = form_id ? form_id : 'page-move' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

<form id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" data-page-move>
    <h1>Move</h1>
    <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
    <div class=\"parents-content\"></div>

    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}

    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
        <button class=\"button primary\" name=\"task\" value=\"save\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>
    </div>
</form>
", "partials/page-move.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\page-move.html.twig");
    }
}

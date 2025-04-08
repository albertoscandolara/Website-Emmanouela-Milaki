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

/* partials/login.html.twig */
class __TwigTemplate_c656cfa736e48ffd43ae4bd8192c1b4c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'instructions' => [$this, 'block_instructions'],
            'integration' => [$this, 'block_integration'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["scope"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", false, false, false, 2);
        // line 3
        $context["field_layout"] = "admin";
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"login-box-shadow ";
        // line 9
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 11
        $this->loadTemplate("partials/login-logo.html.twig", "partials/login.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("partials/messages.html.twig", "partials/login.html.twig", 13)->display($context);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('instructions', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('integration', $context, $blocks);
        // line 18
        echo "
        <form method=\"post\" action=\"\">
            <div class=\"padding\">
                ";
        // line 21
        $this->displayBlock('form', $context, $blocks);
        // line 22
        echo "                ";
        echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 22), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 22));
        echo "
            </div>
        </form>

        <script>
            \$(document).ready( function() {
                \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
            });
        </script>
    </section>
</body>
";
    }

    // line 15
    public function block_instructions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_integration($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "partials/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 21,  120 => 17,  114 => 15,  97 => 22,  95 => 21,  90 => 18,  88 => 17,  85 => 16,  83 => 15,  80 => 14,  78 => 13,  75 => 12,  73 => 11,  68 => 9,  65 => 8,  61 => 7,  55 => 5,  50 => 1,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set scope = form.scope %}
{% set field_layout = 'admin' %}

{% block messages %}{% endblock %}

{% block body %}
<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"login-box-shadow {{ classes }}\">

        {% include 'partials/login-logo.html.twig' %}

        {% include 'partials/messages.html.twig' %}

        {% block instructions %}{% endblock %}

        {% block integration %}{% endblock %}

        <form method=\"post\" action=\"\">
            <div class=\"padding\">
                {% block form %}{% endblock %}
                {{ nonce_field(form.getNonceAction(), form.getNonceName())|raw }}
            </div>
        </form>

        <script>
            \$(document).ready( function() {
                \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
            });
        </script>
    </section>
</body>
{% endblock %}
", "partials/login.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login.html.twig");
    }
}

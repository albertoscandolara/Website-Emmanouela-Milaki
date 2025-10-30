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

/* partials/form-messages.html.twig */
class __TwigTemplate_f41a4dd1a3baca7e5d59efbf3affb8dd extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 1)) {
            // line 2
            echo "  ";
            $context["inline_errors"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 2))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 2)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "form", [], "any", false, false, false, 2), "inline_errors", [0 => false], "method", false, false, false, 2)));
            // line 3
            echo "  ";
            $context["status_mapping"] = ["success" => "green", "error" => "red", "warning" => "yellow"];
            // line 4
            echo "  ";
            $context["message"] = (((($context["inline_errors"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, false, 4))) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "GRAV.FORM.VALIDATION_FAIL")) : (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 4)));
            // line 5
            echo "    <div class=\"toast toast-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5), "html", null, true);
            echo " ";
            (((($__internal_compile_0 = ($context["status_mapping"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5)] ?? null) : null)) ? (print (twig_escape_filter($this->env, (($__internal_compile_1 = ($context["status_mapping"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5)] ?? null) : null), "html", null, true))) : (print ("green")));
            echo " mt-2 mb-2\">";
            echo ($context["message"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if form.message %}
  {% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
  {% set status_mapping = {'success':'green', 'error': 'red', 'warning': 'yellow'} %}
  {% set message = inline_errors and form.messages ? \"GRAV.FORM.VALIDATION_FAIL\"|t : form.message %}
    <div class=\"toast toast-{{ form.status }} {{ status_mapping[form.status] ?: 'green' }} mt-2 mb-2\">{{ message|raw }}</div>
{% endif %}", "partials/form-messages.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\form-messages.html.twig");
    }
}

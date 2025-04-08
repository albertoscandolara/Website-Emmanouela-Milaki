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

/* forms/layouts/xhr.html.twig */
class __TwigTemplate_dbd4a0ca4930d5b2a59e204884d317e5 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "xhr_submit", [], "any", false, false, false, 1) == true)) {
            // line 2
            echo "  ";
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/xhr-submitter.js", 1 => ["group" => "bottom", "position" => "before"]], "method", false, false, false, 2);
            // line 3
            echo "  ";
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineJs", [0 => (("
    document.addEventListener('DOMContentLoaded', () => {
        attachFormSubmitListener('" . twig_get_attribute($this->env, $this->source,             // line 5
($context["form"] ?? null), "id", [], "any", false, false, false, 5)) . "');
    });"), 1 => ["group" => "bottom", "position" => "before"]], "method", false, false, false, 3);
        }
    }

    public function getTemplateName()
    {
        return "forms/layouts/xhr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if form.xhr_submit == true %}
  {% do assets.addJs('plugin://form/assets/xhr-submitter.js', {'group': 'bottom', 'position': 'before'}) %}
  {% do assets.addInlineJs(\"
    document.addEventListener('DOMContentLoaded', () => {
        attachFormSubmitListener('\" ~ form.id ~ \"');
    });\",
    {'group': 'bottom', 'position': 'before'}) %}
{% endif %}", "forms/layouts/xhr.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\layouts\\xhr.html.twig");
    }
}

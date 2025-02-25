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

/* flex-objects/types/pages/buttons/move.html.twig */
class __TwigTemplate_4ff1b04cd9cdb1c57742e55347482c03 extends \Twig\Template
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
        echo "<a id=\"titlebar-button-move\" class=\"button\" href=\"#\" data-remodal-target=\"move\" data-parents=\"data[route]\">
    <i class=\"fa fa-arrows\"></i> ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
        echo "
</a>
<div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
    ";
        // line 5
        $this->loadTemplate("partials/page-move.html.twig", "flex-objects/types/pages/buttons/move.html.twig", 5)->display(twig_array_merge($context, ["blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/move"], "method", false, false, false, 5), "data" => ($context["context"] ?? null)]));
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/move.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"titlebar-button-move\" class=\"button\" href=\"#\" data-remodal-target=\"move\" data-parents=\"data[route]\">
    <i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}
</a>
<div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
    {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
</div>", "flex-objects/types/pages/buttons/move.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\move.html.twig");
    }
}

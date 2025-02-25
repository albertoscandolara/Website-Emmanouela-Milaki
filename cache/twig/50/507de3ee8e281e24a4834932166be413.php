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

/* flex-objects/types/pages/buttons/delete.html.twig */
class __TwigTemplate_9a7141b511ff41029c7358736b0ea665 extends \Twig\Template
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
        echo "<a id=\"titlebar-button-delete\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withoutParams", [], "method", false, false, false, 1), "withGravParam", [0 => "task", 1 => "delete"], "method", false, false, false, 1), "getUri", [], "method", false, false, false, 1), 1 => "admin-form", 2 => "admin-nonce"], "method", false, false, false, 1), "html", null, true);
        echo "\" class=\"button danger\">
    <i class=\"fa fa-fw fa-trash-o\"></i> ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"titlebar-button-delete\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(route.withoutParams().withGravParam('task', 'delete').getUri(), 'admin-form', 'admin-nonce') }}\" class=\"button danger\">
    <i class=\"fa fa-fw fa-trash-o\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}
</a>
", "flex-objects/types/pages/buttons/delete.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\delete.html.twig");
    }
}

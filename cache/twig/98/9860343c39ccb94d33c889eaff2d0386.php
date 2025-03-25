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

/* flex-objects/types/default/buttons/save.html.twig */
class __TwigTemplate_bc0ba866738d1191e3cb195c9752f952 extends \Twig\Template
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
        $context["task"] = (($context["task"]) ?? ("save"));
        // line 2
        echo "<button id=\"titlebar-button-save\" class=\"button\" type=\"submit\" name=\"task\" value=\"";
        echo twig_escape_filter($this->env, ($context["task"] ?? null), "html", null, true);
        echo "\" form=\"blueprints\" data-flex-safe-action>
    <i class=\"fa fa-check\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/buttons/save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set task = task ?? 'save' %}
<button id=\"titlebar-button-save\" class=\"button\" type=\"submit\" name=\"task\" value=\"{{ task }}\" form=\"blueprints\" data-flex-safe-action>
    <i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}
</button>
", "flex-objects/types/default/buttons/save.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\buttons\\save.html.twig");
    }
}

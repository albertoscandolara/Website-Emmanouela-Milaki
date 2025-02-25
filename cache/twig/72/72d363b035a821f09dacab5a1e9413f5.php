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

/* flex-objects/types/pages/buttons/back.html.twig */
class __TwigTemplate_af5cd58c513c3fb645f16ff9077716b5 extends \Twig\Template
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
        echo "<a id=\"titlebar-button-back\" class=\"button\" href=\"";
        echo twig_escape_filter($this->env, ($context["back_url"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "\">
    <i class=\"fa fa-reply\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"titlebar-button-back\" class=\"button\" href=\"{{ back_url }}\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\">
    <i class=\"fa fa-reply\"></i>
</a>
", "flex-objects/types/pages/buttons/back.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\back.html.twig");
    }
}

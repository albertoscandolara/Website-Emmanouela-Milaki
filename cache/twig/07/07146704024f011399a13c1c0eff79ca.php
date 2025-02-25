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

/* flex-objects/types/pages/buttons/nav-child.html.twig */
class __TwigTemplate_6ce42cb1db171eb9476e9b377ee5658c extends \Twig\Template
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
        if (($context["child_url"] ?? null)) {
            // line 2
            echo "<a id=\"titlebar-button-nav-child\" class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["child_url"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">
    <i class=\"fa fa-chevron-down\"></i>
</a>
";
        } else {
            // line 6
            echo "<span class=\"button disabled\">
    <i class=\"fa fa-chevron-down\"></i>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/nav-child.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if child_url %}
<a id=\"titlebar-button-nav-child\" class=\"button\" href=\"{{ child_url }}\" title=\"{{ title }}\">
    <i class=\"fa fa-chevron-down\"></i>
</a>
{% else %}
<span class=\"button disabled\">
    <i class=\"fa fa-chevron-down\"></i>
</span>
{% endif %}
", "flex-objects/types/pages/buttons/nav-child.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\nav-child.html.twig");
    }
}

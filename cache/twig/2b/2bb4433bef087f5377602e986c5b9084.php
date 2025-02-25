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

/* flex-objects/types/pages/buttons/nav-prev.html.twig */
class __TwigTemplate_2a7097a8652f87e3e153564708ff01f6 extends \Twig\Template
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
        if (($context["prev_url"] ?? null)) {
            // line 2
            echo "<a id=\"titlebar-button-nav-prev\" class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["prev_url"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">
    <i class=\"fa fa-chevron-left\"></i>
</a>
";
        } else {
            // line 6
            echo "<span class=\"button disabled\">
    <i class=\"fa fa-chevron-left\"></i>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/nav-prev.html.twig";
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
        return new Source("{% if prev_url %}
<a id=\"titlebar-button-nav-prev\" class=\"button\" href=\"{{ prev_url }}\" title=\"{{ title }}\">
    <i class=\"fa fa-chevron-left\"></i>
</a>
{% else %}
<span class=\"button disabled\">
    <i class=\"fa fa-chevron-left\"></i>
</span>
{% endif %}", "flex-objects/types/pages/buttons/nav-prev.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\nav-prev.html.twig");
    }
}

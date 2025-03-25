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

/* partials/userinfo-avatar.html.twig */
class __TwigTemplate_32c2ae6f61ee2a418be1d544191973c2 extends \Twig\Template
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
        $context["user_avatar"] = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "getAvatarUrl", [], "method", false, false, false, 1);
        // line 2
        echo "<label><img referrerpolicy=\"no-referrer\" src=\"";
        echo twig_escape_filter($this->env, (($context["user_avatar"] ?? null) . "?s=200"), "html", null, true);
        echo "\" /></label>
";
    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set user_avatar = data.getAvatarUrl() %}
<label><img referrerpolicy=\"no-referrer\" src=\"{{ user_avatar ~ '?s=200' }}\" /></label>
", "partials/userinfo-avatar.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\userinfo-avatar.html.twig");
    }
}

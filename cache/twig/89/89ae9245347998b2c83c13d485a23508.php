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

/* partials/footer.html.twig */
class __TwigTemplate_aa3095e62cf865733df0b5b3ecb3f262 extends \Twig\Template
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
        if (($context["custom_admin_footer"] ?? null)) {
            // line 2
            echo "    ";
            echo ($context["custom_admin_footer"] ?? null);
            echo "
";
        } else {
            // line 4
            echo "    <a href=\"https://getgrav.org\" target=\"_blank\" rel=\"noopener noreferrer\">Grav</a> v<span class=\"grav-version\">";
            echo twig_escape_filter($this->env, twig_constant("GRAV_VERSION"), "html", null, true);
            echo "</span> - Admin v";
            echo twig_escape_filter($this->env, ($context["admin_version"] ?? null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.WAS_MADE_WITH")), "html", null, true);
            echo " <i class=\"fa fa-heart-o pulse\"></i> ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BY")), "html", null, true);
            echo " <a href=\"https://trilby.media\" target=\"_blank\" rel=\"noopener noreferrer\">Trilby Media</a>.
";
        }
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if custom_admin_footer %}
    {{ custom_admin_footer|raw }}
{% else %}
    <a href=\"https://getgrav.org\" target=\"_blank\" rel=\"noopener noreferrer\">Grav</a> v<span class=\"grav-version\">{{ constant('GRAV_VERSION') }}</span> - Admin v{{ admin_version }} - {{ \"PLUGIN_ADMIN.WAS_MADE_WITH\"|t|lower }} <i class=\"fa fa-heart-o pulse\"></i> {{ \"PLUGIN_ADMIN.BY\"|t|lower }} <a href=\"https://trilby.media\" target=\"_blank\" rel=\"noopener noreferrer\">Trilby Media</a>.
{% endif %}
", "partials/footer.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\footer.html.twig");
    }
}

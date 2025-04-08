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

/* partials/login-logo.html.twig */
class __TwigTemplate_6e345217685967fa393cfc6d4013f50c extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 1), "admin", [], "any", false, false, false, 1), "logo_text", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <h1 class=\"text-logo\">
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "logo_text", [], "any", false, false, false, 3), "html", null, true);
            echo "
    </h1>
";
        } else {
            // line 6
            echo "    <h1 class=\"";
            echo ((($context["custom_login_logo"] ?? null)) ? ("custom-logo") : ("default-logo"));
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
        ";
            // line 8
            if (($context["custom_login_logo"] ?? null)) {
                // line 9
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["custom_login_logo"] ?? null)), "html", null, true);
                echo "\" title=\"Login\" />
        ";
            } else {
                // line 11
                echo "            ";
                $this->loadTemplate("@admin-images/logo.svg", "partials/login-logo.html.twig", 11)->display($context);
                // line 12
                echo "        ";
            }
            // line 13
            echo "    </h1>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/login-logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  68 => 12,  65 => 11,  59 => 9,  57 => 8,  53 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if config.plugins.admin.logo_text %}
    <h1 class=\"text-logo\">
        {{ config.plugins.admin.logo_text }}
    </h1>
{% else %}
    <h1 class=\"{{ custom_login_logo ? 'custom-logo' : 'default-logo' }}\">
        {{ title }}
        {% if custom_login_logo %}
            <img src=\"{{ url(custom_login_logo) }}\" title=\"Login\" />
        {% else %}
            {% include('@admin-images/logo.svg') %}
        {% endif %}
    </h1>
{% endif %}
", "partials/login-logo.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-logo.html.twig");
    }
}

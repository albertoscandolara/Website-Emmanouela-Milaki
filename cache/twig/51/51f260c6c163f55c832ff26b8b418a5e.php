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

/* partials/logo.html.twig */
class __TwigTemplate_0b47f4b5540d28f65e73e4284f490bff extends \Twig\Template
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
            echo "    <h3>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/"), "html", null, true);
            echo "\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 4), "admin", [], "any", false, false, false, 4), "logo_text", [], "any", false, false, false, 4), "html", null, true);
            echo "
        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
    </h3>
";
        } else {
            // line 9
            echo "    <div class=\"admin-logo ";
            echo ((($context["custom_admin_logo"] ?? null)) ? ("custom-logo") : ("default-logo"));
            echo "\">
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/"), "html", null, true);
            echo "\">
            ";
            // line 11
            if (($context["custom_admin_logo"] ?? null)) {
                // line 12
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["custom_admin_logo"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
                echo "\" />
            ";
            } else {
                // line 14
                echo "                ";
                $this->loadTemplate("@admin-images/grav-small.svg", "partials/logo.html.twig", 14)->display($context);
                // line 15
                echo "                ";
                $this->loadTemplate("@admin-images/grav-regular.svg", "partials/logo.html.twig", 15)->display($context);
                // line 16
                echo "            ";
            }
            // line 17
            echo "        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  70 => 12,  68 => 11,  64 => 10,  59 => 9,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if config.plugins.admin.logo_text %}
    <h3>
        <a href=\"{{ admin_route('/') }}\">
            {{ config.plugins.admin.logo_text }}
        </a>
        <a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|t }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-external-link\"></i></a>
    </h3>
{% else %}
    <div class=\"admin-logo {{ custom_admin_logo ? 'custom-logo' : 'default-logo' }}\">
        <a href=\"{{ admin_route('/') }}\">
            {% if custom_admin_logo %}
                <img src=\"{{ url(custom_admin_logo) }}\" title=\"{{ site.title }}\" />
            {% else %}
                {% include('@admin-images/grav-small.svg') %}
                {% include('@admin-images/grav-regular.svg') %}
            {% endif %}
        </a>
        <a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|t }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-external-link\"></i></a>
    </div>
{% endif %}
", "partials/logo.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\logo.html.twig");
    }
}

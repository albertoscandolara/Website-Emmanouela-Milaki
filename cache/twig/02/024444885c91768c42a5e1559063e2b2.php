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

/* partials/header.html.twig */
class __TwigTemplate_0a614f28c987f49e21c4488657cade25 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'menu_desktop' => [$this, 'block_menu_desktop'],
            'menu_mobile' => [$this, 'block_menu_mobile'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header>
    <section class=\"header-container\">
        <div class=\"logo-section\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/icons/logos/logo/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
            <div class=\"summmary\">
                <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "HEADER_NAME"), "html", null, true);
        echo "</h3>
                <span>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "HEADER_JOB"), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"menu-desktop-container\">
            ";
        // line 11
        $this->displayBlock('menu_desktop', $context, $blocks);
        // line 14
        echo "        </div>
        <div class=\"menu-mobile-container\">
            ";
        // line 16
        $this->displayBlock('menu_mobile', $context, $blocks);
        // line 19
        echo "        </div>
    </section>
</header>";
    }

    // line 11
    public function block_menu_desktop($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                ";
        $this->loadTemplate("partials/menu_desktop.html.twig", "partials/header.html.twig", 12)->display($context);
        // line 13
        echo "            ";
    }

    // line 16
    public function block_menu_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        $this->loadTemplate("partials/menu_mobile.html.twig", "partials/header.html.twig", 17)->display($context);
        // line 18
        echo "            ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  89 => 17,  85 => 16,  81 => 13,  78 => 12,  74 => 11,  68 => 19,  66 => 16,  62 => 14,  60 => 11,  53 => 7,  49 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <section class=\"header-container\">
        <div class=\"logo-section\">
            <img src=\"{{ url('theme://images/icons/logos/logo/logo.svg') }}\" alt=\"logo\" />
            <div class=\"summmary\">
                <h3>{{ \"HEADER_NAME\" | t }}</h3>
                <span>{{ \"HEADER_JOB\" | t }}</span>
            </div>
        </div>
        <div class=\"menu-desktop-container\">
            {% block menu_desktop %}
                {% include 'partials/menu_desktop.html.twig' %}
            {% endblock %}
        </div>
        <div class=\"menu-mobile-container\">
            {% block menu_mobile %}
                {% include 'partials/menu_mobile.html.twig' %}
            {% endblock %}
        </div>
    </section>
</header>", "partials/header.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\header.html.twig");
    }
}

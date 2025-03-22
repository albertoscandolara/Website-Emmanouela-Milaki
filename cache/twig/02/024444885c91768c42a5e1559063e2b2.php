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
            'language_switcher' => [$this, 'block_language_switcher'],
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
        <div class=\"right-section\">
            <div class=\"menu-desktop-container\">
                ";
        // line 12
        $this->displayBlock('menu_desktop', $context, $blocks);
        // line 15
        echo "            </div>
            <div class=\"language-switcher-container\">
                ";
        // line 17
        $this->displayBlock('language_switcher', $context, $blocks);
        // line 20
        echo "            </div>
            <div class=\"menu-mobile-container\">
                ";
        // line 22
        $this->displayBlock('menu_mobile', $context, $blocks);
        // line 25
        echo "            </div>
        </div>
    </section>
</header>";
    }

    // line 12
    public function block_menu_desktop($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                    ";
        $this->loadTemplate("partials/menu_desktop.html.twig", "partials/header.html.twig", 13)->display($context);
        // line 14
        echo "                ";
    }

    // line 17
    public function block_language_switcher($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                    ";
        $this->loadTemplate("partials/components/language-switcher.html.twig", "partials/header.html.twig", 18)->display($context);
        // line 19
        echo "                ";
    }

    // line 22
    public function block_menu_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                    ";
        $this->loadTemplate("partials/menu_mobile.html.twig", "partials/header.html.twig", 23)->display($context);
        // line 24
        echo "                ";
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
        return array (  112 => 24,  109 => 23,  105 => 22,  101 => 19,  98 => 18,  94 => 17,  90 => 14,  87 => 13,  83 => 12,  76 => 25,  74 => 22,  70 => 20,  68 => 17,  64 => 15,  62 => 12,  54 => 7,  50 => 6,  45 => 4,  40 => 1,);
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
        <div class=\"right-section\">
            <div class=\"menu-desktop-container\">
                {% block menu_desktop %}
                    {% include 'partials/menu_desktop.html.twig' %}
                {% endblock %}
            </div>
            <div class=\"language-switcher-container\">
                {% block language_switcher %}
                    {% include 'partials/components/language-switcher.html.twig' %}
                {% endblock %}
            </div>
            <div class=\"menu-mobile-container\">
                {% block menu_mobile %}
                    {% include 'partials/menu_mobile.html.twig' %}
                {% endblock %}
            </div>
        </div>
    </section>
</header>", "partials/header.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\header.html.twig");
    }
}

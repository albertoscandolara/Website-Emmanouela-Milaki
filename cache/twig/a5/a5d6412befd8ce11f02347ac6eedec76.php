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

/* modular/news/newsletter-form.html.twig */
class __TwigTemplate_d12a8fac0e053a7d17fa810409b93840 extends \Twig\Template
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
        echo "<div class=\"newsletter\">
    <h3>Be the first to know the news!</h3>
    <p>Subscribe to our Newsletter to stay informed about school psychology issues, as well as the organization of lectures, experiential workshops and other activities!</p>

    ";
        // line 5
        $this->loadTemplate("forms/form.html.twig", "modular/news/newsletter-form.html.twig", 5)->display(twig_array_merge($context, ["form" => $this->env->getFunction('forms')->getCallable()("newsletter")]));
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modular/news/newsletter-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"newsletter\">
    <h3>Be the first to know the news!</h3>
    <p>Subscribe to our Newsletter to stay informed about school psychology issues, as well as the organization of lectures, experiential workshops and other activities!</p>

    {% include \"forms/form.html.twig\" with { form: forms('newsletter') } %}
</div>", "modular/news/newsletter-form.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\news\\newsletter-form.html.twig");
    }
}

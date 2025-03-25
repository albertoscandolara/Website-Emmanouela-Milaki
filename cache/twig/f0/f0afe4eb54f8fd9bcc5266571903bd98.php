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

/* partials/components/form-newsletter.html.twig */
class __TwigTemplate_f4a5ba254ea624b2c655a6b795831bfb extends \Twig\Template
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
        echo "<section class=\"form-newsletter-wrapper\">
    <div class=\"form-newsletter\">
        <div class=\"header\">
            <h3>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h3>
            <span>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "header", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
        </div>
        <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
            <ul class=\"controls\">
                <li class=\"control\">
                    <label for=\"email\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "EMAIL"), "html", null, true);
        echo "</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "ENTER_YOUR_EMAIL_ADDRESS"), "html", null, true);
        echo "\" required>
                </li>
            </ul>
            <button type=\"submit\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "SUBSCRIBE"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "SUBSCRIBE"), "html", null, true);
        echo "</button>
        </form>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/components/form-newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  61 => 11,  57 => 10,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"form-newsletter-wrapper\">
    <div class=\"form-newsletter\">
        <div class=\"header\">
            <h3>{{ module.header.title }}</h3>
            <span>{{ module.header.description }}</span>
        </div>
        <form method=\"post\" action=\"{{ page.url }}\">
            <ul class=\"controls\">
                <li class=\"control\">
                    <label for=\"email\">{{ \"EMAIL\"|t }}</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"{{ \"ENTER_YOUR_EMAIL_ADDRESS\"|t }}\" required>
                </li>
            </ul>
            <button type=\"submit\" title=\"{{ \"SUBSCRIBE\"|t }}\">{{ \"SUBSCRIBE\"|t }}</button>
        </form>
    </div>
</section>", "partials/components/form-newsletter.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\components\\form-newsletter.html.twig");
    }
}

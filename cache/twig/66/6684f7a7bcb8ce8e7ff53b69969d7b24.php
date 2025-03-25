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

/* partials/components/form-contact-us.html.twig */
class __TwigTemplate_d05b3d74b8303dbfe73e59d951656240 extends \Twig\Template
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
        echo "<section class=\"form-contact-us-wrapper\">
    <div class=\"form-contact-us\">
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
                    <label for=\"name\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "NAME"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "ENTER_YOUR_NAME"), "html", null, true);
        echo "\" required>
                </li>
                <li class=\"control\">
                    <label for=\"surname\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "SURNAME"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"surname\" name=\"surname\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "ENTER_YOUR_SURNAME"), "html", null, true);
        echo "\" required>
                </li>
                <li class=\"control\">
                    <label for=\"email\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "EMAIL"), "html", null, true);
        echo "</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "ENTER_YOUR_EMAIL_ADDRESS"), "html", null, true);
        echo "\" required>
                </li>
                <li class=\"control\">
                    <label for=\"message\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "MESSAGE"), "html", null, true);
        echo "</label>
                    <textarea id=\"message\" name=\"message\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "ENTER_YOUR_MESSAGE"), "html", null, true);
        echo "\" required minlength=\"10\"></textarea>
                </li>
            </ul>

            <button type=\"submit\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "SEND"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "SEND"), "html", null, true);
        echo "</button>
        </form>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "partials/components/form-contact-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  91 => 23,  87 => 22,  81 => 19,  77 => 18,  71 => 15,  67 => 14,  61 => 11,  57 => 10,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"form-contact-us-wrapper\">
    <div class=\"form-contact-us\">
        <div class=\"header\">
            <h3>{{ module.header.title }}</h3>
            <span>{{ module.header.description }}</span>
        </div>
        <form method=\"post\" action=\"{{ page.url }}\">
            <ul class=\"controls\">
                <li class=\"control\">
                    <label for=\"name\">{{ \"NAME\"|t }}</label>
                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"{{ \"ENTER_YOUR_NAME\"|t }}\" required>
                </li>
                <li class=\"control\">
                    <label for=\"surname\">{{ \"SURNAME\"|t }}</label>
                    <input type=\"text\" id=\"surname\" name=\"surname\" placeholder=\"{{ \"ENTER_YOUR_SURNAME\"|t }}\" required>
                </li>
                <li class=\"control\">
                    <label for=\"email\">{{ \"EMAIL\"|t }}</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"{{ \"ENTER_YOUR_EMAIL_ADDRESS\"|t }}\" required>
                </li>
                <li class=\"control\">
                    <label for=\"message\">{{ \"MESSAGE\"|t }}</label>
                    <textarea id=\"message\" name=\"message\" placeholder=\"{{ \"ENTER_YOUR_MESSAGE\"|t }}\" required minlength=\"10\"></textarea>
                </li>
            </ul>

            <button type=\"submit\" title=\"{{ \"SEND\"|t }}\">{{ \"SEND\"|t }}</button>
        </form>
    </div>
</section>

", "partials/components/form-contact-us.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\components\\form-contact-us.html.twig");
    }
}

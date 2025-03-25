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

/* forms/fields/2fa_secret/2fa_secret.html.twig */
class __TwigTemplate_efe34242a3c0671fe0e2fd9d2a0e7302 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/2fa_secret/2fa_secret.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"form-input-wrapper twofa-wrapper\">
        ";
        // line 5
        try {            // line 6
            echo "            ";
            $context["user"] = (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 6)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 6)) : (twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 6)));
            // line 7
            echo "
            ";
            // line 8
            $context["secret"] = ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twofa_secret", [], "any", false, false, false, 8)) ? (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twofa_secret", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "login", [], "any", false, false, false, 8), "twoFactorAuth", [], "any", false, false, false, 8), "createSecret", [], "method", false, false, false, 8)));
            // line 9
            echo "            ";
            $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "login", [], "any", false, false, false, 9), "twoFactorAuth", [], "any", false, false, false, 9), "getQrImageData", [0 => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 9), 1 => ($context["secret"] ?? null)], "method", false, false, false, 9);
            // line 10
            echo "
            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" />
            <div>
                <span>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_LOGIN.2FA_SECRET"), "html", null, true);
            echo ": </span><span class=\"twofa-secret-code\" data-2fa-secret>";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->regexReplace(($context["secret"] ?? null), "/(\\w{4})/", "\\1 "), "html", null, true);
            echo "</span>
            </div>

            <div class=\"danger twofa-wrapper\">
                <button data-hint=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_LOGIN.2FA_REGEN_HINT"), "html", null, true);
            echo "\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_LOGIN.2FA_REGENERATE"), "html", null, true);
            echo "</button>
            </div>

            <input type=\"text\" class=\"no-form\" style=\"display:none;\" name=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" data-2fa-value value=\"";
            echo twig_escape_filter($this->env, ($context["secret"] ?? null), "html", null, true);
            echo "\" />

        ";
        } catch (\Exception $e) {
            if (isset($context['grav']['debugger'])) $context['grav']['debugger']->addException($e);
            $context['e'] = $e;
            // line 23
            echo "            <div class=\"notice error\">
                <p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "message", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 27
        echo "    </div>

    ";
        // line 29
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method", false, false, false, 29);
        // line 30
        echo "    ";
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://login/js/2fa.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 30);
    }

    public function getTemplateName()
    {
        return "forms/fields/2fa_secret/2fa_secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  113 => 29,  109 => 27,  103 => 24,  100 => 23,  90 => 20,  82 => 17,  73 => 13,  68 => 11,  65 => 10,  62 => 9,  60 => 8,  57 => 7,  54 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"form-input-wrapper twofa-wrapper\">
        {% try %}
            {% set user = form.object ?? grav.user %}

            {% set secret = user.twofa_secret ?: grav.login.twoFactorAuth.createSecret() %}
            {% set image = grav.login.twoFactorAuth.getQrImageData(user.username, secret) %}

            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"{{ image }}\" />
            <div>
                <span>{{ 'PLUGIN_LOGIN.2FA_SECRET'|t }}: </span><span class=\"twofa-secret-code\" data-2fa-secret>{{ secret|regex_replace('/(\\\\w{4})/', '\\\\1 ') }}</span>
            </div>

            <div class=\"danger twofa-wrapper\">
                <button data-hint=\"{{ 'PLUGIN_LOGIN.2FA_REGEN_HINT'|t }}\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> {{ 'PLUGIN_LOGIN.2FA_REGENERATE'|t }}</button>
            </div>

            <input type=\"text\" class=\"no-form\" style=\"display:none;\" name=\"{{ (scope ~ field.name)|fieldName }}\" data-2fa-value value=\"{{ secret }}\" />

        {% catch %}
            <div class=\"notice error\">
                <p>{{ e.message }}</p>
            </div>
        {% endcatch %}
    </div>

    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('plugin://login/js/2fa.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endblock %}
", "forms/fields/2fa_secret/2fa_secret.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\login\\templates\\forms\\fields\\2fa_secret\\2fa_secret.html.twig");
    }
}

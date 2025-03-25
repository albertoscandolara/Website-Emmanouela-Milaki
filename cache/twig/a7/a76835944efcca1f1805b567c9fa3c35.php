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

/* partials/userinfo-avatar-credit.html.twig */
class __TwigTemplate_bb45bea9badd95bc04b281482de61c3c extends \Twig\Template
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
        echo "<p class=\"avatar\">
";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AVATAR_BY"), "html", null, true);
        echo "

";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 4), "accounts", [], "any", false, false, false, 4), "avatar", [], "any", false, false, false, 4) == "gravatar")) {
            // line 5
            echo "<a href=\"https://gravatar.com\" target=\"_blank\" rel=\"noopener noreferrer\">gravatar.com</a>.
";
        } else {
            // line 7
            echo "<a href=\"https://multiavatar.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Multiavatar</a>.
";
        }
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AVATAR_UPLOAD_OWN"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar-credit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  55 => 9,  51 => 7,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"avatar\">
{{ \"PLUGIN_ADMIN.AVATAR_BY\"|t }}

{% if config.system.accounts.avatar == 'gravatar' %}
<a href=\"https://gravatar.com\" target=\"_blank\" rel=\"noopener noreferrer\">gravatar.com</a>.
{% else  %}
<a href=\"https://multiavatar.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Multiavatar</a>.
{% endif %}

{{ \"PLUGIN_ADMIN.AVATAR_UPLOAD_OWN\"|t }}</p>
", "partials/userinfo-avatar-credit.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\userinfo-avatar-credit.html.twig");
    }
}

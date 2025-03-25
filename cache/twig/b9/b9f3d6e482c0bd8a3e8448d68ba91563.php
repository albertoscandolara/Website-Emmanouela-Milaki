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

/* partials/modal-remove-package.html.twig */
class __TwigTemplate_cf98ec46840eac6e048204531bb9de49 extends \Twig\Template
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
        echo "<div class=\"remodal\"
     data-remodal-id=\"remove-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"remove-package-confirm\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVE_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONFIRM_REMOVAL", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                <button data-";
        // line 13
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-action=\"remove-package\" data-packages-slugs=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["package"] ?? null), "slug", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
            </div>
        </div>

        <div class=\"remove-package-dependencies hidden\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVED_SUCCESSFULLY", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
            <p>
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ADDITIONAL_DEPENDENCIES_CAN_BE_REMOVED", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "
            </p>
            <div>
                <ul class=\"package-dependencies-container\"></ul>
            </div>
            <div class=\"button-bar\">
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc((("/" . ($context["type"] ?? null)) . "s")), "html", null, true);
        echo "\" class=\"button secondary\"><i class=\"fa fa-fw fa-close\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <div class=\"remove-package-done hidden\">
            <h1>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVED_SUCCESSFULLY", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
            <div class=\"button-bar\">
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc((("/" . ($context["type"] ?? null)) . "s")), "html", null, true);
        echo "\" class=\"button secondary\"><i class=\"fa fa-fw fa-close\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <div class=\"remove-package-error hidden\">
            <h1>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ERROR_REMOVING_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-remove-package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  111 => 38,  101 => 33,  96 => 31,  86 => 26,  77 => 20,  72 => 18,  60 => 13,  56 => 12,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\"
     data-remodal-id=\"remove-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"remove-package-confirm\">
            <h1>{{ \"PLUGIN_ADMIN.REMOVE_THE\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
            <p class=\"bigger\">
                {{ \"PLUGIN_ADMIN.CONFIRM_REMOVAL\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
                <button data-{{ type }}-action=\"remove-package\" data-packages-slugs=\"{{ package.slug }}\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>
            </div>
        </div>

        <div class=\"remove-package-dependencies hidden\">
            <h1>{{ \"PLUGIN_ADMIN.REMOVED_SUCCESSFULLY\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
            <p>
                {{ \"PLUGIN_ADMIN.ADDITIONAL_DEPENDENCIES_CAN_BE_REMOVED\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}
            </p>
            <div>
                <ul class=\"package-dependencies-container\"></ul>
            </div>
            <div class=\"button-bar\">
                <a href=\"{{ admin_route('/' ~ type ~ 's') }}\" class=\"button secondary\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CLOSE\"|t }}</a>
            </div>
        </div>

        <div class=\"remove-package-done hidden\">
            <h1>{{ \"PLUGIN_ADMIN.REMOVED_SUCCESSFULLY\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
            <div class=\"button-bar\">
                <a href=\"{{ admin_route('/' ~ type ~ 's') }}\" class=\"button secondary\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CLOSE\"|t }}</a>
            </div>
        </div>

        <div class=\"remove-package-error hidden\">
            <h1>{{ \"PLUGIN_ADMIN.ERROR_REMOVING_THE\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
            </div>
        </div>
    </form>
</div>
", "partials/modal-remove-package.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\modal-remove-package.html.twig");
    }
}

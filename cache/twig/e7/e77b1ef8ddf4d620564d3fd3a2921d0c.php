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

/* partials/modal-reinstall-package.html.twig */
class __TwigTemplate_f483546e0809b2249de7d9434ec8d92a extends \Twig\Template
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
     data-remodal-id=\"reinstall-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"reinstall-package-confirm\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REINSTALL_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONFIRM_REINSTALL", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "
            </p>
            <p class=\"bigger hidden warning-reinstall-not-latest-release\">
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.WARNING_REINSTALL_NOT_LATEST_RELEASE"), "html", null, true);
        echo "
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>

                <button data-";
        // line 17
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-action=\"reinstall-package\"
                        data-package-slug=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["package"] ?? null), "slug", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                        data-package-type=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["package"] ?? null), "package_type", [], "any", false, false, false, 19), "html", null, true);
        echo "\"
                        data-package-name=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["package"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
                        data-package-current-version=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["package"] ?? null), "version", [], "any", false, false, false, 21), "html", null, true);
        echo "\"
                        class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>

                <div class=\"spinning-wheel hidden\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALLING"), "html", null, true);
        echo ".. <i class=\"fa fa-spinner fa-spin\"></i>
                </div>
            </div>
        </div>

        <div class=\"reinstall-package-done hidden\">
            <h1>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REINSTALLED_SUCCESSFULLY", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"reinstall-package-error hidden\">
            <h1>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ERROR_REINSTALLING_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-reinstall-package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  102 => 31,  93 => 25,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  62 => 15,  55 => 11,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\"
     data-remodal-id=\"reinstall-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"reinstall-package-confirm\">
            <h1>{{ \"PLUGIN_ADMIN.REINSTALL_THE\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
            <p class=\"bigger\">
                {{ \"PLUGIN_ADMIN.CONFIRM_REINSTALL\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}
            </p>
            <p class=\"bigger hidden warning-reinstall-not-latest-release\">
                {{ \"PLUGIN_ADMIN.WARNING_REINSTALL_NOT_LATEST_RELEASE\"|t }}
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>

                <button data-{{ type }}-action=\"reinstall-package\"
                        data-package-slug=\"{{ package.slug }}\"
                        data-package-type=\"{{ package.package_type }}\"
                        data-package-name=\"{{ package.name }}\"
                        data-package-current-version=\"{{ package.version }}\"
                        class=\"button\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>

                <div class=\"spinning-wheel hidden\">
                    {{ \"PLUGIN_ADMIN.INSTALLING\"|t }}.. <i class=\"fa fa-spinner fa-spin\"></i>
                </div>
            </div>
        </div>

        <div class=\"reinstall-package-done hidden\">
            <h1>{{ \"PLUGIN_ADMIN.REINSTALLED_SUCCESSFULLY\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
        </div>

        <div class=\"reinstall-package-error hidden\">
            <h1>{{ \"PLUGIN_ADMIN.ERROR_REINSTALLING_THE\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
        </div>
    </form>
</div>
", "partials/modal-reinstall-package.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\modal-reinstall-package.html.twig");
    }
}

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

/* partials/modal-add-package.html.twig */
class __TwigTemplate_ca07ae414cdfd81445493500182d6615 extends \Twig\Template
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
     data-packages-modal
     data-remodal-id=\"add-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"add-package-installing\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALLING"), "html", null, true);
        echo "</h1>

            <div class=\"loading\">
                <p>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LOADING"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"install-dependencies-package-container hidden\">
                <p><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DEPENDENCIES_NOT_MET_MESSAGE"), "html", null, true);
        echo "</strong></p>

                <div class=\"type-install hidden\">
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PACKAGES_NOT_INSTALLED"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>
                <div class=\"type-update hidden\">
                    <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PACKAGES_NEED_UPDATE"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>
                <div class=\"type-ignore hidden\">
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PACKAGES_SUGGESTED_UPDATE"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                    <a data-";
        // line 34
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-action=\"install-dependencies-and-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"install-package-container hidden\">
                <p>
                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.READY_TO_INSTALL_PACKAGES"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                    <a data-";
        // line 47
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-action=\"install-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"install-package-error hidden\">
                <p>
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ERROR_INSTALLING_PACKAGES"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</button>
                </div>
            </div>

            <div class=\"installing-dependencies hidden\">
                <p>
                    ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALLING_DEPENDENCIES"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"installing-package hidden\">
                <p>
                    ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALLING_PACKAGES"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>

            <div class=\"installation-complete hidden\">
                <p>
                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PACKAGES_SUCCESSFULLY_INSTALLED"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>
        </div>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-add-package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 81,  156 => 72,  146 => 65,  137 => 59,  128 => 53,  117 => 47,  113 => 46,  104 => 40,  93 => 34,  89 => 33,  81 => 28,  74 => 24,  67 => 20,  61 => 17,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\"
     data-packages-modal
     data-remodal-id=\"add-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"add-package-installing\">
            <h1>{{ \"PLUGIN_ADMIN.INSTALLING\"|t }}</h1>

            <div class=\"loading\">
                <p>
                    {{ \"PLUGIN_ADMIN.LOADING\"|t }}
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"install-dependencies-package-container hidden\">
                <p><strong>{{ \"PLUGIN_ADMIN.DEPENDENCIES_NOT_MET_MESSAGE\"|t }}</strong></p>

                <div class=\"type-install hidden\">
                    <p>{{ \"PLUGIN_ADMIN.PACKAGES_NOT_INSTALLED\"|t }}:</p>
                    <ul></ul>
                </div>
                <div class=\"type-update hidden\">
                    <p>{{ \"PLUGIN_ADMIN.PACKAGES_NEED_UPDATE\"|t }}:</p>
                    <ul></ul>
                </div>
                <div class=\"type-ignore hidden\">
                    <p>{{ \"PLUGIN_ADMIN.PACKAGES_SUGGESTED_UPDATE\"|t }}:</p>
                    <ul></ul>
                </div>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
                    <a data-{{ type }}-action=\"install-dependencies-and-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</a>
                </div>
            </div>

            <div class=\"install-package-container hidden\">
                <p>
                    {{ \"PLUGIN_ADMIN.READY_TO_INSTALL_PACKAGES\"|t }}
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
                    <a data-{{ type }}-action=\"install-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</a>
                </div>
            </div>

            <div class=\"install-package-error hidden\">
                <p>
                    {{ \"PLUGIN_ADMIN.ERROR_INSTALLING_PACKAGES\"|t }}
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CLOSE\"|t }}</button>
                </div>
            </div>

            <div class=\"installing-dependencies hidden\">
                <p>
                    {{ \"PLUGIN_ADMIN.INSTALLING_DEPENDENCIES\"|t }}
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"installing-package hidden\">
                <p>
                    {{ \"PLUGIN_ADMIN.INSTALLING_PACKAGES\"|t }}
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>

            <div class=\"installation-complete hidden\">
                <p>
                    {{ \"PLUGIN_ADMIN.PACKAGES_SUCCESSFULLY_INSTALLED\"|t }}
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>
        </div>

    </form>
</div>
", "partials/modal-add-package.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\modal-add-package.html.twig");
    }
}

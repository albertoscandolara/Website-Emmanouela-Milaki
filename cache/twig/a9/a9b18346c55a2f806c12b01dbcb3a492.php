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

/* flex-objects/types/default/modals/remove.html.twig */
class __TwigTemplate_e9e6df4ecd3b5de3702025666a75d1bb extends \Twig\Template
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
        echo "<div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
    <form>
        ";
        // line 4
        echo "        <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.DELETE_N"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("singular", ($context["name"] ?? null))), "html", null, true);
        echo "</h1>
        <p class=\"bigger\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.REALLY_DELETE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("singular", ($context["name"] ?? null)), null), "html", null, true);
        echo "
        </p>
        <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/modals/remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  55 => 9,  49 => 6,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
    <form>
        {# FIXME -name|singularize- is not translatable #}
        <h1>{{ 'PLUGIN_FLEX_OBJECTS.ACTION.DELETE_N'|tu }} {{ name|singularize|capitalize }}</h1>
        <p class=\"bigger\">
            {{ 'PLUGIN_FLEX_OBJECTS.ACTION.REALLY_DELETE'|tu( name|singularize, null ) }}
        </p>
        <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
        </div>
    </form>
</div>
", "flex-objects/types/default/modals/remove.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\modals\\remove.html.twig");
    }
}

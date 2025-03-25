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

/* partials/list-sort.html.twig */
class __TwigTemplate_daf1b383c7448dc363cfa619318a848e extends \Twig\Template
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
        echo "<form class=\"sort-actions\" data-grav-selectize=\"true\">
    <select>
        <option value=\"name\" selected>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.NAME"), "html", null, true);
        echo "</option>
        <option value=\"author\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AUTHOR"), "html", null, true);
        echo "</option>
        <option value=\"official\">GravTeam</option>
        <option value=\"premium\">Premium</option>
        <option value=\"release-date\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RELEASE_DATE"), "html", null, true);
        echo "</option>
        ";
        // line 8
        if (((($context["list_view"] ?? null) == "plugins") &&  !($context["installing"] ?? null))) {
            echo "<option value=\"enabled\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ENABLED"), "html", null, true);
            echo "</option>";
        }
        // line 9
        echo "        ";
        if ( !($context["installing"] ?? null)) {
            echo "<option value=\"updatable\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UPDATES_AVAILABLE"), "html", null, true);
            echo "</option>";
        }
        // line 10
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 10), "gpm", [], "any", false, false, false, 10), "releases", [], "any", false, false, false, 10) == "testing")) {
            echo "<option value=\"testing\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.TESTING"), "html", null, true);
            echo "</option>";
        }
        // line 11
        echo "    </select>
    <div class=\"sort-icon\"><i class=\"fa fa-fw fa-sort-amount-asc\"></i></div>
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/list-sort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  68 => 10,  61 => 9,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"sort-actions\" data-grav-selectize=\"true\">
    <select>
        <option value=\"name\" selected>{{ \"PLUGIN_ADMIN.NAME\"|t }}</option>
        <option value=\"author\">{{ \"PLUGIN_ADMIN.AUTHOR\"|t }}</option>
        <option value=\"official\">GravTeam</option>
        <option value=\"premium\">Premium</option>
        <option value=\"release-date\">{{ \"PLUGIN_ADMIN.RELEASE_DATE\"|t }}</option>
        {% if list_view == 'plugins' and not installing %}<option value=\"enabled\">{{ \"PLUGIN_ADMIN.ENABLED\"|t }}</option>{% endif %}
        {% if not installing %}<option value=\"updatable\">{{ \"PLUGIN_ADMIN.UPDATES_AVAILABLE\"|t }}</option>{% endif %}
        {% if config.system.gpm.releases == 'testing' %}<option value=\"testing\">{{ \"PLUGIN_ADMIN.TESTING\"|t }}</option>{% endif %}
    </select>
    <div class=\"sort-icon\"><i class=\"fa fa-fw fa-sort-amount-asc\"></i></div>
</form>
", "partials/list-sort.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\list-sort.html.twig");
    }
}

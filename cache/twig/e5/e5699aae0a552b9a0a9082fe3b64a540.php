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

/* partials/dashboard-maintenance.html.twig */
class __TwigTemplate_0bbb36637a5a5c996ad397a6d8381a7a extends \Twig\Template
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
        if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
            // line 2
            echo "    ";
            $context["backup"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "lastBackup", [], "method", false, false, false, 2);
            // line 3
            echo "
    <div id=\"updates\" class=\"dashboard-item dashboard-left\">
        <div class=\"secondary-accent default-box-shadow\">
            <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MAINTENANCE"), "html", null, true);
            echo "</h1>
            <div class=\"admin-update-charts\">
                <div class=\"updates-chart\" data-chart-name=\"updates\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 8
            echo twig_escape_filter($this->env, json_encode(["series" => [0 => 100, 1 => 0]]), "html_attr");
            echo "\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\"><span>-</span><em>";
            // line 11
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UPDATED")), "html", null, true);
            echo "</em></span>
                    </div>
                    <p class=\"js__updates-available-description\">&nbsp;</p>
                </div>
                <div class=\"backups-chart\" data-chart-name=\"backups\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 15
            echo twig_escape_filter($this->env, json_encode(["series" => [0 => twig_get_attribute($this->env, $this->source, ($context["backup"] ?? null), "chart_fill", [], "any", false, false, false, 15), 1 => twig_get_attribute($this->env, $this->source, ($context["backup"] ?? null), "chart_empty", [], "any", false, false, false, 15)]]), "html_attr");
            echo "\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\">";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["backup"] ?? null), "days", [], "any", false, false, false, 18);
            echo "<em>";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DAYS")), "html", null, true);
            echo "</em></span>
                    </div>
                    <p class=\"hidden\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LAST_BACKUP"), "html", null, true);
            echo "</p>
                </div>
            </div>

            <div class=\"flush-bottom button-bar\">
                <a class=\"button hidden\" href=\"#\" data-update-packages data-remodal-target=\"update-packages\"  data-plugin-action=\"start-packages-update\"><i class=\"fa fa-cloud-download\"></i> ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UPDATE"), "html", null, true);
            echo "</a>
                ";
            // line 26
            $this->loadTemplate("partials/backups-button.html.twig", "partials/dashboard-maintenance.html.twig", 26)->display($context);
            // line 27
            echo "            </div>
        </div>
    </div>

    ";
            // line 31
            $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/dashboard-maintenance.html.twig", 31)->display(twig_array_merge($context, ["type" => "plugin"]));
            // line 32
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/dashboard-maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  98 => 31,  92 => 27,  90 => 26,  86 => 25,  78 => 20,  71 => 18,  65 => 15,  58 => 11,  52 => 8,  47 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.maintenance', 'admin.super']) %}
    {% set backup = admin.lastBackup() %}

    <div id=\"updates\" class=\"dashboard-item dashboard-left\">
        <div class=\"secondary-accent default-box-shadow\">
            <h1>{{ \"PLUGIN_ADMIN.MAINTENANCE\"|t }}</h1>
            <div class=\"admin-update-charts\">
                <div class=\"updates-chart\" data-chart-name=\"updates\" data-chart-type=\"pie\" data-chart-data=\"{{ {'series': [100, 0]}|json_encode|e('html_attr') }}\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\"><span>-</span><em>{{ \"PLUGIN_ADMIN.UPDATED\"|t|lower }}</em></span>
                    </div>
                    <p class=\"js__updates-available-description\">&nbsp;</p>
                </div>
                <div class=\"backups-chart\" data-chart-name=\"backups\" data-chart-type=\"pie\" data-chart-data=\"{{ {'series': [backup.chart_fill, backup.chart_empty]}|json_encode|e('html_attr') }}\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\">{{ backup.days|raw }}<em>{{ \"PLUGIN_ADMIN.DAYS\"|t|lower }}</em></span>
                    </div>
                    <p class=\"hidden\">{{ \"PLUGIN_ADMIN.LAST_BACKUP\"|t }}</p>
                </div>
            </div>

            <div class=\"flush-bottom button-bar\">
                <a class=\"button hidden\" href=\"#\" data-update-packages data-remodal-target=\"update-packages\"  data-plugin-action=\"start-packages-update\"><i class=\"fa fa-cloud-download\"></i> {{ \"PLUGIN_ADMIN.UPDATE\"|t }}</a>
                {% include 'partials/backups-button.html.twig' %}
            </div>
        </div>
    </div>

    {% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}

{% endif %}
", "partials/dashboard-maintenance.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-maintenance.html.twig");
    }
}

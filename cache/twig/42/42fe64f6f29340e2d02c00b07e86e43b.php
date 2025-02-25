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

/* partials/dashboard-statistics.html.twig */
class __TwigTemplate_7669611f70a00b9d8ac37eb4e3fbef25 extends \Twig\Template
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
        if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.statistics", 1 => "admin.super"])) {
            // line 2
            echo "    <div id=\"popularity\" class=\"dashboard-item dashboard-right\" data-chart-name=\"popularity\" data-chart-type=\"bar\" data-chart-data=\"";
            echo twig_escape_filter($this->env, json_encode(["series" => [0 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["popularity"] ?? null), "getDailyChartData", [], "any", false, false, false, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["data"] ?? null) : null)], "labels" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["popularity"] ?? null), "getDailyChartData", [], "any", false, false, false, 2)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["labels"] ?? null) : null)]), "html_attr");
            echo "\">
        <div class=\"primary-accent default-box-shadow\">
            <h1>";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.VIEWS_STATISTICS"), "html", null, true);
            echo "</h1>
            <div class=\"admin-statistics-chart\">
                <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                <div class=\"flush-bottom button-bar stats-bar\">
                    <span class=\"stat\">
                        <b>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["popularity"] ?? null), "getDailyTotal", [], "any", false, false, false, 9), "html", null, true);
            echo "</b>
                        <i>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.TODAY"), "html", null, true);
            echo "</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["popularity"] ?? null), "getWeeklyTotal", [], "any", false, false, false, 13), "html", null, true);
            echo "</b>
                        <i>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.WEEK"), "html", null, true);
            echo "</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["popularity"] ?? null), "getMonthlyTotal", [], "any", false, false, false, 17), "html", null, true);
            echo "</b>
                        <i>";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MONTH"), "html", null, true);
            echo "</i>
                    </span>
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/dashboard-statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  73 => 17,  67 => 14,  63 => 13,  57 => 10,  53 => 9,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.statistics', 'admin.super']) %}
    <div id=\"popularity\" class=\"dashboard-item dashboard-right\" data-chart-name=\"popularity\" data-chart-type=\"bar\" data-chart-data=\"{{ {'series': [popularity.getDailyChartData['data']], 'labels': popularity.getDailyChartData['labels']}|json_encode|e('html_attr') }}\">
        <div class=\"primary-accent default-box-shadow\">
            <h1>{{ \"PLUGIN_ADMIN.VIEWS_STATISTICS\"|t }}</h1>
            <div class=\"admin-statistics-chart\">
                <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                <div class=\"flush-bottom button-bar stats-bar\">
                    <span class=\"stat\">
                        <b>{{ popularity.getDailyTotal }}</b>
                        <i>{{ \"PLUGIN_ADMIN.TODAY\"|t }}</i>
                    </span>
                    <span class=\"stat\">
                        <b>{{ popularity.getWeeklyTotal }}</b>
                        <i>{{ \"PLUGIN_ADMIN.WEEK\"|t }}</i>
                    </span>
                    <span class=\"stat\">
                        <b>{{ popularity.getMonthlyTotal }}</b>
                        <i>{{ \"PLUGIN_ADMIN.MONTH\"|t }}</i>
                    </span>
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "partials/dashboard-statistics.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-statistics.html.twig");
    }
}

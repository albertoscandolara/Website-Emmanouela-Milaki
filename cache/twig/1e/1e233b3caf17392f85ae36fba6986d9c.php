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

/* partials/backups-button.html.twig */
class __TwigTemplate_61e3b739610bc4bb06bf04f75871c1ad extends \Twig\Template
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
        echo "<div class=\"button-group\">
    ";
        // line 2
        $context["profiles"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "backups", [], "any", false, false, false, 2), "getBackupProfiles", [], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["backup_url"] = twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url_relative"] ?? null) . "/backup.json/id") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 3), "param_sep", [], "any", false, false, false, 3)) . "%BACKUP_ID/task") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 3), "param_sep", [], "any", false, false, false, 3)) . "backup"), 1 => "admin-form", 2 => "admin-nonce"], "method", false, false, false, 3);
        // line 4
        echo "
    <button class=\"button\" data-backup data-ajax=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_replace_filter(($context["backup_url"] ?? null), ["%BACKUP_ID" => "0"]), "html", null, true);
        echo "\">
        <i class=\"fa fa-life-ring\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUP_NOW"), "html", null, true);
        echo "
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["profile"]) {
            // line 13
            echo "            <li>
                <a data-backup data-ajax=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_replace_filter(($context["backup_url"] ?? null), ["%BACKUP_ID" => $context["id"]]), "html", null, true);
            echo "\" class=\"button\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <li>
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/tools/backups"), "html", null, true);
        echo "\" class=\"button\">Backups Manager</a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/backups-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  79 => 17,  68 => 14,  65 => 13,  61 => 12,  52 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"button-group\">
    {% set profiles = grav.backups.getBackupProfiles() %}
    {% set backup_url = uri.addNonce(base_url_relative ~ \"/backup.json/id\" ~ config.system.param_sep ~ \"%BACKUP_ID/task\" ~ config.system.param_sep ~ \"backup\", 'admin-form', 'admin-nonce') %}

    <button class=\"button\" data-backup data-ajax=\"{{ backup_url|replace({'%BACKUP_ID':'0'}) }}\">
        <i class=\"fa fa-life-ring\"></i> {{ \"PLUGIN_ADMIN.BACKUP_NOW\"|t }}
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        {% for id, profile in profiles %}
            <li>
                <a data-backup data-ajax=\"{{ backup_url|replace({'%BACKUP_ID':id}) }}\" class=\"button\">{{ profile.name }}</a>
            </li>
        {% endfor %}
        <li>
            <a href=\"{{ admin_route('/tools/backups') }}\" class=\"button\">Backups Manager</a>
        </li>
    </ul>
</div>
", "partials/backups-button.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\backups-button.html.twig");
    }
}

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

/* partials/dashboard-problems.html.twig */
class __TwigTemplate_850754e0e3a81a846d5b621cb725e53e extends \Twig\Template
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
        if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize([0 => "admin.plugins", 1 => "admin.super"]) && (null === (($__internal_compile_0 = ($context["grav"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["flex_objects"] ?? null) : null)))) {
            // line 2
            echo "    <div id=\"dependency-missing\" class=\"dashboard-item-flex\">
        <div class=\"alert warning\">
            <h1>Admin plugin dependency is missing</h1>

            <p>Admin now requires the Flex Objects plugin for managing <em>User Accounts</em> and <em>Flex Pages</em>. For more information, please <a href=\"https://learn.getgrav.org/17/admin-panel/faq#flex-objects\">check the documentation</a>.</p>
            <p><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins/flex-objects"), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-download\"></i> Install and enable Flex Objects plugin</a></p>
        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/dashboard-problems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.plugins', 'admin.super']) and grav['flex_objects'] is null %}
    <div id=\"dependency-missing\" class=\"dashboard-item-flex\">
        <div class=\"alert warning\">
            <h1>Admin plugin dependency is missing</h1>

            <p>Admin now requires the Flex Objects plugin for managing <em>User Accounts</em> and <em>Flex Pages</em>. For more information, please <a href=\"https://learn.getgrav.org/17/admin-panel/faq#flex-objects\">check the documentation</a>.</p>
            <p><a href=\"{{ admin_route('/plugins/flex-objects') }}\" class=\"button\"><i class=\"fa fa-download\"></i> Install and enable Flex Objects plugin</a></p>
        </div>
    </div>

{% endif %}
", "partials/dashboard-problems.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-problems.html.twig");
    }
}

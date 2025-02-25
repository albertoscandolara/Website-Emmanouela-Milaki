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

/* flex-objects/types/pages/buttons/copy.html.twig */
class __TwigTemplate_1b25bff3ec84432d13933211f8d73e24 extends \Twig\Template
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
        // line 2
        echo "<a id=\"titlebar-button-copy\" href=\"#modal-page-copy\" data-remodal-target=\"modal-page-copy\" class=\"button page-copy\">
    <i class=\"fa fa-copy\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# href=\"{{ uri.addNonce(route.withoutParams().withGravParam('task', 'copy').getUri(), 'admin-form', 'admin-nonce') }}\" #}
<a id=\"titlebar-button-copy\" href=\"#modal-page-copy\" data-remodal-target=\"modal-page-copy\" class=\"button page-copy\">
    <i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}
</a>
", "flex-objects/types/pages/buttons/copy.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\copy.html.twig");
    }
}

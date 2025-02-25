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

/* @Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/01.home/03._ethics */
class __TwigTemplate_1e5ef090ed22bbc8283ab2914c58a81b extends \Twig\Template
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
        echo "<h3 style=\"color:red\">ERROR: <code>modular/home/template-2.html.twig</code> template not found for page: <code>/home/_ethics</code></h3>
<h1>Ethics</h1>

";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/01.home/03._ethics";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 style=\"color:red\">ERROR: <code>modular/home/template-2.html.twig</code> template not found for page: <code>/home/_ethics</code></h3>
<h1>Ethics</h1>

", "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/01.home/03._ethics", "");
    }
}

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

/* modular/map.html.twig */
class __TwigTemplate_0fd3a8628223ab187bd6cb06d8e9b47b extends \Twig\Template
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
        echo "<div class=\"map-section\">
    <iframe 
        src=\"https://www.google.com/maps/embed?pb=YourGoogleMapsEmbedCodeHere\" 
        width=\"100%\" 
        height=\"450\" 
        style=\"border:0;\" 
        allowfullscreen 
        loading=\"lazy\">
    </iframe>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"map-section\">
    <iframe 
        src=\"https://www.google.com/maps/embed?pb=YourGoogleMapsEmbedCodeHere\" 
        width=\"100%\" 
        height=\"450\" 
        style=\"border:0;\" 
        allowfullscreen 
        loading=\"lazy\">
    </iframe>
</div>", "modular/map.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\map.html.twig");
    }
}

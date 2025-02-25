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

/* modular/social.html.twig */
class __TwigTemplate_651ccd7cf680695076704db637efdbbf extends \Twig\Template
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
        echo "<div class=\"social-links\">
    <ul>
        <li><a href=\"https://www.linkedin.com/your-profile\" target=\"_blank\">LinkedIn</a></li>
        <li><a href=\"https://www.instagram.com/your-profile\" target=\"_blank\">Instagram</a></li>
        <li><a href=\"https://www.facebook.com/your-profile\" target=\"_blank\">Facebook</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/social.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"social-links\">
    <ul>
        <li><a href=\"https://www.linkedin.com/your-profile\" target=\"_blank\">LinkedIn</a></li>
        <li><a href=\"https://www.instagram.com/your-profile\" target=\"_blank\">Instagram</a></li>
        <li><a href=\"https://www.facebook.com/your-profile\" target=\"_blank\">Facebook</a></li>
    </ul>
</div>", "modular/social.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\modular\\social.html.twig");
    }
}

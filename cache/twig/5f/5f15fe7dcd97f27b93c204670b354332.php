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

/* modular/contacts/map.html.twig */
class __TwigTemplate_c4cc71b59db35e1bf86c1dbf646978f2 extends \Twig\Template
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
        echo "<article class=\"map-wrapper\">
    <div class=\"map\">
        <iframe class=\"map-iframe\"
            frameborder=\"0\"
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.159838481589!2d25.14458!3d35.33856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149f4f36e5599c93%3A0x253f9e088cc1c8e6!2sNikolaidi%2019%2C%2071305%2C%20Heraklion%2C%20Greece!5e0!3m2!1sen!2sus!4v1673964075197!5m2!1sen!2sus\"
            allowfullscreen>
        </iframe>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "modular/contacts/map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"map-wrapper\">
    <div class=\"map\">
        <iframe class=\"map-iframe\"
            frameborder=\"0\"
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.159838481589!2d25.14458!3d35.33856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149f4f36e5599c93%3A0x253f9e088cc1c8e6!2sNikolaidi%2019%2C%2071305%2C%20Heraklion%2C%20Greece!5e0!3m2!1sen!2sus!4v1673964075197!5m2!1sen!2sus\"
            allowfullscreen>
        </iframe>
    </div>
</article>", "modular/contacts/map.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\modular\\contacts\\map.html.twig");
    }
}

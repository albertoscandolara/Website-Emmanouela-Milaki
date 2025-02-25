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

/* @Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/01.home/01._intro */
class __TwigTemplate_40ac28cb0eb17c0e2c7f100760bc32da extends \Twig\Template
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
        echo "<article class=\"template-2-wrapper\">
    <div class=\"template-2\">
                <section class=\"body\">
            <section class=\"left\">
                                            </section>
            <section class=\"right\">
                            </section>
        </section>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/01.home/01._intro";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"template-2-wrapper\">
    <div class=\"template-2\">
                <section class=\"body\">
            <section class=\"left\">
                                            </section>
            <section class=\"right\">
                            </section>
        </section>
    </div>
</article>
", "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/01.home/01._intro", "");
    }
}

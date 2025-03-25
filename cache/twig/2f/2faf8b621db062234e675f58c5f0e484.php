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

/* @Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/04.contacts/06._newsletter */
class __TwigTemplate_daa4128ff3748acee207732992e73d19 extends \Twig\Template
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
        echo "<section class=\"form-newsletter-wrapper\">
    <div class=\"form-newsletter\">
        <div class=\"header\">
            <h3></h3>
            <span></span>
        </div>
        <form method=\"post\" action=\"/en/contacts/_newsletter\">
            <ul class=\"controls\">
                <li class=\"control\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Enter your email address\" required>
                </li>
            </ul>
            <button type=\"submit\">Subscribe</button>
        </form>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/04.contacts/06._newsletter";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"form-newsletter-wrapper\">
    <div class=\"form-newsletter\">
        <div class=\"header\">
            <h3></h3>
            <span></span>
        </div>
        <form method=\"post\" action=\"/en/contacts/_newsletter\">
            <ul class=\"controls\">
                <li class=\"control\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Enter your email address\" required>
                </li>
            </ul>
            <button type=\"submit\">Subscribe</button>
        </form>
    </div>
</section>", "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/04.contacts/06._newsletter", "");
    }
}

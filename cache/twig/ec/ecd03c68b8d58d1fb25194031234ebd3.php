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

/* @Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/04.contacts/05._mail */
class __TwigTemplate_6ad5102f2d77589f52039dba488dd344 extends \Twig\Template
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
        echo "<section class=\"form-contact-us-wrapper\">
    <div class=\"form-contact-us\">
        <div class=\"header\">
            <h3></h3>
            <span></span>
        </div>
        <form method=\"post\" action=\"/en/contacts/_mail\">
            <ul class=\"controls\">
                <li class=\"control\">
                    <label for=\"name\">Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Enter your name\" required>
                </li>
                <li class=\"control\">
                    <label for=\"surname\">Surname</label>
                    <input type=\"text\" id=\"surname\" name=\"surname\" placeholder=\"Enter your surname\" required>
                </li>
                <li class=\"control\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Enter your email address\" required>
                </li>
                <li class=\"control\">
                    <label for=\"message\">Message</label>
                    <textarea id=\"message\" name=\"message\" placeholder=\"Enter your message\" required minlength=\"10\"></textarea>
                </li>
            </ul>

            <button type=\"submit\" title=\"Send\">Send</button>
        </form>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/04.contacts/05._mail";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"form-contact-us-wrapper\">
    <div class=\"form-contact-us\">
        <div class=\"header\">
            <h3></h3>
            <span></span>
        </div>
        <form method=\"post\" action=\"/en/contacts/_mail\">
            <ul class=\"controls\">
                <li class=\"control\">
                    <label for=\"name\">Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Enter your name\" required>
                </li>
                <li class=\"control\">
                    <label for=\"surname\">Surname</label>
                    <input type=\"text\" id=\"surname\" name=\"surname\" placeholder=\"Enter your surname\" required>
                </li>
                <li class=\"control\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Enter your email address\" required>
                </li>
                <li class=\"control\">
                    <label for=\"message\">Message</label>
                    <textarea id=\"message\" name=\"message\" placeholder=\"Enter your message\" required minlength=\"10\"></textarea>
                </li>
            </ul>

            <button type=\"submit\" title=\"Send\">Send</button>
        </form>
    </div>
</section>

", "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/04.contacts/05._mail", "");
    }
}

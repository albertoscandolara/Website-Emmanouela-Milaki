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

/* partials/footer.html.twig */
class __TwigTemplate_223cfee610a2c914010d83107d69bed2 extends \Twig\Template
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
        echo "<footer>
    <section class=\"footer-content\">
        <section class=\"footer-section\">
            <h3>Contacts</h3>
            <ul id=\"container-contacts\" class=\"footer-section-container\">
                <li id=\"email\" class=\"footer-section-contact-item\">
                    <a href=\"mailto:emmamilaki.psy@gmail.com\">emmamilaki.psy@gmail.com</a>
                </li>
                <li id=\"phone\" class=\"footer-section-contact-item\">
                    <ul>
                        <li>
                            <a href=\"tel:+306955567349\">+30 6955567349</a>
                        </li>
                        <li>
                            <a href=\"tel:+35797796559\">+357 97796559</a>
                        </li>
                    </ul>
                </li>
                <li id=\"social\" class=\"footer-section-contact-item\">
                    <ul class=\"social-media\">
                        <li title=\"Connect with me on Linkedin\">
                            <a href=\"https://linkedin.com/in/milaki\" target=\"_blank\" aria-label=\"LinkedIn\">
                                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/icons/logos/linkedin/logo.svg"), "html", null, true);
        echo "\" alt=\"LinkedIn\" />
                            </a>
                        </li>
                        <li title=\"Connect with me on Instagram\">
                            <a href=\"https://instagram.com/milaki_psychologist\" target=\"_blank\" aria-label=\"Instagram\">
                                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/icons/logos/instagram/logo.svg"), "html", null, true);
        echo "\" alt=\"Instagram\" />
                            </a>
                        </li>
                        <li title=\"Connect with me on Facebook\">
                            <a href=\"https://facebook.com/EmmaMilaki\" target=\"_blank\" aria-label=\"Facebook\">
                                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/icons/logos/facebook/logo.svg"), "html", null, true);
        echo "\" alt=\"Facebook\" />
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <section class=\"footer-section\">
            <h3>Address</h3>
            <div id=\"container-map\" class=\"footer-section-container\">
                <span>Nikolaidi 19, 71305, Heraklion</span>
                <iframe
                    frameborder=\"0\"
                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.159838481589!2d25.14458!3d35.33856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149f4f36e5599c93%3A0x253f9e088cc1c8e6!2sNikolaidi%2019%2C%2071305%2C%20Heraklion%2C%20Greece!5e0!3m2!1sen!2sus!4v1673964075197!5m2!1sen!2sus\"
                    allowfullscreen>
                </iframe>
            </div>
        </section>
        <section class=\"footer-section newsletter\">
            <h3>Newsletter</h3>
            <div id=\"container-newsletter\" class=\"footer-section-container\">
                <span>Subscribe for updates on psychology topics and events!</span>
                <div class=\"input-container\">
                    <input type=\"email\" placeholder=\"Enter your email\" required>
                    <button type=\"submit\">Subscribe</button>
                </div>
            </div>
        </section>
    </section>
    <section style=\"text-align: center;\">
        <span>
            All consultations and communications are strictly confidential. This site does not store any data and does not provide medical advice or treatment recommendations.<br>
            © <script>document.write(new Date().getFullYear());</script> Emmanouela Milaki. All rights reserved. Icons by <a target=\"_blank\" href=\"https://icons8.com\">Icons8.</a>
        </span>
    </section>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  69 => 28,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <section class=\"footer-content\">
        <section class=\"footer-section\">
            <h3>Contacts</h3>
            <ul id=\"container-contacts\" class=\"footer-section-container\">
                <li id=\"email\" class=\"footer-section-contact-item\">
                    <a href=\"mailto:emmamilaki.psy@gmail.com\">emmamilaki.psy@gmail.com</a>
                </li>
                <li id=\"phone\" class=\"footer-section-contact-item\">
                    <ul>
                        <li>
                            <a href=\"tel:+306955567349\">+30 6955567349</a>
                        </li>
                        <li>
                            <a href=\"tel:+35797796559\">+357 97796559</a>
                        </li>
                    </ul>
                </li>
                <li id=\"social\" class=\"footer-section-contact-item\">
                    <ul class=\"social-media\">
                        <li title=\"Connect with me on Linkedin\">
                            <a href=\"https://linkedin.com/in/milaki\" target=\"_blank\" aria-label=\"LinkedIn\">
                                <img src=\"{{ url('theme://images/icons/logos/linkedin/logo.svg') }}\" alt=\"LinkedIn\" />
                            </a>
                        </li>
                        <li title=\"Connect with me on Instagram\">
                            <a href=\"https://instagram.com/milaki_psychologist\" target=\"_blank\" aria-label=\"Instagram\">
                                <img src=\"{{ url('theme://images/icons/logos/instagram/logo.svg') }}\" alt=\"Instagram\" />
                            </a>
                        </li>
                        <li title=\"Connect with me on Facebook\">
                            <a href=\"https://facebook.com/EmmaMilaki\" target=\"_blank\" aria-label=\"Facebook\">
                                <img src=\"{{ url('theme://images/icons/logos/facebook/logo.svg') }}\" alt=\"Facebook\" />
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <section class=\"footer-section\">
            <h3>Address</h3>
            <div id=\"container-map\" class=\"footer-section-container\">
                <span>Nikolaidi 19, 71305, Heraklion</span>
                <iframe
                    frameborder=\"0\"
                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.159838481589!2d25.14458!3d35.33856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149f4f36e5599c93%3A0x253f9e088cc1c8e6!2sNikolaidi%2019%2C%2071305%2C%20Heraklion%2C%20Greece!5e0!3m2!1sen!2sus!4v1673964075197!5m2!1sen!2sus\"
                    allowfullscreen>
                </iframe>
            </div>
        </section>
        <section class=\"footer-section newsletter\">
            <h3>Newsletter</h3>
            <div id=\"container-newsletter\" class=\"footer-section-container\">
                <span>Subscribe for updates on psychology topics and events!</span>
                <div class=\"input-container\">
                    <input type=\"email\" placeholder=\"Enter your email\" required>
                    <button type=\"submit\">Subscribe</button>
                </div>
            </div>
        </section>
    </section>
    <section style=\"text-align: center;\">
        <span>
            All consultations and communications are strictly confidential. This site does not store any data and does not provide medical advice or treatment recommendations.<br>
            © <script>document.write(new Date().getFullYear());</script> Emmanouela Milaki. All rights reserved. Icons by <a target=\"_blank\" href=\"https://icons8.com\">Icons8.</a>
        </span>
    </section>
</footer>", "partials/footer.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}

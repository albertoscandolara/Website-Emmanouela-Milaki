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

/* partials/components/language-switcher.html.twig */
class __TwigTemplate_74cdd2b4ed25de26b54c318fff97c41c extends \Twig\Template
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
        $context["lang"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 1), "getActive", [], "any", false, false, false, 1);
        // line 2
        $context["newLang"] = (((($context["lang"] ?? null) == "en")) ? ("gr") : ("en"));
        // line 3
        echo "
";
        // line 5
        $context["baseRoute"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rawRoute", [], "any", false, false, false, 5);
        // line 6
        echo "
";
        // line 8
        $context["translatedUrl"] = (("/" . ($context["newLang"] ?? null)) . ($context["baseRoute"] ?? null));
        // line 9
        echo "
<div class=\"toggle-container\">
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["translatedUrl"] ?? null), "html", null, true);
        echo "\" class=\"toggle-circle\">
        <img class=\"toggle-img img-left\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/icons/flags/greece.svg\" alt=\"Greek Flag\">
        <img class=\"toggle-img img-right\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/icons/flags/united kingdom.svg\" alt=\"English Flag\">
    </a>
</div>


<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const toggleContainer = document.querySelector(\".toggle-container\");

    const langPrefixes = [\"en\", \"gr\"];
    const currentPath = window.location.pathname.split(\"/\").filter(Boolean); // Remove empty entries

    let currentLang = langPrefixes.includes(currentPath[0]) ? currentPath[0] : \"gr\"; // Default to 'gr'
    let oppositeLang = currentLang === \"en\" ? \"gr\" : \"en\";

    // Set active class for language toggle
    if (currentLang === \"en\") {
        toggleContainer.classList.add(\"active\");
    } else {
        toggleContainer.classList.remove(\"active\");
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/components/language-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  59 => 12,  55 => 11,  51 => 9,  49 => 8,  46 => 6,  44 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set lang = grav.language.getActive %}
{% set newLang = lang == 'en' ? 'gr' : 'en' %}

{# Get the route without the current language prefix #}
{% set baseRoute = page.rawRoute %}

{# Generate the translated URL with the correct prefix #}
{% set translatedUrl = '/' ~ newLang ~ baseRoute %}

<div class=\"toggle-container\">
    <a href=\"{{ translatedUrl }}\" class=\"toggle-circle\">
        <img class=\"toggle-img img-left\" src=\"{{ theme_url }}/images/icons/flags/greece.svg\" alt=\"Greek Flag\">
        <img class=\"toggle-img img-right\" src=\"{{ theme_url }}/images/icons/flags/united kingdom.svg\" alt=\"English Flag\">
    </a>
</div>


<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const toggleContainer = document.querySelector(\".toggle-container\");

    const langPrefixes = [\"en\", \"gr\"];
    const currentPath = window.location.pathname.split(\"/\").filter(Boolean); // Remove empty entries

    let currentLang = langPrefixes.includes(currentPath[0]) ? currentPath[0] : \"gr\"; // Default to 'gr'
    let oppositeLang = currentLang === \"en\" ? \"gr\" : \"en\";

    // Set active class for language toggle
    if (currentLang === \"en\") {
        toggleContainer.classList.add(\"active\");
    } else {
        toggleContainer.classList.remove(\"active\");
    }
});
</script>
", "partials/components/language-switcher.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\themes\\quark\\templates\\partials\\components\\language-switcher.html.twig");
    }
}

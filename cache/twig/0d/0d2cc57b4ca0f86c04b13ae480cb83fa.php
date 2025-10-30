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

/* partials/base.html.twig */
class __TwigTemplate_4c836a6bcc8229622702faed644fc0db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 4
        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'header' => [$this, 'block_header'],
                'body' => [$this, 'block_body'],
                'footer' => [$this, 'block_footer'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["body_classes"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getActive", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getActive", [], "any", false, false, false, 6)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 6), "site", [], "any", false, false, false, 6), "default_lang", [], "any", false, false, false, 6))), "html", null, true);
        echo "\">
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('assets', $context, $blocks);
        // line 32
        echo "</head>
<body>
    <section class=\"website-wrapper\">
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('bottom', $context, $blocks);
        // line 50
        echo "    </section>
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10), "html");
        }
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.svg"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [0 => true, 1 => true], "method", false, false, false, 17), "html", null, true);
        echo "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method", false, false, false, 21);
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "theme://js/item.js", 1 => ["group" => "bottom"]], "method", false, false, false, 25);
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 28
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 29);
        echo "
    ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 30);
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 36)->display($context);
        // line 37
        echo "        ";
    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "            ";
        $this->loadTemplate("partials/body.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "        ";
    }

    // line 43
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "        ";
    }

    // line 47
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "js", [0 => "bottom"], "method", false, false, false, 48);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 48,  226 => 47,  222 => 45,  219 => 44,  215 => 43,  211 => 41,  208 => 40,  204 => 39,  200 => 37,  197 => 36,  193 => 35,  186 => 30,  181 => 29,  178 => 28,  168 => 25,  164 => 24,  159 => 21,  155 => 20,  148 => 17,  144 => 16,  141 => 15,  139 => 14,  130 => 10,  127 => 9,  124 => 8,  111 => 50,  109 => 47,  106 => 46,  104 => 43,  101 => 42,  99 => 39,  96 => 38,  94 => 35,  89 => 32,  87 => 28,  84 => 27,  82 => 24,  79 => 23,  77 => 20,  74 => 19,  72 => 8,  67 => 6,  64 => 5,  62 => 3,  60 => 2,  58 => 1,  30 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }}{% endif %}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.svg') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('theme://js/item.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body>
    <section class=\"website-wrapper\">
        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% include 'partials/body.html.twig' %}
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </section>
</body>
</html>
", "partials/base.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}

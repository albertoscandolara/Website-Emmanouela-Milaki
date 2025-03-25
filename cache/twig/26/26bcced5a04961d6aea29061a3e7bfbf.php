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

/* partials/notification-plugins-block.html.twig */
class __TwigTemplate_89db1f711c5b27269a69a81bbb2d23e2 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["entry_id"] => $context["entry"]) {
            // line 2
            echo "    <div class=\"alert ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 2), "html", null, true);
            echo " position-plugins\">
        <a href=\"#\" data-notification-action=\"hide-notification\" data-notification-id=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\" class=\"close hide-notification\"><i class=\"fa fa-close\"></i></a>
        ";
            // line 4
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "message", [], "any", false, false, false, 4);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['entry_id'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/notification-plugins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for entry_id, entry in notifications %}
    <div class=\"alert {{ entry.type }} position-plugins\">
        <a href=\"#\" data-notification-action=\"hide-notification\" data-notification-id=\"{{ entry.id }}\" class=\"close hide-notification\"><i class=\"fa fa-close\"></i></a>
        {{ entry.message|raw }}
    </div>
{% endfor %}
", "partials/notification-plugins-block.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\notification-plugins-block.html.twig");
    }
}

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

/* forms/fields/nonce/nonce.html.twig */
class __TwigTemplate_0e930237d05e7cf54e0d9b769ba4a47c extends \Twig\Template
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
        echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 1)) : ("form")), (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 1)) : ("form-nonce")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/nonce/nonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}
", "forms/fields/nonce/nonce.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\plugins\\form\\templates\\forms\\fields\\nonce\\nonce.html.twig");
    }
}

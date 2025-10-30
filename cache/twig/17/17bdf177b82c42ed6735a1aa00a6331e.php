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

/* forms/form.html.twig */
class __TwigTemplate_5123f1728d10fa28afa9c19225de9e2f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'xhr' => [$this, 'block_xhr'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_xhr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $this->loadTemplate("forms/layouts/xhr.html.twig", "forms/form.html.twig", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 33,  46 => 32,  35 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{#
DO NOT MODIFY!

Default layout can be found in form plugin or your theme:

templates/forms/layouts/form/default-form.html.twig
templates/forms/layouts/field/default-field.html.twig
templates/forms/layouts/button/default-button.html.twig

If you want to use multiple different layouts in your site, you can do:

```
form:
  name: my-form
  layout: tailwind
```

and copy the above files to:

templates/forms/layouts/form/tailwind-form.html.twig
templates/forms/layouts/field/tailwind-field.html.twig
templates/forms/layouts/button/tailwind-button.html.twig

You can also override individual fields by copying (using text field as an example):

templates/forms/fields/text/text.html.twig -> templates/forms/fields/text/tailwind-text.html.twig

#}

{% extends \"forms/default/form.html.twig\" %}

{% block xhr %}
{% include 'forms/layouts/xhr.html.twig' %}
{% endblock %}
", "forms/form.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\plugins\\form\\templates\\forms\\form.html.twig");
    }
}

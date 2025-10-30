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

/* forms/layouts/form/default-form.html.twig */
class __TwigTemplate_09ed5940c5109a9a53b4921b53f72bf4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form
    ";
        // line 2
        $this->displayBlock('embed_form_core', $context, $blocks);
        // line 3
        echo "    ";
        $this->displayBlock('embed_form_classes', $context, $blocks);
        // line 4
        echo "    ";
        $this->displayBlock('embed_form_custom_attributes', $context, $blocks);
        // line 5
        echo ">
  ";
        // line 6
        $this->displayBlock('embed_fields', $context, $blocks);
        // line 7
        echo "  ";
        $this->displayBlock('embed_buttons', $context, $blocks);
        // line 8
        echo "</form>
";
    }

    // line 2
    public function block_embed_form_core($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_embed_form_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_embed_form_custom_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_embed_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_embed_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "forms/layouts/form/default-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 7,  84 => 6,  78 => 4,  72 => 3,  66 => 2,  61 => 8,  58 => 7,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form
    {% block embed_form_core %}{% endblock %}
    {% block embed_form_classes %}{% endblock %}
    {% block embed_form_custom_attributes %}{% endblock %}
>
  {% block embed_fields %}{% endblock %}
  {% block embed_buttons %}{% endblock %}
</form>
", "forms/layouts/form/default-form.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\plugins\\form\\templates\\forms\\layouts\\form\\default-form.html.twig");
    }
}

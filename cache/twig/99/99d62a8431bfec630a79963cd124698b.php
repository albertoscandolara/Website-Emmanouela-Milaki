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

/* partials/login-form.html.twig */
class __TwigTemplate_2a7002c192bd4c90139d47c83d6ebde4 extends \Twig\Template
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
        $this->loadTemplate("partials/login-form.html.twig", "partials/login-form.html.twig", 1, "1279334211")->display(twig_array_merge($context, ["title" => "Grav Admin Login"]));
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
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
        return new Source("{% embed 'partials/login.html.twig' with {title: 'Grav Admin Login'} %}

{% block integration %}

    {# NEW WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
    {% for template in grav.login.getProviderLoginTemplates %}
        {% include template %}
    {% endfor %}

{% endblock %}

{% block form %}
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: form.fields} %}
        {% block inner_markup_field_open %}<div>{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    <div class=\"form-actions primary-accent\">
        <a class=\"button secondary\" href=\"{{ admin_route('/forgot') }}\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|t }}</a>
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|t }}</button>
    </div>

{% endblock %}

{% endembed %}
", "partials/login-form.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-form.html.twig");
    }
}


/* partials/login-form.html.twig */
class __TwigTemplate_2a7002c192bd4c90139d47c83d6ebde4___1279334211 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'integration' => [$this, 'block_integration'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/login.html.twig", "partials/login-form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_integration($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "login", [], "any", false, false, false, 6), "getProviderLoginTemplates", [], "any", false, false, false, 6));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 7
            echo "        ";
            $this->loadTemplate($context["template"], "partials/login-form.html.twig", 7)->display($context);
            // line 8
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
    }

    // line 12
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->loadTemplate("partials/login-form.html.twig", "partials/login-form.html.twig", 13, "1057753428")->display(twig_array_merge($context, ["name" => null, "fields" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 13)]));
        // line 17
        echo "
    <div class=\"form-actions primary-accent\">
        <a class=\"button secondary\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/forgot"), "html", null, true);
        echo "\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LOGIN_BTN_FORGOT"), "html", null, true);
        echo "</a>
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LOGIN_BTN"), "html", null, true);
        echo "</button>
    </div>

";
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 20,  176 => 19,  172 => 17,  169 => 13,  165 => 12,  160 => 9,  146 => 8,  143 => 7,  125 => 6,  122 => 4,  118 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title: 'Grav Admin Login'} %}

{% block integration %}

    {# NEW WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
    {% for template in grav.login.getProviderLoginTemplates %}
        {% include template %}
    {% endfor %}

{% endblock %}

{% block form %}
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: form.fields} %}
        {% block inner_markup_field_open %}<div>{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    <div class=\"form-actions primary-accent\">
        <a class=\"button secondary\" href=\"{{ admin_route('/forgot') }}\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|t }}</a>
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|t }}</button>
    </div>

{% endblock %}

{% endembed %}
", "partials/login-form.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-form.html.twig");
    }
}


/* partials/login-form.html.twig */
class __TwigTemplate_2a7002c192bd4c90139d47c83d6ebde4___1057753428 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "partials/login-form.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<div>";
    }

    // line 15
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 15,  268 => 14,  257 => 13,  182 => 20,  176 => 19,  172 => 17,  169 => 13,  165 => 12,  160 => 9,  146 => 8,  143 => 7,  125 => 6,  122 => 4,  118 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title: 'Grav Admin Login'} %}

{% block integration %}

    {# NEW WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
    {% for template in grav.login.getProviderLoginTemplates %}
        {% include template %}
    {% endfor %}

{% endblock %}

{% block form %}
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: form.fields} %}
        {% block inner_markup_field_open %}<div>{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    <div class=\"form-actions primary-accent\">
        <a class=\"button secondary\" href=\"{{ admin_route('/forgot') }}\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|t }}</a>
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|t }}</button>
    </div>

{% endblock %}

{% endembed %}
", "partials/login-form.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-form.html.twig");
    }
}

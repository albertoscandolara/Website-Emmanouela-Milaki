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

/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_03e1968dd4e8f85616ac1a530f71efcb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 3)) {
            // line 4
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 4);
            // line 5
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 5);
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/tabs/tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"form-tabs ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "class", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 9), "html", null, true);
        echo "\">

  ";
        // line 11
        $context["fields"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormFields($context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 11));
        // line 12
        echo "  ";
        if (twig_length_filter($this->env, ($context["fields"] ?? null))) {
            // line 13
            echo "    ";
            $context["tabs"] = [];
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 15
                echo "        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 15) == "tab") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "validate", [], "any", false, false, false, 15), "ignore", [], "any", false, false, false, 15)) && (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "security", [], "any", false, false, false, 15)) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize($this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(twig_get_attribute($this->env, $this->source, $context["tab"], "security", [], "any", false, false, false, 15)))))) {
                    // line 16
                    echo "        ";
                    $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), [0 => $context["tab"]]);
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            $context["count"] = twig_length_filter($this->env, ($context["tabs"] ?? null));
            // line 20
            echo "
    ";
            // line 21
            if ((($context["count"] ?? null) == 0)) {
                // line 22
                echo "        ";
                // line 23
                echo "    ";
            } elseif (((($context["count"] ?? null) == 1) &&  !($context["admin"] ?? null))) {
                // line 24
                echo "        ";
                $context["fields"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["tabs"] ?? null)), "fields", [], "any", false, false, false, 24);
                // line 25
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 26
                    echo "            ";
                    $context["value"] = ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26)) ? (((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26)], "method", false, false, false, 26)) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26)], "method", false, false, false, 26)))) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "toArray", [], "any", false, false, false, 26)));
                    // line 27
                    echo "            ";
                    $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 27), ($context["field_layout"] ?? null), "text");
                    // line 28
                    echo "            ";
                    $this->loadTemplate(($context["field_templates"] ?? null), "forms/fields/tabs/tabs.html.twig", 28)->display($context);
                    // line 29
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    ";
            } else {
                // line 31
                echo "        ";
                $context["tabsKey"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 31) . "-") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->md5Filter(twig_join_filter(twig_get_array_keys_filter(($context["fields"] ?? null)), ":")));
                // line 32
                echo "        ";
                $context["storedValue"] = ((twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 32)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonDecodeFilter(_twig_default_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie("grav-tabs-state"), "{}"))) : ([]));
                // line 33
                echo "        ";
                $context["storedTab"] = twig_get_attribute($this->env, $this->source, ($context["storedValue"] ?? null), ("tab-" . ($context["tabsKey"] ?? null)), [], "any", false, false, false, 33);
                // line 34
                echo "        ";
                if (twig_test_empty(($context["storedTab"] ?? null))) {
                    // line 35
                    echo "            ";
                    $context["active"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, true, false, 35), "tab", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, true, false, 35), "tab", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, true, false, 35), "tab", [], "any", false, false, false, 35)) : ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "active", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "active", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "active", [], "any", false, false, false, 35)) : (1))));
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "
        <div class=\"tabs-nav\">
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 40
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 40) == "tab") && ((null === twig_get_attribute($this->env, $this->source, $context["tab"], "condition", [], "any", false, false, false, 40)) || (twig_get_attribute($this->env, $this->source, $context["tab"], "condition", [], "any", false, false, false, 40) == true)))) {
                        // line 41
                        echo "                <a class=\"tab__link ";
                        echo ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 41))) || (($context["active"] ?? null) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41)))) ? ("active") : (""));
                        echo "\" data-tabid=\"tab-";
                        echo twig_escape_filter($this->env, (($context["tabsKey"] ?? null) . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41)), "html", null, true);
                        echo "\" data-tabkey=\"tab-";
                        echo twig_escape_filter($this->env, ($context["tabsKey"] ?? null), "html", null, true);
                        echo "\" data-scope=\"";
                        echo twig_escape_filter($this->env, (($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 41)), "html", null, true);
                        echo "\">
                <span>";
                        // line 42
                        echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 42)), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 44
                    echo "            </a>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        </div>
        <div class=\"tabs-content\">
            ";
                // line 48
                $this->loadTemplate("forms/fields/tabs/tabs.html.twig", "forms/fields/tabs/tabs.html.twig", 48, "133659323")->display(twig_array_merge($context, ["name" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 48), "fields" => ($context["fields"] ?? null)]));
                // line 56
                echo "        </div>
    ";
            }
        }
        // line 59
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 59,  233 => 56,  231 => 48,  227 => 46,  212 => 44,  207 => 42,  196 => 41,  193 => 40,  176 => 39,  172 => 37,  169 => 36,  166 => 35,  163 => 34,  160 => 33,  157 => 32,  154 => 31,  151 => 30,  137 => 29,  134 => 28,  131 => 27,  128 => 26,  110 => 25,  107 => 24,  104 => 23,  102 => 22,  100 => 21,  97 => 20,  94 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  74 => 14,  71 => 13,  68 => 12,  66 => 11,  58 => 9,  54 => 8,  49 => 1,  46 => 5,  44 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% if not grav.admin %}
{% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% block field %}
<div class=\"form-tabs {{ field.class }} {{ field.classes }}\">

  {% set fields = prepare_form_fields(field.fields, field.name) %}
  {% if fields|length %}
    {% set tabs = {} %}
    {% for tab in fields %}
        {% if tab.type == 'tab' and not tab.validate.ignore and (tab.security is empty or authorize(array(tab.security))) %}
        {% set tabs = tabs|merge([tab]) %}
        {% endif %}
    {% endfor %}
    {% set count = tabs|length %}

    {% if count == 0 %}
        {# Nothing to display #}
    {% elseif count == 1 and not admin %}
        {% set fields = (tabs|first).fields %}
        {% for field in fields %}
            {% set value = field.name ? (form ? form.value(field.name) : data.value(field.name)) : data.toArray %}
            {% set field_templates = include_form_field(field.type, field_layout, 'text') %}
            {% include field_templates %}
        {% endfor %}
    {% else %}
        {% set tabsKey = form.name ~ '-' ~ fields|keys|join(':')|md5 %}
        {% set storedValue = grav.admin ? get_cookie('grav-tabs-state')|default('{}')|json_decode : [] %}
        {% set storedTab = attribute(storedValue, 'tab-' ~ tabsKey) %}
        {% if storedTab is empty %}
            {% set active = uri.params.tab ?? field.active ?? 1 %}
        {% endif %}

        <div class=\"tabs-nav\">
            {% for tab in tabs %}
                {% if tab.type == 'tab' and (tab.condition is null or tab.condition == true) %}
                <a class=\"tab__link {{ (storedTab == scope ~ tab.name) or active == loop.index ? 'active' : '' }}\" data-tabid=\"tab-{{ tabsKey ~ loop.index }}\" data-tabkey=\"tab-{{ tabsKey }}\" data-scope=\"{{ scope ~ tab.name }}\">
                <span>{{ tab.title|t }}</span>
                {% endif %}
            </a>
        {% endfor %}
        </div>
        <div class=\"tabs-content\">
            {% embed 'forms/default/fields.html.twig' with {name: field.name, fields: fields} %}
                {% block inner_markup_field_open %}
                    <div id=\"tab-{{ tabsKey ~ loop.index }}\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
                {% endblock %}
                {% block inner_markup_field_close %}
                    </div>
                {% endblock %}
            {% endembed %}
        </div>
    {% endif %}
{% endif %}
</div>
{% endblock %}
", "forms/fields/tabs/tabs.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\tabs\\tabs.html.twig");
    }
}


/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_03e1968dd4e8f85616ac1a530f71efcb___133659323 extends \Twig\Template
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
        // line 48
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/tabs/tabs.html.twig", 48);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 49
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                    <div id=\"tab-";
        echo twig_escape_filter($this->env, (($context["tabsKey"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 50)), "html", null, true);
        echo "\" class=\"tab__content ";
        echo ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 50))) || (($context["active"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 50)))) ? ("active") : (""));
        echo "\">
                ";
    }

    // line 52
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 53,  369 => 52,  360 => 50,  356 => 49,  345 => 48,  238 => 59,  233 => 56,  231 => 48,  227 => 46,  212 => 44,  207 => 42,  196 => 41,  193 => 40,  176 => 39,  172 => 37,  169 => 36,  166 => 35,  163 => 34,  160 => 33,  157 => 32,  154 => 31,  151 => 30,  137 => 29,  134 => 28,  131 => 27,  128 => 26,  110 => 25,  107 => 24,  104 => 23,  102 => 22,  100 => 21,  97 => 20,  94 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  74 => 14,  71 => 13,  68 => 12,  66 => 11,  58 => 9,  54 => 8,  49 => 1,  46 => 5,  44 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% if not grav.admin %}
{% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% block field %}
<div class=\"form-tabs {{ field.class }} {{ field.classes }}\">

  {% set fields = prepare_form_fields(field.fields, field.name) %}
  {% if fields|length %}
    {% set tabs = {} %}
    {% for tab in fields %}
        {% if tab.type == 'tab' and not tab.validate.ignore and (tab.security is empty or authorize(array(tab.security))) %}
        {% set tabs = tabs|merge([tab]) %}
        {% endif %}
    {% endfor %}
    {% set count = tabs|length %}

    {% if count == 0 %}
        {# Nothing to display #}
    {% elseif count == 1 and not admin %}
        {% set fields = (tabs|first).fields %}
        {% for field in fields %}
            {% set value = field.name ? (form ? form.value(field.name) : data.value(field.name)) : data.toArray %}
            {% set field_templates = include_form_field(field.type, field_layout, 'text') %}
            {% include field_templates %}
        {% endfor %}
    {% else %}
        {% set tabsKey = form.name ~ '-' ~ fields|keys|join(':')|md5 %}
        {% set storedValue = grav.admin ? get_cookie('grav-tabs-state')|default('{}')|json_decode : [] %}
        {% set storedTab = attribute(storedValue, 'tab-' ~ tabsKey) %}
        {% if storedTab is empty %}
            {% set active = uri.params.tab ?? field.active ?? 1 %}
        {% endif %}

        <div class=\"tabs-nav\">
            {% for tab in tabs %}
                {% if tab.type == 'tab' and (tab.condition is null or tab.condition == true) %}
                <a class=\"tab__link {{ (storedTab == scope ~ tab.name) or active == loop.index ? 'active' : '' }}\" data-tabid=\"tab-{{ tabsKey ~ loop.index }}\" data-tabkey=\"tab-{{ tabsKey }}\" data-scope=\"{{ scope ~ tab.name }}\">
                <span>{{ tab.title|t }}</span>
                {% endif %}
            </a>
        {% endfor %}
        </div>
        <div class=\"tabs-content\">
            {% embed 'forms/default/fields.html.twig' with {name: field.name, fields: fields} %}
                {% block inner_markup_field_open %}
                    <div id=\"tab-{{ tabsKey ~ loop.index }}\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
                {% endblock %}
                {% block inner_markup_field_close %}
                    </div>
                {% endblock %}
            {% endembed %}
        </div>
    {% endif %}
{% endif %}
</div>
{% endblock %}
", "forms/fields/tabs/tabs.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\tabs\\tabs.html.twig");
    }
}

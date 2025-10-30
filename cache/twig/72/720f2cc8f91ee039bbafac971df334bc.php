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

/* forms/default/form.html.twig */
class __TwigTemplate_211867a52d100a7e1d4d4d885db0f141 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'xhr' => [$this, 'block_xhr'],
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('xhr', $context, $blocks);
        // line 2
        $context["form"] = (($context["form"]) ?? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, false, false, 2), "getFlashObject", [0 => "form"], "method", false, false, false, 2)));
        // line 3
        $context["layout"] = (($context["layout"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)) : ("default"))));
        // line 4
        $context["field_layout"] = (($context["field_layout"]) ?? (($context["layout"] ?? null)));
        // line 5
        echo "
";
        // line 7
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 7)->display($context);
        // line 8
        echo "
";
        // line 9
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", true, true, false, 9)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", false, false, false, 9)) : ("data."))));
        // line 10
        $context["multipart"] = "";
        // line 11
        $context["blueprints"] = (($context["blueprints"]) ?? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "method", false, false, false, 11)));
        // line 12
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, false, 12)), "POST");
        // line 13
        $context["client_side_validation"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 13))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 13)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 13), "form", [], "any", false, false, false, 13), "client_side_validation", [], "any", false, false, false, 13), true)));
        // line 14
        $context["inline_errors"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 14))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 14), "form", [], "any", false, false, false, 14), "inline_errors", [0 => false], "method", false, false, false, 14)));
        // line 15
        echo "
";
        // line 16
        $context["data"] = (($context["data"]) ?? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "data", [], "any", false, false, false, 16)));
        // line 17
        $context["context"] = (($context["context"]) ?? (($context["data"] ?? null)));
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 20
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 20) == "file"))) {
                // line 21
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 22
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        // line 25
        $context["action"] = (($context["action"]) ?? (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 25)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 25)) : ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 25) . twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, false, false, 25))))));
        // line 26
        $context["action"] = ((((is_string($__internal_compile_0 = ($context["action"] ?? null)) && is_string($__internal_compile_1 = "http") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) || (is_string($__internal_compile_2 = ($context["action"] ?? null)) && is_string($__internal_compile_3 = "#") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3))))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 27
        $context["action"] = twig_trim_filter(($context["action"] ?? null), "/", "right");
        // line 28
        echo "
";
        // line 29
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 30
            echo "    ";
            $context["action"] = (($context["base_url_relative"] ?? null) . "/");
        }
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 33)) {
            // line 34
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "browser", [], "any", false, false, false, 34), "browser", [], "any", false, false, false, 34) == "msie") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "browser", [], "any", false, false, false, 34), "version", [], "any", false, false, false, 34) < 12))) {
                // line 35
                echo "        ";
                twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/object.assign.polyfill.js"], "method", false, false, false, 35);
                // line 36
                echo "    ";
            }
            // line 37
            echo "    ";
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 37);
            // line 38
            echo "    ";
            twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 38);
        }
        // line 40
        echo "
";
        // line 41
        twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineJs", [0 => (((((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["grav"] ?? null), "route", [], "any", false, false, false, 44), "withoutParams", [], "method", false, false, false, 44), "toString", [0 => true], "method", false, false, false, 44)) . "',
        current_params: ") . json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
($context["grav"] ?? null), "route", [], "any", false, false, false, 45), "params", [], "any", false, false, false, 45))) . ",
        param_sep: '") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
($context["config"] ?? null), "system", [], "any", false, false, false, 46), "param_sep", [], "any", false, false, false, 46)) . "',
        base_url_relative: '") .         // line 47
($context["base_url_relative"] ?? null)) . "',
        form_nonce: '") . twig_get_attribute($this->env, $this->source,         // line 48
($context["form"] ?? null), "getNonce", [], "method", false, false, false, 48)) . "',
        session_timeout: ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["config"] ?? null), "system", [], "any", false, false, false, 49), "session", [], "any", false, false, false, 49), "timeout", [], "any", false, false, false, 49)) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => ["group" => "bottom", "position" => "before", "priority" => 100]], "method", false, false, false, 41);
        // line 53
        echo "
";
        // line 55
        ob_start();
        // line 56
        echo "  ";
        $this->displayBlock('form_classes', $context, $blocks);
        $context["override_form_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "  ";
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        $context["override_inner_markup_fields_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "
";
        // line 65
        ob_start();
        // line 66
        echo "  ";
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        $context["override_inner_markup_fields_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "
";
        // line 69
        ob_start();
        // line 70
        echo "  ";
        $this->displayBlock('inner_markup_fields', $context, $blocks);
        $context["override_inner_markup_fields"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "
";
        // line 87
        ob_start();
        // line 88
        echo "  ";
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "
";
        // line 93
        ob_start();
        // line 94
        echo "  ";
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "
";
        // line 100
        $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 100, "129630845")->display($context);
        // line 203
        echo "

";
        // line 205
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "forms", [], "any", false, false, false, 205), "dropzone", [], "any", false, false, false, 205), "enabled", [], "any", false, false, false, 205)) {
            // line 206
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 207
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 207)->display($context);
            // line 208
            echo "</div>
";
        }
    }

    // line 1
    public function block_xhr($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 56
    public function block_form_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo twig_escape_filter($this->env, ($context["form_outer_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classes", [], "any", false, false, false, 57), "html", null, true);
    }

    // line 62
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 66
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 70
    public function block_inner_markup_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 71));
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
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 72
            echo "      ";
            $context["field"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormField($context, $context["field"], $context["field_name"]);
            // line 73
            echo "      ";
            if ($context["field"]) {
                // line 74
                echo "        ";
                $context["value"] = ((($context["form"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 74)], "method", false, false, false, 74)) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 74)], "method", false, false, false, 74)));
                // line 75
                echo "        ";
                $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 75), ($context["field_layout"] ?? null));
                // line 76
                echo "
        ";
                // line 77
                $this->displayBlock('inner_markup_field_open', $context, $blocks);
                // line 78
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 81
                echo "        ";
                $this->displayBlock('inner_markup_field_close', $context, $blocks);
                // line 82
                echo "      ";
            }
            // line 83
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
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  ";
    }

    // line 77
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 78
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "          ";
        $__internal_compile_4 = null;
        try {
            $__internal_compile_4 =             $this->loadTemplate(($context["field_templates"] ?? null), "forms/default/form.html.twig", 79);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_4) {
            $__internal_compile_4->display($context);
        }
        // line 80
        echo "        ";
    }

    // line 81
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 88
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "  <div class=\"";
        ((($context["form_button_outer_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_outer_classes"] ?? null), "html", null, true))) : (print ("buttons")));
        echo "\">
  ";
    }

    // line 94
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 95,  375 => 94,  368 => 89,  364 => 88,  358 => 81,  354 => 80,  343 => 79,  339 => 78,  333 => 77,  329 => 84,  315 => 83,  312 => 82,  309 => 81,  306 => 78,  304 => 77,  301 => 76,  298 => 75,  295 => 74,  292 => 73,  289 => 72,  271 => 71,  267 => 70,  261 => 66,  255 => 62,  249 => 57,  245 => 56,  239 => 1,  233 => 208,  231 => 207,  228 => 206,  226 => 205,  222 => 203,  220 => 100,  217 => 98,  213 => 94,  211 => 93,  208 => 92,  204 => 88,  202 => 87,  199 => 86,  195 => 70,  193 => 69,  190 => 68,  186 => 66,  184 => 65,  181 => 64,  177 => 62,  175 => 61,  172 => 60,  168 => 56,  166 => 55,  163 => 53,  158 => 49,  156 => 48,  154 => 47,  152 => 46,  150 => 45,  148 => 44,  144 => 41,  141 => 40,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  123 => 33,  120 => 32,  116 => 30,  114 => 29,  111 => 28,  109 => 27,  107 => 26,  105 => 25,  102 => 24,  95 => 22,  92 => 21,  89 => 20,  85 => 19,  82 => 18,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  71 => 13,  69 => 12,  67 => 11,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 5,  53 => 4,  51 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block xhr %}{% endblock %}
{% set form = form ?? grav.session.getFlashObject('form') %}
{% set layout = layout ?? form.layout ?? 'default' %}
{% set field_layout = field_layout ?? layout %}

{# Keep here for Backwards Compatibility #}
{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}
{% set action = action|trim('/', 'right') %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ grav.route.withoutParams().toString(true) ~\"',
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: '\" ~ config.system.param_sep ~ \"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before', 'priority': 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type('array') %}
          {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e('html_attr') }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field('formname', field_layout, 'hidden') %}
    {% include include_form_field('formtask', field_layout, 'hidden') %}
    {% include include_form_field('uniqueid', field_layout, 'hidden') %}
    {% include include_form_field('nonce', field_layout, 'hidden') %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% if form.isEnabled() ?? true %}
    {% for button in form.buttons %}
      {% if not button.access or authorize(button.access) %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
          {% if button.attributes is defined %}
            {% for key,attribute in button.attributes %}
              {% if attribute|of_type('array') %}
                {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
              {% else %}
                {{ key }}=\"{{ attribute|e('html_attr') }}\"
              {% endif %}
            {% endfor %}
          {% endif %}
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
      {% endif %}
    {% endfor %}
    {% endif %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_211867a52d100a7e1d4d4d885db0f141___129630845 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 100
        return "forms/layouts/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/layouts/form.html.twig", "forms/default/form.html.twig", 100);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 102
    public function block_embed_form_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "    name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 103), "html", null, true);
        echo "\"
    action=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"
    method=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
    ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 106)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\"";
        }
        // line 107
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "novalidate", [], "any", false, false, false, 107)) {
            echo "novalidate";
        }
        // line 108
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 108)) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 109
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", true, true, false, 109)) {
            // line 110
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", false, false, false, 110));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 111
                echo "        ";
                if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) {
                    // line 112
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 112), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 112), "html_attr");
                    echo "\"
        ";
                } else {
                    // line 114
                    echo "          ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
        ";
                }
                // line 116
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "    ";
        }
        // line 118
        echo "  ";
    }

    // line 120
    public function block_embed_form_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "class=\"";
        $this->displayParentBlock("embed_form_classes", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["override_form_classes"] ?? null)), "html", null, true);
        echo "\"";
    }

    // line 124
    public function block_embed_form_custom_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "form", [], "any", false, false, false, 125), "attributes", [], "any", false, false, false, 125));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 126
            echo "      ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["v"]);
            echo "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "  ";
    }

    // line 130
    public function block_embed_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "    ";
        echo ($context["override_inner_markup_fields_start"] ?? null);
        echo "
    ";
        // line 132
        echo ($context["override_inner_markup_fields"] ?? null);
        echo "

    ";
        // line 134
        if ((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 134) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 134)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 134)) : (true))) {
            // line 135
            echo "    ";
            $this->loadTemplate($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formname", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 135)->display($context);
            // line 136
            echo "    ";
            $this->loadTemplate($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formtask", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 136)->display($context);
            // line 137
            echo "    ";
            $this->loadTemplate($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("uniqueid", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 137)->display($context);
            // line 138
            echo "    ";
            $this->loadTemplate($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("nonce", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 138)->display($context);
            // line 139
            echo "    ";
        }
        // line 140
        echo "
    ";
        // line 141
        echo ($context["override_inner_markup_fields_end"] ?? null);
        echo "
  ";
    }

    // line 144
    public function block_embed_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "    ";
        echo ($context["override_inner_markup_buttons_start"] ?? null);
        echo "

    ";
        // line 147
        if ((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 147) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 147)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 147)) : (true))) {
            // line 148
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "buttons", [], "any", false, false, false, 148));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 149
                echo "      ";
                if (( !twig_get_attribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 149) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(twig_get_attribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 149)))) {
                    // line 150
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["button"], "outerclasses", [], "any", true, true, false, 150)) {
                        echo "<div class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "outerclasses", [], "any", false, false, false, 150), "html", null, true);
                        echo "\">";
                    }
                    // line 151
                    echo "
      ";
                    // line 152
                    if (twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "      ";
                        $context["button_url"] = (((is_string($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 153)) && is_string($__internal_compile_6 = "http") && ('' === $__internal_compile_6 || 0 === strpos($__internal_compile_5, $__internal_compile_6)))) ? (twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 153)) : ((($context["base_url"] ?? null) . twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 153))));
                        // line 154
                        echo "      ";
                    }
                    // line 155
                    echo "
      ";
                    // line 156
                    $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 156, "723089160")->display($context);
                    // line 193
                    echo "
      ";
                    // line 194
                    if (twig_get_attribute($this->env, $this->source, $context["button"], "outerclasses", [], "any", true, true, false, 194)) {
                        echo "</div>";
                    }
                    // line 195
                    echo "      ";
                }
                // line 196
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "    ";
        }
        // line 198
        echo "
    ";
        // line 199
        echo twig_escape_filter($this->env, ($context["override_inner_markup_buttons_end"] ?? null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  886 => 199,  883 => 198,  880 => 197,  866 => 196,  863 => 195,  859 => 194,  856 => 193,  854 => 156,  851 => 155,  848 => 154,  845 => 153,  843 => 152,  840 => 151,  833 => 150,  830 => 149,  812 => 148,  810 => 147,  804 => 145,  800 => 144,  794 => 141,  791 => 140,  788 => 139,  785 => 138,  782 => 137,  779 => 136,  776 => 135,  774 => 134,  769 => 132,  764 => 131,  760 => 130,  756 => 128,  745 => 126,  740 => 125,  736 => 124,  728 => 121,  724 => 120,  720 => 118,  717 => 117,  711 => 116,  703 => 114,  695 => 112,  692 => 111,  687 => 110,  684 => 109,  679 => 108,  674 => 107,  668 => 106,  662 => 105,  658 => 104,  653 => 103,  649 => 102,  638 => 100,  379 => 95,  375 => 94,  368 => 89,  364 => 88,  358 => 81,  354 => 80,  343 => 79,  339 => 78,  333 => 77,  329 => 84,  315 => 83,  312 => 82,  309 => 81,  306 => 78,  304 => 77,  301 => 76,  298 => 75,  295 => 74,  292 => 73,  289 => 72,  271 => 71,  267 => 70,  261 => 66,  255 => 62,  249 => 57,  245 => 56,  239 => 1,  233 => 208,  231 => 207,  228 => 206,  226 => 205,  222 => 203,  220 => 100,  217 => 98,  213 => 94,  211 => 93,  208 => 92,  204 => 88,  202 => 87,  199 => 86,  195 => 70,  193 => 69,  190 => 68,  186 => 66,  184 => 65,  181 => 64,  177 => 62,  175 => 61,  172 => 60,  168 => 56,  166 => 55,  163 => 53,  158 => 49,  156 => 48,  154 => 47,  152 => 46,  150 => 45,  148 => 44,  144 => 41,  141 => 40,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  123 => 33,  120 => 32,  116 => 30,  114 => 29,  111 => 28,  109 => 27,  107 => 26,  105 => 25,  102 => 24,  95 => 22,  92 => 21,  89 => 20,  85 => 19,  82 => 18,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  71 => 13,  69 => 12,  67 => 11,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 5,  53 => 4,  51 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block xhr %}{% endblock %}
{% set form = form ?? grav.session.getFlashObject('form') %}
{% set layout = layout ?? form.layout ?? 'default' %}
{% set field_layout = field_layout ?? layout %}

{# Keep here for Backwards Compatibility #}
{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}
{% set action = action|trim('/', 'right') %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ grav.route.withoutParams().toString(true) ~\"',
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: '\" ~ config.system.param_sep ~ \"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before', 'priority': 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type('array') %}
          {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e('html_attr') }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field('formname', field_layout, 'hidden') %}
    {% include include_form_field('formtask', field_layout, 'hidden') %}
    {% include include_form_field('uniqueid', field_layout, 'hidden') %}
    {% include include_form_field('nonce', field_layout, 'hidden') %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% if form.isEnabled() ?? true %}
    {% for button in form.buttons %}
      {% if not button.access or authorize(button.access) %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
          {% if button.attributes is defined %}
            {% for key,attribute in button.attributes %}
              {% if attribute|of_type('array') %}
                {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
              {% else %}
                {{ key }}=\"{{ attribute|e('html_attr') }}\"
              {% endif %}
            {% endfor %}
          {% endif %}
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
      {% endif %}
    {% endfor %}
    {% endif %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_211867a52d100a7e1d4d4d885db0f141___723089160 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 156
        return "forms/layouts/button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/layouts/button.html.twig", "forms/default/form.html.twig", 156);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 157
    public function block_embed_button_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 158)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 158), "html", null, true);
            echo "\"";
        }
        // line 159
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "disabled", [], "any", false, false, false, 159)) {
            echo "disabled=\"disabled\"";
        }
        // line 160
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 160)) {
            // line 161
            echo "            name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 161), "html", null, true);
            echo "\"
          ";
        } else {
            // line 163
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 163)) {
                echo "name=\"task\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 163), "html", null, true);
                echo "\"";
            }
            // line 164
            echo "          ";
        }
        // line 165
        echo "          type=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", true, true, false, 165)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 165), "submit")) : ("submit")), "html", null, true);
        echo "\"
          ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", true, true, false, 166)) {
            // line 167
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 168
                echo "              ";
                if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) {
                    // line 169
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 169), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 169), "html_attr");
                    echo "\"
              ";
                } else {
                    // line 171
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
              ";
                }
                // line 173
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "          ";
        }
        // line 175
        echo "        ";
    }

    // line 177
    public function block_embed_button_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "          ";
        $this->displayBlock('button_classes', $context, $blocks);
        // line 181
        echo "        ";
    }

    // line 178
    public function block_button_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "            class=\"";
        ((($context["form_button_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_classes"] ?? null), "html", null, true))) : (print ("button")));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "classes", [], "any", false, false, false, 179), "html", null, true);
        echo "\"
          ";
    }

    // line 183
    public function block_embed_button_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        $context["button_value"] = _twig_default_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "value", [], "any", false, false, false, 184)), "Submit");
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "html", [], "any", false, false, false, 185)) {
            // line 186
            echo twig_trim_filter(($context["button_value"] ?? null));
        } else {
            // line 188
            echo twig_escape_filter($this->env, twig_trim_filter(($context["button_value"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1270 => 188,  1267 => 186,  1265 => 185,  1263 => 184,  1259 => 183,  1250 => 179,  1246 => 178,  1242 => 181,  1239 => 178,  1235 => 177,  1231 => 175,  1228 => 174,  1222 => 173,  1214 => 171,  1206 => 169,  1203 => 168,  1198 => 167,  1196 => 166,  1191 => 165,  1188 => 164,  1181 => 163,  1175 => 161,  1172 => 160,  1167 => 159,  1160 => 158,  1156 => 157,  1145 => 156,  886 => 199,  883 => 198,  880 => 197,  866 => 196,  863 => 195,  859 => 194,  856 => 193,  854 => 156,  851 => 155,  848 => 154,  845 => 153,  843 => 152,  840 => 151,  833 => 150,  830 => 149,  812 => 148,  810 => 147,  804 => 145,  800 => 144,  794 => 141,  791 => 140,  788 => 139,  785 => 138,  782 => 137,  779 => 136,  776 => 135,  774 => 134,  769 => 132,  764 => 131,  760 => 130,  756 => 128,  745 => 126,  740 => 125,  736 => 124,  728 => 121,  724 => 120,  720 => 118,  717 => 117,  711 => 116,  703 => 114,  695 => 112,  692 => 111,  687 => 110,  684 => 109,  679 => 108,  674 => 107,  668 => 106,  662 => 105,  658 => 104,  653 => 103,  649 => 102,  638 => 100,  379 => 95,  375 => 94,  368 => 89,  364 => 88,  358 => 81,  354 => 80,  343 => 79,  339 => 78,  333 => 77,  329 => 84,  315 => 83,  312 => 82,  309 => 81,  306 => 78,  304 => 77,  301 => 76,  298 => 75,  295 => 74,  292 => 73,  289 => 72,  271 => 71,  267 => 70,  261 => 66,  255 => 62,  249 => 57,  245 => 56,  239 => 1,  233 => 208,  231 => 207,  228 => 206,  226 => 205,  222 => 203,  220 => 100,  217 => 98,  213 => 94,  211 => 93,  208 => 92,  204 => 88,  202 => 87,  199 => 86,  195 => 70,  193 => 69,  190 => 68,  186 => 66,  184 => 65,  181 => 64,  177 => 62,  175 => 61,  172 => 60,  168 => 56,  166 => 55,  163 => 53,  158 => 49,  156 => 48,  154 => 47,  152 => 46,  150 => 45,  148 => 44,  144 => 41,  141 => 40,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  123 => 33,  120 => 32,  116 => 30,  114 => 29,  111 => 28,  109 => 27,  107 => 26,  105 => 25,  102 => 24,  95 => 22,  92 => 21,  89 => 20,  85 => 19,  82 => 18,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  71 => 13,  69 => 12,  67 => 11,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 5,  53 => 4,  51 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block xhr %}{% endblock %}
{% set form = form ?? grav.session.getFlashObject('form') %}
{% set layout = layout ?? form.layout ?? 'default' %}
{% set field_layout = field_layout ?? layout %}

{# Keep here for Backwards Compatibility #}
{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}
{% set action = action|trim('/', 'right') %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ grav.route.withoutParams().toString(true) ~\"',
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: '\" ~ config.system.param_sep ~ \"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before', 'priority': 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type('array') %}
          {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e('html_attr') }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field('formname', field_layout, 'hidden') %}
    {% include include_form_field('formtask', field_layout, 'hidden') %}
    {% include include_form_field('uniqueid', field_layout, 'hidden') %}
    {% include include_form_field('nonce', field_layout, 'hidden') %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% if form.isEnabled() ?? true %}
    {% for button in form.buttons %}
      {% if not button.access or authorize(button.access) %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
          {% if button.attributes is defined %}
            {% for key,attribute in button.attributes %}
              {% if attribute|of_type('array') %}
                {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
              {% else %}
                {{ key }}=\"{{ attribute|e('html_attr') }}\"
              {% endif %}
            {% endfor %}
          {% endif %}
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
      {% endif %}
    {% endfor %}
    {% endif %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}

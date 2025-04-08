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

/* flex-objects/types/default/list/list.html.twig */
class __TwigTemplate_d11fe3e47657e874f920c84ae512dba5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'directory' => [$this, 'block_directory'],
            'no_list' => [$this, 'block_no_list'],
            'no_entries' => [$this, 'block_no_entries'],
            'entries' => [$this, 'block_entries'],
            'modals' => [$this, 'block_modals'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('directory', $context, $blocks);
    }

    public function block_directory($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div id=\"directory\">
    ";
        // line 3
        if ( !($context["fields"] ?? null)) {
            // line 4
            echo "        ";
            $this->displayBlock('no_list', $context, $blocks);
            // line 17
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["collection"] ?? null), "count", [], "any", false, false, false, 17)) {
            // line 18
            echo "        ";
            $this->displayBlock('no_entries', $context, $blocks);
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        ";
            $this->displayBlock('entries', $context, $blocks);
            // line 106
            echo "    ";
        }
        // line 107
        echo "
    ";
        // line 108
        $this->displayBlock('modals', $context, $blocks);
        // line 111
        echo "</div>
";
    }

    // line 4
    public function block_no_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"no-entries\">
            <p>";
        // line 6
        echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST", ($context["target"] ?? null), null);
        echo "</p>
            <ul>
                <li>
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_ADVISE"), "html", null, true);
        echo "
                </li>
                <li>
                    ";
        // line 12
        echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_TEMPLATE", ($context["target"] ?? null), null);
        echo "
                </li>
            </ul>
        </div>
        ";
    }

    // line 18
    public function block_no_entries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <div class=\"no-entries\">
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 20)) {
            // line 21
            echo "                ";
            $context["createLink"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(twig_get_attribute($this->env, $this->source, ($context["flex"] ?? null), "adminRoute", [0 => ($context["collection"] ?? null), 1 => ["action" => "add"]], "method", false, false, false, 21));
            // line 22
            echo "                ";
            echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY_ADD", ($context["createLink"] ?? null), null);
            echo "
            ";
        } else {
            // line 24
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY"), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "        </div>
        ";
    }

    // line 29
    public function block_entries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        ";
        $context["per_page"] = (($context["per_page"]) ?? (twig_get_attribute($this->env, $this->source, ($context["directory_config"] ?? null), "per_page", [], "any", false, false, false, 30)));
        // line 31
        echo "
        ";
        // line 32
        $context["tableFields"] = [];
        // line 33
        echo "        ";
        $context["searchFields"] = [];
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["options"]) {
            // line 35
            echo "            ";
            $context["name"] = $context["key"];
            // line 36
            echo "            ";
            $context["sortField"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["options"], "sort", [], "any", false, true, false, 36), "field", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["options"], "sort", [], "any", false, true, false, 36), "field", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["options"], "sort", [], "any", false, true, false, 36), "field", [], "any", false, false, false, 36)) : ($context["key"]));
            // line 37
            echo "            ";
            $context["title"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["options"], "field", [], "any", false, true, false, 37), "label", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["options"], "field", [], "any", false, true, false, 37), "label", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["options"], "field", [], "any", false, true, false, 37), "label", [], "any", false, false, false, 37)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["schema"] ?? null), "get", [0 => (((twig_get_attribute($this->env, $this->source, $context["options"], "alias", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, $context["options"], "alias", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, $context["options"], "alias", [], "any", false, false, false, 37)) : ($context["key"]))], "method", false, false, false, 37), "label", [], "any", false, false, false, 37))));
            // line 38
            echo "            ";
            $context["width"] = ((twig_get_attribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 38)) ? (twig_get_attribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 38)) : (twig_round(((100 - ($context["fields_width"] ?? null)) / (((($context["fields_count"] ?? null) - ($context["fields_set"] ?? null))) ? ((($context["fields_count"] ?? null) - ($context["fields_set"] ?? null))) : (1))), 3)));
            // line 39
            echo "            ";
            $context["title_class"] = ((twig_get_attribute($this->env, $this->source, $context["options"], "title_class", [], "any", false, false, false, 39)) ? (twig_get_attribute($this->env, $this->source, $context["options"], "title_class", [], "any", false, false, false, 39)) : (""));
            // line 40
            echo "            ";
            $context["data_class"] = ((twig_get_attribute($this->env, $this->source, $context["options"], "data_class", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, $context["options"], "data_class", [], "any", false, false, false, 40)) : (""));
            // line 41
            echo "
            ";
            // line 43
            echo "            ";
            $context["tableFields"] = twig_array_merge(($context["tableFields"] ?? null), [0 => ["name" => twig_replace_filter(            // line 45
($context["name"] ?? null), ["." => "_"]), "sortField" =>             // line 46
($context["sortField"] ?? null), "title" => ((            // line 47
$context["title"]) ?? ("N/A")), "width" => (            // line 48
($context["width"] ?? null) . "%"), "titleClass" =>             // line 49
($context["title_class"] ?? null), "dataClass" =>             // line 50
($context["data_class"] ?? null)]]);
            // line 53
            echo "
            ";
            // line 55
            echo "            ";
            $context["searchFields"] = twig_array_merge(($context["searchFields"] ?? null), [0 => twig_replace_filter($context["key"], ["." => "_"])]);
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        ";
        $context["tableFields"] = twig_array_merge(($context["tableFields"] ?? null), [0 => ["name" => "_actions_", "title" => $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.ACTIONS"), "titleClass" => "right"]]);
        // line 58
        echo "

        ";
        // line 60
        $context["list"] = twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "jsonSerialize", [], "any", false, false, false, 60);
        // line 61
        echo "
        <div
            id=\"flex-objects-list\"
            data-initial-store=\"";
        // line 64
        echo twig_escape_filter($this->env, json_encode(["data" =>         // line 66
($context["list"] ?? null), "api" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["grav"] ?? null), "uri", [], "any", false, false, false, 67), "currentRoute", [], "method", false, false, false, 67), "withExtension", [0 => "json"], "method", false, false, false, 67), "uri", [], "method", false, false, false, 67)), "perPage" =>         // line 68
($context["per_page"] ?? null), "fields" =>         // line 69
($context["tableFields"] ?? null), "searchFields" =>         // line 70
($context["searchFields"] ?? null), "sortOrder" => [0 => ["field" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["directory_config"] ?? null), "order", [], "any", false, false, false, 71), "by", [], "any", false, false, false, 71), "direction" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["directory_config"] ?? null), "order", [], "any", false, false, false, 71), "dir", [], "any", false, false, false, 71)]], "searchPlaceholder" => $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "paginationInfo" => $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LIST_INFO"), "emptyResult" => $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.EMPTY_RESULT")]), "html_attr");
        // line 76
        echo "\">
            <svg viewBox=\"0 0 1060 ";
        // line 77
        echo twig_escape_filter($this->env, (31 * (min(($context["per_page"] ?? null), count(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "data", [], "any", false, false, false, 77))) + 2)), "html", null, true);
        echo "\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((min(($context["per_page"] ?? null), count(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "data", [], "any", false, false, false, 78))) + 3) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "                <rect clip-path=\"url(#clip-path-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ")\" x=\"0\" y=\"0\" width=\"1060\" height=\"";
            echo twig_escape_filter($this->env, (31 * ($context["per_page"] ?? null)), "html", null, true);
            echo "\" style=\"fill: url(#linear-gradient-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ")\"></rect>
                <defs>
                    <clipPath id=\"clip-path-";
            // line 81
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                        <rect x=\"13\" y=\"";
            // line 82
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (200 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"533\" y=\"";
            // line 83
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (63 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"653\" y=\"";
            // line 84
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (78 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"755\" y=\"";
            // line 85
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (117 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"938\" y=\"";
            // line 86
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (83 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>

                        <rect x=\"0\" y=\"";
            // line 88
            echo twig_escape_filter($this->env, (31 * $context["i"]), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"1060\" height=\".3\"></rect>
                    </clipPath>
                    <linearGradient id=\"linear-gradient-";
            // line 90
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                        <stop offset=\"-0.60016\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-3; 1\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"0.39984\" stop-color=\"#ecebeb\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-2; 2\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"1.39984\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-1; 3\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                    </linearGradient>
                </defs>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </svg>
        </div>
        ";
    }

    // line 108
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "    ";
        $this->loadTemplate("flex-objects/types/default/modals/remove.html.twig", "flex-objects/types/default/list/list.html.twig", 109)->display(twig_array_merge($context, ["name" => ($context["target"] ?? null)]));
        // line 110
        echo "    ";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  316 => 110,  313 => 109,  309 => 108,  303 => 103,  284 => 90,  279 => 88,  272 => 86,  266 => 85,  260 => 84,  254 => 83,  248 => 82,  244 => 81,  234 => 79,  230 => 78,  226 => 77,  223 => 76,  221 => 71,  220 => 70,  219 => 69,  218 => 68,  217 => 67,  216 => 66,  215 => 64,  210 => 61,  208 => 60,  204 => 58,  201 => 57,  195 => 56,  192 => 55,  189 => 53,  187 => 50,  186 => 49,  185 => 48,  184 => 47,  183 => 46,  182 => 45,  180 => 43,  177 => 41,  174 => 40,  171 => 39,  168 => 38,  165 => 37,  162 => 36,  159 => 35,  154 => 34,  151 => 33,  149 => 32,  146 => 31,  143 => 30,  139 => 29,  134 => 26,  128 => 24,  122 => 22,  119 => 21,  117 => 20,  114 => 19,  110 => 18,  101 => 12,  95 => 9,  89 => 6,  86 => 5,  82 => 4,  77 => 111,  75 => 108,  72 => 107,  69 => 106,  66 => 29,  63 => 28,  60 => 18,  57 => 17,  54 => 4,  52 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block directory %}
<div id=\"directory\">
    {% if not fields %}
        {% block no_list %}
        <div class=\"no-entries\">
            <p>{{ 'PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST'|tu( target, null )|raw }}</p>
            <ul>
                <li>
                    {{ 'PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_ADVISE'|tu }}
                </li>
                <li>
                    {{ 'PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_TEMPLATE'|tu( target, null )|raw }}
                </li>
            </ul>
        </div>
        {% endblock %}
    {% elseif not collection.count %}
        {% block no_entries %}
        <div class=\"no-entries\">
            {% if directory.isAuthorized('create', 'admin', user) %}
                {% set createLink = admin_route(flex.adminRoute(collection, {action: 'add'})) %}
                {{ 'PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY_ADD'|tu(createLink, null)|raw }}
            {% else %}
                {{ 'PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY'|tu }}
            {% endif %}
        </div>
        {% endblock %}
    {% else %}
        {% block entries %}
        {% set per_page = per_page ?? directory_config.per_page %}

        {% set tableFields = [] %}
        {% set searchFields = [] %}
        {% for key, options in fields %}
            {% set name = key %}
            {% set sortField = options.sort.field ?? key %}
            {% set title = (options.field.label ?? schema.get(options.alias ?? key).label)|tu %}
            {% set width = options.width ?: ((100-fields_width) / ((fields_count-fields_set) ?: 1))|round(3) %}
            {% set title_class = options.title_class ?: '' %}
            {% set data_class = options.data_class ?: '' %}

            {# Vuetable doesn't like field names with `.` in them, so we convert name and sortField to `_` #}
            {% set tableFields = tableFields|merge([
                {
                    name: name|replace({'.': '_'}),
                    sortField: sortField,
                    title: title ?? 'N/A',
                    width: width ~ '%',
                    titleClass: title_class,
                    dataClass: data_class
                }
            ]) %}

            {# FIXME: Search fields should be passed and individually customizable, right now defaulting to all fields selected #}
            {% set searchFields = searchFields|merge([key|replace({'.': '_'})]) %}
        {% endfor %}
        {% set tableFields = tableFields|merge([{ name: '_actions_', title: \"PLUGIN_FLEX_OBJECTS.ACTION.ACTIONS\"|tu, titleClass: 'right' }]) %}


        {% set list = table.jsonSerialize %}

        <div
            id=\"flex-objects-list\"
            data-initial-store=\"{{
                {
                    data: list,
                    api: grav.uri.currentRoute().withExtension('json').uri()|string,
                    perPage: per_page,
                    fields: tableFields,
                    searchFields: searchFields,
                    sortOrder: [{ field: directory_config.order.by, direction: directory_config.order.dir }],
                    searchPlaceholder: \"PLUGIN_ADMIN.RESOURCE_FILTER\"|tu,
                    paginationInfo: \"PLUGIN_FLEX_OBJECTS.LIST_INFO\"|tu,
                    emptyResult: \"PLUGIN_FLEX_OBJECTS.EMPTY_RESULT\"|tu
                }|json_encode|e('html_attr')
            }}\">
            <svg viewBox=\"0 0 1060 {{ 31 * (min(per_page, list.data|count) + 2) }}\">
            {% for i in 0..((min(per_page, list.data|count) + 3) - 1) %}
                <rect clip-path=\"url(#clip-path-{{ i }})\" x=\"0\" y=\"0\" width=\"1060\" height=\"{{ 31 * per_page }}\" style=\"fill: url(#linear-gradient-{{ i }})\"></rect>
                <defs>
                    <clipPath id=\"clip-path-{{ i }}\">
                        <rect x=\"13\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 200 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"533\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 63 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"653\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 78 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"755\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 117 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"938\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 83 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>

                        <rect x=\"0\" y=\"{{ 31 * i }}\" rx=\"6\" ry=\"6\" width=\"1060\" height=\".3\"></rect>
                    </clipPath>
                    <linearGradient id=\"linear-gradient-{{ i }}\">
                        <stop offset=\"-0.60016\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-3; 1\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"0.39984\" stop-color=\"#ecebeb\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-2; 2\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"1.39984\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-1; 3\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                    </linearGradient>
                </defs>
            {% endfor %}
            </svg>
        </div>
        {% endblock %}
    {% endif %}

    {% block modals %}
    {% include 'flex-objects/types/default/modals/remove.html.twig' with { name: target } %}
    {% endblock %}
</div>
{% endblock %}
", "flex-objects/types/default/list/list.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\list\\list.html.twig");
    }
}

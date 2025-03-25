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

/* forms/fields/permissions/permissions.html.twig */
class __TwigTemplate_6b3c29b2f63b9cf69cc86745e8650d51 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
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
        // line 115
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/permissions/permissions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 117
    public function block_global_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "    data-grav-disabled=\"";
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 119
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 119)), "html_attr");
        echo "\"
";
    }

    // line 122
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "    ";
        $context["options"] = ["1" => "PLUGIN_ADMIN.ALLOWED", "0" => "PLUGIN_ADMIN.DENIED", "" => "PLUGIN_ADMIN.NOT_SET"];
        // line 124
        echo "    ";
        $context["maxLen"] = 0;
        // line 125
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 126
            echo "        ";
            $context["maxLen"] = max(twig_length_filter($this->env, twig_trim_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]))), ($context["maxLen"] ?? null));
            // line 127
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
    ";
        // line 129
        $context["permissions"] = twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "permissions", [], "any", false, false, false, 129);
        // line 130
        echo "    ";
        $context["access"] = twig_get_attribute($this->env, $this->source, ($context["permissions"] ?? null), "access", [0 => ($context["value"] ?? null)], "method", false, false, false, 130);
        // line 131
        echo "    ";
        if ((($context["object"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "check_authorize", [], "any", false, false, false, 131))) {
            // line 132
            echo "        ";
            $context["auth_badges"] = true;
            // line 133
            echo "        ";
            $context["super"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "authorize", [0 => "admin.super", 1 => "test"], "method", false, false, false, 133);
            // line 134
            echo "    ";
        }
        // line 135
        echo "
    <div class=\"permissions-container\">
        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 138
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["section"], "count", [], "any", false, false, false, 138)) {
                // line 139
                echo "            ";
                echo twig_call_macro($macros["macro"], "macro_section", [$context["section"], $context, 0], 139, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 141
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        ob_start();
        // line 145
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "getAllActions", [], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 146
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["permissions"] ?? null), "getAction", [0 => $context["key"]], "method", false, false, false, 146)) {
                // line 147
                echo "            ";
                echo twig_call_macro($macros["macro"], "macro_action", [["name" => $context["key"]], $context], 147, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 149
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        ";
        $context["unknown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        echo "
        ";
        // line 152
        if (twig_trim_filter(($context["unknown"] ?? null))) {
            // line 153
            echo "            <fieldset>
                <legend>Unknown Permissions</legend>
                ";
            // line 155
            echo ($context["unknown"] ?? null);
            echo "
            </fieldset>
        ";
        }
        // line 158
        echo "    </div>
";
    }

    // line 3
    public function macro_spanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["space"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "    ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 8
    public function macro_section($__section__ = null, $__context__ = null, $__depth__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "section" => $__section__,
            "context" => $__context__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 9
            echo "    ";
            $macros["macro"] = $this;
            // line 10
            echo "
    ";
            // line 11
            $context["section_label"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, (((twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "label", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "label", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "label", [], "any", false, false, false, 11)) : (twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "name", [], "any", false, false, false, 11))));
            // line 12
            echo "
    ";
            // line 14
            echo "    ";
            if ((($context["depth"] ?? null) > 0)) {
                // line 15
                echo "
        ";
                // line 16
                $context["section_value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "access", [], "any", false, false, false, 16), "get", [0 => twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "name", [], "any", false, false, false, 16)], "method", false, false, false, 16));
                // line 17
                echo "        ";
                $context["params"] = ["context" =>                 // line 18
($context["context"] ?? null), "action_label" =>                 // line 19
($context["section_label"] ?? null), "action_value" =>                 // line 20
($context["section_value"] ?? null), "action_name" => twig_get_attribute($this->env, $this->source,                 // line 21
($context["section"] ?? null), "name", [], "any", false, false, false, 21), "action_class" => "parent-section"];
                // line 25
                echo "
        ";
                // line 26
                echo twig_call_macro($macros["macro"], "macro_action_row", [($context["params"] ?? null)], 26, $context, $this->getSourceContext());
                echo "
    ";
            }
            // line 28
            echo "
    <fieldset>
        ";
            // line 30
            if ((($context["depth"] ?? null) == 0)) {
                // line 31
                echo "        <legend>";
                echo twig_escape_filter($this->env, ($context["section_label"] ?? null), "html", null, true);
                echo "</legend>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["section"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 35
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["action"], "count", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                ";
                        echo twig_call_macro($macros["macro"], "macro_section", [$context["action"], ($context["context"] ?? null), (($context["depth"] ?? null) + 1)], 37, $context, $this->getSourceContext());
                        echo "
            ";
                    } else {
                        // line 39
                        echo "                ";
                        echo twig_call_macro($macros["macro"], "macro_action", [$context["action"], ($context["context"] ?? null)], 39, $context, $this->getSourceContext());
                        echo "
            ";
                    }
                    // line 41
                    echo "            ";
                }
                // line 42
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
    </fieldset>

";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_action($__action__ = null, $__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 49
            echo "    ";
            $macros["macro"] = $this;
            // line 50
            echo "
    ";
            // line 51
            $context["action_label"] = (((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", true, true, false, 51) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 51)))) ? (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 51)) : (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 51)));
            // line 52
            echo "    ";
            $context["action_value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "access", [], "any", false, false, false, 52), "get", [0 => twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 52)], "method", false, false, false, 52));
            // line 53
            echo "
    ";
            // line 54
            $context["params"] = ["context" =>             // line 55
($context["context"] ?? null), "action_label" =>             // line 56
($context["action_label"] ?? null), "action_value" =>             // line 57
($context["action_value"] ?? null), "action_name" => twig_get_attribute($this->env, $this->source,             // line 58
($context["action"] ?? null), "name", [], "any", false, false, false, 58), "action_parent" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 59
($context["action"] ?? null), "getParent", [], "method", false, false, false, 59), "name", [], "any", false, false, false, 59)];
            // line 62
            echo "
    ";
            // line 63
            echo twig_call_macro($macros["macro"], "macro_action_row", [($context["params"] ?? null)], 63, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 66
    public function macro_action_row($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 67
            echo "    ";
            $macros["macro"] = $this;
            // line 68
            echo "
    ";
            // line 69
            $context["context"] = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "context", [], "any", false, false, false, 69);
            // line 70
            echo "    ";
            $context["field"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "field", [], "any", false, false, false, 70);
            // line 71
            echo "
    <div class=\"permission-container ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_class", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
        <div class=\"permission-name\">
            <span>";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_label", [], "any", false, false, false, 74)), "html", null, true);
            echo "</span>
            ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "auth_badges", [], "any", false, false, false, 75)) {
                // line 76
                echo "                ";
                $context["auth"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "object", [], "any", false, true, false, 76), "authorize", [0 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_name", [], "any", false, false, false, 76), 1 => "test"], "method", true, true, false, 76) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "object", [], "any", false, true, false, 76), "authorize", [0 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_name", [], "any", false, false, false, 76), 1 => "test"], "method", false, false, false, 76)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "object", [], "any", false, true, false, 76), "authorize", [0 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_name", [], "any", false, false, false, 76), 1 => "test"], "method", false, false, false, 76)) : (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "super", [], "any", false, false, false, 76)));
                // line 77
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "super", [], "any", false, false, false, 77) && ($context["auth"] ?? null))) {
                    // line 78
                    echo "                    <span class=\"badge badge-super\"><i class=\"icon-super\"></i></span>
                ";
                } elseif (                // line 79
($context["auth"] ?? null)) {
                    // line 80
                    echo "                    <span class=\"badge badge-access\"><i class=\"fa fa-check\"></i></span>
                ";
                } else {
                    // line 82
                    echo "                    <span class=\"badge badge-denied\"><i class=\"fa fa-ban\"></i></span>
                ";
                }
                // line 84
                echo "            ";
            }
            // line 85
            echo "        </div>

        <div class=\"switch-toggle switch-grav medium switch-3\">
            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "options", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 89
                echo "                ";
                $context["parent_id"] = ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_parent", [], "any", false, false, false, 89)) ? (((("toggle_" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 89)) . ".") . twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_parent", [], "any", false, false, false, 89))) : (""));
                // line 90
                echo "                ";
                $context["id"] = (((("toggle_" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 90)) . ".") . twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_name", [], "any", false, false, false, 90)) . $context["key"]);
                // line 91
                echo "                ";
                $context["translation"] = twig_trim_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
                // line 92
                echo "
                <input type=\"radio\"
                       value=\"";
                // line 94
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                       id=\"";
                // line 95
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"
                       ";
                // line 96
                if (($context["parent_id"] ?? null)) {
                    // line 97
                    echo "                       data-parent-id=\"";
                    echo twig_escape_filter($this->env, ($context["parent_id"] ?? null), "html", null, true);
                    echo "\"
                       ";
                }
                // line 99
                echo "                       name=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "scope", [], "any", false, false, false, 99) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 99))), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_name", [], "any", false, false, false, 99), "html", null, true);
                echo "]\"
                       class=\"label";
                // line 100
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                    ";
                // line 101
                if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter($context["key"]) == ("" . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "action_value", [], "any", false, false, false, 101))))) {
                    // line 102
                    echo "                        checked=\"checked\"
                    ";
                }
                // line 104
                echo "                    ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 104), "required", [], "any", false, false, false, 104), [0 => "yes", 1 => "on", 2 => "true", 3 => 1, 4 => true])) {
                    echo "required=\"required\"";
                }
                // line 105
                echo "                />

                <label for=\"";
                // line 107
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">";
                echo twig_trim_filter(twig_call_macro($macros["macro"], "macro_spanToggle", [($context["translation"] ?? null), twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "maxLen", [], "any", false, false, false, 107)], 107, $context, $this->getSourceContext()));
                echo "</label>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "            <a></a>
        </div>
    </div>

";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/permissions/permissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 109,  490 => 107,  486 => 105,  481 => 104,  477 => 102,  475 => 101,  471 => 100,  464 => 99,  458 => 97,  456 => 96,  452 => 95,  448 => 94,  444 => 92,  441 => 91,  438 => 90,  435 => 89,  431 => 88,  426 => 85,  423 => 84,  419 => 82,  415 => 80,  413 => 79,  410 => 78,  407 => 77,  404 => 76,  402 => 75,  398 => 74,  393 => 72,  390 => 71,  387 => 70,  385 => 69,  382 => 68,  379 => 67,  366 => 66,  355 => 63,  352 => 62,  350 => 59,  349 => 58,  348 => 57,  347 => 56,  346 => 55,  345 => 54,  342 => 53,  339 => 52,  337 => 51,  334 => 50,  331 => 49,  317 => 48,  305 => 43,  299 => 42,  296 => 41,  290 => 39,  284 => 37,  281 => 36,  278 => 35,  274 => 34,  271 => 33,  265 => 31,  263 => 30,  259 => 28,  254 => 26,  251 => 25,  249 => 21,  248 => 20,  247 => 19,  246 => 18,  244 => 17,  242 => 16,  239 => 15,  236 => 14,  233 => 12,  231 => 11,  228 => 10,  225 => 9,  210 => 8,  198 => 5,  195 => 4,  181 => 3,  176 => 158,  170 => 155,  166 => 153,  164 => 152,  161 => 151,  158 => 150,  152 => 149,  146 => 147,  143 => 146,  138 => 145,  135 => 144,  132 => 142,  126 => 141,  120 => 139,  117 => 138,  113 => 137,  109 => 135,  106 => 134,  103 => 133,  100 => 132,  97 => 131,  94 => 130,  92 => 129,  89 => 128,  83 => 127,  80 => 126,  75 => 125,  72 => 124,  69 => 123,  65 => 122,  59 => 119,  54 => 118,  50 => 117,  45 => 1,  43 => 115,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% macro spanToggle(input, length) %}
    {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
    {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% macro section(section, context, depth) %}
    {% import _self as macro %}

    {% set section_label = (section.label ?? section.name)|t %}

    {# Sub sections can have top-level toggle.. needs to #}
    {% if depth > 0 %}

        {% set section_value = context.access.get(section.name)|string %}
        {% set params = {
            context: context,
            action_label: section_label,
            action_value: section_value,
            action_name: section.name,
            action_class: 'parent-section'
        }
        %}

        {{ macro.action_row(params) }}
    {% endif %}

    <fieldset>
        {%  if depth == 0 %}
        <legend>{{ section_label }}</legend>
        {% endif %}

        {% for action in section %}
            {% if action.visible %}
            {% if action.count %}
                {{ macro.section(action, context, depth + 1) }}
            {% else %}
                {{ macro.action(action, context) }}
            {% endif %}
            {% endif %}
        {% endfor %}

    </fieldset>

{% endmacro %}

{% macro action(action, context) %}
    {% import _self as macro %}

    {% set action_label = action.label ?? action.name %}
    {% set action_value = context.access.get(action.name)|string %}

    {% set params = {
        context: context,
        action_label: action_label,
        action_value: action_value,
        action_name: action.name,
        action_parent: action.getParent().name
        }
    %}

    {{ macro.action_row(params) }}
{% endmacro %}

{% macro action_row(data) %}
    {% import _self as macro %}

    {% set context = data.context %}
    {% set field = context.field %}

    <div class=\"permission-container {{ data.action_class }}\">
        <div class=\"permission-name\">
            <span>{{ data.action_label|t }}</span>
            {% if context.auth_badges %}
                {% set auth = context.object.authorize(data.action_name, 'test') ?? context.super %}
                {% if context.super and auth %}
                    <span class=\"badge badge-super\"><i class=\"icon-super\"></i></span>
                {% elseif auth %}
                    <span class=\"badge badge-access\"><i class=\"fa fa-check\"></i></span>
                {% else %}
                    <span class=\"badge badge-denied\"><i class=\"fa fa-ban\"></i></span>
                {% endif %}
            {% endif %}
        </div>

        <div class=\"switch-toggle switch-grav medium switch-3\">
            {% for key, text in context.options %}
                {% set parent_id = data.action_parent ? \"toggle_\" ~ field.name ~ \".\" ~ data.action_parent %}
                {% set id = \"toggle_\" ~ field.name ~ \".\" ~ data.action_name ~ key %}
                {% set translation = text|t|trim %}

                <input type=\"radio\"
                       value=\"{{ key }}\"
                       id=\"{{ id }}\"
                       {% if parent_id %}
                       data-parent-id=\"{{ parent_id }}\"
                       {% endif %}
                       name=\"{{ (context.scope ~ field.name)|fieldName }}[{{ data.action_name }}]\"
                       class=\"label{{ key }}\"
                    {% if key|fieldName == '' ~ data.action_value|fieldName %}
                        checked=\"checked\"
                    {% endif %}
                    {% if field.validate.required in ['yes', 'on', 'true', 1, true] %}required=\"required\"{% endif %}
                />

                <label for=\"{{ id }}\">{{ macro.spanToggle(translation, context.maxLen)|trim|raw }}</label>
            {% endfor %}
            <a></a>
        </div>
    </div>

{% endmacro %}

{% import _self as macro %}

{% block global_attributes %}
    data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
    data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
{% endblock %}

{% block input %}
    {% set options = { '1': 'PLUGIN_ADMIN.ALLOWED', '0': 'PLUGIN_ADMIN.DENIED', '': 'PLUGIN_ADMIN.NOT_SET' } %}
    {% set maxLen = 0 %}
    {% for text in options %}
        {% set maxLen = max(text|t|trim|length, maxLen) %}
    {% endfor %}

    {% set permissions = grav.permissions %}
    {% set access = permissions.access(value) %}
    {% if object and field.check_authorize %}
        {% set auth_badges = true %}
        {% set super = object.authorize('admin.super', 'test') %}
    {% endif %}

    <div class=\"permissions-container\">
        {% for section in permissions %}
            {% if section.count %}
            {{ macro.section(section, _context, 0) }}
            {% endif %}
        {% endfor %}

        {# Look for missing actions #}
        {% set unknown %}
        {% for key,val in access.getAllActions() %}
            {% if not permissions.getAction(key) %}
            {{ macro.action({name: key}, _context) }}
            {% endif %}
        {% endfor %}
        {% endset %}

        {% if unknown|trim %}
            <fieldset>
                <legend>Unknown Permissions</legend>
                {{ unknown|raw }}
            </fieldset>
        {% endif %}
    </div>
{% endblock %}


", "forms/fields/permissions/permissions.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\permissions\\permissions.html.twig");
    }
}

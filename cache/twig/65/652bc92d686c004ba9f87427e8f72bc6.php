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

/* forms/fields/acl_picker/acl_picker.html.twig */
class __TwigTemplate_554bf6c82f0333b714196abadfcd0e3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/acl_picker/acl_picker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["permissions"] = twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "permissions", [], "any", false, false, false, 4);
        // line 5
        echo "    ";
        $context["classes"] = ["" => "status-unchecked", 1 => "status-checked", 0 => "status-indeterminate"];
        // line 6
        echo "    ";
        $context["states"] = ["" => 0, 1 => 1, 0 => 2];
        // line 7
        echo "
    ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 8) == "access")) {
            // line 9
            echo "        ";
            $context["groupsList"] = [];
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 11
                echo "            ";
                if ((((twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 11)) : (true))) {
                    // line 12
                    echo "            ";
                    $context["groupsList"] = twig_array_merge(($context["groupsList"] ?? null), [0 => ["label" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 12)), "value" => twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 12)]]);
                    // line 13
                    echo "            ";
                }
                // line 14
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
        ";
            // line 16
            $context["optionsList"] = [];
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["permissions"] ?? null), "instances", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 18
                echo "            ";
                if ((((twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 18)))) ? (twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 18)) : (true))) {
                    // line 19
                    echo "            ";
                    $context["label"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "params", [], "any", false, false, false, 19), "letter", [], "any", false, false, false, 19)) ? (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "parent", [], "any", false, false, false, 19), "label", [], "any", false, false, false, 19)) . " > ")) : ("")) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 19)));
                    // line 20
                    echo "            ";
                    $context["optionsList"] = twig_array_merge(($context["optionsList"] ?? null), [0 => ["text" => (((($context["label"] ?? null) . " (") . twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 20)) . ")"), "value" => twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 20), "optgroup" => twig_get_attribute($this->env, $this->source, $context["action"], "scope", [], "any", false, false, false, 20)]]);
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 23) == "permissions")) {
            // line 24
            echo "        ";
            $context["groups"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "flex", [], "any", false, false, false, 24), "directory", [0 => "user-groups"], "method", false, false, false, 24);
            // line 25
            echo "        ";
            $context["groupsList"] = [];
            // line 26
            echo "        ";
            $context["crudp"] = ["create" => ["letter" => "C", "title" => "Create", "value" => ""], "read" => ["letter" => "R", "title" => "Read", "value" => ""], "update" => ["letter" => "U", "title" => "Update", "value" => ""], "delete" => ["letter" => "D", "title" => "Delete", "value" => ""]];
            // line 32
            echo "
        ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", [0 => "page"], "method", false, false, false, 33)) {
                // line 34
                echo "            ";
                $context["optionsList"] = [0 => ["text" => "Page Authors (Special)", "value" => "authors"], 1 => ["text" => "Default ACL (Special)", "value" => "defaults"]];
                // line 35
                echo "        ";
            } else {
                // line 36
                echo "            ";
                $context["optionsList"] = [];
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["groups"] ?? null), "index", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 39
                echo "        ";
                $context["optionsList"] = twig_array_merge(($context["optionsList"] ?? null), [0 => ["text" => (((twig_get_attribute($this->env, $this->source, $context["group"], "readableName", [], "any", true, true, false, 39) &&  !(null === twig_get_attribute($this->env, $this->source, $context["group"], "readableName", [], "any", false, false, false, 39)))) ? (twig_get_attribute($this->env, $this->source, $context["group"], "readableName", [], "any", false, false, false, 39)) : (twig_get_attribute($this->env, $this->source, $context["group"], "groupname", [], "any", false, false, false, 39))), "value" => twig_get_attribute($this->env, $this->source, $context["group"], "groupname", [], "any", false, false, false, 39)]]);
                // line 40
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    <template data-id=\"acl_picker-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
        <div class=\"permissions-item\" data-field-type=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
            <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
            <select data-grav-selectize=\"";
        // line 46
        echo twig_escape_filter($this->env, json_encode(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
        echo "\"></select>

            ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 48) == "access")) {
            // line 49
            echo "            <div class=\"switch-toggle switch-grav medium switch-3\">
                <input type=\"radio\" value=\"1\" id=\"";
            // line 50
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 50) . "_"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 50))) . "[]"), "html", null, true);
            echo "\" class=\"label1\" checked>

                <label for=\"";
            // line 52
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 52) . "_"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ALLOWED"), "html", null, true);
            echo "</label>

                <input type=\"radio\" value=\"0\" id=\"";
            // line 54
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 54) . "_"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 54))) . "[]"), "html", null, true);
            echo "\" class=\"label0\">

                <label for=\"";
            // line 56
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 56) . "_"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DENIED"), "html", null, true);
            echo "</label>

            </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 59
($context["field"] ?? null), "data_type", [], "any", false, false, false, 59) == "permissions")) {
            // line 60
            echo "                ";
            $context["data_field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(((($context["scope"] ?? null) . "_json.") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 60)));
            // line 61
            echo "                <div class=\"crudp-container\" data-field-name=\"";
            echo twig_escape_filter($this->env, (($context["data_field_name"] ?? null) . "[]"), "html", null, true);
            echo "\">
                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crudp"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["button"]) {
                // line 63
                echo "                        <div>
                            <span class=\"checkboxes indeterminate toggleable status-unchecked hint--top\"
                                  data-_check-status=\"0\"
                                  data-hint=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 66), "html", null, true);
                echo "\">
                                <input type=\"checkbox\"
                                       id=\"";
                // line 68
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 68) . "_") . $context["key"]) . "_"), "html", null, true);
                echo "\"
                                       data-crudp-key=\"";
                // line 69
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                      ";
                // line 71
                echo "                                       indeterminte=\"false\" value=\"\">
                                <label for=\"";
                // line 72
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 72) . "_") . $context["key"]) . "_"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "letter", [], "any", false, false, false, 72), "html", null, true);
                echo "</label>
                            </span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
                    <input type=\"hidden\" name=\"";
            // line 77
            echo twig_escape_filter($this->env, (((($context["data_field_name"] ?? null) . "[][") . ($context["key"] ?? null)) . "]"), "html", null, true);
            echo "\">
                </div>
            ";
        }
        // line 80
        echo "            <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
        </div>
    </template>


    <div class=\"permissions-container\" data-acl_picker_id=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 85), "html", null, true);
        echo "\" data-acl_picker=\"";
        echo twig_escape_filter($this->env, json_encode(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
        echo "\">
        <div class=\"permissions-item empty-list ";
        // line 86
        echo ((twig_length_filter($this->env, ($context["value"] ?? null))) ? ("hidden") : (""));
        echo "\">
            <a href=\"#\" class=\"button add-item\"><i class=\"fa fa-plus\"></i></a>
        </div>

        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["access"]) {
            // line 91
            echo "            <div class=\"permissions-item\" data-field-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 91), "html", null, true);
            echo "\">
                <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
                <select data-grav-selectize=\"";
            // line 93
            echo twig_escape_filter($this->env, json_encode(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
            echo "\">
                    <option value=\"";
            // line 94
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
                </select>
                ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 96) == "access")) {
                // line 97
                echo "                <div class=\"switch-toggle switch-grav medium switch-3\">
                    ";
                // line 98
                $context["rnd"] = twig_random($this->env, 100);
                // line 99
                echo "                    <input type=\"radio\" value=\"1\" id=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 99) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 99))) . "[") . $context["key"]) . "]"), "html", null, true);
                echo "\" class=\"label1\" ";
                echo (($context["access"]) ? ("checked") : (""));
                echo ">

                    <label for=\"";
                // line 101
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 101) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ALLOWED"), "html", null, true);
                echo "</label>

                    ";
                // line 103
                $context["rnd"] = twig_random($this->env, 100);
                // line 104
                echo "                    <input type=\"radio\" value=\"0\" id=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 104) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 104))) . "[") . $context["key"]) . "]"), "html", null, true);
                echo "\" class=\"label0\" ";
                echo (( !$context["access"]) ? ("checked") : (""));
                echo ">

                    <label for=\"";
                // line 106
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 106) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DENIED"), "html", null, true);
                echo "</label>

                </div>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 109
($context["field"] ?? null), "data_type", [], "any", false, false, false, 109) == "permissions")) {
                // line 110
                echo "                    ";
                $context["data_field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(((($context["scope"] ?? null) . "_json.") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 110)));
                // line 111
                echo "                    <div class=\"crudp-container\" data-field-name=\"";
                echo twig_escape_filter($this->env, (($context["data_field_name"] ?? null) . "[]"), "html", null, true);
                echo "\">
                        ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["crudp"] ?? null));
                foreach ($context['_seq'] as $context["crudp_key"] => $context["button"]) {
                    // line 113
                    echo "                            <div>
                                ";
                    // line 114
                    $context["crudp_value"] = (($__internal_compile_0 = (($__internal_compile_1 = ($context["value"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["crudp_key"]] ?? null) : null);
                    // line 115
                    echo "                                <span class=\"checkboxes indeterminate toggleable ";
                    echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["classes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["crudp_value"] ?? null)] ?? null) : null), "html", null, true);
                    echo " hint--top\"
                                      data-_check-status=\"";
                    // line 116
                    echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["states"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["crudp_value"] ?? null)] ?? null) : null), "html", null, true);
                    echo "\"
                                      data-hint=\"";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 117), "html", null, true);
                    echo "\">
                                    <input type=\"checkbox\"
                                           id=\"";
                    // line 119
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 119) . "_") . $context["crudp_key"]) . "_"), "html", null, true);
                    echo "\"
                                           data-crudp-key=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $context["crudp_key"], "html", null, true);
                    echo "\"
                                           ";
                    // line 122
                    echo "                                           indeterminate=\"false\" value=\"";
                    echo twig_escape_filter($this->env, ($context["crudp_value"] ?? null), "html", null, true);
                    echo "\">
                                    <label for=\"";
                    // line 123
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 123) . "_") . $context["crudp_key"]) . "_"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "letter", [], "any", false, false, false, 123), "html", null, true);
                    echo "</label>
                                </span>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['crudp_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (((($context["data_field_name"] ?? null) . "[") . $context["key"]) . "]"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), $context["key"], [], "array", true, true, false, 127)) ? (_twig_default_filter((($__internal_compile_4 = ($context["value"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null), [])) : ([]))), "html", null, true);
                echo "\">
                    </div>
                ";
            }
            // line 130
            echo "                <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/acl_picker/acl_picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 133,  420 => 130,  411 => 127,  399 => 123,  394 => 122,  390 => 120,  386 => 119,  381 => 117,  377 => 116,  372 => 115,  370 => 114,  367 => 113,  363 => 112,  358 => 111,  355 => 110,  353 => 109,  345 => 106,  335 => 104,  333 => 103,  326 => 101,  316 => 99,  314 => 98,  311 => 97,  309 => 96,  302 => 94,  298 => 93,  292 => 91,  288 => 90,  281 => 86,  275 => 85,  268 => 80,  262 => 77,  259 => 76,  247 => 72,  244 => 71,  240 => 69,  236 => 68,  231 => 66,  226 => 63,  222 => 62,  217 => 61,  214 => 60,  212 => 59,  204 => 56,  197 => 54,  190 => 52,  183 => 50,  180 => 49,  178 => 48,  173 => 46,  168 => 44,  164 => 43,  161 => 42,  158 => 41,  152 => 40,  149 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 35,  132 => 34,  130 => 33,  127 => 32,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  109 => 22,  106 => 21,  103 => 20,  100 => 19,  97 => 18,  92 => 17,  90 => 16,  87 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  67 => 10,  64 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    {% set permissions = grav.permissions %}
    {% set classes = { '': 'status-unchecked', 1: 'status-checked', 0: 'status-indeterminate' } %}
    {% set states = { '': 0, 1: 1, 0: 2 } %}

    {% if field.data_type == 'access' %}
        {% set groupsList = [] %}
        {% for action in permissions %}
            {% if (action.visible ?? true) %}
            {% set groupsList = groupsList|merge([{ label: action.label|t, value: action.name }]) %}
            {% endif %}
        {% endfor %}

        {% set optionsList = [] %}
        {% for action in permissions.instances %}
            {% if (action.visible ?? true) %}
            {% set label  = (action.params.letter ? action.parent.label|t ~ ' > ') ~ action.label|t %}
            {% set optionsList = optionsList|merge([{ text: label ~ ' (' ~ action.name ~ ')', value: action.name, optgroup: action.scope }]) %}
            {% endif %}
        {% endfor %}
    {% elseif field.data_type == 'permissions' %}
        {% set groups = grav.flex.directory('user-groups') %}
        {% set groupsList = [] %}
        {% set crudp = {
            create: { letter: 'C', title: 'Create', value: '' },
            read: { letter: 'R', title: 'Read', value: '' },
            update: { letter: 'U', title: 'Update', value: '' },
            delete: { letter: 'D', title: 'Delete', value: '' }
        } %}

        {% if object.hasFlexFeature('page') %}
            {% set optionsList = [{text: 'Page Authors (Special)', value: 'authors'}, {text: 'Default ACL (Special)', value: 'defaults'}] %}
        {% else %}
            {% set optionsList = [] %}
        {% endif %}
        {% for group in groups.index %}
        {% set optionsList = optionsList|merge([{ text: group.readableName ?? group.groupname, value: group.groupname }]) %}
        {% endfor %}
    {% endif %}

    <template data-id=\"acl_picker-{{ field.name }}\">
        <div class=\"permissions-item\" data-field-type=\"{{ field.data_type }}\">
            <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
            <select data-grav-selectize=\"{{ { options: optionsList, optgroups: groupsList }|json_encode }}\"></select>

            {% if field.data_type == 'access' %}
            <div class=\"switch-toggle switch-grav medium switch-3\">
                <input type=\"radio\" value=\"1\" id=\"{{ field.name ~ '_' }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[]' }}\" class=\"label1\" checked>

                <label for=\"{{ field.name ~ '_' }}\">{{ 'PLUGIN_ADMIN.ALLOWED'|t }}</label>

                <input type=\"radio\" value=\"0\" id=\"{{ field.name ~ '_' }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[]' }}\" class=\"label0\">

                <label for=\"{{ field.name ~ '_' }}\">{{ 'PLUGIN_ADMIN.DENIED'|t }}</label>

            </div>
            {% elseif field.data_type == 'permissions' %}
                {% set data_field_name = (scope ~ '_json.' ~ field.name)|fieldName %}
                <div class=\"crudp-container\" data-field-name=\"{{ data_field_name ~ '[]' }}\">
                    {% for key, button in crudp %}
                        <div>
                            <span class=\"checkboxes indeterminate toggleable status-unchecked hint--top\"
                                  data-_check-status=\"0\"
                                  data-hint=\"{{ button.title }}\">
                                <input type=\"checkbox\"
                                       id=\"{{ field.name ~ '_' ~ key ~ '_' }}\"
                                       data-crudp-key=\"{{ key }}\"
                                      {# name=\"{{ (scope ~ field.name)|fieldName ~ '[][' ~ key ~ ']' }}\"#}
                                       indeterminte=\"false\" value=\"\">
                                <label for=\"{{ field.name ~ '_' ~ key ~ '_' }}\">{{ button.letter }}</label>
                            </span>
                        </div>
                    {% endfor %}

                    <input type=\"hidden\" name=\"{{ data_field_name ~ '[][' ~ key ~ ']' }}\">
                </div>
            {% endif %}
            <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
        </div>
    </template>


    <div class=\"permissions-container\" data-acl_picker_id=\"{{ field.name }}\" data-acl_picker=\"{{ { options: optionsList, optgroups: groupsList }|json_encode }}\">
        <div class=\"permissions-item empty-list {{ value|length ? 'hidden' }}\">
            <a href=\"#\" class=\"button add-item\"><i class=\"fa fa-plus\"></i></a>
        </div>

        {% for key, access in value %}
            <div class=\"permissions-item\" data-field-type=\"{{ field.data_type }}\">
                <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
                <select data-grav-selectize=\"{{ { options: optionsList, optgroups: groupsList }|json_encode }}\">
                    <option value=\"{{ key }}\" selected>{{ key }}</option>
                </select>
                {% if field.data_type == 'access' %}
                <div class=\"switch-toggle switch-grav medium switch-3\">
                    {% set rnd = random(100) %}
                    <input type=\"radio\" value=\"1\" id=\"{{ field.name ~ '_' ~ rnd }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ key ~ ']' }}\" class=\"label1\" {{ access ? 'checked' }}>

                    <label for=\"{{ field.name ~ '_' ~ rnd }}\">{{ 'PLUGIN_ADMIN.ALLOWED'|t }}</label>

                    {% set rnd = random(100) %}
                    <input type=\"radio\" value=\"0\" id=\"{{ field.name ~ '_' ~ rnd }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ key ~ ']' }}\" class=\"label0\" {{ not access ? 'checked' }}>

                    <label for=\"{{ field.name ~ '_' ~ rnd }}\">{{ 'PLUGIN_ADMIN.DENIED'|t }}</label>

                </div>
                {% elseif field.data_type == 'permissions' %}
                    {% set data_field_name = (scope ~ '_json.' ~ field.name)|fieldName %}
                    <div class=\"crudp-container\" data-field-name=\"{{ data_field_name ~ '[]' }}\">
                        {% for crudp_key, button in crudp %}
                            <div>
                                {% set crudp_value = value[key][crudp_key] %}
                                <span class=\"checkboxes indeterminate toggleable {{ classes[crudp_value] }} hint--top\"
                                      data-_check-status=\"{{ states[crudp_value] }}\"
                                      data-hint=\"{{ button.title }}\">
                                    <input type=\"checkbox\"
                                           id=\"{{ field.name ~ '_' ~ crudp_key ~ '_' }}\"
                                           data-crudp-key=\"{{ crudp_key }}\"
                                           {#name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ key ~ '][' ~ crudp_key ~ ']' }}\"#}
                                           indeterminate=\"false\" value=\"{{ crudp_value }}\">
                                    <label for=\"{{ field.name ~ '_' ~ crudp_key ~ '_' }}\">{{ button.letter }}</label>
                                </span>
                            </div>
                        {% endfor %}
                        <input type=\"hidden\" name=\"{{ data_field_name ~ '[' ~ key ~ ']' }}\" value=\"{{ value[key]|default([])|json_encode }}\">
                    </div>
                {% endif %}
                <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "forms/fields/acl_picker/acl_picker.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\acl_picker\\acl_picker.html.twig");
    }
}

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

/* forms/default/field.html.twig */
class __TwigTemplate_9971ec19c67a0af672173732aaca9ce1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $_trait_0 = $this->loadTemplate("forms/layouts/field-variables.html.twig", "forms/default/field.html.twig", 3);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."forms/layouts/field-variables.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'field_override_variables_before' => [$this, 'block_field_override_variables_before'],
                'outer_field_classes' => [$this, 'block_outer_field_classes'],
                'global_attributes' => [$this, 'block_global_attributes'],
                'input_attributes' => [$this, 'block_input_attributes'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 112
        return "forms/layouts/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 1), "ignore", [], "any", false, false, false, 1)) {
            // line 6
            $context["field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6)));
            // line 7
            $context["vertical"] = (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 7) == "vertical");
            // line 9
            if (( !($context["blueprints"] ?? null) || ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 9), "type", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 9)], "method", false, true, false, 9), "input@", [], "array", true, true, false, 9) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 9), "type", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 9)], "method", false, true, false, 9)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["input@"] ?? null) : null)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 9), "type", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 9)], "method", false, true, false, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["input@"] ?? null) : null)) : (true)) === true))) {
                // line 10
                $context["default"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 10);
                // line 11
                $context["toggleable"] = (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 11)) : (false));
                // line 12
                if (($context["toggleable"] ?? null)) {
                    // line 13
                    $context["originalValue"] = (($context["originalValue"]) ?? (($context["value"] ?? null)));
                    // line 14
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 15
($context["field"] ?? null), "overridable", [], "any", false, false, false, 15)) {
                    // line 16
                    $context["toggleable"] = true;
                    // line 17
                    $context["default"] = (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)], "method", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)], "method", false, false, false, 17)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)], "method", false, false, false, 17)) : (($context["default"] ?? null)));
                    // line 18
                    $context["toggleableChecked"] = ( !(null === ($context["value"] ?? null)) && (($context["value"] ?? null) != ($context["default"] ?? null)));
                }
                // line 21
                $context["cookie_name"] = ((("forms-" . twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 21)) . "-") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 21));
                // line 22
                $context["value"] = (($context["value"]) ?? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie(($context["cookie_name"] ?? null))));
                // line 23
                $context["has_value"] =  !(($context["value"] ?? null) === null);
                // line 24
                if ( !($context["has_value"] ?? null)) {
                    // line 25
                    $context["value"] = ($context["default"] ?? null);
                }
                // line 28
                if (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "yaml", [], "any", false, false, false, 28) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 28), "type", [], "any", false, false, false, 28) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 29
                    $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->yamlFilter(($context["value"] ?? null));
                }
            } else {
                // line 32
                $context["toggleable"] = false;
            }
            // line 36
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 38
            if (($context["toggleable"] ?? null)) {
                // line 39
                ob_start();
                // line 40
                echo "    ";
                $this->loadTemplate("forms/default/toggleable.html.twig", "forms/default/field.html.twig", 40)->display(twig_array_merge($context, ["checked" => ($context["toggleableChecked"] ?? null)]));
                // line 41
                echo "  ";
                $context["form_field_toggleable"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            }
            // line 44
            $context["errors"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 44), [], "any", false, false, false, 44);
            // line 45
            $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 45), "required", [], "any", false, false, false, 45), [0 => "on", 1 => "true", 2 => 1]));
            // line 46
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 46), [0 => "on", 1 => "true", 2 => 1]));
            // line 48
            if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
                // line 49
                $context["autofocus"] = true;
            }
            // line 52
            ob_start();
            // line 53
            echo "  ";
            $this->displayBlock('outer_field_classes', $context, $blocks);
            $context["embed_outer_field_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            if (($context["errors"] ?? null)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " has-errors");
            }
            // line 58
            if (($context["toggleable"] ?? null)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " form-field-toggleable");
            }
            // line 60
            $context["layout_form_field_outer_classes"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "outerclasses", [], "any", false, false, false, 60);
            // line 61
            $context["layout_form_field_outer_classes"] = ((twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["form_field_outer_classes"] ?? null));
            // line 62
            $context["layout_form_field_outer_classes"] = ((twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["embed_outer_field_classes"] ?? null));
            // line 65
            $context["show_label"] = ( !(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 65) === false) &&  !(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "display_label", [], "any", false, false, false, 65) === false));
            // line 68
            $context["layout_form_field_outer_label_classes"] = twig_trim_filter(((((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label")) . " ") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 68)));
            // line 69
            $context["layout_form_field_label_classes"] = twig_trim_filter(((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline")));
            // line 70
            $context["form_field_label_trim"] = ((($context["toggleable"] ?? null)) ? ("toggleable") : (""));
            // line 73
            $context["layout_form_field_outer_data_classes"] = twig_trim_filter(((((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : (" form-data")) . " ") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "dataclasses", [], "any", false, false, false, 73)));
            // line 76
            $context["layout_form_field_wrapper_classes"] = twig_trim_filter(((((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : (" form-input-wrapper")) . " ") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 76)));
            // line 79
            if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc(($context["field"] ?? null), "array")) {
                // line 80
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 80)) {
                    // line 81
                    $context["field"] = twig_array_merge(($context["field"] ?? null), ["classes" => ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 81) . " ") . twig_trim_filter(                    $this->renderBlock("field_input_classes", $context, $blocks)))]);
                } else {
                    // line 83
                    $context["field"] = twig_array_merge(($context["field"] ?? null), ["classes" =>                     $this->renderBlock("field_input_classes", $context, $blocks)]);
                }
            }
            // line 86
            $context["layout_form_field_input_classes"] = twig_trim_filter(((($context["form_field_input_classes"] ?? null) . " ") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 86)));
            // line 89
            $context["form_field_inline_error_classes"] = ((($context["form_field_inline_error_classes"] ?? null)) ? (($context["form_field_inline_error_classes"] ?? null)) : (" form-errors"));
            // line 92
            $context["form_field_extra_wrapper_classes"] = ("form-extra-wrapper " . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 92));
            // line 95
            $context["form_field_for"] = ((($context["toggleable"] ?? null)) ? (("toggleable_" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 95))) : (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 95))));
            // line 98
            $context["form_field_label"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 98)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 98), false)) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 98)));
            // line 99
            $context["form_field_label"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ((array_key_exists("form_field_label", $context)) ? (_twig_default_filter(($context["form_field_label"] ?? null), twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 99)))) : (twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 99)))));
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 102)) {
                // line 103
                $context["form_field_help"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 103)) ? (twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 103)), false))) : (twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 103)))));
            }
            // line 107
            $context["form_field_required"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 107), "required", [], "any", false, false, false, 107), [0 => "on", 1 => "true", 2 => 1])) ? (true) : (false));
            // line 110
            $context["form_field_description"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 110)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 110)), false)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 110))));
        }
        // line 112
        $this->parent = $this->loadTemplate("forms/layouts/field.html.twig", "forms/default/field.html.twig", 112);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_field_override_variables_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_outer_field_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 114
    public function block_global_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "  data-grav-field=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 115), "html", null, true);
        echo "\"
  data-grav-disabled=\"";
        // line 116
        echo twig_escape_filter($this->env, (($context["toggleable"] ?? null) && ($context["toggleableChecked"] ?? null)), "html", null, true);
        echo "\"
  data-grav-default=\"";
        // line 117
        echo twig_escape_filter($this->env, json_encode(($context["default"] ?? null)), "html_attr");
        echo "\"
";
    }

    // line 120
    public function block_input_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "  class=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["layout_form_field_input_classes"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 121), "html", null, true);
        echo "\"
  ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 122)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 122));
            echo "\" ";
        }
        // line 123
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 123)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 123));
            echo "\" ";
        }
        // line 124
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 124) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 125
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 125)) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 125)), "html_attr");
            echo "\"";
        }
        // line 126
        echo "  ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 127
        echo "  ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 127), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 128
        echo "  ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 128), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 129
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 129)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 129), "html", null, true);
            echo "\"";
        }
        // line 130
        echo "  ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocapitalize", [], "any", false, false, false, 130), [0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"])) {
            echo "autocapitalize=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocapitalize", [], "any", false, false, false, 130), "html", null, true);
            echo "\"";
        }
        // line 131
        echo "  ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputmode", [], "any", false, false, false, 131), [0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"])) {
            echo "inputmode=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputmode", [], "any", false, false, false, 131), "html", null, true);
            echo "\"";
        }
        // line 132
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 132)) {
            echo "tabindex=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 132), "html", null, true);
            echo "\"";
        }
        // line 133
        echo "  ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "spellcheck", [], "any", false, false, false, 133), [0 => "true", 1 => "false"])) {
            echo "spellcheck=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "spellcheck", [], "any", false, false, false, 133), "html", null, true);
            echo "\"";
        }
        // line 134
        echo "  ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 135
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 135), "pattern", [], "any", false, false, false, 135)) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 135), "pattern", [], "any", false, false, false, 135));
            echo "\"";
        }
        // line 136
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 136), "message", [], "any", false, false, false, 136)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 136), "message", [], "any", false, false, false, 136)));
            echo "\"
  ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 137
($context["field"] ?? null), "title", [], "any", true, true, false, 137)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 137)));
            echo "\" ";
        }
        // line 138
        echo "
  ";
        // line 140
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", true, true, false, 140)) {
            // line 141
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 141));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 142
                echo "      ";
                if ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) {
                    // line 143
                    echo "        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 143), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 143), "html_attr");
                    echo "\"
      ";
                } else {
                    // line 145
                    echo "        ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
      ";
                }
                // line 147
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "  ";
        }
        // line 149
        echo "
  ";
        // line 151
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 151)) {
            // line 152
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 152));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 153
                echo "      data-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 155,  390 => 153,  385 => 152,  382 => 151,  379 => 149,  376 => 148,  370 => 147,  362 => 145,  354 => 143,  351 => 142,  346 => 141,  343 => 140,  340 => 138,  334 => 137,  327 => 136,  320 => 135,  315 => 134,  308 => 133,  301 => 132,  294 => 131,  287 => 130,  280 => 129,  275 => 128,  270 => 127,  265 => 126,  258 => 125,  253 => 124,  246 => 123,  240 => 122,  233 => 121,  229 => 120,  223 => 117,  219 => 116,  214 => 115,  210 => 114,  204 => 53,  198 => 4,  193 => 112,  190 => 110,  188 => 107,  185 => 103,  183 => 102,  181 => 99,  179 => 98,  177 => 95,  175 => 92,  173 => 89,  171 => 86,  167 => 83,  164 => 81,  162 => 80,  160 => 79,  158 => 76,  156 => 73,  154 => 70,  152 => 69,  150 => 68,  148 => 65,  146 => 62,  144 => 61,  142 => 60,  138 => 58,  134 => 57,  130 => 53,  128 => 52,  125 => 49,  123 => 48,  121 => 46,  119 => 45,  117 => 44,  113 => 41,  110 => 40,  108 => 39,  106 => 38,  104 => 36,  101 => 32,  97 => 29,  95 => 28,  92 => 25,  90 => 24,  88 => 23,  86 => 22,  84 => 21,  81 => 18,  79 => 17,  77 => 16,  75 => 15,  73 => 14,  71 => 13,  69 => 12,  67 => 11,  65 => 10,  63 => 9,  61 => 7,  59 => 6,  57 => 1,  50 => 112,  28 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore  %}

{% use 'forms/layouts/field-variables.html.twig' %}
{% block field_override_variables_before %}{% endblock %}

{% set field_name = (scope ~ field.name)|fieldName %}
{% set vertical = field.style == 'vertical' %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set default = field.default %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue ?? value %}
        {% set toggleableChecked = originalValue is not null %}
    {% elseif field.overridable %}
        {% set toggleable = true %}
        {% set default = form.getDefaultValue(field.name) ?? default %}
        {% set toggleableChecked = value is not null and value != default %}
    {% endif %}

    {% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
    {% set value = value ?? get_cookie(cookie_name) %}
    {% set has_value = value is not same as(null) %}
    {% if not has_value %}
        {% set value = default %}
    {% endif %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|yaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}

{% if toggleable %}
  {% set form_field_toggleable %}
    {% include 'forms/default/toggleable.html.twig' with {checked: toggleableChecked} %}
  {% endset %}
{% endif %}

{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% set embed_outer_field_classes %}
  {% block outer_field_classes %}{% endblock %}
{% endset %}

{# Field Classes #}
{%- if errors %}{% set form_field_outer_core = form_field_outer_core ~ ' has-errors'  %}{% endif -%}
{%- if toggleable %}{% set form_field_outer_core = form_field_outer_core ~ ' form-field-toggleable' %}{% endif -%}

{% set layout_form_field_outer_classes = field.outerclasses %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ ' ' ~ form_field_outer_classes %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ ' ' ~ embed_outer_field_classes %}

{# Show Label logic #}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false )%}

{# Label Classes #}
{% set layout_form_field_outer_label_classes = ((form_field_outer_label_classes ?: 'form-label') ~ ' ' ~ field.labelclasses)|trim %}
{% set layout_form_field_label_classes = (form_field_label_classes ?: 'inline')|trim %}
{% set form_field_label_trim = toggleable ? 'toggleable' %}

{# Field Outer Data classes #}
{% set layout_form_field_outer_data_classes = ((form_field_outer_data_classes ?: ' form-data') ~ ' ' ~ field.dataclasses)|trim  %}

{# Field Wrapper classes #}
{% set layout_form_field_wrapper_classes = ((form_field_wrapper_classes ?: ' form-input-wrapper') ~ ' ' ~ field.wrapper_classes)|trim %}

{# Field input classes #}
{% if field|of_type('array') %}
  {% if field.classes %}
    {% set field = field|merge({'classes': field.classes ~ ' ' ~ block('field_input_classes')|trim }) %}
  {% else %}
    {% set field = field|merge({'classes': block('field_input_classes') }) %}
  {% endif %}
{% endif %}
{% set layout_form_field_input_classes = (form_field_input_classes ~ ' ' ~ field.classes)|trim %}

{# Inline error classes #}
{% set form_field_inline_error_classes = form_field_inline_error_classes ?: ' form-errors' %}

{# Field extra classes #}
{% set form_field_extra_wrapper_classes = 'form-extra-wrapper ' ~ field.wrapper_classes %}

{# Field For #}
{% set form_field_for = toggleable ? 'toggleable_' ~ field.name : field.id|e %}

{# Field Label #}
{% set form_field_label = field.markdown ? field.label|markdown(false) : field.label %}
{% set form_field_label = form_field_label|default(field.name|capitalize)|t %}

{# Field Help #}
{% if field.help %}
    {% set form_field_help = field.markdown ? field.help|t|markdown(false)|e : field.help|t|e %}
{% endif %}

{# Field Requied #}
{% set form_field_required = field.validate.required in ['on', 'true', 1] ? true : false %}

{# Field Description #}
{% set form_field_description = field.markdown ? field.description|t|markdown(false)|raw : field.description|t|raw %}

{% extends 'forms/layouts/field.html.twig' %}

{% block global_attributes %}
  data-grav-field=\"{{ field.type }}\"
  data-grav-disabled=\"{{ toggleable and toggleableChecked }}\"
  data-grav-default=\"{{ default|json_encode()|e('html_attr') }}\"
{% endblock %}

{% block input_attributes %}
  class=\"{{ layout_form_field_input_classes|trim }} {{ field.size }}\"
  {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
  {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
  {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
  {% if field.placeholder %}placeholder=\"{{ field.placeholder|t|e('html_attr') }}\"{% endif %}
  {% if autofocus %}autofocus=\"autofocus\"{% endif %}
  {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
  {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
  {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
  {% if field.autocapitalize in ['off', 'characters', 'words', 'sentences'] %}autocapitalize=\"{{ field.autocapitalize }}\"{% endif %}
  {% if field.inputmode in ['none', 'text', 'decimal', 'numeric', 'tel', 'search', 'email', 'url'] %}inputmode=\"{{ field.inputmode }}\"{% endif %}
  {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
  {% if field.spellcheck in ['true', 'false'] %}spellcheck=\"{{ field.spellcheck }}\"{% endif %}
  {% if required %}required=\"required\"{% endif %}
  {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
  {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
  {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}

  {# Support key/value and .name/.value styles #}
  {% if field.attributes is defined %}
    {% for key,attribute in field.attributes %}
      {% if attribute|of_type('array') %}
        {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
      {% else %}
        {{ key }}=\"{{ attribute|e('html_attr') }}\"
      {% endif %}
    {% endfor %}
  {% endif %}

  {# Support for Custom data attributes#}
  {% if field.datasets %}
    {% for key, attribute in field.datasets %}
      data-{{ key }}=\"{{ attribute|e('html_attr') }}\"
    {% endfor %}
  {% endif %}
{% endblock %}

{% endif %}
", "forms/default/field.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\form\\templates\\forms\\default\\field.html.twig");
    }
}

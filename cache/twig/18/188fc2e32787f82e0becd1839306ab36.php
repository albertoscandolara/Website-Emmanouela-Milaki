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

/* forms/field.html.twig */
class __TwigTemplate_c55c05a1e84bfe637783ab0641ee2d93 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 1), "ignore", [], "any", false, false, false, 1)) {
            // line 2
            echo "
";
            // line 3
            if (( !($context["blueprints"] ?? null) || ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 3), "type", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 3)], "method", false, true, false, 3), "input@", [], "array", true, true, false, 3) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 3), "type", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 3)], "method", false, true, false, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["input@"] ?? null) : null)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 3), "type", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 3)], "method", false, true, false, 3)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["input@"] ?? null) : null)) : (true)) === true))) {
                // line 4
                echo "    ";
                $context["default"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 4);
                // line 5
                echo "    ";
                $context["toggleable"] = (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 5)) : (false));
                // line 6
                echo "    ";
                if (($context["toggleable"] ?? null)) {
                    // line 7
                    echo "        ";
                    $context["originalValue"] = (($context["originalValue"]) ?? (($context["value"] ?? null)));
                    // line 8
                    echo "        ";
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                    // line 9
                    echo "    ";
                }
                // line 10
                echo "
    ";
                // line 11
                $context["has_value"] =  !(null === ($context["value"] ?? null));
                // line 12
                echo "    ";
                if ( !($context["has_value"] ?? null)) {
                    // line 13
                    echo "        ";
                    $context["value"] = ($context["default"] ?? null);
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "
    ";
                // line 16
                if (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "yaml", [], "any", false, false, false, 16) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 16), "type", [], "any", false, false, false, 16) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 17
                    echo "        ";
                    $context["value"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->toYamlFilter(($context["value"] ?? null));
                    // line 18
                    echo "    ";
                }
            } else {
                // line 20
                echo "    ";
                $context["toggleable"] = false;
            }
            // line 22
            $context["vertical"] = (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 22) == "vertical");
            // line 23
            $context["field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 23)));
            // line 24
            $context["show_label"] = ( !(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 24) === false) &&  !(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "display_label", [], "any", false, false, false, 24) === false));
            // line 25
            echo "
";
            // line 27
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 28
            echo "
";
            // line 29
            $this->displayBlock('field', $context, $blocks);
            // line 129
            echo "
";
        }
    }

    // line 29
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <div class=\"form-field grid";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if (($context["toggleable"] ?? null)) {
            echo " form-field-toggleable";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "outerclasses", [], "any", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_classes", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
        ";
        // line 31
        $this->displayBlock('contents', $context, $blocks);
        // line 127
        echo "    </div>
";
    }

    // line 31
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            ";
        if (($context["show_label"] ?? null)) {
            // line 33
            echo "            <div class=\"form-label";
            if ( !($context["vertical"] ?? null)) {
                echo " block size-1-3";
            }
            echo "\">
                ";
            // line 34
            if (($context["toggleable"] ?? null)) {
                // line 35
                echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "\"
                               ";
                // line 38
                if (($context["toggleableChecked"] ?? null)) {
                    echo "value=\"1\"";
                }
                // line 39
                echo "                               name=\"toggleable_";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\"
                               ";
                // line 40
                if (($context["toggleableChecked"] ?? null)) {
                    echo "checked=\"checked\"";
                }
                // line 41
                echo "                        >
                        <label for=\"toggleable_";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 42), "html", null, true);
                echo "\"></label>
                    </span>
                ";
            }
            // line 45
            echo "               <label";
            echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 45)) ? (((((" class=\"toggleable " . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 45)) . "\" for=\"toggleable_") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 45)) . "\"")) : (((" class=\"" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 45)) . "\"")));
            echo ">
                ";
            // line 46
            $this->displayBlock('label', $context, $blocks);
            // line 62
            echo "                </label>
                ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 63)) {
                // line 64
                echo "                <div class=\"form-sublabel ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "sublabelclasses", [], "any", false, false, false, 64), "html", null, true);
                echo "\">
                    ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "                        ";
                    echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 66)), false);
                    echo "
                    ";
                } else {
                    // line 68
                    echo "                        ";
                    echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 68));
                    echo "
                    ";
                }
                // line 70
                echo "                </div>
                ";
            }
            // line 72
            echo "            </div>
            ";
        }
        // line 74
        echo "            <div class=\"form-data";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 75
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 80
        echo "            >
                ";
        // line 81
        $this->displayBlock('group', $context, $blocks);
        // line 114
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 114)) {
            // line 115
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 117)) {
                // line 118
                echo "                                ";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 118)), false);
                echo "
                            ";
            } else {
                // line 120
                echo "                                ";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 120));
                echo "
                            ";
            }
            // line 122
            echo "                        </span>
                    </div>
                ";
        }
        // line 125
        echo "            </div>
        ";
    }

    // line 46
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 47)) {
            // line 48
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 48)) {
                // line 49
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 49)), false);
                echo "\">";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 49)), false);
                echo "</span> <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            } else {
                // line 51
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 51)), "html", null, true);
                echo "\">";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 51));
                echo " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            }
            // line 53
            echo "                    ";
        } else {
            // line 54
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 54)) {
                // line 55
                echo "                            ";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 55)), false);
                echo "
                        ";
            } else {
                // line 57
                echo "                            ";
                echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 57));
                echo "
                        ";
            }
            // line 59
            echo "                    ";
        }
        // line 60
        echo "                    ";
        echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 60), "required", [], "any", false, false, false, 60), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 75
    public function block_global_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 76), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 78
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 78)), "html_attr");
        echo "\"
                ";
    }

    // line 81
    public function block_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 113
        echo "                ";
    }

    // line 82
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                        <div class=\"form-input-wrapper ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 83), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 83), "html", null, true);
        echo "\">
                            ";
        // line 84
        $this->displayBlock('prepend', $context, $blocks);
        // line 85
        echo "                            ";
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 86
        echo "                            <input
                                ";
        // line 88
        echo "                                name=\"";
        echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
        echo "\"
                                value=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
                                ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, false, 90)) {
            // line 91
            echo "                                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . ($context["field_name"] ?? null))), "html", null, true);
            echo "\"
                                ";
        }
        // line 93
        echo "                                ";
        // line 94
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 109
        echo "                            />
                            ";
        // line 110
        $this->displayBlock('append', $context, $blocks);
        // line 111
        echo "                        </div>
                    ";
    }

    // line 84
    public function block_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 94
    public function block_input_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 95)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 95), "html", null, true);
            echo "\" ";
        }
        // line 96
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 96)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\" ";
        }
        // line 97
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 97)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 97), "html", null, true);
            echo "\" ";
        }
        // line 98
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 98) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 99
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 99)) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 99)), "html", null, true);
            echo "\"";
        }
        // line 100
        echo "                                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 100), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 101
        echo "                                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 101), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 102
        echo "                                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 102), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 103
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 103)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 103), "html", null, true);
            echo "\"";
        }
        // line 104
        echo "                                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 104), "required", [], "any", false, false, false, 104), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 105
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 105), "pattern", [], "any", false, false, false, 105)) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 105), "pattern", [], "any", false, false, false, 105), "html", null, true);
            echo "\"";
        }
        // line 106
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 106), "message", [], "any", false, false, false, 106)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 106), "message", [], "any", false, false, false, 106)), "html", null, true);
            echo "\"
                                    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 107
($context["field"] ?? null), "title", [], "any", true, true, false, 107)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 107)), "html", null, true);
            echo "\" ";
        }
        // line 108
        echo "                                ";
    }

    // line 110
    public function block_append($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 110,  507 => 108,  501 => 107,  494 => 106,  487 => 105,  482 => 104,  475 => 103,  470 => 102,  465 => 101,  460 => 100,  453 => 99,  448 => 98,  441 => 97,  434 => 96,  427 => 95,  423 => 94,  417 => 84,  412 => 111,  410 => 110,  407 => 109,  404 => 94,  402 => 93,  396 => 91,  394 => 90,  390 => 89,  385 => 88,  382 => 86,  379 => 85,  377 => 84,  370 => 83,  366 => 82,  362 => 113,  359 => 82,  355 => 81,  349 => 78,  345 => 77,  340 => 76,  336 => 75,  329 => 60,  326 => 59,  320 => 57,  314 => 55,  311 => 54,  308 => 53,  300 => 51,  292 => 49,  289 => 48,  286 => 47,  282 => 46,  277 => 125,  272 => 122,  266 => 120,  260 => 118,  258 => 117,  252 => 115,  249 => 114,  247 => 81,  244 => 80,  242 => 75,  235 => 74,  231 => 72,  227 => 70,  221 => 68,  215 => 66,  213 => 65,  208 => 64,  206 => 63,  203 => 62,  201 => 46,  196 => 45,  190 => 42,  187 => 41,  183 => 40,  178 => 39,  174 => 38,  170 => 37,  164 => 35,  162 => 34,  155 => 33,  152 => 32,  148 => 31,  143 => 127,  141 => 31,  127 => 30,  123 => 29,  117 => 129,  115 => 29,  112 => 28,  110 => 27,  107 => 25,  105 => 24,  103 => 23,  101 => 22,  97 => 20,  93 => 18,  90 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set default = field.default %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue ?? value %}
        {% set toggleableChecked = originalValue is not null %}
    {% endif %}

    {% set has_value = value is not null %}
    {% if not has_value %}
        {% set value = default %}
    {% endif %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|toYaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}
{% set vertical = field.style == 'vertical' %}
{% set field_name = (scope ~ field.name)|fieldName %}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false) %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}

{% block field %}
    <div class=\"form-field grid{% if vertical %} vertical{% endif %}{% if toggleable %} form-field-toggleable{% endif %} {{ field.outerclasses }} {{ field.field_classes }}\">
        {% block contents %}
            {% if show_label %}
            <div class=\"form-label{% if not vertical %} block size-1-3{% endif %}\">
                {% if toggleable %}
                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ field_name }}\">
                        <input type=\"checkbox\"
                               id=\"toggleable_{{ field.name }}\"
                               {% if toggleableChecked %}value=\"1\"{% endif %}
                               name=\"toggleable_{{ field_name }}\"
                               {% if toggleableChecked %}checked=\"checked\"{% endif %}
                        >
                        <label for=\"toggleable_{{ field.name }}\"></label>
                    </span>
                {% endif %}
               <label{{ (field.toggleable ? ' class=\"toggleable ' ~ field.labelclasses ~ '\" for=\"toggleable_' ~ field.name ~ '\"' : ' class=\"' ~ field.labelclasses ~ '\"')|raw }}>
                {% block label %}
                    {% if field.help %}
                        {% if field.markdown %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|t|markdown(false) }}\">{{ field.label|t|markdown(false)|raw }}</span> <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        {% else %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|t }}\">{{ field.label|t|raw }} <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        {% endif %}
                    {% else %}
                        {% if field.markdown %}
                            {{ field.label|t|markdown(false)|raw }}
                        {% else %}
                            {{ field.label|t|raw }}
                        {% endif %}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
                {% if field.sublabel %}
                <div class=\"form-sublabel {{ field.sublabelclasses }}\">
                    {% if field.markdown %}
                        {{ field.sublabel|t|markdown(false)|raw }}
                    {% else %}
                        {{ field.sublabel|t|raw }}
                    {% endif %}
                </div>
                {% endif %}
            </div>
            {% endif %}
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ toggleableChecked }}\"
                data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            {% set input_value = value is iterable ? value|join(',') : value|string %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ field_name }}\"
                                value=\"{{ input_value }}\"
                                {% if field.key %}
                                    data-key-observe=\"{{ (scope ~ field_name)|fieldName }}\"
                                {% endif %}
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|t|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|t|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}

{% endif %}
", "forms/field.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\field.html.twig");
    }
}

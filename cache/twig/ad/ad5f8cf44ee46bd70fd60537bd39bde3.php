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

/* flex-objects/types/pages/edit.html.twig */
class __TwigTemplate_1bb831519f491a00c21ee8ec032098ad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'content_top' => [$this, 'block_content_top'],
            'topbar' => [$this, 'block_topbar'],
            'edit' => [$this, 'block_edit'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["expert"] = (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => "admin.super"], "method", false, false, false, 4) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "session", [], "any", false, false, false, 4), "expert", [], "any", false, false, false, 4) != "0"));
        // line 5
        if ((($context["expert"] ?? null) ||  !array_key_exists("form", $context))) {
            // line 6
            $context["form"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "form", [0 => ((($context["expert"] ?? null)) ? ("raw") : (""))], "method", false, false, false, 6);
            // line 7
            $context["object"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 7);
        }
        // line 10
        $context["title"] = (($context["title"]) ?? ((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getValue", [0 => "header.title"], "method", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getValue", [0 => "header.title"], "method", false, false, false, 10)))) ? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getValue", [0 => "header.title"], "method", false, false, false, 10)) : ((((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 10)))) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 10)) : (($context["key"] ?? null)))))));
        // line 11
        $context["parent"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "parent", [], "any", false, false, false, 11);
        // line 12
        $context["can_read"] = (($context["can_read"]) ?? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->boolFilter(((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "read", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 12))))));
        // line 13
        $context["can_copy"] = (($context["can_copy"]) ?? ((twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "exists", [], "any", false, false, false, 13) && twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 13))));
        // line 14
        $context["can_create"] = (($context["can_create"]) ?? ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 14) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 14))));
        // line 15
        $context["can_save"] = (($context["can_save"]) ?? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->boolFilter(((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 15)) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "update", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 15)) : (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method", false, false, false, 15))))));
        // line 16
        $context["can_move"] = ((($context["can_move"]) ?? (($context["can_save"] ?? null))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 16), "schema", [], "any", false, false, false, 16), "property", [0 => "route"], "method", false, false, false, 16), "type", [], "any", false, false, false, 16) === "parents"));
        // line 17
        $context["can_translate"] = (($context["can_translate"]) ?? (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 17) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", [0 => "page-translate"], "method", false, false, false, 17)) &&  !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 17))));
        // line 22
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/edit.html.twig", "flex-objects/types/pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $context["current_route"] = ("/" . twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [0 => 1], "method", false, false, false, 25));
        // line 26
        echo "
    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 27)) {
            // line 28
            echo "    ";
            $context["child"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "children", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28);
            // line 29
            echo "    ";
            $context["prev"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "prevSibling", [], "any", false, false, false, 29);
            // line 30
            echo "    ";
            $context["next"] = twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "nextSibling", [], "any", false, false, false, 30);
            // line 31
            echo "
    ";
            // line 32
            $context["parent_url"] = (((($context["parent"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "root", [], "any", false, false, false, 32))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["back_route"] ?? null))) : (""));
            // line 33
            echo "    ";
            $context["child_url"] = (((($context["can_read"] ?? null) && ($context["child"] ?? null))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(((($context["current_route"] ?? null) . "/") . twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "slug", [], "any", false, false, false, 33)))) : (""));
            // line 34
            echo "    ";
            $context["prev_url"] = (((($context["can_read"] ?? null) && ($context["prev"] ?? null))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(((($context["back_route"] ?? null) . "/") . twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "slug", [], "any", false, false, false, 34)))) : (""));
            // line 35
            echo "    ";
            $context["next_url"] = (((($context["can_read"] ?? null) && ($context["next"] ?? null))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(((($context["back_route"] ?? null) . "/") . twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "slug", [], "any", false, false, false, 35)))) : (""));
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(twig_get_attribute($this->env, $this->source, ($context["flex"] ?? null), "adminRoute", [0 => twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "getFlexType", [], "method", false, false, false, 37)], "method", false, false, false, 37))));
        // line 38
        echo "
    ";
        // line 39
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_back_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/pages/buttons/back.html.twig"], "flex-objects/types/pages/edit.html.twig", 43)->display(twig_array_merge($context, ["back_url" =>         // line 44
($context["back_url"] ?? null)]));
        // line 45
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 45)) {
            // line 46
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-prev.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-prev.html.twig"], "flex-objects/types/pages/edit.html.twig", 46)->display(twig_array_merge($context, ["prev_url" =>             // line 47
($context["prev_url"] ?? null), "title" => twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "route", [], "any", false, false, false, 47)]));
            // line 48
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-parent.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-parent.html.twig"], "flex-objects/types/pages/edit.html.twig", 48)->display(twig_array_merge($context, ["parent_url" =>             // line 49
($context["parent_url"] ?? null), "title" => twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "route", [], "any", false, false, false, 49)]));
            // line 50
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-child.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-child.html.twig"], "flex-objects/types/pages/edit.html.twig", 50)->display(twig_array_merge($context, ["child_url" =>             // line 51
($context["child_url"] ?? null), "title" => twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "route", [], "any", false, false, false, 51)]));
            // line 52
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-next.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-next.html.twig"], "flex-objects/types/pages/edit.html.twig", 52)->display(twig_array_merge($context, ["next_url" =>             // line 53
($context["next_url"] ?? null), "title" => twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "route", [], "any", false, false, false, 53)]));
            // line 54
            echo "    ";
        }
    }

    // line 57
    public function block_preview_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 58) &&  !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 58))) {
            // line 59
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), 1 => "flex-objects/types/pages/buttons/preview.html.twig"], "flex-objects/types/pages/edit.html.twig", 59)->display($context);
            // line 60
            echo "    ";
        }
    }

    // line 63
    public function block_delete_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    ";
        // line 65
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 65)) {
            // line 66
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), 1 => "flex-objects/types/pages/buttons/delete.html.twig"], "flex-objects/types/pages/edit.html.twig", 66)->display($context);
            // line 67
            echo "    ";
        }
    }

    // line 70
    public function block_extra_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 71) &&  !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 71))) {
            // line 72
            echo "    ";
            if (($context["can_create"] ?? null)) {
                // line 73
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/pages/buttons/add.html.twig"], "flex-objects/types/pages/edit.html.twig", 73)->display($context);
                // line 74
                echo "    ";
            }
            // line 75
            echo "    ";
            if (($context["can_copy"] ?? null)) {
                // line 76
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/copy.html.twig"), 1 => "flex-objects/types/pages/buttons/copy.html.twig"], "flex-objects/types/pages/edit.html.twig", 76)->display($context);
                // line 77
                echo "    ";
            }
            // line 78
            echo "    ";
            if (($context["can_move"] ?? null)) {
                // line 79
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/move.html.twig"), 1 => "flex-objects/types/pages/buttons/move.html.twig"], "flex-objects/types/pages/edit.html.twig", 79)->display($context);
                // line 80
                echo "    ";
            }
            // line 81
            echo "    ";
        }
    }

    // line 84
    public function block_save_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), 1 => "flex-objects/types/pages/buttons/save.html.twig"], "flex-objects/types/pages/edit.html.twig", 85)->display($context);
    }

    // line 88
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "    ";
        if ((($context["allowed"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => "admin.super"], "method", false, false, false, 89))) {
            // line 90
            echo "    <div class=\"alert notice\">
        ";
            // line 91
            $context["save_location"] = ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 91)) ? (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 91)) : (twig_get_attribute($this->env, $this->source, ($context["directory"] ?? null), "getStorageFolder", [], "method", false, false, false, 91)));
            // line 92
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo " ";
            (( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 92)) ? (print (twig_escape_filter($this->env, (("[" . twig_upper_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true))) : (print ("")));
            echo "</b> (type: <b>";
            ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getValue", [0 => "name"], "method", false, false, false, 92)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getValue", [0 => "name"], "method", false, false, false, 92), "html", null, true))) : (print ("default")));
            echo "</b>)
    </div>
    ";
        }
        // line 95
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 95) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "flash", [], "any", false, false, false, 95), "exists", [], "any", false, false, false, 95))) {
            // line 96
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT"), "html", null, true);
            echo " <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        // line 100
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 100)) {
            // line 101
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.NOT_CREATED_YET"), "html", null, true);
            echo "
        </div>
    ";
        } elseif (        // line 104
($context["can_translate"] ?? null)) {
            // line 105
            echo "        ";
            $context["is_default"] = (($context["language"] ?? null) === ($context["default_language"] ?? null));
            // line 106
            echo "        ";
            if ((($context["is_default"] ?? null) && twig_in_filter(($context["default_language"] ?? null), ($context["object_languages"] ?? null)))) {
                // line 107
                echo "            ";
                if (( !($context["translate_include_default"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "property", [0 => "lang"], "method", false, false, false, 107))) {
                    // line 108
                    echo "            ";
                    // line 109
                    echo "            <div class=\"alert secondary-accent\">
                ";
                    // line 110
                    $context["overrideLanguage"] = (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true, false, 110) &&  !(null === (($__internal_compile_0 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["object_language"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["object_language"] ?? null)] ?? null) : null)) : (($context["object_language"] ?? null)));
                    // line 111
                    echo "                ";
                    echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_OVERRIDE", ($context["overrideLanguage"] ?? null), null);
                    echo "
                ";
                    // line 112
                    echo ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method", false, false, false, 112)) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT")) : (""));
                    echo "
            </div>
            ";
                } elseif (                // line 114
($context["translate_include_default"] ?? null)) {
                    // line 115
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "property", [0 => "lang"], "method", false, false, false, 115)) {
                        // line 116
                        echo "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 117
                        echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_DEFAULT");
                        echo "
                    </div>
                ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 119
($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method", false, false, false, 119)) {
                        // line 120
                        echo "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 121
                        echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT");
                        echo "
                    </div>
                ";
                    }
                    // line 124
                    echo "            ";
                }
                // line 125
                echo "        ";
            } elseif ( !($context["has_translation"] ?? null)) {
                // line 126
                echo "        <div class=\"alert warning\">
            ";
                // line 127
                $context["overrideLanguage"] = (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array", true, true, false, 127) &&  !(null === (($__internal_compile_2 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["language"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["language"] ?? null)] ?? null) : null)) : (($context["object_language"] ?? null)));
                // line 128
                echo "            ";
                echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NOT_TRANSLATED_YET", ($context["overrideLanguage"] ?? null), null);
                echo "
            ";
                // line 129
                if ((($context["language"] ?? null) == ($context["object_language"] ?? null))) {
                    // line 130
                    echo "                ";
                    echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NO_FALLBACK_FOUND");
                    echo "
            ";
                } else {
                    // line 132
                    echo "                ";
                    $context["overrideLanguage"] = (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true, false, 132) &&  !(null === (($__internal_compile_4 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["object_language"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["object_language"] ?? null)] ?? null) : null)) : (($context["object_language"] ?? null)));
                    // line 133
                    echo "                ";
                    echo $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.FALLING_BACK", ($context["overrideLanguage"] ?? null), null);
                    echo "
            ";
                }
                // line 135
                echo "        </div>
        ";
            }
            // line 137
            echo "    ";
        }
    }

    // line 140
    public function block_topbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "    ";
        if (($context["can_translate"] ?? null)) {
            // line 142
            echo "        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                ";
            // line 145
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true, false, 145) &&  !(null === (($__internal_compile_6 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["object_language"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["object_language"] ?? null)] ?? null) : null)) : (($context["object_language"] ?? null))), "html", null, true);
            echo "
            </button>
            ";
            // line 147
            if ((count(($context["object_languages"] ?? null)) > $this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(twig_in_filter(($context["object_language"] ?? null), ($context["object_languages"] ?? null))))) {
                // line 148
                echo "                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["object_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 153
                    echo "                    ";
                    if (($context["lang_code"] != ($context["object_language"] ?? null))) {
                        // line 154
                        echo "                    <li>
                        <a href=\"";
                        // line 155
                        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [0 => 1], "method", false, false, false, 155), $context["lang_code"]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true, false, 155) &&  !(null === (($__internal_compile_8 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["lang_code"]] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["all_languages"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["lang_code"]] ?? null) : null)) : ($context["lang_code"])), "html", null, true);
                        echo "</a>
                    </li>
                    ";
                    }
                    // line 158
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                </ul>
            ";
            }
            // line 161
            echo "        </div>
    ";
        }
        // line 163
        echo "
    ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [0 => "admin.super"], "method", false, false, false, 164)) {
            // line 165
            echo "    <form id=\"admin-mode-toggle\">
        ";
            // line 166
            $context["normalText"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.NORMAL");
            // line 167
            echo "        ";
            $context["expertText"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.EXPERT");
            // line 168
            echo "        ";
            $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
            // line 169
            echo "        ";
            $context["normalText"] = twig_call_macro($macros["macro"], "macro_spanToggle", [($context["normalText"] ?? null), ($context["maxLen"] ?? null)], 169, $context, $this->getSourceContext());
            // line 170
            echo "        ";
            $context["expertText"] = twig_call_macro($macros["macro"], "macro_spanToggle", [($context["expertText"] ?? null), ($context["maxLen"] ?? null)], 170, $context, $this->getSourceContext());
            // line 171
            echo "
        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "normal"], "method", false, false, false, 173), "toString", [0 => true], "method", false, false, false, 173), "html", null, true);
            echo "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
            if ((($context["expert"] ?? null) == "0")) {
                echo " checked=\"checked\"";
            }
            echo ">
            <label for=\"normal\">";
            // line 174
            echo twig_escape_filter($this->env, ($context["normalText"] ?? null), "html", null, true);
            echo "</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "expert"], "method", false, false, false, 175), "toString", [0 => true], "method", false, false, false, 175), "html", null, true);
            echo "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
            if ((($context["expert"] ?? null) == "1")) {
                echo " checked=\"checked\"";
            }
            echo ">
            <label for=\"expert\">";
            // line 176
            echo twig_escape_filter($this->env, ($context["expertText"] ?? null), "html", null, true);
            echo "</label>
            <a></a>
        </div>
    </form>
    ";
        }
    }

    // line 183
    public function block_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/pages/edit.html.twig", 184)->display(twig_array_merge($context, ["context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null), "blueprints" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 184)]));
    }

    // line 187
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 190
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/pages/edit.html.twig", 190)->display($context);
        // line 191
        echo "
    ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 192)) {
            // line 193
            echo "        ";
            $context["modal_data"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->dataFunc(["route" => ("/" . twig_get_attribute($this->env, $this->source,             // line 194
($context["object"] ?? null), "key", [], "any", false, false, false, 194)), "name" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 195
($context["object"] ?? null), "header", [], "any", false, true, false, 195), "child_type", [], "any", true, true, false, 195) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "header", [], "any", false, true, false, 195), "child_type", [], "any", false, false, false, 195)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "header", [], "any", false, true, false, 195), "child_type", [], "any", false, false, false, 195)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "blueprint", [], "any", false, true, false, 195), "child_type", [], "any", true, true, false, 195) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "blueprint", [], "any", false, true, false, 195), "child_type", [], "any", false, false, false, 195)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "blueprint", [], "any", false, true, false, 195), "child_type", [], "any", false, false, false, 195)) : ("default"))))]);
            // line 197
            echo "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 199
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 199)->display(twig_array_merge($context, ["form" => null, "blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method", false, false, false, 199), "data" => ($context["modal_data"] ?? null), "form_id" => "new-page"]));
            // line 200
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 203
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "flex-objects/types/pages/edit.html.twig", 203)->display(twig_array_merge($context, ["form" => null, "blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method", false, false, false, 203), "data" => ($context["modal_data"] ?? null), "form_id" => "new-folder"]));
            // line 204
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 207
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 207)->display(twig_array_merge($context, ["form" => null, "blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method", false, false, false, 207), "data" => ($context["modal_data"] ?? null), "form_id" => "new-module"]));
            // line 208
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 211
            $this->loadTemplate("partials/blueprints-copy.html.twig", "flex-objects/types/pages/edit.html.twig", 211)->display(twig_array_merge($context, ["blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/copy"], "method", false, false, false, 211), "data" => $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->dataFunc(["title" => (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 211) . " (Copy)"), "folder" => (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "slug", [], "any", false, false, false, 211) . "-copy")]), "form_id" => "copy"]));
            // line 212
            echo "        </div>
    ";
        }
        // line 214
        echo "
    ";
        // line 216
        echo "
    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.PARENTS"), "html", null, true);
        echo "</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        echo "</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

";
    }

    // line 231
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
    }

    // line 19
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
            // line 20
            echo "    ";
            echo (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 20,  611 => 19,  601 => 232,  597 => 231,  587 => 224,  583 => 223,  577 => 220,  573 => 219,  568 => 216,  565 => 214,  561 => 212,  559 => 211,  554 => 208,  552 => 207,  547 => 204,  545 => 203,  540 => 200,  538 => 199,  534 => 197,  532 => 195,  531 => 194,  529 => 193,  527 => 192,  524 => 191,  522 => 190,  516 => 188,  512 => 187,  507 => 184,  503 => 183,  493 => 176,  485 => 175,  481 => 174,  473 => 173,  469 => 171,  466 => 170,  463 => 169,  460 => 168,  457 => 167,  455 => 166,  452 => 165,  450 => 164,  447 => 163,  443 => 161,  439 => 159,  433 => 158,  425 => 155,  422 => 154,  419 => 153,  415 => 152,  409 => 148,  407 => 147,  402 => 145,  397 => 142,  394 => 141,  390 => 140,  385 => 137,  381 => 135,  375 => 133,  372 => 132,  366 => 130,  364 => 129,  359 => 128,  357 => 127,  354 => 126,  351 => 125,  348 => 124,  342 => 121,  339 => 120,  337 => 119,  332 => 117,  329 => 116,  326 => 115,  324 => 114,  319 => 112,  314 => 111,  312 => 110,  309 => 109,  307 => 108,  304 => 107,  301 => 106,  298 => 105,  296 => 104,  291 => 102,  288 => 101,  285 => 100,  277 => 97,  274 => 96,  271 => 95,  258 => 92,  256 => 91,  253 => 90,  250 => 89,  246 => 88,  241 => 85,  237 => 84,  232 => 81,  229 => 80,  226 => 79,  223 => 78,  220 => 77,  217 => 76,  214 => 75,  211 => 74,  208 => 73,  205 => 72,  202 => 71,  198 => 70,  193 => 67,  190 => 66,  187 => 65,  185 => 64,  181 => 63,  176 => 60,  173 => 59,  170 => 58,  166 => 57,  161 => 54,  159 => 53,  157 => 52,  155 => 51,  153 => 50,  151 => 49,  149 => 48,  147 => 47,  145 => 46,  142 => 45,  140 => 44,  138 => 43,  134 => 42,  128 => 39,  125 => 38,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  110 => 33,  108 => 32,  105 => 31,  102 => 30,  99 => 29,  96 => 28,  94 => 27,  91 => 26,  88 => 25,  84 => 24,  79 => 1,  77 => 22,  75 => 17,  73 => 16,  71 => 15,  69 => 14,  67 => 13,  65 => 12,  63 => 11,  61 => 10,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/edit.html.twig' %}

{# Avoid defining form and object twice: object should always come from the form! #}
{% set expert = user.authorize('admin.super') and admin.session.expert != '0' %}
{% if expert or form is not defined %}
    {% set form = object.form(expert ? 'raw' : '') %}
    {% set object = form.object %}
{% endif %}

{% set title = title ?? form.getValue('header.title') ?? object.title ?? key %}
{% set parent = object.parent %}
{% set can_read = can_read ?? (object.exists ? object.isAuthorized('read', 'admin', user) : object.isAuthorized('create', 'admin', user))|bool %}
{% set can_copy = can_copy ?? (parent.exists and parent.isAuthorized('create', 'admin', user)) %}
{% set can_create = can_create ?? (object.exists and object.isAuthorized('create', 'admin', user)) %}
{% set can_save = can_save ?? (object.exists ? object.isAuthorized('update', 'admin', user) : object.isAuthorized('create', 'admin', user))|bool %}
{% set can_move = can_move ?? can_save and form.blueprint.schema.property('route').type is same as('parents') %}
{% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('page-translate') and not object.root()) %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}
{% import _self as macro %}

{% block body %}
    {% set current_route = '/' ~ route.getRoute(1) %}

    {% if not object.root() %}
    {% set child = object.children.first %}
    {% set prev = object.prevSibling %}
    {% set next = object.nextSibling %}

    {% set parent_url = parent and not parent.root ? admin_route(back_route) %}
    {% set child_url = can_read and child ? admin_route(current_route ~ '/' ~ child.slug) %}
    {% set prev_url = can_read and prev ? admin_route(back_route ~ '/' ~ prev.slug) %}
    {% set next_url = can_read and next ? admin_route(back_route ~ '/' ~ next.slug) %}
    {% endif %}
    {% set back_url = back_url ?? admin_route(flex.adminRoute(directory.getFlexType())) %}

    {{ parent() }}
{% endblock body %}

{% block back_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/pages/buttons/back.html.twig']
        with { back_url: back_url } %}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-prev.html.twig', 'flex-objects/types/pages/buttons/nav-prev.html.twig']
        with { prev_url: prev_url, title: prev.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-parent.html.twig', 'flex-objects/types/pages/buttons/nav-parent.html.twig']
        with { parent_url: parent_url, title: parent.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-child.html.twig', 'flex-objects/types/pages/buttons/nav-child.html.twig']
        with { child_url: child_url, title: child.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-next.html.twig', 'flex-objects/types/pages/buttons/nav-next.html.twig']
        with { next_url: next_url, title: next.route } %}
    {% endif %}
{% endblock back_button %}

{% block preview_button %}
    {% if object.exists and not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/preview.html.twig', 'flex-objects/types/pages/buttons/preview.html.twig'] %}
    {% endif %}
{% endblock preview_button %}

{% block delete_button %}
    {# FIXME: add support for deleting root file only #}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/delete.html.twig', 'flex-objects/types/pages/buttons/delete.html.twig'] %}
    {% endif %}
{% endblock delete_button %}

{% block extra_buttons %}
    {% if object.exists and not object.root() %}
    {% if can_create %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/pages/buttons/add.html.twig'] %}
    {% endif %}
    {% if can_copy %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/copy.html.twig', 'flex-objects/types/pages/buttons/copy.html.twig'] %}
    {% endif %}
    {% if can_move %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/move.html.twig', 'flex-objects/types/pages/buttons/move.html.twig'] %}
    {% endif %}
    {% endif %}
{% endblock extra_buttons %}

{% block save_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/save.html.twig', 'flex-objects/types/pages/buttons/save.html.twig'] %}
{% endblock save_button %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
    <div class=\"alert notice\">
        {% set save_location = object.getStorageFolder() ?: directory.getStorageFolder() %}
        {{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }} {{ not object.exists ? '[' ~ 'PLUGIN_FLEX_OBJECTS.NEW'|tu|upper ~ ']' }}</b> (type: <b>{{ (form.getValue('name') ?: 'default') }}</b>)
    </div>
    {% endif %}
    {% if object.exists and form.flash.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> {{ 'PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT'|tu }} <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.RESET\"|tu }}</button>
        </div>
    {% endif %}
    {% if not object.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> {{ 'PLUGIN_FLEX_OBJECTS.STATE.NOT_CREATED_YET'|tu }}
        </div>
    {% elseif can_translate %}
        {% set is_default = language is same as(default_language) %}
        {% if is_default and default_language in object_languages %}
            {% if not translate_include_default and object.property('lang') %}
            {# Handle default language extension #}
            <div class=\"alert secondary-accent\">
                {% set overrideLanguage = all_languages[object_language] ?? object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_OVERRIDE'|tu(overrideLanguage, null)|raw }}
                {{ object.hasTranslation('', false) ? 'PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT'|tu|raw }}
            </div>
            {% elseif translate_include_default %}
                {%  if not object.property('lang') %}
                    <div class=\"alert secondary-accent\">
                        {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_DEFAULT'|tu|raw }}
                    </div>
                {% elseif object.hasTranslation('', false) %}
                    <div class=\"alert secondary-accent\">
                        {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT'|tu|raw }}
                    </div>
                {% endif %}
            {% endif %}
        {% elseif not has_translation %}
        <div class=\"alert warning\">
            {% set overrideLanguage = all_languages[language] ?? object_language %}
            {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.NOT_TRANSLATED_YET'|tu(overrideLanguage, null)|raw }}
            {% if language == object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.NO_FALLBACK_FOUND'|tu|raw }}
            {% else %}
                {% set overrideLanguage = all_languages[object_language] ?? object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.FALLING_BACK'|tu(overrideLanguage, null)|raw }}
            {% endif %}
        </div>
        {% endif %}
    {% endif %}
{% endblock content_top %}

{% block topbar %}
    {% if can_translate %}
        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                {{ all_languages[object_language] ?? object_language }}
            </button>
            {% if count(object_languages) > (object_language in object_languages)|int %}
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                {% for lang_code in object_languages %}
                    {% if lang_code != object_language %}
                    <li>
                        <a href=\"{{ admin_route(route.getRoute(1), lang_code) }}\">{{ all_languages[lang_code] ?? lang_code }}</a>
                    </li>
                    {% endif %}
                {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}

    {% if user.authorize('admin.super') %}
    <form id=\"admin-mode-toggle\">
        {% set normalText = 'PLUGIN_ADMIN.NORMAL'|tu %}
        {% set expertText = 'PLUGIN_ADMIN.EXPERT'|tu %}
        {% set maxLen = max([normalText|length, expertText|length]) %}
        {% set normalText = macro.spanToggle(normalText, maxLen) %}
        {% set expertText = macro.spanToggle(expertText, maxLen) %}

        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ route.withGravParam('mode', 'normal').toString(true) }}\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if expert == '0' %} checked=\"checked\"{% endif %}>
            <label for=\"normal\">{{ normalText }}</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ route.withGravParam('mode', 'expert').toString(true) }}\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if expert == '1' %} checked=\"checked\"{% endif %}>
            <label for=\"expert\">{{ expertText }}</label>
            <a></a>
        </div>
    </form>
    {% endif %}
{% endblock topbar %}

{% block edit %}
    {% include 'partials/blueprints.html.twig' with { context: object, data: object, blueprints: form.blueprint } %}
{% endblock edit %}

{% block content %}
    {{ parent() }}

    {% include 'partials/modal-changes-detected.html.twig' %}

    {% if object.exists %}
        {% set modal_data = data({
            route: '/' ~ object.key,
            name: object.header.child_type ?? object.blueprint.child_type ?? 'default'
        }) %}

        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new'), data: modal_data, form_id: 'new-page' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new_folder'), data: modal_data, form_id: 'new-folder' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/modular_new'), data: modal_data, form_id: 'new-module' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-copy.html.twig' with { blueprints: admin.blueprints('admin/pages/copy'), data: data({ title: object.title ~ ' (Copy)', folder: object.slug ~ '-copy' }), form_id: 'copy' } %}
        </div>
    {% endif %}

    {# TODO: regular pages support extra modals from admin config #}

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>{{ 'PLUGIN_FLEX_OBJECTS.PARENTS'|tu }}</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">{{ 'PLUGIN_FLEX_OBJECTS.STATE.LOADING'|tu }}</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

{% endblock content %}

{% block bottom %}
    {{ parent() }}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
{% endblock bottom %}
", "flex-objects/types/pages/edit.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\edit.html.twig");
    }
}

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

/* flex-objects/types/pages/list/columns.html.twig */
class __TwigTemplate_67183a26aaeab67e1eea8f20f00a82e4 extends \Twig\Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
";
        // line 13
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('directory', $context, $blocks);
    }

    public function block_directory($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $context["filters"] = (($__internal_compile_0 = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonDecodeFilter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64DecodeFilter((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "request", [], "any", false, false, false, 16), "getCookieParams", [], "method", false, false, false, 16)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["grav-admin-flexpages"] ?? null) : null)), true)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["filters"] ?? null) : null);
        // line 17
        echo "    ";
        $context["hidePanel"] = ((twig_length_filter($this->env, ($context["filters"] ?? null)) == 0) || ((twig_length_filter($this->env, ($context["filters"] ?? null)) == 1) && (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["filters[search]"] ?? null) : null)));
        // line 18
        echo "    <div id=\"pages-content-wrapper\">
        <div id=\"pages-filters\">
            <form>
                <div class=\"filters-bar\">
                    <input type=\"text\"
                        placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.SEARCH_PLACEHOLDER"), "html", null, true);
        echo "\"
                        name=\"filters[search]\"
                        value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["filters[search]"] ?? null) : null), "html", null, true);
        echo "\" />
                    <a href=\"#\" class=\"adv-options button-border ";
        // line 26
        echo ((($context["hidePanel"] ?? null)) ? ("close") : ("open"));
        echo "\">
                        ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.ADVANCED_OPTIONS"), "html", null, true);
        echo "
                    </a>
                </div>

                <div class=\"filters-advanced ";
        // line 31
        echo ((($context["hidePanel"] ?? null)) ? ("hide") : (""));
        echo "\">
                    <fieldset>
                        <legend>
                            ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.FILTER.PAGE_ATTRIBUTES"), "html", null, true);
        echo "
                        </legend>
                        ";
        // line 36
        echo twig_call_macro($macros["macros"], "macro_toggle", ["filters.routable", "Routable", ($context["filters"] ?? null)], 36, $context, $this->getSourceContext());
        echo "
                        ";
        // line 37
        echo twig_call_macro($macros["macros"], "macro_toggle", ["filters.module", "Module", ($context["filters"] ?? null)], 37, $context, $this->getSourceContext());
        echo "
                        ";
        // line 38
        echo twig_call_macro($macros["macros"], "macro_toggle", ["filters.visible", "Visible", ($context["filters"] ?? null)], 38, $context, $this->getSourceContext());
        echo "
                        ";
        // line 39
        echo twig_call_macro($macros["macros"], "macro_toggle", ["filters.published", "Published", ($context["filters"] ?? null)], 39, $context, $this->getSourceContext());
        echo "
                        ";
        // line 40
        echo twig_call_macro($macros["macros"], "macro_toggle", ["filters.translated", "Translated", ($context["filters"] ?? null)], 40, $context, $this->getSourceContext());
        echo "
                        ";
        // line 41
        echo twig_call_macro($macros["macros"], "macro_toggle", ["filters.folder", "Empty Folder", ($context["filters"] ?? null)], 41, $context, $this->getSourceContext());
        echo "
                    </fieldset>

                    ";
        // line 44
        $context["selected"] = twig_split_filter($this->env, (($__internal_compile_4 = ($context["filters"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["filters[page_type]"] ?? null) : null), ",");
        // line 45
        echo "                    ";
        $context["page_types"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "types", [0 => null], "method", false, false, false, 45);
        echo " ";
        // line 46
        echo "                    <fieldset>
                        <legend>
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.FILTER.PAGE_TYPES"), "html", null, true);
        echo "
                        </legend>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page_types"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 51
            echo "                            <span class=\"checkboxes toggleable\">
                                <input type=\"checkbox\" id=\"filters.type.";
            // line 52
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" name=\"filters[page_type][]\" value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["name"], ($context["selected"] ?? null))) {
                echo "checked";
            }
            echo ">
                                <label for=\"filters.type.";
            // line 53
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</label>
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </fieldset>

                    ";
        // line 58
        $context["module_types"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modularTypes", [0 => null], "method", false, false, false, 58);
        echo " ";
        // line 59
        echo "                    ";
        if (($context["module_types"] ?? null)) {
            // line 60
            echo "                        <fieldset>
                            <legend>
                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.FILTER.MODULAR_TYPES"), "html", null, true);
            echo "
                            </legend>
                            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["module_types"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 65
                echo "                                <span class=\"checkboxes toggleable\">
                                    <input type=\"checkbox\" id=\"filters.type.";
                // line 66
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" name=\"filters[page_type][]\" value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["name"], ($context["selected"] ?? null))) {
                    echo "checked";
                }
                echo ">
                                    <label for=\"filters.type.";
                // line 67
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</label>
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                        </fieldset>
                    ";
        }
        // line 72
        echo "
                    <a href=\"#\" class=\"apply-filters button-border\" data-filters=\"apply\">
                        ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.APPLY_FILTERS"), "html", null, true);
        echo "
                    </a>
                    <a href=\"#\" class=\"reset-defaults button-border\" data-filters=\"reset\">
                        ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.RESET_FILTERS"), "html", null, true);
        echo "
                    </a>
                </div>
            </form>
        </div>

        <div class=\"grav-loading\">
            <div class=\"grav-loader\">";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        echo "</div>
        </div>
        <div id=\"pages-columns\" style=\"margin-top: -1rem;\"
             data-lang-url=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 87), "getCurrentRoute", [], "any", false, false, false, 87), "withoutParams", [], "any", false, false, false, 87), "withExtension", [0 => ""], "method", false, false, false, 87), "withLanguage", [0 => "%LANG%"], "method", false, false, false, 87), "toString", [0 => true], "method", false, false, false, 87), "html", null, true);
        echo "\"></div>

    </div>

    ";
        // line 92
        echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        ";
        // line 93
        $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/list/columns.html.twig", 93)->display(twig_array_merge($context, ["blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method", false, false, false, 93), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page"]));
        // line 94
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
        // line 97
        $this->loadTemplate("partials/blueprints-new-folder.html.twig", "flex-objects/types/pages/list/columns.html.twig", 97)->display(twig_array_merge($context, ["blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method", false, false, false, 97), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder"]));
        // line 98
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        ";
        // line 101
        $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/list/columns.html.twig", 101)->display(twig_array_merge($context, ["blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method", false, false, false, 101), "data" => ($context["obj_data"] ?? null), "form_id" => "new-module"]));
        // line 102
        echo "    </div>

    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 104), "admin", [], "any", false, false, false, 104), "add_modals", [], "any", false, false, false, 104));
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
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 105
            echo "    <div class=\"remodal ";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(twig_get_attribute($this->env, $this->source, $context["add_modal"], "modal_classes", [], "any", false, false, false, 105), ""), "html", null, true);
            echo "\" data-remodal-id=\"modal-add_modal-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        ";
            // line 106
            $this->loadTemplate($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(twig_get_attribute($this->env, $this->source, $context["add_modal"], "template", [], "any", false, false, false, 106), "partials/blueprints-new.html.twig"), "flex-objects/types/pages/list/columns.html.twig", 106)->display(twig_array_merge($context, twig_array_merge(["blueprints" => twig_get_attribute($this->env, $this->source,             // line 107
($context["admin"] ?? null), "blueprints", [0 => twig_get_attribute($this->env, $this->source, $context["add_modal"], "blueprint", [], "any", false, false, false, 107)], "method", false, false, false, 107), "data" =>             // line 108
($context["obj_data"] ?? null), "form_id" => "add-modal"], $this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(twig_get_attribute($this->env, $this->source,             // line 110
$context["add_modal"], "with", [], "any", false, false, false, 110), []))));
            // line 111
            echo "    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
    <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false\">
      ";
        // line 115
        $this->loadTemplate("partials/blueprints-copy.html.twig", "flex-objects/types/pages/list/columns.html.twig", 115)->display(twig_array_merge($context, ["blueprints" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", [0 => "admin/pages/copy"], "method", false, false, false, 115), "data" => ($context["obj_data"] ?? null), "form_id" => "copy"]));
        // line 116
        echo "    </div>

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\"
         data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\">
                <div class=\"grav-loader\">";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">
                    <i class=\"fa fa-fw fa-close\"></i> ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-parents-select href=\"#\">
                    <i class=\"fa fa-fw fa-check\"></i> ";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 139
        if (($context["context"] ?? null)) {
            // line 140
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "title", [], "any", false, false, false, 140), "html", null, true);
            echo "</strong>
                ";
        }
        // line 142
        echo "            </p>
            <p class=\"bigger\">
                ";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i
                            class=\"fa fa-fw fa-close\"></i> ";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i
                            class=\"fa fa-fw fa-check\"></i> ";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>
";
    }

    // line 1
    public function macro_toggle($__id__ = null, $__title__ = null, $__filters__ = null, $__name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "title" => $__title__,
            "filters" => $__filters__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(($context["id"] ?? null));
            // line 3
            echo "    ";
            $context["filter"] = (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), ($context["name"] ?? null), [], "array", true, true, false, 3) &&  !(null === (($__internal_compile_5 = ($context["filters"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["name"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_6 = ($context["filters"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["name"] ?? null)] ?? null) : null)) : (null));
            // line 4
            echo "    ";
            $context["value"] = (((null === ($context["filter"] ?? null))) ? (0) : (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter( !($context["filter"] ?? null)) + 1)));
            // line 5
            echo "    ";
            $context["classes"] = [0 => "status-unchecked", 1 => "status-checked", 2 => "status-indeterminate"];
            // line 6
            echo "
    <span class=\"checkboxes indeterminate toggleable ";
            // line 7
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["classes"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["value"] ?? null)] ?? null) : null), "html", null, true);
            echo "\" data-_check-status=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">
        <input type=\"checkbox\" id=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" indeterminate=\"";
            echo (((($context["value"] ?? null) == 2)) ? ("true") : ("false"));
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["filter"] ?? null), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            echo ">
        <label for=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/list/columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 9,  433 => 8,  427 => 7,  424 => 6,  421 => 5,  418 => 4,  415 => 3,  412 => 2,  396 => 1,  387 => 151,  382 => 149,  374 => 144,  370 => 142,  362 => 140,  360 => 139,  355 => 137,  345 => 130,  340 => 128,  332 => 123,  323 => 116,  321 => 115,  317 => 113,  302 => 111,  300 => 110,  299 => 108,  298 => 107,  297 => 106,  290 => 105,  273 => 104,  269 => 102,  267 => 101,  262 => 98,  260 => 97,  255 => 94,  253 => 93,  250 => 92,  243 => 87,  237 => 84,  227 => 77,  221 => 74,  217 => 72,  213 => 70,  202 => 67,  192 => 66,  189 => 65,  185 => 64,  180 => 62,  176 => 60,  173 => 59,  170 => 58,  166 => 56,  155 => 53,  145 => 52,  142 => 51,  138 => 50,  133 => 48,  129 => 46,  125 => 45,  123 => 44,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  92 => 34,  86 => 31,  79 => 27,  75 => 26,  71 => 25,  66 => 23,  59 => 18,  56 => 17,  53 => 16,  46 => 15,  43 => 14,  41 => 13,  38 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro toggle(id, title, filters, name = null) %}
    {% set name = id|fieldName %}
    {% set filter = filters[name] ?? null %}
    {% set value = filter is null ? 0 : (not filter)|int+1 %}
    {% set classes = ['status-unchecked', 'status-checked', 'status-indeterminate'] %}

    <span class=\"checkboxes indeterminate toggleable {{ classes[value] }}\" data-_check-status=\"{{ value }}\">
        <input type=\"checkbox\" id=\"{{ id }}\" name=\"{{ name }}\" indeterminate=\"{{ value == 2 ? 'true' : 'false' }}\" value=\"{{ filter }}\" {% if value == 1 %}checked{% endif %}>
        <label for=\"{{ id }}\">{{ title }}</label>
    </span>
{% endmacro %}

{% import _self as macros %}

{% block directory %}
    {% set filters = grav.request.getCookieParams()['grav-admin-flexpages']|base64_decode|json_decode(true)['filters'] %}
    {% set hidePanel = filters|length == 0 or (filters|length == 1 and filters['filters[search]']) %}
    <div id=\"pages-content-wrapper\">
        <div id=\"pages-filters\">
            <form>
                <div class=\"filters-bar\">
                    <input type=\"text\"
                        placeholder=\"{{ 'PLUGIN_FLEX_OBJECTS.ACTION.SEARCH_PLACEHOLDER'|tu }}\"
                        name=\"filters[search]\"
                        value=\"{{ filters['filters[search]'] }}\" />
                    <a href=\"#\" class=\"adv-options button-border {{ hidePanel ? 'close' : 'open' }}\">
                        {{ 'PLUGIN_FLEX_OBJECTS.ACTION.ADVANCED_OPTIONS'|tu }}
                    </a>
                </div>

                <div class=\"filters-advanced {{ hidePanel ? 'hide' }}\">
                    <fieldset>
                        <legend>
                            {{ 'PLUGIN_FLEX_OBJECTS.FILTER.PAGE_ATTRIBUTES'|tu }}
                        </legend>
                        {{ macros.toggle('filters.routable', 'Routable', filters) }}
                        {{ macros.toggle('filters.module', 'Module', filters) }}
                        {{ macros.toggle('filters.visible', 'Visible', filters) }}
                        {{ macros.toggle('filters.published', 'Published', filters) }}
                        {{ macros.toggle('filters.translated', 'Translated', filters) }}
                        {{ macros.toggle('filters.folder', 'Empty Folder', filters) }}
                    </fieldset>

                    {% set selected = filters['filters[page_type]']|split(',') %}
                    {% set page_types = admin.types(null) %} {# directory.config('filters.ignore_page_types') #}
                    <fieldset>
                        <legend>
                            {{ 'PLUGIN_FLEX_OBJECTS.FILTER.PAGE_TYPES'|tu }}
                        </legend>
                        {% for name,title in page_types %}
                            <span class=\"checkboxes toggleable\">
                                <input type=\"checkbox\" id=\"filters.type.{{ name }}\" name=\"filters[page_type][]\" value=\"{{ name }}\" {% if name in selected %}checked{% endif %}>
                                <label for=\"filters.type.{{ name }}\">{{ title }}</label>
                            </span>
                        {% endfor %}
                    </fieldset>

                    {% set module_types = admin.modularTypes(null) %} {# directory.config('filters.ignore_module_types') #}
                    {% if module_types %}
                        <fieldset>
                            <legend>
                                {{ 'PLUGIN_FLEX_OBJECTS.FILTER.MODULAR_TYPES'|tu }}
                            </legend>
                            {% for name,title in module_types %}
                                <span class=\"checkboxes toggleable\">
                                    <input type=\"checkbox\" id=\"filters.type.{{ name }}\" name=\"filters[page_type][]\" value=\"{{ name }}\" {% if name in selected %}checked{% endif %}>
                                    <label for=\"filters.type.{{ name }}\">{{ title }}</label>
                                </span>
                            {% endfor %}
                        </fieldset>
                    {% endif %}

                    <a href=\"#\" class=\"apply-filters button-border\" data-filters=\"apply\">
                        {{ 'PLUGIN_FLEX_OBJECTS.ACTION.APPLY_FILTERS'|tu }}
                    </a>
                    <a href=\"#\" class=\"reset-defaults button-border\" data-filters=\"reset\">
                        {{ 'PLUGIN_FLEX_OBJECTS.ACTION.RESET_FILTERS'|tu }}
                    </a>
                </div>
            </form>
        </div>

        <div class=\"grav-loading\">
            <div class=\"grav-loader\">{{ 'PLUGIN_FLEX_OBJECTS.STATE.LOADING'|tu }}</div>
        </div>
        <div id=\"pages-columns\" style=\"margin-top: -1rem;\"
             data-lang-url=\"{{ grav.uri.getCurrentRoute.withoutParams.withExtension('').withLanguage('%LANG%').toString(true) }}\"></div>

    </div>

    {# Modals #}
    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data, form_id: 'new-page' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data, form_id: 'new-folder' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data, form_id: 'new-module' } %}
    </div>

    {% for key, add_modal in config.plugins.admin.add_modals %}
    <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        {% include add_modal.template|defined('partials/blueprints-new.html.twig') with {
            blueprints: admin.blueprints(add_modal.blueprint),
            data: obj_data,
            form_id: 'add-modal'
        }|merge(add_modal.with|defined({})) %}
    </div>
    {% endfor %}

    <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false\">
      {% include 'partials/blueprints-copy.html.twig' with { blueprints: admin.blueprints('admin/pages/copy'), data: obj_data, form_id: 'copy' } %}
    </div>

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\"
         data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\">
                <div class=\"grav-loader\">{{ 'PLUGIN_FLEX_OBJECTS.STATE.LOADING'|tu }}</div>
            </div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">
                    <i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-parents-select href=\"#\">
                    <i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
                {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i
                            class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i
                            class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>
{% endblock %}
", "flex-objects/types/pages/list/columns.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\list\\columns.html.twig");
    }
}

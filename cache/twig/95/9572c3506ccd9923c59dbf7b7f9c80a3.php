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

/* forms/fields/file/file.html.twig */
class __TwigTemplate_1644a538e41b4633565c121b6d0daa92 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'file_extras' => [$this, 'block_file_extras'],
            'input_attributes' => [$this, 'block_input_attributes'],
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
        // line 58
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 60
        $context["defaults"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 60), "form", [], "any", false, false, false, 60);
        // line 61
        $context["files"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["defaults"] ?? null), "files", [], "any", false, false, false, 61), ((array_key_exists("field", $context)) ? (_twig_default_filter(($context["field"] ?? null), [])) : ([])));
        // line 62
        $context["limit"] = (( !twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 62)) ? (1) : (twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "limit", [], "any", false, false, false, 62)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 64
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        $context["page_can_upload"] = (($context["exists"] ?? null) || (((($context["type"] ?? null) == "page") &&  !($context["exists"] ?? null)) &&  !((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "destination", [], "any", false, false, false, 65)) && is_string($__internal_compile_1 = "@self") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) || (is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "destination", [], "any", false, false, false, 65)) && is_string($__internal_compile_3 = "self@") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3))))));
        // line 66
        echo "    ";
        if ((($context["form"] ?? null) || ( !array_key_exists("type", $context) || ($context["page_can_upload"] ?? null)))) {
            // line 67
            echo "
    ";
            // line 68
            $this->displayBlock('prepend', $context, $blocks);
            // line 69
            echo "    ";
            $context["settings"] = ["name" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 69), "paramName" => ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 69))) . ((twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "multiple", [], "any", false, false, false, 69)) ? ("[]") : (""))), "limit" => ($context["limit"] ?? null), "filesize" => ($context["form_max_filesize"] ?? null), "accept" => twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "accept", [], "any", false, false, false, 69), "resolution" => twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "resolution", [], "any", false, false, false, 69), "resizeWidth" => twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "resizeWidth", [], "any", false, false, false, 69), "resizeHeight" => twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "resizeHeight", [], "any", false, false, false, 69), "resizeQuality" => twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "resizeQuality", [], "any", false, false, false, 69)];
            // line 70
            echo "    ";
            $context["dropzoneSettings"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "dropzone", [], "any", false, false, false, 70);
            // line 71
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [], "method", false, false, false, 71)) {
                // line 72
                echo "        ";
                $context["file_url_add"] = (($context["base_url_relative"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [0 => [], 1 => "json"], "method", false, false, false, 72));
                // line 73
                echo "        ";
                $context["file_task_add"] = ["task" => "media.upload", "name" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 73), "__form-name__" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 73), "__unique_form_id__" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uniqueid", [], "any", false, false, false, 73)];
                // line 74
                echo "
        ";
                // line 75
                $context["file_url_remove"] = (($context["base_url_relative"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [0 => [], 1 => "json"], "method", false, false, false, 75));
                // line 76
                echo "        ";
                $context["file_task_remove"] = ["task" => "media.delete", "name" => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 76), "__form-name__" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 76), "__unique_form_id__" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uniqueid", [], "any", false, false, false, 76)];
                // line 77
                echo "    ";
            } else {
                // line 78
                echo "        ";
                $context["file_url_remove"] = ((($context["file_url_remove"] ?? null)) ? (($context["file_url_remove"] ?? null)) : (($context["base_url_relative"] ?? null)));
                // line 79
                echo "    ";
            }
            // line 80
            echo "
    <div class=\"";
            // line 81
            ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-input-wrapper")));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 81), "html", null, true);
            echo " dropzone files-upload ";
            if ( !(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fancy", [], "any", false, false, false, 81) === false)) {
                echo "form-input-file";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 81), "html", null, true);
            echo "\"
         data-grav-file-settings=\"";
            // line 82
            echo twig_escape_filter($this->env, json_encode(($context["settings"] ?? null)), "html_attr");
            echo "\"
         data-dropzone-options=\"";
            // line 83
            echo twig_escape_filter($this->env, json_encode(($context["dropzoneSettings"] ?? null)), "html_attr");
            echo "\"
         ";
            // line 84
            if ((($context["file_task_add"] ?? null) && ($context["file_task_remove"] ?? null))) {
                // line 85
                echo "             data-file-post-add=\"";
                echo twig_escape_filter($this->env, json_encode(($context["file_task_add"] ?? null)), "html_attr");
                echo "\"
             data-file-post-remove=\"";
                // line 86
                echo twig_escape_filter($this->env, json_encode(($context["file_task_remove"] ?? null)), "html_attr");
                echo "\"
             data-file-url-add=\"";
                // line 87
                echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html", null, true);
                echo "\"
             data-file-url-remove=\"";
                // line 88
                echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html", null, true);
                echo "\"
         ";
            } else {
                // line 90
                echo "             ";
                if (($context["file_url_add"] ?? null)) {
                    echo "data-file-url-add=\"";
                    echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html", null, true);
                    echo "\"";
                }
                // line 91
                echo "             ";
                if (($context["file_url_remove"] ?? null)) {
                    echo "data-file-url-remove=\"";
                    echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html", null, true);
                    echo "\"";
                }
                // line 92
                echo "         ";
            }
            // line 93
            echo "    >

    ";
            // line 95
            $this->displayBlock('file_extras', $context, $blocks);
            // line 96
            echo "    <input
            ";
            // line 98
            echo "            ";
            $this->displayBlock('input_attributes', $context, $blocks);
            // line 107
            echo "    />

    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 110
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_preview", [$context["path"], $context["file"], $context], 110, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "    ";
            $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 112)->display(twig_array_merge($context, ["field" => ["name" => ("_json." . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 112))], "value" => json_encode((($context["value"]) ?? ([])))]));
            // line 113
            echo "    </div>

    ";
        } else {
            // line 116
            echo "        <span class=\"note\">";
            echo $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED");
            echo "</span>
    ";
        }
    }

    // line 68
    public function block_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 95
    public function block_file_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 98
    public function block_input_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                type=\"file\"
                ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "multiple", [], "any", false, false, false, 100)) {
            echo "multiple=\"multiple\"";
        }
        // line 101
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "accept", [], "any", false, false, false, 101)) {
            echo "accept=\"";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "accept", [], "any", false, false, false, 101), ","), "html", null, true);
            echo "\"";
        }
        // line 102
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 102) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 103
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "random_name", [], "any", false, false, false, 103)) {
            echo "random=\"true\"";
        }
        // line 104
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 105
        echo "                ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
            ";
    }

    // line 3
    public function macro_bytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            ob_start();
            // line 5
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 6
            echo "        ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 7
            echo "        ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 8
            echo "        ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 9
            echo "
        ";
            // line 10
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 12
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 14
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 16
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_preview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 25
            echo "    ";
            if (($context["value"] ?? null)) {
                // line 26
                echo "        ";
                $context["uri"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "grav", [], "any", false, false, false, 26), "uri", [], "any", false, false, false, 26);
                // line 27
                echo "        ";
                $context["files"] = twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "files", [], "any", false, false, false, 27);
                // line 28
                echo "        ";
                $context["config"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "grav", [], "any", false, false, false, 28), "config", [], "any", false, false, false, 28);
                // line 29
                echo "        ";
                $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, false, false, 29), "route", [], "method", false, false, false, 29);
                // line 30
                echo "
        ";
                // line 31
                $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "blueprint_type", [], "any", false, false, false, 31)) ? (twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "blueprint_type", [], "any", false, false, false, 31)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "admin", [], "any", false, false, false, 31), "location", [], "any", false, false, false, 31)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "admin", [], "any", false, false, false, 31), "location", [], "any", false, false, false, 31)) : ("config"))));
                // line 32
                echo "
        ";
                // line 33
                $context["blueprint_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "blueprints", [], "any", false, false, false, 33), "getFilename", [], "any", false, false, false, 33);
                // line 34
                echo "        ";
                $context["real_path"] = ($context["path"] ?? null);
                // line 35
                echo "
        ";
                // line 36
                if ((($context["type"] ?? null) == "pages")) {
                    // line 37
                    echo "            ";
                    $context["blueprint_name"] = ((($context["type"] ?? null) . "/") . ($context["blueprint_name"] ?? null));
                    // line 38
                    echo "            ";
                    $context["real_path"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ltrimFilter((((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "thumb", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "thumb", [], "any", false, false, false, 38)))) ? (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "thumb", [], "any", false, false, false, 38)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, true, false, 38), "media", [], "any", false, true, false, 38), ($context["path"] ?? null), [], "array", false, true, false, 38), "relativePath", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, true, false, 38), "media", [], "any", false, true, false, 38), ($context["path"] ?? null), [], "array", false, true, false, 38), "relativePath", [], "any", false, false, false, 38)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, true, false, 38), "media", [], "any", false, true, false, 38), ($context["path"] ?? null), [], "array", false, true, false, 38), "relativePath", [], "any", false, false, false, 38)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "form", [], "any", false, true, false, 38), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "form", [], "any", false, true, false, 38), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method", false, false, false, 38)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "form", [], "any", false, true, false, 38), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method", false, false, false, 38)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "admin", [], "any", false, false, false, 38), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method", false, false, false, 38))))))), "/");
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "        ";
                $context["blueprint"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter(($context["blueprint_name"] ?? null));
                // line 41
                echo "

        ";
                // line 43
                $context["remove"] = ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "file_task_remove", [], "any", false, false, false, 43)) ? (twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "file_url_remove", [], "any", false, false, false, 43)) : (twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [0 => (((((((((((((((((((twig_get_attribute($this->env, $this->source,                 // line 44
($context["global"] ?? null), "file_url_remove", [], "any", false, false, false, 44) . "/media.json") . "/task") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 46
($context["config"] ?? null), "system", [], "any", false, false, false, 46), "param_sep", [], "any", false, false, false, 46)) . "removeFileFromBlueprint") . "/proute") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 47
($context["config"] ?? null), "system", [], "any", false, false, false, 47), "param_sep", [], "any", false, false, false, 47)) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter(($context["route"] ?? null))) . "/blueprint") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 48
($context["config"] ?? null), "system", [], "any", false, false, false, 48), "param_sep", [], "any", false, false, false, 48)) . ($context["blueprint"] ?? null)) . "/type") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 49
($context["config"] ?? null), "system", [], "any", false, false, false, 49), "param_sep", [], "any", false, false, false, 49)) . ($context["type"] ?? null)) . "/field") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 50
($context["config"] ?? null), "system", [], "any", false, false, false, 50), "param_sep", [], "any", false, false, false, 50)) . twig_get_attribute($this->env, $this->source, ($context["files"] ?? null), "name", [], "any", false, false, false, 50)) . "/path") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 51
($context["config"] ?? null), "system", [], "any", false, false, false, 51), "param_sep", [], "any", false, false, false, 51)) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "path", [], "any", false, false, false, 51))), 1 => "admin-form", 2 => "admin-nonce"], "method", false, false, false, 43)));
                // line 52
                echo "
        ";
                // line 53
                $context["file"] = twig_array_merge(($context["value"] ?? null), ["remove" => ($context["remove"] ?? null), "path" => (((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "thumb_url", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "thumb_url", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "thumb_url", [], "any", false, false, false, 53)) : ((((twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [], "any", false, false, false, 53) == "/")) ? ("/") : (((twig_get_attribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [], "any", false, false, false, 53) . "/") . ($context["real_path"] ?? null))))))]);
                // line 54
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, json_encode(($context["file"] ?? null)), "html_attr");
                echo "\"></div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 54,  413 => 53,  410 => 52,  408 => 51,  407 => 50,  406 => 49,  405 => 48,  404 => 47,  403 => 46,  402 => 44,  401 => 43,  397 => 41,  394 => 40,  391 => 39,  388 => 38,  385 => 37,  383 => 36,  380 => 35,  377 => 34,  375 => 33,  372 => 32,  370 => 31,  367 => 30,  364 => 29,  361 => 28,  358 => 27,  355 => 26,  352 => 25,  337 => 24,  327 => 21,  321 => 19,  315 => 17,  313 => 16,  308 => 15,  306 => 14,  301 => 13,  299 => 12,  294 => 11,  292 => 10,  289 => 9,  286 => 8,  283 => 7,  280 => 6,  277 => 5,  275 => 4,  262 => 3,  255 => 105,  250 => 104,  245 => 103,  240 => 102,  233 => 101,  229 => 100,  226 => 99,  222 => 98,  216 => 95,  210 => 68,  202 => 116,  197 => 113,  194 => 112,  185 => 110,  181 => 109,  177 => 107,  174 => 98,  171 => 96,  169 => 95,  165 => 93,  162 => 92,  155 => 91,  148 => 90,  143 => 88,  139 => 87,  135 => 86,  130 => 85,  128 => 84,  124 => 83,  120 => 82,  108 => 81,  105 => 80,  102 => 79,  99 => 78,  96 => 77,  93 => 76,  91 => 75,  88 => 74,  85 => 73,  82 => 72,  79 => 71,  76 => 70,  73 => 69,  71 => 68,  68 => 67,  65 => 66,  62 => 65,  58 => 64,  53 => 1,  51 => 62,  49 => 61,  47 => 60,  45 => 58,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% macro bytesToSize(bytes) -%}
    {% spaceless %}
        {% set kilobyte = 1024 %}
        {% set megabyte = kilobyte * 1024 %}
        {% set gigabyte = megabyte * 1024 %}
        {% set terabyte = gigabyte * 1024 %}

        {% if bytes < kilobyte %}
            {{ bytes ~ ' B' }}
        {% elseif bytes < megabyte %}
            {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
        {% elseif bytes < gigabyte %}
            {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
        {% elseif bytes < terabyte %}
            {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
        {% else %}
            {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
        {% endif %}
    {% endspaceless %}
{%- endmacro %}

{% macro preview(path, value, global) %}
    {% if value %}
        {% set uri = global.grav.uri %}
        {% set files = global.files %}
        {% set config = global.grav.config %}
        {% set route = global.context.route() %}

        {% set type = global.blueprint_type ? global.blueprint_type : global.admin.location ? global.admin.location : 'config' %}

        {% set blueprint_name = global.blueprints.getFilename %}
        {% set real_path = path %}

        {% if type == 'pages' %}
            {% set blueprint_name = type ~ '/' ~ blueprint_name %}
            {% set real_path = (value.thumb ?? global.context.media[path].relativePath ?? global.form.getPagePathFromToken(path) ?? global.admin.getPagePathFromToken(path))|ltrim('/') %}
        {% endif %}
        {% set blueprint = blueprint_name|base64_encode %}


        {% set remove = global.file_task_remove ? global.file_url_remove : uri.addNonce(
            global.file_url_remove ~
            '/media.json' ~
            '/task' ~ config.system.param_sep ~ 'removeFileFromBlueprint' ~
            '/proute' ~ config.system.param_sep ~ (route|base64_encode) ~
            '/blueprint' ~ config.system.param_sep ~ blueprint ~
            '/type' ~ config.system.param_sep ~ type ~
            '/field' ~ config.system.param_sep ~ files.name ~
            '/path' ~ config.system.param_sep ~ (value.path|base64_encode), 'admin-form', 'admin-nonce') %}

        {% set file = value|merge({remove: remove, path: value.thumb_url ?? (uri.rootUrl == '/' ? '/' : uri.rootUrl ~ '/' ~ real_path) }) %}
        <div class=\"hidden\" data-file=\"{{ file|json_encode|e('html_attr') }}\"></div>
    {% endif %}
{% endmacro %}

{% import _self as macro %}

{% set defaults = config.plugins.form %}
{% set files = defaults.files|merge(field|default([])) %}
{% set limit = not field.multiple ? 1 : files.limit %}

{% block input %}
    {% set page_can_upload = exists or (type == 'page' and not exists and not (field.destination starts with '@self' or field.destination starts with 'self@')) %}
    {% if form or (type is not defined or page_can_upload) %}

    {% block prepend %}{% endblock %}
    {% set settings = {name: field.name, paramName: (scope ~ field.name)|fieldName ~ (files.multiple ? '[]' : ''), limit: limit, filesize: form_max_filesize, accept: files.accept, resolution: files.resolution, resizeWidth: files.resizeWidth, resizeHeight: files.resizeHeight, resizeQuality: files.resizeQuality } %}
    {% set dropzoneSettings = field.dropzone %}
    {% if form.getMediaTaskRoute() %}
        {% set file_url_add = base_url_relative ~ form.getMediaTaskRoute({}, 'json') %}
        {% set file_task_add = {task: 'media.upload', name: field.name, '__form-name__': form.name, '__unique_form_id__': form.uniqueid} %}

        {% set file_url_remove = base_url_relative ~ form.getMediaTaskRoute({}, 'json') %}
        {% set file_task_remove = {task: 'media.delete', name: field.name, '__form-name__': form.name, '__unique_form_id__': form.uniqueid} %}
    {% else %}
        {% set file_url_remove = file_url_remove ?: base_url_relative %}
    {% endif %}

    <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.classes }} dropzone files-upload {% if field.fancy is not same as(false) %}form-input-file{% endif %} {{ field.size }}\"
         data-grav-file-settings=\"{{ settings|json_encode|e('html_attr') }}\"
         data-dropzone-options=\"{{ dropzoneSettings|json_encode|e('html_attr') }}\"
         {% if file_task_add and file_task_remove %}
             data-file-post-add=\"{{ file_task_add|json_encode|e('html_attr') }}\"
             data-file-post-remove=\"{{ file_task_remove|json_encode|e('html_attr') }}\"
             data-file-url-add=\"{{ file_url_add }}\"
             data-file-url-remove=\"{{ file_url_remove }}\"
         {% else %}
             {% if file_url_add %}data-file-url-add=\"{{ file_url_add }}\"{% endif %}
             {% if file_url_remove %}data-file-url-remove=\"{{ file_url_remove }}\"{% endif %}
         {% endif %}
    >

    {% block file_extras %}{% endblock %}
    <input
            {# required attribute structures #}
            {% block input_attributes %}
                type=\"file\"
                {% if files.multiple %}multiple=\"multiple\"{% endif %}
                {% if files.accept %}accept=\"{{ files.accept|join(',') }}\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.random_name %}random=\"true\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {{ parent() }}
            {% endblock %}
    />

    {% for path, file in value %}
        {{ macro.preview(path, file, _context) }}
    {% endfor %}
    {% include 'forms/fields/hidden/hidden.html.twig' with {field: {name: '_json.' ~ field.name}, value: (value ?? [])|json_encode} %}
    </div>

    {% else %}
        <span class=\"note\">{{ \"PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED\"|t|raw }}</span>
    {% endif %}
{% endblock %}
", "forms/fields/file/file.html.twig", "C:\\Users\\alber\\Downloads\\grav-admin-v1.8.0-beta.3\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\file\\file.html.twig");
    }
}

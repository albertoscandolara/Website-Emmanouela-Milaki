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

/* partials/menu_mobile.html.twig */
class __TwigTemplate_9897a0cac3d1d7168878cb77fa98c846 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/menu_mobile.html.twig", 1)->unwrap();
        // line 2
        echo "<section class=\"menu-mobile-wrapper\">
    <!-- One checkbox only -->
    <input type=\"checkbox\" id=\"mobile-menu-toggle\" class=\"mobile-menu-checkbox\">

    <!-- Open icon -->
    <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon open\">
        ☰
    </label>

    <div class=\"mobile-menu-popup\">
        <section class=\"header\">
            <section class=\"left\"></section>
            <section class=\"right\">
                <!-- Close icon -->
                <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon close\">
                    &#10005;
                </label>
            </section>
        </section>

        <section class=\"body\">
            <nav class=\"navbar\">
                <ul class=\"nav-links\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 25), "visible", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 26) || twig_get_attribute($this->env, $this->source, $context["page"], "activeChild", [], "any", false, false, false, 26))) {
                echo "selected";
            }
            echo "\"
                        title=\"";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 27)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 27)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 27))), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 28)) ? (twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 28)) : (twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 28))), "html", null, true);
            echo "</a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </ul>
            </nav>
        </section>
        <section class=\"footer\"></section>
    </div>
</section>
<script>
  document.querySelectorAll('.mobile-menu-icon').forEach(label => {
    label.addEventListener('click', e => {
      e.preventDefault();
      const checkbox = document.getElementById('mobile-menu-toggle');
      checkbox.checked = !checkbox.checked;
    });
  });
</script>";
    }

    public function getTemplateName()
    {
        return "partials/menu_mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  79 => 28,  75 => 27,  68 => 26,  64 => 25,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}
<section class=\"menu-mobile-wrapper\">
    <!-- One checkbox only -->
    <input type=\"checkbox\" id=\"mobile-menu-toggle\" class=\"mobile-menu-checkbox\">

    <!-- Open icon -->
    <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon open\">
        ☰
    </label>

    <div class=\"mobile-menu-popup\">
        <section class=\"header\">
            <section class=\"left\"></section>
            <section class=\"right\">
                <!-- Close icon -->
                <label for=\"mobile-menu-toggle\" class=\"mobile-menu-icon close\">
                    &#10005;
                </label>
            </section>
        </section>

        <section class=\"body\">
            <nav class=\"navbar\">
                <ul class=\"nav-links\">
                    {% for page in pages.children.visible %}
                    <li class=\"{% if page.active or page.activeChild %}selected{% endif %}\"
                        title=\"{{ page.menu ?: page.title }}\">
                        <a href=\"{{ page.url }}\">{{ page.menu ?: page.title }}</a>
                    </li>
                    {% endfor %}
                </ul>
            </nav>
        </section>
        <section class=\"footer\"></section>
    </div>
</section>
<script>
  document.querySelectorAll('.mobile-menu-icon').forEach(label => {
    label.addEventListener('click', e => {
      e.preventDefault();
      const checkbox = document.getElementById('mobile-menu-toggle');
      checkbox.checked = !checkbox.checked;
    });
  });
</script>", "partials/menu_mobile.html.twig", "C:\\Users\\alber\\Desktop\\Alberto\\Projects\\Website-Emmanouela-Milaki\\user\\themes\\quark\\templates\\partials\\menu_mobile.html.twig");
    }
}

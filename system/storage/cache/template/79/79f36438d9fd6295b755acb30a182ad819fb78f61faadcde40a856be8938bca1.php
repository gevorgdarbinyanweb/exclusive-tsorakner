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

/* Plumby/template/extension/module/wd_category_list.twig */
class __TwigTemplate_a6dd1f5fd65d2f970d0b422585258b644b6f64e416607a40cae1787a5fca0ac4 extends \Twig\Template
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
        echo "<div class=\"wd_category_feature bottom-to-top hb-animate-element\" id=\"wd_category_feature\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"box-heading\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t<div class=\"wdfcat-items\">
\t\t\t\t<div class=\"list_carousel row responsive clearfix\">
\t\t\t\t\t<div class=\"product-list\" id=\"wd_cat_featured\">
\t\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<div class=\"wd_cat_content\">
\t\t\t\t\t\t\t\t\t<div class=\"cat-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 14);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
            echo "\" class=\"cat_image1\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"wdcat-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wdcat-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cat-infor\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
            echo "\" class=\"btn-pattern\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
            echo twig_get_attribute($this->env, $this->source, $context["category"], "product_count", [], "any", false, false, false, 20);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23) >= 4)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"cat-more\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 25);
                echo "\" class=\"category-viewall\">View All</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div><!-- Caption END -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Plumby/template/extension/module/wd_category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  96 => 28,  90 => 25,  87 => 24,  85 => 23,  76 => 20,  63 => 14,  59 => 13,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Plumby/template/extension/module/wd_category_list.twig", "");
    }
}

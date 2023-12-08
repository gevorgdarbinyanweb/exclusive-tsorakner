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

/* Plumby/template/extension/module/special.twig */
class __TwigTemplate_53513eb8f0e56a02529bde41726308aa1db147b1f1b48cc76f93c436770fb15c extends \Twig\Template
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
        echo "\t<div class=\"box special bottom-to-top hb-animate-element\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
  <div class=\"box-heading\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>

  <div class=\"box-content\">
\t\t";
        // line 7
        $context["sliderFor"] = 6;
        // line 8
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 9
        echo "\t";
        if ((($context["productCount"] ?? null) > ($context["sliderFor"] ?? null))) {
            // line 10
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev wdspecial_prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next wdspecial_next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 15
        echo "\t
\t<div class=\"box-product ";
        // line 16
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "owl-carousel specialcarousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "special-carousel";
        } else {
            echo "special-grid";
        }
        echo "\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "  ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) % 2) == 1)) {
                // line 19
                echo "  <li class=\"double-slideitem slider-item\">
\t  <ul>
\t  ";
            }
            // line 22
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t<div class=\"image ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 25) == 0)) {
                echo "outstock";
            }
            echo "\">
\t\t\t";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t<div class=\"image_content\">
\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 30);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 35);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 37
            echo "\t\t\t
\t\t\t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t\t\t<span class=\"special-tag\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 39);
                echo "%</span>
\t\t";
            }
            // line 41
            echo "\t\t
\t  ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 42) == 0)) {
                // line 43
                echo "\t  <span class=\"stock_status\">";
                echo ($context["text_outstock"] ?? null);
                echo "</span>
    ";
            }
            // line 44
            echo " 
\t\t</div>
      \t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t
\t\t\t\t 
\t\t\t\t<h4><a href=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 50);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
            echo " </a></h4> 
\t\t\t";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 51)) {
                // line 52
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t\t";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 54) < $context["i"])) {
                        // line 55
                        echo "\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t";
                    } else {
                        // line 57
                        echo "\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t";
                    }
                    // line 59
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t\t\t";
                // line 61
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 63
            echo "\t\t\t\t 
\t\t\t\t
\t\t\t\t";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65)) {
                // line 66
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 67
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "          \t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68);
                    echo "
         \t\t\t";
                } else {
                    // line 70
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 70);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 70);
                    echo "</span>
\t\t\t        ";
                }
                // line 72
                echo "  \t\t            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "\t\t            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 73);
                    echo "</span>
          \t\t\t";
                }
                // line 75
                echo "\t\t\t        </p>
\t\t\t\t";
            }
            // line 77
            echo "
\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t";
            // line 79
            if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 79)) {
                // line 80
                echo "\t\t\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t\t\t<div data-countdown=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 81);
                echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 87) > 0)) {
                // line 88
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 88);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" >";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                echo ($context["text_outstock"] ?? null);
                echo "\" >";
                echo ($context["text_outstock"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t</div> 
\t\t\t\t
\t\t\t\t";
            // line 95
            echo "\t\t\t</div>\t\t
 \t  
\t\t\t\t
\t\t\t\t";
            // line 98
            if ((($context["stock_qty"] ?? null) == "true")) {
                // line 99
                echo "\t\t\t\t<span class=\"stock_msg\" style=\"color:#228B22;\">";
                echo ($context["text_productavail"] ?? null);
                echo " : ";
                echo ($context["qty_stock"] ?? null);
                echo "</span>
\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t
\t\t\t\t
\t  \t</div>
  \t</div>
\t</div>
</div>
  
";
            // line 108
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108) % 2) != 1)) {
                // line 109
                echo "</ul>
</li>
";
            }
            // line 112
            echo " ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</div>
  </div>
</div>
</div>
</div>
<span class=\"special_default_width\" style=\"display:none; visibility:hidden\"></span>

<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\t\$('.specialcarousel').owlCarousel({
\t\titems: 3,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\tpagination: false,
\t\titemsDesktop : [1499,3],
\t\titemsDesktopSmall :\t[1199,3],
\t\titemsTablet :\t[991,2],
\t\titemsTabletSmall :\t[543,1],
\t\titemsMobile :\t[319,1]
\t});
\t// Custom Navigation Events
\t\$(\".wdspecial_next\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.next');
\t})
\t\$(\".wdspecial_prev\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.prev');
\t});\t
});\t
--></script>
";
    }

    public function getTemplateName()
    {
        return "Plumby/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 113,  346 => 112,  341 => 109,  339 => 108,  330 => 101,  322 => 99,  320 => 98,  315 => 95,  311 => 92,  303 => 90,  293 => 88,  291 => 87,  286 => 84,  280 => 81,  277 => 80,  275 => 79,  271 => 77,  267 => 75,  259 => 73,  256 => 72,  248 => 70,  242 => 68,  240 => 67,  237 => 66,  235 => 65,  231 => 63,  227 => 61,  225 => 60,  219 => 59,  215 => 57,  211 => 55,  208 => 54,  204 => 53,  201 => 52,  199 => 51,  193 => 50,  185 => 44,  179 => 43,  177 => 42,  174 => 41,  168 => 39,  166 => 38,  163 => 37,  154 => 35,  149 => 34,  138 => 30,  129 => 28,  124 => 27,  122 => 26,  116 => 25,  105 => 22,  100 => 19,  97 => 18,  80 => 17,  66 => 16,  63 => 15,  56 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Plumby/template/extension/module/special.twig", "");
    }
}

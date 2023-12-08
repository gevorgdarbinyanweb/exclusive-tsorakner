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

/* Plumby/template/common/home.twig */
class __TwigTemplate_5776b965935b6cf74d828a58c08de596f2ef693a83283bc09cb3b93aca6b1fba extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 3
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 4
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 5
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div id=\"content\" class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
        <div class=\"content-top\">   
             ";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
        </div>

        <div class=\"content-bottom\">
            ";
        // line 17
        echo ($context["content_bottom"] ?? null);
        echo "
        </div>
    ";
        // line 19
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 21
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
\$(document).ready(function(){
    \$('.services-carousel').owlCarousel({
            items: 3,
            autoPlay: true,
            singleItem: false,
            navigation: true,
            navigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
            pagination: false,
            itemsDesktop : [1500,3],
            itemsDesktopSmall:[1199,3],
            itemsTablet :\t[991,2],
            itemsTabletSmall : [650, 2],
            itemsMobile: [543, 1]
        });
    });\t

    \$(document).ready(function(){
    \$('#wdtestimonial-carousel').owlCarousel({
            items: 1,
            autoPlay: true,
            singleItem: true,
            navigation: false,
            pagination: true,
            // itemsMobile: [479, 2]
        });
    }); 
</script>";
    }

    public function getTemplateName()
    {
        return "Plumby/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  85 => 19,  80 => 17,  73 => 13,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Plumby/template/common/home.twig", "");
    }
}

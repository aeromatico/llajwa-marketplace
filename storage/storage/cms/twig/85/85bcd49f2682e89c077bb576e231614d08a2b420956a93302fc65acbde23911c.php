<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/sidebar.htm */
class __TwigTemplate_e59e5242453e9e79534e031200b065d6017b960abe4fdf6598981e2e6bdabb29 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"main-sidebar\">
            <div class=\"sidebar-brand\">
                <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=logo\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/logo.svg");
        echo "\" alt=\"\"></a>
            </div>
            <div class=\"sidebar-inner\">
                <ul class=\"icon-menu\">
                    <!-- Shop sidebar trigger -->
                    <li>
                        <a href=\"javascript:void(0);\" id=\"open-shop\"><i data-feather=\"home\"></i></a>
                    </li>            <!-- Cart sidebar trigger -->
                    <li>
                        <a href=\"javascript:void(0);\" id=\"open-cart\"><i data-feather=\"shopping-cart\"></i></a>
                    </li>            <!-- Search trigger -->
                    <li>
                        <a href=\"javascript:void(0);\" id=\"open-search\"><i data-feather=\"search\"></i></a>
                        <a href=\"javascript:void(0);\" id=\"close-search\" class=\"is-hidden is-inactive\"><i data-feather=\"x\"></i></a>
                    </li>            <!-- Mobile mode trigger -->
                    <li class=\"is-hidden-desktop is-hidden-tablet\">
                        <a href=\"javascript:void(0);\" id=\"mobile-mode\"><i data-feather=\"smartphone\"></i></a>
                    </li>        </ul>
        
                <!-- User account -->
                <ul class=\"bottom-menu is-hidden-mobile\">
                    <li>
                        <a href=\"authentication.html\"><i data-feather=\"user\"></i></a>
                    </li>        </ul>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main-sidebar\">
            <div class=\"sidebar-brand\">
                <a href=\"{{app}}/?ref=logo\"><img src=\"{{'assets/images/logo/logo.svg' | theme}}\" alt=\"\"></a>
            </div>
            <div class=\"sidebar-inner\">
                <ul class=\"icon-menu\">
                    <!-- Shop sidebar trigger -->
                    <li>
                        <a href=\"javascript:void(0);\" id=\"open-shop\"><i data-feather=\"home\"></i></a>
                    </li>            <!-- Cart sidebar trigger -->
                    <li>
                        <a href=\"javascript:void(0);\" id=\"open-cart\"><i data-feather=\"shopping-cart\"></i></a>
                    </li>            <!-- Search trigger -->
                    <li>
                        <a href=\"javascript:void(0);\" id=\"open-search\"><i data-feather=\"search\"></i></a>
                        <a href=\"javascript:void(0);\" id=\"close-search\" class=\"is-hidden is-inactive\"><i data-feather=\"x\"></i></a>
                    </li>            <!-- Mobile mode trigger -->
                    <li class=\"is-hidden-desktop is-hidden-tablet\">
                        <a href=\"javascript:void(0);\" id=\"mobile-mode\"><i data-feather=\"smartphone\"></i></a>
                    </li>        </ul>
        
                <!-- User account -->
                <ul class=\"bottom-menu is-hidden-mobile\">
                    <li>
                        <a href=\"authentication.html\"><i data-feather=\"user\"></i></a>
                    </li>        </ul>
            </div>
        </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/sidebar.htm", "");
    }
}

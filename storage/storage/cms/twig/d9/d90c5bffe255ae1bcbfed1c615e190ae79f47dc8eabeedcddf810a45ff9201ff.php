<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/toggle-mobile.htm */
class __TwigTemplate_2fb91cf6160e6ebb9ef2b257770af4fb814c6a1db361a74a20373968e9a663a6 extends Twig_Template
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
        echo "<div id=\"quickview-trigger\"  class=\"menu-fab is-hidden-mobile\">
            <a class=\"hamburger-btn\" href=\"javascript:void(0);\">
                <span class=\"menu-toggle\">\t
                    <span class=\"icon-box-toggle\"> \t
                        <span class=\"rotate\">
                            <i class=\"icon-line-top\"></i>
                            <i class=\"icon-line-center\"></i>
                            <i class=\"icon-line-bottom\"></i> 
                        </span>
                    </span>
                </span>
            </a>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/toggle-mobile.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"quickview-trigger\"  class=\"menu-fab is-hidden-mobile\">
            <a class=\"hamburger-btn\" href=\"javascript:void(0);\">
                <span class=\"menu-toggle\">\t
                    <span class=\"icon-box-toggle\"> \t
                        <span class=\"rotate\">
                            <i class=\"icon-line-top\"></i>
                            <i class=\"icon-line-center\"></i>
                            <i class=\"icon-line-bottom\"></i> 
                        </span>
                    </span>
                </span>
            </a>
        </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/toggle-mobile.htm", "");
    }
}

<?php

/* /home/ubuntu/workspace/themes/marketplace/partials/toggle-mobile.htm */
class __TwigTemplate_99ee52076be5e52cb4306dbbdcbae4780dc10fe02d3629c8b79956a861e4b56c extends Twig_Template
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
        return "/home/ubuntu/workspace/themes/marketplace/partials/toggle-mobile.htm";
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
        </div>", "/home/ubuntu/workspace/themes/marketplace/partials/toggle-mobile.htm", "");
    }
}

<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/buscar.htm */
class __TwigTemplate_a3e726ded6f430a94f4aa301479b78423086cd62b6f73cab39c0ed2530bdf8ac extends Twig_Template
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
        echo "<!-- Search overlay -->
            <div class=\"search-overlay\"></div>
            
            <!-- Search input -->
            <div class=\"search-input-wrapper is-desktop is-hidden\">
                <div class=\"field\">
                    <div class=\"control\">
                        <input type=\"text\" name=\"search\" autofocus required>
                        <span id=\"clear-search\" role=\"button\"><i data-feather=\"x\"></i></span>
                        <span class=\"search-help\">Buscar servicios</span>
                    </div>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/buscar.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Search overlay -->
            <div class=\"search-overlay\"></div>
            
            <!-- Search input -->
            <div class=\"search-input-wrapper is-desktop is-hidden\">
                <div class=\"field\">
                    <div class=\"control\">
                        <input type=\"text\" name=\"search\" autofocus required>
                        <span id=\"clear-search\" role=\"button\"><i data-feather=\"x\"></i></span>
                        <span class=\"search-help\">Buscar servicios</span>
                    </div>
                </div>
            </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/buscar.htm", "");
    }
}

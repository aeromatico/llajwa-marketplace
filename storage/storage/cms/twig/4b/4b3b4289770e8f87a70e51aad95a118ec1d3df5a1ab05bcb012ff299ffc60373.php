<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/portada.htm */
class __TwigTemplate_b209d13b985798206397ed146687e5b560f98c2824b7de3471b20783c2419975 extends Twig_Template
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
        echo "<!-- Background Caption -->
            <div class=\"background-caption\">
                <h1>LLAJWA</h1>
            </div>
        
            <!-- Hero Caption -->
            <div class=\"hero-caption\">
                <h1>MARKETPLACE</h1>
                <h2>SERVICIOS DIGITALES</h2>
                <a href=\"./explorar\" class=\"button big-button primary-button upper-button rounded raised\">Explorar</a>
            </div>
        
            <!-- Fullscreen Slick SLider -->
            <div class=\"slider-wrapper\">
                <div class=\"fullscreen-slick\">
                    <div class=\"full-slide has-background-image\" data-background=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide10.png");
        echo "\"></div>
                    <div class=\"full-slide has-background-image\" data-background=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide11.png");
        echo "\"></div>
                    <div class=\"full-slide has-background-image\" data-background=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide12.png");
        echo "\"></div>
                    <div class=\"full-slide has-background-image\" data-background=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-1.jpg");
        echo "\"></div>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/portada.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  48 => 18,  44 => 17,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Background Caption -->
            <div class=\"background-caption\">
                <h1>LLAJWA</h1>
            </div>
        
            <!-- Hero Caption -->
            <div class=\"hero-caption\">
                <h1>MARKETPLACE</h1>
                <h2>SERVICIOS DIGITALES</h2>
                <a href=\"./explorar\" class=\"button big-button primary-button upper-button rounded raised\">Explorar</a>
            </div>
        
            <!-- Fullscreen Slick SLider -->
            <div class=\"slider-wrapper\">
                <div class=\"fullscreen-slick\">
                    <div class=\"full-slide has-background-image\" data-background=\"{{'assets/images/slide10.png' | theme}}\"></div>
                    <div class=\"full-slide has-background-image\" data-background=\"{{'assets/images/slide11.png' | theme}}\"></div>
                    <div class=\"full-slide has-background-image\" data-background=\"{{'assets/images/slide12.png' | theme}}\"></div>
                    <div class=\"full-slide has-background-image\" data-background=\"{{'assets/images/slide-1.jpg' | theme}}\"></div>
                </div>
            </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/portada.htm", "");
    }
}

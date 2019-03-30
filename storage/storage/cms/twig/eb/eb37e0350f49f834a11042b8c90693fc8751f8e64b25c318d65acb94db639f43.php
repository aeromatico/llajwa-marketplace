<?php

/* /home/ubuntu/workspace/themes/aero/partials/menu/colecciones.htm */
class __TwigTemplate_35599cd796554b6480ac2b35d621a451be3bb05005084f4b98ce45bed7d0ab9f extends Twig_Template
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
        echo "<div class=menu>
        <p class=menu-label> Categorías </p>
        <ul class=menu-list>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/local\">Local</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/nacional\">Nacional</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/Internacional\">Internacional</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/Deportes\">Deportes</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/Transmisiones\">Transmisiones</a> </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/partials/menu/colecciones.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=menu>
        <p class=menu-label> Categorías </p>
        <ul class=menu-list>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/local\">Local</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/nacional\">Nacional</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/Internacional\">Internacional</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/Deportes\">Deportes</a> </li>
            <li> <a data-action=filter data-group=2-4 href=\"/noticias/Transmisiones\">Transmisiones</a> </li>
        </ul>
    </div>", "/home/ubuntu/workspace/themes/aero/partials/menu/colecciones.htm", "");
    }
}

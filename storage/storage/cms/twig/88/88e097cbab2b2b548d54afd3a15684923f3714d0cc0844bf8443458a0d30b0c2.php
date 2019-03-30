<?php

/* /home/ubuntu/workspace/themes/aero/layouts/fallback.htm */
class __TwigTemplate_0280755e1a9588bea26f441a51ebab746393cb55cf35d614f385f577485a8ae6 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/home/ubuntu/workspace/themes/aero/layouts/fallback.htm", "");
    }
}

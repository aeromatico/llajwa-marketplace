<?php

/* /home/ubuntu/workspace/themes/aero/pages/blanco.htm */
class __TwigTemplate_278c59d57807aa0e4e903d9a459f8a3eff128a5e3d339ac2dbad1a9e4d07d76c extends Twig_Template
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
        echo "<header>
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menus/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
</header>

<main class=app-content style=\"margin-top: 50px\">
    <div class=\"hero is-light is-bold\">
        <div class=hero-body>
            <div class=container>
                <div class=\"columns is-vcentered\">
                    <div class=\"column is-two-thirds\">
                        <h1 class=title> Explorar </h1>
                        <h2 class=subtitle> ANS - Agencia de Noticias Soberanía del Trópico </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class=\"section is-storyworlds has-background is-medium\">
        <div class=container>
            <div class=\"columns is-mobile\">
                <div class=\"column is-8 aeroBlind\">is-four-fifths</div>
                <div class=\"column is-4 aeroBlind\">Auto</div>
            </div>
        </div>
    </section>
<main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/pages/blanco.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
{% partial 'menus/main' %} 
</header>

<main class=app-content style=\"margin-top: 50px\">
    <div class=\"hero is-light is-bold\">
        <div class=hero-body>
            <div class=container>
                <div class=\"columns is-vcentered\">
                    <div class=\"column is-two-thirds\">
                        <h1 class=title> Explorar </h1>
                        <h2 class=subtitle> ANS - Agencia de Noticias Soberanía del Trópico </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class=\"section is-storyworlds has-background is-medium\">
        <div class=container>
            <div class=\"columns is-mobile\">
                <div class=\"column is-8 aeroBlind\">is-four-fifths</div>
                <div class=\"column is-4 aeroBlind\">Auto</div>
            </div>
        </div>
    </section>
<main>", "/home/ubuntu/workspace/themes/aero/pages/blanco.htm", "");
    }
}

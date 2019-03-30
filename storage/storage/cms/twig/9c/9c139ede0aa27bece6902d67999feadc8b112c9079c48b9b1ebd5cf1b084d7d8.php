<?php

/* /home/ubuntu/workspace/themes/aero/pages/marketplace.htm */
class __TwigTemplate_9b5dd4dee247da176464316b7cddb4fb323ba65ed9456f9e637683d2f9bbb452 extends Twig_Template
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
        $context["e"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["editor"] ?? null), "records", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null);
        // line 2
        echo "
<section class=\"hero is-fullheight has-carousel\">
     <div class=\"hero-carousel carousel-animated carousel-animate-fade\" data-autoplay=\"true\">
       <div class='carousel-container'>
       
         ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "slider", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 8
            echo "         <div class='carousel-item has-background is-active'>
           <img class=\"is-background\" src=\"";
            // line 9
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["c"], "slide", []));
            echo "\" alt=\"slide\" />
         </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        
       </div>
       <div class=\"carousel-navigation is-overlay\">
         <div class=\"carousel-nav-left\">
           <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
         </div>
         <div class=\"carousel-nav-right\">
           <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
         </div>
       </div>
     </div>
     <div class=\"hero-head\">
        ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menus/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "       
     </div>
     <div class=\"hero-body has-text-centered\" style=\"border: 1px solid white\">     

         <div class=\"column is-12\">
      
             <div class=\"control has-text-centered\">
                 <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" class=\"animated tada delay-2s\">   
                 <br>
                <a href=\"./explorar\" class=\"button is-danger is-medium animated fadeInLeft delay-3s\">Explorar</a> <a href=\"./coleccion/promociones\" class=\"button is-danger is-outlined is-medium animated fadeInRight delay-3s\">Promos</a>                 
             </div>
               
         </div>
    
     </div>
   </section>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/pages/marketplace.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  62 => 24,  48 => 12,  39 => 9,  36 => 8,  32 => 7,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}

<section class=\"hero is-fullheight has-carousel\">
     <div class=\"hero-carousel carousel-animated carousel-animate-fade\" data-autoplay=\"true\">
       <div class='carousel-container'>
       
         {% for c in e.slider %}
         <div class='carousel-item has-background is-active'>
           <img class=\"is-background\" src=\"{{c.slide | media}}\" alt=\"slide\" />
         </div>
         {% endfor %}
        
       </div>
       <div class=\"carousel-navigation is-overlay\">
         <div class=\"carousel-nav-left\">
           <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
         </div>
         <div class=\"carousel-nav-right\">
           <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
         </div>
       </div>
     </div>
     <div class=\"hero-head\">
        {% partial 'menus/main' %}       
     </div>
     <div class=\"hero-body has-text-centered\" style=\"border: 1px solid white\">     

         <div class=\"column is-12\">
      
             <div class=\"control has-text-centered\">
                 <img src=\"{{ 'assets/img/logo.png' | theme}}\" class=\"animated tada delay-2s\">   
                 <br>
                <a href=\"./explorar\" class=\"button is-danger is-medium animated fadeInLeft delay-3s\">Explorar</a> <a href=\"./coleccion/promociones\" class=\"button is-danger is-outlined is-medium animated fadeInRight delay-3s\">Promos</a>                 
             </div>
               
         </div>
    
     </div>
   </section>", "/home/ubuntu/workspace/themes/aero/pages/marketplace.htm", "");
    }
}

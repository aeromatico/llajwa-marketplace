<?php

/* /home/ubuntu/workspace/themes/aero/pages/servicio.htm */
class __TwigTemplate_5b9c4412fc571584fee9682c771d418fc0293514e48380e8245c36c85fa03d51 extends Twig_Template
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
        $context["s"] = twig_get_attribute($this->env, $this->source, ($context["servicio"] ?? null), "get", [], "method");
        // line 2
        $context["servicios"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method"), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method")], "method"), "active", [], "method");
        // line 3
        echo "
<header>
";
        // line 5
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
                    <div class=\"column is-7\">
                        <div class=\"columns is-mobile\">
                            <div class=\"column is-3 animated fadeInLeft delay-1s\">
                                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_image", []), "path", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
        echo "\" style=\"height: auto; width: 100%\">
                            </div>
                            <div class=\"column is-9 animated fadeIn delay-2s\">
                                <h1 class=\"title is-size-1-fullhd is-size-2-widescreen is-size-3-desktop is-size-4-touch is-size-5-tablet is-size-5-mobile\"> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
        echo " </h1>
                                <h2 class=subtitle> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "name", []), "html", null, true);
        echo " </h2>                                      
                                                                        
                                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "preview_text", []), "html", null, true);
        echo "\" target=\"_blank\" class=\"button is-medium is-link\">Comprar </a>
                                    
                                    <div class=\"is-size-7\" style=\"margin-top: 10px\">
                                    ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "price", []) == 0)) {
            echo " 
                                        ¡Gratis!
                                    ";
        } else {
            // line 28
            echo "                                        Desde ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "currency", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "price", []), "html", null, true);
            echo " /";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "name", []), "html", null, true);
            echo "
                                    ";
        }
        // line 29
        echo " 
                                    </div>
                            </div>
                        </div>                                                                 
                    </div>
                    <div class=\"column is-5 has-text-centered animated flipInX delay-2s\">
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "code", [])) {
            // line 36
            echo "                        <video loop controls=\"true\"  style=\"width: 80%; height: auto; -webkit-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); -moz-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); box-shadow: 0px 0px 54px -2px rgba(51,51,51,1);\" src='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "code", []), "html", null, true);
            echo "' type='video/mp4'>&nbsp; Ups! tu navegador no soporta vídeos en HTML5.</video>
                        ";
        }
        // line 38
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class=\"section\">
        <div class=\"container\">
            <nav class=\"breadcrumb has-arrow-separator animated fadeInLeft delay-2s\" aria-label=\"breadcrumbs\">
              <ul>
                <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=breadcumb\">Inicio</a></li>
                <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/explorar\">Explorar</a></li>
                <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/coleccion/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "slug", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "name", []), "html", null, true);
        echo "</a></li>
                <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
        echo "</a></li>
              </ul>
            </nav>
            <div class=\"columns is-desktop is-gapless is-multiline\">
                <div class=\"column is-8 animated fadeInUp delay-3s\">
                
                    <div class=\"has-text-centered aeroText aeroMarginV100\">
                        ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_text", []), "html", null, true);
        echo "
                    </div>
                    
                    <div class=\"is-divider\" data-content=\"Descripción\" style=\"width: 95%\"></div>
                    
                    <div class=\"aeroMarginV100\">
                        ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "description", []);
        echo "
                    </div>
                    
                    <div>
                    <h1 class=\"title is-3\">Comentarios</h1>
                    
                    <div class=\"fb-comments\" data-href=\"https://marketplace.llajwa.club/servicio/";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []), "html", null, true);
        echo "\" data-numposts=\"10\"></div>
                    
                    </div>

                </div>
                <div class=\"column is-4 animated fadeInRight delay-2s\">
                <h1 class=\"title is-3\">Perfil</h1>
                    <i class=\"fas fa-brain\"></i> </b> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "brand", []), "name", []), "html", null, true);
        echo "<br><br>
                    <i class=\"fas fa-external-link-alt\"></i> </b> <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "brand", []), "slug", []), "html", null, true);
        echo "\" target=\"_blank\">Sitio web del autor</a><br><br>                    
                    <i class=\"fas fa-wrench\"></i> <a href=\"\">Solitar soporte técnico</a><br><br>
                    <i class=\"fas fa-envelope\"></i> master@llajwa.club<br><br><br>
          
                  
                  <div class=\"has-textleft-left\">  
                        <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "preview_text", []), "html", null, true);
        echo "\" target=\"_blank\" class=\"button is-link is-outlined\">
                            <span class=\"icon\">
                              <i class=\"fas fa-shopping-cart\"></i>
                            </span>
                            <span>comprar</span>
                        </a>  
                        <a href=\"https://m.me/LlajwaClub\" target=\"_blank\" class=\"button is-link\">
                            <span class=\"icon is-medium\">
                              <i class=\"fab fa-facebook-messenger\"></i>
                            </span>
                        </a>
                        <a href=\"https://wa.me/59177954277\" target=\"_blank\" class=\"button is-link\">
                            <span class=\"icon is-medium\">
                              <i class=\"fab fa-whatsapp\"></i>
                            </span>
                        </a> 
  
                        <div class=\"is-size-7\" style=\"margin-top: 10px\">
                        ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "price", []) == 0)) {
            echo " 
                            ¡Gratis!
                        ";
        } else {
            // line 105
            echo "                            Desde ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "currency", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "price", []), "html", null, true);
            echo " /";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "name", []), "html", null, true);
            echo "
                        ";
        }
        // line 106
        echo " 
                        </div>
                    </div>
                    
                    <div class=\"has-textleft-left\">
                        <div class=\"sharethis-inline-share-buttons\"></div>
                    </div>
                </div>
                         
                
            </div>
        </div>
    </section>
<main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/pages/servicio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 106,  208 => 105,  202 => 102,  181 => 84,  172 => 78,  168 => 77,  158 => 70,  149 => 64,  140 => 58,  130 => 51,  122 => 50,  118 => 49,  114 => 48,  102 => 38,  96 => 36,  94 => 35,  86 => 29,  76 => 28,  70 => 25,  64 => 22,  59 => 20,  55 => 19,  47 => 16,  31 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set s = servicio.get() %}
{% set servicios = ProductList.make().sort(ProductList.getSorting()).active() %}

<header>
{% partial 'menus/main' %} 
</header>

<main class=app-content style=\"margin-top: 50px\">
    <div class=\"hero is-light is-bold\">
        <div class=hero-body>
            <div class=container>
                <div class=\"columns is-vcentered\">
                    <div class=\"column is-7\">
                        <div class=\"columns is-mobile\">
                            <div class=\"column is-3 animated fadeInLeft delay-1s\">
                                <img src=\"{{ s.preview_image.path }}\" alt=\"{{s.name}}\" style=\"height: auto; width: 100%\">
                            </div>
                            <div class=\"column is-9 animated fadeIn delay-2s\">
                                <h1 class=\"title is-size-1-fullhd is-size-2-widescreen is-size-3-desktop is-size-4-touch is-size-5-tablet is-size-5-mobile\"> {{s.name}} </h1>
                                <h2 class=subtitle> {{ s.category.name }} </h2>                                      
                                                                        
                                    <a href=\"{{ s.offer.first().preview_text }}\" target=\"_blank\" class=\"button is-medium is-link\">Comprar </a>
                                    
                                    <div class=\"is-size-7\" style=\"margin-top: 10px\">
                                    {% if s.offer.first().price == 0 %} 
                                        ¡Gratis!
                                    {% else %}
                                        Desde {{ s.offer.first().currency }} {{ s.offer.first().price }} /{{ s.offer.first().name }}
                                    {% endif %} 
                                    </div>
                            </div>
                        </div>                                                                 
                    </div>
                    <div class=\"column is-5 has-text-centered animated flipInX delay-2s\">
                        {% if (s.code) %}
                        <video loop controls=\"true\"  style=\"width: 80%; height: auto; -webkit-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); -moz-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); box-shadow: 0px 0px 54px -2px rgba(51,51,51,1);\" src='{{s.code}}' type='video/mp4'>&nbsp; Ups! tu navegador no soporta vídeos en HTML5.</video>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class=\"section\">
        <div class=\"container\">
            <nav class=\"breadcrumb has-arrow-separator animated fadeInLeft delay-2s\" aria-label=\"breadcrumbs\">
              <ul>
                <li><a href=\"{{app}}/?ref=breadcumb\">Inicio</a></li>
                <li><a href=\"{{app}}/explorar\">Explorar</a></li>
                <li><a href=\"{{app}}/coleccion/{{ s.category.slug }}\">{{ s.category.name }}</a></li>
                <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">{{s.name}}</a></li>
              </ul>
            </nav>
            <div class=\"columns is-desktop is-gapless is-multiline\">
                <div class=\"column is-8 animated fadeInUp delay-3s\">
                
                    <div class=\"has-text-centered aeroText aeroMarginV100\">
                        {{ s.preview_text }}
                    </div>
                    
                    <div class=\"is-divider\" data-content=\"Descripción\" style=\"width: 95%\"></div>
                    
                    <div class=\"aeroMarginV100\">
                        {{ s.description | raw }}
                    </div>
                    
                    <div>
                    <h1 class=\"title is-3\">Comentarios</h1>
                    
                    <div class=\"fb-comments\" data-href=\"https://marketplace.llajwa.club/servicio/{{s.slug}}\" data-numposts=\"10\"></div>
                    
                    </div>

                </div>
                <div class=\"column is-4 animated fadeInRight delay-2s\">
                <h1 class=\"title is-3\">Perfil</h1>
                    <i class=\"fas fa-brain\"></i> </b> {{s.brand.name}}<br><br>
                    <i class=\"fas fa-external-link-alt\"></i> </b> <a href=\"{{s.brand.slug}}\" target=\"_blank\">Sitio web del autor</a><br><br>                    
                    <i class=\"fas fa-wrench\"></i> <a href=\"\">Solitar soporte técnico</a><br><br>
                    <i class=\"fas fa-envelope\"></i> master@llajwa.club<br><br><br>
          
                  
                  <div class=\"has-textleft-left\">  
                        <a href=\"{{ s.offer.first().preview_text }}\" target=\"_blank\" class=\"button is-link is-outlined\">
                            <span class=\"icon\">
                              <i class=\"fas fa-shopping-cart\"></i>
                            </span>
                            <span>comprar</span>
                        </a>  
                        <a href=\"https://m.me/LlajwaClub\" target=\"_blank\" class=\"button is-link\">
                            <span class=\"icon is-medium\">
                              <i class=\"fab fa-facebook-messenger\"></i>
                            </span>
                        </a>
                        <a href=\"https://wa.me/59177954277\" target=\"_blank\" class=\"button is-link\">
                            <span class=\"icon is-medium\">
                              <i class=\"fab fa-whatsapp\"></i>
                            </span>
                        </a> 
  
                        <div class=\"is-size-7\" style=\"margin-top: 10px\">
                        {% if s.offer.first().price == 0 %} 
                            ¡Gratis!
                        {% else %}
                            Desde {{ s.offer.first().currency }} {{ s.offer.first().price }} /{{ s.offer.first().name }}
                        {% endif %} 
                        </div>
                    </div>
                    
                    <div class=\"has-textleft-left\">
                        <div class=\"sharethis-inline-share-buttons\"></div>
                    </div>
                </div>
                         
                
            </div>
        </div>
    </section>
<main>", "/home/ubuntu/workspace/themes/aero/pages/servicio.htm", "");
    }
}

<?php

/* /home/ubuntu/workspace/themes/aero/pages/coleccion.htm */
class __TwigTemplate_2d1a8e215ebf2944531f723c32d2c71827ea4026fde4b1e57d7ef5ef653ec7ee extends Twig_Template
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
        $context["categoria"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method");
        // line 2
        $context["servicios"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method"), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method")], "method"), "active", [], "method"), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "id", [])], "method");
        // line 3
        echo "
<header class=\"\">
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
                            <div class=\"column is-two-thirds\">
                                <h1 class=\"title animated fadeInLeft delay-1s\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "name", []), "html", null, true);
        echo " </h1>
                                <h2 class=\"subtitle animated fadeInUp delay-1s\"> Servicios digitales de calidad </h2> </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <section class=\"section is-storyworlds has-background is-medium\">
                <div class=container>
                
                    <nav class=\"breadcrumb has-arrow-separator animated fadeInLeft delay-2s\" aria-label=\"breadcrumbs\">
                      <ul>
                        <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=breadcumb\">Inicio</a></li>
                        <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/explorar\">Explorar</a></li>
                        <li class=\"is-active\"><a aria-current=\"page\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "name", []), "html", null, true);
        echo "</a></li>
                      </ul>
                    </nav>
                    
                    <div class=columns>
                        <div class=\"column is-3 is-2-widescreen animated fadeIn delay-2s\">
                            ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "                        </div>
                        <div class=\"column is-9 is-10-widescreen animated fadeInRight delay-3s\">                            
                            <div class=\"columns is-mobile  is-multiline\">
                            
                                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["servicios"] ?? null), "isNotEmpty", [], "method")) {
            // line 40
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["servicios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 41
                echo "                                ";
                $context["extras"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "code", []), ",");
                // line 42
                echo "                                
                                  <div class=\"column is-4 has-text-right\">
                                      <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "preview_image", []), "path", []), "html", null, true);
                echo "\" style=\"margin: 10% 30px 10% 0; width: 70%; height: auto;\">
                                      </a>
                                  </div>
                                  <div class=\"column is-8\" style=\"margin: 10px 0; padding: 30px; background-color: white; border-radius: 20px; border: 1px solid rgb(219, 219, 219)\">
                                        
                                            <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\">
                                                <h2 class=\"title is-size-2-fullhd is-size-2-widescreen is-size-3-desktop is-size-4-touch is-size-5-tablet is-size-5-mobile\"> ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", []), "html", null, true);
                echo " </h2>
                                            </a>
                                            <h2 class=\"subtitle\">
                                                ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "price", []) == 0)) {
                    echo " 
                                                    ¡Gratis!
                                                ";
                } else {
                    // line 57
                    echo "                                                    Desde ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "currency", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "price", []), "html", null, true);
                    echo " /";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "name", []), "html", null, true);
                    echo "
                                                ";
                }
                // line 58
                echo "                                             
                                            </h2>
                                            <div>
                                                <p>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "preview_text", []), "html", null, true);
                echo "</p>
                                            </div>
                                        
                                        <div style=\"margin-top: 20%\">                                      
                                            <a class=\"button is-link\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\" style=\"margin-right: 10px\">Detalles</a> <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "preview_text", []), "html", null, true);
                echo "\" class=\"button is-link is-outlined\"> <span class=\"icon\"> <i class=\"fas fa-shopping-cart\"></i> </span> </a>
                                        </div>    
                                  </div> 
                                 
                                
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                ";
        }
        // line 72
        echo " 

                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/pages/coleccion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  171 => 71,  155 => 65,  148 => 61,  143 => 58,  133 => 57,  127 => 54,  121 => 51,  115 => 50,  107 => 45,  101 => 44,  97 => 42,  94 => 41,  89 => 40,  87 => 39,  81 => 35,  77 => 34,  68 => 28,  64 => 27,  60 => 26,  44 => 13,  31 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categoria = CategoryPage.get() %}
{% set servicios = ProductList.make().sort(ProductList.getSorting()).active().category(categoria.id) %}

<header class=\"\">
{% partial 'menus/main' %} 
</header>
        <main class=app-content style=\"margin-top: 50px\">
            <div class=\"hero is-light is-bold\">
                <div class=hero-body>
                    <div class=container>
                        <div class=\"columns is-vcentered\">
                            <div class=\"column is-two-thirds\">
                                <h1 class=\"title animated fadeInLeft delay-1s\"> {{categoria.name}} </h1>
                                <h2 class=\"subtitle animated fadeInUp delay-1s\"> Servicios digitales de calidad </h2> </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <section class=\"section is-storyworlds has-background is-medium\">
                <div class=container>
                
                    <nav class=\"breadcrumb has-arrow-separator animated fadeInLeft delay-2s\" aria-label=\"breadcrumbs\">
                      <ul>
                        <li><a href=\"{{app}}/?ref=breadcumb\">Inicio</a></li>
                        <li><a href=\"{{app}}/explorar\">Explorar</a></li>
                        <li class=\"is-active\"><a aria-current=\"page\">{{categoria.name}}</a></li>
                      </ul>
                    </nav>
                    
                    <div class=columns>
                        <div class=\"column is-3 is-2-widescreen animated fadeIn delay-2s\">
                            {% partial 'sidebar' %}
                        </div>
                        <div class=\"column is-9 is-10-widescreen animated fadeInRight delay-3s\">                            
                            <div class=\"columns is-mobile  is-multiline\">
                            
                                {% if servicios.isNotEmpty() %}
                                {% for s in servicios %}
                                {% set extras = s.code|split(',') %}
                                
                                  <div class=\"column is-4 has-text-right\">
                                      <a href=\"{{app}}/servicio/{{s.slug}}\">
                                        <img src=\"{{ s.preview_image.path }}\" style=\"margin: 10% 30px 10% 0; width: 70%; height: auto;\">
                                      </a>
                                  </div>
                                  <div class=\"column is-8\" style=\"margin: 10px 0; padding: 30px; background-color: white; border-radius: 20px; border: 1px solid rgb(219, 219, 219)\">
                                        
                                            <a href=\"{{app}}/servicio/{{s.slug}}\">
                                                <h2 class=\"title is-size-2-fullhd is-size-2-widescreen is-size-3-desktop is-size-4-touch is-size-5-tablet is-size-5-mobile\"> {{ s.name }} </h2>
                                            </a>
                                            <h2 class=\"subtitle\">
                                                {% if s.offer.first().price == 0 %} 
                                                    ¡Gratis!
                                                {% else %}
                                                    Desde {{ s.offer.first().currency }} {{ s.offer.first().price }} /{{ s.offer.first().name }}
                                                {% endif %}                                             
                                            </h2>
                                            <div>
                                                <p>{{ s.preview_text }}</p>
                                            </div>
                                        
                                        <div style=\"margin-top: 20%\">                                      
                                            <a class=\"button is-link\" href=\"{{app}}/servicio/{{s.slug}}\" style=\"margin-right: 10px\">Detalles</a> <a href=\"{{ s.offer.first().preview_text }}\" class=\"button is-link is-outlined\"> <span class=\"icon\"> <i class=\"fas fa-shopping-cart\"></i> </span> </a>
                                        </div>    
                                  </div> 
                                 
                                
                                {% endfor %}
                                {% endif %}
 

                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>", "/home/ubuntu/workspace/themes/aero/pages/coleccion.htm", "");
    }
}

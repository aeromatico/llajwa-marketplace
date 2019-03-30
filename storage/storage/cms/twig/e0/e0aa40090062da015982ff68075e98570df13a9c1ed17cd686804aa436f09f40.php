<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/coleccion-lista.htm */
class __TwigTemplate_250290d1c158061b88fe73f92093be261d3c97566312d5d6518c85e3545b25e1 extends Twig_Template
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
            <div class=\"section\">
                <!-- Container -->
                <div class=\"container\">
        
                    <!-- House products -->
                    <div class=\"columns category-header\">
                        <div class=\"column is-10 is-offset-1 is-tablet-landscape-padded\">
                            <!-- Title -->
                            <div class=\"category-title is-product-category\">
                                <h2>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "name", []), "html", null, true);
        echo "</h2>
                                <div class=\"category-icon is-hidden-mobile\">
                                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "preview_image", []), "path", []), "html", null, true);
        echo "\" style=\"opacity: 0.4\">
                                </div>
                            </div>
        
                            <!-- Controls -->
                            <div class=\"listing-controls\">
                                <div class=\"layout-controls\">
                                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/coleccion/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []), "html", null, true);
        echo "\"><span><i data-feather=\"grid\"></i></span></a>
                                    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/coleccion-lista/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []), "html", null, true);
        echo "\"><span class=\"is-active\"><i data-feather=\"list\"></i></span></a>
                                </div>
                                <!-- Sort -->
                                <div class=\"sort-box\">
                                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>
                                </div>
                            </div>
                            <!-- /Controls -->
        
                            <!-- Product List -->
                            <div class=\"columns is-product-list is-multiline\">
                                <div class=\"column is-12\">
                                    <ul>
                                    
                                        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["servicios"] ?? null), "isNotEmpty", [], "method")) {
            // line 38
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["servicios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 39
                echo "                                            ";
                $context["extras"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "code", []), ",");
                echo "                                    
                                            <!-- Product -->
                                            <li class=\"flat-card is-auto is-list-item\">
                                                <!-- Product image -->
                                                <span class=\"image\">
                                                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["s"], "images", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "path", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", []), "html", null, true);
                echo "\" style=\"border-radius: 100px; width: 90px; height: auto\"></a>
                                                </span>
                                                <!-- Product meta -->
                                                <span class=\"product-info\">
                                                    <!-- Rating -->
  <!--                                                   <span class=\"rating\">
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <small class=\"is-hidden-mobile\">47 calificaciones</small>
  </span> -->
                                                    <!-- Meta -->
                                                    <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\"><span class=\"product-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", []), "html", null, true);
                echo "</span></a>
                                                    <span class=\"product-price\">
                                                        ";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "price", []) == 0)) {
                    echo " !Gratis! ";
                } else {
                    echo "<span class=\"is-size-7\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "currency", []), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "price", []), "html", null, true);
                    echo " ";
                }
                echo "<span class=\"value is-size-7 has-text-dark\" style=\"font-weight: normal\">/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "name", []), "html", null, true);
                echo "</span>
                                                    </span>
                                                </span>
            
                                                <!-- Abstract -->
                                                <span class=\"product-abstract is-hidden-mobile\">
                                                    ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "preview_text", []), "html", null, true);
                echo "
                                                    <span class=\"view-more\">
                                                        <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\">Ver detalles <i data-feather=\"chevron-right\"></i></a>
                                                    </span>
                                                </span>
            
                                                <!-- Actions -->
                                                <span class=\"actions\">
                                                    <span class=\"add\"><a href=\"";
                // line 74
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\"><i data-feather=\"shopping-cart\" class=\"has-simple-popover\" data-content=\"Comprar\" data-placement=\"top\"></i></a></span>
                                                    <span class=\"add\"><a href=\"https://m.me/LlajwaClub\" target=\"_blank\"><i data-feather=\"message-square\" class=\"has-simple-popover\" data-content=\"Chat de consultas\" data-placement=\"top\"></i></a></span>
                                                </span>
                                                
                                                ";
                // line 78
                if (((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["extras"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null) == 1)) {
                    // line 79
                    echo "                                                <div class=\"on-sale\">
                                                    <i data-feather=\"tag\" class=\"has-simple-popover\" data-content=\"¡ En oferta hoy !\" data-placement=\"top\"></i>
                                                </div>
                                                ";
                }
                // line 83
                echo "                                            </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    
                                        ";
        }
        // line 86
        echo "
                                    </ul>
        
                                </div>
        
                            </div>
                            <!-- /Product list -->
 
        
                        </div>
                    </div> 
                    <!-- /House products -->
        
        
                </div>
                <!-- /Container -->
            </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/coleccion-lista.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 86,  186 => 84,  179 => 83,  173 => 79,  171 => 78,  162 => 74,  151 => 68,  146 => 66,  127 => 60,  118 => 58,  95 => 44,  86 => 39,  81 => 38,  79 => 37,  60 => 23,  54 => 22,  44 => 15,  39 => 13,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categoria = CategoryPage.get() %}
{% set servicios = ProductList.make().sort(ProductList.getSorting()).active().category(categoria.id) %}

            <div class=\"section\">
                <!-- Container -->
                <div class=\"container\">
        
                    <!-- House products -->
                    <div class=\"columns category-header\">
                        <div class=\"column is-10 is-offset-1 is-tablet-landscape-padded\">
                            <!-- Title -->
                            <div class=\"category-title is-product-category\">
                                <h2>{{categoria.name}}</h2>
                                <div class=\"category-icon is-hidden-mobile\">
                                    <img src=\"{{ categoria.preview_image.path }}\" style=\"opacity: 0.4\">
                                </div>
                            </div>
        
                            <!-- Controls -->
                            <div class=\"listing-controls\">
                                <div class=\"layout-controls\">
                                    <a href=\"{{app}}/coleccion/{{categoria.slug}}\"><span><i data-feather=\"grid\"></i></span></a>
                                    <a href=\"{{app}}/coleccion-lista/{{categoria.slug}}\"><span class=\"is-active\"><i data-feather=\"list\"></i></span></a>
                                </div>
                                <!-- Sort -->
                                <div class=\"sort-box\">
                                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>
                                </div>
                            </div>
                            <!-- /Controls -->
        
                            <!-- Product List -->
                            <div class=\"columns is-product-list is-multiline\">
                                <div class=\"column is-12\">
                                    <ul>
                                    
                                        {% if servicios.isNotEmpty() %}
                                            {% for s in servicios %}
                                            {% set extras = s.code|split(',') %}                                    
                                            <!-- Product -->
                                            <li class=\"flat-card is-auto is-list-item\">
                                                <!-- Product image -->
                                                <span class=\"image\">
                                                    <a href=\"{{app}}/servicio/{{s.slug}}\"><img src=\"{{ s.images[0].path }}\" alt=\"{{s.name}}\" style=\"border-radius: 100px; width: 90px; height: auto\"></a>
                                                </span>
                                                <!-- Product meta -->
                                                <span class=\"product-info\">
                                                    <!-- Rating -->
  <!--                                                   <span class=\"rating\">
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <i class=\"fa fa-star\"></i>
      <small class=\"is-hidden-mobile\">47 calificaciones</small>
  </span> -->
                                                    <!-- Meta -->
                                                    <a href=\"{{app}}/servicio/{{s.slug}}\"><span class=\"product-name\">{{s.name}}</span></a>
                                                    <span class=\"product-price\">
                                                        {% if s.offer.first().price == 0 %} !Gratis! {% else %}<span class=\"is-size-7\">{{ s.offer.first().currency }}</span> {{ s.offer.first().price }} {% endif %}<span class=\"value is-size-7 has-text-dark\" style=\"font-weight: normal\">/{{ s.offer.first().name }}</span>
                                                    </span>
                                                </span>
            
                                                <!-- Abstract -->
                                                <span class=\"product-abstract is-hidden-mobile\">
                                                    {{ s.preview_text }}
                                                    <span class=\"view-more\">
                                                        <a href=\"{{app}}/servicio/{{s.slug}}\">Ver detalles <i data-feather=\"chevron-right\"></i></a>
                                                    </span>
                                                </span>
            
                                                <!-- Actions -->
                                                <span class=\"actions\">
                                                    <span class=\"add\"><a href=\"{{app}}/servicio/{{s.slug}}\"><i data-feather=\"shopping-cart\" class=\"has-simple-popover\" data-content=\"Comprar\" data-placement=\"top\"></i></a></span>
                                                    <span class=\"add\"><a href=\"https://m.me/LlajwaClub\" target=\"_blank\"><i data-feather=\"message-square\" class=\"has-simple-popover\" data-content=\"Chat de consultas\" data-placement=\"top\"></i></a></span>
                                                </span>
                                                
                                                {% if extras[0] == 1 %}
                                                <div class=\"on-sale\">
                                                    <i data-feather=\"tag\" class=\"has-simple-popover\" data-content=\"¡ En oferta hoy !\" data-placement=\"top\"></i>
                                                </div>
                                                {% endif %}
                                            </li>
                                            {% endfor %}    
                                        {% endif %}

                                    </ul>
        
                                </div>
        
                            </div>
                            <!-- /Product list -->
 
        
                        </div>
                    </div> 
                    <!-- /House products -->
        
        
                </div>
                <!-- /Container -->
            </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/coleccion-lista.htm", "");
    }
}

<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/coleccion.htm */
class __TwigTemplate_328453c64bedcdb6d406dac73b56cb6bb0585da04f624924b6645b754e5bc588 extends Twig_Template
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
    
        <div class=\"columns category-header\">
            <div class=\"column is-10 is-offset-1 is-tablet-landscape-padded\">
                <!-- Title -->
                <div class=\"category-title is-product-category\">
                    <h2>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "name", []), "html", null, true);
        echo "</h2>
                    <div class=\"category-icon is-hidden-mobile\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "preview_image", []), "path", []), "html", null, true);
        echo "\" style=\"opacity: 0.4\">
                    </div>
                </div>
    
                <!-- Controls -->
                <div class=\"listing-controls\">
                    <div class=\"layout-controls\">
                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/coleccion/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []), "html", null, true);
        echo "\"><span class=\"is-active\"><i data-feather=\"grid\"></i></span></a>
                        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/coleccion-lista/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []), "html", null, true);
        echo "\"><span><i data-feather=\"list\"></i></span></a>
                    </div>
                    <!-- Sort -->
                    <div class=\"sort-box\">
                      <div class=\"fb-like\" data-href=\"https://www.facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>
                    </div>
                </div>
                <!-- /Controls -->
    
                <!-- Product grid -->
                <div class=\"columns is-product-grid is-multiline\">
                
                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["servicios"] ?? null), "isNotEmpty", [], "method")) {
            // line 35
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["servicios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 36
                echo "                    ";
                $context["extras"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "code", []), ",");
                // line 37
                echo "                        <!-- Product -->
                        <div class=\"column is-";
                // line 38
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["extras"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[1] ?? null) : null), "html", null, true);
                echo "\">
                            <div class=\"flat-card ";
                // line 39
                echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["extras"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[2] ?? null) : null), "html", null, true);
                echo "\">
                                <!-- Product zoomable image -->
                                <div class=\"";
                // line 41
                echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["extras"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[3] ?? null) : null), "html", null, true);
                echo "\">
                                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, $context["s"], "images", [])) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[0] ?? null) : null), "path", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", []), "html", null, true);
                echo "\" style=\"border-radius: 300px;\"></a>
                                </div>
                                <!-- Product meta -->
                                <div class=\"product-info has-text-centered\">
                                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\"><h3 class=\"product-name ";
                echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["extras"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[4] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", []), "html", null, true);
                echo "</h3></a>
                                    <p class=\"product-description\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "preview_text", []), "html", null, true);
                echo "</p>
                                    <p class=\"product-price\">
                                    
                                    ";
                // line 50
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["s"], "offer", []))) {
                    echo " 
                                    
                                       ";
                    // line 52
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
                                       ";
                }
                // line 54
                echo "                                    </p>
                                </div>
                                <!-- Product actions -->
                                <div class=\"actions\">
                                    <div class=\"add\"><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\"><i data-feather=\"shopping-cart\" class=\"has-simple-popover\" data-content=\"Comprar\" data-placement=\"top\"></i></a></div>
                                    <div class=\"add\"><a href=\"https://m.me/LlajwaClub\" target=\"_blank\"><i data-feather=\"message-square\" class=\"has-simple-popover\" data-content=\"Chat de consultas\" data-placement=\"top\"></i></a></div>
                                </div>
                                ";
                // line 61
                if (((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["extras"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[0] ?? null) : null) == 1)) {
                    // line 62
                    echo "                                <div class=\"on-sale\">
                                    <i data-feather=\"tag\" class=\"has-simple-popover\" data-content=\"¡ En oferta hoy !\" data-placement=\"top\"></i>
                                </div> 
                                ";
                }
                // line 66
                echo "                            </div>
                        </div>
                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
        }
        // line 71
        echo "                    
                </div>
                <!-- /Product grid -->
    
            </div>
        </div> 

    </div>
<!-- /Container -->
</div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/coleccion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 71,  182 => 70,  173 => 66,  167 => 62,  165 => 61,  157 => 58,  151 => 54,  136 => 52,  131 => 50,  125 => 47,  115 => 46,  102 => 42,  98 => 41,  93 => 39,  89 => 38,  86 => 37,  83 => 36,  78 => 35,  76 => 34,  59 => 22,  53 => 21,  43 => 14,  38 => 12,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categoria = CategoryPage.get() %}
{% set servicios = ProductList.make().sort(ProductList.getSorting()).active().category(categoria.id) %}

<div class=\"section\">
    <!-- Container -->
    <div class=\"container\">
    
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
                        <a href=\"{{app}}/coleccion/{{categoria.slug}}\"><span class=\"is-active\"><i data-feather=\"grid\"></i></span></a>
                        <a href=\"{{app}}/coleccion-lista/{{categoria.slug}}\"><span><i data-feather=\"list\"></i></span></a>
                    </div>
                    <!-- Sort -->
                    <div class=\"sort-box\">
                      <div class=\"fb-like\" data-href=\"https://www.facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>
                    </div>
                </div>
                <!-- /Controls -->
    
                <!-- Product grid -->
                <div class=\"columns is-product-grid is-multiline\">
                
                {% if servicios.isNotEmpty() %}
                    {% for s in servicios %}
                    {% set extras = s.code|split(',') %}
                        <!-- Product -->
                        <div class=\"column is-{{extras[1]}}\">
                            <div class=\"flat-card {{extras[2]}}\">
                                <!-- Product zoomable image -->
                                <div class=\"{{extras[3]}}\">
                                    <a href=\"{{app}}/servicio/{{s.slug}}\"><img src=\"{{ s.images[0].path }}\" alt=\"{{s.name}}\" style=\"border-radius: 300px;\"></a>
                                </div>
                                <!-- Product meta -->
                                <div class=\"product-info has-text-centered\">
                                    <a href=\"{{app}}/servicio/{{s.slug}}\"><h3 class=\"product-name {{extras[4]}}\">{{s.name}}</h3></a>
                                    <p class=\"product-description\">{{ s.preview_text }}</p>
                                    <p class=\"product-price\">
                                    
                                    {% if s.offer is not empty %} 
                                    
                                       {% if s.offer.first().price == 0 %} !Gratis! {% else %}<span class=\"is-size-7\">{{ s.offer.first().currency }}</span> {{ s.offer.first().price }} {% endif %}<span class=\"value is-size-7 has-text-dark\" style=\"font-weight: normal\">/{{ s.offer.first().name }}</span>
                                       {% endif %}
                                    </p>
                                </div>
                                <!-- Product actions -->
                                <div class=\"actions\">
                                    <div class=\"add\"><a href=\"{{app}}/servicio/{{s.slug}}\"><i data-feather=\"shopping-cart\" class=\"has-simple-popover\" data-content=\"Comprar\" data-placement=\"top\"></i></a></div>
                                    <div class=\"add\"><a href=\"https://m.me/LlajwaClub\" target=\"_blank\"><i data-feather=\"message-square\" class=\"has-simple-popover\" data-content=\"Chat de consultas\" data-placement=\"top\"></i></a></div>
                                </div>
                                {% if extras[0] == 1 %}
                                <div class=\"on-sale\">
                                    <i data-feather=\"tag\" class=\"has-simple-popover\" data-content=\"¡ En oferta hoy !\" data-placement=\"top\"></i>
                                </div> 
                                {% endif %}
                            </div>
                        </div>
                        
                    {% endfor %}
                {% endif %}
                    
                </div>
                <!-- /Product grid -->
    
            </div>
        </div> 

    </div>
<!-- /Container -->
</div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/coleccion.htm", "");
    }
}

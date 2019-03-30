<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/servicio.htm */
class __TwigTemplate_f1a14ae9ce163c6080361a308553c805686ce200a56a08ca6374d537d8f85232 extends Twig_Template
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
        echo "<!-- Left product panel -->
<div class=\"product-panel\">
   <!-- Left Header -->
   <div class=\"panel-header\">
      <div class=\"likes\">
         <span>
            <div class=\"fb-like\" data-href=\"https://www.facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>
         </span>
      </div>
   </div>
   <!-- Product image -->
   <div id=\"product-view\" class=\"product-image translateLeft  is-hidden\">
      ";
        // line 14
        if ( !twig_test_empty((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "images", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[1] ?? null) : null))) {
            // line 15
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "images", [])) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null), "path", []), "html", null, true);
            echo "\" data-action=\"zoom\" alt=\"\" style=\"border-radius: 200px\">
      ";
        } else {
            // line 17
            echo "      En este momento no existen promociones<br>activas para este servicio.
      ";
        }
        // line 18
        echo "    
   </div>
   <!-- Product details -->
   <div id=\"meta-view\" class=\"translateLeft\">
      <!-- Product description -->
      <div class=\"detailed-description\">
         <div class=\"meta-block has-text-centered\">
            ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_image", [])) {
            // line 26
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_image", []), "path", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
            echo "\" style=\"width: 50%; height: auto\">
            ";
        } else {
            // line 28
            echo "            <h3 class=\"product-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
            echo "</h3>
            ";
        }
        // line 29
        echo "  
            <p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "name", []), "html", null, true);
        echo "</p>
         </div>
         <!-- Product long description -->
         <div class=\"meta-block\">
";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []) == "radio-virtual")) {
            echo "         
         <div align=\"center\">

<script type=\"text/javascript\" src=\"https://hosted.muses.org/mrp.js\"></script>
<script type=\"text/javascript\">
MRP.insert({
'url':'http://stm1.srvstm.net:7018/;',
'codec':'mp3',
'volume':100,
'autoplay':true,
'forceHTML5':true,
'jsevents':false,
'buffering':0,
'title':'Web Radio',
'wmode':'transparent',
'skin':'abrahadabra2',
'width':100,
'height':141
});
</script>  


         </div>
         
         ";
        }
        // line 59
        echo "         
         
            <h3 class=\"spaced\">Descripción de servicio</h3>
            <p class=\"spaced\">";
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "description", []);
        echo "</p>
         </div>
      </div>
   </div>
   <!-- Product Ratings -->
   <div id=\"ratings-view\" class=\"translateLeft is-hidden\">
      <div class=\"product-ratings\">
         <div class=\"main-rating\">
            <!-- Average Rating -->
            <h3>Product Rating</h3>
            <div class=\"stars\">
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star-half\"></i>
            </div>
            <span>Rated <small>4,5/5</small> out of <small>29</small> reviews</span>
            <span class=\"add-review modal-trigger\" data-modal=\"review-modal\"><i data-feather=\"plus\"></i> Add review</span>
         </div>
         <!-- Customer reviews -->
         <div class=\"customer-ratings\">
            <!-- Product review -->
            <div class=\"media\">
               <div class=\"media-left\">
                  <figure class=\"image is-32x32\">
                     <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatars.elie.html");
        echo "\" alt=\"\">
                  </figure>
               </div>
               <div class=\"media-content\">
                  <p>
                     <span>Elie Daniels</span>
                     <small>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star-half\"></i>
                     </small>
                     <br>
                     <span class=\"rating-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</span>
                  </p>
               </div>
            </div>
            <!-- Product review -->
            <div class=\"media\">
               <div class=\"media-left\">
                  <figure class=\"image is-32x32\">
                     <img src=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatars/john.jpg");
        echo "\" alt=\"\">
                  </figure>
               </div>
               <div class=\"media-content\">
                  <p>
                     <span>John Smith</span>
                     <small>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>alo
                     </small>
                     <br>
                     <span class=\"rating-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas nullam.</span>
                  </p>
               </div>
            </div>
            <!-- Product review -->
            <div class=\"media\">
               <div class=\"media-left\">
                  <figure class=\"image is-32x32\">
                     <img src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatars/jane.jpg");
        echo "\" alt=\"\">
                  </figure>
               </div>
               <div class=\"media-content\">
                  <p>
                     <span>Marjory Cambell</span>
                     <small>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star-half\"></i>
                     </small>
                     <br>
                     <span class=\"rating-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /Product Ratings -->
   <!-- Product panel actions -->
   <div class=\"product-actions\">
      <!-- Zoom Action -->
      <div class=\"zoom-buttons\">
         <i data-feather=\"plus-circle\" style=\"display: none\"></i>
         <i data-feather=\"minus-circle\" style=\"display: none\"></i>
      </div>
      <!-- Navigation icons -->
      <div class=\"right-actions\">
         <!-- Descripción -->
         <span id=\"show-meta\" class=\"product-action is-active\"><i data-feather=\"info\"></i></span>
         <!-- Product image panel -->
         <span id=\"show-product\" class=\"product-action\"><i data-feather=\"tag\"></i></span>
         <!-- Product meta panel -->                                        
      </div>
   </div>
</div>
<!-- Right product panel -->
<div class=\"product-info-panel\">
   <div class=\"inner-panel\">
      <div class=\"panel-header\">
         <!-- Title -->
         <div class=\"category-title\">
            <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "preview_image", []), "path", []), "html", null, true);
        echo "\" style=\"opacity: 0.4\">
            <h2>";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "name", []), "html", null, true);
        echo "</h2>
         </div>
      </div>
      <!-- Panel body -->
      <div class=\"panel-body\">
         <!-- Product Meta -->
         <h3 class=\"product-name\">";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
        echo "</h3>
         <p class=\"product-description\">";
        // line 184
        echo twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_text", []);
        echo "</p>
         <!-- Product controls -->
         <div class=\"product-controls\">
            <!-- Price -->
            ";
        // line 188
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []))) {
            echo " 
            <div class=\"product-price\">
               <div class=\"heading\">Precio</div>
               <div class=\"value\">                               
                  ";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "price", []) == 0)) {
                echo " 
                  !Gratis!
                  ";
            } else {
                // line 195
                echo "                  Desde <span class=\"value is-size-6\" style=\"font-weight: normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "currency", []), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "price", []), "html", null, true);
                echo "
                  ";
            }
            // line 197
            echo "                  <span class=\"value is-size-6 has-text-dark\" style=\"font-weight: normal\">/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "name", []), "html", null, true);
            echo "</span> <br>
                  ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "active", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 199
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 2)) {
                    echo " 
                  <span class=\"value is-size-7 has-text-dark\" style=\"font-weight: normal\">Pague solo ";
                    // line 200
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "currency", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "price", []), "html", null, true);
                    echo " /";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
                    echo " </span>
                  ";
                }
                // line 201
                echo "                             
                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                               
               </div>
            </div>
            ";
        }
        // line 206
        echo "            <!-- Quantity -->
            <div class=\"product-quantity\" style=\"display: none\">
               <div class=\"heading\">Cantidad</div>
               <div class=\"control\">
                  <input class=\"input is-rounded\" type=\"number\" value=\"1\">
               </div>
            </div>
            <!-- Add to Cart -->
            <div class=\"add-to-cart\">
               <div class=\"heading is-vhidden\">Contacte antes de comprar</div>

               ";
        // line 217
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "name", []) == "Prototipos")) {
            // line 218
            echo "               <a href=\"http://demo.prototipos.llajwa.host/";
            echo twig_escape_filter($this->env, ($context["url_slug"] ?? null), "html", null, true);
            echo "\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               ";
        }
        // line 219
        echo " 
               ";
        // line 220
        if ((twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []) == "pimienta-pack")) {
            // line 221
            echo "               <a href=\"http://demo.prototipos.llajwa.host/lupe\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               ";
        }
        // line 222
        echo " 
               ";
        // line 223
        if ((twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []) == "tiendas-llajwa")) {
            // line 224
            echo "               <a href=\"http://store.llajwa.host/?ref=LlajwaFB\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               ";
        }
        // line 225
        echo " 
               ";
        // line 226
        if ((((twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []) == "hosting-plus") || (twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []) == "hosting-pro")) || (twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []) == "alojamiento-vip"))) {
            // line 227
            echo "               <a href=\"";
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/demo\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               ";
        }
        // line 228
        echo " 
               ";
        // line 229
        if ((twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []) == "notificaciones-push")) {
            // line 230
            echo "               <a href=\"https://www.llajwa.host/push\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar servicio</button></a>
               ";
        }
        // line 231
        echo "                                 
               <a href=\"";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "offer", []), "first", [], "method"), "preview_text", []), "html", null, true);
        echo "\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Comprar</button></a>
            </div>
         </div>
      </div>
      <!-- Panel footer -->
      <div class=\"panel-footer\">
         <div class=\"footer-inner\">
            <div class=\"recommended\">OTROS SERVICIOS</div>
            <!-- Recommended items -->
            <div class=\"columns has-text-centered\">
               <div class=\"column\"></div>
               ";
        // line 243
        $context["relacionados"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method"), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method")], "method"), "active", [], "method"), "category", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "category", []), "id", [])], "method");
        // line 244
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["relacionados"] ?? null), "isNotEmpty", [], "method")) {
            echo "                                
               ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["relacionados"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 246
                echo "               ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) < 4) && (twig_get_attribute($this->env, $this->source, $context["c"], "id", []) != twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "id", [])))) {
                    // line 247
                    echo "               <!-- Item -->
               <div class=\"column is-3\">
                  <div class=\"featured-product\">
                     <div class=\"image\">
                        <a href=\"";
                    // line 251
                    echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                    echo "/servicio/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, $context["c"], "images", [])) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[0] ?? null) : null), "path", []), "html", null, true);
                    echo "\" alt=\"\" style=\"border-radius: 300px\"></a>
                     </div>
                     <div class=\"product-info has-text-centered\">
                        <a href=\"";
                    // line 254
                    echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                    echo "/servicio/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
                    echo "\">
                           <h3 class=\"product-name\">";
                    // line 255
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
                    echo "</h3>
                        </a>
                        <p class=\"product-description\">";
                    // line 257
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "preview_text", []), "html", null, true);
                    echo "</p>
                     </div>
                  </div>
               </div>
               ";
                }
                // line 262
                echo "               ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "               ";
        }
        // line 264
        echo "               <div class=\"column\"></div>
            </div>
         </div>
      </div>
      <!-- /Panel footer -->
   </div>
</div>
<!-- /Right product panel -->";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/servicio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 264,  499 => 263,  485 => 262,  477 => 257,  472 => 255,  466 => 254,  456 => 251,  450 => 247,  447 => 246,  430 => 245,  425 => 244,  423 => 243,  409 => 232,  406 => 231,  402 => 230,  400 => 229,  397 => 228,  391 => 227,  389 => 226,  386 => 225,  382 => 224,  380 => 223,  377 => 222,  373 => 221,  371 => 220,  368 => 219,  362 => 218,  360 => 217,  347 => 206,  341 => 202,  326 => 201,  317 => 200,  312 => 199,  295 => 198,  290 => 197,  282 => 195,  276 => 192,  269 => 188,  262 => 184,  258 => 183,  249 => 177,  245 => 176,  198 => 132,  173 => 110,  148 => 88,  119 => 62,  114 => 59,  86 => 34,  79 => 30,  76 => 29,  70 => 28,  62 => 26,  60 => 25,  51 => 18,  47 => 17,  41 => 15,  39 => 14,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set s = servicio.get() %}
<!-- Left product panel -->
<div class=\"product-panel\">
   <!-- Left Header -->
   <div class=\"panel-header\">
      <div class=\"likes\">
         <span>
            <div class=\"fb-like\" data-href=\"https://www.facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>
         </span>
      </div>
   </div>
   <!-- Product image -->
   <div id=\"product-view\" class=\"product-image translateLeft  is-hidden\">
      {% if s.images[1] is not empty %}
      <img src=\"{{ s.images[1].path }}\" data-action=\"zoom\" alt=\"\" style=\"border-radius: 200px\">
      {% else %}
      En este momento no existen promociones<br>activas para este servicio.
      {% endif %}    
   </div>
   <!-- Product details -->
   <div id=\"meta-view\" class=\"translateLeft\">
      <!-- Product description -->
      <div class=\"detailed-description\">
         <div class=\"meta-block has-text-centered\">
            {% if s.preview_image %}
            <img src=\"{{ s.preview_image.path }}\" alt=\"{{s.name}}\" style=\"width: 50%; height: auto\">
            {% else %}
            <h3 class=\"product-name\">{{s.name}}</h3>
            {% endif %}  
            <p>{{ s.category.name }}</p>
         </div>
         <!-- Product long description -->
         <div class=\"meta-block\">
{% if s.slug == 'radio-virtual' %}         
         <div align=\"center\">

<script type=\"text/javascript\" src=\"https://hosted.muses.org/mrp.js\"></script>
<script type=\"text/javascript\">
MRP.insert({
'url':'http://stm1.srvstm.net:7018/;',
'codec':'mp3',
'volume':100,
'autoplay':true,
'forceHTML5':true,
'jsevents':false,
'buffering':0,
'title':'Web Radio',
'wmode':'transparent',
'skin':'abrahadabra2',
'width':100,
'height':141
});
</script>  


         </div>
         
         {% endif %}
         
         
            <h3 class=\"spaced\">Descripción de servicio</h3>
            <p class=\"spaced\">{{ s.description | raw }}</p>
         </div>
      </div>
   </div>
   <!-- Product Ratings -->
   <div id=\"ratings-view\" class=\"translateLeft is-hidden\">
      <div class=\"product-ratings\">
         <div class=\"main-rating\">
            <!-- Average Rating -->
            <h3>Product Rating</h3>
            <div class=\"stars\">
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star\"></i>
               <i class=\"fa fa-star-half\"></i>
            </div>
            <span>Rated <small>4,5/5</small> out of <small>29</small> reviews</span>
            <span class=\"add-review modal-trigger\" data-modal=\"review-modal\"><i data-feather=\"plus\"></i> Add review</span>
         </div>
         <!-- Customer reviews -->
         <div class=\"customer-ratings\">
            <!-- Product review -->
            <div class=\"media\">
               <div class=\"media-left\">
                  <figure class=\"image is-32x32\">
                     <img src=\"{{'assets/images/avatars.elie.html' | theme }}\" alt=\"\">
                  </figure>
               </div>
               <div class=\"media-content\">
                  <p>
                     <span>Elie Daniels</span>
                     <small>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star-half\"></i>
                     </small>
                     <br>
                     <span class=\"rating-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</span>
                  </p>
               </div>
            </div>
            <!-- Product review -->
            <div class=\"media\">
               <div class=\"media-left\">
                  <figure class=\"image is-32x32\">
                     <img src=\"{{'assets/images/avatars/john.jpg' | theme }}\" alt=\"\">
                  </figure>
               </div>
               <div class=\"media-content\">
                  <p>
                     <span>John Smith</span>
                     <small>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>alo
                     </small>
                     <br>
                     <span class=\"rating-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas nullam.</span>
                  </p>
               </div>
            </div>
            <!-- Product review -->
            <div class=\"media\">
               <div class=\"media-left\">
                  <figure class=\"image is-32x32\">
                     <img src=\"{{'assets/images/avatars/jane.jpg' | theme }}\" alt=\"\">
                  </figure>
               </div>
               <div class=\"media-content\">
                  <p>
                     <span>Marjory Cambell</span>
                     <small>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star\"></i>
                     <i class=\"fa fa-star-half\"></i>
                     </small>
                     <br>
                     <span class=\"rating-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /Product Ratings -->
   <!-- Product panel actions -->
   <div class=\"product-actions\">
      <!-- Zoom Action -->
      <div class=\"zoom-buttons\">
         <i data-feather=\"plus-circle\" style=\"display: none\"></i>
         <i data-feather=\"minus-circle\" style=\"display: none\"></i>
      </div>
      <!-- Navigation icons -->
      <div class=\"right-actions\">
         <!-- Descripción -->
         <span id=\"show-meta\" class=\"product-action is-active\"><i data-feather=\"info\"></i></span>
         <!-- Product image panel -->
         <span id=\"show-product\" class=\"product-action\"><i data-feather=\"tag\"></i></span>
         <!-- Product meta panel -->                                        
      </div>
   </div>
</div>
<!-- Right product panel -->
<div class=\"product-info-panel\">
   <div class=\"inner-panel\">
      <div class=\"panel-header\">
         <!-- Title -->
         <div class=\"category-title\">
            <img src=\"{{ s.category.preview_image.path }}\" style=\"opacity: 0.4\">
            <h2>{{ s.category.name }}</h2>
         </div>
      </div>
      <!-- Panel body -->
      <div class=\"panel-body\">
         <!-- Product Meta -->
         <h3 class=\"product-name\">{{s.name}}</h3>
         <p class=\"product-description\">{{s.preview_text | raw}}</p>
         <!-- Product controls -->
         <div class=\"product-controls\">
            <!-- Price -->
            {% if s.offer is not empty %} 
            <div class=\"product-price\">
               <div class=\"heading\">Precio</div>
               <div class=\"value\">                               
                  {% if s.offer.first().price == 0 %} 
                  !Gratis!
                  {% else %}
                  Desde <span class=\"value is-size-6\" style=\"font-weight: normal\">{{ s.offer.first().currency }}</span> {{ s.offer.first().price }}
                  {% endif %}
                  <span class=\"value is-size-6 has-text-dark\" style=\"font-weight: normal\">/{{ s.offer.first().name }}</span> <br>
                  {% for c in s.offer.active %}
                  {% if loop.index == 2 %} 
                  <span class=\"value is-size-7 has-text-dark\" style=\"font-weight: normal\">Pague solo {{ c.currency }} {{ c.price }} /{{ c.name }} </span>
                  {% endif %}                             
                  {% endfor %}                               
               </div>
            </div>
            {% endif %}
            <!-- Quantity -->
            <div class=\"product-quantity\" style=\"display: none\">
               <div class=\"heading\">Cantidad</div>
               <div class=\"control\">
                  <input class=\"input is-rounded\" type=\"number\" value=\"1\">
               </div>
            </div>
            <!-- Add to Cart -->
            <div class=\"add-to-cart\">
               <div class=\"heading is-vhidden\">Contacte antes de comprar</div>

               {% if s.category.name == 'Prototipos' %}
               <a href=\"http://demo.prototipos.llajwa.host/{{url_slug}}\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               {% endif %} 
               {% if s.slug == 'pimienta-pack' %}
               <a href=\"http://demo.prototipos.llajwa.host/lupe\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               {% endif %} 
               {% if s.slug == 'tiendas-llajwa' %}
               <a href=\"http://store.llajwa.host/?ref=LlajwaFB\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               {% endif %} 
               {% if s.slug == 'hosting-plus' or s.slug == 'hosting-pro' or s.slug == 'alojamiento-vip'  %}
               <a href=\"{{app}}/demo\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar demo</button></a>
               {% endif %} 
               {% if s.slug == 'notificaciones-push' %}
               <a href=\"https://www.llajwa.host/push\" target=\"_blank\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Probar servicio</button></a>
               {% endif %}                                 
               <a href=\"{{ s.offer.first().preview_text }}\"><button class=\"button big-button cart-button primary-button upper-button rounded is-bold raised\" style=\"margin-top: 5px\">Comprar</button></a>
            </div>
         </div>
      </div>
      <!-- Panel footer -->
      <div class=\"panel-footer\">
         <div class=\"footer-inner\">
            <div class=\"recommended\">OTROS SERVICIOS</div>
            <!-- Recommended items -->
            <div class=\"columns has-text-centered\">
               <div class=\"column\"></div>
               {% set relacionados = ProductList.make().sort(ProductList.getSorting()).active().category(s.category.id) %}
               {% if relacionados.isNotEmpty() %}                                
               {% for c in relacionados %}
               {% if loop.index < 4 and c.id != s.id %}
               <!-- Item -->
               <div class=\"column is-3\">
                  <div class=\"featured-product\">
                     <div class=\"image\">
                        <a href=\"{{app}}/servicio/{{c.slug}}\"><img src=\"{{ c.images[0].path }}\" alt=\"\" style=\"border-radius: 300px\"></a>
                     </div>
                     <div class=\"product-info has-text-centered\">
                        <a href=\"{{app}}/servicio/{{c.slug}}\">
                           <h3 class=\"product-name\">{{c.name}}</h3>
                        </a>
                        <p class=\"product-description\">{{c.preview_text}}</p>
                     </div>
                  </div>
               </div>
               {%endif%}
               {% endfor %}
               {% endif %}
               <div class=\"column\"></div>
            </div>
         </div>
      </div>
      <!-- /Panel footer -->
   </div>
</div>
<!-- /Right product panel -->", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/servicio.htm", "");
    }
}

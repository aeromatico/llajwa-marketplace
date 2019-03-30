<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/explorar.htm */
class __TwigTemplate_3befcfc73d2f17e28090651132372aaa1e039f82f7272435c559e5130e173202 extends Twig_Template
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
        $context["categorias"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method"), "tree", [], "method");
        // line 2
        echo "
<div class=\"section\">
                <!-- Container -->
                <div class=\"container\">
        
                    <!-- Product Categories Grid -->
                    <div class=\"columns category-header\">
                        <div class=\"column is-10 is-offset-1 is-tablet-landscape-padded\">
                            <!-- Title -->
                            <div class=\"category-title no-border is-padded\">
                                <h2>EXPLORAR</h2>
                                <img class=\"brand-filigrane\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/nephos-greyscale.jpeg");
        echo "\" alt=\"\">
                            </div>
        
                            <div class=\"is-categories-grid\">
                                <div class=\"columns is-multiline\">
                                
                                ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["categorias"] ?? null), "isNotEmpty", [], "method")) {
            // line 20
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "product_count", []) > 0)) {
                    // line 21
                    echo "                              
                                            <!-- House Tile -->
                                            <div class=\"column tile is-parent is-one-third\">
                                                <article class=\"tile is-child has-min-height has-background-image\" data-background=\"";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["c"], "images", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "path", []), "html", null, true);
                    echo "\" onClick=\"return true\">
                                                    <div class=\"tile-content\">
                                                        <h2 class=\"shop-category\">";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
                    echo "</h2>
                                                        <div class=\"divider\"></div>
                                                        <p>";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "preview_text", []);
                    echo "</p>
                                                        <p class=\"is-italic\">";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "description", []);
                    echo "</p>
                                                        <div class=\"products\">
                                                            
                                                        </div>
                                                        <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                    echo "/coleccion/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
                    echo "\" class=\"action\">
                                                            <span>Descubre</span> 
                                                            <i data-feather=\"chevron-right\"></i>
                                                        </a>
                                                    </div>
                                                    <!-- Overlay -->
                                                    <div class=\"tile-overlay\"></div>
                                                </article>
                                            </div>

                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                ";
        }
        echo "                                    

                                </div>
                            </div>
        
        
                        </div>
                    </div> 
                    <!-- /House products -->
        
                </div>
                <!-- /Container -->
            </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/explorar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  81 => 33,  74 => 29,  70 => 28,  65 => 26,  60 => 24,  55 => 21,  49 => 20,  47 => 19,  38 => 13,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categorias = CategoryList.make().tree() %}

<div class=\"section\">
                <!-- Container -->
                <div class=\"container\">
        
                    <!-- Product Categories Grid -->
                    <div class=\"columns category-header\">
                        <div class=\"column is-10 is-offset-1 is-tablet-landscape-padded\">
                            <!-- Title -->
                            <div class=\"category-title no-border is-padded\">
                                <h2>EXPLORAR</h2>
                                <img class=\"brand-filigrane\" src=\"{{'assets/images/logo/nephos-greyscale.jpeg' | theme }}\" alt=\"\">
                            </div>
        
                            <div class=\"is-categories-grid\">
                                <div class=\"columns is-multiline\">
                                
                                {% if categorias.isNotEmpty() %}
                                    {% for c in categorias if c.product_count > 0 %}
                              
                                            <!-- House Tile -->
                                            <div class=\"column tile is-parent is-one-third\">
                                                <article class=\"tile is-child has-min-height has-background-image\" data-background=\"{{ c.images[0].path }}\" onClick=\"return true\">
                                                    <div class=\"tile-content\">
                                                        <h2 class=\"shop-category\">{{c.name}}</h2>
                                                        <div class=\"divider\"></div>
                                                        <p>{{ c.preview_text|raw }}</p>
                                                        <p class=\"is-italic\">{{ c.description|raw }}</p>
                                                        <div class=\"products\">
                                                            
                                                        </div>
                                                        <a href=\"{{app}}/coleccion/{{c.slug}}\" class=\"action\">
                                                            <span>Descubre</span> 
                                                            <i data-feather=\"chevron-right\"></i>
                                                        </a>
                                                    </div>
                                                    <!-- Overlay -->
                                                    <div class=\"tile-overlay\"></div>
                                                </article>
                                            </div>

                                    {% endfor %}
                                {% endif %}                                    

                                </div>
                            </div>
        
        
                        </div>
                    </div> 
                    <!-- /House products -->
        
                </div>
                <!-- /Container -->
            </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/explorar.htm", "");
    }
}

<?php

/* /home/ubuntu/workspace/themes/aero/pages/explorar.htm */
class __TwigTemplate_e19d774fe2564cda6a997bc6a7390bbbcd6909a579798078c84ab903b4d4dba2 extends Twig_Template
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
        $context["servicios"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method"), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method")], "method"), "active", [], "method");
        // line 2
        echo "
<header>
";
        // line 4
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
                                <h1 class=\"title animated fadeInLeft delay-1s\"> Explorar </h1>
                                <h2 class=\"subtitle animated fadeInRight delay-1s\"> Descubre servicios empresariales. </h2> </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <section class=\"section is-storyworlds has-background is-medium\">
                <div class=container>

                    <nav class=\"breadcrumb has-arrow-separator animated fadeInLeft delay-2s\" aria-label=\"breadcrumbs\">
                      <ul>
                        <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=breadcumb\">Inicio</a></li>
                        <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">Explorar</a></li>
                      </ul>
                    </nav>
                            
                    <div class=columns>
                        <div class=\"column is-3 is-2-widescreen animated fadeIn delay-2s\">
                            ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "                        </div>
                        <div class=\"column is-9 is-10-widescreen animated fadeInUp delay-3s\">
                            <div class=\"columns is-multiline\" id=grid>
                            
                                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["servicios"] ?? null), "isNotEmpty", [], "method")) {
            // line 38
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["servicios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 39
                echo "                                ";
                $context["extras"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "code", []), ",");
                // line 40
                echo "                                <div class=\"column is-6 is-4-widescreen is-flex\" data-groups=\"[&quot;6-9&quot;]\">
                                    <div class=\"card is-storyworld\">
                                        <a class=card-header href=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\">
                                            <div class=\"card-image\"><img src=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "preview_image", []), "path", []), "html", null, true);
                echo "\" style=\"margin: 20%; width: 60%; height: auto\"></div>
                                        </a>
                                        <div class=card-body>
                                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\">
                                                <h2 class=\"title is-3\"> ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", []), "html", null, true);
                echo " </h3>
                                            </a>
                                            <div class=card-meta> <i class=icon-user></i>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "category", []), "name", []), "html", null, true);
                echo "</div>
                                            <div class=card-description>
                                                <p>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "preview_text", []), "html", null, true);
                echo "</p>
                                            </div>
                                        </div>
                                        <div class=card-footer> <a class=\"button is-link\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                echo "/servicio/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", []), "html", null, true);
                echo "\" style=\"margin-right: 10px\">Ver detalles</a> <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "offer", []), "first", [], "method"), "preview_text", []), "html", null, true);
                echo "\" target=\"_blank\" class=\"button is-link is-outlined\"> <span class=\"icon\"> <i class=\"fas fa-shopping-cart\"></i> </span> </a></div>                                                                                  
                                    </div>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                ";
        }
        // line 59
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
        return "/home/ubuntu/workspace/themes/aero/pages/explorar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 59,  137 => 58,  123 => 54,  117 => 51,  112 => 49,  107 => 47,  101 => 46,  95 => 43,  89 => 42,  85 => 40,  82 => 39,  77 => 38,  75 => 37,  69 => 33,  65 => 32,  55 => 25,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set servicios = ProductList.make().sort(ProductList.getSorting()).active() %}

<header>
{% partial 'menus/main' %} 
</header>
        <main class=app-content style=\"margin-top: 50px\">
            <div class=\"hero is-light is-bold\">
                <div class=hero-body>
                    <div class=container>
                        <div class=\"columns is-vcentered\">
                            <div class=\"column is-two-thirds\">
                                <h1 class=\"title animated fadeInLeft delay-1s\"> Explorar </h1>
                                <h2 class=\"subtitle animated fadeInRight delay-1s\"> Descubre servicios empresariales. </h2> </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <section class=\"section is-storyworlds has-background is-medium\">
                <div class=container>

                    <nav class=\"breadcrumb has-arrow-separator animated fadeInLeft delay-2s\" aria-label=\"breadcrumbs\">
                      <ul>
                        <li><a href=\"{{app}}/?ref=breadcumb\">Inicio</a></li>
                        <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">Explorar</a></li>
                      </ul>
                    </nav>
                            
                    <div class=columns>
                        <div class=\"column is-3 is-2-widescreen animated fadeIn delay-2s\">
                            {% partial 'sidebar' %}
                        </div>
                        <div class=\"column is-9 is-10-widescreen animated fadeInUp delay-3s\">
                            <div class=\"columns is-multiline\" id=grid>
                            
                                {% if servicios.isNotEmpty() %}
                                {% for s in servicios %}
                                {% set extras = s.code|split(',') %}
                                <div class=\"column is-6 is-4-widescreen is-flex\" data-groups=\"[&quot;6-9&quot;]\">
                                    <div class=\"card is-storyworld\">
                                        <a class=card-header href=\"{{app}}/servicio/{{s.slug}}\">
                                            <div class=\"card-image\"><img src=\"{{ s.preview_image.path }}\" style=\"margin: 20%; width: 60%; height: auto\"></div>
                                        </a>
                                        <div class=card-body>
                                            <a href=\"{{app}}/servicio/{{s.slug}}\">
                                                <h2 class=\"title is-3\"> {{ s.name }} </h3>
                                            </a>
                                            <div class=card-meta> <i class=icon-user></i>{{ s.category.name }}</div>
                                            <div class=card-description>
                                                <p>{{ s.preview_text }}</p>
                                            </div>
                                        </div>
                                        <div class=card-footer> <a class=\"button is-link\" href=\"{{app}}/servicio/{{s.slug}}\" style=\"margin-right: 10px\">Ver detalles</a> <a href=\"{{ s.offer.first().preview_text }}\" target=\"_blank\" class=\"button is-link is-outlined\"> <span class=\"icon\"> <i class=\"fas fa-shopping-cart\"></i> </span> </a></div>                                                                                  
                                    </div>
                                </div>
                                {% endfor %}
                                {% endif %}
 

                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>", "/home/ubuntu/workspace/themes/aero/pages/explorar.htm", "");
    }
}

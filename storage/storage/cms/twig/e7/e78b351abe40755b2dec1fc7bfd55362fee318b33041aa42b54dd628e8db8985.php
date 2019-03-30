<?php

/* /home/ubuntu/workspace/themes/aero/partials/sidebar.htm */
class __TwigTemplate_528abd4f20c89cf66441c02e25411fd0bc16e5b40247d5913925699e301125ee extends Twig_Template
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
        $context["categoria"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method");
        // line 3
        echo "
    <div class=menu>
        <p class=menu-label> Colecciones </p>
        <ul class=menu-list>
            <li> <a data-action=filter data-group=2-4 href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/explorar\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []) == "")) {
            echo "style=\"font-weight: bolder\" ";
        }
        echo ">";
        if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []) == "")) {
            echo "<i class=\"fas fa-caret-right\"></i> ";
        }
        echo " Todos</a> </li>
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["categorias"] ?? null), "isNotEmpty", [], "method")) {
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "product_count", []) > 0)) {
                    echo "        
            <li><a data-action=filter data-group=2-4 href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                    echo "/coleccion/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []) == twig_get_attribute($this->env, $this->source, $context["c"], "slug", []))) {
                        echo " style=\"font-weight: bolder\" ";
                    }
                    echo ">";
                    if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "slug", []) == twig_get_attribute($this->env, $this->source, $context["c"], "slug", []))) {
                        echo "<i class=\"fas fa-caret-right\"></i> ";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
                    echo "</a> </li>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        }
        echo "            
        </ul>
        <div class=\"\">
            <div class=\"fb-like aeroMarginV50\" data-href=\"https://facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>        
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  55 => 10,  47 => 9,  45 => 8,  33 => 7,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categorias = CategoryList.make().tree() %}
{% set categoria = CategoryPage.get() %}

    <div class=menu>
        <p class=menu-label> Colecciones </p>
        <ul class=menu-list>
            <li> <a data-action=filter data-group=2-4 href=\"{{app}}/explorar\" {% if categoria.slug == '' %}style=\"font-weight: bolder\" {% endif %}>{% if categoria.slug == '' %}<i class=\"fas fa-caret-right\"></i> {% endif %} Todos</a> </li>
            {% if categorias.isNotEmpty() %}
            {% for c in categorias if c.product_count > 0 %}        
            <li><a data-action=filter data-group=2-4 href=\"{{app}}/coleccion/{{c.slug}}\" {% if categoria.slug == c.slug %} style=\"font-weight: bolder\" {% endif %}>{% if categoria.slug == c.slug %}<i class=\"fas fa-caret-right\"></i> {% endif %} {{c.name}}</a> </li>
            {% endfor %}
            {% endif %}            
        </ul>
        <div class=\"\">
            <div class=\"fb-like aeroMarginV50\" data-href=\"https://facebook.com/LlajwaClub\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"false\"></div>        
        </div>
    </div>", "/home/ubuntu/workspace/themes/aero/partials/sidebar.htm", "");
    }
}

<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/colecciones.htm */
class __TwigTemplate_9d2433ce606fc6ef98c0e6127de07164fab59093f9bdb878f586fda749f91a38 extends Twig_Template
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
        $context["colecciones"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method"), "tree", [], "method");
        // line 2
        echo "
<div class=\"category-quickview\">
    <div class=\"inner\">
        <ul class=\"category-menu\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["colecciones"] ?? null), "isNotEmpty", [], "method")) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colecciones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "product_count", []) > 0)) {
                    echo "         
            <li>
                <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                    echo "/coleccion/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
                    echo "\">
                    <span>";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
                    echo "</span> <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "preview_image", []), "path", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
                    echo "\" style=\"opacity: 0.4\">
      </a>
            </li>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
        }
        echo "                       
        </ul>
    
        <!--div class=\"all-categories is-hidden-mobile\">
            <a href=\"products.html\">Show all categories</a>
            <div class=\"centered-divider\"></div>
        </div-->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/colecciones.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  48 => 10,  42 => 9,  33 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set colecciones = CategoryList.make().tree() %}

<div class=\"category-quickview\">
    <div class=\"inner\">
        <ul class=\"category-menu\">
        {% if colecciones.isNotEmpty() %}
            {% for c in colecciones if c.product_count > 0 %}         
            <li>
                <a href=\"{{app}}/coleccion/{{c.slug}}\">
                    <span>{{c.name}}</span> <img src=\"{{ c.preview_image.path }}\" alt=\"{{c.name}}\" style=\"opacity: 0.4\">
      </a>
            </li>
            {% endfor %}
        {% endif %}                       
        </ul>
    
        <!--div class=\"all-categories is-hidden-mobile\">
            <a href=\"products.html\">Show all categories</a>
            <div class=\"centered-divider\"></div>
        </div-->
    </div>
</div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/colecciones.htm", "");
    }
}

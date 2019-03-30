<?php

/* /home/ubuntu/workspace/themes/marketplace/partials/menu-mobile.htm */
class __TwigTemplate_07d463ba3bcb83aa4958f4dcb1c9b2c82fba32c390d300fe8dd7632aaaae4c81 extends Twig_Template
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
<nav class=\"navbar mobile-navbar is-hidden-desktop is-hidden-tablet\" aria-label=\"main navigation\">
    <!-- Brand -->
    <div class=\"navbar-brand\">
        <a class=\"navbar-item\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=logo-mobile\">
            <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/logo.svg");
        echo "\" alt=\"\">
        </a>

        <!-- Sidebar mode toggler icon -->
        <a id=\"sidebar-mode\" class=\"navbar-item is-icon is-sidebar-toggler\" href=\"javascript:void(0);\">
            <i data-feather=\"sidebar\"></i>
        </a>

        <!-- Mobile menu toggler icon -->
        <div class=\"navbar-burger\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Navbar mobile menu -->
    <div class=\"navbar-menu\">
        <!-- Account -->
        <div class=\"navbar-item has-dropdown\">
            <a href=\"account.html\" class=\"navbar-link\">
                <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatars/altvatar.png");
        echo "\" alt=\"\"> 
                <span class=\"is-heading\">Bienvenido, invitado</span> 
            </a>

            <!-- Mobile Dropdown -->
            <div class=\"navbar-dropdown\">
                <a href=\"#\" class=\"navbar-item is-flex\">
                    <span>Carrito</span>
                    <!-- Number of items in Cart -->
                    <span class=\"menu-badge\">0</span>
                </a>
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/ingresar\" class=\"navbar-item\">Ingresar</a>
                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/ingresar\" class=\"navbar-item\">Registrarse</a>
            </div>
        </div>

        <!-- More -->
        <div class=\"navbar-item has-dropdown\">
            <a class=\"navbar-link\">
                <i data-feather=\"grid\"></i>
                <span class=\"is-heading\">Colecciones</span>
            </a>

            <!-- Mobile Dropdown -->
            <div class=\"navbar-dropdown\">
                ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["categorias"] ?? null), "isNotEmpty", [], "method")) {
            // line 53
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "product_count", []) > 0)) {
                    echo "            
                    <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
                    echo "/coleccion/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
                    echo "\" class=\"navbar-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
                    echo "</a>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                ";
        }
        // line 57
        echo "            </div>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/marketplace/partials/menu-mobile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 57,  115 => 56,  102 => 54,  94 => 53,  92 => 52,  76 => 39,  72 => 38,  58 => 27,  35 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categorias = CategoryList.make().tree() %}

<nav class=\"navbar mobile-navbar is-hidden-desktop is-hidden-tablet\" aria-label=\"main navigation\">
    <!-- Brand -->
    <div class=\"navbar-brand\">
        <a class=\"navbar-item\" href=\"{{app}}/?ref=logo-mobile\">
            <img src=\"{{'assets/images/logo/logo.svg' | theme}}\" alt=\"\">
        </a>

        <!-- Sidebar mode toggler icon -->
        <a id=\"sidebar-mode\" class=\"navbar-item is-icon is-sidebar-toggler\" href=\"javascript:void(0);\">
            <i data-feather=\"sidebar\"></i>
        </a>

        <!-- Mobile menu toggler icon -->
        <div class=\"navbar-burger\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Navbar mobile menu -->
    <div class=\"navbar-menu\">
        <!-- Account -->
        <div class=\"navbar-item has-dropdown\">
            <a href=\"account.html\" class=\"navbar-link\">
                <img src=\"{{'assets/images/avatars/altvatar.png' | theme}}\" alt=\"\"> 
                <span class=\"is-heading\">Bienvenido, invitado</span> 
            </a>

            <!-- Mobile Dropdown -->
            <div class=\"navbar-dropdown\">
                <a href=\"#\" class=\"navbar-item is-flex\">
                    <span>Carrito</span>
                    <!-- Number of items in Cart -->
                    <span class=\"menu-badge\">0</span>
                </a>
                <a href=\"{{app}}/ingresar\" class=\"navbar-item\">Ingresar</a>
                <a href=\"{{app}}/ingresar\" class=\"navbar-item\">Registrarse</a>
            </div>
        </div>

        <!-- More -->
        <div class=\"navbar-item has-dropdown\">
            <a class=\"navbar-link\">
                <i data-feather=\"grid\"></i>
                <span class=\"is-heading\">Colecciones</span>
            </a>

            <!-- Mobile Dropdown -->
            <div class=\"navbar-dropdown\">
                {% if categorias.isNotEmpty() %}
                    {% for c in categorias if c.product_count > 0 %}            
                    <a href=\"{{app}}/coleccion/{{c.slug}}\" class=\"navbar-item\">{{c.name}}</a>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
</nav>", "/home/ubuntu/workspace/themes/marketplace/partials/menu-mobile.htm", "");
    }
}

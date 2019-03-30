<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/menu.htm */
class __TwigTemplate_60a55c176797cd99aae11f904896d7b41c46e598e812e1309284562e84d858e1 extends Twig_Template
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
        echo "<!-- Shop quickview -->
        <div class=\"shop-quickview has-background-image\" data-background=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg/sidebar.jpg");
        echo "\">
            <div class=\"inner\">
                <!-- Header -->
                <div class=\"quickview-header\">
                    <h2> MENU</h2>
                    <span id=\"close-shop-sidebar\"><i data-feather=\"x\"></i></span>
                </div>
                <!-- Shop menu -->
                <ul class=\"shop-menu\">
                    <li>
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=marketplace-menú\">
                            <span>Marketplace</span>
                            <i data-feather=\"home\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"https://www.llajwa.club/?ref=marketplace\" target=\"_blank\">
                            <span>Web</span>
                            <i data-feather=\"tag\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"https://www.facebook.com/LlajwaClub\">
                            <span>Facebook</span>
                            <i data-feather=\"facebook\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/ingresar\">
                            <span>Mi cuenta</span>
                            <i data-feather=\"user\"></i>
                        </a>
                    </li>
                </ul>
                <!-- Profile image -->
                <ul class=\"user-profile\">
                    <li>
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/ingresar\">
                            <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatars/altvatar.png");
        echo "\" alt=\"\">
                            <span class=\"user\">
                                <span><small>Conectado como</small></span>                                
                                <span>Invitado</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Cart quickview -->
        <div class=\"cart-quickview\">
            <div class=\"inner\">
                <!-- Header -->
                <div class=\"quickview-header\">
                    <h2>Checkout</h2>
                    <span id=\"close-cart-sidebar\"><i data-feather=\"x\"></i></span>
                </div>
                <!-- Cart quickview body -->
                <div class=\"cart-body\">
                    <div class=\"empty-cart has-text-centered\">
                        <h3>Su carrito está vacío</h3>
                        <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/new-cart.svg");
        echo "\" alt=\"\">
                        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?rel=menu\" class=\"button big-button rounded\">Explorar</a>
                        <small>Nuevos servicios cada semana</small>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 63,  101 => 62,  76 => 40,  72 => 39,  60 => 30,  39 => 12,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Shop quickview -->
        <div class=\"shop-quickview has-background-image\" data-background=\"{{'assets/images/bg/sidebar.jpg' | theme}}\">
            <div class=\"inner\">
                <!-- Header -->
                <div class=\"quickview-header\">
                    <h2> MENU</h2>
                    <span id=\"close-shop-sidebar\"><i data-feather=\"x\"></i></span>
                </div>
                <!-- Shop menu -->
                <ul class=\"shop-menu\">
                    <li>
                        <a href=\"{{app}}/?ref=marketplace-menú\">
                            <span>Marketplace</span>
                            <i data-feather=\"home\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"https://www.llajwa.club/?ref=marketplace\" target=\"_blank\">
                            <span>Web</span>
                            <i data-feather=\"tag\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"https://www.facebook.com/LlajwaClub\">
                            <span>Facebook</span>
                            <i data-feather=\"facebook\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{app}}/ingresar\">
                            <span>Mi cuenta</span>
                            <i data-feather=\"user\"></i>
                        </a>
                    </li>
                </ul>
                <!-- Profile image -->
                <ul class=\"user-profile\">
                    <li>
                        <a href=\"{{app}}/ingresar\">
                            <img src=\"{{'assets/images/avatars/altvatar.png' | theme}}\" alt=\"\">
                            <span class=\"user\">
                                <span><small>Conectado como</small></span>                                
                                <span>Invitado</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Cart quickview -->
        <div class=\"cart-quickview\">
            <div class=\"inner\">
                <!-- Header -->
                <div class=\"quickview-header\">
                    <h2>Checkout</h2>
                    <span id=\"close-cart-sidebar\"><i data-feather=\"x\"></i></span>
                </div>
                <!-- Cart quickview body -->
                <div class=\"cart-body\">
                    <div class=\"empty-cart has-text-centered\">
                        <h3>Su carrito está vacío</h3>
                        <img src=\"{{'assets/images/icons/new-cart.svg' | theme}}\" alt=\"\">
                        <a href=\"{{app}}/?rel=menu\" class=\"button big-button rounded\">Explorar</a>
                        <small>Nuevos servicios cada semana</small>
                    </div>
                </div>
            </div>
        </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/menu.htm", "");
    }
}

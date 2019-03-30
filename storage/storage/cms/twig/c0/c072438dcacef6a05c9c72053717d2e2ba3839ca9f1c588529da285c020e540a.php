<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/ingresar.htm */
class __TwigTemplate_96cec6c3d3791bebce7bc961171f999ea3feeea505031b15e36fb24a15d25c41 extends Twig_Template
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
        echo "<div class=\"section\">
                <!-- Container -->
                <div class=\"container\">
        
                    <!-- Authentication Layout -->
                    <div class=\"columns account-header is-auth\">
                        <div class=\"column is-10 is-offset-1 is-tablet-landscape-padded\">
                            <!-- Title -->
                            <div class=\"auth-title\">
                                <h2>Marketplace</h2>
                                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=ingresar\" class=\"button feather-button is-small primary-button upper-button raised is-hidden-mobile\">
                                    <span>Ir a la portada</span>
                                </a>
                                <img class=\"brand-filigrane\" src=\"";
        // line 14
        echo "assets/images/logo/logo-gris.svg";
        echo "\" alt=\"\">
                            </div>
                            <!-- Card -->
                            <div class=\"flat-card is-auto is-auth-form\">
                                <div class=\"columns is-gapless is-flex-mobile\">
                                    <!-- Image Columns -->
                                    <div class=\"column is-6 has-text-centered image-column is-padded\">
                                        <div class=\"store-wrapper\">
                                            <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/logo-light.svg");
        echo "\" alt=\"\">
                                            <div class=\"title\">
                                                Llajwa Club
                                            </div>
                                            <div class=\"subtitle\">Únete a nosotros</div>
                                        </div>
                                        <div class=\"nephos-overlay\"></div>
                                    </div>
                                    <!-- Login/Register form -->
                                    <div class=\"column is-6 is-mobile-padded\">
        
                                        <div class=\"tabs-wrapper animated-tabs\">
                                            <!-- Tabs -->
                                            <div class=\"tabs is-form-tabs\">
                                                <ul>
                                                    <li class=\"is-active\" data-tab=\"login\"><a>ingresar</a></li>
                                                    <li data-tab=\"register\"><a>Registrar</a></li>
                                                </ul>
                                            </div>
                                            <!-- Login form -->
                                            <div id=\"login\" class=\"navtab-content is-active\">
                                                <form>
                                                    <!-- Form Control -->
                                                    <div class=\"control\">
                                                        <label class=\"auth-label\">Email*</label>
                                                        <input type=\"email\" class=\"input\" placeholder=\"\">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class=\"control\">
                                                        <label class=\"auth-label\">Contraseña*</label>
                                                        <input type=\"password\" class=\"input\" placeholder=\"\">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class=\"control\">
                                                        <label class=\"checkbox-wrap is-small\">
                                                            <input id=\"house\" type=\"checkbox\" class=\"d-checkbox\" checked>
                                                            <span></span>
                                                            <small>¿Recordarme en este equipo?</small>
                                                        </label>
                                                    </div>
                                                    <!-- Form Submit -->
                                                    <div class=\"button-wrapper\">
                                                        <button type=\"submit\" class=\"button feather-button is-small primary-button upper-button raised\">
                                                            <span>Iniciar sesión</span>
                                                        </button>
                                                        <a class=\"forgotten\">Recordar contraseña</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Register form -->
                                            <div id=\"register\" class=\"navtab-content\">
                                                Nuevos registros están deshabilitados temporalmente.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Login/Register form -->
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <!-- Authentication Layout -->
                </div>
                <!-- /Container -->
            </div>";
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/ingresar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  41 => 14,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\">
                <!-- Container -->
                <div class=\"container\">
        
                    <!-- Authentication Layout -->
                    <div class=\"columns account-header is-auth\">
                        <div class=\"column is-10 is-offset-1 is-tablet-landscape-padded\">
                            <!-- Title -->
                            <div class=\"auth-title\">
                                <h2>Marketplace</h2>
                                <a href=\"{{app}}/?ref=ingresar\" class=\"button feather-button is-small primary-button upper-button raised is-hidden-mobile\">
                                    <span>Ir a la portada</span>
                                </a>
                                <img class=\"brand-filigrane\" src=\"{{'assets/images/logo/logo-gris.svg'}}\" alt=\"\">
                            </div>
                            <!-- Card -->
                            <div class=\"flat-card is-auto is-auth-form\">
                                <div class=\"columns is-gapless is-flex-mobile\">
                                    <!-- Image Columns -->
                                    <div class=\"column is-6 has-text-centered image-column is-padded\">
                                        <div class=\"store-wrapper\">
                                            <img src=\"{{'assets/images/logo/logo-light.svg' | theme}}\" alt=\"\">
                                            <div class=\"title\">
                                                Llajwa Club
                                            </div>
                                            <div class=\"subtitle\">Únete a nosotros</div>
                                        </div>
                                        <div class=\"nephos-overlay\"></div>
                                    </div>
                                    <!-- Login/Register form -->
                                    <div class=\"column is-6 is-mobile-padded\">
        
                                        <div class=\"tabs-wrapper animated-tabs\">
                                            <!-- Tabs -->
                                            <div class=\"tabs is-form-tabs\">
                                                <ul>
                                                    <li class=\"is-active\" data-tab=\"login\"><a>ingresar</a></li>
                                                    <li data-tab=\"register\"><a>Registrar</a></li>
                                                </ul>
                                            </div>
                                            <!-- Login form -->
                                            <div id=\"login\" class=\"navtab-content is-active\">
                                                <form>
                                                    <!-- Form Control -->
                                                    <div class=\"control\">
                                                        <label class=\"auth-label\">Email*</label>
                                                        <input type=\"email\" class=\"input\" placeholder=\"\">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class=\"control\">
                                                        <label class=\"auth-label\">Contraseña*</label>
                                                        <input type=\"password\" class=\"input\" placeholder=\"\">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class=\"control\">
                                                        <label class=\"checkbox-wrap is-small\">
                                                            <input id=\"house\" type=\"checkbox\" class=\"d-checkbox\" checked>
                                                            <span></span>
                                                            <small>¿Recordarme en este equipo?</small>
                                                        </label>
                                                    </div>
                                                    <!-- Form Submit -->
                                                    <div class=\"button-wrapper\">
                                                        <button type=\"submit\" class=\"button feather-button is-small primary-button upper-button raised\">
                                                            <span>Iniciar sesión</span>
                                                        </button>
                                                        <a class=\"forgotten\">Recordar contraseña</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Register form -->
                                            <div id=\"register\" class=\"navtab-content\">
                                                Nuevos registros están deshabilitados temporalmente.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Login/Register form -->
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <!-- Authentication Layout -->
                </div>
                <!-- /Container -->
            </div>", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/pages/ingresar.htm", "");
    }
}

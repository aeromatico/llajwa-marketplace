<?php

/* /home/ubuntu/workspace/themes/aero/partials/menus/main.htm */
class __TwigTemplate_7fc95af1788e539b442beb9f82f22ca73315bcedcda7f31ca0525c7743e713c1 extends Twig_Template
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
        echo "<nav class=\"navbar is-danger animated fadeIn is-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-brand\">
        ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) != "marketplace")) {
            // line 5
            echo "        <a class=\"navbar-item\" href=\"";
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/explorar\">
          <img src=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-marketplace.png");
            echo "\" alt=\"Logo\">
        </a>
        ";
        }
        // line 9
        echo "        <span class=\"navbar-burger burger\" data-target=\"navbarMenuHeroA\">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id=\"navbarMenuHeroA\" class=\"navbar-menu\">
        <div class=\"navbar-end\">
        ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) != "marketplace")) {
            // line 18
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/?ref=menu\" class=\"navbar-item has-text-white \">
            Inicio
          </a>
        ";
        }
        // line 22
        echo "          <a href=\"";
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/explorar\" class=\"navbar-item has-text-white \">
            Explorar
          </a>
          <span class=\"navbar-item has-text-white\">
            <a href=\"https://m.me/LlajwaClub\" target=\"_blank\" class=\"button is-danger is-inverted is-outlined\">
              <span class=\"icon\">
                <i class=\"far fa-comment\"></i>
              </span>
              <span>Iniciar chat</span>
            </a>
          </span>
        </div>
      </div>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/partials/menus/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  53 => 18,  51 => 17,  41 => 9,  35 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar is-danger animated fadeIn is-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-brand\">
        {% if this.page.id != 'marketplace' %}
        <a class=\"navbar-item\" href=\"{{app}}/explorar\">
          <img src=\"{{ 'assets/img/logo-marketplace.png' | theme}}\" alt=\"Logo\">
        </a>
        {% endif %}
        <span class=\"navbar-burger burger\" data-target=\"navbarMenuHeroA\">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id=\"navbarMenuHeroA\" class=\"navbar-menu\">
        <div class=\"navbar-end\">
        {% if this.page.id != 'marketplace' %}
          <a href=\"{{app}}/?ref=menu\" class=\"navbar-item has-text-white \">
            Inicio
          </a>
        {% endif %}
          <a href=\"{{app}}/explorar\" class=\"navbar-item has-text-white \">
            Explorar
          </a>
          <span class=\"navbar-item has-text-white\">
            <a href=\"https://m.me/LlajwaClub\" target=\"_blank\" class=\"button is-danger is-inverted is-outlined\">
              <span class=\"icon\">
                <i class=\"far fa-comment\"></i>
              </span>
              <span>Iniciar chat</span>
            </a>
          </span>
        </div>
      </div>
    </div>
  </nav>", "/home/ubuntu/workspace/themes/aero/partials/menus/main.htm", "");
    }
}

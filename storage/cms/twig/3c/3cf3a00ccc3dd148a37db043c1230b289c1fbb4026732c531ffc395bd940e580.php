<?php

/* /home/ubuntu/workspace/themes/aero/partials/footer.htm */
class __TwigTemplate_350eae39b698f365dd5a58cc24bb4eae9324df0fc50950ce84070dbf26f2c4ea extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) != "marketplace")) {
            // line 2
            echo "<section class=\"section call-to-action is-primary has-text-centered\" style=\"margin-top: 200px; background-color: #293347\">
  <div class=\"container is-narrow\">
    <div class=\"box\">
      <div class=\"columns level\">
        <div class=\"column level-item\">
          <h1 class=\"title\">¿Eres creativo?</h1>
        </div>
        <div class=\"column level-item\">
          <p>Vende tus propios servicios digitales en <br>Llajwa Marketplace.</p>
        </div>
        <div class=\"column level-item\"><a class=\"button is-link is-rounded is-medium\" href=\"https://m.me/LlajwaClub\">Contacta</a></div>
      </div>
    </div>
  </div>
</section>
<footer class=\"section is-small has-text-centered\" style=\"background-color: #293347\">
  <div class=\"container is-narrow\"><a class=\"logo\" href=\"https://www.llajwa.club\"><img src=\"";
            // line 18
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-llajwa-club-light.png");
            echo "\" alt=\"Llajwa Club\" style=\"width: 200px; height: auto\"></a>
    <div class=\"columns is-centered\"> 
      <div class=\"column\">
        <h1 class=\"title is-size-4-touch has-text-light\">Avanzado un día a la vez.</h1>
      </div>
    </div>
    <div class=\"social-icons\">
      <p class=\"field\">
      <a class=\"button is-medium\" href=\"https://facebook.com/LlajwaClub\" target=\"_blank\"><span class=\"icon is-small\"><i class=\"fab fa-facebook fa-fw\"></i></span></a>
      <a class=\"button is-medium\" href=\"https://instagram.com/LlajwaClub\" target=\"_blank\"><span class=\"icon is-small\"><i class=\"fab fa-instagram fa-fw\"></i></span></a>
      <a class=\"button is-medium\" href=\"https://twitter.com/LlajwaClub\" target=\"_blank\"><span class=\"icon is-small\"><i class=\"fab fa-twitter fa-fw\"></i></span></a>
    </div>
    <div class=\"copyright\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo " Llajwa Club®</div>
    <div class=\"is-size-7\">Hecho con <i class=\"fas fa-heart\"></i>, hecho en Bolivia</div>
  </div>
</footer>
 ";
        }
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 30,  43 => 18,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.page.id != 'marketplace' %}
<section class=\"section call-to-action is-primary has-text-centered\" style=\"margin-top: 200px; background-color: #293347\">
  <div class=\"container is-narrow\">
    <div class=\"box\">
      <div class=\"columns level\">
        <div class=\"column level-item\">
          <h1 class=\"title\">¿Eres creativo?</h1>
        </div>
        <div class=\"column level-item\">
          <p>Vende tus propios servicios digitales en <br>Llajwa Marketplace.</p>
        </div>
        <div class=\"column level-item\"><a class=\"button is-link is-rounded is-medium\" href=\"https://m.me/LlajwaClub\">Contacta</a></div>
      </div>
    </div>
  </div>
</section>
<footer class=\"section is-small has-text-centered\" style=\"background-color: #293347\">
  <div class=\"container is-narrow\"><a class=\"logo\" href=\"https://www.llajwa.club\"><img src=\"{{'assets/img/logo-llajwa-club-light.png' | theme}}\" alt=\"Llajwa Club\" style=\"width: 200px; height: auto\"></a>
    <div class=\"columns is-centered\"> 
      <div class=\"column\">
        <h1 class=\"title is-size-4-touch has-text-light\">Avanzado un día a la vez.</h1>
      </div>
    </div>
    <div class=\"social-icons\">
      <p class=\"field\">
      <a class=\"button is-medium\" href=\"https://facebook.com/LlajwaClub\" target=\"_blank\"><span class=\"icon is-small\"><i class=\"fab fa-facebook fa-fw\"></i></span></a>
      <a class=\"button is-medium\" href=\"https://instagram.com/LlajwaClub\" target=\"_blank\"><span class=\"icon is-small\"><i class=\"fab fa-instagram fa-fw\"></i></span></a>
      <a class=\"button is-medium\" href=\"https://twitter.com/LlajwaClub\" target=\"_blank\"><span class=\"icon is-small\"><i class=\"fab fa-twitter fa-fw\"></i></span></a>
    </div>
    <div class=\"copyright\">{{ \"now\"|date(\"Y\") }} Llajwa Club®</div>
    <div class=\"is-size-7\">Hecho con <i class=\"fas fa-heart\"></i>, hecho en Bolivia</div>
  </div>
</footer>
 {% endif %}", "/home/ubuntu/workspace/themes/aero/partials/footer.htm", "");
    }
}

<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/push.htm */
class __TwigTemplate_94aa29f30909b23ec5b4fd725a7a13f9c9a6737720766b82347a2d1981c4bad6 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "push")) {
            // line 2
            echo "
<link rel=\"manifest\" href=\"";
            // line 3
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/push/manifest.json");
            echo "\" />
<script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async=\"\"></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: \"089bfd28-0e05-4d27-89ac-d048deadbaf8\",
    });
  });
</script>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/push.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.page.id == 'push' %}

<link rel=\"manifest\" href=\"{{'assets/push/manifest.json' | theme}}\" />
<script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async=\"\"></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: \"089bfd28-0e05-4d27-89ac-d048deadbaf8\",
    });
  });
</script>

{% endif %}", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/push.htm", "");
    }
}

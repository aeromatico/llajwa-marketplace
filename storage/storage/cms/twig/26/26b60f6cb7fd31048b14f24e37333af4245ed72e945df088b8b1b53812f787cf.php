<?php

/* /home/ubuntu/workspace/themes/aero/partials/code/messenger.htm */
class __TwigTemplate_6df76fcc3182f0bc072921e8e87915b9b5aebcf307ae79cda89db45cbb457b41 extends Twig_Template
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
        echo "<!-- Load Facebook SDK for JavaScript -->
<div id=\"fb-root\"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class=\"fb-customerchat\"
  attribution=setup_tool
  page_id=\"2086969601543519\"
  theme_color=\"#FF0000\"
  logged_in_greeting=\"Hola, ¿podemos ayudarte?\"
  logged_out_greeting=\"Hola, ¿podemos ayudarte?\">
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/partials/code/messenger.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Load Facebook SDK for JavaScript -->
<div id=\"fb-root\"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class=\"fb-customerchat\"
  attribution=setup_tool
  page_id=\"2086969601543519\"
  theme_color=\"#FF0000\"
  logged_in_greeting=\"Hola, ¿podemos ayudarte?\"
  logged_out_greeting=\"Hola, ¿podemos ayudarte?\">
</div>", "/home/ubuntu/workspace/themes/aero/partials/code/messenger.htm", "");
    }
}

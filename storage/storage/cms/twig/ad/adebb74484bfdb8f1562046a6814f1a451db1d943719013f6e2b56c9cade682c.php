<?php

/* /home/ubuntu/workspace/themes/marketplace/layouts/portada.htm */
class __TwigTemplate_b6b0cebc423e17be013c3e558755ba314bc618630c5f231c81db0db1fde67bbd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
        <!-- Required meta tags always come first -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"theme-color\" content=\"#ff0000\" />
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        <meta name=\"author\" content=\"^A^ero\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" />

        <!--Core CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bulma.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/core.css?v=2");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aero.css?v=7");
        echo "\">
        
        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\">
        
        <!-- plugins -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slick/slick.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slick/slick-theme.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/webuipopover/jquery.webui-popover.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/izitoast/css/iziToast.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/zoom/zoom.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jpcard/card.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/chosen/chosen.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/icons.min.css");
        echo "\"> 
        ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 32
        echo "        <script
  src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
  integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
  crossorigin=\"anonymous\"></script>

";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("push"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2000078730242765');
  fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
  src=\"https://www.facebook.com/tr?id=2000078730242765&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->

    </head>
    <body>
    
<!-- Load Facebook SDK for JavaScript -->
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
  theme_color=\"#ff0000\"
  logged_in_greeting=\"¡Inicia un chat ahora!\"
  logged_out_greeting=\"¡Inicia un chat ahora!\">
</div>

    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=500575266950379&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> 
    
    
    
        <!-- Pageloader -->
        <div class=\"pageloader\"></div>
        <div class=\"infraloader is-active\"></div>
        
        <!-- Mobile mode navbar -->
        ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-mobile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "        
        <!-- Main Sidebar-->
        ";
        // line 106
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 107
        echo "
        <!-- Toggle -->
        ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("toggle-mobile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "        <!-- /Toggle -->
        
        <!-- Colecciones -->
        ";
        // line 113
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("colecciones"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 114
        echo "        
        ";
        // line 115
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 116
        echo "        
        <!-- Content Wrapper -->
        <div class=\"shop-wrapper has-background-image\">
        
            ";
        // line 120
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("buscar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 121
        echo "
            ";
        // line 122
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 123
        echo "            
            
        </div>
        <!-- /Content Wrapper -->
        <!-- Concatenated plugins -->
        <script src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
        <!-- Helios js -->
        <script src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/nephos.js");
        echo "\"></script>    
        
        ";
        // line 132
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 133
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo "        
        
        </body>  

</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/marketplace/layouts/portada.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 133,  245 => 132,  240 => 130,  235 => 128,  228 => 123,  226 => 122,  223 => 121,  219 => 120,  213 => 116,  209 => 115,  206 => 114,  202 => 113,  197 => 110,  193 => 109,  189 => 107,  185 => 106,  181 => 104,  177 => 103,  110 => 38,  106 => 37,  99 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  54 => 16,  50 => 15,  46 => 14,  40 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
        <!-- Required meta tags always come first -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"theme-color\" content=\"#ff0000\" />
        {% partial 'meta' %}
        <meta name=\"author\" content=\"^A^ero\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{'assets/images/favicon.png' | theme}}\" />

        <!--Core CSS -->
        <link rel=\"stylesheet\" href=\"{{'assets/css/bulma.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/css/core.css?v=2' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/css/aero.css?v=7' | theme}}\">
        
        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\">
        
        <!-- plugins -->
        <link rel=\"stylesheet\" href=\"{{'assets/js/slick/slick.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/js/slick/slick-theme.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/js/webuipopover/jquery.webui-popover.min.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/js/izitoast/css/iziToast.min.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/js/zoom/zoom.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/js/jpcard/card.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/css/chosen/chosen.css' | theme}}\">
        <link rel=\"stylesheet\" href=\"{{'assets/css/icons.min.css' | theme}}\"> 
        {% styles %}
        <script
  src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
  integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
  crossorigin=\"anonymous\"></script>

{% partial 'push' %}

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2000078730242765');
  fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
  src=\"https://www.facebook.com/tr?id=2000078730242765&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->

    </head>
    <body>
    
<!-- Load Facebook SDK for JavaScript -->
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
  theme_color=\"#ff0000\"
  logged_in_greeting=\"¡Inicia un chat ahora!\"
  logged_out_greeting=\"¡Inicia un chat ahora!\">
</div>

    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=500575266950379&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> 
    
    
    
        <!-- Pageloader -->
        <div class=\"pageloader\"></div>
        <div class=\"infraloader is-active\"></div>
        
        <!-- Mobile mode navbar -->
        {% partial 'menu-mobile' %}
        
        <!-- Main Sidebar-->
        {% partial 'sidebar' %}

        <!-- Toggle -->
        {% partial 'toggle-mobile' %}
        <!-- /Toggle -->
        
        <!-- Colecciones -->
        {% partial 'colecciones' %}
        
        {% partial 'menu' %}
        
        <!-- Content Wrapper -->
        <div class=\"shop-wrapper has-background-image\">
        
            {% partial 'buscar' %}

            {% page %}
            
            
        </div>
        <!-- /Content Wrapper -->
        <!-- Concatenated plugins -->
        <script src=\"{{'assets/js/app.js' | theme}}\"></script>
        <!-- Helios js -->
        <script src=\"{{'assets/js/nephos.js' | theme}}\"></script>    
        
        {% framework extras %}
        {% scripts %}        
        
        </body>  

</html>", "/home/ubuntu/workspace/themes/marketplace/layouts/portada.htm", "");
    }
}

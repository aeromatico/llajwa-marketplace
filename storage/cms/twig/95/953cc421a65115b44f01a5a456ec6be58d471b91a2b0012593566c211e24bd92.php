<?php

/* /home/ubuntu/workspace/themes/aero/layouts/master.htm */
class __TwigTemplate_33ea063e2343db328c29cfd78246de3551f786382a10ec901262813e4d6528cd extends Twig_Template
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
<!--[if lt IE 7]>
  <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\">
<![endif]-->
<!--[if IE 7]>
  <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\">
<![endif]-->
<!--[if IE 8]>
  <html class=\"no-js lt-ie9\" lang=\"\">
<![endif]-->
<!--[if gt IE 8]>
<!-->
<html class=\"no-js\" lang=\"\">
\t<!--
<![endif]-->
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"theme-color\" content=\"#ff0000\" />
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("code/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "    <meta name=\"author\" content=\"Aero\">
    <meta name=\"generator\" content=\"Llajwa Club\">    
    <link rel=\"shortcut icon\" href=\"https://www.llajwa.club/themes/aero/assets/img/favicon.ico\">   
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"apple-touch-icon\" href=\"https://www.llajwa.club/themes/aero/assets/img/favicon.ico\">
    <link rel=\"icon\" type=\"image/png\" href=\"https://www.llajwa.club/themes/aero/assets/img/favicon.ico\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bulma.css?v=1");
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aero.css?v=2");
        echo "\">  
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.datepicker.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bbe4b2e0c55ed0011c01b7e&product=inline-share-buttons' async='async'></script>
    ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 37
        echo "   ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("code/pixel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
</head>
<body class=\"layout-default\">
";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("code/messenger"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=500575266950379&autoLogAppEvents=1\"></script>   

   ";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "       
   
   ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "   
    
   <script type=\"text/javascript\" src=\"//wikiki.github.io/node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.js\"></script>
   <script type=\"text/javascript\" src=\"https://wikiki.github.io/node_modules/bulma-extensions/bulma-accordion/dist/js/bulma-accordion.min.js\"></script> 
   <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bulma.js");
        echo "\"></script>
   <script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    ";
        // line 53
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
        // line 54
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 55
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 55,  139 => 54,  124 => 53,  120 => 52,  116 => 51,  110 => 47,  106 => 46,  101 => 44,  92 => 40,  83 => 37,  80 => 36,  75 => 34,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  50 => 23,  46 => 22,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7]>
  <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\">
<![endif]-->
<!--[if IE 7]>
  <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\">
<![endif]-->
<!--[if IE 8]>
  <html class=\"no-js lt-ie9\" lang=\"\">
<![endif]-->
<!--[if gt IE 8]>
<!-->
<html class=\"no-js\" lang=\"\">
\t<!--
<![endif]-->
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"theme-color\" content=\"#ff0000\" />
    {% partial 'code/meta' %}
    <meta name=\"author\" content=\"Aero\">
    <meta name=\"generator\" content=\"Llajwa Club\">    
    <link rel=\"shortcut icon\" href=\"https://www.llajwa.club/themes/aero/assets/img/favicon.ico\">   
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"apple-touch-icon\" href=\"https://www.llajwa.club/themes/aero/assets/img/favicon.ico\">
    <link rel=\"icon\" type=\"image/png\" href=\"https://www.llajwa.club/themes/aero/assets/img/favicon.ico\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/bulma.css?v=1' | theme }}\">
      <link rel=\"stylesheet\" href=\"{{'assets/css/aero.css?v=2' | theme }}\">  
    <link rel=\"stylesheet\" href=\"{{'assets/css/font-awesome.min.css' | theme }}\">
    <link href=\"{{'assets/css/jquery.datepicker.css' | theme }}\" rel=\"stylesheet\" type=\"text/css\">
    <script src=\"{{'assets/js/jquery.min.js' | theme }}\"></script>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bbe4b2e0c55ed0011c01b7e&product=inline-share-buttons' async='async'></script>
    {% styles %}
   {% partial 'code/pixel' %}  
</head>
<body class=\"layout-default\">
{% partial 'code/messenger' %}    
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=500575266950379&autoLogAppEvents=1\"></script>   

   {% page %}       
   
   {% partial 'footer' %}
   
    
   <script type=\"text/javascript\" src=\"//wikiki.github.io/node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.js\"></script>
   <script type=\"text/javascript\" src=\"https://wikiki.github.io/node_modules/bulma-extensions/bulma-accordion/dist/js/bulma-accordion.min.js\"></script> 
   <script src=\"{{'assets/js/bulma.js' | theme }}\"></script>
   <script src=\"{{'assets/js/main.js' | theme }}\"></script>
    {% framework extras %}
    {% scripts %}

</body>
</html>", "/home/ubuntu/workspace/themes/aero/layouts/master.htm", "");
    }
}

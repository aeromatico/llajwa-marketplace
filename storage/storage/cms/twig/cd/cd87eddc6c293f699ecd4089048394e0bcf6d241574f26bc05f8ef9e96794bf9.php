<?php

/* /home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/meta.htm */
class __TwigTemplate_0ef6e85192e37a04f3565451916552c73b18503eb35aefd2b4a937ae2954e55d extends Twig_Template
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
        $context["s"] = twig_get_attribute($this->env, $this->source, ($context["servicio"] ?? null), "get", [], "method");
        // line 2
        $context["c"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method");
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", [])) {
            // line 4
            echo "<title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
            echo " · Llajwa Marketplace</title>
    <meta name=\"title\" content=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
            echo " · Llajwa Marketplace\"> 
    <meta name=\"description\" content=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_text", []), "html", null, true);
            echo "\">
    <meta property=\"og:title\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []), "html", null, true);
            echo "\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"";
            // line 9
            echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []));
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "slug", []), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_image", []), "path", []), "html", null, true);
            echo "\" />
    <meta property=\"og:description\" content=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "preview_text", []), "html", null, true);
            echo "\" />
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 12
($context["c"] ?? null), "name", [])) {
            // line 13
            echo "<title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", []), "html", null, true);
            echo " · Llajwa Marketplace</title>
    <meta name=\"title\" content=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", []), "html", null, true);
            echo " · Llajwa Marketplace\"> 
    <meta name=\"description\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "preview_text", []), "html", null, true);
            echo "\">
    <meta property=\"og:title\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", []), "html", null, true);
            echo "\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"";
            // line 18
            echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []));
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "slug", []), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "preview_image", []), "path", []), "html", null, true);
            echo "\" />
    <meta property=\"og:description\" content=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "preview_text", []), "html", null, true);
            echo "\" />
";
        } else {
            // line 21
            echo "    
<title>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
            echo " · Llajwa Marketplace</title>
    <meta name=\"description\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
            echo "\">
    <meta name=\"title\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_title", []), "html", null, true);
            echo "\">
    <meta property=\"og:title\" content=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_title", []), "html", null, true);
            echo "\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"https://marketplace.llajwa.club/themes/marketplace/assets/images/logo-oficial.png\" />
    <meta property=\"og:description\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  116 => 27,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  96 => 21,  91 => 20,  87 => 19,  81 => 18,  76 => 16,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  57 => 11,  53 => 10,  47 => 9,  42 => 7,  38 => 6,  34 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set s = servicio.get() %}
{% set c = CategoryPage.get() %}
{% if s.name %}
<title>{{ s.name }} · Llajwa Marketplace</title>
    <meta name=\"title\" content=\"{{ s.name }} · Llajwa Marketplace\"> 
    <meta name=\"description\" content=\"{{ s.preview_text }}\">
    <meta property=\"og:title\" content=\"{{ s.name }}\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"{{ this.page.baseFileName|app }}/{{s.slug}}\" />
    <meta property=\"og:image\" content=\"{{ s.preview_image.path }}\" />
    <meta property=\"og:description\" content=\"{{ s.preview_text }}\" />
{% elseif c.name %}
<title>{{ c.name }} · Llajwa Marketplace</title>
    <meta name=\"title\" content=\"{{ c.name }} · Llajwa Marketplace\"> 
    <meta name=\"description\" content=\"{{ c.preview_text }}\">
    <meta property=\"og:title\" content=\"{{ c.name }}\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"{{ this.page.baseFileName|app }}/{{c.slug}}\" />
    <meta property=\"og:image\" content=\"{{ c.preview_image.path }}\" />
    <meta property=\"og:description\" content=\"{{ c.preview_text }}\" />
{% else %}    
<title>{{ this.page.title }} · Llajwa Marketplace</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta property=\"og:title\" content=\"{{ this.page.meta_title }}\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"{{app}}\" />
    <meta property=\"og:image\" content=\"https://marketplace.llajwa.club/themes/marketplace/assets/images/logo-oficial.png\" />
    <meta property=\"og:description\" content=\"{{ this.page.meta_description }}\" />
{% endif %}", "/home/llajwaclub/marketplace.llajwa.club/themes/marketplace/partials/meta.htm", "");
    }
}

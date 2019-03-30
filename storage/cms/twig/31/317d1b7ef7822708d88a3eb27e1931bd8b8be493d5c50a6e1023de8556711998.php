<?php

/* /home/ubuntu/workspace/themes/aero/partials/code/meta.htm */
class __TwigTemplate_5e5c7adb098b69f5853e509560bf25cf642dda994f33610f938d9cf6630987fc extends Twig_Template
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
        $context["s"] = twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "get", [], "method");
        // line 2
        $context["c"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method");
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "servicio")) {
            // line 4
            echo "    ";
            $context["title"] = twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "name", []);
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["this"] ?? null), "page", []), "id", []) == "coleccion")) {
            // line 6
            echo "    ";
            $context["title"] = twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", []);
        } else {
            // line 8
            echo "    ";
            $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []);
        }
        // line 10
        echo "<title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " • Llajwa Club</title>
<meta name=\"description\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_title", []), "html", null, true);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/partials/code/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  47 => 11,  42 => 10,  38 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set s = service.get() %}
{% set c = CategoryPage.get() %}
{% if this.page.id == 'servicio' %}
    {% set title = s.name %}
{% elseif this.page.id == 'coleccion' %}
    {% set title = c.name %}
{% else %}
    {% set title = this.page.title %}
{% endif %}
<title>{{ title }} • Llajwa Club</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">", "/home/ubuntu/workspace/themes/aero/partials/code/meta.htm", "");
    }
}

<?php

/* WebSiteBundle:Default:index.html.twig */
class __TwigTemplate_e814a3f81d0e3ad37143dcecc2b2aa54b28c678788388d0b0be6562773046cb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteBundle::layout.html.twig", "WebSiteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d72909602f4bb51fb060ecf8fb40f70fd37dc0877b6a813e7043a42110f425a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72909602f4bb51fb060ecf8fb40f70fd37dc0877b6a813e7043a42110f425a6->enter($__internal_d72909602f4bb51fb060ecf8fb40f70fd37dc0877b6a813e7043a42110f425a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d72909602f4bb51fb060ecf8fb40f70fd37dc0877b6a813e7043a42110f425a6->leave($__internal_d72909602f4bb51fb060ecf8fb40f70fd37dc0877b6a813e7043a42110f425a6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ea725989f4001811f8205ebb6253efa54bf2a7f7b8add437375dff4ea7b4c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea725989f4001811f8205ebb6253efa54bf2a7f7b8add437375dff4ea7b4c2a->enter($__internal_9ea725989f4001811f8205ebb6253efa54bf2a7f7b8add437375dff4ea7b4c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_home_title", array(), "messages");
        
        $__internal_9ea725989f4001811f8205ebb6253efa54bf2a7f7b8add437375dff4ea7b4c2a->leave($__internal_9ea725989f4001811f8205ebb6253efa54bf2a7f7b8add437375dff4ea7b4c2a_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f89ed13db1d80b31b6b121852724d715829aadf62f3978665cb7d5295e519604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89ed13db1d80b31b6b121852724d715829aadf62f3978665cb7d5295e519604->enter($__internal_f89ed13db1d80b31b6b121852724d715829aadf62f3978665cb7d5295e519604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
  ";
        // line 10
        $this->loadTemplate("WebSiteBundle:Modules:welcome.module.html.twig", "WebSiteBundle:Default:index.html.twig", 10)->display($context);
        // line 11
        echo "  <!-- Content
  ============================================= -->
  <section id=\"content\">
    <div class=\"content-wrap\">

        ";
        // line 16
        $this->loadTemplate("WebSiteBundle:Modules:target.module.html.twig", "WebSiteBundle:Default:index.html.twig", 16)->display($context);
        // line 17
        echo "
        ";
        // line 18
        $this->loadTemplate("WebSiteBundle:Modules:functions.module.html.twig", "WebSiteBundle:Default:index.html.twig", 18)->display($context);
        // line 19
        echo "

        ";
        // line 21
        $this->loadTemplate("WebSiteBundle:Modules:steps.module.html.twig", "WebSiteBundle:Default:index.html.twig", 21)->display($context);
        // line 22
        echo "
        ";
        // line 23
        $this->loadTemplate("WebSiteBundle:Modules:reviews.module.html.twig", "WebSiteBundle:Default:index.html.twig", 23)->display($context);
        // line 24
        echo "
        ";
        // line 26
        echo "
    </div>
  </section>

";
        
        $__internal_f89ed13db1d80b31b6b121852724d715829aadf62f3978665cb7d5295e519604->leave($__internal_f89ed13db1d80b31b6b121852724d715829aadf62f3978665cb7d5295e519604_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  85 => 24,  83 => 23,  80 => 22,  78 => 21,  74 => 19,  72 => 18,  69 => 17,  67 => 16,  60 => 11,  58 => 10,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'WebSiteBundle::layout.html.twig' %}


{% block title %}
  {% trans %}_home_title{% endtrans %}
{% endblock %}

{% block content %}

  {% include ('WebSiteBundle:Modules:welcome.module.html.twig') %}
  <!-- Content
  ============================================= -->
  <section id=\"content\">
    <div class=\"content-wrap\">

        {% include ('WebSiteBundle:Modules:target.module.html.twig') %}

        {% include ('WebSiteBundle:Modules:functions.module.html.twig') %}


        {% include ('WebSiteBundle:Modules:steps.module.html.twig') %}

        {% include ('WebSiteBundle:Modules:reviews.module.html.twig') %}

        {# include ('WebSiteBundle:Modules:customerlogos.module.html.twig') #}

    </div>
  </section>

{% endblock %}
";
    }
}

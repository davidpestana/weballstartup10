<?php

/* WebSiteBundle:Default:recruiters.html.twig */
class __TwigTemplate_8ac04e688c2dc84b7ff7b5c2a8fd74600a82dc592faea4fe6857588c6e9dc486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteBundle::layout.html.twig", "WebSiteBundle:Default:recruiters.html.twig", 1);
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
        $__internal_c2770acdf026ce29d3162ea97902e5095ff578e07f6096135322dd1a83ac8150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2770acdf026ce29d3162ea97902e5095ff578e07f6096135322dd1a83ac8150->enter($__internal_c2770acdf026ce29d3162ea97902e5095ff578e07f6096135322dd1a83ac8150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Default:recruiters.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2770acdf026ce29d3162ea97902e5095ff578e07f6096135322dd1a83ac8150->leave($__internal_c2770acdf026ce29d3162ea97902e5095ff578e07f6096135322dd1a83ac8150_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0040443d6fcad04e075c9466607a109d13c77a7e65876e341651c94d2c30822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0040443d6fcad04e075c9466607a109d13c77a7e65876e341651c94d2c30822->enter($__internal_f0040443d6fcad04e075c9466607a109d13c77a7e65876e341651c94d2c30822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_home_title", array(), "messages");
        
        $__internal_f0040443d6fcad04e075c9466607a109d13c77a7e65876e341651c94d2c30822->leave($__internal_f0040443d6fcad04e075c9466607a109d13c77a7e65876e341651c94d2c30822_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f144ed4ced5bc5e9dbd142fcb1ffc8285fbceb8d8406fc94ddeb915cd00dee28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f144ed4ced5bc5e9dbd142fcb1ffc8285fbceb8d8406fc94ddeb915cd00dee28->enter($__internal_f144ed4ced5bc5e9dbd142fcb1ffc8285fbceb8d8406fc94ddeb915cd00dee28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
  <!-- Content
  ============================================= -->
  <section id=\"content\">
    <div class=\"content-wrap\">

      ";
        // line 15
        $this->loadTemplate("WebSiteBundle:Modules:services.module.html.twig", "WebSiteBundle:Default:recruiters.html.twig", 15)->display($context);
        // line 16
        echo "

        ";
        // line 19
        echo "
        ";
        // line 21
        echo "


    </div>
  </section>

";
        
        $__internal_f144ed4ced5bc5e9dbd142fcb1ffc8285fbceb8d8406fc94ddeb915cd00dee28->leave($__internal_f144ed4ced5bc5e9dbd142fcb1ffc8285fbceb8d8406fc94ddeb915cd00dee28_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Default:recruiters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  69 => 19,  65 => 16,  63 => 15,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'WebSiteBundle::layout.html.twig' %}


{% block title %}
  {% trans %}_home_title{% endtrans %}
{% endblock %}

{% block content %}

  <!-- Content
  ============================================= -->
  <section id=\"content\">
    <div class=\"content-wrap\">

      {% include ('WebSiteBundle:Modules:services.module.html.twig') %}


        {# include ('WebSiteBundle:Modules:carrierinfo.module.html.twig') #}

        {# include ('WebSiteBundle:Modules:customerlogos.module.html.twig') #}



    </div>
  </section>

{% endblock %}
";
    }
}

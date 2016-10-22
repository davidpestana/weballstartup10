<?php

/* WebSiteBundle:Default:recruiters.html.twig */
class __TwigTemplate_86457bfb80523409aaa3f1da14bba4bb804dfd25ce2334a659ee82ec524a75f1 extends Twig_Template
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
        $__internal_cd131bc3fbfd08078c724d5d8a1df13c7eb5e635e1abb9242baaa25732961c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd131bc3fbfd08078c724d5d8a1df13c7eb5e635e1abb9242baaa25732961c7d->enter($__internal_cd131bc3fbfd08078c724d5d8a1df13c7eb5e635e1abb9242baaa25732961c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Default:recruiters.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd131bc3fbfd08078c724d5d8a1df13c7eb5e635e1abb9242baaa25732961c7d->leave($__internal_cd131bc3fbfd08078c724d5d8a1df13c7eb5e635e1abb9242baaa25732961c7d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8ac13c6a4270206d8d75686611a4d7d4d07eb67989422f37c9c7c29c131ea6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ac13c6a4270206d8d75686611a4d7d4d07eb67989422f37c9c7c29c131ea6f->enter($__internal_f8ac13c6a4270206d8d75686611a4d7d4d07eb67989422f37c9c7c29c131ea6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_home_title", array(), "messages");
        
        $__internal_f8ac13c6a4270206d8d75686611a4d7d4d07eb67989422f37c9c7c29c131ea6f->leave($__internal_f8ac13c6a4270206d8d75686611a4d7d4d07eb67989422f37c9c7c29c131ea6f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c0b4df0dad74fc51cff6bfab9a1e3ab835ed711081e933035c6995c9b08970e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0b4df0dad74fc51cff6bfab9a1e3ab835ed711081e933035c6995c9b08970e->enter($__internal_2c0b4df0dad74fc51cff6bfab9a1e3ab835ed711081e933035c6995c9b08970e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 18
        echo "
        ";
        // line 20
        echo "
    </div>
  </section>

";
        
        $__internal_2c0b4df0dad74fc51cff6bfab9a1e3ab835ed711081e933035c6995c9b08970e->leave($__internal_2c0b4df0dad74fc51cff6bfab9a1e3ab835ed711081e933035c6995c9b08970e_prof);

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
        return array (  71 => 20,  68 => 18,  65 => 16,  63 => 15,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
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

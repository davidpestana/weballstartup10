<?php

/* PublicBundle:Default:index.html.twig */
class __TwigTemplate_b01e1d9798b293998a0bb1766d937013d2a45aea3baeb30f2f05f8c27f1cb0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle::layout.html.twig", "PublicBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_036a951c1cf6056c1d5791b9ae6b938436ec5f413ef1e17fc9137b176ae49e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036a951c1cf6056c1d5791b9ae6b938436ec5f413ef1e17fc9137b176ae49e5e->enter($__internal_036a951c1cf6056c1d5791b9ae6b938436ec5f413ef1e17fc9137b176ae49e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036a951c1cf6056c1d5791b9ae6b938436ec5f413ef1e17fc9137b176ae49e5e->leave($__internal_036a951c1cf6056c1d5791b9ae6b938436ec5f413ef1e17fc9137b176ae49e5e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4cc05a71859f659e0bdfa4a127cdc523ef85cf826f37be1ebaaea6a1d6d682a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc05a71859f659e0bdfa4a127cdc523ef85cf826f37be1ebaaea6a1d6d682a8->enter($__internal_4cc05a71859f659e0bdfa4a127cdc523ef85cf826f37be1ebaaea6a1d6d682a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
      ";
        // line 5
        $this->loadTemplate("PublicBundle:Modules:welcome.module.html.twig", "PublicBundle:Default:index.html.twig", 5)->display($context);
        // line 6
        echo "
      ";
        // line 7
        $this->loadTemplate("PublicBundle:Modules:target.module.html.twig", "PublicBundle:Default:index.html.twig", 7)->display($context);
        // line 8
        echo "
      ";
        // line 9
        $this->loadTemplate("PublicBundle:Modules:track.module.html.twig", "PublicBundle:Default:index.html.twig", 9)->display($context);
        // line 10
        echo "
      ";
        // line 11
        $this->loadTemplate("PublicBundle:Modules:steps.module.html.twig", "PublicBundle:Default:index.html.twig", 11)->display($context);
        // line 12
        echo "
      ";
        // line 13
        $this->loadTemplate("PublicBundle:Modules:customerlogos.module.html.twig", "PublicBundle:Default:index.html.twig", 13)->display($context);
        // line 14
        echo "
      ";
        // line 15
        $this->loadTemplate("PublicBundle:Modules:services.module.html.twig", "PublicBundle:Default:index.html.twig", 15)->display($context);
        // line 16
        echo "

      ";
        // line 19
        echo "
      ";
        // line 20
        $this->loadTemplate("PublicBundle:Modules:reviews.module.html.twig", "PublicBundle:Default:index.html.twig", 20)->display($context);
        // line 21
        echo "

      ";
        // line 23
        $this->loadTemplate("PublicBundle:Modules:functions.module.html.twig", "PublicBundle:Default:index.html.twig", 23)->display($context);
        // line 24
        echo "



      ";
        // line 28
        $this->loadTemplate("PublicBundle:Modules:faq.module.html.twig", "PublicBundle:Default:index.html.twig", 28)->display($context);
        // line 29
        echo "

";
        
        $__internal_4cc05a71859f659e0bdfa4a127cdc523ef85cf826f37be1ebaaea6a1d6d682a8->leave($__internal_4cc05a71859f659e0bdfa4a127cdc523ef85cf826f37be1ebaaea6a1d6d682a8_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  91 => 28,  85 => 24,  83 => 23,  79 => 21,  77 => 20,  74 => 19,  70 => 16,  68 => 15,  65 => 14,  63 => 13,  60 => 12,  58 => 11,  55 => 10,  53 => 9,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'PublicBundle::layout.html.twig' %}

{% block content %}

      {% include ('PublicBundle:Modules:welcome.module.html.twig') %}

      {% include ('PublicBundle:Modules:target.module.html.twig') %}

      {% include ('PublicBundle:Modules:track.module.html.twig') %}

      {% include ('PublicBundle:Modules:steps.module.html.twig') %}

      {% include ('PublicBundle:Modules:customerlogos.module.html.twig') %}

      {% include ('PublicBundle:Modules:services.module.html.twig') %}


      {# include ('PublicBundle:Modules:presentation.module.html.twig') #}

      {% include ('PublicBundle:Modules:reviews.module.html.twig') %}


      {% include ('PublicBundle:Modules:functions.module.html.twig') %}




      {% include ('PublicBundle:Modules:faq.module.html.twig') %}


{% endblock %}
";
    }
}

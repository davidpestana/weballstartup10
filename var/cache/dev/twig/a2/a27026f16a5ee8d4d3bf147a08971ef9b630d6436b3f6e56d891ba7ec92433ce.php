<?php

/* WebSiteBundle:Default:index.html.twig */
class __TwigTemplate_8d36f677870ac79c35812ab6c535de989d119a7a33cae89bbe50f92dec674ab0 extends Twig_Template
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
        $__internal_682e3e4e04f8ec7c9f8e6b2230908cf5c9d7fcb092b9ba2897ab1f682f1d87f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682e3e4e04f8ec7c9f8e6b2230908cf5c9d7fcb092b9ba2897ab1f682f1d87f4->enter($__internal_682e3e4e04f8ec7c9f8e6b2230908cf5c9d7fcb092b9ba2897ab1f682f1d87f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682e3e4e04f8ec7c9f8e6b2230908cf5c9d7fcb092b9ba2897ab1f682f1d87f4->leave($__internal_682e3e4e04f8ec7c9f8e6b2230908cf5c9d7fcb092b9ba2897ab1f682f1d87f4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_23f076bcbef33aab02a24ff0398778909f9d57bef05bb4be9de1dc31d9f5fb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f076bcbef33aab02a24ff0398778909f9d57bef05bb4be9de1dc31d9f5fb1d->enter($__internal_23f076bcbef33aab02a24ff0398778909f9d57bef05bb4be9de1dc31d9f5fb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_home_title", array(), "messages");
        
        $__internal_23f076bcbef33aab02a24ff0398778909f9d57bef05bb4be9de1dc31d9f5fb1d->leave($__internal_23f076bcbef33aab02a24ff0398778909f9d57bef05bb4be9de1dc31d9f5fb1d_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_16a9296f9cbcd75de2884d798e04effdeaab309553f2bb0e740321c586ec4deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a9296f9cbcd75de2884d798e04effdeaab309553f2bb0e740321c586ec4deb->enter($__internal_16a9296f9cbcd75de2884d798e04effdeaab309553f2bb0e740321c586ec4deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_16a9296f9cbcd75de2884d798e04effdeaab309553f2bb0e740321c586ec4deb->leave($__internal_16a9296f9cbcd75de2884d798e04effdeaab309553f2bb0e740321c586ec4deb_prof);

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

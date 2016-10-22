<?php

/* PublicBundle:Default:track.html.twig */
class __TwigTemplate_4d05be6d50b5c54133f208df9d7eeb4bc3f68d07aca4de41a3aea38fc3ca80b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle::layout.html.twig", "PublicBundle:Default:track.html.twig", 1);
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
        $__internal_017b1b9c26c6d0897581867fd2f0a804b9a03adbae0a1fd5903380a49efbd523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017b1b9c26c6d0897581867fd2f0a804b9a03adbae0a1fd5903380a49efbd523->enter($__internal_017b1b9c26c6d0897581867fd2f0a804b9a03adbae0a1fd5903380a49efbd523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_017b1b9c26c6d0897581867fd2f0a804b9a03adbae0a1fd5903380a49efbd523->leave($__internal_017b1b9c26c6d0897581867fd2f0a804b9a03adbae0a1fd5903380a49efbd523_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c9ad258c9663c71ee5fb49e2dd8383717940cf17f488877c72300827c69bc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9ad258c9663c71ee5fb49e2dd8383717940cf17f488877c72300827c69bc18->enter($__internal_4c9ad258c9663c71ee5fb49e2dd8383717940cf17f488877c72300827c69bc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

      ";
        // line 6
        $this->loadTemplate("PublicBundle:Modules:sectiontitle.module.html.twig", "PublicBundle:Default:track.html.twig", 6)->display($context);
        // line 7
        echo "      <!-- content begin -->

                ";
        // line 9
        $this->loadTemplate("PublicBundle:Modules:track.module.html.twig", "PublicBundle:Default:track.html.twig", 9)->display($context);
        // line 10
        echo "
";
        
        $__internal_4c9ad258c9663c71ee5fb49e2dd8383717940cf17f488877c72300827c69bc18->leave($__internal_4c9ad258c9663c71ee5fb49e2dd8383717940cf17f488877c72300827c69bc18_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'PublicBundle::layout.html.twig' %}

{% block content %}


      {% include ('PublicBundle:Modules:sectiontitle.module.html.twig') %}
      <!-- content begin -->

                {% include ('PublicBundle:Modules:track.module.html.twig') %}

{% endblock %}
";
    }
}

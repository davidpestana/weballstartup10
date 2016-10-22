<?php

/* PublicBundle:Default:track.html.twig */
class __TwigTemplate_92529acc0e8959f41bfea2e8183f3ef922e6e8bacdc77dbae7c3ddccd9b92a34 extends Twig_Template
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
        $__internal_22dce1b9f1d78dae632ca218268d171d79c6bf26f98d4b162ed55b462942316d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dce1b9f1d78dae632ca218268d171d79c6bf26f98d4b162ed55b462942316d->enter($__internal_22dce1b9f1d78dae632ca218268d171d79c6bf26f98d4b162ed55b462942316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22dce1b9f1d78dae632ca218268d171d79c6bf26f98d4b162ed55b462942316d->leave($__internal_22dce1b9f1d78dae632ca218268d171d79c6bf26f98d4b162ed55b462942316d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b589c9d5b0fe527985dcf60aa347b243c1960a8f16f4a633d291f310721abde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b589c9d5b0fe527985dcf60aa347b243c1960a8f16f4a633d291f310721abde->enter($__internal_4b589c9d5b0fe527985dcf60aa347b243c1960a8f16f4a633d291f310721abde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4b589c9d5b0fe527985dcf60aa347b243c1960a8f16f4a633d291f310721abde->leave($__internal_4b589c9d5b0fe527985dcf60aa347b243c1960a8f16f4a633d291f310721abde_prof);

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

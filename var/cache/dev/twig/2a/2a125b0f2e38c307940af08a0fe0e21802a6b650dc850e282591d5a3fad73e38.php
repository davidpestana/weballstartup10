<?php

/* PublicBundle:Default:services.html.twig */
class __TwigTemplate_2556698a0a1e25a5f85b527a4637973af3d565fd9ec6c0c0434d940f70e589be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle::layout.html.twig", "PublicBundle:Default:services.html.twig", 1);
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
        $__internal_dc4a6e6c7accb61d6788d8b4d86dfaa6bef4beb43eb769256f343d4db696240b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4a6e6c7accb61d6788d8b4d86dfaa6bef4beb43eb769256f343d4db696240b->enter($__internal_dc4a6e6c7accb61d6788d8b4d86dfaa6bef4beb43eb769256f343d4db696240b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc4a6e6c7accb61d6788d8b4d86dfaa6bef4beb43eb769256f343d4db696240b->leave($__internal_dc4a6e6c7accb61d6788d8b4d86dfaa6bef4beb43eb769256f343d4db696240b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_60644ca5e2836b3d77a55375ba66b744a71334dd0367e75eb22dd9cfc65a7b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60644ca5e2836b3d77a55375ba66b744a71334dd0367e75eb22dd9cfc65a7b80->enter($__internal_60644ca5e2836b3d77a55375ba66b744a71334dd0367e75eb22dd9cfc65a7b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

      ";
        // line 6
        $this->loadTemplate("PublicBundle:Modules:sectiontitle.module.html.twig", "PublicBundle:Default:services.html.twig", 6)->display($context);
        // line 7
        echo "      <!-- content begin -->
      <div id=\"content\">
          <div class=\"container\">
                ";
        // line 10
        $this->loadTemplate("PublicBundle:Modules:servicesinfo.module.html.twig", "PublicBundle:Default:services.html.twig", 10)->display($context);
        // line 11
        echo "          </div>
      </div>
";
        
        $__internal_60644ca5e2836b3d77a55375ba66b744a71334dd0367e75eb22dd9cfc65a7b80->leave($__internal_60644ca5e2836b3d77a55375ba66b744a71334dd0367e75eb22dd9cfc65a7b80_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  51 => 10,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'PublicBundle::layout.html.twig' %}

{% block content %}


      {% include ('PublicBundle:Modules:sectiontitle.module.html.twig') %}
      <!-- content begin -->
      <div id=\"content\">
          <div class=\"container\">
                {% include ('PublicBundle:Modules:servicesinfo.module.html.twig') %}
          </div>
      </div>
{% endblock %}
";
    }
}

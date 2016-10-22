<?php

/* PublicBundle:Default:workwithus.html.twig */
class __TwigTemplate_d05121c87fdb4e631328fc4f6d097ddda519440239e7b22ed5c541b35a47c381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle::layout.html.twig", "PublicBundle:Default:workwithus.html.twig", 1);
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
        $__internal_07a39e40c2877fa73871f5268f319324407400ddc1f2859adea311f089d563b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a39e40c2877fa73871f5268f319324407400ddc1f2859adea311f089d563b3->enter($__internal_07a39e40c2877fa73871f5268f319324407400ddc1f2859adea311f089d563b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:workwithus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a39e40c2877fa73871f5268f319324407400ddc1f2859adea311f089d563b3->leave($__internal_07a39e40c2877fa73871f5268f319324407400ddc1f2859adea311f089d563b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6858997f353069ed5feff7e7ad1708c2cb5eb26600dcd5989a065205714e5161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6858997f353069ed5feff7e7ad1708c2cb5eb26600dcd5989a065205714e5161->enter($__internal_6858997f353069ed5feff7e7ad1708c2cb5eb26600dcd5989a065205714e5161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

      ";
        // line 6
        $this->loadTemplate("PublicBundle:Modules:sectiontitle.module.html.twig", "PublicBundle:Default:workwithus.html.twig", 6)->display($context);
        // line 7
        echo "      <!-- content begin -->
      <div id=\"content\">
          <div class=\"container\">
                ";
        // line 10
        $this->loadTemplate("PublicBundle:Modules:workwithusinfo.module.html.twig", "PublicBundle:Default:workwithus.html.twig", 10)->display($context);
        // line 11
        echo "          </div>
    </div>
";
        
        $__internal_6858997f353069ed5feff7e7ad1708c2cb5eb26600dcd5989a065205714e5161->leave($__internal_6858997f353069ed5feff7e7ad1708c2cb5eb26600dcd5989a065205714e5161_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:workwithus.html.twig";
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
                {% include ('PublicBundle:Modules:workwithusinfo.module.html.twig') %}
          </div>
    </div>
{% endblock %}
";
    }
}

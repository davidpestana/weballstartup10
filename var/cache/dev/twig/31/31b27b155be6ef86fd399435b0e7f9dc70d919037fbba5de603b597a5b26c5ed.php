<?php

/* PublicBundle:Default:aboutus.html.twig */
class __TwigTemplate_0a5e116567770a124d439d44fed7d86fd4ba9fcd2fe76caf9f3ddb5ab7ae036b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle::layout.html.twig", "PublicBundle:Default:aboutus.html.twig", 1);
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
        $__internal_bff70b9cf5de658b46c999ba709b8e2a2194d82bdbb109ecd4378ac13975fbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff70b9cf5de658b46c999ba709b8e2a2194d82bdbb109ecd4378ac13975fbf1->enter($__internal_bff70b9cf5de658b46c999ba709b8e2a2194d82bdbb109ecd4378ac13975fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:aboutus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bff70b9cf5de658b46c999ba709b8e2a2194d82bdbb109ecd4378ac13975fbf1->leave($__internal_bff70b9cf5de658b46c999ba709b8e2a2194d82bdbb109ecd4378ac13975fbf1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_91cd9360af6ff335bb646b86db2274efa02f5d9f477169b6ef43a57199125446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cd9360af6ff335bb646b86db2274efa02f5d9f477169b6ef43a57199125446->enter($__internal_91cd9360af6ff335bb646b86db2274efa02f5d9f477169b6ef43a57199125446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

      ";
        // line 6
        $this->loadTemplate("PublicBundle:Modules:sectiontitle.module.html.twig", "PublicBundle:Default:aboutus.html.twig", 6)->display($context);
        // line 7
        echo "      <!-- content begin -->
      <div id=\"content\">
          <div class=\"container\">
                ";
        // line 10
        $this->loadTemplate("PublicBundle:Modules:aboutusinfo.module.html.twig", "PublicBundle:Default:aboutus.html.twig", 10)->display($context);
        // line 11
        echo "                ";
        $this->loadTemplate("PublicBundle:Modules:whyus.module.html.twig", "PublicBundle:Default:aboutus.html.twig", 11)->display($context);
        // line 12
        echo "                ";
        $this->loadTemplate("PublicBundle:Modules:team.module.html.twig", "PublicBundle:Default:aboutus.html.twig", 12)->display($context);
        // line 13
        echo "
          </div>
    </div>
";
        
        $__internal_91cd9360af6ff335bb646b86db2274efa02f5d9f477169b6ef43a57199125446->leave($__internal_91cd9360af6ff335bb646b86db2274efa02f5d9f477169b6ef43a57199125446_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  56 => 12,  53 => 11,  51 => 10,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'PublicBundle::layout.html.twig' %}

{% block content %}


      {% include ('PublicBundle:Modules:sectiontitle.module.html.twig') %}
      <!-- content begin -->
      <div id=\"content\">
          <div class=\"container\">
                {% include ('PublicBundle:Modules:aboutusinfo.module.html.twig') %}
                {% include ('PublicBundle:Modules:whyus.module.html.twig') %}
                {% include ('PublicBundle:Modules:team.module.html.twig') %}

          </div>
    </div>
{% endblock %}
";
    }
}

<?php

/* PublicBundle:Default:services.html.twig */
class __TwigTemplate_b0fc90fffac6f08d9af479137ae086661c88a950fac244443b0e694a564d78f0 extends Twig_Template
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
        $__internal_6149709dcc3e4e6b0a4ed370cc2ca22bb33bc69f2a31cfd4864d0a7fbfafe03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6149709dcc3e4e6b0a4ed370cc2ca22bb33bc69f2a31cfd4864d0a7fbfafe03f->enter($__internal_6149709dcc3e4e6b0a4ed370cc2ca22bb33bc69f2a31cfd4864d0a7fbfafe03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6149709dcc3e4e6b0a4ed370cc2ca22bb33bc69f2a31cfd4864d0a7fbfafe03f->leave($__internal_6149709dcc3e4e6b0a4ed370cc2ca22bb33bc69f2a31cfd4864d0a7fbfafe03f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_676f072b2befcce53b0fffbdbd64df2bec0a9088688a548e2c9c4ba067c24c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676f072b2befcce53b0fffbdbd64df2bec0a9088688a548e2c9c4ba067c24c57->enter($__internal_676f072b2befcce53b0fffbdbd64df2bec0a9088688a548e2c9c4ba067c24c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_676f072b2befcce53b0fffbdbd64df2bec0a9088688a548e2c9c4ba067c24c57->leave($__internal_676f072b2befcce53b0fffbdbd64df2bec0a9088688a548e2c9c4ba067c24c57_prof);

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

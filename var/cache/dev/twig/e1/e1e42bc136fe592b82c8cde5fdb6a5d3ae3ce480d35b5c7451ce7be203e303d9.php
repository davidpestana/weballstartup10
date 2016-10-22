<?php

/* PublicBundle:Default:workwithus.html.twig */
class __TwigTemplate_a2358e21b0b7363e9c4a6c7fc70dd954a2de6a512cb0b9804f2fce10d4b47c0f extends Twig_Template
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
        $__internal_98baac537d95b1d144dd41f6cb08403857ca94b6573b2adfb3b6f37e8478bc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98baac537d95b1d144dd41f6cb08403857ca94b6573b2adfb3b6f37e8478bc8c->enter($__internal_98baac537d95b1d144dd41f6cb08403857ca94b6573b2adfb3b6f37e8478bc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:workwithus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98baac537d95b1d144dd41f6cb08403857ca94b6573b2adfb3b6f37e8478bc8c->leave($__internal_98baac537d95b1d144dd41f6cb08403857ca94b6573b2adfb3b6f37e8478bc8c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_170c6fc8a90abf0d0472f555957bf59a7d4e5e73fb0c306475eb19f54066b92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170c6fc8a90abf0d0472f555957bf59a7d4e5e73fb0c306475eb19f54066b92e->enter($__internal_170c6fc8a90abf0d0472f555957bf59a7d4e5e73fb0c306475eb19f54066b92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_170c6fc8a90abf0d0472f555957bf59a7d4e5e73fb0c306475eb19f54066b92e->leave($__internal_170c6fc8a90abf0d0472f555957bf59a7d4e5e73fb0c306475eb19f54066b92e_prof);

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

<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_31e432d6955bcf51fd4df2a3fe50587901c8b8994b1b125c34ee1db0b2a1fa70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4ae7d1b1ce92b298958689b3c49991c6a4b48efe1d9be43131f74f2ce9d3be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ae7d1b1ce92b298958689b3c49991c6a4b48efe1d9be43131f74f2ce9d3be7->enter($__internal_e4ae7d1b1ce92b298958689b3c49991c6a4b48efe1d9be43131f74f2ce9d3be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4ae7d1b1ce92b298958689b3c49991c6a4b48efe1d9be43131f74f2ce9d3be7->leave($__internal_e4ae7d1b1ce92b298958689b3c49991c6a4b48efe1d9be43131f74f2ce9d3be7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f72befeff55af0377bf26710d3ae8114d2c801fe5d3949c1eeb9f4c7c0320043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72befeff55af0377bf26710d3ae8114d2c801fe5d3949c1eeb9f4c7c0320043->enter($__internal_f72befeff55af0377bf26710d3ae8114d2c801fe5d3949c1eeb9f4c7c0320043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f72befeff55af0377bf26710d3ae8114d2c801fe5d3949c1eeb9f4c7c0320043->leave($__internal_f72befeff55af0377bf26710d3ae8114d2c801fe5d3949c1eeb9f4c7c0320043_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}

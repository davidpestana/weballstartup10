<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_5b07b6d6cdb9a5bb6b9125ff3f70b798770856f8155184977777363a32377596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5913828fc79828db34250b605c349bfbe0a610a13cf98f5e814f5cd3f97672ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5913828fc79828db34250b605c349bfbe0a610a13cf98f5e814f5cd3f97672ff->enter($__internal_5913828fc79828db34250b605c349bfbe0a610a13cf98f5e814f5cd3f97672ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5913828fc79828db34250b605c349bfbe0a610a13cf98f5e814f5cd3f97672ff->leave($__internal_5913828fc79828db34250b605c349bfbe0a610a13cf98f5e814f5cd3f97672ff_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_038079078210dcbd4fac4c9485827097e82c55f7d672e354989da402f35ee704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038079078210dcbd4fac4c9485827097e82c55f7d672e354989da402f35ee704->enter($__internal_038079078210dcbd4fac4c9485827097e82c55f7d672e354989da402f35ee704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_038079078210dcbd4fac4c9485827097e82c55f7d672e354989da402f35ee704->leave($__internal_038079078210dcbd4fac4c9485827097e82c55f7d672e354989da402f35ee704_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}

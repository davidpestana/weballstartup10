<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_6b9903219c21e2bd328c3ec23442847b1f072b1b53162cb4f336d79f3daa4dda extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7c30682adb1552ae6d14d3143ac1d85ba90b7c2d1e9d28013c7770d98d2502a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c30682adb1552ae6d14d3143ac1d85ba90b7c2d1e9d28013c7770d98d2502a->enter($__internal_f7c30682adb1552ae6d14d3143ac1d85ba90b7c2d1e9d28013c7770d98d2502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c30682adb1552ae6d14d3143ac1d85ba90b7c2d1e9d28013c7770d98d2502a->leave($__internal_f7c30682adb1552ae6d14d3143ac1d85ba90b7c2d1e9d28013c7770d98d2502a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0b3962f8b2ecad04955e70e32703755492f741e814a88592903f02a6c6ef162a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3962f8b2ecad04955e70e32703755492f741e814a88592903f02a6c6ef162a->enter($__internal_0b3962f8b2ecad04955e70e32703755492f741e814a88592903f02a6c6ef162a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_0b3962f8b2ecad04955e70e32703755492f741e814a88592903f02a6c6ef162a->leave($__internal_0b3962f8b2ecad04955e70e32703755492f741e814a88592903f02a6c6ef162a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}

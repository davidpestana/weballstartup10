<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_208a13fa73386a8f9b577cca5091b50e714d2b11d14f57d087d45493207b2e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_4a8284322679cf0be069f9f7cb97aa05f54827ed7432ffb9edeb613831f95623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8284322679cf0be069f9f7cb97aa05f54827ed7432ffb9edeb613831f95623->enter($__internal_4a8284322679cf0be069f9f7cb97aa05f54827ed7432ffb9edeb613831f95623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a8284322679cf0be069f9f7cb97aa05f54827ed7432ffb9edeb613831f95623->leave($__internal_4a8284322679cf0be069f9f7cb97aa05f54827ed7432ffb9edeb613831f95623_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_56133c2b487051f4a142051c09e03d6d0d530551a5eb9772950b5d6aabd1d4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56133c2b487051f4a142051c09e03d6d0d530551a5eb9772950b5d6aabd1d4a0->enter($__internal_56133c2b487051f4a142051c09e03d6d0d530551a5eb9772950b5d6aabd1d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_56133c2b487051f4a142051c09e03d6d0d530551a5eb9772950b5d6aabd1d4a0->leave($__internal_56133c2b487051f4a142051c09e03d6d0d530551a5eb9772950b5d6aabd1d4a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}

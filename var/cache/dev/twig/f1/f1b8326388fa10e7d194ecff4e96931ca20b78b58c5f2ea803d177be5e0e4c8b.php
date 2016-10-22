<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_b7f03cc6e6a84c420887a4a565b0a23f512d4393ac446863c64cb042a8b4c1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_70107f8e9cd20ff4c60552a9b8fbb9dde242012e44d8ca69e6439f5334ad5a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70107f8e9cd20ff4c60552a9b8fbb9dde242012e44d8ca69e6439f5334ad5a10->enter($__internal_70107f8e9cd20ff4c60552a9b8fbb9dde242012e44d8ca69e6439f5334ad5a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70107f8e9cd20ff4c60552a9b8fbb9dde242012e44d8ca69e6439f5334ad5a10->leave($__internal_70107f8e9cd20ff4c60552a9b8fbb9dde242012e44d8ca69e6439f5334ad5a10_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8bec091ea3dc9efeb248f8b05a8bff15a3f6e2b7185ad4b7f8ee3bbbe23930be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bec091ea3dc9efeb248f8b05a8bff15a3f6e2b7185ad4b7f8ee3bbbe23930be->enter($__internal_8bec091ea3dc9efeb248f8b05a8bff15a3f6e2b7185ad4b7f8ee3bbbe23930be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_8bec091ea3dc9efeb248f8b05a8bff15a3f6e2b7185ad4b7f8ee3bbbe23930be->leave($__internal_8bec091ea3dc9efeb248f8b05a8bff15a3f6e2b7185ad4b7f8ee3bbbe23930be_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
";
    }
}

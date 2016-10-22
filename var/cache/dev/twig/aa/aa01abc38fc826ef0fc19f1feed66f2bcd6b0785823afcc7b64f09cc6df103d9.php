<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_0dcca5e5bef0eba051bf22dc5732f9ff4b6883173973a42d51666ff91a0b58e0 extends Twig_Template
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
        $__internal_b075a2247a77e505e6e8c7abaa2a406b9d9008c01b24cfda1e87ce09f43bda7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b075a2247a77e505e6e8c7abaa2a406b9d9008c01b24cfda1e87ce09f43bda7b->enter($__internal_b075a2247a77e505e6e8c7abaa2a406b9d9008c01b24cfda1e87ce09f43bda7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b075a2247a77e505e6e8c7abaa2a406b9d9008c01b24cfda1e87ce09f43bda7b->leave($__internal_b075a2247a77e505e6e8c7abaa2a406b9d9008c01b24cfda1e87ce09f43bda7b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7270ca1cdf1635ef284fb03bacbdf434f08a12026860c549a0e3f40613033ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7270ca1cdf1635ef284fb03bacbdf434f08a12026860c549a0e3f40613033ec->enter($__internal_a7270ca1cdf1635ef284fb03bacbdf434f08a12026860c549a0e3f40613033ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_a7270ca1cdf1635ef284fb03bacbdf434f08a12026860c549a0e3f40613033ec->leave($__internal_a7270ca1cdf1635ef284fb03bacbdf434f08a12026860c549a0e3f40613033ec_prof);

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

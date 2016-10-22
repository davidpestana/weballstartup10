<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_77ca95db95abffd6a3a3ff675f890add0c51b5cd1fce9b7ae29a82c408ce144e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_f107d49dbc02e342570fa1b10fcb89712fb795a4118af1644bdb670f83713edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f107d49dbc02e342570fa1b10fcb89712fb795a4118af1644bdb670f83713edf->enter($__internal_f107d49dbc02e342570fa1b10fcb89712fb795a4118af1644bdb670f83713edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f107d49dbc02e342570fa1b10fcb89712fb795a4118af1644bdb670f83713edf->leave($__internal_f107d49dbc02e342570fa1b10fcb89712fb795a4118af1644bdb670f83713edf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ce820e8d3a64dcf137414b15e3341c0c575d12130f974b2b1a9b9947d5810639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce820e8d3a64dcf137414b15e3341c0c575d12130f974b2b1a9b9947d5810639->enter($__internal_ce820e8d3a64dcf137414b15e3341c0c575d12130f974b2b1a9b9947d5810639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_ce820e8d3a64dcf137414b15e3341c0c575d12130f974b2b1a9b9947d5810639->leave($__internal_ce820e8d3a64dcf137414b15e3341c0c575d12130f974b2b1a9b9947d5810639_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}

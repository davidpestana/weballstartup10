<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_2702cb684944b7d5b81693480e25292ba6056aa298b9a96eeee99257a3a7f472 extends Twig_Template
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
        $__internal_eecc13761e5b798280bc715e5944d3b884ba89da7ed33447d410bd120af8aabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecc13761e5b798280bc715e5944d3b884ba89da7ed33447d410bd120af8aabf->enter($__internal_eecc13761e5b798280bc715e5944d3b884ba89da7ed33447d410bd120af8aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecc13761e5b798280bc715e5944d3b884ba89da7ed33447d410bd120af8aabf->leave($__internal_eecc13761e5b798280bc715e5944d3b884ba89da7ed33447d410bd120af8aabf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3261045ee4cc639429c4f0658e9f847573f09dc547e560401ed98946fcb97b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3261045ee4cc639429c4f0658e9f847573f09dc547e560401ed98946fcb97b4d->enter($__internal_3261045ee4cc639429c4f0658e9f847573f09dc547e560401ed98946fcb97b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_3261045ee4cc639429c4f0658e9f847573f09dc547e560401ed98946fcb97b4d->leave($__internal_3261045ee4cc639429c4f0658e9f847573f09dc547e560401ed98946fcb97b4d_prof);

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

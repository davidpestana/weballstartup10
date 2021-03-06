<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_74207051f64eca153be0c25ff45fdd4cce30da61913e93ac587aa92a9a3c63fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fadf4614a2af3de3667193d413ab79627a08e16e693515a15917300036948fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadf4614a2af3de3667193d413ab79627a08e16e693515a15917300036948fb1->enter($__internal_fadf4614a2af3de3667193d413ab79627a08e16e693515a15917300036948fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fadf4614a2af3de3667193d413ab79627a08e16e693515a15917300036948fb1->leave($__internal_fadf4614a2af3de3667193d413ab79627a08e16e693515a15917300036948fb1_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_d31fa24a51dc06fb9d36bb1103d4695c2aa4e42beab5e13744e8c56ca614aa4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31fa24a51dc06fb9d36bb1103d4695c2aa4e42beab5e13744e8c56ca614aa4a->enter($__internal_d31fa24a51dc06fb9d36bb1103d4695c2aa4e42beab5e13744e8c56ca614aa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
";
        
        $__internal_d31fa24a51dc06fb9d36bb1103d4695c2aa4e42beab5e13744e8c56ca614aa4a->leave($__internal_d31fa24a51dc06fb9d36bb1103d4695c2aa4e42beab5e13744e8c56ca614aa4a_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_2e993e2edbbe84ff56ff049a3ced0b0f9f2fe6e7f5e2627f0b1736a755b8f5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e993e2edbbe84ff56ff049a3ced0b0f9f2fe6e7f5e2627f0b1736a755b8f5e8->enter($__internal_2e993e2edbbe84ff56ff049a3ced0b0f9f2fe6e7f5e2627f0b1736a755b8f5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_2e993e2edbbe84ff56ff049a3ced0b0f9f2fe6e7f5e2627f0b1736a755b8f5e8->leave($__internal_2e993e2edbbe84ff56ff049a3ced0b0f9f2fe6e7f5e2627f0b1736a755b8f5e8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ name|trans({}, admin.translationdomain) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
";
    }
}

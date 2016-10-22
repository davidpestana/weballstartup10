<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_b692c64b9ba050d6f16478236eb68fbb184e13e5e561e573b40cef0ee275c161 extends Twig_Template
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
        $__internal_51f18b1d9bbb21a73c4d6612dd5c2c85d7124c2f8701ab2cb3ee5284e885350a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f18b1d9bbb21a73c4d6612dd5c2c85d7124c2f8701ab2cb3ee5284e885350a->enter($__internal_51f18b1d9bbb21a73c4d6612dd5c2c85d7124c2f8701ab2cb3ee5284e885350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51f18b1d9bbb21a73c4d6612dd5c2c85d7124c2f8701ab2cb3ee5284e885350a->leave($__internal_51f18b1d9bbb21a73c4d6612dd5c2c85d7124c2f8701ab2cb3ee5284e885350a_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_416b05511080aeeacf26559378b1ac21c098a87a44c061b65f401f0d1e6e7bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416b05511080aeeacf26559378b1ac21c098a87a44c061b65f401f0d1e6e7bb6->enter($__internal_416b05511080aeeacf26559378b1ac21c098a87a44c061b65f401f0d1e6e7bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
";
        
        $__internal_416b05511080aeeacf26559378b1ac21c098a87a44c061b65f401f0d1e6e7bb6->leave($__internal_416b05511080aeeacf26559378b1ac21c098a87a44c061b65f401f0d1e6e7bb6_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_7cd826ed45dd92deb9d38cad848c368a48fbd04ef379faebe73552cdd153a58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd826ed45dd92deb9d38cad848c368a48fbd04ef379faebe73552cdd153a58c->enter($__internal_7cd826ed45dd92deb9d38cad848c368a48fbd04ef379faebe73552cdd153a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_7cd826ed45dd92deb9d38cad848c368a48fbd04ef379faebe73552cdd153a58c->leave($__internal_7cd826ed45dd92deb9d38cad848c368a48fbd04ef379faebe73552cdd153a58c_prof);

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

<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_f4740b52885ccd50950fd1f03d7af4dc4237aa2c874486ed45c5661260a9d40b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ecaa6047fa77a3c0b4e7cb490d3bea593bd0ad5d3201b94bd87caad58d21108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecaa6047fa77a3c0b4e7cb490d3bea593bd0ad5d3201b94bd87caad58d21108->enter($__internal_0ecaa6047fa77a3c0b4e7cb490d3bea593bd0ad5d3201b94bd87caad58d21108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecaa6047fa77a3c0b4e7cb490d3bea593bd0ad5d3201b94bd87caad58d21108->leave($__internal_0ecaa6047fa77a3c0b4e7cb490d3bea593bd0ad5d3201b94bd87caad58d21108_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_25dc725e2e1f69f9d39ef46cf4f8b5be187f97677e459c2d80c3a0c43b00a339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dc725e2e1f69f9d39ef46cf4f8b5be187f97677e459c2d80c3a0c43b00a339->enter($__internal_25dc725e2e1f69f9d39ef46cf4f8b5be187f97677e459c2d80c3a0c43b00a339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_25dc725e2e1f69f9d39ef46cf4f8b5be187f97677e459c2d80c3a0c43b00a339->leave($__internal_25dc725e2e1f69f9d39ef46cf4f8b5be187f97677e459c2d80c3a0c43b00a339_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_3ec641df3c0a5971627fc88277870834bf871d1106ef8dc1bc6018f9521a52b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec641df3c0a5971627fc88277870834bf871d1106ef8dc1bc6018f9521a52b4->enter($__internal_3ec641df3c0a5971627fc88277870834bf871d1106ef8dc1bc6018f9521a52b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_3ec641df3c0a5971627fc88277870834bf871d1106ef8dc1bc6018f9521a52b4->leave($__internal_3ec641df3c0a5971627fc88277870834bf871d1106ef8dc1bc6018f9521a52b4_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_48e3686fa0f90ed52e55e5f1571d471f4a512a89d9b51c5c13915c5f559f7a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e3686fa0f90ed52e55e5f1571d471f4a512a89d9b51c5c13915c5f559f7a15->enter($__internal_48e3686fa0f90ed52e55e5f1571d471f4a512a89d9b51c5c13915c5f559f7a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_48e3686fa0f90ed52e55e5f1571d471f4a512a89d9b51c5c13915c5f559f7a15->leave($__internal_48e3686fa0f90ed52e55e5f1571d471f4a512a89d9b51c5c13915c5f559f7a15_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_0e78654b1683e24594fe477759812067ee87c32a831cbaa648f16bd4d9d6dbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e78654b1683e24594fe477759812067ee87c32a831cbaa648f16bd4d9d6dbf8->enter($__internal_0e78654b1683e24594fe477759812067ee87c32a831cbaa648f16bd4d9d6dbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0e78654b1683e24594fe477759812067ee87c32a831cbaa648f16bd4d9d6dbf8->leave($__internal_0e78654b1683e24594fe477759812067ee87c32a831cbaa648f16bd4d9d6dbf8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
";
    }
}

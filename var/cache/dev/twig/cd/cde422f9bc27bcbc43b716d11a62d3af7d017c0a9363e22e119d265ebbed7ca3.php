<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_129c26dab5dfbdd6930537bb1f05c6dc12c2465ea141b02c51b0b3f60f5e1698 extends Twig_Template
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
        $__internal_928afbbf0a3f3c6038467c6046b71b604340e5c644f1cde7b529570aef77faa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928afbbf0a3f3c6038467c6046b71b604340e5c644f1cde7b529570aef77faa4->enter($__internal_928afbbf0a3f3c6038467c6046b71b604340e5c644f1cde7b529570aef77faa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928afbbf0a3f3c6038467c6046b71b604340e5c644f1cde7b529570aef77faa4->leave($__internal_928afbbf0a3f3c6038467c6046b71b604340e5c644f1cde7b529570aef77faa4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e29f09297b7704e44c0cd4475d2ec993e1434ed12a49cacb32cbc2d30f80031d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29f09297b7704e44c0cd4475d2ec993e1434ed12a49cacb32cbc2d30f80031d->enter($__internal_e29f09297b7704e44c0cd4475d2ec993e1434ed12a49cacb32cbc2d30f80031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_e29f09297b7704e44c0cd4475d2ec993e1434ed12a49cacb32cbc2d30f80031d->leave($__internal_e29f09297b7704e44c0cd4475d2ec993e1434ed12a49cacb32cbc2d30f80031d_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_48f03d7cd999a56b0728467d3ac6d58ae9f1b1ce591673663acf0be4e77e661e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f03d7cd999a56b0728467d3ac6d58ae9f1b1ce591673663acf0be4e77e661e->enter($__internal_48f03d7cd999a56b0728467d3ac6d58ae9f1b1ce591673663acf0be4e77e661e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_48f03d7cd999a56b0728467d3ac6d58ae9f1b1ce591673663acf0be4e77e661e->leave($__internal_48f03d7cd999a56b0728467d3ac6d58ae9f1b1ce591673663acf0be4e77e661e_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_c29fd19873ce56665f56509e1aa7da7d342ca3d212fbd16d4c5dad33055eb76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29fd19873ce56665f56509e1aa7da7d342ca3d212fbd16d4c5dad33055eb76c->enter($__internal_c29fd19873ce56665f56509e1aa7da7d342ca3d212fbd16d4c5dad33055eb76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_c29fd19873ce56665f56509e1aa7da7d342ca3d212fbd16d4c5dad33055eb76c->leave($__internal_c29fd19873ce56665f56509e1aa7da7d342ca3d212fbd16d4c5dad33055eb76c_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_0f828dcd6cdbc6009e06c26fe8cd9a8ef3b68df236cefedb40d192041e98f739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f828dcd6cdbc6009e06c26fe8cd9a8ef3b68df236cefedb40d192041e98f739->enter($__internal_0f828dcd6cdbc6009e06c26fe8cd9a8ef3b68df236cefedb40d192041e98f739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0f828dcd6cdbc6009e06c26fe8cd9a8ef3b68df236cefedb40d192041e98f739->leave($__internal_0f828dcd6cdbc6009e06c26fe8cd9a8ef3b68df236cefedb40d192041e98f739_prof);

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

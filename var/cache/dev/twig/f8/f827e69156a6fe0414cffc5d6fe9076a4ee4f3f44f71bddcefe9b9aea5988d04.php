<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_f3312d1ac7a238c631913d7e267123d64bff8575bbb3d5a8ff623c57eac1d316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bda4a85d6fff9debbed7766d4e7fea03d61470471ab88cfd2716764abba2be6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda4a85d6fff9debbed7766d4e7fea03d61470471ab88cfd2716764abba2be6b->enter($__internal_bda4a85d6fff9debbed7766d4e7fea03d61470471ab88cfd2716764abba2be6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda4a85d6fff9debbed7766d4e7fea03d61470471ab88cfd2716764abba2be6b->leave($__internal_bda4a85d6fff9debbed7766d4e7fea03d61470471ab88cfd2716764abba2be6b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ffd51e0e2df16ace67afe927b4acb1f176c8360683c5b33ff3887013072db3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd51e0e2df16ace67afe927b4acb1f176c8360683c5b33ff3887013072db3ba->enter($__internal_ffd51e0e2df16ace67afe927b4acb1f176c8360683c5b33ff3887013072db3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_ffd51e0e2df16ace67afe927b4acb1f176c8360683c5b33ff3887013072db3ba->leave($__internal_ffd51e0e2df16ace67afe927b4acb1f176c8360683c5b33ff3887013072db3ba_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_068e2861a028b00309fb2829e499de90fb40dd985878dbf511ea65d2b7141822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068e2861a028b00309fb2829e499de90fb40dd985878dbf511ea65d2b7141822->enter($__internal_068e2861a028b00309fb2829e499de90fb40dd985878dbf511ea65d2b7141822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_068e2861a028b00309fb2829e499de90fb40dd985878dbf511ea65d2b7141822->leave($__internal_068e2861a028b00309fb2829e499de90fb40dd985878dbf511ea65d2b7141822_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1b01073116c0e8a28c603c74fd2709cdf287de80f21083afe4b6b387f98d740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b01073116c0e8a28c603c74fd2709cdf287de80f21083afe4b6b387f98d740->enter($__internal_a1b01073116c0e8a28c603c74fd2709cdf287de80f21083afe4b6b387f98d740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_a1b01073116c0e8a28c603c74fd2709cdf287de80f21083afe4b6b387f98d740->leave($__internal_a1b01073116c0e8a28c603c74fd2709cdf287de80f21083afe4b6b387f98d740_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
";
    }
}

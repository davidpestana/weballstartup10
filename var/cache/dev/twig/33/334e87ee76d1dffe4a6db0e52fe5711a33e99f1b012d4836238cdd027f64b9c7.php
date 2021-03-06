<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_9e56dfa97d12b31fc428bbed3f721dfbccef21aa2231ba6201fa5005b393b1c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c66024fd7d4a9854114009719ff3e663f6fc97e37ab24cf50dcdb623883a67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c66024fd7d4a9854114009719ff3e663f6fc97e37ab24cf50dcdb623883a67b->enter($__internal_0c66024fd7d4a9854114009719ff3e663f6fc97e37ab24cf50dcdb623883a67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c66024fd7d4a9854114009719ff3e663f6fc97e37ab24cf50dcdb623883a67b->leave($__internal_0c66024fd7d4a9854114009719ff3e663f6fc97e37ab24cf50dcdb623883a67b_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b886db824a0e9b6f5b681b77e0d36d6207466a89f7662f188f7bcea507dabd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b886db824a0e9b6f5b681b77e0d36d6207466a89f7662f188f7bcea507dabd18->enter($__internal_b886db824a0e9b6f5b681b77e0d36d6207466a89f7662f188f7bcea507dabd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b886db824a0e9b6f5b681b77e0d36d6207466a89f7662f188f7bcea507dabd18->leave($__internal_b886db824a0e9b6f5b681b77e0d36d6207466a89f7662f188f7bcea507dabd18_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_9d47d935bc67d87fd9cb64e6026f7feedebd8166e68625854f593cb3ed8a231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d47d935bc67d87fd9cb64e6026f7feedebd8166e68625854f593cb3ed8a231c->enter($__internal_9d47d935bc67d87fd9cb64e6026f7feedebd8166e68625854f593cb3ed8a231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9d47d935bc67d87fd9cb64e6026f7feedebd8166e68625854f593cb3ed8a231c->leave($__internal_9d47d935bc67d87fd9cb64e6026f7feedebd8166e68625854f593cb3ed8a231c_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_079a05f3e6c646b540ccfa2a6fac8071c00bd98112e53d79cfff2cf82d7d13d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079a05f3e6c646b540ccfa2a6fac8071c00bd98112e53d79cfff2cf82d7d13d7->enter($__internal_079a05f3e6c646b540ccfa2a6fac8071c00bd98112e53d79cfff2cf82d7d13d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_079a05f3e6c646b540ccfa2a6fac8071c00bd98112e53d79cfff2cf82d7d13d7->leave($__internal_079a05f3e6c646b540ccfa2a6fac8071c00bd98112e53d79cfff2cf82d7d13d7_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_caee070fd6306fe5f13dfda589f8e4220fb5d488637fc60109027ee23348c841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caee070fd6306fe5f13dfda589f8e4220fb5d488637fc60109027ee23348c841->enter($__internal_caee070fd6306fe5f13dfda589f8e4220fb5d488637fc60109027ee23348c841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_caee070fd6306fe5f13dfda589f8e4220fb5d488637fc60109027ee23348c841->leave($__internal_caee070fd6306fe5f13dfda589f8e4220fb5d488637fc60109027ee23348c841_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_e2aba0208ef8be722ec12d2328ad7b6a6d141685c8a4233956599a045be60461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2aba0208ef8be722ec12d2328ad7b6a6d141685c8a4233956599a045be60461->enter($__internal_e2aba0208ef8be722ec12d2328ad7b6a6d141685c8a4233956599a045be60461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_e2aba0208ef8be722ec12d2328ad7b6a6d141685c8a4233956599a045be60461->leave($__internal_e2aba0208ef8be722ec12d2328ad7b6a6d141685c8a4233956599a045be60461_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
";
    }
}

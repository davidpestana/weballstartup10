<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_a44741d57955276beffa4f72c94d1de7b3771146d829e6ff4d50d59e8c30eaa8 extends Twig_Template
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
        $__internal_d20c53d27013b58741ec5cfa219612a2b544544007cfa58deefb1b0d9fc6278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20c53d27013b58741ec5cfa219612a2b544544007cfa58deefb1b0d9fc6278b->enter($__internal_d20c53d27013b58741ec5cfa219612a2b544544007cfa58deefb1b0d9fc6278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d20c53d27013b58741ec5cfa219612a2b544544007cfa58deefb1b0d9fc6278b->leave($__internal_d20c53d27013b58741ec5cfa219612a2b544544007cfa58deefb1b0d9fc6278b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e05df28f8ecf5e343802fa244d213f98c38b21dae446b753818414254e1f368c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05df28f8ecf5e343802fa244d213f98c38b21dae446b753818414254e1f368c->enter($__internal_e05df28f8ecf5e343802fa244d213f98c38b21dae446b753818414254e1f368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_e05df28f8ecf5e343802fa244d213f98c38b21dae446b753818414254e1f368c->leave($__internal_e05df28f8ecf5e343802fa244d213f98c38b21dae446b753818414254e1f368c_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a98808fa3592283d04e96ac75fa4dc805fc4823285d0402fbc685e76d87a36fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98808fa3592283d04e96ac75fa4dc805fc4823285d0402fbc685e76d87a36fb->enter($__internal_a98808fa3592283d04e96ac75fa4dc805fc4823285d0402fbc685e76d87a36fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_a98808fa3592283d04e96ac75fa4dc805fc4823285d0402fbc685e76d87a36fb->leave($__internal_a98808fa3592283d04e96ac75fa4dc805fc4823285d0402fbc685e76d87a36fb_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_2336b43c59670291e4ceb7a3f4a7f3535f8809c0df8d32f802bdec25537fb513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2336b43c59670291e4ceb7a3f4a7f3535f8809c0df8d32f802bdec25537fb513->enter($__internal_2336b43c59670291e4ceb7a3f4a7f3535f8809c0df8d32f802bdec25537fb513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_2336b43c59670291e4ceb7a3f4a7f3535f8809c0df8d32f802bdec25537fb513->leave($__internal_2336b43c59670291e4ceb7a3f4a7f3535f8809c0df8d32f802bdec25537fb513_prof);

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

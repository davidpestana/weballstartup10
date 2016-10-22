<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_69dcbcb98af65d11204acc1df78e277c80b7c510424cabb16f40ddb019a69278 extends Twig_Template
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
        $__internal_4aaadd3f3a590c663414c00b626cfbd3fe1c58c6ee0fe00f886ca64bbd1e5cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aaadd3f3a590c663414c00b626cfbd3fe1c58c6ee0fe00f886ca64bbd1e5cf6->enter($__internal_4aaadd3f3a590c663414c00b626cfbd3fe1c58c6ee0fe00f886ca64bbd1e5cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aaadd3f3a590c663414c00b626cfbd3fe1c58c6ee0fe00f886ca64bbd1e5cf6->leave($__internal_4aaadd3f3a590c663414c00b626cfbd3fe1c58c6ee0fe00f886ca64bbd1e5cf6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3148fc007e8f150857f3452760833be12b59ef9e00787f6ce3d398d1754b775c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3148fc007e8f150857f3452760833be12b59ef9e00787f6ce3d398d1754b775c->enter($__internal_3148fc007e8f150857f3452760833be12b59ef9e00787f6ce3d398d1754b775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3148fc007e8f150857f3452760833be12b59ef9e00787f6ce3d398d1754b775c->leave($__internal_3148fc007e8f150857f3452760833be12b59ef9e00787f6ce3d398d1754b775c_prof);

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

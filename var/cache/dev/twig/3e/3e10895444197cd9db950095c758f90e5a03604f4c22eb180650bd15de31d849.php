<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_5d2c50d18631a73b80d7ea13c9242e9a7ba344cdc491144ef7c7618f9353c537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_dd9fdce32ba9eae32cc045f88c49660c44338e14d0173487724b85edfc65dd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9fdce32ba9eae32cc045f88c49660c44338e14d0173487724b85edfc65dd37->enter($__internal_dd9fdce32ba9eae32cc045f88c49660c44338e14d0173487724b85edfc65dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9fdce32ba9eae32cc045f88c49660c44338e14d0173487724b85edfc65dd37->leave($__internal_dd9fdce32ba9eae32cc045f88c49660c44338e14d0173487724b85edfc65dd37_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1c645aabebf45e35abd6782ebeead44648dc1c41a21079642fb3af036dc1b82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c645aabebf45e35abd6782ebeead44648dc1c41a21079642fb3af036dc1b82b->enter($__internal_1c645aabebf45e35abd6782ebeead44648dc1c41a21079642fb3af036dc1b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c645aabebf45e35abd6782ebeead44648dc1c41a21079642fb3af036dc1b82b->leave($__internal_1c645aabebf45e35abd6782ebeead44648dc1c41a21079642fb3af036dc1b82b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
";
    }
}

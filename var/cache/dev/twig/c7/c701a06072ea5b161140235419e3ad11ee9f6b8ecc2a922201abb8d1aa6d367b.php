<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_86060684e66490b3e30b2f10e6a303b53de4e7c7933703bdf709190e103c29e8 extends Twig_Template
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
        $__internal_266d9b918431c72666dd1c776159eea3933d14f94ad464ec35b8fa8a5cb8b456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266d9b918431c72666dd1c776159eea3933d14f94ad464ec35b8fa8a5cb8b456->enter($__internal_266d9b918431c72666dd1c776159eea3933d14f94ad464ec35b8fa8a5cb8b456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266d9b918431c72666dd1c776159eea3933d14f94ad464ec35b8fa8a5cb8b456->leave($__internal_266d9b918431c72666dd1c776159eea3933d14f94ad464ec35b8fa8a5cb8b456_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_04e48e00e81b7fe956bce0f4c5c538593844f90f99e0ac73aac430bec6c7db28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e48e00e81b7fe956bce0f4c5c538593844f90f99e0ac73aac430bec6c7db28->enter($__internal_04e48e00e81b7fe956bce0f4c5c538593844f90f99e0ac73aac430bec6c7db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_04e48e00e81b7fe956bce0f4c5c538593844f90f99e0ac73aac430bec6c7db28->leave($__internal_04e48e00e81b7fe956bce0f4c5c538593844f90f99e0ac73aac430bec6c7db28_prof);

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

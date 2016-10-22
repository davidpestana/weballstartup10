<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_6ca107b07832aaebadfeb52d8c699c986e6b3739fc3b5d97cbc9ea8681ae767b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83526686872b91e5b558af9a1b482f862de3155b87b80dfc1be57cf0a7d7e798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83526686872b91e5b558af9a1b482f862de3155b87b80dfc1be57cf0a7d7e798->enter($__internal_83526686872b91e5b558af9a1b482f862de3155b87b80dfc1be57cf0a7d7e798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83526686872b91e5b558af9a1b482f862de3155b87b80dfc1be57cf0a7d7e798->leave($__internal_83526686872b91e5b558af9a1b482f862de3155b87b80dfc1be57cf0a7d7e798_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_363bb233cb303000286a96266a39a752d5dfbcbab156b1130965bea19b1d9991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363bb233cb303000286a96266a39a752d5dfbcbab156b1130965bea19b1d9991->enter($__internal_363bb233cb303000286a96266a39a752d5dfbcbab156b1130965bea19b1d9991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_363bb233cb303000286a96266a39a752d5dfbcbab156b1130965bea19b1d9991->leave($__internal_363bb233cb303000286a96266a39a752d5dfbcbab156b1130965bea19b1d9991_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}

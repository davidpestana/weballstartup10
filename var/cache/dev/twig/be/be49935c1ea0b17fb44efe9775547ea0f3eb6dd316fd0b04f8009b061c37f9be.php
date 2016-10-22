<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_2ec56f41524d5a6686f92f36ed3b0c55b0dadd49a95c02c786bb9f49bed091e9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b80e1cb10c0d3f5374dce94eda156b27d1f8c334e5594dbadf4fad96c8e778f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80e1cb10c0d3f5374dce94eda156b27d1f8c334e5594dbadf4fad96c8e778f2->enter($__internal_b80e1cb10c0d3f5374dce94eda156b27d1f8c334e5594dbadf4fad96c8e778f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80e1cb10c0d3f5374dce94eda156b27d1f8c334e5594dbadf4fad96c8e778f2->leave($__internal_b80e1cb10c0d3f5374dce94eda156b27d1f8c334e5594dbadf4fad96c8e778f2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a77628fa947c6d34a2754d07fa6638f44f4e6d77ee0772f33bc7b65d7bb07cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77628fa947c6d34a2754d07fa6638f44f4e6d77ee0772f33bc7b65d7bb07cbc->enter($__internal_a77628fa947c6d34a2754d07fa6638f44f4e6d77ee0772f33bc7b65d7bb07cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_a77628fa947c6d34a2754d07fa6638f44f4e6d77ee0772f33bc7b65d7bb07cbc->leave($__internal_a77628fa947c6d34a2754d07fa6638f44f4e6d77ee0772f33bc7b65d7bb07cbc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
";
    }
}

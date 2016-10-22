<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_537b61948ec33123fef469e846efc33f94f572df1b3b47a9b088a40bc5ced8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_e4981cd8a190e99e01f37fea235078a1ce3d510a03608c122b8c9a854ee5f631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4981cd8a190e99e01f37fea235078a1ce3d510a03608c122b8c9a854ee5f631->enter($__internal_e4981cd8a190e99e01f37fea235078a1ce3d510a03608c122b8c9a854ee5f631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4981cd8a190e99e01f37fea235078a1ce3d510a03608c122b8c9a854ee5f631->leave($__internal_e4981cd8a190e99e01f37fea235078a1ce3d510a03608c122b8c9a854ee5f631_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bde003348804b560624a3c638d10766266708647cb6ad33aee6172f4fc09a182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde003348804b560624a3c638d10766266708647cb6ad33aee6172f4fc09a182->enter($__internal_bde003348804b560624a3c638d10766266708647cb6ad33aee6172f4fc09a182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_bde003348804b560624a3c638d10766266708647cb6ad33aee6172f4fc09a182->leave($__internal_bde003348804b560624a3c638d10766266708647cb6ad33aee6172f4fc09a182_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}

<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_582127e6e030521126f8ab239db0d4d59af48e1a29581eb9e353c131702de17e extends Twig_Template
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
        $__internal_e65e5437c21d73224ad0fc13f485f7b31eb9e6f8d71b4ddc9538faab7d85b6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65e5437c21d73224ad0fc13f485f7b31eb9e6f8d71b4ddc9538faab7d85b6ff->enter($__internal_e65e5437c21d73224ad0fc13f485f7b31eb9e6f8d71b4ddc9538faab7d85b6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65e5437c21d73224ad0fc13f485f7b31eb9e6f8d71b4ddc9538faab7d85b6ff->leave($__internal_e65e5437c21d73224ad0fc13f485f7b31eb9e6f8d71b4ddc9538faab7d85b6ff_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac9556683ca9f36f36f3bbd4b163c316e2a9579a49af8cabffc32b77e27f0054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9556683ca9f36f36f3bbd4b163c316e2a9579a49af8cabffc32b77e27f0054->enter($__internal_ac9556683ca9f36f36f3bbd4b163c316e2a9579a49af8cabffc32b77e27f0054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ac9556683ca9f36f36f3bbd4b163c316e2a9579a49af8cabffc32b77e27f0054->leave($__internal_ac9556683ca9f36f36f3bbd4b163c316e2a9579a49af8cabffc32b77e27f0054_prof);

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

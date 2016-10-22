<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_cd994846d73a366fef0ac151fef1a478ac384be85b1c1c484585f6f2fa7cea48 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_606ff6533cc2398cb231d6d50d401c5ababebb568acd68c7b00179c2f4926412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606ff6533cc2398cb231d6d50d401c5ababebb568acd68c7b00179c2f4926412->enter($__internal_606ff6533cc2398cb231d6d50d401c5ababebb568acd68c7b00179c2f4926412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_606ff6533cc2398cb231d6d50d401c5ababebb568acd68c7b00179c2f4926412->leave($__internal_606ff6533cc2398cb231d6d50d401c5ababebb568acd68c7b00179c2f4926412_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9464ca29f4a524e47f3a67615f0f9941c8d502004ca338ffea8a80bf103a5d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9464ca29f4a524e47f3a67615f0f9941c8d502004ca338ffea8a80bf103a5d83->enter($__internal_9464ca29f4a524e47f3a67615f0f9941c8d502004ca338ffea8a80bf103a5d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_9464ca29f4a524e47f3a67615f0f9941c8d502004ca338ffea8a80bf103a5d83->leave($__internal_9464ca29f4a524e47f3a67615f0f9941c8d502004ca338ffea8a80bf103a5d83_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}

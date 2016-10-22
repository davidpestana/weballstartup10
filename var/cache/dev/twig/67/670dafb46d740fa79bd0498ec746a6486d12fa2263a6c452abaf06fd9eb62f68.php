<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_176c5783f1335a27c4bce5631e7940818cffe5a91473912608ee804eb87ee290 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7c6ffac0760dc525b9669e7c49a41acbae91cc2bdb509f08e11ae6346551672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c6ffac0760dc525b9669e7c49a41acbae91cc2bdb509f08e11ae6346551672->enter($__internal_a7c6ffac0760dc525b9669e7c49a41acbae91cc2bdb509f08e11ae6346551672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c6ffac0760dc525b9669e7c49a41acbae91cc2bdb509f08e11ae6346551672->leave($__internal_a7c6ffac0760dc525b9669e7c49a41acbae91cc2bdb509f08e11ae6346551672_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c3577e327654f59898bf98c21ec8cf8e226058b588b2366cdcdf26674f9017fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3577e327654f59898bf98c21ec8cf8e226058b588b2366cdcdf26674f9017fa->enter($__internal_c3577e327654f59898bf98c21ec8cf8e226058b588b2366cdcdf26674f9017fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c3577e327654f59898bf98c21ec8cf8e226058b588b2366cdcdf26674f9017fa->leave($__internal_c3577e327654f59898bf98c21ec8cf8e226058b588b2366cdcdf26674f9017fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% for key, val in value %}
        [{{ key }} => {{ val }}]
    {% endfor %}
{% endblock %}
";
    }
}

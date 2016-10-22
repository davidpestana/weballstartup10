<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_23a1e56f6a7def727687379fa0ee9468f521bd3f70ad53dc8a6b3404d15aa316 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00763a33d70df389d80384840b52c329dce37daa46c7a48169043bc8ee20349f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00763a33d70df389d80384840b52c329dce37daa46c7a48169043bc8ee20349f->enter($__internal_00763a33d70df389d80384840b52c329dce37daa46c7a48169043bc8ee20349f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00763a33d70df389d80384840b52c329dce37daa46c7a48169043bc8ee20349f->leave($__internal_00763a33d70df389d80384840b52c329dce37daa46c7a48169043bc8ee20349f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b7bd9a4230cf7ba6672cc9920c56ab5ef1ad37e9de6dcc2a600e11a53089ac9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bd9a4230cf7ba6672cc9920c56ab5ef1ad37e9de6dcc2a600e11a53089ac9b->enter($__internal_b7bd9a4230cf7ba6672cc9920c56ab5ef1ad37e9de6dcc2a600e11a53089ac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b7bd9a4230cf7ba6672cc9920c56ab5ef1ad37e9de6dcc2a600e11a53089ac9b->leave($__internal_b7bd9a4230cf7ba6672cc9920c56ab5ef1ad37e9de6dcc2a600e11a53089ac9b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}

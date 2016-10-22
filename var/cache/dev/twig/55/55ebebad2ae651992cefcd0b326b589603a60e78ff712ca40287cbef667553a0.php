<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_0d46f9de7727bf4b7a65668ec8975c121064441bcd491350a6ce1892f2763908 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c31f6a5dc39ea7e1ce24140252b8efb0cc45402b594ff2d566fbb5af7af32dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31f6a5dc39ea7e1ce24140252b8efb0cc45402b594ff2d566fbb5af7af32dca->enter($__internal_c31f6a5dc39ea7e1ce24140252b8efb0cc45402b594ff2d566fbb5af7af32dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c31f6a5dc39ea7e1ce24140252b8efb0cc45402b594ff2d566fbb5af7af32dca->leave($__internal_c31f6a5dc39ea7e1ce24140252b8efb0cc45402b594ff2d566fbb5af7af32dca_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0fd3b8d4c60dc216f5755de6a64992ecc3a9c0b9edc6f640564da60226c963e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd3b8d4c60dc216f5755de6a64992ecc3a9c0b9edc6f640564da60226c963e5->enter($__internal_0fd3b8d4c60dc216f5755de6a64992ecc3a9c0b9edc6f640564da60226c963e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0fd3b8d4c60dc216f5755de6a64992ecc3a9c0b9edc6f640564da60226c963e5->leave($__internal_0fd3b8d4c60dc216f5755de6a64992ecc3a9c0b9edc6f640564da60226c963e5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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

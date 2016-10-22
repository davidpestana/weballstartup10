<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_d2af9b8ed0e66484f47fef0bce623dbb88b5124c6243a34ca6d2e92a73c1c476 extends Twig_Template
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
        $__internal_20630002866baf4a9075d5a852651ac26c45c82f1a892a22705e6942618e1d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20630002866baf4a9075d5a852651ac26c45c82f1a892a22705e6942618e1d07->enter($__internal_20630002866baf4a9075d5a852651ac26c45c82f1a892a22705e6942618e1d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20630002866baf4a9075d5a852651ac26c45c82f1a892a22705e6942618e1d07->leave($__internal_20630002866baf4a9075d5a852651ac26c45c82f1a892a22705e6942618e1d07_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_63e19ea2bafb86b32afc8a1e433a4b09311e6561226bcc0fefd190655d9813dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e19ea2bafb86b32afc8a1e433a4b09311e6561226bcc0fefd190655d9813dd->enter($__internal_63e19ea2bafb86b32afc8a1e433a4b09311e6561226bcc0fefd190655d9813dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_63e19ea2bafb86b32afc8a1e433a4b09311e6561226bcc0fefd190655d9813dd->leave($__internal_63e19ea2bafb86b32afc8a1e433a4b09311e6561226bcc0fefd190655d9813dd_prof);

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

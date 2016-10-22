<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_b6b30307ebf3a14b99e73d5e309d304e10a1bf8589d41ff14e86b3af83e5a47a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_227e87f21883802f320ee17aced8df1b8283d9df840209a60c48239acd503db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227e87f21883802f320ee17aced8df1b8283d9df840209a60c48239acd503db6->enter($__internal_227e87f21883802f320ee17aced8df1b8283d9df840209a60c48239acd503db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227e87f21883802f320ee17aced8df1b8283d9df840209a60c48239acd503db6->leave($__internal_227e87f21883802f320ee17aced8df1b8283d9df840209a60c48239acd503db6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_52b47ca26d4eede1608f635772dcf082b4b1fe70ee7f2e1db32e79707fb89e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b47ca26d4eede1608f635772dcf082b4b1fe70ee7f2e1db32e79707fb89e9a->enter($__internal_52b47ca26d4eede1608f635772dcf082b4b1fe70ee7f2e1db32e79707fb89e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_52b47ca26d4eede1608f635772dcf082b4b1fe70ee7f2e1db32e79707fb89e9a->leave($__internal_52b47ca26d4eede1608f635772dcf082b4b1fe70ee7f2e1db32e79707fb89e9a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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

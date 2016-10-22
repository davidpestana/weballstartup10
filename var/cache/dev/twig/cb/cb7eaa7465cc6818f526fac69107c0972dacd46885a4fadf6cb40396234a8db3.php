<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_b9a66e28a02c2f4ad3d7fa80791ad33151c448ef4e13a002bce0e5de7ff2efbd extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccff033b8e3c04863b3c62e185a9e14bb38769977eaa746f27cbccfb41a95e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccff033b8e3c04863b3c62e185a9e14bb38769977eaa746f27cbccfb41a95e89->enter($__internal_ccff033b8e3c04863b3c62e185a9e14bb38769977eaa746f27cbccfb41a95e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccff033b8e3c04863b3c62e185a9e14bb38769977eaa746f27cbccfb41a95e89->leave($__internal_ccff033b8e3c04863b3c62e185a9e14bb38769977eaa746f27cbccfb41a95e89_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_63f5d356580e6171a1233c1c0360f8d74cae747f7dea1c09abbac7a59897e2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f5d356580e6171a1233c1c0360f8d74cae747f7dea1c09abbac7a59897e2e9->enter($__internal_63f5d356580e6171a1233c1c0360f8d74cae747f7dea1c09abbac7a59897e2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_63f5d356580e6171a1233c1c0360f8d74cae747f7dea1c09abbac7a59897e2e9->leave($__internal_63f5d356580e6171a1233c1c0360f8d74cae747f7dea1c09abbac7a59897e2e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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

<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_474fa6098bdb5aea31572d75edcb7e9b60bd38eed8d5f39a96c589036eaee39f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8f3ebcd3c1fbf3783e6a75af09cdc1add9afe464d500c669fc92f0a5b68db7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f3ebcd3c1fbf3783e6a75af09cdc1add9afe464d500c669fc92f0a5b68db7a->enter($__internal_b8f3ebcd3c1fbf3783e6a75af09cdc1add9afe464d500c669fc92f0a5b68db7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f3ebcd3c1fbf3783e6a75af09cdc1add9afe464d500c669fc92f0a5b68db7a->leave($__internal_b8f3ebcd3c1fbf3783e6a75af09cdc1add9afe464d500c669fc92f0a5b68db7a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}

<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_0c6019cf4fd36852d1c191af300e8960a1ccbaa3169007bf70a0141dab2f8d11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2d04bca496bcfa8b75e99852e44154d5a18ef417e2dd55776c54a474f8de8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d04bca496bcfa8b75e99852e44154d5a18ef417e2dd55776c54a474f8de8a2->enter($__internal_b2d04bca496bcfa8b75e99852e44154d5a18ef417e2dd55776c54a474f8de8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d04bca496bcfa8b75e99852e44154d5a18ef417e2dd55776c54a474f8de8a2->leave($__internal_b2d04bca496bcfa8b75e99852e44154d5a18ef417e2dd55776c54a474f8de8a2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
";
    }
}

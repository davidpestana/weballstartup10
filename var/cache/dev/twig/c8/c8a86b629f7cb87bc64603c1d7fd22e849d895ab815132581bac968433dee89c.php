<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_d819b1d0f498682c985426299256135b1c65ee588d85328631f59d9886a97bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9eb019018a58da05890475f1e161d0eb133a97056a3635d181df05c3edddb9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb019018a58da05890475f1e161d0eb133a97056a3635d181df05c3edddb9b2->enter($__internal_9eb019018a58da05890475f1e161d0eb133a97056a3635d181df05c3edddb9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eb019018a58da05890475f1e161d0eb133a97056a3635d181df05c3edddb9b2->leave($__internal_9eb019018a58da05890475f1e161d0eb133a97056a3635d181df05c3edddb9b2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
";
    }
}

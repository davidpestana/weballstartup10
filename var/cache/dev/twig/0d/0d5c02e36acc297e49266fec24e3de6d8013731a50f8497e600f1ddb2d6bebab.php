<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_c5938f53ec2dd4e72fcd2efcd2e0f2c0d04f42f13a2385e9cb8a05b70d0d2789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a2571fd0133f7b48aee6bfb714061faf541af0e33869f7a33ce73d0a598a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a2571fd0133f7b48aee6bfb714061faf541af0e33869f7a33ce73d0a598a8a->enter($__internal_b1a2571fd0133f7b48aee6bfb714061faf541af0e33869f7a33ce73d0a598a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a2571fd0133f7b48aee6bfb714061faf541af0e33869f7a33ce73d0a598a8a->leave($__internal_b1a2571fd0133f7b48aee6bfb714061faf541af0e33869f7a33ce73d0a598a8a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
";
    }
}

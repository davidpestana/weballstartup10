<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_1a5043bdcc9d02eb74d9d240ecbdcc77c654bb1b6455a149756907c9ca3de7a5 extends Twig_Template
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
        $__internal_489f8cf64c14e655acf414631661b6509a61c30b3563e70c7e0795918582b386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489f8cf64c14e655acf414631661b6509a61c30b3563e70c7e0795918582b386->enter($__internal_489f8cf64c14e655acf414631661b6509a61c30b3563e70c7e0795918582b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489f8cf64c14e655acf414631661b6509a61c30b3563e70c7e0795918582b386->leave($__internal_489f8cf64c14e655acf414631661b6509a61c30b3563e70c7e0795918582b386_prof);

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

<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_d1a3abad24aedbe3eb91fd04133d9bf8f024ccc2a8c98fcf9ad5bacd49c1925a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_083586e9f0b20a1922550ef487ca3c8a9e3dc1b3cbb41f00b90f4ac046d322e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083586e9f0b20a1922550ef487ca3c8a9e3dc1b3cbb41f00b90f4ac046d322e9->enter($__internal_083586e9f0b20a1922550ef487ca3c8a9e3dc1b3cbb41f00b90f4ac046d322e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_083586e9f0b20a1922550ef487ca3c8a9e3dc1b3cbb41f00b90f4ac046d322e9->leave($__internal_083586e9f0b20a1922550ef487ca3c8a9e3dc1b3cbb41f00b90f4ac046d322e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
";
    }
}

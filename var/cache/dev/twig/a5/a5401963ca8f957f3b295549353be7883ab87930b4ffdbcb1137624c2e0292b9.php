<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_a9fdf7c6a53f6b6e985a51b498cd8f81b156b48fc71643a840823f57ab3ec246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_525cfa3bbeb0e2296c37506d6027d7819e52a516032b6c7754726b11ebdb0b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525cfa3bbeb0e2296c37506d6027d7819e52a516032b6c7754726b11ebdb0b3d->enter($__internal_525cfa3bbeb0e2296c37506d6027d7819e52a516032b6c7754726b11ebdb0b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525cfa3bbeb0e2296c37506d6027d7819e52a516032b6c7754726b11ebdb0b3d->leave($__internal_525cfa3bbeb0e2296c37506d6027d7819e52a516032b6c7754726b11ebdb0b3d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
";
    }
}

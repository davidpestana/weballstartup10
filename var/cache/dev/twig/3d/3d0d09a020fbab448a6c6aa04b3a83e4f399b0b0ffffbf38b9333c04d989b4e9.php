<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_59564aaf6889e403b142d0dde1ec1e16b756ba5b82e55ebfa5cbb17147550fca extends Twig_Template
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
        $__internal_222760aa1a39ce3c2f1b8a160a006fc065bc411c27f2f1807b2f0b8f21f7b9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222760aa1a39ce3c2f1b8a160a006fc065bc411c27f2f1807b2f0b8f21f7b9d4->enter($__internal_222760aa1a39ce3c2f1b8a160a006fc065bc411c27f2f1807b2f0b8f21f7b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222760aa1a39ce3c2f1b8a160a006fc065bc411c27f2f1807b2f0b8f21f7b9d4->leave($__internal_222760aa1a39ce3c2f1b8a160a006fc065bc411c27f2f1807b2f0b8f21f7b9d4_prof);

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

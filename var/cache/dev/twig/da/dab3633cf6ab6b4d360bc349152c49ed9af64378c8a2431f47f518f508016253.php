<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_33373f71234e43bc5031bd26948f81c322961cd5d03e529e76dfa345c31317d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85b9f59febb2730aa91ea5aeb162f37c8307ce4eb53d8e55349088c36370e6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b9f59febb2730aa91ea5aeb162f37c8307ce4eb53d8e55349088c36370e6ce->enter($__internal_85b9f59febb2730aa91ea5aeb162f37c8307ce4eb53d8e55349088c36370e6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85b9f59febb2730aa91ea5aeb162f37c8307ce4eb53d8e55349088c36370e6ce->leave($__internal_85b9f59febb2730aa91ea5aeb162f37c8307ce4eb53d8e55349088c36370e6ce_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
";
    }
}

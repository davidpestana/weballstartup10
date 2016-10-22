<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_8c8d6dace6623db57b055c242529ab473306a4b6f2f9ca7326992f4ed90deed9 extends Twig_Template
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
        $__internal_21a91e69e4d1c95db7c1a72fc07e2de2936da4daa1c939759a36385e549887a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a91e69e4d1c95db7c1a72fc07e2de2936da4daa1c939759a36385e549887a9->enter($__internal_21a91e69e4d1c95db7c1a72fc07e2de2936da4daa1c939759a36385e549887a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a91e69e4d1c95db7c1a72fc07e2de2936da4daa1c939759a36385e549887a9->leave($__internal_21a91e69e4d1c95db7c1a72fc07e2de2936da4daa1c939759a36385e549887a9_prof);

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

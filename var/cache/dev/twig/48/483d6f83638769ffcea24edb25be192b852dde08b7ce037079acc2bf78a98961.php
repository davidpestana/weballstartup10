<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_5a152be194a720e0f7f1aa6ac12141e0acbe5bd42c1eaef8264e3199fa8eb3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f532f6e5424b0728b69340e0752b9a74f095451ed572600aa2099f2b3025990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f532f6e5424b0728b69340e0752b9a74f095451ed572600aa2099f2b3025990->enter($__internal_8f532f6e5424b0728b69340e0752b9a74f095451ed572600aa2099f2b3025990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f532f6e5424b0728b69340e0752b9a74f095451ed572600aa2099f2b3025990->leave($__internal_8f532f6e5424b0728b69340e0752b9a74f095451ed572600aa2099f2b3025990_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}

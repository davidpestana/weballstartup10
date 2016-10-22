<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_80564488e2180d0de5e866dc951694f47fb36294057ce406455bf9bd19d0ecb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffb90f451e3669d88b6159ee672bc35478157bdf9f067e95dd0d21bb991199e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb90f451e3669d88b6159ee672bc35478157bdf9f067e95dd0d21bb991199e8->enter($__internal_ffb90f451e3669d88b6159ee672bc35478157bdf9f067e95dd0d21bb991199e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb90f451e3669d88b6159ee672bc35478157bdf9f067e95dd0d21bb991199e8->leave($__internal_ffb90f451e3669d88b6159ee672bc35478157bdf9f067e95dd0d21bb991199e8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}

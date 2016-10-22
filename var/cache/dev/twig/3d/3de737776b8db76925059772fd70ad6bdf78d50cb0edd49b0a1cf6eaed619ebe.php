<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_37931884faa9eb11b47c9f8039a407494c041a7819dbe50a8e188be6938b4964 extends Twig_Template
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
        $__internal_ed3f7e6ee18fde42707f44b5ba120553eb840d7732e4497a7dd8aa0b49395168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3f7e6ee18fde42707f44b5ba120553eb840d7732e4497a7dd8aa0b49395168->enter($__internal_ed3f7e6ee18fde42707f44b5ba120553eb840d7732e4497a7dd8aa0b49395168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3f7e6ee18fde42707f44b5ba120553eb840d7732e4497a7dd8aa0b49395168->leave($__internal_ed3f7e6ee18fde42707f44b5ba120553eb840d7732e4497a7dd8aa0b49395168_prof);

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

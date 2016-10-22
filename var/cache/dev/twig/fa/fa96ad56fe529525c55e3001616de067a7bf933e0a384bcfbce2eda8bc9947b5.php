<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_50be47a6b07b6242e3984994dc54ca6dfc39d49f491949c13bae29a7468881f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_520a81740a29484c28dc00e2bb5e2cb4bfb798d3b3997ef99a7fe2e79509b595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520a81740a29484c28dc00e2bb5e2cb4bfb798d3b3997ef99a7fe2e79509b595->enter($__internal_520a81740a29484c28dc00e2bb5e2cb4bfb798d3b3997ef99a7fe2e79509b595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520a81740a29484c28dc00e2bb5e2cb4bfb798d3b3997ef99a7fe2e79509b595->leave($__internal_520a81740a29484c28dc00e2bb5e2cb4bfb798d3b3997ef99a7fe2e79509b595_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_82367cf49068850afaf2a7d08598513b1f3654640a9b6eec7edb7da2f1cc939f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82367cf49068850afaf2a7d08598513b1f3654640a9b6eec7edb7da2f1cc939f->enter($__internal_82367cf49068850afaf2a7d08598513b1f3654640a9b6eec7edb7da2f1cc939f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_82367cf49068850afaf2a7d08598513b1f3654640a9b6eec7edb7da2f1cc939f->leave($__internal_82367cf49068850afaf2a7d08598513b1f3654640a9b6eec7edb7da2f1cc939f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}

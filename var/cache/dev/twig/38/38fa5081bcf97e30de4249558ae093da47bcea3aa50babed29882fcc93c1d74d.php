<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_6b9c19bb00026348b36f7151778e754d84a195cab0e5e299f931afeb7bbb7224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d20f41c004e75125850d582a310888b0f3cb96374b2f7c0fdcce2517b718b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d20f41c004e75125850d582a310888b0f3cb96374b2f7c0fdcce2517b718b2f->enter($__internal_5d20f41c004e75125850d582a310888b0f3cb96374b2f7c0fdcce2517b718b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d20f41c004e75125850d582a310888b0f3cb96374b2f7c0fdcce2517b718b2f->leave($__internal_5d20f41c004e75125850d582a310888b0f3cb96374b2f7c0fdcce2517b718b2f_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a5d8613035881a0009dcd73bb22862f322e9538518da8324184a67c5950962d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5d8613035881a0009dcd73bb22862f322e9538518da8324184a67c5950962d->enter($__internal_8a5d8613035881a0009dcd73bb22862f322e9538518da8324184a67c5950962d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_8a5d8613035881a0009dcd73bb22862f322e9538518da8324184a67c5950962d->leave($__internal_8a5d8613035881a0009dcd73bb22862f322e9538518da8324184a67c5950962d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}

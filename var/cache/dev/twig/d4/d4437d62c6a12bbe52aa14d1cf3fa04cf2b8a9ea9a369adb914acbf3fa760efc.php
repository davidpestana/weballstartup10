<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_ee2c5ea3f2f7346ac2cb37d129a3196ef5c720794db286ceebaa0a2a28fa250c extends Twig_Template
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
        $__internal_c5a9e436ffc439934d0a1bf43d49a1af5c2613beb95c0d19ece0a9da4e74cd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a9e436ffc439934d0a1bf43d49a1af5c2613beb95c0d19ece0a9da4e74cd43->enter($__internal_c5a9e436ffc439934d0a1bf43d49a1af5c2613beb95c0d19ece0a9da4e74cd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5a9e436ffc439934d0a1bf43d49a1af5c2613beb95c0d19ece0a9da4e74cd43->leave($__internal_c5a9e436ffc439934d0a1bf43d49a1af5c2613beb95c0d19ece0a9da4e74cd43_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_46331f8812e022a14a5fa6b8ff0ecebca3f80ed81500cb34193694d22309b5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46331f8812e022a14a5fa6b8ff0ecebca3f80ed81500cb34193694d22309b5c6->enter($__internal_46331f8812e022a14a5fa6b8ff0ecebca3f80ed81500cb34193694d22309b5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_46331f8812e022a14a5fa6b8ff0ecebca3f80ed81500cb34193694d22309b5c6->leave($__internal_46331f8812e022a14a5fa6b8ff0ecebca3f80ed81500cb34193694d22309b5c6_prof);

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

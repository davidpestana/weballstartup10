<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4c49b348b9cbfca765af9d9c23f587e7d7d56b0b91e213863aaf56f0a52c2e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_784847e24e09272cbcdb8067cbaaa3cec746172a1d8bc37fb06440048c4e678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784847e24e09272cbcdb8067cbaaa3cec746172a1d8bc37fb06440048c4e678b->enter($__internal_784847e24e09272cbcdb8067cbaaa3cec746172a1d8bc37fb06440048c4e678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_784847e24e09272cbcdb8067cbaaa3cec746172a1d8bc37fb06440048c4e678b->leave($__internal_784847e24e09272cbcdb8067cbaaa3cec746172a1d8bc37fb06440048c4e678b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d2f264f6664b55ce334f4113be0fbdbf656d0a45fc903526389dce3ac816051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2f264f6664b55ce334f4113be0fbdbf656d0a45fc903526389dce3ac816051->enter($__internal_8d2f264f6664b55ce334f4113be0fbdbf656d0a45fc903526389dce3ac816051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8d2f264f6664b55ce334f4113be0fbdbf656d0a45fc903526389dce3ac816051->leave($__internal_8d2f264f6664b55ce334f4113be0fbdbf656d0a45fc903526389dce3ac816051_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}

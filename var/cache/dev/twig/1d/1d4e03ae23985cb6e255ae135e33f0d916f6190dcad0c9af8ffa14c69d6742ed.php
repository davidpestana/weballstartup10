<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_987864d4e8fd9603ad6957d58b0f63170c01f7b8356697569660bff4cc8b1a32 extends Twig_Template
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
        $__internal_aa8ec09d572093365d04064c329251566f2b151d708336480d9608656b2ab5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8ec09d572093365d04064c329251566f2b151d708336480d9608656b2ab5b4->enter($__internal_aa8ec09d572093365d04064c329251566f2b151d708336480d9608656b2ab5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aa8ec09d572093365d04064c329251566f2b151d708336480d9608656b2ab5b4->leave($__internal_aa8ec09d572093365d04064c329251566f2b151d708336480d9608656b2ab5b4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0abeb97ae74117276c66a7c5a7ccaf87d4e632e42ac5a33a494f6272aa99061a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abeb97ae74117276c66a7c5a7ccaf87d4e632e42ac5a33a494f6272aa99061a->enter($__internal_0abeb97ae74117276c66a7c5a7ccaf87d4e632e42ac5a33a494f6272aa99061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0abeb97ae74117276c66a7c5a7ccaf87d4e632e42ac5a33a494f6272aa99061a->leave($__internal_0abeb97ae74117276c66a7c5a7ccaf87d4e632e42ac5a33a494f6272aa99061a_prof);

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

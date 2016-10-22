<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c3dc3266a23ccf39d7bfe646b01dd45e16c349560c4e250c77ddc09e186acff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d2ad0beb5b566f011bef816cd5bee35cca898b1cab53a0132aefe8c8f1d2610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2ad0beb5b566f011bef816cd5bee35cca898b1cab53a0132aefe8c8f1d2610->enter($__internal_6d2ad0beb5b566f011bef816cd5bee35cca898b1cab53a0132aefe8c8f1d2610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6d2ad0beb5b566f011bef816cd5bee35cca898b1cab53a0132aefe8c8f1d2610->leave($__internal_6d2ad0beb5b566f011bef816cd5bee35cca898b1cab53a0132aefe8c8f1d2610_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}

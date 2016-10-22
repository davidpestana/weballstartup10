<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_dcfaa737b1d4749cf80f39852af8a0964345d06cea2789f93e9083fcc187f3d7 extends Twig_Template
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
        $__internal_b7be59eaa568838550b3650942b71741561bafc0d8c6b9534afeda54d37972bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7be59eaa568838550b3650942b71741561bafc0d8c6b9534afeda54d37972bd->enter($__internal_b7be59eaa568838550b3650942b71741561bafc0d8c6b9534afeda54d37972bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b7be59eaa568838550b3650942b71741561bafc0d8c6b9534afeda54d37972bd->leave($__internal_b7be59eaa568838550b3650942b71741561bafc0d8c6b9534afeda54d37972bd_prof);

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

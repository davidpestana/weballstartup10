<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_06c61ff965e290e01d8849c4ebb196fe1668d384b0d8d94ea4ac0c0a6283df0f extends Twig_Template
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
        $__internal_dadac6dd64dd3094495ab1e50231a7ae2c4f09c52cdc1ee154c9493045b29b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadac6dd64dd3094495ab1e50231a7ae2c4f09c52cdc1ee154c9493045b29b9c->enter($__internal_dadac6dd64dd3094495ab1e50231a7ae2c4f09c52cdc1ee154c9493045b29b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dadac6dd64dd3094495ab1e50231a7ae2c4f09c52cdc1ee154c9493045b29b9c->leave($__internal_dadac6dd64dd3094495ab1e50231a7ae2c4f09c52cdc1ee154c9493045b29b9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}

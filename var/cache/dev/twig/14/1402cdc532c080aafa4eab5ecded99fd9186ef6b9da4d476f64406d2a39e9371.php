<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ed7d9e7369ceb23c15dfa5720df01180c381f6580f7923f451bdc20338e5265c extends Twig_Template
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
        $__internal_2a1a75ef673b3ca7046b7940f4c0a270da1a7bd7ca258b1184382641b327fb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1a75ef673b3ca7046b7940f4c0a270da1a7bd7ca258b1184382641b327fb04->enter($__internal_2a1a75ef673b3ca7046b7940f4c0a270da1a7bd7ca258b1184382641b327fb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2a1a75ef673b3ca7046b7940f4c0a270da1a7bd7ca258b1184382641b327fb04->leave($__internal_2a1a75ef673b3ca7046b7940f4c0a270da1a7bd7ca258b1184382641b327fb04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}

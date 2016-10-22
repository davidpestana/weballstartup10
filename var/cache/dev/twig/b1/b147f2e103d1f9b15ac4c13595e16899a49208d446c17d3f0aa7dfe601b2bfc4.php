<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7968b4d73e7fd2b6c7cbf04cc3af54658fa7f13950977ef629365906f6a8d541 extends Twig_Template
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
        $__internal_4a055aa46687baded8ed6ca2fb9aa0acef74f270372c9f481fed53faa961c2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a055aa46687baded8ed6ca2fb9aa0acef74f270372c9f481fed53faa961c2aa->enter($__internal_4a055aa46687baded8ed6ca2fb9aa0acef74f270372c9f481fed53faa961c2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4a055aa46687baded8ed6ca2fb9aa0acef74f270372c9f481fed53faa961c2aa->leave($__internal_4a055aa46687baded8ed6ca2fb9aa0acef74f270372c9f481fed53faa961c2aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

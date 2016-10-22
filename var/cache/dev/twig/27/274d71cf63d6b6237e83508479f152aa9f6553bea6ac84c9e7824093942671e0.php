<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2bc8609b51f73dd3e8682b6ce293c6c8fa41a547387ffa268653d58dd88c2a0d extends Twig_Template
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
        $__internal_2fa97ab256ce493122e697d46a7348d7b3df7f98c753aef4e02ac6a45c7f5631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa97ab256ce493122e697d46a7348d7b3df7f98c753aef4e02ac6a45c7f5631->enter($__internal_2fa97ab256ce493122e697d46a7348d7b3df7f98c753aef4e02ac6a45c7f5631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2fa97ab256ce493122e697d46a7348d7b3df7f98c753aef4e02ac6a45c7f5631->leave($__internal_2fa97ab256ce493122e697d46a7348d7b3df7f98c753aef4e02ac6a45c7f5631_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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

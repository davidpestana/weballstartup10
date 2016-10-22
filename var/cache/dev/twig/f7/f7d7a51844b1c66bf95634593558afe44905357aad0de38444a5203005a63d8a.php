<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_86d159e6a7d33f53737e5d0c812d653b08ecbd6ce20815294c96e32c9c37e59d extends Twig_Template
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
        $__internal_038a29f0edba022f70f2daf53161afac2bc02e8038bf724f6a4fcda965ff8066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038a29f0edba022f70f2daf53161afac2bc02e8038bf724f6a4fcda965ff8066->enter($__internal_038a29f0edba022f70f2daf53161afac2bc02e8038bf724f6a4fcda965ff8066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_038a29f0edba022f70f2daf53161afac2bc02e8038bf724f6a4fcda965ff8066->leave($__internal_038a29f0edba022f70f2daf53161afac2bc02e8038bf724f6a4fcda965ff8066_prof);

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

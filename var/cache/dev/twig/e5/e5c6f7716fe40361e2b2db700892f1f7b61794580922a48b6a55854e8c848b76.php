<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_588104573288027a2b9ea5a9a8a4b49d07b1664ccac5575780b947088efcba41 extends Twig_Template
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
        $__internal_bf4e67d4daebe94ab2e46a24480154825e02c9e137ac729f04a0b2003836fee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4e67d4daebe94ab2e46a24480154825e02c9e137ac729f04a0b2003836fee1->enter($__internal_bf4e67d4daebe94ab2e46a24480154825e02c9e137ac729f04a0b2003836fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bf4e67d4daebe94ab2e46a24480154825e02c9e137ac729f04a0b2003836fee1->leave($__internal_bf4e67d4daebe94ab2e46a24480154825e02c9e137ac729f04a0b2003836fee1_prof);

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

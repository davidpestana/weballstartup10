<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cd5cdaf0ab887258efd2951a097ead1d6c352a16ebe464458acb330d1e5a5ef1 extends Twig_Template
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
        $__internal_66903b67eeec8e572305c669766c7024c68160889b639ba8fc12a9295524efc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66903b67eeec8e572305c669766c7024c68160889b639ba8fc12a9295524efc2->enter($__internal_66903b67eeec8e572305c669766c7024c68160889b639ba8fc12a9295524efc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_66903b67eeec8e572305c669766c7024c68160889b639ba8fc12a9295524efc2->leave($__internal_66903b67eeec8e572305c669766c7024c68160889b639ba8fc12a9295524efc2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

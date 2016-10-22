<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1bb995ff3935258d4775cd92a084d5acfb2c7c8b468a374efcdf51d0a346d908 extends Twig_Template
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
        $__internal_4c5f306c7513d612a89d7ecf41145102a01b05464828c54d56a76443e5a153b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5f306c7513d612a89d7ecf41145102a01b05464828c54d56a76443e5a153b5->enter($__internal_4c5f306c7513d612a89d7ecf41145102a01b05464828c54d56a76443e5a153b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4c5f306c7513d612a89d7ecf41145102a01b05464828c54d56a76443e5a153b5->leave($__internal_4c5f306c7513d612a89d7ecf41145102a01b05464828c54d56a76443e5a153b5_prof);

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

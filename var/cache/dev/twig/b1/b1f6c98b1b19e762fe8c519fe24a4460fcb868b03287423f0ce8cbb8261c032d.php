<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_42a547de0b325b1c765e517957ee2649f5351ddaf19c89c66366243327ab74b7 extends Twig_Template
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
        $__internal_8ec8eb8cf9e04343f778053342bd2d9ac32809bde4966aa60a6533131b831299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec8eb8cf9e04343f778053342bd2d9ac32809bde4966aa60a6533131b831299->enter($__internal_8ec8eb8cf9e04343f778053342bd2d9ac32809bde4966aa60a6533131b831299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8ec8eb8cf9e04343f778053342bd2d9ac32809bde4966aa60a6533131b831299->leave($__internal_8ec8eb8cf9e04343f778053342bd2d9ac32809bde4966aa60a6533131b831299_prof);

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

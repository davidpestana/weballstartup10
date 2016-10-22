<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d13c522e32a11a64720e2a038ce985e313c0b9f02f9bf76a0eb9b003db1c7ac3 extends Twig_Template
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
        $__internal_4a66e5fba571dfacbf74a0ef57c1f8f2bf1bb03485ef17dc57761376e95cb503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a66e5fba571dfacbf74a0ef57c1f8f2bf1bb03485ef17dc57761376e95cb503->enter($__internal_4a66e5fba571dfacbf74a0ef57c1f8f2bf1bb03485ef17dc57761376e95cb503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4a66e5fba571dfacbf74a0ef57c1f8f2bf1bb03485ef17dc57761376e95cb503->leave($__internal_4a66e5fba571dfacbf74a0ef57c1f8f2bf1bb03485ef17dc57761376e95cb503_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}

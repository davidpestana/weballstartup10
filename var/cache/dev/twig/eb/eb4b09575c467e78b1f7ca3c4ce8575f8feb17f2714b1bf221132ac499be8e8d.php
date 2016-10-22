<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e6366257f6c5ca00eeebddb8cd08933151893fe977496a746ab4ed62971d9ce7 extends Twig_Template
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
        $__internal_eecd41d32317f99b4de0f958a7d351d3d22d58578d9eb1247198565417f9268e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecd41d32317f99b4de0f958a7d351d3d22d58578d9eb1247198565417f9268e->enter($__internal_eecd41d32317f99b4de0f958a7d351d3d22d58578d9eb1247198565417f9268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_eecd41d32317f99b4de0f958a7d351d3d22d58578d9eb1247198565417f9268e->leave($__internal_eecd41d32317f99b4de0f958a7d351d3d22d58578d9eb1247198565417f9268e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

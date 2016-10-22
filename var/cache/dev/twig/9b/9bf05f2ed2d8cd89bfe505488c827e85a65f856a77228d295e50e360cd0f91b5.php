<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ef822a23c9489b35f7a9233b257f8c1b7ab921d89a20a1c6aabbf3052be4a686 extends Twig_Template
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
        $__internal_eb9b076cd64441b9acb2c8c015c080979b69799b754e4d831cec3c331122b9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9b076cd64441b9acb2c8c015c080979b69799b754e4d831cec3c331122b9e5->enter($__internal_eb9b076cd64441b9acb2c8c015c080979b69799b754e4d831cec3c331122b9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_eb9b076cd64441b9acb2c8c015c080979b69799b754e4d831cec3c331122b9e5->leave($__internal_eb9b076cd64441b9acb2c8c015c080979b69799b754e4d831cec3c331122b9e5_prof);

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

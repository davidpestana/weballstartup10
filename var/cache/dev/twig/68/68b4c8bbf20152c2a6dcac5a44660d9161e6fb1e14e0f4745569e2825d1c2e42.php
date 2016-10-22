<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_24e623b9d1d401710662dbba0b82514de2b81d6c95f537592afbaa975e35ef24 extends Twig_Template
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
        $__internal_51d00e6e716c9cd0f3037d4eb94d5c958be8798f99ee25026baf153a6c81aa9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d00e6e716c9cd0f3037d4eb94d5c958be8798f99ee25026baf153a6c81aa9f->enter($__internal_51d00e6e716c9cd0f3037d4eb94d5c958be8798f99ee25026baf153a6c81aa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_51d00e6e716c9cd0f3037d4eb94d5c958be8798f99ee25026baf153a6c81aa9f->leave($__internal_51d00e6e716c9cd0f3037d4eb94d5c958be8798f99ee25026baf153a6c81aa9f_prof);

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

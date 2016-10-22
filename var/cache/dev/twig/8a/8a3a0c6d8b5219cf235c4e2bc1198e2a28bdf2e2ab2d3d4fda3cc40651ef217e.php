<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ca04b2c89acb23800bc04bcc64fca70f290101835afa9159b76e177c9299d9a9 extends Twig_Template
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
        $__internal_c332350a0b8de7939dfe65cda1ab2eff139103bf637492699fdb9cd405b025d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c332350a0b8de7939dfe65cda1ab2eff139103bf637492699fdb9cd405b025d4->enter($__internal_c332350a0b8de7939dfe65cda1ab2eff139103bf637492699fdb9cd405b025d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c332350a0b8de7939dfe65cda1ab2eff139103bf637492699fdb9cd405b025d4->leave($__internal_c332350a0b8de7939dfe65cda1ab2eff139103bf637492699fdb9cd405b025d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}

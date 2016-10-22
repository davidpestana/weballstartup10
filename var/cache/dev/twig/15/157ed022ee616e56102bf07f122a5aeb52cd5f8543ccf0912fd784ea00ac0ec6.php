<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a47ed1ec00d4244d4113cff7fdfeea5a73f5aa96d5aac6e6512edf974bd9323 extends Twig_Template
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
        $__internal_72879829d46d025b807effc40ec95077d64e22dc73e8382715ee95e7cfdd3403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72879829d46d025b807effc40ec95077d64e22dc73e8382715ee95e7cfdd3403->enter($__internal_72879829d46d025b807effc40ec95077d64e22dc73e8382715ee95e7cfdd3403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_72879829d46d025b807effc40ec95077d64e22dc73e8382715ee95e7cfdd3403->leave($__internal_72879829d46d025b807effc40ec95077d64e22dc73e8382715ee95e7cfdd3403_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}

<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_a7673eabdd9c221584d3f8b6d90d8233a3abd42394530a3293c8e1fb21f842ba extends Twig_Template
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
        $__internal_ae41773a0b18a1c10e6fc5cb1d010fae0675996dfb959f1cc7f58c4d6176f3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae41773a0b18a1c10e6fc5cb1d010fae0675996dfb959f1cc7f58c4d6176f3c3->enter($__internal_ae41773a0b18a1c10e6fc5cb1d010fae0675996dfb959f1cc7f58c4d6176f3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ae41773a0b18a1c10e6fc5cb1d010fae0675996dfb959f1cc7f58c4d6176f3c3->leave($__internal_ae41773a0b18a1c10e6fc5cb1d010fae0675996dfb959f1cc7f58c4d6176f3c3_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}

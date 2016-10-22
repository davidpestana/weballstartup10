<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_6c3a79090a4b04cfa770c759af7aa788e1422e52e0878af920fb87fe95f3dc65 extends Twig_Template
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
        $__internal_dd483de6c954254023acf93d61f2d49709d63a547cdef6f6c1a6b163e19382eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd483de6c954254023acf93d61f2d49709d63a547cdef6f6c1a6b163e19382eb->enter($__internal_dd483de6c954254023acf93d61f2d49709d63a547cdef6f6c1a6b163e19382eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_dd483de6c954254023acf93d61f2d49709d63a547cdef6f6c1a6b163e19382eb->leave($__internal_dd483de6c954254023acf93d61f2d49709d63a547cdef6f6c1a6b163e19382eb_prof);

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

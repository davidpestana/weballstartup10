<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_13b7d6ed8dfdf05eff6b09828efcafa1fca19bfc444e37a2e6f1f567eb623bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aca7b236c5450ad51b74cbc855433c9e78f6df9763134e0196badf563ae7e736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca7b236c5450ad51b74cbc855433c9e78f6df9763134e0196badf563ae7e736->enter($__internal_aca7b236c5450ad51b74cbc855433c9e78f6df9763134e0196badf563ae7e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_aca7b236c5450ad51b74cbc855433c9e78f6df9763134e0196badf563ae7e736->leave($__internal_aca7b236c5450ad51b74cbc855433c9e78f6df9763134e0196badf563ae7e736_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_4879a09b00a9190dfee4336df215a983d1d6a8099aec2737ff479bb71f5fd53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4879a09b00a9190dfee4336df215a983d1d6a8099aec2737ff479bb71f5fd53a->enter($__internal_4879a09b00a9190dfee4336df215a983d1d6a8099aec2737ff479bb71f5fd53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_4879a09b00a9190dfee4336df215a983d1d6a8099aec2737ff479bb71f5fd53a->leave($__internal_4879a09b00a9190dfee4336df215a983d1d6a8099aec2737ff479bb71f5fd53a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}

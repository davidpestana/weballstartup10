<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_2a122798dd25c0774103480070108876f37de46139fac9c9bd6eb9a754c8ec99 extends Twig_Template
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
        $__internal_72c9f6bb0df50bd6b6202bfdd8b2b85cdf35e5dff0aeb882d5d39e33a4066e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c9f6bb0df50bd6b6202bfdd8b2b85cdf35e5dff0aeb882d5d39e33a4066e13->enter($__internal_72c9f6bb0df50bd6b6202bfdd8b2b85cdf35e5dff0aeb882d5d39e33a4066e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_72c9f6bb0df50bd6b6202bfdd8b2b85cdf35e5dff0aeb882d5d39e33a4066e13->leave($__internal_72c9f6bb0df50bd6b6202bfdd8b2b85cdf35e5dff0aeb882d5d39e33a4066e13_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_2ab54b078db7e0143b16134a5d7326d0d838dda1684cc3b05c274447d8d38de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab54b078db7e0143b16134a5d7326d0d838dda1684cc3b05c274447d8d38de0->enter($__internal_2ab54b078db7e0143b16134a5d7326d0d838dda1684cc3b05c274447d8d38de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_2ab54b078db7e0143b16134a5d7326d0d838dda1684cc3b05c274447d8d38de0->leave($__internal_2ab54b078db7e0143b16134a5d7326d0d838dda1684cc3b05c274447d8d38de0_prof);

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

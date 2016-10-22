<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_843d694880037080aacedc8380b70f497e3081235a7c78b7d4769a0a5ed70f58 extends Twig_Template
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
        $__internal_36f8d661a636d0b523ef5a5773e8145c3dc09a068546bf9c607cb6429e2f243b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f8d661a636d0b523ef5a5773e8145c3dc09a068546bf9c607cb6429e2f243b->enter($__internal_36f8d661a636d0b523ef5a5773e8145c3dc09a068546bf9c607cb6429e2f243b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_36f8d661a636d0b523ef5a5773e8145c3dc09a068546bf9c607cb6429e2f243b->leave($__internal_36f8d661a636d0b523ef5a5773e8145c3dc09a068546bf9c607cb6429e2f243b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}

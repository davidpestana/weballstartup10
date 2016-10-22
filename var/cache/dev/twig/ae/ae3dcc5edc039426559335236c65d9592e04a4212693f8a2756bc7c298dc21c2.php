<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e64ae6d0a9d3b4aa3ee583bedd84b40b69229a97f2942bc1b2418a6886ef0aa9 extends Twig_Template
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
        $__internal_1b4468fc24568e072e2b7d4c44eb36d9c25146d3159600dbb965b24aa05d13a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4468fc24568e072e2b7d4c44eb36d9c25146d3159600dbb965b24aa05d13a4->enter($__internal_1b4468fc24568e072e2b7d4c44eb36d9c25146d3159600dbb965b24aa05d13a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1b4468fc24568e072e2b7d4c44eb36d9c25146d3159600dbb965b24aa05d13a4->leave($__internal_1b4468fc24568e072e2b7d4c44eb36d9c25146d3159600dbb965b24aa05d13a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}

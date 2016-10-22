<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0d98b08d14a367b1352193e8e9b6aa9932b6117da6b7ed039ba74e951c762e30 extends Twig_Template
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
        $__internal_4ef4079bfe3a56dd5f4eb40f4514e32559b31c9ed0e82c143dd6588e19084305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef4079bfe3a56dd5f4eb40f4514e32559b31c9ed0e82c143dd6588e19084305->enter($__internal_4ef4079bfe3a56dd5f4eb40f4514e32559b31c9ed0e82c143dd6588e19084305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4ef4079bfe3a56dd5f4eb40f4514e32559b31c9ed0e82c143dd6588e19084305->leave($__internal_4ef4079bfe3a56dd5f4eb40f4514e32559b31c9ed0e82c143dd6588e19084305_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}

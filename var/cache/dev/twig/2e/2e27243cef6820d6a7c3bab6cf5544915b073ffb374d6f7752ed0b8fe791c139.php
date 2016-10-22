<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7588c94e0c040d46ff08c201a5624c2f9ae1fb38405bc2ada12571e32b2d9e50 extends Twig_Template
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
        $__internal_7b94f6a32f0b698f3a828783af867dc6434e49b9a79ff683a021af97b8001c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b94f6a32f0b698f3a828783af867dc6434e49b9a79ff683a021af97b8001c81->enter($__internal_7b94f6a32f0b698f3a828783af867dc6434e49b9a79ff683a021af97b8001c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7b94f6a32f0b698f3a828783af867dc6434e49b9a79ff683a021af97b8001c81->leave($__internal_7b94f6a32f0b698f3a828783af867dc6434e49b9a79ff683a021af97b8001c81_prof);

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

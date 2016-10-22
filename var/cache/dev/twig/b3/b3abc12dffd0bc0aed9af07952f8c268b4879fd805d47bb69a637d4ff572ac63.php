<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_23af35fffbf1cbd8715fdc3591f92c64d6b61baf2e76cf2dfd89c7d684315032 extends Twig_Template
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
        $__internal_c90fcc5ec9d64e963b2459e7a952e6262fe760b04828372294b26d71798bddc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90fcc5ec9d64e963b2459e7a952e6262fe760b04828372294b26d71798bddc6->enter($__internal_c90fcc5ec9d64e963b2459e7a952e6262fe760b04828372294b26d71798bddc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c90fcc5ec9d64e963b2459e7a952e6262fe760b04828372294b26d71798bddc6->leave($__internal_c90fcc5ec9d64e963b2459e7a952e6262fe760b04828372294b26d71798bddc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}

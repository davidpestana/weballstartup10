<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_680bc7e52b5f4dd99165c16a4efe5148346774f868e8b7a2598e632e5526d35d extends Twig_Template
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
        $__internal_a142d27eae179343f9e233ebdb0705f1f1e8f7e25dbdc48fabd599b6bcc3c4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a142d27eae179343f9e233ebdb0705f1f1e8f7e25dbdc48fabd599b6bcc3c4a0->enter($__internal_a142d27eae179343f9e233ebdb0705f1f1e8f7e25dbdc48fabd599b6bcc3c4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a142d27eae179343f9e233ebdb0705f1f1e8f7e25dbdc48fabd599b6bcc3c4a0->leave($__internal_a142d27eae179343f9e233ebdb0705f1f1e8f7e25dbdc48fabd599b6bcc3c4a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}

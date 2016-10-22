<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_79967ef17b389107768180b5e3b46bc00e3cedd1fab21c508730cb4111461daa extends Twig_Template
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
        $__internal_9cb71e0096834e4a6057bda00bdc0758d547e3d82f167b1d239cfdbdaf76a8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb71e0096834e4a6057bda00bdc0758d547e3d82f167b1d239cfdbdaf76a8d2->enter($__internal_9cb71e0096834e4a6057bda00bdc0758d547e3d82f167b1d239cfdbdaf76a8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9cb71e0096834e4a6057bda00bdc0758d547e3d82f167b1d239cfdbdaf76a8d2->leave($__internal_9cb71e0096834e4a6057bda00bdc0758d547e3d82f167b1d239cfdbdaf76a8d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3e3f97f2a7c519a32b1f22e4709436bf3e94f1c821512fcd009ad6b9a338d919 extends Twig_Template
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
        $__internal_7763a40d9d1b6b415b66f19765f6ca17730c03641df93166cf91617fd92d6817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7763a40d9d1b6b415b66f19765f6ca17730c03641df93166cf91617fd92d6817->enter($__internal_7763a40d9d1b6b415b66f19765f6ca17730c03641df93166cf91617fd92d6817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7763a40d9d1b6b415b66f19765f6ca17730c03641df93166cf91617fd92d6817->leave($__internal_7763a40d9d1b6b415b66f19765f6ca17730c03641df93166cf91617fd92d6817_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}

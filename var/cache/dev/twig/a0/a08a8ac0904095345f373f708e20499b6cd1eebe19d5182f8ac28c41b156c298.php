<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_75044ba370fb08265de9fbf35dfedf96fd128f18514d92749dd6dcc53b250075 extends Twig_Template
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
        $__internal_c6ed2621933fdc302358a2e9388ebeddad0bc6fd1a7d3ced65f80756e013685c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ed2621933fdc302358a2e9388ebeddad0bc6fd1a7d3ced65f80756e013685c->enter($__internal_c6ed2621933fdc302358a2e9388ebeddad0bc6fd1a7d3ced65f80756e013685c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c6ed2621933fdc302358a2e9388ebeddad0bc6fd1a7d3ced65f80756e013685c->leave($__internal_c6ed2621933fdc302358a2e9388ebeddad0bc6fd1a7d3ced65f80756e013685c_prof);

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

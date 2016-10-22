<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0cf9eaa5276ed1d71711da99955debe87b63790585c13139c2cadda2a477fc69 extends Twig_Template
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
        $__internal_34fcd046949150a7a9d9b32334a839744c47af7b4bd374f0a63b666963326449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fcd046949150a7a9d9b32334a839744c47af7b4bd374f0a63b666963326449->enter($__internal_34fcd046949150a7a9d9b32334a839744c47af7b4bd374f0a63b666963326449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_34fcd046949150a7a9d9b32334a839744c47af7b4bd374f0a63b666963326449->leave($__internal_34fcd046949150a7a9d9b32334a839744c47af7b4bd374f0a63b666963326449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}

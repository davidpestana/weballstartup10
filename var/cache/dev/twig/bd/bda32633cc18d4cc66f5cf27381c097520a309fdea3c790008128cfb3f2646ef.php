<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b6a4ce8ed5d5c287536b1a46c134a527524cf9af8c921c7169e9fc75e3a765fb extends Twig_Template
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
        $__internal_c774bb49be4ce087bdb960502b70383007766dbeb5655cc86c03ecab4684289b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c774bb49be4ce087bdb960502b70383007766dbeb5655cc86c03ecab4684289b->enter($__internal_c774bb49be4ce087bdb960502b70383007766dbeb5655cc86c03ecab4684289b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c774bb49be4ce087bdb960502b70383007766dbeb5655cc86c03ecab4684289b->leave($__internal_c774bb49be4ce087bdb960502b70383007766dbeb5655cc86c03ecab4684289b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}

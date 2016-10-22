<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_06a19abfe2634db08a371a07fea9b69095b825411e16139d06d667ccc2c24723 extends Twig_Template
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
        $__internal_459da584357286945b591948af2c2d79eec564d114c35f3995c39d0b7d7c1cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459da584357286945b591948af2c2d79eec564d114c35f3995c39d0b7d7c1cd9->enter($__internal_459da584357286945b591948af2c2d79eec564d114c35f3995c39d0b7d7c1cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_459da584357286945b591948af2c2d79eec564d114c35f3995c39d0b7d7c1cd9->leave($__internal_459da584357286945b591948af2c2d79eec564d114c35f3995c39d0b7d7c1cd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}

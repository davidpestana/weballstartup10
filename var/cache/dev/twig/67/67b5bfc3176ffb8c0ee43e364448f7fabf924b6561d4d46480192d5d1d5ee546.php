<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_299f5a4a8923134450d30e6721c60f376c670ffc04b5173fa1ca6e5e0e3040b3 extends Twig_Template
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
        $__internal_732b3dbf295723e79b9f17145a16841e3b48a2e5a5f136b2f2017902a4fa1dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732b3dbf295723e79b9f17145a16841e3b48a2e5a5f136b2f2017902a4fa1dc0->enter($__internal_732b3dbf295723e79b9f17145a16841e3b48a2e5a5f136b2f2017902a4fa1dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_732b3dbf295723e79b9f17145a16841e3b48a2e5a5f136b2f2017902a4fa1dc0->leave($__internal_732b3dbf295723e79b9f17145a16841e3b48a2e5a5f136b2f2017902a4fa1dc0_prof);

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

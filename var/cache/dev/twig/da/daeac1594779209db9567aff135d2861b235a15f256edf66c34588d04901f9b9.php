<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ab22968bcd1eb3a48b6622db9f1747efc99e175fc620d86a69a8a1445228a8bc extends Twig_Template
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
        $__internal_3c3eafbdfd9f1c4a8be382ff6ce8ec3d0dcad90409dee8b869f0b49d186cc884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3eafbdfd9f1c4a8be382ff6ce8ec3d0dcad90409dee8b869f0b49d186cc884->enter($__internal_3c3eafbdfd9f1c4a8be382ff6ce8ec3d0dcad90409dee8b869f0b49d186cc884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3c3eafbdfd9f1c4a8be382ff6ce8ec3d0dcad90409dee8b869f0b49d186cc884->leave($__internal_3c3eafbdfd9f1c4a8be382ff6ce8ec3d0dcad90409dee8b869f0b49d186cc884_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}

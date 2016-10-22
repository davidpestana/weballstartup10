<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e21c9a2298d043e0b15cb39227534305a1656c6c64527d012a87e32ccab8e819 extends Twig_Template
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
        $__internal_423ce66fd48bdf1ab4a1415318f5e35a2059d6bee053f8168cfdaccc67daf470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423ce66fd48bdf1ab4a1415318f5e35a2059d6bee053f8168cfdaccc67daf470->enter($__internal_423ce66fd48bdf1ab4a1415318f5e35a2059d6bee053f8168cfdaccc67daf470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_423ce66fd48bdf1ab4a1415318f5e35a2059d6bee053f8168cfdaccc67daf470->leave($__internal_423ce66fd48bdf1ab4a1415318f5e35a2059d6bee053f8168cfdaccc67daf470_prof);

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

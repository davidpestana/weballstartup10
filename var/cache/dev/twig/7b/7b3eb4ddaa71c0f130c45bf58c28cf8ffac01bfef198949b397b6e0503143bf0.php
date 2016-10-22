<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_74647caa9517759e3c5be1a701ce7e81c1e40979365a7a0d3f6f155cd4581564 extends Twig_Template
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
        $__internal_3b5e5c96f4d729bd9bdea8f3b8ca13e8e732aa62c613300b9c2d940e20698b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5e5c96f4d729bd9bdea8f3b8ca13e8e732aa62c613300b9c2d940e20698b90->enter($__internal_3b5e5c96f4d729bd9bdea8f3b8ca13e8e732aa62c613300b9c2d940e20698b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3b5e5c96f4d729bd9bdea8f3b8ca13e8e732aa62c613300b9c2d940e20698b90->leave($__internal_3b5e5c96f4d729bd9bdea8f3b8ca13e8e732aa62c613300b9c2d940e20698b90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}

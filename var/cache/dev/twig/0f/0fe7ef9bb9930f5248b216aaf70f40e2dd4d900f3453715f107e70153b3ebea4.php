<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_370ca4577940b0356818b70c6d16f9166beab276ad443fdd05cdab8b7cb595f0 extends Twig_Template
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
        $__internal_69cbd2e3551afd24b0e0b2c32bdefed8562500a2b4bcf7f4a07a6e50e0e20a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cbd2e3551afd24b0e0b2c32bdefed8562500a2b4bcf7f4a07a6e50e0e20a8f->enter($__internal_69cbd2e3551afd24b0e0b2c32bdefed8562500a2b4bcf7f4a07a6e50e0e20a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_69cbd2e3551afd24b0e0b2c32bdefed8562500a2b4bcf7f4a07a6e50e0e20a8f->leave($__internal_69cbd2e3551afd24b0e0b2c32bdefed8562500a2b4bcf7f4a07a6e50e0e20a8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}

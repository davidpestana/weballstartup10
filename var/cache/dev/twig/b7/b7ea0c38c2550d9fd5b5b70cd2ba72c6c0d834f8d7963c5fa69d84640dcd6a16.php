<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a8cbac45dd81547fbb63c65530c9f589dd2dc86518968568a640e8451abed42d extends Twig_Template
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
        $__internal_17a79c4e990835bee3f994e00f445ce3a7c0d7eb30c1db1b9e179f85a9730eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a79c4e990835bee3f994e00f445ce3a7c0d7eb30c1db1b9e179f85a9730eee->enter($__internal_17a79c4e990835bee3f994e00f445ce3a7c0d7eb30c1db1b9e179f85a9730eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_17a79c4e990835bee3f994e00f445ce3a7c0d7eb30c1db1b9e179f85a9730eee->leave($__internal_17a79c4e990835bee3f994e00f445ce3a7c0d7eb30c1db1b9e179f85a9730eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}

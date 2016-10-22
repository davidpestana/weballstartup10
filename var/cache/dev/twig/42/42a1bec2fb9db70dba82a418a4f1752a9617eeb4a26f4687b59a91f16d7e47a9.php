<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0cf6ebfd77cd40c6fface228428df035204a0094566099d5b2bdb1c07aba61a4 extends Twig_Template
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
        $__internal_84a22520bb9c28ff9982c48687bfbbb5f96793638135ee1ca5eafa34d32672a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a22520bb9c28ff9982c48687bfbbb5f96793638135ee1ca5eafa34d32672a7->enter($__internal_84a22520bb9c28ff9982c48687bfbbb5f96793638135ee1ca5eafa34d32672a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_84a22520bb9c28ff9982c48687bfbbb5f96793638135ee1ca5eafa34d32672a7->leave($__internal_84a22520bb9c28ff9982c48687bfbbb5f96793638135ee1ca5eafa34d32672a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}

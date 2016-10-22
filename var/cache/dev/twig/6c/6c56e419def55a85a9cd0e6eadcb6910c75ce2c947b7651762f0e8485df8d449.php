<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_49c013aedba5fc2287bd825c3e65b8596b43ca5b6f1469c357899d906e02ac71 extends Twig_Template
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
        $__internal_45e87f128da0ef88fe5f05497923ca03f7e8c6b12a5dc09db72d3693bd73b7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e87f128da0ef88fe5f05497923ca03f7e8c6b12a5dc09db72d3693bd73b7a4->enter($__internal_45e87f128da0ef88fe5f05497923ca03f7e8c6b12a5dc09db72d3693bd73b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_45e87f128da0ef88fe5f05497923ca03f7e8c6b12a5dc09db72d3693bd73b7a4->leave($__internal_45e87f128da0ef88fe5f05497923ca03f7e8c6b12a5dc09db72d3693bd73b7a4_prof);

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

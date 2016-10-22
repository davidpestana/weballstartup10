<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_667df0d2907f02244bb1704b6fc8d438a9955b692b201c40e3ec328f843d7eea extends Twig_Template
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
        $__internal_dff2d0ade90c4db0267537390ebc1de7a44e7978a373890b349e446cfa8d0af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff2d0ade90c4db0267537390ebc1de7a44e7978a373890b349e446cfa8d0af4->enter($__internal_dff2d0ade90c4db0267537390ebc1de7a44e7978a373890b349e446cfa8d0af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dff2d0ade90c4db0267537390ebc1de7a44e7978a373890b349e446cfa8d0af4->leave($__internal_dff2d0ade90c4db0267537390ebc1de7a44e7978a373890b349e446cfa8d0af4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}

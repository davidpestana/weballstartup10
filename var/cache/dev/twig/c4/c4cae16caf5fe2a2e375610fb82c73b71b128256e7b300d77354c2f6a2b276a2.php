<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34e187c4ffe919fafa27a880173b5fedb2d1c06a434a456d735a636fa4bbf177 extends Twig_Template
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
        $__internal_0de007d0b950eb249ca8624eee0fc3ccf4f4ac2c8d7d96a1d68fdc3eb16ee3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de007d0b950eb249ca8624eee0fc3ccf4f4ac2c8d7d96a1d68fdc3eb16ee3f2->enter($__internal_0de007d0b950eb249ca8624eee0fc3ccf4f4ac2c8d7d96a1d68fdc3eb16ee3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0de007d0b950eb249ca8624eee0fc3ccf4f4ac2c8d7d96a1d68fdc3eb16ee3f2->leave($__internal_0de007d0b950eb249ca8624eee0fc3ccf4f4ac2c8d7d96a1d68fdc3eb16ee3f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}

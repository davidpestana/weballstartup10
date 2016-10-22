<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b48c6b196f615d375b668dec1c427d83c80ce545c91450c9c6650b1fc186d04d extends Twig_Template
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
        $__internal_01196ce63d9ccd3c82ed34b2f7bd51f7ac80fdfb9f4509adfb1b20db32f33ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01196ce63d9ccd3c82ed34b2f7bd51f7ac80fdfb9f4509adfb1b20db32f33ca5->enter($__internal_01196ce63d9ccd3c82ed34b2f7bd51f7ac80fdfb9f4509adfb1b20db32f33ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_01196ce63d9ccd3c82ed34b2f7bd51f7ac80fdfb9f4509adfb1b20db32f33ca5->leave($__internal_01196ce63d9ccd3c82ed34b2f7bd51f7ac80fdfb9f4509adfb1b20db32f33ca5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}

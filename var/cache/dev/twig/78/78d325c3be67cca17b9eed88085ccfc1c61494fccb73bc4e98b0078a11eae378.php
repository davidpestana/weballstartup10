<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4b1a154a9cd2c6a99550369c00cab0da81875ca75e8fdbd157ca5223ba0acdfd extends Twig_Template
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
        $__internal_5b2407e38a5206b0a399053707d63a3f5f9e03732ec0df3196bbfc353427bb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2407e38a5206b0a399053707d63a3f5f9e03732ec0df3196bbfc353427bb92->enter($__internal_5b2407e38a5206b0a399053707d63a3f5f9e03732ec0df3196bbfc353427bb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5b2407e38a5206b0a399053707d63a3f5f9e03732ec0df3196bbfc353427bb92->leave($__internal_5b2407e38a5206b0a399053707d63a3f5f9e03732ec0df3196bbfc353427bb92_prof);

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

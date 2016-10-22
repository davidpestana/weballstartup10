<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a898518d67b9dd289b87d5bba7d30051cf0344f1cb0f8d19c8a7f988fa7c2965 extends Twig_Template
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
        $__internal_71aebbd63040fa196aa11b6985e15dd8710c6152362b054a2091c1cd557be947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71aebbd63040fa196aa11b6985e15dd8710c6152362b054a2091c1cd557be947->enter($__internal_71aebbd63040fa196aa11b6985e15dd8710c6152362b054a2091c1cd557be947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_71aebbd63040fa196aa11b6985e15dd8710c6152362b054a2091c1cd557be947->leave($__internal_71aebbd63040fa196aa11b6985e15dd8710c6152362b054a2091c1cd557be947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}

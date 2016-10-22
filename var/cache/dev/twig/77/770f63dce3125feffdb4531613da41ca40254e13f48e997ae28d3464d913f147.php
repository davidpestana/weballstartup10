<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_48e80a5cedffb021feb51c89b1fba881705a6ec6ddac471ec93a15682557702c extends Twig_Template
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
        $__internal_d354d8480b5ab99d7ca966e9d497062b104c6e7cc4760607ac803d714ba7a3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d354d8480b5ab99d7ca966e9d497062b104c6e7cc4760607ac803d714ba7a3fd->enter($__internal_d354d8480b5ab99d7ca966e9d497062b104c6e7cc4760607ac803d714ba7a3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d354d8480b5ab99d7ca966e9d497062b104c6e7cc4760607ac803d714ba7a3fd->leave($__internal_d354d8480b5ab99d7ca966e9d497062b104c6e7cc4760607ac803d714ba7a3fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}

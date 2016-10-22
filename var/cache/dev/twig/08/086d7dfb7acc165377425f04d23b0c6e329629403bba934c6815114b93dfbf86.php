<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_34fc01c959dba834e3c1dd2f28aa277159433f6c865273a2b793d21cbb88322e extends Twig_Template
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
        $__internal_2c7455878b5d713639a4df1217e6156aacd84523b288068884196c86ae550c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7455878b5d713639a4df1217e6156aacd84523b288068884196c86ae550c37->enter($__internal_2c7455878b5d713639a4df1217e6156aacd84523b288068884196c86ae550c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2c7455878b5d713639a4df1217e6156aacd84523b288068884196c86ae550c37->leave($__internal_2c7455878b5d713639a4df1217e6156aacd84523b288068884196c86ae550c37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->widget(\$form) ?>
";
    }
}

<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3bcf3225af05fa5e39738b11496a8d74918ea8a2584cb8d8c00d5eb6ccb0b284 extends Twig_Template
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
        $__internal_5e21e042de5c730480be4e35e30b0aae3bed7f4a1d370a99ce43d5f077ccb35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e21e042de5c730480be4e35e30b0aae3bed7f4a1d370a99ce43d5f077ccb35e->enter($__internal_5e21e042de5c730480be4e35e30b0aae3bed7f4a1d370a99ce43d5f077ccb35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_5e21e042de5c730480be4e35e30b0aae3bed7f4a1d370a99ce43d5f077ccb35e->leave($__internal_5e21e042de5c730480be4e35e30b0aae3bed7f4a1d370a99ce43d5f077ccb35e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}

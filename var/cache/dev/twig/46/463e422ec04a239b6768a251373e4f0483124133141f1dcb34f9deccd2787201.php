<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_15a5553650a55bf218397e885e71e3853de563fc033ce208c12824dfa49ca1ee extends Twig_Template
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
        $__internal_9fa8611658f637e28c98b40fdea95bd79fcdf9cefc16378f48527cdea241c6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa8611658f637e28c98b40fdea95bd79fcdf9cefc16378f48527cdea241c6f0->enter($__internal_9fa8611658f637e28c98b40fdea95bd79fcdf9cefc16378f48527cdea241c6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9fa8611658f637e28c98b40fdea95bd79fcdf9cefc16378f48527cdea241c6f0->leave($__internal_9fa8611658f637e28c98b40fdea95bd79fcdf9cefc16378f48527cdea241c6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}

<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_207723f7f6e183f27aa703fc86de7f10a756b328feca1758b275765d1f5358e4 extends Twig_Template
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
        $__internal_ab18f13f2ac70985da362246f3576fc2f6a42edafe5124d774a0ba8097809ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab18f13f2ac70985da362246f3576fc2f6a42edafe5124d774a0ba8097809ec3->enter($__internal_ab18f13f2ac70985da362246f3576fc2f6a42edafe5124d774a0ba8097809ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_ab18f13f2ac70985da362246f3576fc2f6a42edafe5124d774a0ba8097809ec3->leave($__internal_ab18f13f2ac70985da362246f3576fc2f6a42edafe5124d774a0ba8097809ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}

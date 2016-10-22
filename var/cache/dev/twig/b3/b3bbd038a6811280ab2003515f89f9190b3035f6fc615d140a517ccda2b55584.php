<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_88756818a7d5a5aa55f3bcd5f19664830641ea96b31f0e88085496b550ecf7ae extends Twig_Template
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
        $__internal_4f8d9db74c8b7128904748a8bc40e5b354f94efcb429a2a4a1214bfb555f1cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8d9db74c8b7128904748a8bc40e5b354f94efcb429a2a4a1214bfb555f1cc9->enter($__internal_4f8d9db74c8b7128904748a8bc40e5b354f94efcb429a2a4a1214bfb555f1cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4f8d9db74c8b7128904748a8bc40e5b354f94efcb429a2a4a1214bfb555f1cc9->leave($__internal_4f8d9db74c8b7128904748a8bc40e5b354f94efcb429a2a4a1214bfb555f1cc9_prof);

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

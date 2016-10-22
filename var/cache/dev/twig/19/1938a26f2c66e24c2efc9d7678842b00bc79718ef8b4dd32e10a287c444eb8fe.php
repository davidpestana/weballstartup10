<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e0c48de7acac6efef0b2ff6fdeb8daca8b345030fa557ae075a3999a63c6c8dd extends Twig_Template
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
        $__internal_85425d828d03d894d31982ad7ac5814e32db06ea9f8efaabb83e3e3299bef3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85425d828d03d894d31982ad7ac5814e32db06ea9f8efaabb83e3e3299bef3e7->enter($__internal_85425d828d03d894d31982ad7ac5814e32db06ea9f8efaabb83e3e3299bef3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_85425d828d03d894d31982ad7ac5814e32db06ea9f8efaabb83e3e3299bef3e7->leave($__internal_85425d828d03d894d31982ad7ac5814e32db06ea9f8efaabb83e3e3299bef3e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}

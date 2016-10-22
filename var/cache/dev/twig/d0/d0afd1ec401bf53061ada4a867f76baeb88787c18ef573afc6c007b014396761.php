<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3ed188d9ca9079dbff11fc704a8717b16a2280408197fdd8617c7f99a96f1fe3 extends Twig_Template
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
        $__internal_659f647926639c341f31dc326cd93b931f3057092c9a224a8921cdd419ef3ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659f647926639c341f31dc326cd93b931f3057092c9a224a8921cdd419ef3ab2->enter($__internal_659f647926639c341f31dc326cd93b931f3057092c9a224a8921cdd419ef3ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_659f647926639c341f31dc326cd93b931f3057092c9a224a8921cdd419ef3ab2->leave($__internal_659f647926639c341f31dc326cd93b931f3057092c9a224a8921cdd419ef3ab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}

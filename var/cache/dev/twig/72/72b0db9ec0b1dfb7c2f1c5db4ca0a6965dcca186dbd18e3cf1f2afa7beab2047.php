<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d7105acebfaae426d0faa3cc66bf293bd00871b05e8b22210e931c484e9c22bf extends Twig_Template
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
        $__internal_1577c39c2852cfce3a4044fc0b994f6987c9a0cd899b5f72fa7063059011f7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1577c39c2852cfce3a4044fc0b994f6987c9a0cd899b5f72fa7063059011f7ab->enter($__internal_1577c39c2852cfce3a4044fc0b994f6987c9a0cd899b5f72fa7063059011f7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1577c39c2852cfce3a4044fc0b994f6987c9a0cd899b5f72fa7063059011f7ab->leave($__internal_1577c39c2852cfce3a4044fc0b994f6987c9a0cd899b5f72fa7063059011f7ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}

<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b1eab20484cd0c37b9a603bf9065abffb6e05c4e8d32d580ddf2456be654e17c extends Twig_Template
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
        $__internal_4b15405f725bdedd84b71a756c08ef629b08f013bb0d5caba53db5eb484a3610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b15405f725bdedd84b71a756c08ef629b08f013bb0d5caba53db5eb484a3610->enter($__internal_4b15405f725bdedd84b71a756c08ef629b08f013bb0d5caba53db5eb484a3610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4b15405f725bdedd84b71a756c08ef629b08f013bb0d5caba53db5eb484a3610->leave($__internal_4b15405f725bdedd84b71a756c08ef629b08f013bb0d5caba53db5eb484a3610_prof);

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

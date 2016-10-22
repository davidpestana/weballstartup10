<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_00adff0de6eb2abdadedc034bf14e45b3bd4069f7a4eb7d4c9b36cdabd742020 extends Twig_Template
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
        $__internal_4da80e662291c3464931ee9555e702eb6da67a113b0bdc3286ea4bdb5244b338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da80e662291c3464931ee9555e702eb6da67a113b0bdc3286ea4bdb5244b338->enter($__internal_4da80e662291c3464931ee9555e702eb6da67a113b0bdc3286ea4bdb5244b338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4da80e662291c3464931ee9555e702eb6da67a113b0bdc3286ea4bdb5244b338->leave($__internal_4da80e662291c3464931ee9555e702eb6da67a113b0bdc3286ea4bdb5244b338_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}

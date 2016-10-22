<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_19a5a6abb9060b0940335b079f693094d3016905704a5c1661a0c25a6fe4ae18 extends Twig_Template
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
        $__internal_88c6687288b7fbda660cc4b9f6fac50339bb56ed10478160b3f6c7852dfafb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c6687288b7fbda660cc4b9f6fac50339bb56ed10478160b3f6c7852dfafb76->enter($__internal_88c6687288b7fbda660cc4b9f6fac50339bb56ed10478160b3f6c7852dfafb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_88c6687288b7fbda660cc4b9f6fac50339bb56ed10478160b3f6c7852dfafb76->leave($__internal_88c6687288b7fbda660cc4b9f6fac50339bb56ed10478160b3f6c7852dfafb76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}

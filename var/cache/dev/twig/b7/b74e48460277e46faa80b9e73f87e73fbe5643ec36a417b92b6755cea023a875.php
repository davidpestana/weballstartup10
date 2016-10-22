<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b391902bc8eb644d432ec3f8a3b5fb57521bc59aa60b0ff449224ab6c46b6438 extends Twig_Template
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
        $__internal_659ae96472431b124bc30441aa571d0a778a274ae17dab2d58804d17bb113a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659ae96472431b124bc30441aa571d0a778a274ae17dab2d58804d17bb113a5c->enter($__internal_659ae96472431b124bc30441aa571d0a778a274ae17dab2d58804d17bb113a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_659ae96472431b124bc30441aa571d0a778a274ae17dab2d58804d17bb113a5c->leave($__internal_659ae96472431b124bc30441aa571d0a778a274ae17dab2d58804d17bb113a5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}

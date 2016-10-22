<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_048a8069a87d3f40154ceadf89aa00fa1bafce08574c926ea012268a48c04bb2 extends Twig_Template
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
        $__internal_0ae6a9843c9f5428e7ca7dd7b3a4c30460f79373837bb36f8cb552013ae72872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae6a9843c9f5428e7ca7dd7b3a4c30460f79373837bb36f8cb552013ae72872->enter($__internal_0ae6a9843c9f5428e7ca7dd7b3a4c30460f79373837bb36f8cb552013ae72872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0ae6a9843c9f5428e7ca7dd7b3a4c30460f79373837bb36f8cb552013ae72872->leave($__internal_0ae6a9843c9f5428e7ca7dd7b3a4c30460f79373837bb36f8cb552013ae72872_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}

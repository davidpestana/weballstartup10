<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cf5c7f98f2ae08ae56691e0841a9007ccf46336fd227a808d9c9f2df96d9a261 extends Twig_Template
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
        $__internal_2b2ab0df4ef4b61b1a26957859cb3567e616cb0d80bf85d84c59df8a0a1cecb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2ab0df4ef4b61b1a26957859cb3567e616cb0d80bf85d84c59df8a0a1cecb9->enter($__internal_2b2ab0df4ef4b61b1a26957859cb3567e616cb0d80bf85d84c59df8a0a1cecb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2b2ab0df4ef4b61b1a26957859cb3567e616cb0d80bf85d84c59df8a0a1cecb9->leave($__internal_2b2ab0df4ef4b61b1a26957859cb3567e616cb0d80bf85d84c59df8a0a1cecb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}

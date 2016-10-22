<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8e67e8754242d073547f0ce6840c916a9d18cb6030a018210451a559e967bb79 extends Twig_Template
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
        $__internal_32c8a3f23fa2c836c17dae29df49a29da9e2140dfcb8bc16a4afa72725d4f841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c8a3f23fa2c836c17dae29df49a29da9e2140dfcb8bc16a4afa72725d4f841->enter($__internal_32c8a3f23fa2c836c17dae29df49a29da9e2140dfcb8bc16a4afa72725d4f841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_32c8a3f23fa2c836c17dae29df49a29da9e2140dfcb8bc16a4afa72725d4f841->leave($__internal_32c8a3f23fa2c836c17dae29df49a29da9e2140dfcb8bc16a4afa72725d4f841_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}

<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b815f2ed3cab169adb2955e22d588be8faafd66d26970857c629104607469b74 extends Twig_Template
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
        $__internal_e97fa3d206a53f27137fd8cef86dce770b73f7fb4036fb193c1b8a7f6cb23168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97fa3d206a53f27137fd8cef86dce770b73f7fb4036fb193c1b8a7f6cb23168->enter($__internal_e97fa3d206a53f27137fd8cef86dce770b73f7fb4036fb193c1b8a7f6cb23168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e97fa3d206a53f27137fd8cef86dce770b73f7fb4036fb193c1b8a7f6cb23168->leave($__internal_e97fa3d206a53f27137fd8cef86dce770b73f7fb4036fb193c1b8a7f6cb23168_prof);

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

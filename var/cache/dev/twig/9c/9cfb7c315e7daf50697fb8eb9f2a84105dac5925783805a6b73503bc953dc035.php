<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_aa3cf3209748642fd32d1b0075e3d662a7affee39831148475793196a1859d7d extends Twig_Template
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
        $__internal_1cd33a29733a0b682438509123c04aa702a6b5f5aebc792b042f8d2fed3e6d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd33a29733a0b682438509123c04aa702a6b5f5aebc792b042f8d2fed3e6d0e->enter($__internal_1cd33a29733a0b682438509123c04aa702a6b5f5aebc792b042f8d2fed3e6d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1cd33a29733a0b682438509123c04aa702a6b5f5aebc792b042f8d2fed3e6d0e->leave($__internal_1cd33a29733a0b682438509123c04aa702a6b5f5aebc792b042f8d2fed3e6d0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}

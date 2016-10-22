<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c18087475e0aa81c1b55070c73689870f1336787964d63e86f223ea87e938219 extends Twig_Template
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
        $__internal_8bc3f3394e8b3be23bc70ec008ef257532c78842e25ffb84254d789e18b8695e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc3f3394e8b3be23bc70ec008ef257532c78842e25ffb84254d789e18b8695e->enter($__internal_8bc3f3394e8b3be23bc70ec008ef257532c78842e25ffb84254d789e18b8695e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8bc3f3394e8b3be23bc70ec008ef257532c78842e25ffb84254d789e18b8695e->leave($__internal_8bc3f3394e8b3be23bc70ec008ef257532c78842e25ffb84254d789e18b8695e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}

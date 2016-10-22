<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9a8201ab2aaa5e4b5221994fe39019e3ad6f02cdb827e80f4c5952d3270a89f4 extends Twig_Template
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
        $__internal_dd6cd65423166064e773bb7dfe3cb3ed73659433b44c380ff49ecceb8a2523ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6cd65423166064e773bb7dfe3cb3ed73659433b44c380ff49ecceb8a2523ae->enter($__internal_dd6cd65423166064e773bb7dfe3cb3ed73659433b44c380ff49ecceb8a2523ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dd6cd65423166064e773bb7dfe3cb3ed73659433b44c380ff49ecceb8a2523ae->leave($__internal_dd6cd65423166064e773bb7dfe3cb3ed73659433b44c380ff49ecceb8a2523ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}

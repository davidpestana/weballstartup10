<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_65db23dfb2b8da754428972f2de7afe9eaa292234992f46891e2f3a22621951c extends Twig_Template
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
        $__internal_1516b9a8dff0eded8850424d6aef2604761bfaee6d5a036caa4ed5c1a305fdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1516b9a8dff0eded8850424d6aef2604761bfaee6d5a036caa4ed5c1a305fdde->enter($__internal_1516b9a8dff0eded8850424d6aef2604761bfaee6d5a036caa4ed5c1a305fdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1516b9a8dff0eded8850424d6aef2604761bfaee6d5a036caa4ed5c1a305fdde->leave($__internal_1516b9a8dff0eded8850424d6aef2604761bfaee6d5a036caa4ed5c1a305fdde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}

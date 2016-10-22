<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e8f0e8a84a609401f8510df496e0b4e93b7d041ea60515c7008114ae19e72f77 extends Twig_Template
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
        $__internal_9741b3731a68507032e549dd0e4087c3f99afa96c34a0778605910eeed982a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9741b3731a68507032e549dd0e4087c3f99afa96c34a0778605910eeed982a75->enter($__internal_9741b3731a68507032e549dd0e4087c3f99afa96c34a0778605910eeed982a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9741b3731a68507032e549dd0e4087c3f99afa96c34a0778605910eeed982a75->leave($__internal_9741b3731a68507032e549dd0e4087c3f99afa96c34a0778605910eeed982a75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}

<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_36d3386861e3e21298fc7208330c942385dbe15dec9b9c4c214321d09dcc71cf extends Twig_Template
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
        $__internal_12954a65a5e0a7757ca69097952349c1707b76dceab987a16863f77699bd339e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12954a65a5e0a7757ca69097952349c1707b76dceab987a16863f77699bd339e->enter($__internal_12954a65a5e0a7757ca69097952349c1707b76dceab987a16863f77699bd339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_12954a65a5e0a7757ca69097952349c1707b76dceab987a16863f77699bd339e->leave($__internal_12954a65a5e0a7757ca69097952349c1707b76dceab987a16863f77699bd339e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}

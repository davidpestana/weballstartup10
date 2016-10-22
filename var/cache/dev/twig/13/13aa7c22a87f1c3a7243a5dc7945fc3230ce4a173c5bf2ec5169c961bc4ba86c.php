<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_16a92bfa317b4d085b3cac13fc2b2050b9b9a20173b945083df07b05abce383b extends Twig_Template
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
        $__internal_5574b770975ce35087a9851dfaf68a00451863a90de3aa7501c16b82eff2ba77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5574b770975ce35087a9851dfaf68a00451863a90de3aa7501c16b82eff2ba77->enter($__internal_5574b770975ce35087a9851dfaf68a00451863a90de3aa7501c16b82eff2ba77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5574b770975ce35087a9851dfaf68a00451863a90de3aa7501c16b82eff2ba77->leave($__internal_5574b770975ce35087a9851dfaf68a00451863a90de3aa7501c16b82eff2ba77_prof);

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

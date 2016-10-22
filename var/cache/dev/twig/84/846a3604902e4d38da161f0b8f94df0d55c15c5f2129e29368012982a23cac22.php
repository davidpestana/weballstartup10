<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_87223f3dc10210ed946c799e23fa3210c787a005e12c7be243450450eb445a88 extends Twig_Template
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
        $__internal_25a33537f13b3bec49ee81b4ad574d286cbd727576b68008060b4d7c704c1e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a33537f13b3bec49ee81b4ad574d286cbd727576b68008060b4d7c704c1e43->enter($__internal_25a33537f13b3bec49ee81b4ad574d286cbd727576b68008060b4d7c704c1e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_25a33537f13b3bec49ee81b4ad574d286cbd727576b68008060b4d7c704c1e43->leave($__internal_25a33537f13b3bec49ee81b4ad574d286cbd727576b68008060b4d7c704c1e43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}

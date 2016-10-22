<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ce090a98fcd939d154c7dca4a781d417b93829aa56fe00e48b2624a7fdc745ef extends Twig_Template
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
        $__internal_0e98a6b009e22338e64c07323105704535818ee8ce21100355d564034d65f406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e98a6b009e22338e64c07323105704535818ee8ce21100355d564034d65f406->enter($__internal_0e98a6b009e22338e64c07323105704535818ee8ce21100355d564034d65f406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0e98a6b009e22338e64c07323105704535818ee8ce21100355d564034d65f406->leave($__internal_0e98a6b009e22338e64c07323105704535818ee8ce21100355d564034d65f406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}

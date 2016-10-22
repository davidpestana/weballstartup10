<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4103f064976a0bf59f98211d79c87fa909080a2547988b2c701dec71892cb3ff extends Twig_Template
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
        $__internal_a255c474f6a7ce86f636fcdf37bd6801e583d77b02ce9bec41bd651e94f43484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a255c474f6a7ce86f636fcdf37bd6801e583d77b02ce9bec41bd651e94f43484->enter($__internal_a255c474f6a7ce86f636fcdf37bd6801e583d77b02ce9bec41bd651e94f43484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a255c474f6a7ce86f636fcdf37bd6801e583d77b02ce9bec41bd651e94f43484->leave($__internal_a255c474f6a7ce86f636fcdf37bd6801e583d77b02ce9bec41bd651e94f43484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}

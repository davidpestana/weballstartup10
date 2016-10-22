<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ec5daf2be528ddadd6f9b9ae54ef3a6e6f36e52c236fbbaa148a7dd59e3ef337 extends Twig_Template
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
        $__internal_0d6ca62aef458644675aa15daca8c9583436924a2b095a8efd8a3d19a0a932c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6ca62aef458644675aa15daca8c9583436924a2b095a8efd8a3d19a0a932c2->enter($__internal_0d6ca62aef458644675aa15daca8c9583436924a2b095a8efd8a3d19a0a932c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0d6ca62aef458644675aa15daca8c9583436924a2b095a8efd8a3d19a0a932c2->leave($__internal_0d6ca62aef458644675aa15daca8c9583436924a2b095a8efd8a3d19a0a932c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}

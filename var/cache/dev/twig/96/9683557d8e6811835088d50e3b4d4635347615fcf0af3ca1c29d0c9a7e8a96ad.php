<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8ac1bb079a23aebd8859f6b5bce6c0a6dce53e9c39a949e4902159e8f48bafe2 extends Twig_Template
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
        $__internal_549c7ad65154cbaab24efd2f797b06c06ae445881477c6e654b14893f537f461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549c7ad65154cbaab24efd2f797b06c06ae445881477c6e654b14893f537f461->enter($__internal_549c7ad65154cbaab24efd2f797b06c06ae445881477c6e654b14893f537f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_549c7ad65154cbaab24efd2f797b06c06ae445881477c6e654b14893f537f461->leave($__internal_549c7ad65154cbaab24efd2f797b06c06ae445881477c6e654b14893f537f461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}

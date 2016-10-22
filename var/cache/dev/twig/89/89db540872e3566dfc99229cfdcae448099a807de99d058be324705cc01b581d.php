<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1af9634b689c2e884b86ebc957c272b4bd7efc6dab3a79a04159370681dc37f extends Twig_Template
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
        $__internal_a7868efabb747fbcdac219f81e41c9d481ae0932d8e2174986d76a33aac8aaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7868efabb747fbcdac219f81e41c9d481ae0932d8e2174986d76a33aac8aaa3->enter($__internal_a7868efabb747fbcdac219f81e41c9d481ae0932d8e2174986d76a33aac8aaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a7868efabb747fbcdac219f81e41c9d481ae0932d8e2174986d76a33aac8aaa3->leave($__internal_a7868efabb747fbcdac219f81e41c9d481ae0932d8e2174986d76a33aac8aaa3_prof);

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

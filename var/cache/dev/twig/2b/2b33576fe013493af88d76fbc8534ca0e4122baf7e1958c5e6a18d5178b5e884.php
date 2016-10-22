<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0be4472d4e18a57a064b827491b3f5820f72502eeff1164e7f6f6f8b530dcfb7 extends Twig_Template
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
        $__internal_14c8bff598733f2a4399bb22e2582833984c9e0ce95fe742538bdd7c0a4e44c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c8bff598733f2a4399bb22e2582833984c9e0ce95fe742538bdd7c0a4e44c6->enter($__internal_14c8bff598733f2a4399bb22e2582833984c9e0ce95fe742538bdd7c0a4e44c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_14c8bff598733f2a4399bb22e2582833984c9e0ce95fe742538bdd7c0a4e44c6->leave($__internal_14c8bff598733f2a4399bb22e2582833984c9e0ce95fe742538bdd7c0a4e44c6_prof);

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

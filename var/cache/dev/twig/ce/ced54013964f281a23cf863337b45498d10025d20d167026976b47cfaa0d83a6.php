<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_691d055c5c3e83b04c04445cf46616d6fd3a4537af80a80bd431458c6dd96b45 extends Twig_Template
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
        $__internal_eadeb7197f2f805dd3bff6ae69a46223c220899bfa631aec7763222cbd45325c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadeb7197f2f805dd3bff6ae69a46223c220899bfa631aec7763222cbd45325c->enter($__internal_eadeb7197f2f805dd3bff6ae69a46223c220899bfa631aec7763222cbd45325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eadeb7197f2f805dd3bff6ae69a46223c220899bfa631aec7763222cbd45325c->leave($__internal_eadeb7197f2f805dd3bff6ae69a46223c220899bfa631aec7763222cbd45325c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}

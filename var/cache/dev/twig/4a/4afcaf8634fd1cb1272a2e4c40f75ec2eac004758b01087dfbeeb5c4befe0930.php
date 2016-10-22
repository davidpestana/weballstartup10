<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8e118c64a5b3b0cdd4ce958a79e82b7dd4fdf225e9ea303f6e405b24c9d1dc56 extends Twig_Template
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
        $__internal_4ca659fcdd42d084fa218fc176ddff92524799e666a7920744c2db3fe27394db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca659fcdd42d084fa218fc176ddff92524799e666a7920744c2db3fe27394db->enter($__internal_4ca659fcdd42d084fa218fc176ddff92524799e666a7920744c2db3fe27394db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4ca659fcdd42d084fa218fc176ddff92524799e666a7920744c2db3fe27394db->leave($__internal_4ca659fcdd42d084fa218fc176ddff92524799e666a7920744c2db3fe27394db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}

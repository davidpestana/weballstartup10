<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_4291d7bd6eda3ed11764a013dac7759ea9afba242aa6dd67ea6d3065b7733bae extends Twig_Template
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
        $__internal_4e636757a016437f68015013b2b434f52065da0183f07613f9ab74bab322a86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e636757a016437f68015013b2b434f52065da0183f07613f9ab74bab322a86f->enter($__internal_4e636757a016437f68015013b2b434f52065da0183f07613f9ab74bab322a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_4e636757a016437f68015013b2b434f52065da0183f07613f9ab74bab322a86f->leave($__internal_4e636757a016437f68015013b2b434f52065da0183f07613f9ab74bab322a86f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}

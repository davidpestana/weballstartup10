<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2a95f331629e5ecede9cf8961ef517a292c748da751de28a67aa2cdf2f0402dd extends Twig_Template
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
        $__internal_9abb3b093062e5e567e0a93c46fa9f1c383f6ae1cf8694b09796334bc0532b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abb3b093062e5e567e0a93c46fa9f1c383f6ae1cf8694b09796334bc0532b9c->enter($__internal_9abb3b093062e5e567e0a93c46fa9f1c383f6ae1cf8694b09796334bc0532b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9abb3b093062e5e567e0a93c46fa9f1c383f6ae1cf8694b09796334bc0532b9c->leave($__internal_9abb3b093062e5e567e0a93c46fa9f1c383f6ae1cf8694b09796334bc0532b9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}

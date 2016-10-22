<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_016b3e7861de05ae4df2e2b41880229c9fb846023166e5f0d4ae131d31e1c0a5 extends Twig_Template
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
        $__internal_ad4a5f74b82d9a0f5a1de5fa4bad7cda29e8e7d5119026ad85ecec23f123409b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4a5f74b82d9a0f5a1de5fa4bad7cda29e8e7d5119026ad85ecec23f123409b->enter($__internal_ad4a5f74b82d9a0f5a1de5fa4bad7cda29e8e7d5119026ad85ecec23f123409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ad4a5f74b82d9a0f5a1de5fa4bad7cda29e8e7d5119026ad85ecec23f123409b->leave($__internal_ad4a5f74b82d9a0f5a1de5fa4bad7cda29e8e7d5119026ad85ecec23f123409b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}

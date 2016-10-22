<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1f8f0085419b14cf8b28f784c8a6c5dcf248e528e249b0a572fbccd725208a5e extends Twig_Template
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
        $__internal_4b249634851f4ec7b0a3ac3d38455abedbde81fc022ab2fb8be5ef89a9923efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b249634851f4ec7b0a3ac3d38455abedbde81fc022ab2fb8be5ef89a9923efa->enter($__internal_4b249634851f4ec7b0a3ac3d38455abedbde81fc022ab2fb8be5ef89a9923efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4b249634851f4ec7b0a3ac3d38455abedbde81fc022ab2fb8be5ef89a9923efa->leave($__internal_4b249634851f4ec7b0a3ac3d38455abedbde81fc022ab2fb8be5ef89a9923efa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_daf7b6f68a47f478f811dfa7432af4f377a9c1468e8a85a655995d7cec3b5dd3 extends Twig_Template
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
        $__internal_8ff956416f89f877ac8c8d5fe8f0fdaa3d2a38e42ba84a99dd8368f0435bc787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff956416f89f877ac8c8d5fe8f0fdaa3d2a38e42ba84a99dd8368f0435bc787->enter($__internal_8ff956416f89f877ac8c8d5fe8f0fdaa3d2a38e42ba84a99dd8368f0435bc787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8ff956416f89f877ac8c8d5fe8f0fdaa3d2a38e42ba84a99dd8368f0435bc787->leave($__internal_8ff956416f89f877ac8c8d5fe8f0fdaa3d2a38e42ba84a99dd8368f0435bc787_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}

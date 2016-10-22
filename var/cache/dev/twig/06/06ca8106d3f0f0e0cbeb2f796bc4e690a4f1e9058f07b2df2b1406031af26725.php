<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cc8c740f7eca46c1643d1c3418b085e6cb894d3d5c4bb89e629dd75bc8949055 extends Twig_Template
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
        $__internal_87d5f8400ae428af31722bb883fe91990c4933018c40711d63be4d329e1002f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d5f8400ae428af31722bb883fe91990c4933018c40711d63be4d329e1002f4->enter($__internal_87d5f8400ae428af31722bb883fe91990c4933018c40711d63be4d329e1002f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_87d5f8400ae428af31722bb883fe91990c4933018c40711d63be4d329e1002f4->leave($__internal_87d5f8400ae428af31722bb883fe91990c4933018c40711d63be4d329e1002f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}

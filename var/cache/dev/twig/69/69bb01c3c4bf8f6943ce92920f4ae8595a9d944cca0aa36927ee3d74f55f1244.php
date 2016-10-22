<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ae31a8b110873ca00df7a0226baca096f4123220c044c2b47c59371737d6740e extends Twig_Template
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
        $__internal_bced36d932fbea28a5c961c9100021af889003a17d0dc573a762a584f97bc4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bced36d932fbea28a5c961c9100021af889003a17d0dc573a762a584f97bc4bb->enter($__internal_bced36d932fbea28a5c961c9100021af889003a17d0dc573a762a584f97bc4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bced36d932fbea28a5c961c9100021af889003a17d0dc573a762a584f97bc4bb->leave($__internal_bced36d932fbea28a5c961c9100021af889003a17d0dc573a762a584f97bc4bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}

<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d85f8007c3f87fca5407bbb9bfa2687bbdf76a297473d1a1901abf1210f8ea87 extends Twig_Template
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
        $__internal_93ff6082091e4560e02abe52f25df345dfdb46cd9df757166d119431842f1141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ff6082091e4560e02abe52f25df345dfdb46cd9df757166d119431842f1141->enter($__internal_93ff6082091e4560e02abe52f25df345dfdb46cd9df757166d119431842f1141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_93ff6082091e4560e02abe52f25df345dfdb46cd9df757166d119431842f1141->leave($__internal_93ff6082091e4560e02abe52f25df345dfdb46cd9df757166d119431842f1141_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}

<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_10634bb46484c20f7d3538c9e8038c8b17ac0f25345dd3e07499b8139c0df496 extends Twig_Template
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
        $__internal_24071bb6991113d35085c3de315b8b8ae93e8928190eb89d3768d5075bb71cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24071bb6991113d35085c3de315b8b8ae93e8928190eb89d3768d5075bb71cc8->enter($__internal_24071bb6991113d35085c3de315b8b8ae93e8928190eb89d3768d5075bb71cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_24071bb6991113d35085c3de315b8b8ae93e8928190eb89d3768d5075bb71cc8->leave($__internal_24071bb6991113d35085c3de315b8b8ae93e8928190eb89d3768d5075bb71cc8_prof);

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

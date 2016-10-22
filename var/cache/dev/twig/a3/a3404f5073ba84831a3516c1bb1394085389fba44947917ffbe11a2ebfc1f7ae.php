<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_45140b19a485b572137d94e70289558a5794a0a8a868abcd384c618d37b8451e extends Twig_Template
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
        $__internal_af1922b4f3ec005eb7ef4db16927e9a198a00587489cb2863c30a85b3b4c7fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1922b4f3ec005eb7ef4db16927e9a198a00587489cb2863c30a85b3b4c7fec->enter($__internal_af1922b4f3ec005eb7ef4db16927e9a198a00587489cb2863c30a85b3b4c7fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_af1922b4f3ec005eb7ef4db16927e9a198a00587489cb2863c30a85b3b4c7fec->leave($__internal_af1922b4f3ec005eb7ef4db16927e9a198a00587489cb2863c30a85b3b4c7fec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}

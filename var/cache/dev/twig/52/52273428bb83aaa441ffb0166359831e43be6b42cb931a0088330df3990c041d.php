<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_339b8b521340d0ed8f1074fdd7ae0997c6877e145cbc9a0580569c76d444e5fc extends Twig_Template
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
        $__internal_bf25b3e7983ecb6d568f2f3066edfbd9afbd7d40945d36d85c6d69fb29a9e171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf25b3e7983ecb6d568f2f3066edfbd9afbd7d40945d36d85c6d69fb29a9e171->enter($__internal_bf25b3e7983ecb6d568f2f3066edfbd9afbd7d40945d36d85c6d69fb29a9e171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bf25b3e7983ecb6d568f2f3066edfbd9afbd7d40945d36d85c6d69fb29a9e171->leave($__internal_bf25b3e7983ecb6d568f2f3066edfbd9afbd7d40945d36d85c6d69fb29a9e171_prof);

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

<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ce7ba97fec04b9bf3f7c3f7c2c94030ef2fcab25949ea94da87bc71465771ca1 extends Twig_Template
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
        $__internal_a76d4f167ff01bf47481e4c9b361e750de25e096ddd4b558533b18ffe0cbce36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76d4f167ff01bf47481e4c9b361e750de25e096ddd4b558533b18ffe0cbce36->enter($__internal_a76d4f167ff01bf47481e4c9b361e750de25e096ddd4b558533b18ffe0cbce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a76d4f167ff01bf47481e4c9b361e750de25e096ddd4b558533b18ffe0cbce36->leave($__internal_a76d4f167ff01bf47481e4c9b361e750de25e096ddd4b558533b18ffe0cbce36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}

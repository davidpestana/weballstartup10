<?php

/* PublicBundle:Modules:aboutusinfo.module.html.twig */
class __TwigTemplate_0908437e9edfe4146c17ccca3090a83f988f568b0a5a1fa568b4432b10fa5ba9 extends Twig_Template
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
        $__internal_3db2f3e538527cabc7bdaef17a5f138597518ecd061d48432ec0fff286337312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db2f3e538527cabc7bdaef17a5f138597518ecd061d48432ec0fff286337312->enter($__internal_3db2f3e538527cabc7bdaef17a5f138597518ecd061d48432ec0fff286337312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:aboutusinfo.module.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <img src=\"/img/pic-1.jpg\" class=\"img-responsive\" alt=\"\">
        <div class=\"divider-single\"></div>
        <h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_aboutusinfo_title_left", array(), "messages");
        echo "</h2>
        <div class=\"tiny-border\"></div>
        <p>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_aboutusinfo_parragraph_left", array(), "messages");
        echo "</p>

    </div>
    <div class=\"col-md-6\">
        <img src=\"/img/pic-2.jpg\" class=\"img-responsive\" alt=\"\">
        <div class=\"divider-single\"></div>
        <h2>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_aboutusinfo_title_right", array(), "messages");
        echo "</h2>
        <div class=\"tiny-border\"></div>
        <p>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_aboutusinfo_parragraph_right", array(), "messages");
        echo "</p>
   </div>
</div>
";
        
        $__internal_3db2f3e538527cabc7bdaef17a5f138597518ecd061d48432ec0fff286337312->leave($__internal_3db2f3e538527cabc7bdaef17a5f138597518ecd061d48432ec0fff286337312_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:aboutusinfo.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  42 => 13,  33 => 7,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">
    <div class=\"col-md-6\">
        <img src=\"/img/pic-1.jpg\" class=\"img-responsive\" alt=\"\">
        <div class=\"divider-single\"></div>
        <h2>{% trans %}_aboutusinfo_title_left{% endtrans %}</h2>
        <div class=\"tiny-border\"></div>
        <p>{% trans %}_aboutusinfo_parragraph_left{% endtrans %}</p>

    </div>
    <div class=\"col-md-6\">
        <img src=\"/img/pic-2.jpg\" class=\"img-responsive\" alt=\"\">
        <div class=\"divider-single\"></div>
        <h2>{% trans %}_aboutusinfo_title_right{% endtrans %}</h2>
        <div class=\"tiny-border\"></div>
        <p>{% trans %}_aboutusinfo_parragraph_right{% endtrans %}</p>
   </div>
</div>
";
    }
}

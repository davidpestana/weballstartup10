<?php

/* PublicBundle:Modules:steps.module.html.twig */
class __TwigTemplate_19f38148d58c26068038781661096f1d1619ee811b0c131e26ba2ddb89944fd2 extends Twig_Template
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
        $__internal_ff9bd3679cf0cb3a6c452ff6a162944b7e28dae81401c55575aedfb437413b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9bd3679cf0cb3a6c452ff6a162944b7e28dae81401c55575aedfb437413b28->enter($__internal_ff9bd3679cf0cb3a6c452ff6a162944b7e28dae81401c55575aedfb437413b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:steps.module.html.twig"));

        // line 1
        echo "<div class=\"col-md-12 bg-grey\" >
  <div class=\"divider-single\"></div>

    <div class=\"text-center\">
        <h2 class=\"wow fadeInUp\" data-wow-delay=\"0\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_title", array(), "messages");
        echo "</h2>
        <div class=\"small-border wow flipInY\" data-wow-delay=\".2s\" data-wow-duration=\".8s\"></div>
    </div>

    <div class=\"divider-single\"></div>


    <div class=\"col-md-3\">
        <div class=\"steps\">
            <h1><span class=\"circle wow fadeInUp\">1</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".2s\">
                <h3>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_1", array(), "messages");
        echo "</h3>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"steps\">
          <h1><span class=\"circle wow fadeInUp\">2</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".4s\">
                <h3>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_2", array(), "messages");
        echo "</h3>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"steps\">
          <h1><span class=\"circle wow fadeInUp\">3</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".6s\">
                <h3>";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_3", array(), "messages");
        echo "</h3>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"steps\">
          <h1><span class=\"circle wow fadeInUp\">4</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".8s\">
                <h3>";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_4", array(), "messages");
        echo "</h3>
            </div>
        </div>
    </div>

    <div class=\"divider-single\"></div>

</div>
";
        
        $__internal_ff9bd3679cf0cb3a6c452ff6a162944b7e28dae81401c55575aedfb437413b28->leave($__internal_ff9bd3679cf0cb3a6c452ff6a162944b7e28dae81401c55575aedfb437413b28_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:steps.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  65 => 33,  54 => 25,  42 => 16,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-md-12 bg-grey\" >
  <div class=\"divider-single\"></div>

    <div class=\"text-center\">
        <h2 class=\"wow fadeInUp\" data-wow-delay=\"0\">{% trans %}_steps_title{% endtrans %}</h2>
        <div class=\"small-border wow flipInY\" data-wow-delay=\".2s\" data-wow-duration=\".8s\"></div>
    </div>

    <div class=\"divider-single\"></div>


    <div class=\"col-md-3\">
        <div class=\"steps\">
            <h1><span class=\"circle wow fadeInUp\">1</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".2s\">
                <h3>{% trans %}_steps_1{% endtrans %}</h3>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"steps\">
          <h1><span class=\"circle wow fadeInUp\">2</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".4s\">
                <h3>{% trans %}_steps_2{% endtrans %}</h3>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"steps\">
          <h1><span class=\"circle wow fadeInUp\">3</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".6s\">
                <h3>{% trans %}_steps_3{% endtrans %}</h3>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"steps\">
          <h1><span class=\"circle wow fadeInUp\">4</span></h1>
            <div class=\"text wow fadeInUp\" data-wow-delay=\".8s\">
                <h3>{% trans %}_steps_4{% endtrans %}</h3>
            </div>
        </div>
    </div>

    <div class=\"divider-single\"></div>

</div>
";
    }
}

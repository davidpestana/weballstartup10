<?php

/* WebSiteBundle:Modules:steps.module.html.twig */
class __TwigTemplate_7024326c0e31fcb837cc942aabde459cf45b358f44dcf762c56a1d920d1fee8a extends Twig_Template
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
        $__internal_87afb071d32be466fe4434761477b31a39081a8a23aeedd757869af38a381386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87afb071d32be466fe4434761477b31a39081a8a23aeedd757869af38a381386->enter($__internal_87afb071d32be466fe4434761477b31a39081a8a23aeedd757869af38a381386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Modules:steps.module.html.twig"));

        // line 1
        echo "<div id=\"knowmore\" class=\"container clearfix topmargin-lg bottommargin-lg\">
    <h3 class=\"center\">";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_title", array(), "messages");
        echo "</h3>

    <div id=\"processTabs\">
      <ul class=\"process-steps bottommargin clearfix\">
        <li>
          <a href=\"#ptab1\" class=\"i-circled i-bordered i-alt divcenter\">1</a>
          <h5>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_1", array(), "messages");
        echo "</h5>
        </li>
        <li>
          <a href=\"#ptab2\" class=\"i-circled i-bordered i-alt divcenter\">2</a>
          <h5>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_2", array(), "messages");
        echo "</h5>
        </li>
        <li>
          <a href=\"#ptab3\" class=\"i-circled i-bordered i-alt divcenter\">3</a>
          <h5>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_3", array(), "messages");
        echo "</h5>
        </li>
        <li>
          <a href=\"#ptab4\" class=\"i-circled i-bordered i-alt divcenter\">4</a>
          <h5>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_steps_4", array(), "messages");
        // line 21
        echo "      </ul>
    </div>
</div>
";
        
        $__internal_87afb071d32be466fe4434761477b31a39081a8a23aeedd757869af38a381386->leave($__internal_87afb071d32be466fe4434761477b31a39081a8a23aeedd757869af38a381386_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Modules:steps.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  55 => 20,  48 => 16,  41 => 12,  34 => 8,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"knowmore\" class=\"container clearfix topmargin-lg bottommargin-lg\">
    <h3 class=\"center\">{% trans %} _steps_title{% endtrans %}</h3>

    <div id=\"processTabs\">
      <ul class=\"process-steps bottommargin clearfix\">
        <li>
          <a href=\"#ptab1\" class=\"i-circled i-bordered i-alt divcenter\">1</a>
          <h5>{% trans %} _steps_1{% endtrans %}</h5>
        </li>
        <li>
          <a href=\"#ptab2\" class=\"i-circled i-bordered i-alt divcenter\">2</a>
          <h5>{% trans %} _steps_2{% endtrans %}</h5>
        </li>
        <li>
          <a href=\"#ptab3\" class=\"i-circled i-bordered i-alt divcenter\">3</a>
          <h5>{% trans %} _steps_3{% endtrans %}</h5>
        </li>
        <li>
          <a href=\"#ptab4\" class=\"i-circled i-bordered i-alt divcenter\">4</a>
          <h5>{% trans %} _steps_4{% endtrans %}
      </ul>
    </div>
</div>
";
    }
}

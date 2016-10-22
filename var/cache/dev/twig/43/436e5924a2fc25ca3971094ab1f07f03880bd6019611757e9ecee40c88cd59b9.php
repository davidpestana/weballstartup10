<?php

/* WebSiteBundle:Modules:target.module.html.twig */
class __TwigTemplate_f6537e27b64203b8a3bc8deaebb7765ebdbd1f81b5cb1ac360c297eec735003f extends Twig_Template
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
        $__internal_d974dba471f725c7d2ba381c7cf81f5930fb505f84aa6393b2ce14bc71c4dd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d974dba471f725c7d2ba381c7cf81f5930fb505f84aa6393b2ce14bc71c4dd05->enter($__internal_d974dba471f725c7d2ba381c7cf81f5930fb505f84aa6393b2ce14bc71c4dd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Modules:target.module.html.twig"));

        // line 1
        echo "<div class=\"container clearfix\">
  <div class=\"row clearfix\">

    <div class=\"col-lg-5\">
      <div class=\"heading-block topmargin\">
        <h1>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_target_title", array(), "messages");
        echo "</h1>
      </div>
      <p class=\"lead\">";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_target_parragraph", array(), "messages");
        echo "</p>
    </div>

    <div class=\"col-lg-7\">

      <div style=\"position: relative; margin-bottom: -60px;\" class=\"ohidden\" data-height-lg=\"426\" data-height-md=\"567\" data-height-sm=\"470\" data-height-xs=\"287\" data-height-xxs=\"183\">
        <img src=\"/WebSiteBundle/images/services/main-fbrowser.png\" style=\"position: absolute; top: 0; left: 0;\" data-animate=\"fadeInUp\" data-delay=\"100\" alt=\"Chrome\">
        <img src=\"/WebSiteBundle/images/services/main-fmobile.png\" style=\"position: absolute; top: 0; left: 0;\" data-animate=\"fadeInUp\" data-delay=\"400\" alt=\"iPad\">
      </div>

    </div>

  </div>
</div>
";
        
        $__internal_d974dba471f725c7d2ba381c7cf81f5930fb505f84aa6393b2ce14bc71c4dd05->leave($__internal_d974dba471f725c7d2ba381c7cf81f5930fb505f84aa6393b2ce14bc71c4dd05_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Modules:target.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  29 => 6,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container clearfix\">
  <div class=\"row clearfix\">

    <div class=\"col-lg-5\">
      <div class=\"heading-block topmargin\">
        <h1>{% trans %} _target_title{% endtrans %}</h1>
      </div>
      <p class=\"lead\">{% trans %} _target_parragraph{% endtrans %}</p>
    </div>

    <div class=\"col-lg-7\">

      <div style=\"position: relative; margin-bottom: -60px;\" class=\"ohidden\" data-height-lg=\"426\" data-height-md=\"567\" data-height-sm=\"470\" data-height-xs=\"287\" data-height-xxs=\"183\">
        <img src=\"/WebSiteBundle/images/services/main-fbrowser.png\" style=\"position: absolute; top: 0; left: 0;\" data-animate=\"fadeInUp\" data-delay=\"100\" alt=\"Chrome\">
        <img src=\"/WebSiteBundle/images/services/main-fmobile.png\" style=\"position: absolute; top: 0; left: 0;\" data-animate=\"fadeInUp\" data-delay=\"400\" alt=\"iPad\">
      </div>

    </div>

  </div>
</div>
";
    }
}

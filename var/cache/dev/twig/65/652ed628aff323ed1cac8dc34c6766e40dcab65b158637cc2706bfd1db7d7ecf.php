<?php

/* WebSiteBundle:Modules:steps.module.html.twig */
class __TwigTemplate_7ac82d062fc4e2a105c1baf7764fc8d7e943bc0ea90f50c43618ff5586e5c9a1 extends Twig_Template
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
        $__internal_9c500fbc004c891c498e68e01f35969d3643622d0d13b8b50713dbe86857d0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c500fbc004c891c498e68e01f35969d3643622d0d13b8b50713dbe86857d0ff->enter($__internal_9c500fbc004c891c498e68e01f35969d3643622d0d13b8b50713dbe86857d0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Modules:steps.module.html.twig"));

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
        
        $__internal_9c500fbc004c891c498e68e01f35969d3643622d0d13b8b50713dbe86857d0ff->leave($__internal_9c500fbc004c891c498e68e01f35969d3643622d0d13b8b50713dbe86857d0ff_prof);

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

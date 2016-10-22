<?php

/* WebSiteBundle:Forms:lead.form.html.twig */
class __TwigTemplate_6acf241f6784c84a94e547d2005903399d755fd8d8d7987f5610964db1464b03 extends Twig_Template
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
        $__internal_cca0ddf2433a27d1e0b2a1b7e9e89240371afa0b1a6c24b54916bd25fc7d2d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca0ddf2433a27d1e0b2a1b7e9e89240371afa0b1a6c24b54916bd25fc7d2d4b->enter($__internal_cca0ddf2433a27d1e0b2a1b7e9e89240371afa0b1a6c24b54916bd25fc7d2d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Forms:lead.form.html.twig"));

        // line 1
        echo "<div class=\"container clearfix\">

  <div class=\"modal1 mfp-hide\" id=\"modal-login-form\">
    <div class=\"block divcenter col-padding\" style=\"background-color: #FFF; max-width: 800px;\">
      <h4 class=\"uppercase ls1\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_lead_form_title", array(), "messages");
        echo "</h4>
      <p>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_lead_form_subtitle", array(), "messages");
        echo "</p>
      ";
        // line 7
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "WebSiteBundle:Forms:lead.theme.html.twig"));
        // line 8
        echo "      ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      <div class=\"col_full nobottommargin\">
        <div class=\"row\">
          <div class=\"col-xs-6\">
            <button type=\"submit\" class=\"button button-rounded button-small button-dark nomargin\" value=\"submit\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_lead_form_button", array(), "messages");
        echo "</button>
          </div>
        </div>
      </div>
      ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>

  <div class=\"modal2 mfp-hide\" id=\"modal-login-form_success\">
    <div class=\"block divcenter col-padding\" style=\"background-color: #FFF; max-width: 800px;\">
      <h4 class=\"uppercase ls1\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_lead_form_thankyou_title", array(), "messages");
        echo "</h4>
      <p>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_lead_form_thankyou_parragrahp", array(), "messages");
        echo "</p>

    </div>
  </div>

</div>
";
        
        $__internal_cca0ddf2433a27d1e0b2a1b7e9e89240371afa0b1a6c24b54916bd25fc7d2d4b->leave($__internal_cca0ddf2433a27d1e0b2a1b7e9e89240371afa0b1a6c24b54916bd25fc7d2d4b_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Forms:lead.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  66 => 23,  57 => 17,  50 => 13,  43 => 9,  38 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container clearfix\">

  <div class=\"modal1 mfp-hide\" id=\"modal-login-form\">
    <div class=\"block divcenter col-padding\" style=\"background-color: #FFF; max-width: 800px;\">
      <h4 class=\"uppercase ls1\">{% trans %}_lead_form_title{% endtrans %}</h4>
      <p>{% trans %}_lead_form_subtitle{% endtrans %}</p>
      {% form_theme form 'WebSiteBundle:Forms:lead.theme.html.twig' %}
      {{ form_start(form) }}
      {{ form_widget(form) }}
      <div class=\"col_full nobottommargin\">
        <div class=\"row\">
          <div class=\"col-xs-6\">
            <button type=\"submit\" class=\"button button-rounded button-small button-dark nomargin\" value=\"submit\">{% trans %}_lead_form_button{% endtrans %}</button>
          </div>
        </div>
      </div>
      {{ form_end(form) }}
    </div>
  </div>

  <div class=\"modal2 mfp-hide\" id=\"modal-login-form_success\">
    <div class=\"block divcenter col-padding\" style=\"background-color: #FFF; max-width: 800px;\">
      <h4 class=\"uppercase ls1\">{% trans %}_lead_form_thankyou_title{% endtrans %}</h4>
      <p>{% trans %}_lead_form_thankyou_parragrahp{% endtrans %}</p>

    </div>
  </div>

</div>
";
    }
}

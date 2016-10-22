<?php

/* WebSiteBundle:Forms:footer.form.html.twig */
class __TwigTemplate_29c516553a6584eaea0d8525039dfe262a30d367ac1d5f0e1b829891899c07fb extends Twig_Template
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
        $__internal_69938b59aa54cffb0c308bf9c688a2edc17fcdffae4d0f827ee7e0c01038504b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69938b59aa54cffb0c308bf9c688a2edc17fcdffae4d0f827ee7e0c01038504b->enter($__internal_69938b59aa54cffb0c308bf9c688a2edc17fcdffae4d0f827ee7e0c01038504b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Forms:footer.form.html.twig"));

        // line 1
        echo "<div class=\"widget quick-contact-widget clearfix\">

  <h4>";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_sendmessage", array(), "messages");
        echo "</h4>

  <div class=\"quick-contact-form-result\"></div>
  ";
        // line 6
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "WebSiteBundle:Forms:footer.theme.html.twig"));
        // line 7
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "quick-contact-form nobottommargin")));
        echo "
  <div class=\"form-process\"></div>
  ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  <button type=\"submit\" id=\"quick-contact-form-submit\" name=\"quick-contact-form-submit\" class=\"btn btn-danger nomargin\" value=\"submit\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_sendmessage_button", array(), "messages");
        echo "</button>
  ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_69938b59aa54cffb0c308bf9c688a2edc17fcdffae4d0f827ee7e0c01038504b->leave($__internal_69938b59aa54cffb0c308bf9c688a2edc17fcdffae4d0f827ee7e0c01038504b_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Forms:footer.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  44 => 10,  40 => 9,  34 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"widget quick-contact-widget clearfix\">

  <h4>{% trans %}_footer_sendmessage{% endtrans %}</h4>

  <div class=\"quick-contact-form-result\"></div>
  {% form_theme form 'WebSiteBundle:Forms:footer.theme.html.twig' %}
  {{ form_start(form,{'attr': {'class': 'quick-contact-form nobottommargin'}}) }}
  <div class=\"form-process\"></div>
  {{ form_widget(form) }}
  <button type=\"submit\" id=\"quick-contact-form-submit\" name=\"quick-contact-form-submit\" class=\"btn btn-danger nomargin\" value=\"submit\">{% trans %}_footer_sendmessage_button{% endtrans %}</button>
  {{ form_end(form) }}

</div>
";
    }
}

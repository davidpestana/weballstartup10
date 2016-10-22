<?php

/* PublicBundle:Modules:welcome.module.html.twig */
class __TwigTemplate_5b35cd3c38c7b00a0507115a11d0205e80f24881860c547783fcb80c7c57cf2d extends Twig_Template
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
        $__internal_6e9a3d7bf59b2d41035bf64949c245396ee5ae913f5274847932f41306524c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9a3d7bf59b2d41035bf64949c245396ee5ae913f5274847932f41306524c38->enter($__internal_6e9a3d7bf59b2d41035bf64949c245396ee5ae913f5274847932f41306524c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:welcome.module.html.twig"));

        // line 1
        echo "<!-- section begin -->
      <section id=\"section-intro\" class=\"no-padding autoheight light-text let-it-snow\" data-stellar-background-ratio=\"0.5\">
          <div class=\"center-y\">
              <div class=\"inner text-center\">
                  <div class=\"sub-intro-text\"><span class=\"text-white\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_motto", array(), "messages");
        echo "</span></div>
                  <div class=\"divider-double\"></div>
                  <div class=\"type-wrap title big\">
                      <div class=\"typed-strings\">
                          <p>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_typemessage_first", array(), "messages");
        echo "</p>
                          <p>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_typemessage_second", array(), "messages");
        echo "</p>
                          <p>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_typemessage_third", array(), "messages");
        echo "</p>
                      </div>
                      <span class=\"typed\"></span>
                  </div>

      <div class=\"divider-single\"></div>

                  <div class=\"divider-double\"></div>
              </div>
          </div>
      </section>
<!-- section close -->
";
        
        $__internal_6e9a3d7bf59b2d41035bf64949c245396ee5ae913f5274847932f41306524c38->leave($__internal_6e9a3d7bf59b2d41035bf64949c245396ee5ae913f5274847932f41306524c38_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:welcome.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 10,  35 => 9,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- section begin -->
      <section id=\"section-intro\" class=\"no-padding autoheight light-text let-it-snow\" data-stellar-background-ratio=\"0.5\">
          <div class=\"center-y\">
              <div class=\"inner text-center\">
                  <div class=\"sub-intro-text\"><span class=\"text-white\">{% trans %} _welcome_motto{% endtrans %}</span></div>
                  <div class=\"divider-double\"></div>
                  <div class=\"type-wrap title big\">
                      <div class=\"typed-strings\">
                          <p>{% trans %} _welcome_typemessage_first{% endtrans %}</p>
                          <p>{% trans %} _welcome_typemessage_second{% endtrans %}</p>
                          <p>{% trans %} _welcome_typemessage_third{% endtrans %}</p>
                      </div>
                      <span class=\"typed\"></span>
                  </div>

      <div class=\"divider-single\"></div>

                  <div class=\"divider-double\"></div>
              </div>
          </div>
      </section>
<!-- section close -->
";
    }
}

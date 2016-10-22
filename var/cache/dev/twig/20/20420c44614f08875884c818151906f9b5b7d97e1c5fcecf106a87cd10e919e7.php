<?php

/* PublicBundle:Modules:welcome.module.html.twig */
class __TwigTemplate_d586f59a60638fd4d4f16a8a08c26f13b0ea477004e199a4bfd00bcaa5b38b66 extends Twig_Template
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
        $__internal_26e4e766ba3a961aee2fa7bed7f3be494f04d201a14a2a90c83f3ca4cf071b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e4e766ba3a961aee2fa7bed7f3be494f04d201a14a2a90c83f3ca4cf071b76->enter($__internal_26e4e766ba3a961aee2fa7bed7f3be494f04d201a14a2a90c83f3ca4cf071b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:welcome.module.html.twig"));

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
      <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_comingsoon");
        echo "\" class=\"btn-custom\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_main_cta", array(), "messages");
        echo "</a>
                  <div class=\"divider-double\"></div>
              </div>
          </div>
      </section>
<!-- section close -->
";
        
        $__internal_26e4e766ba3a961aee2fa7bed7f3be494f04d201a14a2a90c83f3ca4cf071b76->leave($__internal_26e4e766ba3a961aee2fa7bed7f3be494f04d201a14a2a90c83f3ca4cf071b76_prof);

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
        return array (  52 => 17,  43 => 11,  39 => 10,  35 => 9,  28 => 5,  22 => 1,);
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
      <a href=\"{{ path('public_default_comingsoon') }}\" class=\"btn-custom\">{% trans %} _welcome_main_cta{% endtrans %}</a>
                  <div class=\"divider-double\"></div>
              </div>
          </div>
      </section>
<!-- section close -->
";
    }
}

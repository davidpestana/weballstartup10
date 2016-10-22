<?php

/* PublicBundle:Modules:welcome.module.html.twig */
class __TwigTemplate_0c9f9ed07634763df9feb3aa68c0f22e1746ab562d09f4d3a738c4a35ef1bf45 extends Twig_Template
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
        // line 1
        echo "<!-- section begin -->
      <section id=\"section-intro-2\" class=\"no-padding autoheight light-text let-it-snow\" data-stellar-background-ratio=\"0.5\">
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
      <a href=\"#\" class=\"btn-custom\"><p>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_main_cta", array(), "messages");
        echo "</p></a>
                  <div class=\"divider-double\"></div>
              </div>
          </div>
      </section>
<!-- section close -->
";
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
        return array (  49 => 17,  40 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

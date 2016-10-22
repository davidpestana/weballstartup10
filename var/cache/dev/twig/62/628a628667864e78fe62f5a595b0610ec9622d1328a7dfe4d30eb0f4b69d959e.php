<?php

/* WebSiteBundle:Modules:welcome.module.html.twig */
class __TwigTemplate_74e1af9b5b77b6a199630ac7402feb0307e5319f6fef1bc8f2782e40df5ee887 extends Twig_Template
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
        $__internal_ddc70538b49d577d35824e05e65757bce3e0e73b66ddafe2bfe8a668178b56b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc70538b49d577d35824e05e65757bce3e0e73b66ddafe2bfe8a668178b56b0->enter($__internal_ddc70538b49d577d35824e05e65757bce3e0e73b66ddafe2bfe8a668178b56b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Modules:welcome.module.html.twig"));

        // line 1
        echo "<section id=\"slider\" class=\"slider-parallax swiper_wrapper full-screen clearfix\" data-autoplay=\"8000\">
  <div class=\"slider-parallax-inner\">

    <div class=\"swiper-container swiper-parent\">
      <div class=\"swiper-wrapper\">

        <div class=\"swiper-slide\" style=\"background-image: url('/WebSiteBundle/images/slider/rev/ken-2.jpg');\">
          <div class=\"container clearfix\">
            <div class=\"slider-caption slider-caption-center\">
              <h2 data-caption-animate=\"fadeInUp\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_slide1_title", array(), "messages");
        echo "</h2>
              <p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">
                  ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_slide1_parragraph", array(), "messages");
        // line 13
        echo "              </p>
              <a href=\"#modal-login-form\" data-lightbox=\"inline\" class=\"button button-rounded button-reveal button-large button-dirtygreen\"><i class=\"icon-map-marker2\"></i><span>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_slide1_cta1", array(), "messages");
        echo "</span></a>

              <a href=\"#modal-login-form2\" data-lightbox=\"inline\" class=\"button button-rounded button-reveal button-large button-dirtygreen\"><i class=\"icon-map-marker2\"></i><span>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_slide1_cta2", array(), "messages");
        echo "</span></a>
            </div>
          </div>
        </div>

        <div class=\"swiper-slide dark\">
          <div class=\"container clearfix\">
            <div class=\"slider-caption slider-caption-center\">
              <h2 data-caption-animate=\"fadeInUp\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_slide2_title", array(), "messages");
        echo "</h2>
              <p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">
                  ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_slide2_parragraph", array(), "messages");
        // line 27
        echo "              </p>
              <a href=\"#modal-login-form\" data-lightbox=\"inline\" class=\"button button-rounded button-reveal button-large button-dirtygreen\"><i class=\"icon-map-marker2\"></i><span>";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_welcome_slide2_cta", array(), "messages");
        echo "</span></a>

            </div>
          </div>
          <div class=\"video-wrap\">
            <video id=\"slide-video\" poster=\"/WebSiteBundle/images/videos/explore.jpg\" preload=\"auto\" loop autoplay muted>
              <source src='/WebSiteBundle/images/videos/explore.webm' type='video/webm' />
              <source src='/WebSiteBundle/images/videos/explore.mp4' type='video/mp4' />
            </video>
            <div class=\"video-overlay\" style=\"background-color: rgba(0,0,0,0.55);\"></div>
          </div>
        </div>

    <a href=\"#\" data-scrollto=\"#content\" data-offset=\"100\" class=\"dark one-page-arrow\"><i class=\"icon-angle-down infinite animated fadeInDown\"></i></a>

  </div>
</section>
";
        
        $__internal_ddc70538b49d577d35824e05e65757bce3e0e73b66ddafe2bfe8a668178b56b0->leave($__internal_ddc70538b49d577d35824e05e65757bce3e0e73b66ddafe2bfe8a668178b56b0_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Modules:welcome.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  66 => 27,  64 => 26,  59 => 24,  48 => 16,  43 => 14,  40 => 13,  38 => 12,  33 => 10,  22 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"slider\" class=\"slider-parallax swiper_wrapper full-screen clearfix\" data-autoplay=\"8000\">
  <div class=\"slider-parallax-inner\">

    <div class=\"swiper-container swiper-parent\">
      <div class=\"swiper-wrapper\">

        <div class=\"swiper-slide\" style=\"background-image: url('/WebSiteBundle/images/slider/rev/ken-2.jpg');\">
          <div class=\"container clearfix\">
            <div class=\"slider-caption slider-caption-center\">
              <h2 data-caption-animate=\"fadeInUp\">{% trans %} _welcome_slide1_title{% endtrans %}</h2>
              <p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">
                  {% trans %} _welcome_slide1_parragraph{% endtrans %}
              </p>
              <a href=\"#modal-login-form\" data-lightbox=\"inline\" class=\"button button-rounded button-reveal button-large button-dirtygreen\"><i class=\"icon-map-marker2\"></i><span>{% trans %} _welcome_slide1_cta1{% endtrans %}</span></a>

              <a href=\"#modal-login-form2\" data-lightbox=\"inline\" class=\"button button-rounded button-reveal button-large button-dirtygreen\"><i class=\"icon-map-marker2\"></i><span>{% trans %} _welcome_slide1_cta2{% endtrans %}</span></a>
            </div>
          </div>
        </div>

        <div class=\"swiper-slide dark\">
          <div class=\"container clearfix\">
            <div class=\"slider-caption slider-caption-center\">
              <h2 data-caption-animate=\"fadeInUp\">{% trans %} _welcome_slide2_title{% endtrans %}</h2>
              <p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">
                  {% trans %} _welcome_slide2_parragraph{% endtrans %}
              </p>
              <a href=\"#modal-login-form\" data-lightbox=\"inline\" class=\"button button-rounded button-reveal button-large button-dirtygreen\"><i class=\"icon-map-marker2\"></i><span>{% trans %} _welcome_slide2_cta{% endtrans %}</span></a>

            </div>
          </div>
          <div class=\"video-wrap\">
            <video id=\"slide-video\" poster=\"/WebSiteBundle/images/videos/explore.jpg\" preload=\"auto\" loop autoplay muted>
              <source src='/WebSiteBundle/images/videos/explore.webm' type='video/webm' />
              <source src='/WebSiteBundle/images/videos/explore.mp4' type='video/mp4' />
            </video>
            <div class=\"video-overlay\" style=\"background-color: rgba(0,0,0,0.55);\"></div>
          </div>
        </div>

    <a href=\"#\" data-scrollto=\"#content\" data-offset=\"100\" class=\"dark one-page-arrow\"><i class=\"icon-angle-down infinite animated fadeInDown\"></i></a>

  </div>
</section>
";
    }
}

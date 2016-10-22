<?php

/* PublicBundle:Modules:workwithusinfo.module.html.twig */
class __TwigTemplate_1ec1fc738878ccfe750e244ac3c0d65fb417debe691ebcbf597aaf9ed3cc50cd extends Twig_Template
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
        $__internal_afc7275d1d7e58ac5d0496abc1ebfffc83e3b97f1f2d41a325dd823ad07d99ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc7275d1d7e58ac5d0496abc1ebfffc83e3b97f1f2d41a325dd823ad07d99ad->enter($__internal_afc7275d1d7e58ac5d0496abc1ebfffc83e3b97f1f2d41a325dd823ad07d99ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:workwithusinfo.module.html.twig"));

        // line 1
        echo "<!-- section begin -->
      <section id=\"section-services\">
          <div class=\"container\">
              <div class=\"row\">

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-send-o icon-big\"></i>
                          <div class=\"text\">
                              <h2>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_upleft_title", array(), "messages");
        echo "</h2>
                              <p>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_upleft_parragraph", array(), "messages");
        echo "</p>
                              <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-puzzle-piece icon-big\"></i>
                          <div class=\"text\">
                            <h2>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_upright_title", array(), "messages");
        echo "</h2>
                            <p>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_upright_parragraph", array(), "messages");
        echo "</p>
                              <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class=\"divider-single\"></div>

              <div class=\"row\">

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-truck icon-big\"></i>
                          <div class=\"text\">
                            <h2>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_downleft_title", array(), "messages");
        echo "</h2>
                            <p>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_downleft_parragraph", array(), "messages");
        echo "</p>
                            <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-truck icon-big\"></i>
                          <div class=\"text\">
                            <h2>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_downright_title", array(), "messages");
        echo "</h2>
                            <p>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_workwithus_downright_parragraph", array(), "messages");
        echo "</p>

                            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_comingsoon");
        echo "\"><img src=\"/img/badges/google-play-badge.";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo ".png\" /></a>

                            <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </section>
<!-- section close -->
";
        
        $__internal_afc7275d1d7e58ac5d0496abc1ebfffc83e3b97f1f2d41a325dd823ad07d99ad->leave($__internal_afc7275d1d7e58ac5d0496abc1ebfffc83e3b97f1f2d41a325dd823ad07d99ad_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:workwithusinfo.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 50,  92 => 48,  88 => 47,  75 => 37,  71 => 36,  54 => 22,  50 => 21,  37 => 11,  33 => 10,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- section begin -->
      <section id=\"section-services\">
          <div class=\"container\">
              <div class=\"row\">

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-send-o icon-big\"></i>
                          <div class=\"text\">
                              <h2>{% trans %}_workwithus_upleft_title{% endtrans %}</h2>
                              <p>{% trans %}_workwithus_upleft_parragraph{% endtrans %}</p>
                              <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-puzzle-piece icon-big\"></i>
                          <div class=\"text\">
                            <h2>{% trans %}_workwithus_upright_title{% endtrans %}</h2>
                            <p>{% trans %}_workwithus_upright_parragraph{% endtrans %}</p>
                              <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class=\"divider-single\"></div>

              <div class=\"row\">

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-truck icon-big\"></i>
                          <div class=\"text\">
                            <h2>{% trans %}_workwithus_downleft_title{% endtrans %}</h2>
                            <p>{% trans %}_workwithus_downleft_parragraph{% endtrans %}</p>
                            <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"0\">
                      <div class=\"box-with-icon-left\">
                          <i class=\"fa fa-truck icon-big\"></i>
                          <div class=\"text\">
                            <h2>{% trans %}_workwithus_downright_title{% endtrans %}</h2>
                            <p>{% trans %} _workwithus_downright_parragraph{% endtrans %}</p>

                            <a href=\"{{ path('public_default_comingsoon') }}\"><img src=\"/img/badges/google-play-badge.{{ app.request.locale }}.png\" /></a>

                            <div class=\"divider-single\"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </section>
<!-- section close -->
";
    }
}

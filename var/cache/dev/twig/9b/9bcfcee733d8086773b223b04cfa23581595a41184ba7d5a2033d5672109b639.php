<?php

/* PublicBundle:Modules:faq.module.html.twig */
class __TwigTemplate_4e2c36e25aea8dbbbb50305b811f90c0142ec677a63169053e408b6020503b5c extends Twig_Template
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
        $__internal_7880ce2b538ea7bd7cc2e6ed52c40bc8747de7ca4a9595592c408d7110882ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7880ce2b538ea7bd7cc2e6ed52c40bc8747de7ca4a9595592c408d7110882ca6->enter($__internal_7880ce2b538ea7bd7cc2e6ed52c40bc8747de7ca4a9595592c408d7110882ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:faq.module.html.twig"));

        // line 1
        echo "<!-- section begin -->
      <section id=\"section-faq\" class=\"light-text\">

          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"text-center\">
                      <h2 class=\"wow fadeInUp\" data-wow-delay=\"0\">";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_title", array(), "messages");
        // line 8
        echo "      <span>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_subtitle", array(), "messages");
        echo "</span>
                      </h2>
                      <div class=\"small-border wow flipInY\" data-wow-delay=\".2s\" data-wow-duration=\".8s\"></div>
                  </div>

                  <div class=\"col-md-6 wow fadeInLeft\" data-wow-delay=\".5s\" data-duration=\".75s\">

                      <ul class=\"accordion\">

                          <li>
                              <a class=\"Active\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_quest1", array(), "messages");
        echo "</a>
                              <div class=\"content\">
                                  ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_answer1", array(), "messages");
        // line 21
        echo "                              </div>
                          </li>

                          <li>
                              <a class=\"Active\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_quest2", array(), "messages");
        echo "</a>
                              <div class=\"content\">
                                  ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_answer2", array(), "messages");
        // line 28
        echo "                              </div>
                          </li>

                          <li>
                              <a class=\"Active\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_quest3", array(), "messages");
        echo "</a>
                              <div class=\"content\">
                                  ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_answer3", array(), "messages");
        // line 35
        echo "                              </div>
                          </li>


                          <li>
                              <a class=\"Active\">";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_quest4", array(), "messages");
        echo "</a>
                              <div class=\"content\">
                                  ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_left_answer4", array(), "messages");
        // line 43
        echo "                              </div>
                          </li>
                      </ul>

                  </div>


                  <div class=\"col-md-6 wow fadeInRight\" data-wow-delay=\".5s\" data-duration=\".75s\">
                      <ul class=\"accordion\">

                        <li>
                            <a class=\"Active\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_quest1", array(), "messages");
        echo "</a>
                            <div class=\"content\">
                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_answer1", array(), "messages");
        // line 57
        echo "                            </div>
                        </li>

                        <li>
                            <a class=\"Active\">";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_quest2", array(), "messages");
        echo "</a>
                            <div class=\"content\">
                                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_answer2", array(), "messages");
        // line 64
        echo "                            </div>
                        </li>

                        <li>
                            <a class=\"Active\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_quest3", array(), "messages");
        echo "</a>
                            <div class=\"content\">
                                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_answer3", array(), "messages");
        // line 71
        echo "                            </div>
                        </li>


                        <li>
                            <a class=\"Active\">";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_quest4", array(), "messages");
        echo "</a>
                            <div class=\"content\">
                                ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_right_answer4", array(), "messages");
        // line 79
        echo "                            </div>
                        </li>
                      </ul>
                  </div>

                  <div class=\"divider-single\"></div>

                  <div class=\"text-center\">
                      <a href=\"#\" class=\"btn-border-light wow fadeInUp\" data-wow-delay=\"0\">";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_faq_morebutton", array(), "messages");
        echo "</a>
                  </div>


              </div>
          </div>

          <div class=\"clearfix\"></div>
      </section>
<!-- section close -->
";
        
        $__internal_7880ce2b538ea7bd7cc2e6ed52c40bc8747de7ca4a9595592c408d7110882ca6->leave($__internal_7880ce2b538ea7bd7cc2e6ed52c40bc8747de7ca4a9595592c408d7110882ca6_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:faq.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 87,  153 => 79,  151 => 78,  146 => 76,  139 => 71,  137 => 70,  132 => 68,  126 => 64,  124 => 63,  119 => 61,  113 => 57,  111 => 56,  106 => 54,  93 => 43,  91 => 42,  86 => 40,  79 => 35,  77 => 34,  72 => 32,  66 => 28,  64 => 27,  59 => 25,  53 => 21,  51 => 20,  46 => 18,  32 => 8,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- section begin -->
      <section id=\"section-faq\" class=\"light-text\">

          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"text-center\">
                      <h2 class=\"wow fadeInUp\" data-wow-delay=\"0\">{% trans %} _faq_title{% endtrans %}
      <span>{% trans %} _faq_subtitle{% endtrans %}</span>
                      </h2>
                      <div class=\"small-border wow flipInY\" data-wow-delay=\".2s\" data-wow-duration=\".8s\"></div>
                  </div>

                  <div class=\"col-md-6 wow fadeInLeft\" data-wow-delay=\".5s\" data-duration=\".75s\">

                      <ul class=\"accordion\">

                          <li>
                              <a class=\"Active\">{% trans %} _faq_left_quest1{% endtrans %}</a>
                              <div class=\"content\">
                                  {% trans %} _faq_left_answer1{% endtrans %}
                              </div>
                          </li>

                          <li>
                              <a class=\"Active\">{% trans %} _faq_left_quest2{% endtrans %}</a>
                              <div class=\"content\">
                                  {% trans %} _faq_left_answer2{% endtrans %}
                              </div>
                          </li>

                          <li>
                              <a class=\"Active\">{% trans %} _faq_left_quest3{% endtrans %}</a>
                              <div class=\"content\">
                                  {% trans %} _faq_left_answer3{% endtrans %}
                              </div>
                          </li>


                          <li>
                              <a class=\"Active\">{% trans %} _faq_left_quest4{% endtrans %}</a>
                              <div class=\"content\">
                                  {% trans %} _faq_left_answer4{% endtrans %}
                              </div>
                          </li>
                      </ul>

                  </div>


                  <div class=\"col-md-6 wow fadeInRight\" data-wow-delay=\".5s\" data-duration=\".75s\">
                      <ul class=\"accordion\">

                        <li>
                            <a class=\"Active\">{% trans %} _faq_right_quest1{% endtrans %}</a>
                            <div class=\"content\">
                                {% trans %} _faq_right_answer1{% endtrans %}
                            </div>
                        </li>

                        <li>
                            <a class=\"Active\">{% trans %} _faq_right_quest2{% endtrans %}</a>
                            <div class=\"content\">
                                {% trans %} _faq_right_answer2{% endtrans %}
                            </div>
                        </li>

                        <li>
                            <a class=\"Active\">{% trans %} _faq_right_quest3{% endtrans %}</a>
                            <div class=\"content\">
                                {% trans %} _faq_right_answer3{% endtrans %}
                            </div>
                        </li>


                        <li>
                            <a class=\"Active\">{% trans %} _faq_right_quest4{% endtrans %}</a>
                            <div class=\"content\">
                                {% trans %} _faq_right_answer4{% endtrans %}
                            </div>
                        </li>
                      </ul>
                  </div>

                  <div class=\"divider-single\"></div>

                  <div class=\"text-center\">
                      <a href=\"#\" class=\"btn-border-light wow fadeInUp\" data-wow-delay=\"0\">{% trans %} _faq_morebutton{% endtrans %}</a>
                  </div>


              </div>
          </div>

          <div class=\"clearfix\"></div>
      </section>
<!-- section close -->
";
    }
}

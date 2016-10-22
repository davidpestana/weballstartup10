<?php

/* PublicBundle:Modules:faq.module.html.twig */
class __TwigTemplate_4513719f7d9cc59d4070b5a7cb32ac490c1c12b8172e1778ee6a697c60a0b2e7 extends Twig_Template
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
        return array (  160 => 87,  150 => 79,  148 => 78,  143 => 76,  136 => 71,  134 => 70,  129 => 68,  123 => 64,  121 => 63,  116 => 61,  110 => 57,  108 => 56,  103 => 54,  90 => 43,  88 => 42,  83 => 40,  76 => 35,  74 => 34,  69 => 32,  63 => 28,  61 => 27,  56 => 25,  50 => 21,  48 => 20,  43 => 18,  29 => 8,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

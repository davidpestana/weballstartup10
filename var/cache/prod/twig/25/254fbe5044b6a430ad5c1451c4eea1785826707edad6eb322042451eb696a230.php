<?php

/* PublicBundle:Modules:reviews.module.html.twig */
class __TwigTemplate_73b9fb2a6279266456e2e82a1a20979791bb42687742b4fbf60de903007c51f6 extends Twig_Template
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
<section id=\"explore-2\" class=\"side-bg light-text\">
          <div class=\"col-md-5 col-md-offset-1 pull-left image-container\">
              <div class=\"background-image\"></div>
          </div>

          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-8 col-md-offset-5\">
                      <div class=\"inner-padding\">
                          <div id=\"testi-carousel\" class=\"testi-slider wow fadeIn\" data-wow-delay=\"0s\" data-wow-duration=\"1s\">
                              <div class=\"item\">
                                  <blockquote>
                                      ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_first_comment", array(), "messages");
        // line 15
        echo "                                  </blockquote>
                                  <span class=\"testi-by\">  ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_first_name", array(), "messages");
        echo "</span>
                              </div>
                              <div class=\"item\">
                                  <blockquote>
                                      ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_second_comment", array(), "messages");
        // line 21
        echo "                                  </blockquote>
                                  <span class=\"testi-by\">  ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_second_name", array(), "messages");
        echo "</span>
                              </div>
                              <div class=\"item\">
                                  <blockquote>
                                      ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_third_comment", array(), "messages");
        // line 27
        echo "                                  </blockquote>
                                  <span class=\"testi-by\">  ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_third_name", array(), "messages");
        echo "</span>
                              </div>

                          </div>
                      </div>

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
        return "PublicBundle:Modules:reviews.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  60 => 27,  58 => 26,  51 => 22,  48 => 21,  46 => 20,  39 => 16,  36 => 15,  34 => 14,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

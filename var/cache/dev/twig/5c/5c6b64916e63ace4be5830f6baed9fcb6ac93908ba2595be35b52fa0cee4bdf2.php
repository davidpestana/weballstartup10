<?php

/* PublicBundle:Modules:reviews.module.html.twig */
class __TwigTemplate_b44eff5c1d1d28a5adbad038dda01ad1dc766697245113d1ddc053a1d7b17fc8 extends Twig_Template
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
        $__internal_4fcac596b4c25dd5fe7141acaffe40d3800697c8260b16ee9db84045cde2c3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcac596b4c25dd5fe7141acaffe40d3800697c8260b16ee9db84045cde2c3bc->enter($__internal_4fcac596b4c25dd5fe7141acaffe40d3800697c8260b16ee9db84045cde2c3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:reviews.module.html.twig"));

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
        
        $__internal_4fcac596b4c25dd5fe7141acaffe40d3800697c8260b16ee9db84045cde2c3bc->leave($__internal_4fcac596b4c25dd5fe7141acaffe40d3800697c8260b16ee9db84045cde2c3bc_prof);

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
        return array (  66 => 28,  63 => 27,  61 => 26,  54 => 22,  51 => 21,  49 => 20,  42 => 16,  39 => 15,  37 => 14,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- section begin -->
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
                                      {% trans %} _reviews_first_comment{% endtrans %}
                                  </blockquote>
                                  <span class=\"testi-by\">  {% trans %} _reviews_first_name{% endtrans %}</span>
                              </div>
                              <div class=\"item\">
                                  <blockquote>
                                      {% trans %} _reviews_second_comment{% endtrans %}
                                  </blockquote>
                                  <span class=\"testi-by\">  {% trans %} _reviews_second_name{% endtrans %}</span>
                              </div>
                              <div class=\"item\">
                                  <blockquote>
                                      {% trans %} _reviews_third_comment{% endtrans %}
                                  </blockquote>
                                  <span class=\"testi-by\">  {% trans %} _reviews_third_name{% endtrans %}</span>
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
}

<?php

/* PublicBundle:Modules:reviews.module.html.twig */
class __TwigTemplate_65e76e673625ea413f0cb46a222632e6f20a1bc9a579e2d62bb0144458fe05d8 extends Twig_Template
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
        $__internal_40da89b332a67b0064264eb97ada832fe6c0af5b2d3e3f274737ddd8ef135ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40da89b332a67b0064264eb97ada832fe6c0af5b2d3e3f274737ddd8ef135ce8->enter($__internal_40da89b332a67b0064264eb97ada832fe6c0af5b2d3e3f274737ddd8ef135ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:reviews.module.html.twig"));

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
        
        $__internal_40da89b332a67b0064264eb97ada832fe6c0af5b2d3e3f274737ddd8ef135ce8->leave($__internal_40da89b332a67b0064264eb97ada832fe6c0af5b2d3e3f274737ddd8ef135ce8_prof);

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

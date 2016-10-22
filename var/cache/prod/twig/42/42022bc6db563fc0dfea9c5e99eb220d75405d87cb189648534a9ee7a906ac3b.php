<?php

/* PublicBundle:Modules:functions.module.html.twig */
class __TwigTemplate_491570506c1489f21dc9f2c151f195e6780c88d7555da926227c7fa165f5327a extends Twig_Template
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
      <section id=\"section-features\" class=\"bg-grey\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-4\">
                      <div class=\"feature-box\">
                          <i class=\"icon-tools wow zoomIn\" data-wow-delay=\"0s\"></i>
                          <div class=\"text wow fadeIn\" data-wow-delay=\".2s\">
                              <h3>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_left_title", array(), "messages");
        echo "</h3>
                              <p>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_left_parragraph", array(), "messages");
        echo "</p>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-4\">
                      <div class=\"feature-box\">
                          <i class=\"icon-bargraph wow zoomIn\" data-wow-delay=\".2s\"></i>
                          <div class=\"text wow fadeIn\" data-wow-delay=\".4s\">
                            <h3>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_center_title", array(), "messages");
        echo "</h3>
                            <p>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_center_parragraph", array(), "messages");
        echo "</p>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-4\">
                      <div class=\"feature-box\">
                          <i class=\"icon-pricetags wow zoomIn\" data-wow-delay=\".4s\"></i>
                          <div class=\"text wow fadeIn\" data-wow-delay=\".6s\">
                            <h3>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_right_title", array(), "messages");
        echo "</h3>
                            <p>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_right_parragraph", array(), "messages");
        echo "</p>
                          </div>
                      </div>
                  </div>

                  <div class=\"clearfix\"></div>

              </div>
          </div>
      </section>
<!-- section close -->
";
    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:functions.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  61 => 29,  49 => 20,  45 => 19,  33 => 10,  29 => 9,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

<?php

/* PublicBundle:Modules:functions.module.html.twig */
class __TwigTemplate_bd0e689202ad257fb87a8fa5e69bac8e5830650769f7533d6edd5becf307bce3 extends Twig_Template
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
        $__internal_83d79efe2800e1ec481db8879041ec1818a958c636e6348457c87ef6a9e35707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d79efe2800e1ec481db8879041ec1818a958c636e6348457c87ef6a9e35707->enter($__internal_83d79efe2800e1ec481db8879041ec1818a958c636e6348457c87ef6a9e35707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:functions.module.html.twig"));

        // line 1
        echo "<!-- section begin -->
      <section id=\"section-features\" class=\"bg-grey\">
          <div class=\"container\">
              <div class=\"row\">
                <div class=\"text-center\">
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\"0\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_title", array(), "messages");
        // line 7
        echo "                        <span>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_subtitle", array(), "messages");
        echo "</span>
                    </h2>
                    <div class=\"small-border wow flipInY\" data-wow-delay=\".2s\" data-wow-duration=\".8s\"></div>
                </div>

                <div class=\"divider-single\"></div>
                  <div class=\"col-md-4\">
                      <div class=\"feature-box\">
                          <i class=\"icon-tools wow zoomIn\" data-wow-delay=\"0s\"></i>
                          <div class=\"text wow fadeIn\" data-wow-delay=\".2s\">
                              <h3>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_left_title", array(), "messages");
        echo "</h3>
                              <p>";
        // line 18
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
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_center_title", array(), "messages");
        echo "</h3>
                            <p>";
        // line 28
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
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_functions_right_title", array(), "messages");
        echo "</h3>
                            <p>";
        // line 38
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
        
        $__internal_83d79efe2800e1ec481db8879041ec1818a958c636e6348457c87ef6a9e35707->leave($__internal_83d79efe2800e1ec481db8879041ec1818a958c636e6348457c87ef6a9e35707_prof);

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
        return array (  81 => 38,  77 => 37,  65 => 28,  61 => 27,  49 => 18,  45 => 17,  31 => 7,  29 => 6,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- section begin -->
      <section id=\"section-features\" class=\"bg-grey\">
          <div class=\"container\">
              <div class=\"row\">
                <div class=\"text-center\">
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\"0\">{% trans %} _functions_title{% endtrans %}
                        <span>{% trans %} _functions_subtitle{% endtrans %}</span>
                    </h2>
                    <div class=\"small-border wow flipInY\" data-wow-delay=\".2s\" data-wow-duration=\".8s\"></div>
                </div>

                <div class=\"divider-single\"></div>
                  <div class=\"col-md-4\">
                      <div class=\"feature-box\">
                          <i class=\"icon-tools wow zoomIn\" data-wow-delay=\"0s\"></i>
                          <div class=\"text wow fadeIn\" data-wow-delay=\".2s\">
                              <h3>{% trans %} _functions_left_title {% endtrans %}</h3>
                              <p>{% trans %} _functions_left_parragraph {% endtrans %}</p>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-4\">
                      <div class=\"feature-box\">
                          <i class=\"icon-bargraph wow zoomIn\" data-wow-delay=\".2s\"></i>
                          <div class=\"text wow fadeIn\" data-wow-delay=\".4s\">
                            <h3>{% trans %} _functions_center_title {% endtrans %}</h3>
                            <p>{% trans %} _functions_center_parragraph {% endtrans %}</p>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-4\">
                      <div class=\"feature-box\">
                          <i class=\"icon-pricetags wow zoomIn\" data-wow-delay=\".4s\"></i>
                          <div class=\"text wow fadeIn\" data-wow-delay=\".6s\">
                            <h3>{% trans %} _functions_right_title {% endtrans %}</h3>
                            <p>{% trans %} _functions_right_parragraph {% endtrans %}</p>
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
}

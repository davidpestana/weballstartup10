<?php

/* WebSiteBundle::footer.html.twig */
class __TwigTemplate_e1bcb59aa378981ea1664c1c1cdf48191ec0f79543efe965ab7ef0f623293957 extends Twig_Template
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
        $__internal_b78b32a39e39bc011577cc985a9c7d7fdf8e19b60338196e605e9e4f09477e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78b32a39e39bc011577cc985a9c7d7fdf8e19b60338196e605e9e4f09477e70->enter($__internal_b78b32a39e39bc011577cc985a9c7d7fdf8e19b60338196e605e9e4f09477e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle::footer.html.twig"));

        // line 1
        echo "<!-- Footer
============================================= -->
<footer id=\"footer\" class=\"dark\">

  <div class=\"container\">

    <!-- Footer Widgets
    ============================================= -->
    <div class=\"footer-widgets-wrap clearfix\">

      <div class=\"col_one_third\">

        <div class=\"widget clearfix\">




          <p>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_parragraph", array(), "messages");
        echo "</p>

          <div style=\"background: url('/WebSiteBundle/images/world-map.png') no-repeat center center; background-size: 100%;\">
            <address>
              <strong>Headquarters:</strong><br>
              C/Roger de Lauria 28, Valencia, España<br />
              Email: hello@empleateya.es
            </address>
            ";
        // line 27
        echo "            ";
        // line 28
        echo "            <abbr title=\"Email Address\"><strong>Email:</strong></abbr> hello@empleateya.es
          </div>

        </div>

      </div>

      <div class=\"col_one_third\">

        <div class=\"widget clearfix\">
          <h4>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_title", array(), "messages");
        echo "</h4>

          <div class=\"fslider testimonial no-image nobg noborder noshadow nopadding\" data-animation=\"slide\" data-arrows=\"false\">
            <div class=\"flexslider\">
              <div class=\"slider-wrap\">
                <div class=\"slide\">
                  <div class=\"testi-image\">
                    <a href=\"#\"><img src=\"/WebSiteBundle/images/testimonials/3.jpg\" alt=\"Customer Testimonails\"></a>
                  </div>
                  <div class=\"testi-content\">
                    <p>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_parragraph1", array(), "messages");
        echo "</p>
                    <div class=\"testi-meta\">
                      ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_author1_name", array(), "messages");
        // line 51
        echo "                      <span>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_author1_reference", array(), "messages");
        echo "</span>
                    </div>
                  </div>
                </div>
                <div class=\"slide\">
                  <div class=\"testi-image\">
                    <a href=\"#\"><img src=\"/WebSiteBundle/images/testimonials/2.jpg\" alt=\"Customer Testimonails\"></a>
                  </div>
                  <div class=\"testi-content\">
                    <p>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_parragraph2", array(), "messages");
        echo "</p>
                    <div class=\"testi-meta\">
                      ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_author2_name", array(), "messages");
        // line 63
        echo "                      <span>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_reviews_author2_reference", array(), "messages");
        echo "</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class=\"widget clearfix\">

          <a href=\"#\" class=\"social-icon si-small si-rounded si-facebook\">
            <i class=\"icon-facebook\"></i>
            <i class=\"icon-facebook\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-twitter\">
            <i class=\"icon-twitter\"></i>
            <i class=\"icon-twitter\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-gplus\">
            <i class=\"icon-gplus\"></i>
            <i class=\"icon-gplus\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-pinterest\">
            <i class=\"icon-pinterest\"></i>
            <i class=\"icon-pinterest\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-vimeo\">
            <i class=\"icon-vimeo\"></i>
            <i class=\"icon-vimeo\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-github\">
            <i class=\"icon-github\"></i>
            <i class=\"icon-github\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-yahoo\">
            <i class=\"icon-yahoo\"></i>
            <i class=\"icon-yahoo\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-linkedin\">
            <i class=\"icon-linkedin\"></i>
            <i class=\"icon-linkedin\"></i>
          </a>

        </div>

      </div>

      <div class=\"col_one_third col_last\">
        ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("WebSiteBundle:Default:Contact", array()));
        echo "
      </div>

    </div><!-- .footer-widgets-wrap end -->

  </div>

  <!-- Copyrights
  ============================================= -->
  <div id=\"copyrights\">

    <div class=\"container clearfix\">

      <div class=\"col_half\">
        ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_copyright", array(), "messages");
        // line 135
        echo "      </div>

    </div>

  </div><!-- #copyrights end -->

</footer><!-- #footer end -->
";
        
        $__internal_b78b32a39e39bc011577cc985a9c7d7fdf8e19b60338196e605e9e4f09477e70->leave($__internal_b78b32a39e39bc011577cc985a9c7d7fdf8e19b60338196e605e9e4f09477e70_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 135,  184 => 134,  167 => 120,  106 => 63,  104 => 62,  99 => 60,  86 => 51,  84 => 50,  79 => 48,  66 => 38,  54 => 28,  52 => 27,  41 => 18,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- Footer
============================================= -->
<footer id=\"footer\" class=\"dark\">

  <div class=\"container\">

    <!-- Footer Widgets
    ============================================= -->
    <div class=\"footer-widgets-wrap clearfix\">

      <div class=\"col_one_third\">

        <div class=\"widget clearfix\">




          <p>{% trans %}_footer_left_parragraph{% endtrans %}</p>

          <div style=\"background: url('/WebSiteBundle/images/world-map.png') no-repeat center center; background-size: 100%;\">
            <address>
              <strong>Headquarters:</strong><br>
              C/Roger de Lauria 28, Valencia, España<br />
              Email: hello@empleateya.es
            </address>
            {#}<abbr title=\"Phone Number\"><strong>Phone:</strong></abbr> (91) 8547 632521<br>#}
            {#}<abbr title=\"Fax\"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>#}
            <abbr title=\"Email Address\"><strong>Email:</strong></abbr> hello@empleateya.es
          </div>

        </div>

      </div>

      <div class=\"col_one_third\">

        <div class=\"widget clearfix\">
          <h4>{% trans %}_reviews_title{% endtrans %}</h4>

          <div class=\"fslider testimonial no-image nobg noborder noshadow nopadding\" data-animation=\"slide\" data-arrows=\"false\">
            <div class=\"flexslider\">
              <div class=\"slider-wrap\">
                <div class=\"slide\">
                  <div class=\"testi-image\">
                    <a href=\"#\"><img src=\"/WebSiteBundle/images/testimonials/3.jpg\" alt=\"Customer Testimonails\"></a>
                  </div>
                  <div class=\"testi-content\">
                    <p>{% trans %}_reviews_parragraph1{% endtrans %}</p>
                    <div class=\"testi-meta\">
                      {% trans %}_reviews_author1_name{% endtrans %}
                      <span>{% trans %}_reviews_author1_reference{% endtrans %}</span>
                    </div>
                  </div>
                </div>
                <div class=\"slide\">
                  <div class=\"testi-image\">
                    <a href=\"#\"><img src=\"/WebSiteBundle/images/testimonials/2.jpg\" alt=\"Customer Testimonails\"></a>
                  </div>
                  <div class=\"testi-content\">
                    <p>{% trans %}_reviews_parragraph2{% endtrans %}</p>
                    <div class=\"testi-meta\">
                      {% trans %}_reviews_author2_name{% endtrans %}
                      <span>{% trans %}_reviews_author2_reference{% endtrans %}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class=\"widget clearfix\">

          <a href=\"#\" class=\"social-icon si-small si-rounded si-facebook\">
            <i class=\"icon-facebook\"></i>
            <i class=\"icon-facebook\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-twitter\">
            <i class=\"icon-twitter\"></i>
            <i class=\"icon-twitter\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-gplus\">
            <i class=\"icon-gplus\"></i>
            <i class=\"icon-gplus\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-pinterest\">
            <i class=\"icon-pinterest\"></i>
            <i class=\"icon-pinterest\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-vimeo\">
            <i class=\"icon-vimeo\"></i>
            <i class=\"icon-vimeo\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-github\">
            <i class=\"icon-github\"></i>
            <i class=\"icon-github\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-yahoo\">
            <i class=\"icon-yahoo\"></i>
            <i class=\"icon-yahoo\"></i>
          </a>

          <a href=\"#\" class=\"social-icon si-small si-rounded si-linkedin\">
            <i class=\"icon-linkedin\"></i>
            <i class=\"icon-linkedin\"></i>
          </a>

        </div>

      </div>

      <div class=\"col_one_third col_last\">
        {{ render(controller('WebSiteBundle:Default:Contact', {  })) }}
      </div>

    </div><!-- .footer-widgets-wrap end -->

  </div>

  <!-- Copyrights
  ============================================= -->
  <div id=\"copyrights\">

    <div class=\"container clearfix\">

      <div class=\"col_half\">
        {% trans %}_footer_copyright{% endtrans %}
      </div>

    </div>

  </div><!-- #copyrights end -->

</footer><!-- #footer end -->
";
    }
}

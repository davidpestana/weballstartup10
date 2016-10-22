<?php

/* PublicBundle::layout.html.twig */
class __TwigTemplate_e68e9f469cd1783366eabb37b3325145bb0f28989e049ebbab49cf2b0c8cb5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PublicBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb076b4fb0bc65452e0d3041f1ccea30c734da4849ab42f9ef47d70248853223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb076b4fb0bc65452e0d3041f1ccea30c734da4849ab42f9ef47d70248853223->enter($__internal_fb076b4fb0bc65452e0d3041f1ccea30c734da4849ab42f9ef47d70248853223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb076b4fb0bc65452e0d3041f1ccea30c734da4849ab42f9ef47d70248853223->leave($__internal_fb076b4fb0bc65452e0d3041f1ccea30c734da4849ab42f9ef47d70248853223_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50426c6064644ba5972479c2e93bf6c275fdf4cff05a3dd2739f8c11132d144e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50426c6064644ba5972479c2e93bf6c275fdf4cff05a3dd2739f8c11132d144e->enter($__internal_50426c6064644ba5972479c2e93bf6c275fdf4cff05a3dd2739f8c11132d144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<!-- LOAD CSS FILES -->
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_50426c6064644ba5972479c2e93bf6c275fdf4cff05a3dd2739f8c11132d144e->leave($__internal_50426c6064644ba5972479c2e93bf6c275fdf4cff05a3dd2739f8c11132d144e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a197bf59e311d539fac0fa944f59c7589acbe8c166095a51718537d69dbaad55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a197bf59e311d539fac0fa944f59c7589acbe8c166095a51718537d69dbaad55->enter($__internal_a197bf59e311d539fac0fa944f59c7589acbe8c166095a51718537d69dbaad55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "
<!-- LOAD JS FILES -->
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
<script src=\"/js/jquery.isotope.min.js\"></script>
<script src=\"/js/easing.js\"></script>
<script src=\"/js/jquery.ui.totop.js\"></script>
<script src=\"/js/ender.js\"></script>
<script src=\"/js/owl.carousel.js\"></script>
<script src=\"/js/jquery.fitvids.js\"></script>
<script src=\"/js/jquery.plugin.js\"></script>
<script src=\"/js/wow.min.js\"></script>
<script src=\"/js/jquery.magnific-popup.min.js\"></script>
<script src=\"/js/jquery.stellar.js\"></script>
<script src=\"/js/typed.js\"></script>
<script src=\"/js/jquery.scrollto.js\"></script>
<script src=\"/js/custom.js\"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type=\"text/javascript\" src=\"/rs-plugin/js/jquery.themepunch.plugins.min.js\"></script>
<script type=\"text/javascript\" src=\"/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
<script src=\"/js/revslider-custom.js\"></script>


";
        
        $__internal_a197bf59e311d539fac0fa944f59c7589acbe8c166095a51718537d69dbaad55->leave($__internal_a197bf59e311d539fac0fa944f59c7589acbe8c166095a51718537d69dbaad55_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8512840cb448023ffda60e993bf4d8d371951bdda4d01edf39058f9002c9828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8512840cb448023ffda60e993bf4d8d371951bdda4d01edf39058f9002c9828->enter($__internal_c8512840cb448023ffda60e993bf4d8d371951bdda4d01edf39058f9002c9828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<div id=\"preloader\"></div>
<div id=\"wrapper\">
  ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 138
        echo "
  <div id=\"content\" class=\"no-padding\">
  ";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "  </div>

  ";
        // line 143
        $this->displayBlock('footer', $context, $blocks);
        // line 203
        echo "</div>
";
        
        $__internal_c8512840cb448023ffda60e993bf4d8d371951bdda4d01edf39058f9002c9828->leave($__internal_c8512840cb448023ffda60e993bf4d8d371951bdda4d01edf39058f9002c9828_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_7abed0e1f122250bb326d45f59afb66f5c81665b626ebe105a1ac25c7c84daff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abed0e1f122250bb326d45f59afb66f5c81665b626ebe105a1ac25c7c84daff->enter($__internal_7abed0e1f122250bb326d45f59afb66f5c81665b626ebe105a1ac25c7c84daff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "        <!-- header begin -->
        <header>
            <div class=\"container\">
                <span id=\"menu-btn\"></span>
                <div class=\"row\">
                    <div class=\"col-md-3\">

                        <!-- logo begin -->
                        <div id=\"logo\">
                            <div class=\"inner\">
                                <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_index");
        echo "\">
                                    <img src=\"/img/logo.png\" alt=\"\" class=\"logo-1\">
                                    <img src=\"/img/logo-2.png\" alt=\"\" class=\"logo-2\">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>




                    <div class=\"col-md-9\">


                        <!-- mainmenu begin -->
                        <nav id=\"mainmenu-container\">
                            <ul id=\"mainmenu\">
                                <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_home", array(), "messages");
        echo "</a>
                                  ";
        // line 79
        echo "                                </li>
                                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_services");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_services", array(), "messages");
        echo "</a>
                                    <ul>
                                      <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_track");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_track", array(), "messages");
        echo "</a></li>
                                      <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_services");
        echo "#zone1\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_services_1", array(), "messages");
        echo "</a></li>
                                      <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_services");
        echo "#zone2\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_services_2", array(), "messages");
        echo "</a></li>
                                      <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_services");
        echo "#zone3\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_services_3", array(), "messages");
        echo "</a></li>
                                      <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_services");
        echo "#zone4\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_services_4", array(), "messages");
        echo "</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_workwithus");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_workwithus", array(), "messages");
        echo "</a></li>
                                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_aboutus");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_aboutus", array(), "messages");
        echo "</a></li>

                                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_contactus");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_contactus", array(), "messages");
        echo "</a></li>

                                <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_comingsoon");
        echo "\" class=\"btn\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_signin", array(), "messages");
        echo "</a></li>
                                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_comingsoon");
        echo "\" class=\"btn\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_signup", array(), "messages");
        echo "</a></li>
                            </ul>
                        </nav>
                        <!-- mainmenu close -->


                        <!-- social icons
                        <div class=\"social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-envelope-o\"></i></a>
                        </div>
                         social icons close -->





                        ";
        // line 131
        echo "
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
  ";
        
        $__internal_7abed0e1f122250bb326d45f59afb66f5c81665b626ebe105a1ac25c7c84daff->leave($__internal_7abed0e1f122250bb326d45f59afb66f5c81665b626ebe105a1ac25c7c84daff_prof);

    }

    // line 140
    public function block_content($context, array $blocks = array())
    {
        $__internal_5995f46cd136d1e2538229a3f6090faa4ed700c3b8a9fca8f1cc5e7d86440265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5995f46cd136d1e2538229a3f6090faa4ed700c3b8a9fca8f1cc5e7d86440265->enter($__internal_5995f46cd136d1e2538229a3f6090faa4ed700c3b8a9fca8f1cc5e7d86440265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5995f46cd136d1e2538229a3f6090faa4ed700c3b8a9fca8f1cc5e7d86440265->leave($__internal_5995f46cd136d1e2538229a3f6090faa4ed700c3b8a9fca8f1cc5e7d86440265_prof);

    }

    // line 143
    public function block_footer($context, array $blocks = array())
    {
        $__internal_454c3bbf3ca052ecde8df77b87a54abba34e4ef3a938fa7c16862c156ab4e4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454c3bbf3ca052ecde8df77b87a54abba34e4ef3a938fa7c16862c156ab4e4b1->enter($__internal_454c3bbf3ca052ecde8df77b87a54abba34e4ef3a938fa7c16862c156ab4e4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 144
        echo "
  <!-- footer begin -->
  <footer>
      <div class=\"container\">
          <div class=\"row\">



              <div class=\"col-md-4\">
                  <h3>";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_title", array(), "messages");
        echo "</h3>
                  <div class=\"tiny-border\"></div>
                  <ul>
                      <li><a href=\"#\">";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_option1", array(), "messages");
        echo "</a></li>
                      <li><a href=\"#\">";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_option2", array(), "messages");
        echo "</a></li>
                      <li><a href=\"#\">";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_option3", array(), "messages");
        echo "</a></li>
                      <li><a href=\"#\">";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_option4", array(), "messages");
        echo "</a></li>
                      <li><a href=\"#\">";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_option5", array(), "messages");
        echo "</a></li>
                      <li><a href=\"#\">";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_left_option6", array(), "messages");
        echo "</a></li>
                  </ul>
              </div>

              <div class=\"col-md-4\">
                  <h3>";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_center_title", array(), "messages");
        echo "</h3>
                  <div class=\"tiny-border\"></div>
                  ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_center_parragraph", array(), "messages");
        // line 169
        echo "
                  <div class=\"divider-single\"></div>
                  <div class=\"social-icons\">
                      <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-envelope-o\"></i></a>
                  </div>
              </div>

              <div class=\"col-md-4\">
                  <h3>";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_right_title", array(), "messages");
        echo "</h3>
                  <div class=\"tiny-border\"></div>
                  <p>";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_right_parragraph", array(), "messages");
        echo "</p>
                  <a href=\"#\" class=\"btn-border-light\">";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_cta", array(), "messages");
        echo "</a>
              </div>

          </div>
      </div>
      <div class=\"divider\"></div>

      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-md-12 text-center\">
                  <div class=\"spacer-single\"></div>
                  ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_footer_copyright", array(), "messages");
        // line 196
        echo "              </div>
          </div>
      </div>
  </footer>
  <!-- footer close -->

  ";
        
        $__internal_454c3bbf3ca052ecde8df77b87a54abba34e4ef3a938fa7c16862c156ab4e4b1->leave($__internal_454c3bbf3ca052ecde8df77b87a54abba34e4ef3a938fa7c16862c156ab4e4b1_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 196,  385 => 195,  371 => 184,  367 => 183,  362 => 181,  348 => 169,  346 => 168,  341 => 166,  333 => 161,  329 => 160,  325 => 159,  321 => 158,  317 => 157,  313 => 156,  307 => 153,  296 => 144,  290 => 143,  279 => 140,  266 => 131,  241 => 95,  235 => 94,  228 => 92,  221 => 90,  215 => 89,  207 => 86,  201 => 85,  195 => 84,  189 => 83,  183 => 82,  176 => 80,  173 => 79,  167 => 72,  144 => 52,  132 => 42,  126 => 41,  118 => 203,  116 => 143,  112 => 141,  110 => 140,  106 => 138,  104 => 41,  100 => 39,  94 => 38,  63 => 9,  57 => 8,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block stylesheets %}
<!-- LOAD CSS FILES -->
<link href=\"{{ asset('/css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{% block javascripts %}

<!-- LOAD JS FILES -->
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
<script src=\"/js/jquery.isotope.min.js\"></script>
<script src=\"/js/easing.js\"></script>
<script src=\"/js/jquery.ui.totop.js\"></script>
<script src=\"/js/ender.js\"></script>
<script src=\"/js/owl.carousel.js\"></script>
<script src=\"/js/jquery.fitvids.js\"></script>
<script src=\"/js/jquery.plugin.js\"></script>
<script src=\"/js/wow.min.js\"></script>
<script src=\"/js/jquery.magnific-popup.min.js\"></script>
<script src=\"/js/jquery.stellar.js\"></script>
<script src=\"/js/typed.js\"></script>
<script src=\"/js/jquery.scrollto.js\"></script>
<script src=\"/js/custom.js\"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type=\"text/javascript\" src=\"/rs-plugin/js/jquery.themepunch.plugins.min.js\"></script>
<script type=\"text/javascript\" src=\"/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
<script src=\"/js/revslider-custom.js\"></script>


{% endblock %}




{% block body %}
<div id=\"preloader\"></div>
<div id=\"wrapper\">
  {% block header %}
        <!-- header begin -->
        <header>
            <div class=\"container\">
                <span id=\"menu-btn\"></span>
                <div class=\"row\">
                    <div class=\"col-md-3\">

                        <!-- logo begin -->
                        <div id=\"logo\">
                            <div class=\"inner\">
                                <a href=\"{{ path('public_default_index') }}\">
                                    <img src=\"/img/logo.png\" alt=\"\" class=\"logo-1\">
                                    <img src=\"/img/logo-2.png\" alt=\"\" class=\"logo-2\">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>




                    <div class=\"col-md-9\">


                        <!-- mainmenu begin -->
                        <nav id=\"mainmenu-container\">
                            <ul id=\"mainmenu\">
                                <li><a href=\"{{ path('public_default_index') }}\">{% trans %}_menu_home{% endtrans %}</a>
                                  {#  <ul>
                                        <li><a href=\"index.html\">Homepage 1</a></li>
                                        <li><a href=\"index-2.html\">Homepage 2</a></li>
                                        <li><a href=\"index-3.html\">Homepage 3</a></li>
                                        <li><a href=\"index-4.html\">Homepage 4</a></li>
                                    </ul>#}
                                </li>
                                <li><a href=\"{{ path('public_default_services') }}\">{% trans %}_menu_services{% endtrans %}</a>
                                    <ul>
                                      <li><a href=\"{{ path('public_default_track') }}\">{% trans %}_menu_track{% endtrans %}</a></li>
                                      <li><a href=\"{{ path('public_default_services') }}#zone1\">{% trans %}_menu_services_1{% endtrans %}</a></li>
                                      <li><a href=\"{{ path('public_default_services') }}#zone2\">{% trans %}_menu_services_2{% endtrans %}</a></li>
                                      <li><a href=\"{{ path('public_default_services') }}#zone3\">{% trans %}_menu_services_3{% endtrans %}</a></li>
                                      <li><a href=\"{{ path('public_default_services') }}#zone4\">{% trans %}_menu_services_4{% endtrans %}</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"{{ path('public_default_workwithus') }}\">{% trans %}_menu_workwithus{% endtrans %}</a></li>
                                <li><a href=\"{{ path('public_default_aboutus') }}\">{% trans %}_menu_aboutus{% endtrans %}</a></li>

                                <li><a href=\"{{ path('public_default_contactus') }}\">{% trans %}_menu_contactus{% endtrans %}</a></li>

                                <li><a href=\"{{ path('public_default_comingsoon') }}\" class=\"btn\">{% trans %}_signin{% endtrans %}</a></li>
                                <li><a href=\"{{ path('public_default_comingsoon') }}\" class=\"btn\">{% trans %}_signup{% endtrans %}</a></li>
                            </ul>
                        </nav>
                        <!-- mainmenu close -->


                        <!-- social icons
                        <div class=\"social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-envelope-o\"></i></a>
                        </div>
                         social icons close -->





                        {#<div class=\"buttons\">
                        <div class=\"buttons\">

                        </div>
                          <a href=\"#\" class=\"btn\">{% trans %}_signin{% endtrans %}</a>
                          <a href=\"#\" class=\"btn\">{% trans %}_signup{% endtrans %}</a>
                          {% set locale = app.request.locale %}

                          <select class=\"btn\" onchange=\"window.location.href=this.value\">
                              <option {% if locale == 'es' %} selected {% endif %} value=\"{{ path('public_default_index', { '_locale': 'es' }) }}\">castellano</option>
                              <option {% if locale == 'cat' %} selected {% endif %} value=\"{{ path('public_default_index', { '_locale': 'cat' }) }}\">catalá</option>
                              <option {% if locale == 'en' %} selected {% endif %} value=\"{{ path('public_default_index', { '_locale': 'en' }) }}\">english</option>
                          </select>


                        </div>#}

                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
  {% endblock %}

  <div id=\"content\" class=\"no-padding\">
  {% block content %}{% endblock %}
  </div>

  {% block footer %}

  <!-- footer begin -->
  <footer>
      <div class=\"container\">
          <div class=\"row\">



              <div class=\"col-md-4\">
                  <h3>{% trans %}_footer_left_title{% endtrans %}</h3>
                  <div class=\"tiny-border\"></div>
                  <ul>
                      <li><a href=\"#\">{% trans %}_footer_left_option1{% endtrans %}</a></li>
                      <li><a href=\"#\">{% trans %}_footer_left_option2{% endtrans %}</a></li>
                      <li><a href=\"#\">{% trans %}_footer_left_option3{% endtrans %}</a></li>
                      <li><a href=\"#\">{% trans %}_footer_left_option4{% endtrans %}</a></li>
                      <li><a href=\"#\">{% trans %}_footer_left_option5{% endtrans %}</a></li>
                      <li><a href=\"#\">{% trans %}_footer_left_option6{% endtrans %}</a></li>
                  </ul>
              </div>

              <div class=\"col-md-4\">
                  <h3>{% trans %}_footer_center_title{% endtrans %}</h3>
                  <div class=\"tiny-border\"></div>
                  {% trans %}_footer_center_parragraph{% endtrans %}

                  <div class=\"divider-single\"></div>
                  <div class=\"social-icons\">
                      <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                      <a href=\"#\"><i class=\"fa fa-envelope-o\"></i></a>
                  </div>
              </div>

              <div class=\"col-md-4\">
                  <h3>{% trans %}_footer_right_title{% endtrans %}</h3>
                  <div class=\"tiny-border\"></div>
                  <p>{% trans %}_footer_right_parragraph{% endtrans %}</p>
                  <a href=\"#\" class=\"btn-border-light\">{% trans %}_footer_cta{% endtrans %}</a>
              </div>

          </div>
      </div>
      <div class=\"divider\"></div>

      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-md-12 text-center\">
                  <div class=\"spacer-single\"></div>
                  {% trans %}_footer_copyright{% endtrans %}
              </div>
          </div>
      </div>
  </footer>
  <!-- footer close -->

  {% endblock %}
</div>
{% endblock %}
";
    }
}

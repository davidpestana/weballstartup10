<?php

/* PublicBundle::layout.html.twig */
class __TwigTemplate_ef57d11f64e98029f89309122521b8d30d08f00ce80344c7b59a665563168e87 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<!-- LOAD CSS FILES -->
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "
<!-- LOAD JS FILES -->
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/jquery.isotope.min.js\"></script>
<script src=\"js/easing.js\"></script>
<script src=\"js/jquery.ui.totop.js\"></script>
<script src=\"js/ender.js\"></script>
<script src=\"js/owl.carousel.js\"></script>
<script src=\"js/jquery.fitvids.js\"></script>
<script src=\"js/jquery.plugin.js\"></script>
<script src=\"js/wow.min.js\"></script>
<script src=\"js/jquery.magnific-popup.min.js\"></script>
<script src=\"js/jquery.stellar.js\"></script>
<script src=\"js/typed.js\"></script>
<script src=\"js/jquery.scrollto.js\"></script>
<script src=\"js/custom.js\"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type=\"text/javascript\" src=\"rs-plugin/js/jquery.themepunch.plugins.min.js\"></script>
<script type=\"text/javascript\" src=\"rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
<script src=\"js/revslider-custom.js\"></script>


";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "<div id=\"preloader\"></div>
<div id=\"wrapper\">
  ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 112
        echo "
  <div id=\"content\" class=\"no-padding\">
  ";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 115
        echo "  </div>

  ";
        // line 117
        $this->displayBlock('footer', $context, $blocks);
        // line 180
        echo "</div>
";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
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
                                <a href=\"index.html\">
                                    <img src=\"img/logo.png\" alt=\"\" class=\"logo-1\">
                                    <img src=\"img/logo-2.png\" alt=\"\" class=\"logo-2\">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>

                    <div class=\"col-md-9\">

                        <!-- mainmenu begin
                        <nav id=\"mainmenu-container\">
                            <ul id=\"mainmenu\">
                                <li><a href=\"index.html\">Home</a>
                                    <ul>
                                        <li><a href=\"index.html\">Homepage 1</a></li>
                                        <li><a href=\"index-2.html\">Homepage 2</a></li>
                                        <li><a href=\"index-3.html\">Homepage 3</a></li>
                                        <li><a href=\"index-4.html\">Homepage 4</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"services.html\">Services</a>
                                    <ul>
                                        <li><a href=\"services.html\">All Services</a></li>
                                        <li><a href=\"service-details-1.html\">Ocean Freight</a></li>
                                        <li><a href=\"service-details-2.html\">Air Freight</a></li>
                                        <li><a href=\"service-details-3.html\">Cargo Express</a></li>
                                        <li><a href=\"service-details-4.html\">Logistics</a></li>
                                        <li><a href=\"service-details-5.html\">Warehousing</a></li>
                                        <li><a href=\"service-details-6.html\">Custom Brokerage</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"about.html\">About Us</a></li>
                                <li><a href=\"track.html\">Track</a></li>
                                <li><a href=\"news.html\">News</a></li>
                                <li><a href=\"gallery.html\">Gallery</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </nav>
                         mainmenu close -->

                        <!-- social icons -->
                        <div class=\"social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-envelope-o\"></i></a>
                        </div>
                        <!-- social icons close -->

                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
  ";
    }

    // line 114
    public function block_content($context, array $blocks = array())
    {
    }

    // line 117
    public function block_footer($context, array $blocks = array())
    {
        // line 118
        echo "
  <!-- footer begin -->
  <footer>
      <div class=\"container\">
          <div class=\"row\">



              <div class=\"col-md-4\">
                  <h3>Our Services</h3>
                  <div class=\"tiny-border\"></div>
                  <ul>
                      <li><a href=\"#\">Ocean Freight</a></li>
                      <li><a href=\"#\">Sky Freight</a></li>
                      <li><a href=\"#\">Cargo Express</a></li>
                      <li><a href=\"#\">Logistics</a></li>
                      <li><a href=\"#\">Warehousing</a></li>
                      <li><a href=\"#\">Custom Brokerage</a></li>
                  </ul>
              </div>

              <div class=\"col-md-4\">
                  <h3>Location</h3>
                  <div class=\"tiny-border\"></div>
                  Somewhere Over Rainbow<br>
                  Green World Rainbow Green World<br>
                  T. 0908 1000 1000<br>
                  E. contact@exotheme.com<br>

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
                  <h3>Buy Now</h3>
                  <div class=\"tiny-border\"></div>
                  <p>Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.</p>
                  <a href=\"#\" class=\"btn-border-light\">Buy Now</a>
              </div>

          </div>
      </div>
      <div class=\"divider\"></div>

      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-md-12 text-center\">
                  <div class=\"spacer-single\"></div>
                  &copy; Copyright 2015 - GoCargo by ExoTheme
              </div>
          </div>
      </div>
  </footer>
  <!-- footer close -->

  ";
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
        return array (  186 => 118,  183 => 117,  178 => 114,  105 => 42,  102 => 41,  97 => 180,  95 => 117,  91 => 115,  89 => 114,  85 => 112,  83 => 41,  79 => 39,  76 => 38,  48 => 9,  45 => 8,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

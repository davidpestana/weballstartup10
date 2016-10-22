<?php

/* WebSiteBundle::layout.html.twig */
class __TwigTemplate_b3ba37761800f6f57b269987ba5d80dbd3d3b97145a38f9b0b3c04c47d040b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WebSiteBundle::layout.html.twig", 1);
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
        $__internal_1a1c9f24576b0f8348252dffca23fc839f7131014c416a1b59d0ce1d51021eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1c9f24576b0f8348252dffca23fc839f7131014c416a1b59d0ce1d51021eae->enter($__internal_1a1c9f24576b0f8348252dffca23fc839f7131014c416a1b59d0ce1d51021eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a1c9f24576b0f8348252dffca23fc839f7131014c416a1b59d0ce1d51021eae->leave($__internal_1a1c9f24576b0f8348252dffca23fc839f7131014c416a1b59d0ce1d51021eae_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56ae3bd00a3d63923ff23d1ec2b33e4744cca5be46400b437901316c9d463079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ae3bd00a3d63923ff23d1ec2b33e4744cca5be46400b437901316c9d463079->enter($__internal_56ae3bd00a3d63923ff23d1ec2b33e4744cca5be46400b437901316c9d463079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<!-- LOAD CSS FILES -->

<!-- Stylesheets
============================================= -->
<link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/bootstrap.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/style.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/swiper.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/dark.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/font-icons.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/animate.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/magnific-popup.css\" type=\"text/css\" />

<!-- Radio Checkbox Plugin -->
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/components/radio-checkbox.css\" type=\"text/css\" />


<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/responsive.css\" type=\"text/css\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<!--[if lt IE 9]>
  <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
<![endif]-->

";
        
        $__internal_56ae3bd00a3d63923ff23d1ec2b33e4744cca5be46400b437901316c9d463079->leave($__internal_56ae3bd00a3d63923ff23d1ec2b33e4744cca5be46400b437901316c9d463079_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b67348c3570fd9626ddf1290f2edda91c1f11a2b976470863475b28a5ede5197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67348c3570fd9626ddf1290f2edda91c1f11a2b976470863475b28a5ede5197->enter($__internal_b67348c3570fd9626ddf1290f2edda91c1f11a2b976470863475b28a5ede5197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "      <!-- LOAD JS FILES -->
      <!-- External JavaScripts
      ============================================= -->
      <script type=\"text/javascript\" src=\"/WebSiteBundle/js/jquery.js\"></script>
      <script type=\"text/javascript\" src=\"/WebSiteBundle/js/plugins.js\"></script>

      <!-- Footer Scripts
      ============================================= -->
      <script type=\"text/javascript\" src=\"/WebSiteBundle/js/functions.js\"></script>
";
        
        $__internal_b67348c3570fd9626ddf1290f2edda91c1f11a2b976470863475b28a5ede5197->leave($__internal_b67348c3570fd9626ddf1290f2edda91c1f11a2b976470863475b28a5ede5197_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_69551531ef75af681abc92e7663c75c02cb9f442dc23c1f171d4046d6e3c3bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69551531ef75af681abc92e7663c75c02cb9f442dc23c1f171d4046d6e3c3bcd->enter($__internal_69551531ef75af681abc92e7663c75c02cb9f442dc23c1f171d4046d6e3c3bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">
  ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
  ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

";
        
        $__internal_69551531ef75af681abc92e7663c75c02cb9f442dc23c1f171d4046d6e3c3bcd->leave($__internal_69551531ef75af681abc92e7663c75c02cb9f442dc23c1f171d4046d6e3c3bcd_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_801eff05391a68822c1efe856511b67d505e2ec3affa8be245a423b0aee153de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801eff05391a68822c1efe856511b67d505e2ec3affa8be245a423b0aee153de->enter($__internal_801eff05391a68822c1efe856511b67d505e2ec3affa8be245a423b0aee153de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "
      ";
        // line 48
        $this->loadTemplate("WebSiteBundle::header.html.twig", "WebSiteBundle::layout.html.twig", 48)->display($context);
        // line 49
        echo "
  ";
        
        $__internal_801eff05391a68822c1efe856511b67d505e2ec3affa8be245a423b0aee153de->leave($__internal_801eff05391a68822c1efe856511b67d505e2ec3affa8be245a423b0aee153de_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e7b6288ad22b4f671293f4f70b077a448a3f753303e5efbff84c892d841a329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7b6288ad22b4f671293f4f70b077a448a3f753303e5efbff84c892d841a329->enter($__internal_9e7b6288ad22b4f671293f4f70b077a448a3f753303e5efbff84c892d841a329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9e7b6288ad22b4f671293f4f70b077a448a3f753303e5efbff84c892d841a329->leave($__internal_9e7b6288ad22b4f671293f4f70b077a448a3f753303e5efbff84c892d841a329_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_06bc144a56fff6052f414f7cb793e7e7ccd574d27768837b1cdc55f9ad53f3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bc144a56fff6052f414f7cb793e7e7ccd574d27768837b1cdc55f9ad53f3d1->enter($__internal_06bc144a56fff6052f414f7cb793e7e7ccd574d27768837b1cdc55f9ad53f3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "
      ";
        // line 56
        $this->loadTemplate("WebSiteBundle::footer.html.twig", "WebSiteBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "
  ";
        
        $__internal_06bc144a56fff6052f414f7cb793e7e7ccd574d27768837b1cdc55f9ad53f3d1->leave($__internal_06bc144a56fff6052f414f7cb793e7e7ccd574d27768837b1cdc55f9ad53f3d1_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  172 => 56,  169 => 55,  163 => 54,  152 => 52,  144 => 49,  142 => 48,  139 => 47,  133 => 46,  120 => 59,  118 => 54,  115 => 53,  113 => 52,  110 => 51,  108 => 46,  103 => 43,  97 => 42,  81 => 30,  75 => 29,  45 => 4,  39 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block stylesheets %}
<!-- LOAD CSS FILES -->

<!-- Stylesheets
============================================= -->
<link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/bootstrap.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/style.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/swiper.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/dark.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/font-icons.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/animate.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/magnific-popup.css\" type=\"text/css\" />

<!-- Radio Checkbox Plugin -->
<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/components/radio-checkbox.css\" type=\"text/css\" />


<link rel=\"stylesheet\" href=\"/WebSiteBundle/css/responsive.css\" type=\"text/css\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<!--[if lt IE 9]>
  <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
<![endif]-->

{% endblock %}

{% block javascripts %}
      <!-- LOAD JS FILES -->
      <!-- External JavaScripts
      ============================================= -->
      <script type=\"text/javascript\" src=\"/WebSiteBundle/js/jquery.js\"></script>
      <script type=\"text/javascript\" src=\"/WebSiteBundle/js/plugins.js\"></script>

      <!-- Footer Scripts
      ============================================= -->
      <script type=\"text/javascript\" src=\"/WebSiteBundle/js/functions.js\"></script>
{% endblock %}


{% block body %}
<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">
  {% block header %}

      {% include ('WebSiteBundle::header.html.twig') %}

  {% endblock %}

  {% block content %}{% endblock %}

  {% block footer %}

      {% include ('WebSiteBundle::footer.html.twig') %}

  {% endblock %}
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

{% endblock %}
";
    }
}

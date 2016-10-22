<?php

/* WebSiteBundle::layout.html.twig */
class __TwigTemplate_d968c49d18a8020acc4081cc638c5aa41cb92c612e933674a98aeb3686228f7e extends Twig_Template
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
        $__internal_18a8235e3518635b2eef738f5d20878214607fb91d46d0b6be212f18a3a40ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a8235e3518635b2eef738f5d20878214607fb91d46d0b6be212f18a3a40ed5->enter($__internal_18a8235e3518635b2eef738f5d20878214607fb91d46d0b6be212f18a3a40ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a8235e3518635b2eef738f5d20878214607fb91d46d0b6be212f18a3a40ed5->leave($__internal_18a8235e3518635b2eef738f5d20878214607fb91d46d0b6be212f18a3a40ed5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0262b7d269b607731e9418eba3e8589f6a59ecec34607599017f7d2eabf93b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0262b7d269b607731e9418eba3e8589f6a59ecec34607599017f7d2eabf93b5->enter($__internal_a0262b7d269b607731e9418eba3e8589f6a59ecec34607599017f7d2eabf93b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a0262b7d269b607731e9418eba3e8589f6a59ecec34607599017f7d2eabf93b5->leave($__internal_a0262b7d269b607731e9418eba3e8589f6a59ecec34607599017f7d2eabf93b5_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f40d57bcd631e789de75d58753f3ff536bd99a791fe12f6aed3ef60b0e34a7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40d57bcd631e789de75d58753f3ff536bd99a791fe12f6aed3ef60b0e34a7d7->enter($__internal_f40d57bcd631e789de75d58753f3ff536bd99a791fe12f6aed3ef60b0e34a7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f40d57bcd631e789de75d58753f3ff536bd99a791fe12f6aed3ef60b0e34a7d7->leave($__internal_f40d57bcd631e789de75d58753f3ff536bd99a791fe12f6aed3ef60b0e34a7d7_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e93ca2762cc1f80647822034ea80f670d774e23fb8d1242927d78e1a877a5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e93ca2762cc1f80647822034ea80f670d774e23fb8d1242927d78e1a877a5fd->enter($__internal_2e93ca2762cc1f80647822034ea80f670d774e23fb8d1242927d78e1a877a5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e93ca2762cc1f80647822034ea80f670d774e23fb8d1242927d78e1a877a5fd->leave($__internal_2e93ca2762cc1f80647822034ea80f670d774e23fb8d1242927d78e1a877a5fd_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_e38b3465aba91679b7d0a3a1c49df726d792416627ab806e110f08d95e3f6e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38b3465aba91679b7d0a3a1c49df726d792416627ab806e110f08d95e3f6e00->enter($__internal_e38b3465aba91679b7d0a3a1c49df726d792416627ab806e110f08d95e3f6e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "
      ";
        // line 48
        $this->loadTemplate("WebSiteBundle::header.html.twig", "WebSiteBundle::layout.html.twig", 48)->display($context);
        // line 49
        echo "
  ";
        
        $__internal_e38b3465aba91679b7d0a3a1c49df726d792416627ab806e110f08d95e3f6e00->leave($__internal_e38b3465aba91679b7d0a3a1c49df726d792416627ab806e110f08d95e3f6e00_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_15c7842563837f4053f3a06813ce6567be609f57162c6625697c1ed162e35551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c7842563837f4053f3a06813ce6567be609f57162c6625697c1ed162e35551->enter($__internal_15c7842563837f4053f3a06813ce6567be609f57162c6625697c1ed162e35551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_15c7842563837f4053f3a06813ce6567be609f57162c6625697c1ed162e35551->leave($__internal_15c7842563837f4053f3a06813ce6567be609f57162c6625697c1ed162e35551_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_132f9ebc691c756a1dc266e2983a3a0fdbcfb58eb3ce5465028a95ef88ec15db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132f9ebc691c756a1dc266e2983a3a0fdbcfb58eb3ce5465028a95ef88ec15db->enter($__internal_132f9ebc691c756a1dc266e2983a3a0fdbcfb58eb3ce5465028a95ef88ec15db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "
      ";
        // line 56
        $this->loadTemplate("WebSiteBundle::footer.html.twig", "WebSiteBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "
  ";
        
        $__internal_132f9ebc691c756a1dc266e2983a3a0fdbcfb58eb3ce5465028a95ef88ec15db->leave($__internal_132f9ebc691c756a1dc266e2983a3a0fdbcfb58eb3ce5465028a95ef88ec15db_prof);

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

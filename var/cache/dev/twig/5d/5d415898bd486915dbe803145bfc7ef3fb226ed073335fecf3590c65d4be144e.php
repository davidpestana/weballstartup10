<?php

/* WebSiteBundle::header.html.twig */
class __TwigTemplate_22de449a22a7f457f066b1689b86b8b0432da182cad3f5b6e121a3f448274af7 extends Twig_Template
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
        $__internal_0bea14ccfab1c5df96c1cccfbfcda9811007d3abc462cb43a424e17424130e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bea14ccfab1c5df96c1cccfbfcda9811007d3abc462cb43a424e17424130e12->enter($__internal_0bea14ccfab1c5df96c1cccfbfcda9811007d3abc462cb43a424e17424130e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle::header.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("WebSiteBundle:Default:Lead", array()));
        echo "
";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("WebSiteBundle:Default:LeadRecruiter", array()));
        echo "

<!-- Header
============================================= -->
<header id=\"header\" class=\"transparent-header\">

  <div id=\"header-wrap\">

    <div class=\"container clearfix\">

      <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

      <!-- Logo
      ============================================= -->
      <div id=\"logo\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("website_default_index");
        echo "\" class=\"standard-logo\" data-dark-logo=\"/WebSiteBundle/images/logo-dark.png\"><img src=\"/WebSiteBundle/images/logo.png\" alt=\"Traqui\"></a>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("website_default_index");
        echo "\" class=\"retina-logo\" data-dark-logo=\"/WebSiteBundle/images/logo-dark@2x.png\"><img src=\"/WebSiteBundle/images/logo@2x.png\" alt=\"Traqui\"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id=\"primary-menu\">

        <ul>
          <li class=\"current\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("website_default_index");
        echo "\"><div>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_home", array(), "messages");
        echo "</div></a></li>
          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("website_default_recruiters");
        echo "\"><div>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_menu_recruiters", array(), "messages");
        echo "</div></a></li>
          <li><a href=\"#modal-login-form\" data-lightbox=\"inline\"><div>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_signin", array(), "messages");
        echo "</div></a></li>
          <li><a href=\"#modal-login-form\" data-lightbox=\"inline\"><div>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_signup", array(), "messages");
        echo "</div></a></li>
        </ul>

      </nav><!-- #primary-menu end -->

    </div>

  </div>

</header><!-- #header end -->

<!-- Header End
============================================= -->
";
        
        $__internal_0bea14ccfab1c5df96c1cccfbfcda9811007d3abc462cb43a424e17424130e12->leave($__internal_0bea14ccfab1c5df96c1cccfbfcda9811007d3abc462cb43a424e17424130e12_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  74 => 29,  68 => 28,  62 => 27,  51 => 19,  47 => 18,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
{{ render(controller('WebSiteBundle:Default:Lead', {  })) }}
{{ render(controller('WebSiteBundle:Default:LeadRecruiter', {  })) }}

<!-- Header
============================================= -->
<header id=\"header\" class=\"transparent-header\">

  <div id=\"header-wrap\">

    <div class=\"container clearfix\">

      <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

      <!-- Logo
      ============================================= -->
      <div id=\"logo\">
        <a href=\"{{ path('website_default_index') }}\" class=\"standard-logo\" data-dark-logo=\"/WebSiteBundle/images/logo-dark.png\"><img src=\"/WebSiteBundle/images/logo.png\" alt=\"Traqui\"></a>
        <a href=\"{{ path('website_default_index') }}\" class=\"retina-logo\" data-dark-logo=\"/WebSiteBundle/images/logo-dark@2x.png\"><img src=\"/WebSiteBundle/images/logo@2x.png\" alt=\"Traqui\"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id=\"primary-menu\">

        <ul>
          <li class=\"current\"><a href=\"{{ path('website_default_index') }}\"><div>{% trans %}_menu_home{% endtrans %}</div></a></li>
          <li><a href=\"{{ path('website_default_recruiters') }}\"><div>{% trans %}_menu_recruiters{% endtrans %}</div></a></li>
          <li><a href=\"#modal-login-form\" data-lightbox=\"inline\"><div>{% trans %}_signin{% endtrans %}</div></a></li>
          <li><a href=\"#modal-login-form\" data-lightbox=\"inline\"><div>{% trans %}_signup{% endtrans %}</div></a></li>
        </ul>

      </nav><!-- #primary-menu end -->

    </div>

  </div>

</header><!-- #header end -->

<!-- Header End
============================================= -->
";
    }
}

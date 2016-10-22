<?php

/* base.html.twig */
class __TwigTemplate_1770b3328810ac46cb000d5ceb17e94d280095865c972483c170a11d15164981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83cda57e3a3b70b5f7892542bd6cf4e5f3a75197c02b6e3701e5019921e0961b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cda57e3a3b70b5f7892542bd6cf4e5f3a75197c02b6e3701e5019921e0961b->enter($__internal_83cda57e3a3b70b5f7892542bd6cf4e5f3a75197c02b6e3701e5019921e0961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"stretched\">
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-85960905-1', 'auto');
            ga('send', 'pageview');

       </script>
    </body>
</html>
";
        
        $__internal_83cda57e3a3b70b5f7892542bd6cf4e5f3a75197c02b6e3701e5019921e0961b->leave($__internal_83cda57e3a3b70b5f7892542bd6cf4e5f3a75197c02b6e3701e5019921e0961b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74343b3a59b2cc63b2b7573dc391e054a3dce80ff26b2c68ab56398ffb4fd87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74343b3a59b2cc63b2b7573dc391e054a3dce80ff26b2c68ab56398ffb4fd87d->enter($__internal_74343b3a59b2cc63b2b7573dc391e054a3dce80ff26b2c68ab56398ffb4fd87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_74343b3a59b2cc63b2b7573dc391e054a3dce80ff26b2c68ab56398ffb4fd87d->leave($__internal_74343b3a59b2cc63b2b7573dc391e054a3dce80ff26b2c68ab56398ffb4fd87d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1eb90e5da2c8d44542bf97fd14364729eec88b3a062b9d7b2c1f0f1d4e92bf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb90e5da2c8d44542bf97fd14364729eec88b3a062b9d7b2c1f0f1d4e92bf1c->enter($__internal_1eb90e5da2c8d44542bf97fd14364729eec88b3a062b9d7b2c1f0f1d4e92bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1eb90e5da2c8d44542bf97fd14364729eec88b3a062b9d7b2c1f0f1d4e92bf1c->leave($__internal_1eb90e5da2c8d44542bf97fd14364729eec88b3a062b9d7b2c1f0f1d4e92bf1c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_431e266c8dc126ca9b55467ed6b0d8271ac45763aad4b593c0c6825fb1c96069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431e266c8dc126ca9b55467ed6b0d8271ac45763aad4b593c0c6825fb1c96069->enter($__internal_431e266c8dc126ca9b55467ed6b0d8271ac45763aad4b593c0c6825fb1c96069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_431e266c8dc126ca9b55467ed6b0d8271ac45763aad4b593c0c6825fb1c96069->leave($__internal_431e266c8dc126ca9b55467ed6b0d8271ac45763aad4b593c0c6825fb1c96069_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b22174c21423ca4fa67d139c30f11b5569995f91dcf93d6f8240fbfe18feca1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22174c21423ca4fa67d139c30f11b5569995f91dcf93d6f8240fbfe18feca1d->enter($__internal_b22174c21423ca4fa67d139c30f11b5569995f91dcf93d6f8240fbfe18feca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b22174c21423ca4fa67d139c30f11b5569995f91dcf93d6f8240fbfe18feca1d->leave($__internal_b22174c21423ca4fa67d139c30f11b5569995f91dcf93d6f8240fbfe18feca1d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 11,  92 => 10,  81 => 6,  69 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"stretched\">
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-85960905-1', 'auto');
            ga('send', 'pageview');

       </script>
    </body>
</html>
";
    }
}

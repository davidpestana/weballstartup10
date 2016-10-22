<?php

/* base.html.twig */
class __TwigTemplate_d1c0946c4bbc13b309e8fbae859f954db669aab7a707720f53f9548f9d4437c8 extends Twig_Template
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
        $__internal_0afdda1ad3143a44b63b2f391353e7d78ef8a59066f0a741644d450b79d06e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afdda1ad3143a44b63b2f391353e7d78ef8a59066f0a741644d450b79d06e48->enter($__internal_0afdda1ad3143a44b63b2f391353e7d78ef8a59066f0a741644d450b79d06e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0afdda1ad3143a44b63b2f391353e7d78ef8a59066f0a741644d450b79d06e48->leave($__internal_0afdda1ad3143a44b63b2f391353e7d78ef8a59066f0a741644d450b79d06e48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5ac9b3b59ea176672ea2a3d47d30f030d53be7b05b75e794113eda6ebd8ab4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ac9b3b59ea176672ea2a3d47d30f030d53be7b05b75e794113eda6ebd8ab4e->enter($__internal_c5ac9b3b59ea176672ea2a3d47d30f030d53be7b05b75e794113eda6ebd8ab4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c5ac9b3b59ea176672ea2a3d47d30f030d53be7b05b75e794113eda6ebd8ab4e->leave($__internal_c5ac9b3b59ea176672ea2a3d47d30f030d53be7b05b75e794113eda6ebd8ab4e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f42a51b34fe15692d45a73c351ef0b5d18974d4156c6e4132b1998e7e794b1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42a51b34fe15692d45a73c351ef0b5d18974d4156c6e4132b1998e7e794b1a9->enter($__internal_f42a51b34fe15692d45a73c351ef0b5d18974d4156c6e4132b1998e7e794b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f42a51b34fe15692d45a73c351ef0b5d18974d4156c6e4132b1998e7e794b1a9->leave($__internal_f42a51b34fe15692d45a73c351ef0b5d18974d4156c6e4132b1998e7e794b1a9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d192478fa964fa9c23658c1bd9d59dab1ea9faecdde9bf22c1b41d42eba344b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d192478fa964fa9c23658c1bd9d59dab1ea9faecdde9bf22c1b41d42eba344b7->enter($__internal_d192478fa964fa9c23658c1bd9d59dab1ea9faecdde9bf22c1b41d42eba344b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d192478fa964fa9c23658c1bd9d59dab1ea9faecdde9bf22c1b41d42eba344b7->leave($__internal_d192478fa964fa9c23658c1bd9d59dab1ea9faecdde9bf22c1b41d42eba344b7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b840db5c62ebc8d77af1195f1bfb20b0dacfa1ddf7d31f43eaed29e0bd9096b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b840db5c62ebc8d77af1195f1bfb20b0dacfa1ddf7d31f43eaed29e0bd9096b->enter($__internal_2b840db5c62ebc8d77af1195f1bfb20b0dacfa1ddf7d31f43eaed29e0bd9096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2b840db5c62ebc8d77af1195f1bfb20b0dacfa1ddf7d31f43eaed29e0bd9096b->leave($__internal_2b840db5c62ebc8d77af1195f1bfb20b0dacfa1ddf7d31f43eaed29e0bd9096b_prof);

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

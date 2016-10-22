<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3c3f8b97cfaeaa253393fda25bb690718bbcf56d865568831618828ea5c814a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9938bc73d07ca504bb79aa53abbe392d71b5e953702a5929aa644d5a28aeffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9938bc73d07ca504bb79aa53abbe392d71b5e953702a5929aa644d5a28aeffe->enter($__internal_d9938bc73d07ca504bb79aa53abbe392d71b5e953702a5929aa644d5a28aeffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9938bc73d07ca504bb79aa53abbe392d71b5e953702a5929aa644d5a28aeffe->leave($__internal_d9938bc73d07ca504bb79aa53abbe392d71b5e953702a5929aa644d5a28aeffe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8064f88c6c7b7b1be6cb2dccc1f51306442c1665e0bc003190a15f6d881fcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8064f88c6c7b7b1be6cb2dccc1f51306442c1665e0bc003190a15f6d881fcb9->enter($__internal_b8064f88c6c7b7b1be6cb2dccc1f51306442c1665e0bc003190a15f6d881fcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b8064f88c6c7b7b1be6cb2dccc1f51306442c1665e0bc003190a15f6d881fcb9->leave($__internal_b8064f88c6c7b7b1be6cb2dccc1f51306442c1665e0bc003190a15f6d881fcb9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e07852c3958d43addf7850d277d033bc69800b0b9fe8eabaa1accf8a91b1f51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07852c3958d43addf7850d277d033bc69800b0b9fe8eabaa1accf8a91b1f51d->enter($__internal_e07852c3958d43addf7850d277d033bc69800b0b9fe8eabaa1accf8a91b1f51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e07852c3958d43addf7850d277d033bc69800b0b9fe8eabaa1accf8a91b1f51d->leave($__internal_e07852c3958d43addf7850d277d033bc69800b0b9fe8eabaa1accf8a91b1f51d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_213d53b8b550bad7ba60d8be9421872a9e725bb1f84e917b2b7d43f158e7eb6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_198ac5e968c16856fbb25511052494799721bae4a98b76caffe5361e0cdb1546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198ac5e968c16856fbb25511052494799721bae4a98b76caffe5361e0cdb1546->enter($__internal_198ac5e968c16856fbb25511052494799721bae4a98b76caffe5361e0cdb1546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_198ac5e968c16856fbb25511052494799721bae4a98b76caffe5361e0cdb1546->leave($__internal_198ac5e968c16856fbb25511052494799721bae4a98b76caffe5361e0cdb1546_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f2c8307103934935bbde698f32e2546b15b1a2b3e5dd46024d25d994fff7f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2c8307103934935bbde698f32e2546b15b1a2b3e5dd46024d25d994fff7f15->enter($__internal_6f2c8307103934935bbde698f32e2546b15b1a2b3e5dd46024d25d994fff7f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f2c8307103934935bbde698f32e2546b15b1a2b3e5dd46024d25d994fff7f15->leave($__internal_6f2c8307103934935bbde698f32e2546b15b1a2b3e5dd46024d25d994fff7f15_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_662d78ce963e863e00bd504393c959cb77135d7b1fe421d931acb1299855d334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662d78ce963e863e00bd504393c959cb77135d7b1fe421d931acb1299855d334->enter($__internal_662d78ce963e863e00bd504393c959cb77135d7b1fe421d931acb1299855d334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_662d78ce963e863e00bd504393c959cb77135d7b1fe421d931acb1299855d334->leave($__internal_662d78ce963e863e00bd504393c959cb77135d7b1fe421d931acb1299855d334_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_81f498ea2213a7f36b2f3ddf702d9853042601454d022258c2aaf8bf0cebc442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f498ea2213a7f36b2f3ddf702d9853042601454d022258c2aaf8bf0cebc442->enter($__internal_81f498ea2213a7f36b2f3ddf702d9853042601454d022258c2aaf8bf0cebc442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_81f498ea2213a7f36b2f3ddf702d9853042601454d022258c2aaf8bf0cebc442->leave($__internal_81f498ea2213a7f36b2f3ddf702d9853042601454d022258c2aaf8bf0cebc442_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}

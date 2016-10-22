<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b37f514579fdec222578f57c1b796aec48245b261c21716df3aad87eb5a1ce94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b199ef4088dd72ba241da30eaef1db80ac11f1bdf27ea3ec73fca437682c61f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b199ef4088dd72ba241da30eaef1db80ac11f1bdf27ea3ec73fca437682c61f5->enter($__internal_b199ef4088dd72ba241da30eaef1db80ac11f1bdf27ea3ec73fca437682c61f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b199ef4088dd72ba241da30eaef1db80ac11f1bdf27ea3ec73fca437682c61f5->leave($__internal_b199ef4088dd72ba241da30eaef1db80ac11f1bdf27ea3ec73fca437682c61f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e9e8d38afb3a8670fae597e06cef8e91d07d5a8239468e301dbf1b123cfeb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9e8d38afb3a8670fae597e06cef8e91d07d5a8239468e301dbf1b123cfeb02->enter($__internal_9e9e8d38afb3a8670fae597e06cef8e91d07d5a8239468e301dbf1b123cfeb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e9e8d38afb3a8670fae597e06cef8e91d07d5a8239468e301dbf1b123cfeb02->leave($__internal_9e9e8d38afb3a8670fae597e06cef8e91d07d5a8239468e301dbf1b123cfeb02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_369b18c1a6fbec422a9785b2e00eda0c489434d04e3ec74fbe409914f8b73c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369b18c1a6fbec422a9785b2e00eda0c489434d04e3ec74fbe409914f8b73c80->enter($__internal_369b18c1a6fbec422a9785b2e00eda0c489434d04e3ec74fbe409914f8b73c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_369b18c1a6fbec422a9785b2e00eda0c489434d04e3ec74fbe409914f8b73c80->leave($__internal_369b18c1a6fbec422a9785b2e00eda0c489434d04e3ec74fbe409914f8b73c80_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e33f72226601b7de50c3e63f1964949ee3af4abc7278356fa1e79571004b67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e33f72226601b7de50c3e63f1964949ee3af4abc7278356fa1e79571004b67f->enter($__internal_7e33f72226601b7de50c3e63f1964949ee3af4abc7278356fa1e79571004b67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7e33f72226601b7de50c3e63f1964949ee3af4abc7278356fa1e79571004b67f->leave($__internal_7e33f72226601b7de50c3e63f1964949ee3af4abc7278356fa1e79571004b67f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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

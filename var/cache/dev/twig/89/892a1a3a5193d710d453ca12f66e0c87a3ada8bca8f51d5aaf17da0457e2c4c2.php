<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_099b83fda52b710b0589acdb06263c0c202cd341426145dd0215aa82c00e1668 extends Twig_Template
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
        $__internal_19b508888824a14918c90d730ed0246cc3ead22e6f64fbf86be81075ff207e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b508888824a14918c90d730ed0246cc3ead22e6f64fbf86be81075ff207e5e->enter($__internal_19b508888824a14918c90d730ed0246cc3ead22e6f64fbf86be81075ff207e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b508888824a14918c90d730ed0246cc3ead22e6f64fbf86be81075ff207e5e->leave($__internal_19b508888824a14918c90d730ed0246cc3ead22e6f64fbf86be81075ff207e5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10b5c2516654627ac73726dddfde4a87230198050917f21cea7124b8a958af78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b5c2516654627ac73726dddfde4a87230198050917f21cea7124b8a958af78->enter($__internal_10b5c2516654627ac73726dddfde4a87230198050917f21cea7124b8a958af78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_10b5c2516654627ac73726dddfde4a87230198050917f21cea7124b8a958af78->leave($__internal_10b5c2516654627ac73726dddfde4a87230198050917f21cea7124b8a958af78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f06b87f9bd98ed94594667ecbc6b0df7ba3d9427c5ee8726fe7d099480a4268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f06b87f9bd98ed94594667ecbc6b0df7ba3d9427c5ee8726fe7d099480a4268->enter($__internal_6f06b87f9bd98ed94594667ecbc6b0df7ba3d9427c5ee8726fe7d099480a4268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f06b87f9bd98ed94594667ecbc6b0df7ba3d9427c5ee8726fe7d099480a4268->leave($__internal_6f06b87f9bd98ed94594667ecbc6b0df7ba3d9427c5ee8726fe7d099480a4268_prof);

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

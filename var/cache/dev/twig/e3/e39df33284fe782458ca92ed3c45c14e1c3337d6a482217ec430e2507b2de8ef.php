<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4fc507deaf019ccfbbcc49d58c39a1ba9c395d060b167457d48ee436061fd45e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cc2cc204fd1c96b6d961b9044792a55b31f64398a27128ae3bf8148cb369ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc2cc204fd1c96b6d961b9044792a55b31f64398a27128ae3bf8148cb369ec3->enter($__internal_4cc2cc204fd1c96b6d961b9044792a55b31f64398a27128ae3bf8148cb369ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc2cc204fd1c96b6d961b9044792a55b31f64398a27128ae3bf8148cb369ec3->leave($__internal_4cc2cc204fd1c96b6d961b9044792a55b31f64398a27128ae3bf8148cb369ec3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_125def8a0d7c0a362c999ddfb9bd62cb361b6589affdc4ea5e524e45ebfabb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125def8a0d7c0a362c999ddfb9bd62cb361b6589affdc4ea5e524e45ebfabb0d->enter($__internal_125def8a0d7c0a362c999ddfb9bd62cb361b6589affdc4ea5e524e45ebfabb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_125def8a0d7c0a362c999ddfb9bd62cb361b6589affdc4ea5e524e45ebfabb0d->leave($__internal_125def8a0d7c0a362c999ddfb9bd62cb361b6589affdc4ea5e524e45ebfabb0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a473783e673895a0bccacd1525c37ae993a8ea7ea7691cf5cdc56ccf75d174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a473783e673895a0bccacd1525c37ae993a8ea7ea7691cf5cdc56ccf75d174b->enter($__internal_5a473783e673895a0bccacd1525c37ae993a8ea7ea7691cf5cdc56ccf75d174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a473783e673895a0bccacd1525c37ae993a8ea7ea7691cf5cdc56ccf75d174b->leave($__internal_5a473783e673895a0bccacd1525c37ae993a8ea7ea7691cf5cdc56ccf75d174b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_306c13f2e16ecefd11b79755a1a608a73eae6b5efb941540efe8ad5a1d572ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306c13f2e16ecefd11b79755a1a608a73eae6b5efb941540efe8ad5a1d572ddc->enter($__internal_306c13f2e16ecefd11b79755a1a608a73eae6b5efb941540efe8ad5a1d572ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_306c13f2e16ecefd11b79755a1a608a73eae6b5efb941540efe8ad5a1d572ddc->leave($__internal_306c13f2e16ecefd11b79755a1a608a73eae6b5efb941540efe8ad5a1d572ddc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}

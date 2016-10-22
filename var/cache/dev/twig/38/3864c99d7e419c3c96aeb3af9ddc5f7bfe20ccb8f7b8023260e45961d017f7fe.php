<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4736ad758cbedd20fe56cbd327e645d914a10fae7c16c851bc8456b946678fd2 extends Twig_Template
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
        $__internal_954b0bbc63dfc900a84de321fff44554c9be2ae11ae09e05d798e2633ec0b512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954b0bbc63dfc900a84de321fff44554c9be2ae11ae09e05d798e2633ec0b512->enter($__internal_954b0bbc63dfc900a84de321fff44554c9be2ae11ae09e05d798e2633ec0b512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_954b0bbc63dfc900a84de321fff44554c9be2ae11ae09e05d798e2633ec0b512->leave($__internal_954b0bbc63dfc900a84de321fff44554c9be2ae11ae09e05d798e2633ec0b512_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fce8de33c628ad1359e7f87d040029aa7e840d271523543462a7183166e0231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce8de33c628ad1359e7f87d040029aa7e840d271523543462a7183166e0231c->enter($__internal_fce8de33c628ad1359e7f87d040029aa7e840d271523543462a7183166e0231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fce8de33c628ad1359e7f87d040029aa7e840d271523543462a7183166e0231c->leave($__internal_fce8de33c628ad1359e7f87d040029aa7e840d271523543462a7183166e0231c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5737b4a84f6e3f0917c4fe9b6c593e1af76fbe29615bb50258f6e249996a710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5737b4a84f6e3f0917c4fe9b6c593e1af76fbe29615bb50258f6e249996a710->enter($__internal_e5737b4a84f6e3f0917c4fe9b6c593e1af76fbe29615bb50258f6e249996a710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5737b4a84f6e3f0917c4fe9b6c593e1af76fbe29615bb50258f6e249996a710->leave($__internal_e5737b4a84f6e3f0917c4fe9b6c593e1af76fbe29615bb50258f6e249996a710_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46058a49a3dfcd3a4dbd0d01d689c53cf7b89f4f913c3afec378ef9dd4349b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46058a49a3dfcd3a4dbd0d01d689c53cf7b89f4f913c3afec378ef9dd4349b4f->enter($__internal_46058a49a3dfcd3a4dbd0d01d689c53cf7b89f4f913c3afec378ef9dd4349b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46058a49a3dfcd3a4dbd0d01d689c53cf7b89f4f913c3afec378ef9dd4349b4f->leave($__internal_46058a49a3dfcd3a4dbd0d01d689c53cf7b89f4f913c3afec378ef9dd4349b4f_prof);

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

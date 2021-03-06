<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_968483f490579713460d51ac86ee5bd416c57a136a89eb1ead6d3d19b17c86ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_faf3482e3da4afd623dfa138441c023b0cf91d83c65af160429d269b45e4e0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf3482e3da4afd623dfa138441c023b0cf91d83c65af160429d269b45e4e0e0->enter($__internal_faf3482e3da4afd623dfa138441c023b0cf91d83c65af160429d269b45e4e0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf3482e3da4afd623dfa138441c023b0cf91d83c65af160429d269b45e4e0e0->leave($__internal_faf3482e3da4afd623dfa138441c023b0cf91d83c65af160429d269b45e4e0e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c0d01389b828db9528fcfaa96b237ccc477de186d7ee520482c3e2fc587d7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0d01389b828db9528fcfaa96b237ccc477de186d7ee520482c3e2fc587d7fa->enter($__internal_7c0d01389b828db9528fcfaa96b237ccc477de186d7ee520482c3e2fc587d7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7c0d01389b828db9528fcfaa96b237ccc477de186d7ee520482c3e2fc587d7fa->leave($__internal_7c0d01389b828db9528fcfaa96b237ccc477de186d7ee520482c3e2fc587d7fa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c90bc6e001d05106a484e1023844f5f49ea1f1dc4d54f280cfe0d12c27896a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90bc6e001d05106a484e1023844f5f49ea1f1dc4d54f280cfe0d12c27896a5f->enter($__internal_c90bc6e001d05106a484e1023844f5f49ea1f1dc4d54f280cfe0d12c27896a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c90bc6e001d05106a484e1023844f5f49ea1f1dc4d54f280cfe0d12c27896a5f->leave($__internal_c90bc6e001d05106a484e1023844f5f49ea1f1dc4d54f280cfe0d12c27896a5f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ff243ffb31995e9018caa93b89b22c4867e9a3b01bf3fbf77e0ee0635fa71cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff243ffb31995e9018caa93b89b22c4867e9a3b01bf3fbf77e0ee0635fa71cc->enter($__internal_1ff243ffb31995e9018caa93b89b22c4867e9a3b01bf3fbf77e0ee0635fa71cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1ff243ffb31995e9018caa93b89b22c4867e9a3b01bf3fbf77e0ee0635fa71cc->leave($__internal_1ff243ffb31995e9018caa93b89b22c4867e9a3b01bf3fbf77e0ee0635fa71cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}

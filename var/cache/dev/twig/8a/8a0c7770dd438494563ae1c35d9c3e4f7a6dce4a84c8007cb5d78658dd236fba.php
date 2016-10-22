<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_8f65fa4d47797274cb82319daec3d30e79978c90fa9883a21b94b81d5beea86d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a869e1e014f9f76acbe462ab39d2fda437a51f974153a2f1b2a840563505149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a869e1e014f9f76acbe462ab39d2fda437a51f974153a2f1b2a840563505149->enter($__internal_9a869e1e014f9f76acbe462ab39d2fda437a51f974153a2f1b2a840563505149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_9a869e1e014f9f76acbe462ab39d2fda437a51f974153a2f1b2a840563505149->leave($__internal_9a869e1e014f9f76acbe462ab39d2fda437a51f974153a2f1b2a840563505149_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_02b0871b85de1d3240837712e14a71f3d05a190f1c73a1114ef6dc5f7c376c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b0871b85de1d3240837712e14a71f3d05a190f1c73a1114ef6dc5f7c376c4f->enter($__internal_02b0871b85de1d3240837712e14a71f3d05a190f1c73a1114ef6dc5f7c376c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_02b0871b85de1d3240837712e14a71f3d05a190f1c73a1114ef6dc5f7c376c4f->leave($__internal_02b0871b85de1d3240837712e14a71f3d05a190f1c73a1114ef6dc5f7c376c4f_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_d8c4417fd1da3d3315298673c4c5a1fe4c17b923acbf953be8f8d1410fdc75a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c4417fd1da3d3315298673c4c5a1fe4c17b923acbf953be8f8d1410fdc75a7->enter($__internal_d8c4417fd1da3d3315298673c4c5a1fe4c17b923acbf953be8f8d1410fdc75a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_d8c4417fd1da3d3315298673c4c5a1fe4c17b923acbf953be8f8d1410fdc75a7->leave($__internal_d8c4417fd1da3d3315298673c4c5a1fe4c17b923acbf953be8f8d1410fdc75a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
";
    }
}

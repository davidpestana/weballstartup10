<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_2b4ff1c373320a75cb82ef2a6d3968b6b19be689f7cd0c068fa73ef7971487c5 extends Twig_Template
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
        $__internal_f04f94a64a923ede8ea1d1ff4c4cf64ce360aa5dd9d8863a4a9b1e788a21aa0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04f94a64a923ede8ea1d1ff4c4cf64ce360aa5dd9d8863a4a9b1e788a21aa0d->enter($__internal_f04f94a64a923ede8ea1d1ff4c4cf64ce360aa5dd9d8863a4a9b1e788a21aa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_f04f94a64a923ede8ea1d1ff4c4cf64ce360aa5dd9d8863a4a9b1e788a21aa0d->leave($__internal_f04f94a64a923ede8ea1d1ff4c4cf64ce360aa5dd9d8863a4a9b1e788a21aa0d_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_f06ab29ffa9c985b853e0beb4688b4b117fe5a4b12d07c409723bb143a7142a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06ab29ffa9c985b853e0beb4688b4b117fe5a4b12d07c409723bb143a7142a9->enter($__internal_f06ab29ffa9c985b853e0beb4688b4b117fe5a4b12d07c409723bb143a7142a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_f06ab29ffa9c985b853e0beb4688b4b117fe5a4b12d07c409723bb143a7142a9->leave($__internal_f06ab29ffa9c985b853e0beb4688b4b117fe5a4b12d07c409723bb143a7142a9_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_31385600ebc3bc78fc555bde40dbdb6c426b1529493de85045e3750b81e963b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31385600ebc3bc78fc555bde40dbdb6c426b1529493de85045e3750b81e963b4->enter($__internal_31385600ebc3bc78fc555bde40dbdb6c426b1529493de85045e3750b81e963b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_31385600ebc3bc78fc555bde40dbdb6c426b1529493de85045e3750b81e963b4->leave($__internal_31385600ebc3bc78fc555bde40dbdb6c426b1529493de85045e3750b81e963b4_prof);

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

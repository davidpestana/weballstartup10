<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_bcd0d604da924dbd3925a9c9f9c36d1b7aee9a9d1cdeccdc637bc0a7eb7978a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5976564a0e5d740664b659237c46e3a9a0528ed5ef52281fcad79b822b5bd814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5976564a0e5d740664b659237c46e3a9a0528ed5ef52281fcad79b822b5bd814->enter($__internal_5976564a0e5d740664b659237c46e3a9a0528ed5ef52281fcad79b822b5bd814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5976564a0e5d740664b659237c46e3a9a0528ed5ef52281fcad79b822b5bd814->leave($__internal_5976564a0e5d740664b659237c46e3a9a0528ed5ef52281fcad79b822b5bd814_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7f944fa79371f74c7f32fbd8cf2faeb28f12227f46089cb750c6def5a94f0bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f944fa79371f74c7f32fbd8cf2faeb28f12227f46089cb750c6def5a94f0bbb->enter($__internal_7f944fa79371f74c7f32fbd8cf2faeb28f12227f46089cb750c6def5a94f0bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_7f944fa79371f74c7f32fbd8cf2faeb28f12227f46089cb750c6def5a94f0bbb->leave($__internal_7f944fa79371f74c7f32fbd8cf2faeb28f12227f46089cb750c6def5a94f0bbb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}

<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_4d256e8e2695f2ee933f885a0d2ec6ec9f54016b8c2bacefa581e6ab52bc45cd extends Twig_Template
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
        $__internal_899be8b62185130c91fa749309ab58154c7001a005efe3aa2c160be8c63e12fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899be8b62185130c91fa749309ab58154c7001a005efe3aa2c160be8c63e12fd->enter($__internal_899be8b62185130c91fa749309ab58154c7001a005efe3aa2c160be8c63e12fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899be8b62185130c91fa749309ab58154c7001a005efe3aa2c160be8c63e12fd->leave($__internal_899be8b62185130c91fa749309ab58154c7001a005efe3aa2c160be8c63e12fd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0323ec029974c619e8235b2c6e7bba996797a3a6865d451e7494e2d98bb90b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0323ec029974c619e8235b2c6e7bba996797a3a6865d451e7494e2d98bb90b7c->enter($__internal_0323ec029974c619e8235b2c6e7bba996797a3a6865d451e7494e2d98bb90b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_0323ec029974c619e8235b2c6e7bba996797a3a6865d451e7494e2d98bb90b7c->leave($__internal_0323ec029974c619e8235b2c6e7bba996797a3a6865d451e7494e2d98bb90b7c_prof);

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

<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_27a946bb663ba7c67b0eac04ea0c1c33275225c31b8791750300ee9bef90d756 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abe0ff7e18f26fb8517cdbfe6a3cacf3d39fcfccb0ca4da1f4682b0c13c64cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe0ff7e18f26fb8517cdbfe6a3cacf3d39fcfccb0ca4da1f4682b0c13c64cea->enter($__internal_abe0ff7e18f26fb8517cdbfe6a3cacf3d39fcfccb0ca4da1f4682b0c13c64cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe0ff7e18f26fb8517cdbfe6a3cacf3d39fcfccb0ca4da1f4682b0c13c64cea->leave($__internal_abe0ff7e18f26fb8517cdbfe6a3cacf3d39fcfccb0ca4da1f4682b0c13c64cea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_78237ea378060e3d0395d099804f01830fc7d914b3788e5a2610adde54d03957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78237ea378060e3d0395d099804f01830fc7d914b3788e5a2610adde54d03957->enter($__internal_78237ea378060e3d0395d099804f01830fc7d914b3788e5a2610adde54d03957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_78237ea378060e3d0395d099804f01830fc7d914b3788e5a2610adde54d03957->leave($__internal_78237ea378060e3d0395d099804f01830fc7d914b3788e5a2610adde54d03957_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}

<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_52b95bcdc0759719e7de3da4fcda7be21cfa1c1fdea2ed73aa76bdfc25587080 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_545edd9ab5fc006b4ced48722e7924fa533d72563b7dabc5405eaac79ac0e6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545edd9ab5fc006b4ced48722e7924fa533d72563b7dabc5405eaac79ac0e6ad->enter($__internal_545edd9ab5fc006b4ced48722e7924fa533d72563b7dabc5405eaac79ac0e6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_545edd9ab5fc006b4ced48722e7924fa533d72563b7dabc5405eaac79ac0e6ad->leave($__internal_545edd9ab5fc006b4ced48722e7924fa533d72563b7dabc5405eaac79ac0e6ad_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f9ff785fbf369920ff631d87bf65c09e35365941ca5a0e6ca4f91ba7b3371caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ff785fbf369920ff631d87bf65c09e35365941ca5a0e6ca4f91ba7b3371caa->enter($__internal_f9ff785fbf369920ff631d87bf65c09e35365941ca5a0e6ca4f91ba7b3371caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_f9ff785fbf369920ff631d87bf65c09e35365941ca5a0e6ca4f91ba7b3371caa->leave($__internal_f9ff785fbf369920ff631d87bf65c09e35365941ca5a0e6ca4f91ba7b3371caa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}

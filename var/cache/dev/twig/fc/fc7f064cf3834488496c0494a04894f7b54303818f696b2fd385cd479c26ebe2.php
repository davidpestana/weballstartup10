<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_259690edda0a9e6b0e4c9474446e49688121b210d0bdad625f5cd6427b5fc4c9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bf419750897180b420d51ec4569a80cbc85d28b073f671c451d0c58efc656b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf419750897180b420d51ec4569a80cbc85d28b073f671c451d0c58efc656b3->enter($__internal_5bf419750897180b420d51ec4569a80cbc85d28b073f671c451d0c58efc656b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bf419750897180b420d51ec4569a80cbc85d28b073f671c451d0c58efc656b3->leave($__internal_5bf419750897180b420d51ec4569a80cbc85d28b073f671c451d0c58efc656b3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d0799ad0f952b35a446a258f21abbfc6e60bb424db172411f4244e48ac86e2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0799ad0f952b35a446a258f21abbfc6e60bb424db172411f4244e48ac86e2b6->enter($__internal_d0799ad0f952b35a446a258f21abbfc6e60bb424db172411f4244e48ac86e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_d0799ad0f952b35a446a258f21abbfc6e60bb424db172411f4244e48ac86e2b6->leave($__internal_d0799ad0f952b35a446a258f21abbfc6e60bb424db172411f4244e48ac86e2b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}

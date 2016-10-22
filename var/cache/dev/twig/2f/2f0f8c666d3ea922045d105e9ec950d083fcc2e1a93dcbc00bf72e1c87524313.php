<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_a1f9ee92a95565ecccd905a013ba52bef4de1eb8429f9bfac7f23f46411100e4 extends Twig_Template
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
        $__internal_f3026245dbc289b7f6b4e3b71520c7ae44bf07a415bcee06b98c619b0be1f63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3026245dbc289b7f6b4e3b71520c7ae44bf07a415bcee06b98c619b0be1f63e->enter($__internal_f3026245dbc289b7f6b4e3b71520c7ae44bf07a415bcee06b98c619b0be1f63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3026245dbc289b7f6b4e3b71520c7ae44bf07a415bcee06b98c619b0be1f63e->leave($__internal_f3026245dbc289b7f6b4e3b71520c7ae44bf07a415bcee06b98c619b0be1f63e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cc433af199a55e4b623683458207eed60f06c5eb9ec8a270f4f6c54c58ff26b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc433af199a55e4b623683458207eed60f06c5eb9ec8a270f4f6c54c58ff26b6->enter($__internal_cc433af199a55e4b623683458207eed60f06c5eb9ec8a270f4f6c54c58ff26b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_cc433af199a55e4b623683458207eed60f06c5eb9ec8a270f4f6c54c58ff26b6->leave($__internal_cc433af199a55e4b623683458207eed60f06c5eb9ec8a270f4f6c54c58ff26b6_prof);

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

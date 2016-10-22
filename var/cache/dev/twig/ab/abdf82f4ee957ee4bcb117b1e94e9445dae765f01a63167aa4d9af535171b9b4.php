<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_ed1586562002e6ac21d9fffe0b7879276196708a5704b27bbcc50b428a4feb87 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d49d020dbc63948a33ae11a2eb3a91fcd664fb174cf8220ed832a9c1f1140eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49d020dbc63948a33ae11a2eb3a91fcd664fb174cf8220ed832a9c1f1140eb9->enter($__internal_d49d020dbc63948a33ae11a2eb3a91fcd664fb174cf8220ed832a9c1f1140eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49d020dbc63948a33ae11a2eb3a91fcd664fb174cf8220ed832a9c1f1140eb9->leave($__internal_d49d020dbc63948a33ae11a2eb3a91fcd664fb174cf8220ed832a9c1f1140eb9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dd198fdc901e34c95ed7cee6bd8cc22ca52fc8e7f17de68a00b4e1a7c185609d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd198fdc901e34c95ed7cee6bd8cc22ca52fc8e7f17de68a00b4e1a7c185609d->enter($__internal_dd198fdc901e34c95ed7cee6bd8cc22ca52fc8e7f17de68a00b4e1a7c185609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_dd198fdc901e34c95ed7cee6bd8cc22ca52fc8e7f17de68a00b4e1a7c185609d->leave($__internal_dd198fdc901e34c95ed7cee6bd8cc22ca52fc8e7f17de68a00b4e1a7c185609d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}

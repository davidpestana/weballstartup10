<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_80f97bdb183ca656f59f003ab13c59318c1b7b8c2c1157cec06ee8845767c589 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb99677270b8af7f7b09c86fb8a16e4e2de9217aabc9023c8fa28352805d2048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb99677270b8af7f7b09c86fb8a16e4e2de9217aabc9023c8fa28352805d2048->enter($__internal_fb99677270b8af7f7b09c86fb8a16e4e2de9217aabc9023c8fa28352805d2048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb99677270b8af7f7b09c86fb8a16e4e2de9217aabc9023c8fa28352805d2048->leave($__internal_fb99677270b8af7f7b09c86fb8a16e4e2de9217aabc9023c8fa28352805d2048_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f31c77383f9feba529f2aad30fecb191263eb80d052a3fe6c8aab7ce4d01c152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31c77383f9feba529f2aad30fecb191263eb80d052a3fe6c8aab7ce4d01c152->enter($__internal_f31c77383f9feba529f2aad30fecb191263eb80d052a3fe6c8aab7ce4d01c152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_f31c77383f9feba529f2aad30fecb191263eb80d052a3fe6c8aab7ce4d01c152->leave($__internal_f31c77383f9feba529f2aad30fecb191263eb80d052a3fe6c8aab7ce4d01c152_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
";
    }
}

<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_3017a3ace0cbacecacee1eaf4b077a4f910a04b6ecfdd69d73f63c1fd66050e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f10a1e2f12f7a0596620234631fb4a599fbe29904d3254d05f13153ad3cf803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f10a1e2f12f7a0596620234631fb4a599fbe29904d3254d05f13153ad3cf803->enter($__internal_0f10a1e2f12f7a0596620234631fb4a599fbe29904d3254d05f13153ad3cf803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f10a1e2f12f7a0596620234631fb4a599fbe29904d3254d05f13153ad3cf803->leave($__internal_0f10a1e2f12f7a0596620234631fb4a599fbe29904d3254d05f13153ad3cf803_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_479233c66c7dc56c4ad2c019953312930724e0143f25cba3c41b61bb12c85dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479233c66c7dc56c4ad2c019953312930724e0143f25cba3c41b61bb12c85dfc->enter($__internal_479233c66c7dc56c4ad2c019953312930724e0143f25cba3c41b61bb12c85dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_479233c66c7dc56c4ad2c019953312930724e0143f25cba3c41b61bb12c85dfc->leave($__internal_479233c66c7dc56c4ad2c019953312930724e0143f25cba3c41b61bb12c85dfc_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4e4e176cc321c34ef434c87cbae1f749bd1259f382322054b6c0fb62c5aeab6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4e176cc321c34ef434c87cbae1f749bd1259f382322054b6c0fb62c5aeab6f->enter($__internal_4e4e176cc321c34ef434c87cbae1f749bd1259f382322054b6c0fb62c5aeab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4e4e176cc321c34ef434c87cbae1f749bd1259f382322054b6c0fb62c5aeab6f->leave($__internal_4e4e176cc321c34ef434c87cbae1f749bd1259f382322054b6c0fb62c5aeab6f_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_7c72e67cc2611d8f9e659577f560c522e6dc60e549366d383d6738e097b750c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c72e67cc2611d8f9e659577f560c522e6dc60e549366d383d6738e097b750c9->enter($__internal_7c72e67cc2611d8f9e659577f560c522e6dc60e549366d383d6738e097b750c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7c72e67cc2611d8f9e659577f560c522e6dc60e549366d383d6738e097b750c9->leave($__internal_7c72e67cc2611d8f9e659577f560c522e6dc60e549366d383d6738e097b750c9_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_7c577eb8fadf817f7cb9782306b17e9c9ac2533233cef74fc9bbbb26b04a3546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c577eb8fadf817f7cb9782306b17e9c9ac2533233cef74fc9bbbb26b04a3546->enter($__internal_7c577eb8fadf817f7cb9782306b17e9c9ac2533233cef74fc9bbbb26b04a3546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_7c577eb8fadf817f7cb9782306b17e9c9ac2533233cef74fc9bbbb26b04a3546->leave($__internal_7c577eb8fadf817f7cb9782306b17e9c9ac2533233cef74fc9bbbb26b04a3546_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_091c7b5caaf8bf51b0f32c95e7cea91b36a1ba700d305a3c6f8f0c5cbe46368b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091c7b5caaf8bf51b0f32c95e7cea91b36a1ba700d305a3c6f8f0c5cbe46368b->enter($__internal_091c7b5caaf8bf51b0f32c95e7cea91b36a1ba700d305a3c6f8f0c5cbe46368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_091c7b5caaf8bf51b0f32c95e7cea91b36a1ba700d305a3c6f8f0c5cbe46368b->leave($__internal_091c7b5caaf8bf51b0f32c95e7cea91b36a1ba700d305a3c6f8f0c5cbe46368b_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2828689874aacc5410b10152184db5475f1540db8293b5097f77237b3e48fc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2828689874aacc5410b10152184db5475f1540db8293b5097f77237b3e48fc7c->enter($__internal_2828689874aacc5410b10152184db5475f1540db8293b5097f77237b3e48fc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_2828689874aacc5410b10152184db5475f1540db8293b5097f77237b3e48fc7c->leave($__internal_2828689874aacc5410b10152184db5475f1540db8293b5097f77237b3e48fc7c_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c7382cfe5dfa8efba6c576187b04146b4d2928ad461b48990959d1edc243dc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7382cfe5dfa8efba6c576187b04146b4d2928ad461b48990959d1edc243dc98->enter($__internal_c7382cfe5dfa8efba6c576187b04146b4d2928ad461b48990959d1edc243dc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_c7382cfe5dfa8efba6c576187b04146b4d2928ad461b48990959d1edc243dc98->leave($__internal_c7382cfe5dfa8efba6c576187b04146b4d2928ad461b48990959d1edc243dc98_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
";
    }
}

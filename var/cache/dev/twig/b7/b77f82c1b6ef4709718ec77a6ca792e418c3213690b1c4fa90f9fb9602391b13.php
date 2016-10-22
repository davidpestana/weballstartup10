<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_b2cc9c6c766fc75d0d7ef5423a24bfdc652aeda9b2a8fa6982adfbe0bb3b3c0c extends Twig_Template
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
        $__internal_8c19c460282b45e78603e9e91b20ba05a4dec62cbb42188bbbaa1f68a5fed4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c19c460282b45e78603e9e91b20ba05a4dec62cbb42188bbbaa1f68a5fed4df->enter($__internal_8c19c460282b45e78603e9e91b20ba05a4dec62cbb42188bbbaa1f68a5fed4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c19c460282b45e78603e9e91b20ba05a4dec62cbb42188bbbaa1f68a5fed4df->leave($__internal_8c19c460282b45e78603e9e91b20ba05a4dec62cbb42188bbbaa1f68a5fed4df_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_bd4381faeaf32cc35eeb04102f11389f7a690ba09630acddba2ee77632a72323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4381faeaf32cc35eeb04102f11389f7a690ba09630acddba2ee77632a72323->enter($__internal_bd4381faeaf32cc35eeb04102f11389f7a690ba09630acddba2ee77632a72323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_bd4381faeaf32cc35eeb04102f11389f7a690ba09630acddba2ee77632a72323->leave($__internal_bd4381faeaf32cc35eeb04102f11389f7a690ba09630acddba2ee77632a72323_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_3396d1c42622dce6601520881466a7d1dd146dcd78910852d7ae63e57079d2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3396d1c42622dce6601520881466a7d1dd146dcd78910852d7ae63e57079d2c8->enter($__internal_3396d1c42622dce6601520881466a7d1dd146dcd78910852d7ae63e57079d2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_3396d1c42622dce6601520881466a7d1dd146dcd78910852d7ae63e57079d2c8->leave($__internal_3396d1c42622dce6601520881466a7d1dd146dcd78910852d7ae63e57079d2c8_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c77275fde75e94400afbe6b401aefa14f7b8b6f92bf08fce025705e279942bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77275fde75e94400afbe6b401aefa14f7b8b6f92bf08fce025705e279942bcc->enter($__internal_c77275fde75e94400afbe6b401aefa14f7b8b6f92bf08fce025705e279942bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c77275fde75e94400afbe6b401aefa14f7b8b6f92bf08fce025705e279942bcc->leave($__internal_c77275fde75e94400afbe6b401aefa14f7b8b6f92bf08fce025705e279942bcc_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_83ff6b84901f84b0dad8841e2a3bbb268cca767ef4c45d6810a75167da1b1433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ff6b84901f84b0dad8841e2a3bbb268cca767ef4c45d6810a75167da1b1433->enter($__internal_83ff6b84901f84b0dad8841e2a3bbb268cca767ef4c45d6810a75167da1b1433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_83ff6b84901f84b0dad8841e2a3bbb268cca767ef4c45d6810a75167da1b1433->leave($__internal_83ff6b84901f84b0dad8841e2a3bbb268cca767ef4c45d6810a75167da1b1433_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36745d570d8a83d4f1ab7e91239f05715f576cdc3a921e652a4350c7e2a2f4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36745d570d8a83d4f1ab7e91239f05715f576cdc3a921e652a4350c7e2a2f4ca->enter($__internal_36745d570d8a83d4f1ab7e91239f05715f576cdc3a921e652a4350c7e2a2f4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_36745d570d8a83d4f1ab7e91239f05715f576cdc3a921e652a4350c7e2a2f4ca->leave($__internal_36745d570d8a83d4f1ab7e91239f05715f576cdc3a921e652a4350c7e2a2f4ca_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8364c8743f7ee97e76398a92ce8867d9710a2eb33c84a801487370eda2beccc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8364c8743f7ee97e76398a92ce8867d9710a2eb33c84a801487370eda2beccc8->enter($__internal_8364c8743f7ee97e76398a92ce8867d9710a2eb33c84a801487370eda2beccc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_8364c8743f7ee97e76398a92ce8867d9710a2eb33c84a801487370eda2beccc8->leave($__internal_8364c8743f7ee97e76398a92ce8867d9710a2eb33c84a801487370eda2beccc8_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_3825f4498d307c8e33d6ce014546315ab64e27437ec7dad20d56de531a162421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3825f4498d307c8e33d6ce014546315ab64e27437ec7dad20d56de531a162421->enter($__internal_3825f4498d307c8e33d6ce014546315ab64e27437ec7dad20d56de531a162421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_3825f4498d307c8e33d6ce014546315ab64e27437ec7dad20d56de531a162421->leave($__internal_3825f4498d307c8e33d6ce014546315ab64e27437ec7dad20d56de531a162421_prof);

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

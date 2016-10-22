<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_f2db9fcf333b7491f057610cf83d31490e366e5e0f1e10c9b3576cb89e666786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf453b1a91727530547253b493f28f6081c64ae558d2319feb93abb8d5db1195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf453b1a91727530547253b493f28f6081c64ae558d2319feb93abb8d5db1195->enter($__internal_cf453b1a91727530547253b493f28f6081c64ae558d2319feb93abb8d5db1195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf453b1a91727530547253b493f28f6081c64ae558d2319feb93abb8d5db1195->leave($__internal_cf453b1a91727530547253b493f28f6081c64ae558d2319feb93abb8d5db1195_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bc7265126010d630360ce56bcef24b6b19cde95a878ad7bac94f8dfe6fc6ffc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7265126010d630360ce56bcef24b6b19cde95a878ad7bac94f8dfe6fc6ffc9->enter($__internal_bc7265126010d630360ce56bcef24b6b19cde95a878ad7bac94f8dfe6fc6ffc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_bc7265126010d630360ce56bcef24b6b19cde95a878ad7bac94f8dfe6fc6ffc9->leave($__internal_bc7265126010d630360ce56bcef24b6b19cde95a878ad7bac94f8dfe6fc6ffc9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
";
    }
}

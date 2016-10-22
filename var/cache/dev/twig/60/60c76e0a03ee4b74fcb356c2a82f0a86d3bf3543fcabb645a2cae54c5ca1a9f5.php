<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_a94f4c2120f9a8cdafb1fe80c426fa83b46d101d5618100c50b784345592fcc1 extends Twig_Template
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
        $__internal_3f3e50a6447936e8a26aba13335ad24b152f0b0084f75ceb75ccefc03811e0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3e50a6447936e8a26aba13335ad24b152f0b0084f75ceb75ccefc03811e0d2->enter($__internal_3f3e50a6447936e8a26aba13335ad24b152f0b0084f75ceb75ccefc03811e0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3e50a6447936e8a26aba13335ad24b152f0b0084f75ceb75ccefc03811e0d2->leave($__internal_3f3e50a6447936e8a26aba13335ad24b152f0b0084f75ceb75ccefc03811e0d2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2d8a38073b8d3d184534acfa67f1bf45ab28117c42a1fc35bce60837289f9ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8a38073b8d3d184534acfa67f1bf45ab28117c42a1fc35bce60837289f9ea2->enter($__internal_2d8a38073b8d3d184534acfa67f1bf45ab28117c42a1fc35bce60837289f9ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_2d8a38073b8d3d184534acfa67f1bf45ab28117c42a1fc35bce60837289f9ea2->leave($__internal_2d8a38073b8d3d184534acfa67f1bf45ab28117c42a1fc35bce60837289f9ea2_prof);

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

<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_d08ee44119a09323a27d2fc5e38b28112d61f95b76664d0439d2afe980779e6c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69007be0c1ded876ea197e684053ea04d39a53d125796b9006f6bd303fa8b8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69007be0c1ded876ea197e684053ea04d39a53d125796b9006f6bd303fa8b8c8->enter($__internal_69007be0c1ded876ea197e684053ea04d39a53d125796b9006f6bd303fa8b8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69007be0c1ded876ea197e684053ea04d39a53d125796b9006f6bd303fa8b8c8->leave($__internal_69007be0c1ded876ea197e684053ea04d39a53d125796b9006f6bd303fa8b8c8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5a66b6e3b10964a90d8891724e5f241084653ad43aa40fd64607432c85792c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a66b6e3b10964a90d8891724e5f241084653ad43aa40fd64607432c85792c71->enter($__internal_5a66b6e3b10964a90d8891724e5f241084653ad43aa40fd64607432c85792c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_5a66b6e3b10964a90d8891724e5f241084653ad43aa40fd64607432c85792c71->leave($__internal_5a66b6e3b10964a90d8891724e5f241084653ad43aa40fd64607432c85792c71_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
";
    }
}

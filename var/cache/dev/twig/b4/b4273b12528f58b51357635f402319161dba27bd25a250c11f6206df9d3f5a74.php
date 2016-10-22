<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_5cdaa582d988f0631625ceb05535d1a9fca8d9eec97f4d76b17b9c694569cf9d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a10d4daabd0f8b27cabd40fb2fad9ee09553566a38aae39306514b15ba17977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a10d4daabd0f8b27cabd40fb2fad9ee09553566a38aae39306514b15ba17977->enter($__internal_7a10d4daabd0f8b27cabd40fb2fad9ee09553566a38aae39306514b15ba17977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a10d4daabd0f8b27cabd40fb2fad9ee09553566a38aae39306514b15ba17977->leave($__internal_7a10d4daabd0f8b27cabd40fb2fad9ee09553566a38aae39306514b15ba17977_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c82602e4605609c553c4965298432e95136369dd203c25901215dd2403e9d651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82602e4605609c553c4965298432e95136369dd203c25901215dd2403e9d651->enter($__internal_c82602e4605609c553c4965298432e95136369dd203c25901215dd2403e9d651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_c82602e4605609c553c4965298432e95136369dd203c25901215dd2403e9d651->leave($__internal_c82602e4605609c553c4965298432e95136369dd203c25901215dd2403e9d651_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
";
    }
}

<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_4e565867b09ce26f8551dff684b015149cd42ea1c6c17913402ad4c2422a9c91 extends Twig_Template
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
        $__internal_f82daa0b6ed44a940abcd3ba5cf958c42f6cdeb6fd41f7ffcff03d004fc0e1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82daa0b6ed44a940abcd3ba5cf958c42f6cdeb6fd41f7ffcff03d004fc0e1dd->enter($__internal_f82daa0b6ed44a940abcd3ba5cf958c42f6cdeb6fd41f7ffcff03d004fc0e1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82daa0b6ed44a940abcd3ba5cf958c42f6cdeb6fd41f7ffcff03d004fc0e1dd->leave($__internal_f82daa0b6ed44a940abcd3ba5cf958c42f6cdeb6fd41f7ffcff03d004fc0e1dd_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_896ae192d2828522edb8a8fb905b8649205eb1f31c0625e6c8bf0ad0c29c4647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ae192d2828522edb8a8fb905b8649205eb1f31c0625e6c8bf0ad0c29c4647->enter($__internal_896ae192d2828522edb8a8fb905b8649205eb1f31c0625e6c8bf0ad0c29c4647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_896ae192d2828522edb8a8fb905b8649205eb1f31c0625e6c8bf0ad0c29c4647->leave($__internal_896ae192d2828522edb8a8fb905b8649205eb1f31c0625e6c8bf0ad0c29c4647_prof);

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

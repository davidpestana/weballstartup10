<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_9cb200af00256286d3c2081a004b186df8cd562e5e47e911c95e7672b50efcba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1e8bd13e205585709d042c73bdca897c9fa90f2f9d481a504e36186123f18bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e8bd13e205585709d042c73bdca897c9fa90f2f9d481a504e36186123f18bd->enter($__internal_b1e8bd13e205585709d042c73bdca897c9fa90f2f9d481a504e36186123f18bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_b1e8bd13e205585709d042c73bdca897c9fa90f2f9d481a504e36186123f18bd->leave($__internal_b1e8bd13e205585709d042c73bdca897c9fa90f2f9d481a504e36186123f18bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
";
    }
}

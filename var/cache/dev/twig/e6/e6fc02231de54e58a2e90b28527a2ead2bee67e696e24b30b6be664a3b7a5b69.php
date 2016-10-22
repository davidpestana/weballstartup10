<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_a393598af240cef119a84269dfe7bc36e550f2c4b1fd414b93a78b7502832e4b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69257e3d20f98e59eb623eff4a7d7b889fb955be3fcbcca77e4005a3ca15301d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69257e3d20f98e59eb623eff4a7d7b889fb955be3fcbcca77e4005a3ca15301d->enter($__internal_69257e3d20f98e59eb623eff4a7d7b889fb955be3fcbcca77e4005a3ca15301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69257e3d20f98e59eb623eff4a7d7b889fb955be3fcbcca77e4005a3ca15301d->leave($__internal_69257e3d20f98e59eb623eff4a7d7b889fb955be3fcbcca77e4005a3ca15301d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
";
    }
}

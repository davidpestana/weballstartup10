<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_ff63a09fcb0de2797e616acc6f82e3c2a15e9590dc3d0d0648229a8ed57c4e14 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f95a84aec1f5082d9e8af19fdbe53b27eaa91ceb6d11790113e595243b3026ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95a84aec1f5082d9e8af19fdbe53b27eaa91ceb6d11790113e595243b3026ac->enter($__internal_f95a84aec1f5082d9e8af19fdbe53b27eaa91ceb6d11790113e595243b3026ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95a84aec1f5082d9e8af19fdbe53b27eaa91ceb6d11790113e595243b3026ac->leave($__internal_f95a84aec1f5082d9e8af19fdbe53b27eaa91ceb6d11790113e595243b3026ac_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
";
    }
}

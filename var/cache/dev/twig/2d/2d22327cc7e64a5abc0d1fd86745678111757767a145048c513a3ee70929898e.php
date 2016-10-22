<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_106f4b4c4f051bdf58aeed03f8a0e3e9bf45f5ad1c05ddc22e435335a6131123 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f37a97f5c579ee30f1ae1aa5d81dbb2337a0d412bceef979ed00e5b9dc1ce57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f37a97f5c579ee30f1ae1aa5d81dbb2337a0d412bceef979ed00e5b9dc1ce57->enter($__internal_6f37a97f5c579ee30f1ae1aa5d81dbb2337a0d412bceef979ed00e5b9dc1ce57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f37a97f5c579ee30f1ae1aa5d81dbb2337a0d412bceef979ed00e5b9dc1ce57->leave($__internal_6f37a97f5c579ee30f1ae1aa5d81dbb2337a0d412bceef979ed00e5b9dc1ce57_prof);

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

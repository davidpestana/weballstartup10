<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_bd31ed034c960e9689f2e99304d1f135a33887bce94a20268919d6d0cc384b8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4a24bcfbdfdd963ef708273d4063db089f3eae103f77f58a5849d6e9e5543d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a24bcfbdfdd963ef708273d4063db089f3eae103f77f58a5849d6e9e5543d7->enter($__internal_d4a24bcfbdfdd963ef708273d4063db089f3eae103f77f58a5849d6e9e5543d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a24bcfbdfdd963ef708273d4063db089f3eae103f77f58a5849d6e9e5543d7->leave($__internal_d4a24bcfbdfdd963ef708273d4063db089f3eae103f77f58a5849d6e9e5543d7_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8abe5ef69fd2bffac913f88bfab09e6ca0272ef8e1a383dca4a7463b2229d48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abe5ef69fd2bffac913f88bfab09e6ca0272ef8e1a383dca4a7463b2229d48d->enter($__internal_8abe5ef69fd2bffac913f88bfab09e6ca0272ef8e1a383dca4a7463b2229d48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_8abe5ef69fd2bffac913f88bfab09e6ca0272ef8e1a383dca4a7463b2229d48d->leave($__internal_8abe5ef69fd2bffac913f88bfab09e6ca0272ef8e1a383dca4a7463b2229d48d_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_b96e6cbec256e76ef7d3011c8a72f0deebb31abaa83f4924e704dfe34eab38bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96e6cbec256e76ef7d3011c8a72f0deebb31abaa83f4924e704dfe34eab38bf->enter($__internal_b96e6cbec256e76ef7d3011c8a72f0deebb31abaa83f4924e704dfe34eab38bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_b96e6cbec256e76ef7d3011c8a72f0deebb31abaa83f4924e704dfe34eab38bf->leave($__internal_b96e6cbec256e76ef7d3011c8a72f0deebb31abaa83f4924e704dfe34eab38bf_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_de35c177427f3001c3fa1996b11ea562f388f3a4a3e95f2a885408df4c9b4dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de35c177427f3001c3fa1996b11ea562f388f3a4a3e95f2a885408df4c9b4dd6->enter($__internal_de35c177427f3001c3fa1996b11ea562f388f3a4a3e95f2a885408df4c9b4dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_de35c177427f3001c3fa1996b11ea562f388f3a4a3e95f2a885408df4c9b4dd6->leave($__internal_de35c177427f3001c3fa1996b11ea562f388f3a4a3e95f2a885408df4c9b4dd6_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_bfa5e040ae1fb58c6c5e830b4b94000e006ca99ca6012a5bfcd554ed749889b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa5e040ae1fb58c6c5e830b4b94000e006ca99ca6012a5bfcd554ed749889b0->enter($__internal_bfa5e040ae1fb58c6c5e830b4b94000e006ca99ca6012a5bfcd554ed749889b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_bfa5e040ae1fb58c6c5e830b4b94000e006ca99ca6012a5bfcd554ed749889b0->leave($__internal_bfa5e040ae1fb58c6c5e830b4b94000e006ca99ca6012a5bfcd554ed749889b0_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_469d2753458dd9ae964f3b1846c3a0c6225aa684dc8da2eb89b272a996ebf090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469d2753458dd9ae964f3b1846c3a0c6225aa684dc8da2eb89b272a996ebf090->enter($__internal_469d2753458dd9ae964f3b1846c3a0c6225aa684dc8da2eb89b272a996ebf090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_469d2753458dd9ae964f3b1846c3a0c6225aa684dc8da2eb89b272a996ebf090->leave($__internal_469d2753458dd9ae964f3b1846c3a0c6225aa684dc8da2eb89b272a996ebf090_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
";
    }
}

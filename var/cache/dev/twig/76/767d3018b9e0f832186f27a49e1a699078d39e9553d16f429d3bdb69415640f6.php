<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_36e8b2a0c6ca27f4e95fc9510dccde67275563e2f041a4227c0579fd102185d5 extends Twig_Template
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
        $__internal_eb3ba7833bbc760d61488f2c42135964d2a6a3dc4faafde10e7b99d5cbe7ce30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3ba7833bbc760d61488f2c42135964d2a6a3dc4faafde10e7b99d5cbe7ce30->enter($__internal_eb3ba7833bbc760d61488f2c42135964d2a6a3dc4faafde10e7b99d5cbe7ce30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3ba7833bbc760d61488f2c42135964d2a6a3dc4faafde10e7b99d5cbe7ce30->leave($__internal_eb3ba7833bbc760d61488f2c42135964d2a6a3dc4faafde10e7b99d5cbe7ce30_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_66863f3b6af9b6d0b76ffc1c68492153489fea1029bf198d37dae8fa6dfb04ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66863f3b6af9b6d0b76ffc1c68492153489fea1029bf198d37dae8fa6dfb04ed->enter($__internal_66863f3b6af9b6d0b76ffc1c68492153489fea1029bf198d37dae8fa6dfb04ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_66863f3b6af9b6d0b76ffc1c68492153489fea1029bf198d37dae8fa6dfb04ed->leave($__internal_66863f3b6af9b6d0b76ffc1c68492153489fea1029bf198d37dae8fa6dfb04ed_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_2c9caea68560bb8e68c2cbb4f696f6b1fd17dfbecabb03b9cc2e994c3c29ffff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9caea68560bb8e68c2cbb4f696f6b1fd17dfbecabb03b9cc2e994c3c29ffff->enter($__internal_2c9caea68560bb8e68c2cbb4f696f6b1fd17dfbecabb03b9cc2e994c3c29ffff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_2c9caea68560bb8e68c2cbb4f696f6b1fd17dfbecabb03b9cc2e994c3c29ffff->leave($__internal_2c9caea68560bb8e68c2cbb4f696f6b1fd17dfbecabb03b9cc2e994c3c29ffff_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_78d8b3f3c1f904931752062842c5c9b4c14c050d0969657297057d322dd90c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d8b3f3c1f904931752062842c5c9b4c14c050d0969657297057d322dd90c1c->enter($__internal_78d8b3f3c1f904931752062842c5c9b4c14c050d0969657297057d322dd90c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

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
        
        $__internal_78d8b3f3c1f904931752062842c5c9b4c14c050d0969657297057d322dd90c1c->leave($__internal_78d8b3f3c1f904931752062842c5c9b4c14c050d0969657297057d322dd90c1c_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_26e5645df09edfefa5234a3f232443198118c6d00698e9e46652356c243d884c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e5645df09edfefa5234a3f232443198118c6d00698e9e46652356c243d884c->enter($__internal_26e5645df09edfefa5234a3f232443198118c6d00698e9e46652356c243d884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

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
        
        $__internal_26e5645df09edfefa5234a3f232443198118c6d00698e9e46652356c243d884c->leave($__internal_26e5645df09edfefa5234a3f232443198118c6d00698e9e46652356c243d884c_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_77764a57250bc8df1e44fd7381880e03dc94896366412633d8dc0d73688e8d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77764a57250bc8df1e44fd7381880e03dc94896366412633d8dc0d73688e8d76->enter($__internal_77764a57250bc8df1e44fd7381880e03dc94896366412633d8dc0d73688e8d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_77764a57250bc8df1e44fd7381880e03dc94896366412633d8dc0d73688e8d76->leave($__internal_77764a57250bc8df1e44fd7381880e03dc94896366412633d8dc0d73688e8d76_prof);

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

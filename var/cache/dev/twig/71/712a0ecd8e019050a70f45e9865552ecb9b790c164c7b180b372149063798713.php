<?php

/* WebSiteBundle:Forms:footer.theme.html.twig */
class __TwigTemplate_c49969988fb26f49552cb427aa04f6f5db4913eabc181773c71a4e645a5587e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "WebSiteBundle:Forms:footer.theme.html.twig", 1);
        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01189bc8780a73c2ac28e4e3bb2a01789586ebad7db46133a62f131ecf14671f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01189bc8780a73c2ac28e4e3bb2a01789586ebad7db46133a62f131ecf14671f->enter($__internal_01189bc8780a73c2ac28e4e3bb2a01789586ebad7db46133a62f131ecf14671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Forms:footer.theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01189bc8780a73c2ac28e4e3bb2a01789586ebad7db46133a62f131ecf14671f->leave($__internal_01189bc8780a73c2ac28e4e3bb2a01789586ebad7db46133a62f131ecf14671f_prof);

    }

    // line 4
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_9351c8d2a2f8d3fee6f1db478a759095dbf28f14eaa5187d9d9380f37e5af48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9351c8d2a2f8d3fee6f1db478a759095dbf28f14eaa5187d9d9380f37e5af48b->enter($__internal_9351c8d2a2f8d3fee6f1db478a759095dbf28f14eaa5187d9d9380f37e5af48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 5
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 6
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 8
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_9351c8d2a2f8d3fee6f1db478a759095dbf28f14eaa5187d9d9380f37e5af48b->leave($__internal_9351c8d2a2f8d3fee6f1db478a759095dbf28f14eaa5187d9d9380f37e5af48b_prof);

    }

    // line 13
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0b3925480e9df3133ac0c6ff0273a5662a45a8264f89e3c2cdbd12df5b99edc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3925480e9df3133ac0c6ff0273a5662a45a8264f89e3c2cdbd12df5b99edc5->enter($__internal_0b3925480e9df3133ac0c6ff0273a5662a45a8264f89e3c2cdbd12df5b99edc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array()), 2, array(), "array") != "textarea")) {
            // line 15
            echo "            ";
            $context["myclass"] = "required form-control input-block-level";
            // line 16
            echo "            <div class=\"input-group divcenter\">";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => (isset($context["myclass"]) ? $context["myclass"] : $this->getContext($context, "myclass")))));
            // line 19
            echo "</div>
      ";
        } else {
            // line 21
            echo "            ";
            $context["myclass"] = "required form-control input-block-level short-textarea";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => (isset($context["myclass"]) ? $context["myclass"] : $this->getContext($context, "myclass")))));
        }
        
        $__internal_0b3925480e9df3133ac0c6ff0273a5662a45a8264f89e3c2cdbd12df5b99edc5->leave($__internal_0b3925480e9df3133ac0c6ff0273a5662a45a8264f89e3c2cdbd12df5b99edc5_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7b651d4b00a44e0b8e4b79b55c97da89dbd29a965f155cc45cab68dbd8b3a8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b651d4b00a44e0b8e4b79b55c97da89dbd29a965f155cc45cab68dbd8b3a8c0->enter($__internal_7b651d4b00a44e0b8e4b79b55c97da89dbd29a965f155cc45cab68dbd8b3a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 30
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "text")) {
            // line 31
            echo "      <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
    ";
        }
        // line 33
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "email")) {
            // line 34
            echo "      <span class=\"input-group-addon\"><i class=\"icon-email2\"></i></span>
    ";
        }
        // line 36
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_7b651d4b00a44e0b8e4b79b55c97da89dbd29a965f155cc45cab68dbd8b3a8c0->leave($__internal_7b651d4b00a44e0b8e4b79b55c97da89dbd29a965f155cc45cab68dbd8b3a8c0_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Forms:footer.theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  106 => 34,  103 => 33,  99 => 31,  97 => 30,  95 => 29,  89 => 28,  81 => 23,  79 => 22,  76 => 21,  72 => 19,  70 => 18,  68 => 17,  66 => 16,  63 => 15,  61 => 14,  55 => 13,  47 => 8,  44 => 6,  42 => 5,  36 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'form_div_layout.html.twig' %}


{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}


{%- block form_row -%}
      {% if form.vars.block_prefixes[2] != 'textarea' %}
            {% set myclass = 'required form-control input-block-level' %}
            <div class=\"input-group divcenter\">
                {{- form_errors(form) -}}
                {{- form_widget(form, {'attr': {'class': myclass}}) -}}
            </div>
      {% else %}
            {% set myclass = 'required form-control input-block-level short-textarea' %}
            {{- form_errors(form) -}}
            {{- form_widget(form, {'attr': {'class': myclass}}) -}}
      {% endif %}
{%- endblock form_row -%}


{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    {% if type == 'text' %}
      <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
    {% endif %}
    {% if type == 'email' %}
      <span class=\"input-group-addon\"><i class=\"icon-email2\"></i></span>
    {% endif %}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}
";
    }
}

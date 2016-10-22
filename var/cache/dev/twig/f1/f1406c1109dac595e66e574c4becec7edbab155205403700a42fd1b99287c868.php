<?php

/* WebSiteBundle:Forms:lead.theme.html.twig */
class __TwigTemplate_70fb34aa1638348263b1ba4b8937df9a30d64e124f154266016b78fdf91b1308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "WebSiteBundle:Forms:lead.theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ca7ddb70679aef98c0c2a532474ef3e2da537fecdd15ef67a7d00a472155c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca7ddb70679aef98c0c2a532474ef3e2da537fecdd15ef67a7d00a472155c2f->enter($__internal_3ca7ddb70679aef98c0c2a532474ef3e2da537fecdd15ef67a7d00a472155c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteBundle:Forms:lead.theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca7ddb70679aef98c0c2a532474ef3e2da537fecdd15ef67a7d00a472155c2f->leave($__internal_3ca7ddb70679aef98c0c2a532474ef3e2da537fecdd15ef67a7d00a472155c2f_prof);

    }

    // line 4
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_12b01e037b838e90f444c94952e85ed86fc881169587b4d72b1183e1c1516431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b01e037b838e90f444c94952e85ed86fc881169587b4d72b1183e1c1516431->enter($__internal_12b01e037b838e90f444c94952e85ed86fc881169587b4d72b1183e1c1516431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array()), 1, array(), "array") == "text")) {
            // line 6
            echo "            ";
            $context["myclass"] = "sm-form-control";
            // line 7
            echo "      ";
        } else {
            // line 8
            echo "            ";
            $context["myclass"] = "";
            // line 9
            echo "      ";
        }
        // line 10
        echo "
          <div class=\"col_full\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "capitalize t600")));
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => (isset($context["myclass"]) ? $context["myclass"] : $this->getContext($context, "myclass")))));
        // line 15
        echo "</div>";
        
        $__internal_12b01e037b838e90f444c94952e85ed86fc881169587b4d72b1183e1c1516431->leave($__internal_12b01e037b838e90f444c94952e85ed86fc881169587b4d72b1183e1c1516431_prof);

    }

    // line 20
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c0df33b86499e0e4001cadb32d1c7123929a6983ac5628ad6c187abb4a8832d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0df33b86499e0e4001cadb32d1c7123929a6983ac5628ad6c187abb4a8832d5->enter($__internal_c0df33b86499e0e4001cadb32d1c7123929a6983ac5628ad6c187abb4a8832d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col_full\">";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "        <div>";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => "radio-style")));
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")), "label_attr" => array("class" => "radio-style-3-label")));
            // line 26
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>";
        
        $__internal_c0df33b86499e0e4001cadb32d1c7123929a6983ac5628ad6c187abb4a8832d5->leave($__internal_c0df33b86499e0e4001cadb32d1c7123929a6983ac5628ad6c187abb4a8832d5_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteBundle:Forms:lead.theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  91 => 26,  89 => 25,  87 => 24,  85 => 23,  81 => 22,  77 => 21,  71 => 20,  64 => 15,  62 => 14,  60 => 13,  58 => 12,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'form_div_layout.html.twig' %}


{%- block form_row -%}
      {% if form.vars.block_prefixes[1] == 'text' %}
            {% set myclass = 'sm-form-control' %}
      {% else %}
            {% set myclass = '' %}
      {% endif %}

          <div class=\"col_full\">
              {{- form_label(form, null, {'label_attr': {'class': 'capitalize t600'}}) -}}
              {{- form_errors(form) -}}
              {{- form_widget(form, {'attr': {'class': myclass}}) -}}
          </div>
{%- endblock form_row -%}



{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }} class=\"col_full\">
    {%- for child in form %}
        <div>
        {{- form_widget(child, {'attr': {'class': 'radio-style'}}) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain,'label_attr': {'class': 'radio-style-3-label'}}) -}}
        </div>
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}
";
    }
}

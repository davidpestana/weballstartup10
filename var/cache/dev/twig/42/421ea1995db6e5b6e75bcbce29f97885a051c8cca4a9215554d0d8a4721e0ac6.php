<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_b9cece99beb0dcaa571ff5f66c69c8b5e83725b140719ffa1f91ad42043309bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aacfb76be4ed450b0cd46ff0e4d41b0c57e460407b358fcbc993f93729ce00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aacfb76be4ed450b0cd46ff0e4d41b0c57e460407b358fcbc993f93729ce00e->enter($__internal_4aacfb76be4ed450b0cd46ff0e4d41b0c57e460407b358fcbc993f93729ce00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_4aacfb76be4ed450b0cd46ff0e4d41b0c57e460407b358fcbc993f93729ce00e->leave($__internal_4aacfb76be4ed450b0cd46ff0e4d41b0c57e460407b358fcbc993f93729ce00e_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_00bb434981f19a9989964358af3983ab28f864f85d60cd0a0a9b9952b98e0bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bb434981f19a9989964358af3983ab28f864f85d60cd0a0a9b9952b98e0bfd->enter($__internal_00bb434981f19a9989964358af3983ab28f864f85d60cd0a0a9b9952b98e0bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_00bb434981f19a9989964358af3983ab28f864f85d60cd0a0a9b9952b98e0bfd->leave($__internal_00bb434981f19a9989964358af3983ab28f864f85d60cd0a0a9b9952b98e0bfd_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_54124d7b6db8e9b4fb4be5c4a11fcd00cefa5555d17d56d40205e09f32937589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54124d7b6db8e9b4fb4be5c4a11fcd00cefa5555d17d56d40205e09f32937589->enter($__internal_54124d7b6db8e9b4fb4be5c4a11fcd00cefa5555d17d56d40205e09f32937589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_54124d7b6db8e9b4fb4be5c4a11fcd00cefa5555d17d56d40205e09f32937589->leave($__internal_54124d7b6db8e9b4fb4be5c4a11fcd00cefa5555d17d56d40205e09f32937589_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_4500432e427f66a2adf6bf514a59ec0d99602bb44907247357d9943852564db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4500432e427f66a2adf6bf514a59ec0d99602bb44907247357d9943852564db1->enter($__internal_4500432e427f66a2adf6bf514a59ec0d99602bb44907247357d9943852564db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_4500432e427f66a2adf6bf514a59ec0d99602bb44907247357d9943852564db1->leave($__internal_4500432e427f66a2adf6bf514a59ec0d99602bb44907247357d9943852564db1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
";
    }
}

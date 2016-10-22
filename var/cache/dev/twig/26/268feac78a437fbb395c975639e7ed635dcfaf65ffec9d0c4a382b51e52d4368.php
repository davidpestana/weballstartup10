<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_1b0f8af79d01024ce41d7e47d066f1b17144e8f05a78862983faec3a5d714ce5 extends Twig_Template
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
        $__internal_464fdb5c3025b18848d066de40375645a1e20011310f804952c02e8050f12c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464fdb5c3025b18848d066de40375645a1e20011310f804952c02e8050f12c5d->enter($__internal_464fdb5c3025b18848d066de40375645a1e20011310f804952c02e8050f12c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_464fdb5c3025b18848d066de40375645a1e20011310f804952c02e8050f12c5d->leave($__internal_464fdb5c3025b18848d066de40375645a1e20011310f804952c02e8050f12c5d_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_8ff8c2387bfef6f657474cb0c5c2d7f08ed0a10dc9b0d410fe35c89692d522d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff8c2387bfef6f657474cb0c5c2d7f08ed0a10dc9b0d410fe35c89692d522d5->enter($__internal_8ff8c2387bfef6f657474cb0c5c2d7f08ed0a10dc9b0d410fe35c89692d522d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_8ff8c2387bfef6f657474cb0c5c2d7f08ed0a10dc9b0d410fe35c89692d522d5->leave($__internal_8ff8c2387bfef6f657474cb0c5c2d7f08ed0a10dc9b0d410fe35c89692d522d5_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f310a5f39f5ed31e16748afd4fa43a08bb067f5d56e28b7c12414153aaf54f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f310a5f39f5ed31e16748afd4fa43a08bb067f5d56e28b7c12414153aaf54f9->enter($__internal_3f310a5f39f5ed31e16748afd4fa43a08bb067f5d56e28b7c12414153aaf54f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_3f310a5f39f5ed31e16748afd4fa43a08bb067f5d56e28b7c12414153aaf54f9->leave($__internal_3f310a5f39f5ed31e16748afd4fa43a08bb067f5d56e28b7c12414153aaf54f9_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_3a93ddd57aa71ca22aa9037ca24f8f2f0606cf31ebb82838fc74a2fe500875ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a93ddd57aa71ca22aa9037ca24f8f2f0606cf31ebb82838fc74a2fe500875ae->enter($__internal_3a93ddd57aa71ca22aa9037ca24f8f2f0606cf31ebb82838fc74a2fe500875ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_3a93ddd57aa71ca22aa9037ca24f8f2f0606cf31ebb82838fc74a2fe500875ae->leave($__internal_3a93ddd57aa71ca22aa9037ca24f8f2f0606cf31ebb82838fc74a2fe500875ae_prof);

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

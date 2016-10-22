<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_2927281a5f12ac6cc9c82464f2e3092fc09120ba8e913ca8ae30fdcc225c7fe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5028455d4f6ad687fc8a6cf06609dfb2ad7cae92a6a29075230e449ba1c2036c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5028455d4f6ad687fc8a6cf06609dfb2ad7cae92a6a29075230e449ba1c2036c->enter($__internal_5028455d4f6ad687fc8a6cf06609dfb2ad7cae92a6a29075230e449ba1c2036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_5028455d4f6ad687fc8a6cf06609dfb2ad7cae92a6a29075230e449ba1c2036c->leave($__internal_5028455d4f6ad687fc8a6cf06609dfb2ad7cae92a6a29075230e449ba1c2036c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f3316f953837dc0b7831adf5e169cf3fe11aef9d18fcbafe8d11b38b7f50a582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3316f953837dc0b7831adf5e169cf3fe11aef9d18fcbafe8d11b38b7f50a582->enter($__internal_f3316f953837dc0b7831adf5e169cf3fe11aef9d18fcbafe8d11b38b7f50a582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_f3316f953837dc0b7831adf5e169cf3fe11aef9d18fcbafe8d11b38b7f50a582->leave($__internal_f3316f953837dc0b7831adf5e169cf3fe11aef9d18fcbafe8d11b38b7f50a582_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_611138da98014a9893b22f34d53150683b22678add17bb1a960bae8a1005cd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611138da98014a9893b22f34d53150683b22678add17bb1a960bae8a1005cd7a->enter($__internal_611138da98014a9893b22f34d53150683b22678add17bb1a960bae8a1005cd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_611138da98014a9893b22f34d53150683b22678add17bb1a960bae8a1005cd7a->leave($__internal_611138da98014a9893b22f34d53150683b22678add17bb1a960bae8a1005cd7a_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e09abca844f1f19fe3965792f44319805b5c6e70550dc9677e1dddc21c130a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09abca844f1f19fe3965792f44319805b5c6e70550dc9677e1dddc21c130a73->enter($__internal_e09abca844f1f19fe3965792f44319805b5c6e70550dc9677e1dddc21c130a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e09abca844f1f19fe3965792f44319805b5c6e70550dc9677e1dddc21c130a73->leave($__internal_e09abca844f1f19fe3965792f44319805b5c6e70550dc9677e1dddc21c130a73_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
";
    }
}

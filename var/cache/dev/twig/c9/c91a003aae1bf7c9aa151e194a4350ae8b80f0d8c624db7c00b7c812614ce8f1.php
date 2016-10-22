<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_9c95e065948fb3c14da8482e62e2adb9bdd4ad2c36f5b01ea10e9f0abb6994f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_328fafee1f348370494c8e740d6b205d6016e0da37ce11b5105fe5aac55eb222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328fafee1f348370494c8e740d6b205d6016e0da37ce11b5105fe5aac55eb222->enter($__internal_328fafee1f348370494c8e740d6b205d6016e0da37ce11b5105fe5aac55eb222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328fafee1f348370494c8e740d6b205d6016e0da37ce11b5105fe5aac55eb222->leave($__internal_328fafee1f348370494c8e740d6b205d6016e0da37ce11b5105fe5aac55eb222_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_8c096783819faff19e6f2f27f26aae8f65b059fd641918f0630c82873a82d6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c096783819faff19e6f2f27f26aae8f65b059fd641918f0630c82873a82d6d7->enter($__internal_8c096783819faff19e6f2f27f26aae8f65b059fd641918f0630c82873a82d6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_8c096783819faff19e6f2f27f26aae8f65b059fd641918f0630c82873a82d6d7->leave($__internal_8c096783819faff19e6f2f27f26aae8f65b059fd641918f0630c82873a82d6d7_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_8c9352bd1c3145d6015d6e630574972ddd2366c805cd286ead59e58169ff4184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9352bd1c3145d6015d6e630574972ddd2366c805cd286ead59e58169ff4184->enter($__internal_8c9352bd1c3145d6015d6e630574972ddd2366c805cd286ead59e58169ff4184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_8c9352bd1c3145d6015d6e630574972ddd2366c805cd286ead59e58169ff4184->leave($__internal_8c9352bd1c3145d6015d6e630574972ddd2366c805cd286ead59e58169ff4184_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_bff0be23f8a48315f7270bcb1fd1b06f9c20c4733f1a1de8f286a0b3e3e0ac02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff0be23f8a48315f7270bcb1fd1b06f9c20c4733f1a1de8f286a0b3e3e0ac02->enter($__internal_bff0be23f8a48315f7270bcb1fd1b06f9c20c4733f1a1de8f286a0b3e3e0ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_bff0be23f8a48315f7270bcb1fd1b06f9c20c4733f1a1de8f286a0b3e3e0ac02->leave($__internal_bff0be23f8a48315f7270bcb1fd1b06f9c20c4733f1a1de8f286a0b3e3e0ac02_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_82ab762928cba72beec65ecf7beb864fb77f45b7d7d6a64a98cb33312c76cf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ab762928cba72beec65ecf7beb864fb77f45b7d7d6a64a98cb33312c76cf82->enter($__internal_82ab762928cba72beec65ecf7beb864fb77f45b7d7d6a64a98cb33312c76cf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_82ab762928cba72beec65ecf7beb864fb77f45b7d7d6a64a98cb33312c76cf82->leave($__internal_82ab762928cba72beec65ecf7beb864fb77f45b7d7d6a64a98cb33312c76cf82_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
";
    }
}

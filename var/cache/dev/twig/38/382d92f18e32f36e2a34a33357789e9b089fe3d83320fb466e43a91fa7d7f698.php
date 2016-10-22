<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_31d0b4ae006a002b7bebc1150d60a68931e97bdb43e36a6378db3152fc207d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17e3b849cfd5264fa6db527af483dd27d4b670a0dc65683583a4bdf32b634df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e3b849cfd5264fa6db527af483dd27d4b670a0dc65683583a4bdf32b634df6->enter($__internal_17e3b849cfd5264fa6db527af483dd27d4b670a0dc65683583a4bdf32b634df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_17e3b849cfd5264fa6db527af483dd27d4b670a0dc65683583a4bdf32b634df6->leave($__internal_17e3b849cfd5264fa6db527af483dd27d4b670a0dc65683583a4bdf32b634df6_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_14ae16c6fd983ba1d07b93fed03b413d2c3f315a55bd0962b23df9e9bfcfe5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ae16c6fd983ba1d07b93fed03b413d2c3f315a55bd0962b23df9e9bfcfe5f9->enter($__internal_14ae16c6fd983ba1d07b93fed03b413d2c3f315a55bd0962b23df9e9bfcfe5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_14ae16c6fd983ba1d07b93fed03b413d2c3f315a55bd0962b23df9e9bfcfe5f9->leave($__internal_14ae16c6fd983ba1d07b93fed03b413d2c3f315a55bd0962b23df9e9bfcfe5f9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}

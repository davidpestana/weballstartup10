<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_769c20751a39ae52fd57a3076f6ac2bea8981ac4f4a0a57c9efd08a8ecc71bb7 extends Twig_Template
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
        $__internal_dac64e79b04b536aab3a33eb4601b7490b4db5913bff1b67f5554dece7ed9865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac64e79b04b536aab3a33eb4601b7490b4db5913bff1b67f5554dece7ed9865->enter($__internal_dac64e79b04b536aab3a33eb4601b7490b4db5913bff1b67f5554dece7ed9865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_dac64e79b04b536aab3a33eb4601b7490b4db5913bff1b67f5554dece7ed9865->leave($__internal_dac64e79b04b536aab3a33eb4601b7490b4db5913bff1b67f5554dece7ed9865_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d0f44cdca04d9637a646b52c351413778d5573b1b5b9b28780a9a0f415daeaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f44cdca04d9637a646b52c351413778d5573b1b5b9b28780a9a0f415daeaaf->enter($__internal_d0f44cdca04d9637a646b52c351413778d5573b1b5b9b28780a9a0f415daeaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d0f44cdca04d9637a646b52c351413778d5573b1b5b9b28780a9a0f415daeaaf->leave($__internal_d0f44cdca04d9637a646b52c351413778d5573b1b5b9b28780a9a0f415daeaaf_prof);

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

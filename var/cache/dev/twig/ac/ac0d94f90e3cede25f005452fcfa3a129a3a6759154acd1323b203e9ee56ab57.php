<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_604acd861eb249030116e72869fea647f59252dcdfbea4106db44d04bbf851f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96cdd70a1e66d727fed859623f309110c6a14ee9d87fc4a8828fcfd6b730f719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cdd70a1e66d727fed859623f309110c6a14ee9d87fc4a8828fcfd6b730f719->enter($__internal_96cdd70a1e66d727fed859623f309110c6a14ee9d87fc4a8828fcfd6b730f719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_96cdd70a1e66d727fed859623f309110c6a14ee9d87fc4a8828fcfd6b730f719->leave($__internal_96cdd70a1e66d727fed859623f309110c6a14ee9d87fc4a8828fcfd6b730f719_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}

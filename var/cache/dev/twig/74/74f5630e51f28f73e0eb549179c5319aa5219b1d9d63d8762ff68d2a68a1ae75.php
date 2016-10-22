<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_11fbb6d8fef84f2af27db6936446189d4b5d5406c91f32bad8546b7b41bf03b6 extends Twig_Template
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
        $__internal_e975729f639805d9d0d685073ac4c6bc1adc6f4f4618c52893893a57bf6829d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e975729f639805d9d0d685073ac4c6bc1adc6f4f4618c52893893a57bf6829d6->enter($__internal_e975729f639805d9d0d685073ac4c6bc1adc6f4f4618c52893893a57bf6829d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e975729f639805d9d0d685073ac4c6bc1adc6f4f4618c52893893a57bf6829d6->leave($__internal_e975729f639805d9d0d685073ac4c6bc1adc6f4f4618c52893893a57bf6829d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}

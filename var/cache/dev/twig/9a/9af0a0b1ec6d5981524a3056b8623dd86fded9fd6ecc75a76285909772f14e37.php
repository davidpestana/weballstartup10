<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_38191c7d10b9bdd5fff232d83d2cac6ced77a48371ee0707d55409465ac44373 extends Twig_Template
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
        $__internal_b1347a85a612064759075b667e551010799718e49ffd4c00bfda7e1fd25cfde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1347a85a612064759075b667e551010799718e49ffd4c00bfda7e1fd25cfde4->enter($__internal_b1347a85a612064759075b667e551010799718e49ffd4c00bfda7e1fd25cfde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b1347a85a612064759075b667e551010799718e49ffd4c00bfda7e1fd25cfde4->leave($__internal_b1347a85a612064759075b667e551010799718e49ffd4c00bfda7e1fd25cfde4_prof);

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

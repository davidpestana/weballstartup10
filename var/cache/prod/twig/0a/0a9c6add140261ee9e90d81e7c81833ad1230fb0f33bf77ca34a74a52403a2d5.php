<?php

/* PublicBundle:Default:index.html.twig */
class __TwigTemplate_61e865ccf51993533f41b6cebb0dcc9231f4b42c5734f0c88f44055445d272e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle::layout.html.twig", "PublicBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
      ";
        // line 5
        $this->loadTemplate("PublicBundle:Modules:welcome.module.html.twig", "PublicBundle:Default:index.html.twig", 5)->display($context);
        // line 6
        echo "
      ";
        // line 7
        $this->loadTemplate("PublicBundle:Modules:presentation.module.html.twig", "PublicBundle:Default:index.html.twig", 7)->display($context);
        // line 8
        echo "
      ";
        // line 9
        $this->loadTemplate("PublicBundle:Modules:functions.module.html.twig", "PublicBundle:Default:index.html.twig", 9)->display($context);
        // line 10
        echo "
      ";
        // line 11
        $this->loadTemplate("PublicBundle:Modules:customerlogos.module.html.twig", "PublicBundle:Default:index.html.twig", 11)->display($context);
        // line 12
        echo "
      ";
        // line 13
        $this->loadTemplate("PublicBundle:Modules:reviews.module.html.twig", "PublicBundle:Default:index.html.twig", 13)->display($context);
        // line 14
        echo "
      ";
        // line 15
        $this->loadTemplate("PublicBundle:Modules:services.module.html.twig", "PublicBundle:Default:index.html.twig", 15)->display($context);
        // line 16
        echo "
      ";
        // line 17
        $this->loadTemplate("PublicBundle:Modules:faq.module.html.twig", "PublicBundle:Default:index.html.twig", 17)->display($context);
        // line 18
        echo "

";
    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  64 => 17,  61 => 16,  59 => 15,  56 => 14,  54 => 13,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

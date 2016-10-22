<?php

/* PublicBundle:Default:comingsoon.html.twig */
class __TwigTemplate_09da25ffd655f5739c07e8151e72990c8569afab0f2711a972b362b159da0420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle::layout.html.twig", "PublicBundle:Default:comingsoon.html.twig", 1);
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
        $__internal_495f34456fa876e86cbfb89d489a7d57e04256c7c539f03d547d7b35e4b0db43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495f34456fa876e86cbfb89d489a7d57e04256c7c539f03d547d7b35e4b0db43->enter($__internal_495f34456fa876e86cbfb89d489a7d57e04256c7c539f03d547d7b35e4b0db43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:comingsoon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495f34456fa876e86cbfb89d489a7d57e04256c7c539f03d547d7b35e4b0db43->leave($__internal_495f34456fa876e86cbfb89d489a7d57e04256c7c539f03d547d7b35e4b0db43_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_191bb0f77c52d2bd09258cf2ba330dc098e7deb769f21248bf1c75ee342e2cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191bb0f77c52d2bd09258cf2ba330dc098e7deb769f21248bf1c75ee342e2cd9->enter($__internal_191bb0f77c52d2bd09258cf2ba330dc098e7deb769f21248bf1c75ee342e2cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

      ";
        // line 6
        $this->loadTemplate("PublicBundle:Modules:sectiontitle.module.html.twig", "PublicBundle:Default:comingsoon.html.twig", 6)->display($context);
        // line 7
        echo "      <!-- content begin -->

            <section id=\"service-details-3\" class=\"side-bg\">
                <div class=\"col-md-6 col-md-offset-6 pull-right image-container\">
                    <div class=\"background-image\"></div>
                </div>

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 wow fadeInRight\" data-wow-delay=\".5s\" data-wow-duration=\".8s\">

                            <p class=\"lead\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_comingsoon_lead", array(), "messages");
        echo "</p>

                            <p>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_comingsoon_disclaimer", array(), "messages");
        echo "</p>

                        </div>

                    </div>
                </div>

                <div class=\"clearfix\"></div>


            </section>
\t\t\t<!-- section close -->


            <div class=\"call-to-action text-light\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            <h2>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_comingsoon_cta_phrase", array(), "messages");
        echo "</h2>
                        </div>

                        <div class=\"col-md-3\">
                            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_default_contactus");
        echo "\" class=\"btn-border-light\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_comingsoon_cta", array(), "messages");
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>


";
        
        $__internal_191bb0f77c52d2bd09258cf2ba330dc098e7deb769f21248bf1c75ee342e2cd9->leave($__internal_191bb0f77c52d2bd09258cf2ba330dc098e7deb769f21248bf1c75ee342e2cd9_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:comingsoon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  85 => 38,  64 => 20,  59 => 18,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'PublicBundle::layout.html.twig' %}

{% block content %}


      {% include ('PublicBundle:Modules:sectiontitle.module.html.twig') %}
      <!-- content begin -->

            <section id=\"service-details-3\" class=\"side-bg\">
                <div class=\"col-md-6 col-md-offset-6 pull-right image-container\">
                    <div class=\"background-image\"></div>
                </div>

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 wow fadeInRight\" data-wow-delay=\".5s\" data-wow-duration=\".8s\">

                            <p class=\"lead\">{% trans %}_comingsoon_lead{% endtrans %}</p>

                            <p>{% trans %}_comingsoon_disclaimer{% endtrans %}</p>

                        </div>

                    </div>
                </div>

                <div class=\"clearfix\"></div>


            </section>
\t\t\t<!-- section close -->


            <div class=\"call-to-action text-light\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            <h2>{% trans %}_comingsoon_cta_phrase{% endtrans %}</h2>
                        </div>

                        <div class=\"col-md-3\">
                            <a href=\"{{ path('public_default_contactus') }}\" class=\"btn-border-light\">{% trans %}_comingsoon_cta{% endtrans %}</a>
                        </div>
                    </div>
                </div>
            </div>


{% endblock %}
";
    }
}

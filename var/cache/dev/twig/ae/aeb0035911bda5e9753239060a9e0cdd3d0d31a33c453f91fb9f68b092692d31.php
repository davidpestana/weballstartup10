<?php

/* PublicBundle:Modules:sectiontitle.module.html.twig */
class __TwigTemplate_9d714d562808dbe79041a6c5a8f7a6fb5383bdf5ef5f0187471bf05a6e0630c2 extends Twig_Template
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
        $__internal_f8caa311c9fc7f6a5e193de3db1e337db38f26ff8105fc7dab5cc4de210ea086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8caa311c9fc7f6a5e193de3db1e337db38f26ff8105fc7dab5cc4de210ea086->enter($__internal_f8caa311c9fc7f6a5e193de3db1e337db38f26ff8105fc7dab5cc4de210ea086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:sectiontitle.module.html.twig"));

        // line 1
        echo "<!-- subheader begin -->
<section id=\"subheader\" class=\"page-about no-bottom\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "title", array())), "html", null, true);
        echo "
                        <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "subtitle", array())), "html", null, true);
        echo "</span>
                    </h1>
                    <div class=\"small-border wow flipInY\" data-wow-delay=\".8s\" data-wow-duration=\".8s\"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->
";
        
        $__internal_f8caa311c9fc7f6a5e193de3db1e337db38f26ff8105fc7dab5cc4de210ea086->leave($__internal_f8caa311c9fc7f6a5e193de3db1e337db38f26ff8105fc7dab5cc4de210ea086_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:sectiontitle.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- subheader begin -->
<section id=\"subheader\" class=\"page-about no-bottom\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>{{section.title | trans}}
                        <span>{{section.subtitle | trans}}</span>
                    </h1>
                    <div class=\"small-border wow flipInY\" data-wow-delay=\".8s\" data-wow-duration=\".8s\"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->
";
    }
}

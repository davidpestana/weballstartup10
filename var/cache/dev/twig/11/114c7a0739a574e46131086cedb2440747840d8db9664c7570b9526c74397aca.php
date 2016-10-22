<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_e2f37ab16529fdbd51b9b1cb40a6531701e8f643035ffa6e02c602d1b336857a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40cde949d3bdbb9fcff8b5b2d28609e476490e121014c58e74a3551a6f13c6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cde949d3bdbb9fcff8b5b2d28609e476490e121014c58e74a3551a6f13c6bd->enter($__internal_40cde949d3bdbb9fcff8b5b2d28609e476490e121014c58e74a3551a6f13c6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_40cde949d3bdbb9fcff8b5b2d28609e476490e121014c58e74a3551a6f13c6bd->leave($__internal_40cde949d3bdbb9fcff8b5b2d28609e476490e121014c58e74a3551a6f13c6bd_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_576fec6b6f13aac54b1d28b9e98cc068e0ed3c28e4294082ba6a272f39111566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576fec6b6f13aac54b1d28b9e98cc068e0ed3c28e4294082ba6a272f39111566->enter($__internal_576fec6b6f13aac54b1d28b9e98cc068e0ed3c28e4294082ba6a272f39111566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "


    ";
        // line 24
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 25
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 31
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 32
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 34
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                            </div>
                        ";
            }
            // line 38
            echo "
                        ";
            // line 39
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 40
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 42
            echo "
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 48
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 49
                echo "             <div class=\"row\">
                 ";
                // line 50
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
             </div>
        ";
            }
            // line 53
            echo "
        <div class=\"row\">
            ";
            // line 55
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
     ";
        }
        // line 59
        echo "
";
        
        $__internal_576fec6b6f13aac54b1d28b9e98cc068e0ed3c28e4294082ba6a272f39111566->leave($__internal_576fec6b6f13aac54b1d28b9e98cc068e0ed3c28e4294082ba6a272f39111566_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_1b917e38d5e42fabda87a744c5dcd667f1f5330a14465fd443e7c4347911df49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b917e38d5e42fabda87a744c5dcd667f1f5330a14465fd443e7c4347911df49->enter($__internal_1b917e38d5e42fabda87a744c5dcd667f1f5330a14465fd443e7c4347911df49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_1b917e38d5e42fabda87a744c5dcd667f1f5330a14465fd443e7c4347911df49->leave($__internal_1b917e38d5e42fabda87a744c5dcd667f1f5330a14465fd443e7c4347911df49_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_09dcfec9f71aeeaf0102140c64b35633eb6de2277d4e4ab50ed49294d0ce4774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dcfec9f71aeeaf0102140c64b35633eb6de2277d4e4ab50ed49294d0ce4774->enter($__internal_09dcfec9f71aeeaf0102140c64b35633eb6de2277d4e4ab50ed49294d0ce4774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_09dcfec9f71aeeaf0102140c64b35633eb6de2277d4e4ab50ed49294d0ce4774->leave($__internal_09dcfec9f71aeeaf0102140c64b35633eb6de2277d4e4ab50ed49294d0ce4774_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_35d29ad7816133c952d90555c94b1e46029487a952f29f37c8ad289290047a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d29ad7816133c952d90555c94b1e46029487a952f29f37c8ad289290047a17->enter($__internal_35d29ad7816133c952d90555c94b1e46029487a952f29f37c8ad289290047a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_35d29ad7816133c952d90555c94b1e46029487a952f29f37c8ad289290047a17->leave($__internal_35d29ad7816133c952d90555c94b1e46029487a952f29f37c8ad289290047a17_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_4287d6abfa4bf1ae80b7ba0c29dde0c1070fdcfd3f3ec3b9d6c7cd697e78316a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4287d6abfa4bf1ae80b7ba0c29dde0c1070fdcfd3f3ec3b9d6c7cd697e78316a->enter($__internal_4287d6abfa4bf1ae80b7ba0c29dde0c1070fdcfd3f3ec3b9d6c7cd697e78316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_4287d6abfa4bf1ae80b7ba0c29dde0c1070fdcfd3f3ec3b9d6c7cd697e78316a->leave($__internal_4287d6abfa4bf1ae80b7ba0c29dde0c1070fdcfd3f3ec3b9d6c7cd697e78316a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 20,  179 => 19,  168 => 18,  157 => 17,  149 => 59,  142 => 55,  138 => 53,  132 => 50,  129 => 49,  127 => 48,  119 => 42,  113 => 40,  111 => 39,  108 => 38,  104 => 36,  89 => 34,  85 => 33,  82 => 32,  80 => 31,  72 => 25,  70 => 24,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table           = block('list_table')|trim %}
    {% set _list_filters         = block('list_filters')|trim %}
    {% set _list_filters_actions = block('list_filters_actions') %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}



    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
             <div class=\"row\">
                 {{ _list_filters|raw }}
             </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
     {% endif %}

{% endblock %}
";
    }
}

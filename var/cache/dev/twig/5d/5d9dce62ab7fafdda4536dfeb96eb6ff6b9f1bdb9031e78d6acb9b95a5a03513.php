<?php

/* PublicBundle:Modules:contactus.module.html.twig */
class __TwigTemplate_57e5e7207fff04e9bedd32b1bd467135d088344e1b68eb824868c1b71cffd102 extends Twig_Template
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
        $__internal_9c7c796bfb3839eb7718a16213a21b315dbd6d9ad16e46b8f2e11a29d1441c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7c796bfb3839eb7718a16213a21b315dbd6d9ad16e46b8f2e11a29d1441c73->enter($__internal_9c7c796bfb3839eb7718a16213a21b315dbd6d9ad16e46b8f2e11a29d1441c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:contactus.module.html.twig"));

        // line 1
        echo "<div class=\"row no-gutter\">
    <div class=\"col-md-6\">
        <div id=\"map\"></div>
    </div>

    <div class=\"col-md-6\">
        <div id=\"contact-form-wrapper\">
            <div class=\"contact_form_holder\">
                <form id=\"contact\" class=\"row\" name=\"form1\" method=\"post\" action=\"\">
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_name_holder", array(), "messages");
        echo "\" />

                    <div id=\"error_email\" class=\"error\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_email_error", array(), "messages");
        echo "</div>
                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_email_holder", array(), "messages");
        echo "\" />

                    <div id=\"error_message\" class=\"error\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_message_error", array(), "messages");
        echo "</div>
                    <textarea cols=\"10\" rows=\"10\" name=\"message\" id=\"message\" class=\"form-control\" placeholder=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_message_holder", array(), "messages");
        echo "\"></textarea>

                    <div id=\"mail_success\" class=\"success\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_success", array(), "messages");
        echo "</div>
                    <div id=\"mail_failed\" class=\"error\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_failed", array(), "messages");
        echo "</div>

                    <p id=\"btnsubmit\">
                        <input type=\"submit\" id=\"send\" value=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("_contact_form_button", array(), "messages");
        echo "\" class=\"btn btn-custom\" />
                    </p>



                </form>
            </div>
        </div>
    </div>


</div>
";
        
        $__internal_9c7c796bfb3839eb7718a16213a21b315dbd6d9ad16e46b8f2e11a29d1441c73->leave($__internal_9c7c796bfb3839eb7718a16213a21b315dbd6d9ad16e46b8f2e11a29d1441c73_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:contactus.module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  60 => 19,  56 => 18,  51 => 16,  47 => 15,  42 => 13,  38 => 12,  33 => 10,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row no-gutter\">
    <div class=\"col-md-6\">
        <div id=\"map\"></div>
    </div>

    <div class=\"col-md-6\">
        <div id=\"contact-form-wrapper\">
            <div class=\"contact_form_holder\">
                <form id=\"contact\" class=\"row\" name=\"form1\" method=\"post\" action=\"\">
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"{% trans %}_contact_form_name_holder{% endtrans %}\" />

                    <div id=\"error_email\" class=\"error\">{% trans %}_contact_form_email_error{% endtrans %}</div>
                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"{% trans %}_contact_form_email_holder{% endtrans %}\" />

                    <div id=\"error_message\" class=\"error\">{% trans %}_contact_form_message_error{% endtrans %}</div>
                    <textarea cols=\"10\" rows=\"10\" name=\"message\" id=\"message\" class=\"form-control\" placeholder=\"{% trans %}_contact_form_message_holder{% endtrans %}\"></textarea>

                    <div id=\"mail_success\" class=\"success\">{% trans %}_contact_form_success{% endtrans %}</div>
                    <div id=\"mail_failed\" class=\"error\">{% trans %}_contact_form_failed{% endtrans %}</div>

                    <p id=\"btnsubmit\">
                        <input type=\"submit\" id=\"send\" value=\"{% trans %}_contact_form_button{% endtrans %}\" class=\"btn btn-custom\" />
                    </p>



                </form>
            </div>
        </div>
    </div>


</div>
";
    }
}

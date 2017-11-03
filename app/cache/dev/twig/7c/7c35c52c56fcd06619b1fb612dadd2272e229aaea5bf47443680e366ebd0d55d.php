<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_5dfc209105f4034bcf889c1abebc3559f54d16492362e28decc84ee6943c3901 extends Twig_Template
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
        $__internal_4b1528d4b04565e8a4e1060baa9a3cae0e80bc468e16af8cebd96065f74153ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1528d4b04565e8a4e1060baa9a3cae0e80bc468e16af8cebd96065f74153ed->enter($__internal_4b1528d4b04565e8a4e1060baa9a3cae0e80bc468e16af8cebd96065f74153ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "                
<main>

    <!--Main layout-->
    <div class=\"container\">
        <h1 style=\"font-weight: 700\">Mes informations</h1>
        <p>Modifier vos informations ici.</p>
        <div class=\"well\">
            <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">

                        <div class=\"\">
                            <i class=\"fa fa-user prefix\"></i>
                            <label for=\"form1\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("type" => "text", "translation_domain" => "FOSUserBundle")));
        // line 21
        echo "
                        </div>
                        
                        <div class=\"\">
                            <i class=\"fa fa-envelope prefix\"></i>
                            <label for=\"form1\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("type" => "email", "translation_domain" => "FOSUserBundle")));
        // line 31
        echo "
                        </div>
                            
                    </div>
                            
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <i class=\"fa fa-lock prefix\"></i>
                        <label for=\"form3\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.current_password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("translation_domain" => "FOSUserBundle", "mapped" => "false")));
        // line 43
        echo "
                        ";
        // line 45
        echo "                    </div>
                </div>
                
                <button class=\"btn btn-large miva waves-effect waves-light m-t-lg\"
                        type=\"submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    Mettre à jour
                </button>
                          
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </form>
        </div>

    </div>
    <!--/.Main layout-->

</main>";
        
        $__internal_4b1528d4b04565e8a4e1060baa9a3cae0e80bc468e16af8cebd96065f74153ed->leave($__internal_4b1528d4b04565e8a4e1060baa9a3cae0e80bc468e16af8cebd96065f74153ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 53,  86 => 49,  80 => 45,  77 => 43,  75 => 39,  71 => 38,  62 => 31,  60 => 27,  56 => 26,  49 => 21,  47 => 17,  43 => 16,  32 => 10,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
                
<main>

    <!--Main layout-->
    <div class=\"container\">
        <h1 style=\"font-weight: 700\">Mes informations</h1>
        <p>Modifier vos informations ici.</p>
        <div class=\"well\">
            <form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">

                        <div class=\"\">
                            <i class=\"fa fa-user prefix\"></i>
                            <label for=\"form1\">{{ 'form.username'|trans }}</label>
                            {{ form_widget(form.username, 
                                {'attr':{
                                    'type':'text',
                                    'translation_domain':'FOSUserBundle' }}) 
                            }}
                        </div>
                        
                        <div class=\"\">
                            <i class=\"fa fa-envelope prefix\"></i>
                            <label for=\"form1\">{{ 'form.email'|trans }}</label>
                            {{ form_widget(form.email, 
                                {'attr':{
                                    'type':'email',
                                    'translation_domain':'FOSUserBundle' }}) 
                            }}
                        </div>
                            
                    </div>
                            
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <i class=\"fa fa-lock prefix\"></i>
                        <label for=\"form3\">{{ 'form.current_password'|trans }}</label>
                        {{ form_widget(form.current_password, 
                            {'attr':{
                                'translation_domain':'FOSUserBundle',
                                'mapped':'false' }}) 
                        }}
                        {#'constraints':new UserPassword() #}
                    </div>
                </div>
                
                <button class=\"btn btn-large miva waves-effect waves-light m-t-lg\"
                        type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\">
                    Mettre à jour
                </button>
                          
                {{ form_widget(form) }}
            </form>
        </div>

    </div>
    <!--/.Main layout-->

</main>", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp64\\www\\Miva\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}

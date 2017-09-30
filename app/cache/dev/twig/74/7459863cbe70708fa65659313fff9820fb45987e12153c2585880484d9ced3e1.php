<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_b24a397564b7813eed58815d3052ea5528a24aaf8003317a791ef74de9c21a4a extends Twig_Template
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
        $__internal_1bf1228b324834f4abc09698e6c0cd1ad5099c297d2986bc59a689e2f5e56dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf1228b324834f4abc09698e6c0cd1ad5099c297d2986bc59a689e2f5e56dc3->enter($__internal_1bf1228b324834f4abc09698e6c0cd1ad5099c297d2986bc59a689e2f5e56dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<!-- Inscription Layout -->

<div align=\"center\">
    <article class=\"container-login\">

        <section>

            <ul id=\"top-bar\" class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li>
            </ul>

            <div class=\"tab-content tabs-login1 col-lg-12 col-md-12 col-sm-12 col-xs-12\">

                <div id=\"login-access\" class=\"tab-pane active in\">
                    <div class=\"row main\">
                        <div class=\"main-login main-center\">
                            <h5>Entrez vos informations pour la creation de compte</h5>
                            <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">

                                <div class=\"form-group\">
                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-users fa\" aria-hidden=\"true\">
                                            </i>
                                        </span>

                                            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "type" => "number", "placeholder" => "Pseudo")));
        // line 35
        echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-envelope fa\" aria-hidden=\"true\">

                                            </i>
                                        </span>

                                            ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "type" => "email", "placeholder" => "Email")));
        // line 54
        echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\">

                                            </i>
                                        </span>

                                            ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "type" => "password", "placeholder" => "Mot de Passe")));
        // line 73
        echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">

                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\">

                                            </i>
                                        </span>

                                            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "type" => "password", "placeholder" => "Confirmation")));
        // line 93
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 121
        echo "
                                <div class=\"form-group \">
                                    <button target=\"_blank\" type=\"submit\" id=\"button\"
                                            class=\"btn btn-large waves-effect waves-light btn-block login-button miva\">
                                        VALIDER
                                    </button>
                                </div>

                                ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </article>
</div>
<!--/.Inscription layout-->";
        
        $__internal_1bf1228b324834f4abc09698e6c0cd1ad5099c297d2986bc59a689e2f5e56dc3->leave($__internal_1bf1228b324834f4abc09698e6c0cd1ad5099c297d2986bc59a689e2f5e56dc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 129,  127 => 121,  120 => 93,  118 => 88,  101 => 73,  99 => 68,  83 => 54,  81 => 49,  65 => 35,  63 => 30,  48 => 20,  36 => 11,  32 => 10,  22 => 2,);
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
<!-- Inscription Layout -->

<div align=\"center\">
    <article class=\"container-login\">

        <section>

            <ul id=\"top-bar\" class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a></li>
                <li><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>
            </ul>

            <div class=\"tab-content tabs-login1 col-lg-12 col-md-12 col-sm-12 col-xs-12\">

                <div id=\"login-access\" class=\"tab-pane active in\">
                    <div class=\"row main\">
                        <div class=\"main-login main-center\">
                            <h5>Entrez vos informations pour la creation de compte</h5>
                            <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">

                                <div class=\"form-group\">
                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-users fa\" aria-hidden=\"true\">
                                            </i>
                                        </span>

                                            {{ form_widget(form.username,
                                            {'attr':{
                                                'class':'form-control',
                                                'type':'number',
                                                'placeholder':'Pseudo' }})
                                            }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-envelope fa\" aria-hidden=\"true\">

                                            </i>
                                        </span>

                                            {{ form_widget(form.email,
                                            {'attr':{
                                                'class':'form-control',
                                                'type':'email',
                                                'placeholder':'Email' }})
                                            }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\">

                                            </i>
                                        </span>

                                            {{ form_widget(form.plainPassword.first,
                                            {'attr':{
                                                'class':'form-control',
                                                'type':'password',
                                                'placeholder':'Mot de Passe' }})
                                            }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">

                                    <div class=\"\">
                                        <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\">

                                            </i>
                                        </span>

                                            {{ form_widget(form.plainPassword.second,
                                            {'attr':{
                                                'class':'form-control',
                                                'type':'password',
                                                'placeholder':'Confirmation' }})
                                            }}
                                        </div>
                                    </div>
                                </div>

                                {#<div class=\"form-group\">
                                    <label for=\"confirm\" class=\"col-sm-2 control-label\">
                                        Confirmer votre mot de passe
                                    </label>

                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                                <i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\">

                                                </i>
                                            </span>

                                            {{ form_widget(form.plainPassword.invalid,
                                                {'attr':{
                                                    'class':'form-control',
                                                    'invalid_message':'fos_user.password.mismatch',
                                                    'type':'texte'}})
                                            }}
                                        </div>
                                    </div>
                                </div>
                                #}

                                <div class=\"form-group \">
                                    <button target=\"_blank\" type=\"submit\" id=\"button\"
                                            class=\"btn btn-large waves-effect waves-light btn-block login-button miva\">
                                        VALIDER
                                    </button>
                                </div>

                                {{ form_widget(form) }}
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </article>
</div>
<!--/.Inscription layout-->", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\Miva\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}

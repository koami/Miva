<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8ecdaef27e0d17b100d7b98b897d079b6dd43d75b9a3192a74cd3f7276037f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9d1be1ed3bc29384c227d8675efa9e2219cbf37329efe57e589c467e9297843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d1be1ed3bc29384c227d8675efa9e2219cbf37329efe57e589c467e9297843->enter($__internal_c9d1be1ed3bc29384c227d8675efa9e2219cbf37329efe57e589c467e9297843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d1be1ed3bc29384c227d8675efa9e2219cbf37329efe57e589c467e9297843->leave($__internal_c9d1be1ed3bc29384c227d8675efa9e2219cbf37329efe57e589c467e9297843_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_7f1552feb6a4d16a37932800be2157c01ed0d3190b00cdc435f073cf710546f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1552feb6a4d16a37932800be2157c01ed0d3190b00cdc435f073cf710546f2->enter($__internal_7f1552feb6a4d16a37932800be2157c01ed0d3190b00cdc435f073cf710546f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Login";
        
        $__internal_7f1552feb6a4d16a37932800be2157c01ed0d3190b00cdc435f073cf710546f2->leave($__internal_7f1552feb6a4d16a37932800be2157c01ed0d3190b00cdc435f073cf710546f2_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_757d928ef9aeef310b78d1a2d2083f4357d9b0966db0f579ed1d543663452f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757d928ef9aeef310b78d1a2d2083f4357d9b0966db0f579ed1d543663452f2e->enter($__internal_757d928ef9aeef310b78d1a2d2083f4357d9b0966db0f579ed1d543663452f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "
    <!--Main layout-->
    <main>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3\" >
                    <div class=\"login-body\" align=\"center\">
                        <article class=\"container-login\">
                            <section>
                                <ul id=\"top-bar\" class=\"nav nav-tabs nav-justified\">
                                    <li class=\"active\"><a href=\"#connexion\">Connexion</a></li>
                                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a></li>
                                </ul>

                                <div class=\"tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12\">

                                    <!-- Connexion Layout -->
                                    <div id=\"connexion\" class=\"tab-pane active in\">
                                        <h2 align=\"left\"><i class=\"glyphicon glyphicon-log-in\"></i>
                                            Connexion
                                        </h2>

                                        <form action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\"
                                              method=\"post\" accept-charset=\"utf-8\"
                                              autocomplete=\"off\" role=\"form\"
                                              class=\"form-horizontal\">

                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                            <div class=\"form-group \">
                                                <label for=\"username\" class=\"sr-only\">
                                                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                                </label>

                                                <input type=\"text\" class=\"\" name=\"_username\"
                                                       id=\"username\"
                                                       placeholder=\"Entrez votre Pseudo ou Email\"
                                                       tabindex=\"1\" value=\"\"
                                                       value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
                                            </div>

                                            <div class=\"form-group \">
                                                <label for=\"password\" class=\"sr-only\">
                                                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                                </label>

                                                <input type=\"password\" class=\"\"
                                                       name=\"_password\" id=\"password\"
                                                       placeholder=\"Mot de passe\" value=\"\"
                                                       tabindex=\"2\" required=\"required\" />
                                            </div>

                                            <div align=\"left\" class=\"checkbox\">
                                                <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">
                                                    Mot de passe oublié ?
                                                </a>
                                            </div>
                                            <br/>

                                            <div class=\"form-group \">
                                                <button type=\"submit\" name=\"log-me-in\"
                                                        id=\"submit\" tabindex=\"5\"
                                                        class=\"btn btn-lg miva waves-effect waves-light\">
                                                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                    <!--/.Connexion layout-->
                                    <hr/>

                                </div>
                            </section>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/.Main layout-->

";
        
        $__internal_757d928ef9aeef310b78d1a2d2083f4357d9b0966db0f579ed1d543663452f2e->leave($__internal_757d928ef9aeef310b78d1a2d2083f4357d9b0966db0f579ed1d543663452f2e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 76,  137 => 66,  124 => 56,  116 => 51,  106 => 44,  99 => 40,  90 => 34,  76 => 23,  62 => 11,  56 => 9,  53 => 8,  47 => 7,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block titre %}MIVA | Login{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error|trans }}</div>
    {% endif %}

    <!--Main layout-->
    <main>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3\" >
                    <div class=\"login-body\" align=\"center\">
                        <article class=\"container-login\">
                            <section>
                                <ul id=\"top-bar\" class=\"nav nav-tabs nav-justified\">
                                    <li class=\"active\"><a href=\"#connexion\">Connexion</a></li>
                                    <li><a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a></li>
                                </ul>

                                <div class=\"tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12\">

                                    <!-- Connexion Layout -->
                                    <div id=\"connexion\" class=\"tab-pane active in\">
                                        <h2 align=\"left\"><i class=\"glyphicon glyphicon-log-in\"></i>
                                            Connexion
                                        </h2>

                                        <form action=\"{{ path(\"fos_user_security_check\") }}\"
                                              method=\"post\" accept-charset=\"utf-8\"
                                              autocomplete=\"off\" role=\"form\"
                                              class=\"form-horizontal\">

                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   value=\"{{ csrf_token }}\" />

                                            <div class=\"form-group \">
                                                <label for=\"username\" class=\"sr-only\">
                                                    {{ 'security.login.username'|trans }}
                                                </label>

                                                <input type=\"text\" class=\"\" name=\"_username\"
                                                       id=\"username\"
                                                       placeholder=\"Entrez votre Pseudo ou Email\"
                                                       tabindex=\"1\" value=\"\"
                                                       value=\"{{ last_username }}\" required=\"required\"/>
                                            </div>

                                            <div class=\"form-group \">
                                                <label for=\"password\" class=\"sr-only\">
                                                    {{ 'security.login.password'|trans }}
                                                </label>

                                                <input type=\"password\" class=\"\"
                                                       name=\"_password\" id=\"password\"
                                                       placeholder=\"Mot de passe\" value=\"\"
                                                       tabindex=\"2\" required=\"required\" />
                                            </div>

                                            <div align=\"left\" class=\"checkbox\">
                                                <a href=\"{{ path('fos_user_resetting_request') }}\">
                                                    Mot de passe oublié ?
                                                </a>
                                            </div>
                                            <br/>

                                            <div class=\"form-group \">
                                                <button type=\"submit\" name=\"log-me-in\"
                                                        id=\"submit\" tabindex=\"5\"
                                                        class=\"btn btn-lg miva waves-effect waves-light\">
                                                    {{ 'security.login.submit'|trans }}
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                    <!--/.Connexion layout-->
                                    <hr/>

                                </div>
                            </section>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/.Main layout-->

{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Miva\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}

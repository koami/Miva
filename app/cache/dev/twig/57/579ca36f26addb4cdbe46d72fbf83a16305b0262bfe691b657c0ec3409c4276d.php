<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_95b4769a305fb35aa9ff480916d40ab6004e24ab528ce34af5c513e313c4dc22 extends Twig_Template
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
        $__internal_d325356fb79b5e1c9cdc26d7fdaecd1589156918ff49a1f2fb5a6808b1bf22c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d325356fb79b5e1c9cdc26d7fdaecd1589156918ff49a1f2fb5a6808b1bf22c5->enter($__internal_d325356fb79b5e1c9cdc26d7fdaecd1589156918ff49a1f2fb5a6808b1bf22c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<main>

    <!--Main layout-->
    <div class=\"container\">
        <h1 style=\"font-weight: 700\">Mes informations</h1>
        <p>Verifiez vos informations ici.</p>
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"md-form\">
                        <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "html", null, true);
        echo "</p>
                        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>

            <a class=\"btn btn-large miva waves-effect waves-light\"
               href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">
                Modifier mes Infos
            </a>
        </div>
    </div>
    <!--/.Main layout-->

</main>

";
        
        $__internal_d325356fb79b5e1c9cdc26d7fdaecd1589156918ff49a1f2fb5a6808b1bf22c5->leave($__internal_d325356fb79b5e1c9cdc26d7fdaecd1589156918ff49a1f2fb5a6808b1bf22c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  41 => 14,  35 => 13,  22 => 2,);
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
        <p>Verifiez vos informations ici.</p>
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"md-form\">
                        <p>{{ 'profile.show.username'|trans }}: {{ user.username|capitalize }}</p>
                        <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                    </div>
                </div>
            </div>

            <a class=\"btn btn-large miva waves-effect waves-light\"
               href=\"{{ path('fos_user_profile_edit') }}\">
                Modifier mes Infos
            </a>
        </div>
    </div>
    <!--/.Main layout-->

</main>

{#<div class=\"row\">

    <div class=\"tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12\">
        <h2>Mes informations</h2>
        <div >
            <div >
                <div class=\"span4\">
                    <p>{{ 'profile.show.username'|trans }}: {{ user.username|capitalize }}</p>
                    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                </div>
            </div>
        </div>
        
        <a class=\"center-block\" 
           href=\"{{ path('fos_user_profile_edit') }}\">
            Modifier mes Infos
        </a>
    </div>
</div>

<div class=\"fos_user_user_show\">
    
</div>#}", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\Miva\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}

<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_330874773b5d25929bada786653da6671cfcb16dd874db722bc60237f24beb9d extends Twig_Template
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
        $__internal_36aa1cf3cd92df4cc6f2c3f05bf115cfed1e0cfb7c650e04d8836e7d67a45fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36aa1cf3cd92df4cc6f2c3f05bf115cfed1e0cfb7c650e04d8836e7d67a45fdc->enter($__internal_36aa1cf3cd92df4cc6f2c3f05bf115cfed1e0cfb7c650e04d8836e7d67a45fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 2
        echo "
<a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\"
   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"
   href=\"#\">
    <span class=\"yellow-text\" style=\"font-weight: 700; \">
        <strong>
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "
        </strong>
    </span>

</a>

<div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
    <a class=\"dropdown-item\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">
        Mes infromations
    </a>

    ";
        // line 22
        echo "
    <a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
        Changer de mot de passe
    </a>

    <a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factures");
        echo "\">
        Mes factures
    </a>

    <a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
        Déconnexion
    </a>
</div>";
        
        $__internal_36aa1cf3cd92df4cc6f2c3f05bf115cfed1e0cfb7c650e04d8836e7d67a45fdc->leave($__internal_36aa1cf3cd92df4cc6f2c3f05bf115cfed1e0cfb7c650e04d8836e7d67a45fdc_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 31,  57 => 27,  50 => 23,  47 => 22,  40 => 15,  30 => 8,  22 => 2,);
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

<a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\"
   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"
   href=\"#\">
    <span class=\"yellow-text\" style=\"font-weight: 700; \">
        <strong>
            {{ app.user.username|capitalize }}
        </strong>
    </span>

</a>

<div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
    <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">
        Mes infromations
    </a>

    {# <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_edit') }}\">
        Modifier mes Infos
    </a> #}

    <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">
        Changer de mot de passe
    </a>

    <a class=\"dropdown-item\" href=\"{{ path('factures') }}\">
        Mes factures
    </a>

    <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">
        Déconnexion
    </a>
</div>", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "C:\\wamp64\\www\\Miva\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateursConnecte.html.twig");
    }
}

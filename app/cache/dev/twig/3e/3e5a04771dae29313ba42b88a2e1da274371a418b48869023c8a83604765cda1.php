<?php

/* UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig */
class __TwigTemplate_749bb1525465758e9cdddc0ee00402eed6760ba7a262a41cc07434ef3951b9ba extends Twig_Template
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
        $__internal_0f1d2966571979a52e2d0cd30bac27733d4aececc440cfcdc24f20230c75d7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d2966571979a52e2d0cd30bac27733d4aececc440cfcdc24f20230c75d7fb->enter($__internal_0f1d2966571979a52e2d0cd30bac27733d4aececc440cfcdc24f20230c75d7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig"));

        // line 2
        echo "
<a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu2\"
   data-toggle=\"dropdown\" aria-haspopup=\"true\"
   aria-expanded=\"false\" href=\"#\">
    <span class=\"yellow-text\" style=\"font-weight: 700; \">
        <strong>
            Admin ";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "
        </strong>
    </span>

</a>

<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">
            Mes infromations
        </a>
    </li>

    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
            Changer de mot de passe
        </a>
    </li>

    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factures");
        echo "\">
            Mes factures
        </a>
    </li>

    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
            Déconnexion
        </a>
    </li>

    <li class=\"divider-short \"></li>

    <li class=\"dropdown-submenu\">

        <a class=\"dropdown-submenu-item\" tabindex=\"-1\" href=\"#\">Administration</a>

        <ul class=\"dropdown-menu\">

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits");
        echo "\">
                    Produits
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories");
        echo "\">
                    Catégories
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminSubCategories");
        echo "\">
                    Sous-catégories produits
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs");
        echo "\">
                    Clients
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommande");
        echo "\">
                    Commandes
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminPartenaires");
        echo "\">
                    Partenaires
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGaranties");
        echo "\">
                    Garanties
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRayon");
        echo "\">
                    Rayon
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminMedia");
        echo "\">
                    Media
                </a>
            </li>
        </ul>
    </li>
</ul>";
        
        $__internal_0f1d2966571979a52e2d0cd30bac27733d4aececc440cfcdc24f20230c75d7fb->leave($__internal_0f1d2966571979a52e2d0cd30bac27733d4aececc440cfcdc24f20230c75d7fb_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 109,  160 => 102,  150 => 95,  140 => 88,  130 => 81,  120 => 74,  110 => 67,  100 => 60,  90 => 53,  72 => 38,  62 => 31,  52 => 24,  42 => 17,  30 => 8,  22 => 2,);
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

<a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu2\"
   data-toggle=\"dropdown\" aria-haspopup=\"true\"
   aria-expanded=\"false\" href=\"#\">
    <span class=\"yellow-text\" style=\"font-weight: 700; \">
        <strong>
            Admin {{ app.user.username|capitalize }}
        </strong>
    </span>

</a>

<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"{{ path('fos_user_profile_show') }}\">
            Mes infromations
        </a>
    </li>

    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"{{ path('fos_user_change_password') }}\">
            Changer de mot de passe
        </a>
    </li>

    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"{{ path('factures') }}\">
            Mes factures
        </a>
    </li>

    <li>
        <a class=\"dropdown-item\" tabindex=\"-1\"
           href=\"{{ path('fos_user_security_logout') }}\">
            Déconnexion
        </a>
    </li>

    <li class=\"divider-short \"></li>

    <li class=\"dropdown-submenu\">

        <a class=\"dropdown-submenu-item\" tabindex=\"-1\" href=\"#\">Administration</a>

        <ul class=\"dropdown-menu\">

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminProduits') }}\">
                    Produits
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminCategories') }}\">
                    Catégories
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminSubCategories') }}\">
                    Sous-catégories produits
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminUtilisateurs') }}\">
                    Clients
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminCommande') }}\">
                    Commandes
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminPartenaires') }}\">
                    Partenaires
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminGaranties') }}\">
                    Garanties
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminRayon') }}\">
                    Rayon
                </a>
            </li>

            <li>
                <a class=\"dropdown-item\" tabindex=\"-1\"
                   href=\"{{ path('adminMedia') }}\">
                    Media
                </a>
            </li>
        </ul>
    </li>
</ul>", "UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig", "C:\\wamp64\\www\\Miva\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/adminConnecte.html.twig");
    }
}

<?php

/* EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig */
class __TwigTemplate_49bb01dff4a4b64f38d78e188ed8512fbaf0894f150a5eddf3ab0afec8d18dc8 extends Twig_Template
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
        $__internal_ea1ede4334804bc26a2974dd56565f80737fc3ad687bcc9a8f84a74b271200e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1ede4334804bc26a2974dd56565f80737fc3ad687bcc9a8f84a74b271200e3->enter($__internal_ea1ede4334804bc26a2974dd56565f80737fc3ad687bcc9a8f84a74b271200e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig"));

        // line 1
        echo "Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "username", array()), "html", null, true);
        echo "
<br />
Votre commande est validée.
Vous pouvez accèder à votre facture sur votre espace client. ";
        // line 5
        echo "<br /><br />
Miva vous remerci pour votre commande.
<br />
Cordialement.";
        
        $__internal_ea1ede4334804bc26a2974dd56565f80737fc3ad687bcc9a8f84a74b271200e3->leave($__internal_ea1ede4334804bc26a2974dd56565f80737fc3ad687bcc9a8f84a74b271200e3_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Bonjour {{ utilisateur.username }}
<br />
Votre commande est validée.
Vous pouvez accèder à votre facture sur votre espace client. {#Dire a Gantim d'en faire un lien vers facture.#}
<br /><br />
Miva vous remerci pour votre commande.
<br />
Cordialement.", "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/SwiftLayout/validationCommande.html.twig");
    }
}

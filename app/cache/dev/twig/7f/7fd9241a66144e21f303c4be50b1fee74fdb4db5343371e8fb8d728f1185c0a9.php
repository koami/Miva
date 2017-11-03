<?php

/* EcommerceBundle:Administration:Commandes/modulesUsed/commande.html.twig */
class __TwigTemplate_ece4377af5618c3bcfc4cecf65f2b9e3d5217e03a6719b576c36fd5678f69c49 extends Twig_Template
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
        $__internal_ac14b40c2ed86eb84d109a08398edbec469e81da362853bfdfc75baac7a8c474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac14b40c2ed86eb84d109a08398edbec469e81da362853bfdfc75baac7a8c474->enter($__internal_ac14b40c2ed86eb84d109a08398edbec469e81da362853bfdfc75baac7a8c474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Commandes/modulesUsed/commande.html.twig"));

        // line 1
        echo "<span class=\"badge red produitRefersh\" >
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")), "html", null, true);
        echo "
</span>";
        
        $__internal_ac14b40c2ed86eb84d109a08398edbec469e81da362853bfdfc75baac7a8c474->leave($__internal_ac14b40c2ed86eb84d109a08398edbec469e81da362853bfdfc75baac7a8c474_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Commandes/modulesUsed/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"badge red produitRefersh\" >
    {{ commandes }}
</span>", "EcommerceBundle:Administration:Commandes/modulesUsed/commande.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/Commandes/modulesUsed/commande.html.twig");
    }
}

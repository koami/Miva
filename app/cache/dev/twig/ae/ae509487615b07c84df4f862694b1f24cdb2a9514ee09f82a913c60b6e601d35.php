<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_296c5828afce292bc28cf220cd94f5e370a3838d35892d4f28e18d6687a58605 extends Twig_Template
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
        $__internal_e9b135d1bf310f56f89f38ade4d04fdf83f4af30b6e4e361a14ac2546221060b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b135d1bf310f56f89f38ade4d04fdf83f4af30b6e4e361a14ac2546221060b->enter($__internal_e9b135d1bf310f56f89f38ade4d04fdf83f4af30b6e4e361a14ac2546221060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        // line 1
        echo "<span class=\"badge red produitRefersh\" >
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
        echo "
</span>";
        
        $__internal_e9b135d1bf310f56f89f38ade4d04fdf83f4af30b6e4e361a14ac2546221060b->leave($__internal_e9b135d1bf310f56f89f38ade4d04fdf83f4af30b6e4e361a14ac2546221060b_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig";
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
    {{ articles }}
</span>", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/modulesUsed/panier.html.twig");
    }
}

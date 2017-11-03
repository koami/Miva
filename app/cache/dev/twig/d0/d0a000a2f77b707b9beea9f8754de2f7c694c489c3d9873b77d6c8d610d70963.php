<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_f13abc9fcc4182e564d1d537d6433d27bf60278829bc791b5a113d0c8ac476c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/defaultLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d17d6ee794038b471fd69ba71d5c57723ee7efba56d90148c7d52767ad564e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17d6ee794038b471fd69ba71d5c57723ee7efba56d90148c7d52767ad564e0d->enter($__internal_d17d6ee794038b471fd69ba71d5c57723ee7efba56d90148c7d52767ad564e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17d6ee794038b471fd69ba71d5c57723ee7efba56d90148c7d52767ad564e0d->leave($__internal_d17d6ee794038b471fd69ba71d5c57723ee7efba56d90148c7d52767ad564e0d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d060c0ed414e02cdd92a332144c0d41158cbd9c20452ea0a107f620465f1a16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d060c0ed414e02cdd92a332144c0d41158cbd9c20452ea0a107f620465f1a16d->enter($__internal_d060c0ed414e02cdd92a332144c0d41158cbd9c20452ea0a107f620465f1a16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <main>
    <div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12\">

            <h1>Valider mon panier</h1>
            <br>
            <div class=\"\">
                <dl class=\"\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dd>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dd>
                    <dd>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dd>
                </dl>
            </div>
            <div class=\"well\">
                <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Designation</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Reduction</th>
                        <th>Garantie</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 34
            echo "                        <tr>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                            </td>

                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixRed", array()), "html", null, true);
            echo " F CFA</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reduction", array()), "html", null, true);
            echo " %</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "garantie", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixRed", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " F CFA</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                </tbody>
            </table>
            
            <p class=\"pull-right\">
                <dt>Total : <span style=\"font-weight:600;font-size:35px\" class=\"red-text text-darken-4\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixRed", array()), "html", null, true);
        echo "</span> F CFA</dt>
                
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "reduction", array()));
        foreach ($context['_seq'] as $context["key"] => $context["reduction"]) {
            // line 54
            echo "                    <dt>Reduction ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["reduction"], "html", null, true);
            echo " €</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['reduction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixRed", array()), "html", null, true);
        echo " F CFA</dd>#}
            </p>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>

            <div class=\"clearfix\"></div>
            <div class=\"m-t-md\">
            <form action=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "token", array()), "html", null, true);
        echo "\" />
                <input name=\"prix\" type=\"hidden\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixRed", array()), "html", null, true);
        echo "\" />
                <input name=\"date\" type=\"hidden\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-yellow pull-right\">Payer</button>
            </form>
            
            <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-danger\">retour</a>
            </div>
        </div>

    </div>
</div>
    </main>
";
        
        $__internal_d060c0ed414e02cdd92a332144c0d41158cbd9c20452ea0a107f620465f1a16d->leave($__internal_d060c0ed414e02cdd92a332144c0d41158cbd9c20452ea0a107f620465f1a16d_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 77,  183 => 73,  179 => 72,  175 => 71,  171 => 70,  162 => 64,  156 => 63,  147 => 57,  144 => 56,  133 => 54,  129 => 53,  124 => 51,  117 => 46,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  90 => 37,  85 => 35,  82 => 34,  78 => 33,  59 => 17,  53 => 16,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/defaultLayout.html.twig\" %}


{% block body %}
    <main>
    <div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12\">

            <h1>Valider mon panier</h1>
            <br>
            <div class=\"\">
                <dl class=\"\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dd>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dd>
                    <dd>{{ commande.commande.livraison.adresse }}</dd>
                </dl>
            </div>
            <div class=\"well\">
                <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Designation</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Reduction</th>
                        <th>Garantie</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {% for produit in commande.commande.produit %}
                        <tr>
                            <td>{{ produit.reference }}</td>
                            <td>
                                {{ produit.quantite }}
                            </td>

                            <td>{{ produit.prixRed }} F CFA</td>
                            <td>{{ produit.reduction }} %</td>
                            <td>{{ produit.garantie }}</td>
                            <td>{{ produit.prixRed * produit.quantite }} F CFA</td>
                        </tr>
                    {% endfor %}

                </tbody>
            </table>
            
            <p class=\"pull-right\">
                <dt>Total : <span style=\"font-weight:600;font-size:35px\" class=\"red-text text-darken-4\">{{ commande.commande.prixRed }}</span> F CFA</dt>
                
                {% for key, reduction in commande.commande.reduction %}
                    <dt>Reduction {{ key }} :</dt><dd>{{ reduction }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ commande.commande.prixRed }} F CFA</dd>#}
            </p>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>
                    <dt>{{ commande.commande.livraison.adresse }}</dt>
                </dl>
            </div>

            <div class=\"clearfix\"></div>
            <div class=\"m-t-md\">
            <form action=\"{{ path('validationCommande', { 'id' : commande.id }) }}\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"{{ commande.commande.token }}\" />
                <input name=\"prix\" type=\"hidden\" value=\"{{ commande.commande.prixRed }}\" />
                <input name=\"date\" type=\"hidden\" value=\"{{ commande.date|date('dmyhms') }}\" />
                <button type=\"submit\" class=\"btn btn-yellow pull-right\">Payer</button>
            </form>
            
            <a href=\"{{ path('livraison') }}\" class=\"btn btn-danger\">retour</a>
            </div>
        </div>

    </div>
</div>
    </main>
{% endblock %}", "EcommerceBundle:Default:panier/layout/validation.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/validation.html.twig");
    }
}

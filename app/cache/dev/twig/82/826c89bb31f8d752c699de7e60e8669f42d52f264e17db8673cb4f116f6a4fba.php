<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_24f7df2f05f3e794ab89d00b603df6291adfd0d596b55ecafc0ddf03acce97eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_c6d1f929d60a53cdcd9577cb835aae44e4538968abd6b0ec8fa0354e1ba36db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d1f929d60a53cdcd9577cb835aae44e4538968abd6b0ec8fa0354e1ba36db6->enter($__internal_c6d1f929d60a53cdcd9577cb835aae44e4538968abd6b0ec8fa0354e1ba36db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["quantite"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d1f929d60a53cdcd9577cb835aae44e4538968abd6b0ec8fa0354e1ba36db6->leave($__internal_c6d1f929d60a53cdcd9577cb835aae44e4538968abd6b0ec8fa0354e1ba36db6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f283b199932830459875bf4a080c450c7f1c5ae6be20d9b88dfe5854b44ee46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f283b199932830459875bf4a080c450c7f1c5ae6be20d9b88dfe5854b44ee46c->enter($__internal_f283b199932830459875bf4a080c450c7f1c5ae6be20d9b88dfe5854b44ee46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <main>

        <!--Main layout-->
        <div class=\"container\">

            ";
        // line 23
        echo "
            <h1 style=\"font-weight: 700\">Mon panier</h1>
            <p>Visualisez et confirmez vos achats</p>
            <div class=\"well\">
                <div class=\"table-responsive\">
                    <table class=\"table product-table\">
                        <!--Table head-->
                        <thead>
                        <tr>
                            <th></th>
                            <th>Produit</th>
                            <th>Prix unitaire</th>
                            <th>Quantité</th>
                            <th></th>
                            <th></th>
                            <th>Montant</th>
                            <th></th>
                        </tr>
                        </thead>
                        <!--/Table head-->

                        <!--Table body-->
                        <tbody>

                        ";
        // line 47
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 48
            echo "                            <tr>
                                <td colspan=\"4\">
                                    <center>
                                        Aucun articles dans votre panier
                                    </center>
                                </td>
                            </tr>
                        ";
        }
        // line 56
        echo "
                        <!--Product row-->
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 59
            echo "
                            <tr>
                                <form action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">

                                    <th scope=\"row\">
                                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" >
                                            <img
                                                src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produitThumb"), "html", null, true);
            echo "\"
                                                alt=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
            echo "\"
                                                class=\"img-fluid\" width=\"75px\" >
                                        </a>
                                    </th>

                                    <td>
                                        <h5><strong>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</strong></h5>
                                    </td>

                                    <td>
                                        ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " F CFA
                                    </td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                            ";
            // line 84
            $context["quantite"] = $this->getAttribute($context["produit"], "quantite", array());
            // line 85
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 86
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    // line 87
                    echo "                                                    selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                        </select>&nbsp;
                                        <a ><i class=\"icon-trash\"></i></a>
                                    </td>

                                    <td>
                                        ";
            // line 94
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " F CFA
                                    </td>

                                    <td>
                                        <a type=\"button\"
                                           class=\"btn btn-sm miva waves-effect waves-light fa fa-trash\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\"
                                           title=\"Remove item\"
                                           href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" >
                                        </a>
                                    </td>


                                </form>
                            </tr>
                            <!--/Product row-->
                            ";
            // line 111
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 112
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
                        ";
        // line 114
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 115
            echo "                            <!--Resume row-->
                            <tr>
                                <td colspan=\"3\">
                                    <a class=\"btn red waves-effect waves-light\"
                                       href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
            echo "\">
                                        Vider le panier
                                    </a>

                                </td>
                                <td>
                                    <h4>
                                        <strong>
                                            Total
                                        </strong>
                                    </h4>
                                </td>

                                <td>
                                    <h4>
                                        <strong style=\"font-weight: 900\">
                                            ";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo "
                                        </strong>
                                        F CFA
                                    </h4>
                                </td>

                                <td colspan=\"3\">
                                    <a style=\"display: block\" class=\"btn miva waves-effect waves-light\"
                                       href=\"";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
            echo "\">
                                        Confirmer la commande
                                    </a>
                                    <a style=\"display: block\" class=\"btn green waves-effect waves-light m-t-md\"
                                       href=\"";
            // line 147
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
            echo "\">
                                         Aller aux articles
                                    </a>
                                </td>
                            </tr>
                            <!--/Resume row-->
                        ";
        }
        // line 154
        echo "                        </tbody>
                        <!--/Table body-->
                    </table>
                </div>

            </div>

        </div>
        <!--/.Main layout-->

    </main>

";
        
        $__internal_f283b199932830459875bf4a080c450c7f1c5ae6be20d9b88dfe5854b44ee46c->leave($__internal_f283b199932830459875bf4a080c450c7f1c5ae6be20d9b88dfe5854b44ee46c_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 154,  255 => 147,  248 => 143,  237 => 135,  218 => 119,  212 => 115,  210 => 114,  207 => 113,  201 => 112,  199 => 111,  188 => 103,  176 => 94,  169 => 89,  158 => 87,  153 => 86,  148 => 85,  146 => 84,  136 => 77,  129 => 73,  120 => 67,  116 => 66,  111 => 64,  105 => 61,  101 => 59,  97 => 58,  93 => 56,  83 => 48,  81 => 47,  55 => 23,  47 => 12,  41 => 11,  34 => 1,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
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

{% set totalHT = 0 %}
{% set totalTTC = 0 %}
{% set quantite = 0 %}
{#% set refTva = {} %}
{% for produit in produits %}
    {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : 0 }) %}
{% endfor %#}

{% block body %}

    <main>

        <!--Main layout-->
        <div class=\"container\">

            {#{% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}#}

            <h1 style=\"font-weight: 700\">Mon panier</h1>
            <p>Visualisez et confirmez vos achats</p>
            <div class=\"well\">
                <div class=\"table-responsive\">
                    <table class=\"table product-table\">
                        <!--Table head-->
                        <thead>
                        <tr>
                            <th></th>
                            <th>Produit</th>
                            <th>Prix unitaire</th>
                            <th>Quantité</th>
                            <th></th>
                            <th></th>
                            <th>Montant</th>
                            <th></th>
                        </tr>
                        </thead>
                        <!--/Table head-->

                        <!--Table body-->
                        <tbody>

                        {% if produits|length == 0 %}
                            <tr>
                                <td colspan=\"4\">
                                    <center>
                                        Aucun articles dans votre panier
                                    </center>
                                </td>
                            </tr>
                        {% endif %}

                        <!--Product row-->
                        {% for produit in produits %}

                            <tr>
                                <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">

                                    <th scope=\"row\">
                                        <a href=\"{{ path('presentation', { 'id' : produit.id }) }}\" >
                                            <img
                                                src=\"{{ produit.image.AssetPath|imagine_filter('produitThumb') }}\"
                                                alt=\"{{ produit.image.name }}\"
                                                class=\"img-fluid\" width=\"75px\" >
                                        </a>
                                    </th>

                                    <td>
                                        <h5><strong>{{ produit.nom }}</strong></h5>
                                    </td>

                                    <td>
                                        {{ produit.prix }} F CFA
                                    </td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                            {% set quantite = produit.quantite %}
                                            {% for i in 1..quantite %}
                                                <option value=\"{{ i }}\" {% if i == panier[produit.id] %}
                                                    selected=\"selected\" {% endif %}>{{ i }}</option>
                                            {% endfor %}
                                        </select>&nbsp;
                                        <a ><i class=\"icon-trash\"></i></a>
                                    </td>

                                    <td>
                                        {{ produit.prix * panier[produit.id] }} F CFA
                                    </td>

                                    <td>
                                        <a type=\"button\"
                                           class=\"btn btn-sm miva waves-effect waves-light fa fa-trash\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\"
                                           title=\"Remove item\"
                                           href=\"{{ path('supprimer', { 'id' : produit.id }) }}\" >
                                        </a>
                                    </td>


                                </form>
                            </tr>
                            <!--/Product row-->
                            {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}
                        {% endfor %}

                        {% if produits|length != 0 %}
                            <!--Resume row-->
                            <tr>
                                <td colspan=\"3\">
                                    <a class=\"btn red waves-effect waves-light\"
                                       href=\"{{ path('livraison') }}\">
                                        Vider le panier
                                    </a>

                                </td>
                                <td>
                                    <h4>
                                        <strong>
                                            Total
                                        </strong>
                                    </h4>
                                </td>

                                <td>
                                    <h4>
                                        <strong style=\"font-weight: 900\">
                                            {{ totalHT }}
                                        </strong>
                                        F CFA
                                    </h4>
                                </td>

                                <td colspan=\"3\">
                                    <a style=\"display: block\" class=\"btn miva waves-effect waves-light\"
                                       href=\"{{ path('livraison') }}\">
                                        Confirmer la commande
                                    </a>
                                    <a style=\"display: block\" class=\"btn green waves-effect waves-light m-t-md\"
                                       href=\"{{ path('livraison') }}\">
                                         Aller aux articles
                                    </a>
                                </td>
                            </tr>
                            <!--/Resume row-->
                        {% endif %}
                        </tbody>
                        <!--/Table body-->
                    </table>
                </div>

            </div>

        </div>
        <!--/.Main layout-->

    </main>

{% endblock %}

{# 
<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            {% include '::modulesUsed/navigation.html.twig' %}
        </div>
        
        <div class=\"span9\">
            
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            
            <h2>Votre panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    {% if produits|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    {% endif %}
                    
                    {% for produit in produits %}
                    <tr>
                        <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                            <td>{{ produit.nom }}</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    {% for i in 1..10 %}
                                        <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                    {% endfor %}
                                </select>&nbsp;
                                <a href=\"{{ path('supprimer', { 'id' : produit.id }) }}\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>{{ produit.prix }} €</td>
                            <td>{{ produit.prix * panier[produit.id] }} €</td>
                        </form>
                    </tr>
                    {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}
                    {% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}
                    {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : refTva['%' ~ produit.tva.valeur] + ( produit.prix * panier[produit.id])|montantTva(produit.tva.multiplicate) }) %}
                    {% endfor %}
                </tbody>
            </table>
            {% if produits|length != 0 %}
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>
                
                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            {% endif %}
            <a href=\"{{ path('produits') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
 #}", "EcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}

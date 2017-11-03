<?php

/* UtilisateursBundle:Default:layout/facturePDF.html.twig */
class __TwigTemplate_155f6639c005bf093a42f4f35b503f45ca71127808484ea9f7c689f9026de782 extends Twig_Template
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
        $__internal_d0eddbc740583163da28ade78dd26bb88e944a759872125f07890bcdfeff6d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0eddbc740583163da28ade78dd26bb88e944a759872125f07890bcdfeff6d60->enter($__internal_d0eddbc740583163da28ade78dd26bb88e944a759872125f07890bcdfeff6d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:layout/facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pathDefault"]) ? $context["pathDefault"] : $this->getContext($context, "pathDefault")), "html", null, true);
        echo "css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <style>
        .bg{
            background-image: url(\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-2.jpg"), "html", null, true);
        echo "\");

        }
        .entete{
            background-color: #5E0F0F;
            padding: 5px 15px;
            margin-right: 5px;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }
        hr{
            margin-top: 13px;
            border: 1px solid #949494;
        }
        .color{
            padding: 5px 0;
        }
    </style>
    <body class=\"bg\">


        <h1>Miva</h1>
        <hr>

        <div align=\"center\"><u><h2>FACTURE</h2></u></div>


        <div class=\"\" style=\"background-color: #e8e8e8; padding: 15px\">
            Page &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      : [[page_nb]]
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     : ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Reference &nbsp;: ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "reference", array()), "html", null, true);
        echo "
        </div>


<div align=\"right\" >

            <p style=\"font-weight: bold\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo "</p>
            <span style=\"color: #777;font-size: 10px\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</span><br/>
            <span style=\"color: #777;font-size: 10px\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "livraison", array()), "quartier", array()), "html", null, true);
        echo " </span>

</div>
        <pre>   </pre>
        <table id=\"entity\">
            <tr>
                <td class=\"entete\" width=\"200\">DESIGNATION</td>
                <td class=\"entete\" width=\"105\">QUANTITE</td>
                <td class=\"entete\" width=\"100\">Prix - Unitaire</td>
                <td class=\"entete\" width=\"105\">MONTANT </td>
            </tr>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 65
            echo "                <tr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td> <hr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "</td> <hr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixRed", array()), "html", null, true);
            echo " F CFA</td> <hr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; ";
            // line 69
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixRed", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " F CFA</td> <hr>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </table>
        <pre>   </pre>
        <div align=\"right\">
                <span>TOTAL :</span>
                <span class=\"color\"><span style=\"font-size: 32px;font-weight: bold;color: #5E0F0F\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "prixRed", array()), "html", null, true);
        echo "</span> F CFA</span>
            ";
        // line 83
        echo "        </div>
        <div id=\"footer\" style=\"color: #777\">
            <br /><br /><br />
            <span class=\"color strong\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</span>
            <br />
            (+228) ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "
        </div>
    </body>
</html>";
        
        $__internal_d0eddbc740583163da28ade78dd26bb88e944a759872125f07890bcdfeff6d60->leave($__internal_d0eddbc740583163da28ade78dd26bb88e944a759872125f07890bcdfeff6d60_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 88,  153 => 86,  148 => 83,  144 => 76,  138 => 72,  129 => 69,  125 => 68,  121 => 67,  117 => 66,  114 => 65,  110 => 64,  96 => 53,  92 => 52,  86 => 51,  77 => 45,  71 => 42,  36 => 10,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"{{ pathDefault }}css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <style>
        .bg{
            background-image: url(\"{{ asset('img/img-2.jpg') }}\");

        }
        .entete{
            background-color: #5E0F0F;
            padding: 5px 15px;
            margin-right: 5px;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }
        hr{
            margin-top: 13px;
            border: 1px solid #949494;
        }
        .color{
            padding: 5px 0;
        }
    </style>
    <body class=\"bg\">


        <h1>Miva</h1>
        <hr>

        <div align=\"center\"><u><h2>FACTURE</h2></u></div>


        <div class=\"\" style=\"background-color: #e8e8e8; padding: 15px\">
            Page &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      : [[page_nb]]
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     : {{ facture.date|date('d-m-Y') }}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Reference &nbsp;: {{ facture.reference }}
        </div>


<div align=\"right\" >

            <p style=\"font-weight: bold\">{{ facture.commande.livraison.nom }} {{ facture.commande.livraison.prenom }}</p>
            <span style=\"color: #777;font-size: 10px\">{{ facture.commande.livraison.adresse}}</span><br/>
            <span style=\"color: #777;font-size: 10px\">{{ facture.commande.livraison.quartier }} </span>

</div>
        <pre>   </pre>
        <table id=\"entity\">
            <tr>
                <td class=\"entete\" width=\"200\">DESIGNATION</td>
                <td class=\"entete\" width=\"105\">QUANTITE</td>
                <td class=\"entete\" width=\"100\">Prix - Unitaire</td>
                <td class=\"entete\" width=\"105\">MONTANT </td>
            </tr>
                {% for produit in facture.commande.produit %}
                <tr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; {{ produit.reference }}</td> <hr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; {{ produit.quantite }}</td> <hr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; {{ produit.prixRed }} F CFA</td> <hr>
                    <td class=\"color\">&nbsp;&nbsp;&nbsp; {{ produit.prixRed * produit.quantite }} F CFA</td> <hr>
                </tr>
                {% endfor %}
        </table>
        <pre>   </pre>
        <div align=\"right\">
                <span>TOTAL :</span>
                <span class=\"color\"><span style=\"font-size: 32px;font-weight: bold;color: #5E0F0F\">{{ facture.commande.prixRed }}</span> F CFA</span>
            {#% for key, tva in facture.commande.reduction %}
            <tr>
                <td width=\"110\">Reduction <span class=\"color min\">{{ key }}</span> :</td>
                <td width=\"100\" class=\"color\">{{ tva }} F CFA</td>
            </tr>
            {% endfor %#}
        </div>
        <div id=\"footer\" style=\"color: #777\">
            <br /><br /><br />
            <span class=\"color strong\">{{ adresse }}</span>
            <br />
            (+228) {{ telephone }}
        </div>
    </body>
</html>", "UtilisateursBundle:Default:layout/facturePDF.html.twig", "C:\\wamp64\\www\\Miva\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/layout/facturePDF.html.twig");
    }
}

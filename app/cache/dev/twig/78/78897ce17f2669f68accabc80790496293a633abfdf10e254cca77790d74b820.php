<?php

/* UtilisateursBundle:Default:layout/facture.html.twig */
class __TwigTemplate_2ed29bcad392bd6c473d87089de804dc7ddc3aa642cfc01a458e06b6af3cfb2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "UtilisateursBundle:Default:layout/facture.html.twig", 1);
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
        $__internal_c1a8825148265f13c3faf5820c7eadb62db808d9394d59bc7bc9a128fc388362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a8825148265f13c3faf5820c7eadb62db808d9394d59bc7bc9a128fc388362->enter($__internal_c1a8825148265f13c3faf5820c7eadb62db808d9394d59bc7bc9a128fc388362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:layout/facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a8825148265f13c3faf5820c7eadb62db808d9394d59bc7bc9a128fc388362->leave($__internal_c1a8825148265f13c3faf5820c7eadb62db808d9394d59bc7bc9a128fc388362_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dc1685cc6ccc4f89935d2401da94a8bd2de2f4e4d5e3ca3556812125defc5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc1685cc6ccc4f89935d2401da94a8bd2de2f4e4d5e3ca3556812125defc5cc->enter($__internal_6dc1685cc6ccc4f89935d2401da94a8bd2de2f4e4d5e3ca3556812125defc5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container m-t-lg m-b-lg\">
    <div class=\"row\">

        <div class=\"col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12\">

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "                <div class=\"alert alert-errors\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
            <h2>Factures</h2>
            <form>
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Références</th>
                            <th>Date</th>
                            <th>Prix </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 35
            echo "                            <tr>
                                <td colspan=\"4\"><center>Ancunne facture actuellement.</center></td>
                            </tr>
                        ";
        }
        // line 39
        echo "
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 41
            echo "                        <tr>
                            <td>ref : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixRed", array()), "html", null, true);
            echo " F CFA</td>
                            <td>
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facturesPDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\"
                                   target=\"_blank\">
                                    <i class=\"fa fa-download\"></i>
                                </a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                </table>
                <a class=\"btn miva waves-effect waves-light\">Retour à l'accueil</a>
            </form>

        </div>

        </div>
    </div>
";
        
        $__internal_6dc1685cc6ccc4f89935d2401da94a8bd2de2f4e4d5e3ca3556812125defc5cc->leave($__internal_6dc1685cc6ccc4f89935d2401da94a8bd2de2f4e4d5e3ca3556812125defc5cc_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  129 => 46,  124 => 44,  120 => 43,  116 => 42,  113 => 41,  109 => 40,  106 => 39,  100 => 35,  98 => 34,  82 => 20,  73 => 17,  70 => 16,  66 => 15,  63 => 14,  54 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
<div class=\"container m-t-lg m-b-lg\">
    <div class=\"row\">

        <div class=\"col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12\">

            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}

            {% for flashMessage in app.session.flashbag.get('error') %}
                <div class=\"alert alert-errors\">
                    {{ flashMessage }}
                </div>
            {% endfor %}

            <h2>Factures</h2>
            <form>
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Références</th>
                            <th>Date</th>
                            <th>Prix </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        {% if factures|length == 0 %}
                            <tr>
                                <td colspan=\"4\"><center>Ancunne facture actuellement.</center></td>
                            </tr>
                        {% endif %}

                        {% for facture in factures %}
                        <tr>
                            <td>ref : {{ facture.reference }}</td>
                            <td>{{ facture.date|date('d/m/Y') }}</td>
                            <td>{{ facture.commande.prixRed }} F CFA</td>
                            <td>
                                <a href=\"{{ path('facturesPDF', { 'id' : facture.id }) }}\"
                                   target=\"_blank\">
                                    <i class=\"fa fa-download\"></i>
                                </a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
                <a class=\"btn miva waves-effect waves-light\">Retour à l'accueil</a>
            </form>

        </div>

        </div>
    </div>
{% endblock %}", "UtilisateursBundle:Default:layout/facture.html.twig", "C:\\wamp64\\www\\Miva\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/layout/facture.html.twig");
    }
}

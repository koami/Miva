<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_85403d5beacc9f89d08dd32f85b8b1984e51ff41ccf6a4a62b7a37260d770d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "EcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_f5836ffa7e0b25dee143f0b7fb7a890649d1be217f15845ee55291efa87c8559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5836ffa7e0b25dee143f0b7fb7a890649d1be217f15845ee55291efa87c8559->enter($__internal_f5836ffa7e0b25dee143f0b7fb7a890649d1be217f15845ee55291efa87c8559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5836ffa7e0b25dee143f0b7fb7a890649d1be217f15845ee55291efa87c8559->leave($__internal_f5836ffa7e0b25dee143f0b7fb7a890649d1be217f15845ee55291efa87c8559_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3f0936fafe05ea43ba33a78f7afa8ad8ee4fb93cb6ac595727f2170e7cec4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f0936fafe05ea43ba33a78f7afa8ad8ee4fb93cb6ac595727f2170e7cec4b0->enter($__internal_e3f0936fafe05ea43ba33a78f7afa8ad8ee4fb93cb6ac595727f2170e7cec4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <main>
    <div class=\"container\">
        <h1>Livraison</h1>
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 10
            echo "
                    <form action=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" method=\"POST\">

                        <h4>Adresse de livraison</h4>
                        <br>
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 16
                echo "                            <div class=\"well0\">
                            <label class=\"radio\">
                                <input style=\"transform: scale(4); margin-top: 30px; float: left\" type=\"radio\" name=\"livraison\" value=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    // line 19
                    echo "                                    checked=\"checked\"";
                }
                echo ">
                                <div style=\"margin-left: 35px\">
                                    <span style=\"font-size: 15px\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "quartier", array()), "html", null, true);
                echo "
                                <br /><strong>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "</strong></span>
                                <br>
                                <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"class=\"red badge\" style=\"font-size: 15px\"><i class=\"fa fa-trash\"></i> Supprimer</a>
                                </div>

                            </label>
                            </div>
                            <br>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
                        <button type=\"submit\" class=\"btn miva waves-effect waves-light\">Valider l'adresse</button>
                    </form>
                ";
        }
        // line 35
        echo "            </div>


            <div class=\"col-md-6 col-sm-6 col-xs-12 m-t-md\">
                <h4>Ajouter une nouvelle adresse</h4>
                <form action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" method=\"POST\" >

                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <button class=\"btn miva waves-effect waves-light m-t-md\" type=\"submit\">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    </main>
";
        
        $__internal_e3f0936fafe05ea43ba33a78f7afa8ad8ee4fb93cb6ac595727f2170e7cec4b0->leave($__internal_e3f0936fafe05ea43ba33a78f7afa8ad8ee4fb93cb6ac595727f2170e7cec4b0_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 42,  137 => 40,  130 => 35,  124 => 31,  103 => 24,  96 => 22,  90 => 21,  84 => 19,  80 => 18,  76 => 16,  59 => 15,  52 => 11,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
        <h1>Livraison</h1>
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                {% if utilisateur.adresses|length != 0 %}

                    <form action=\"{{ path('validation') }}\" method=\"POST\">

                        <h4>Adresse de livraison</h4>
                        <br>
                        {% for adresse in utilisateur.adresses %}
                            <div class=\"well0\">
                            <label class=\"radio\">
                                <input style=\"transform: scale(4); margin-top: 30px; float: left\" type=\"radio\" name=\"livraison\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}
                                    checked=\"checked\"{% endif %}>
                                <div style=\"margin-left: 35px\">
                                    <span style=\"font-size: 15px\">{{ adresse.adresse }}, {{ adresse.quartier }}
                                <br /><strong>{{ adresse.prenom }} {{ adresse.nom }}</strong></span>
                                <br>
                                <a href=\"{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}\"class=\"red badge\" style=\"font-size: 15px\"><i class=\"fa fa-trash\"></i> Supprimer</a>
                                </div>

                            </label>
                            </div>
                            <br>
                        {% endfor %}

                        <button type=\"submit\" class=\"btn miva waves-effect waves-light\">Valider l'adresse</button>
                    </form>
                {% endif %}
            </div>


            <div class=\"col-md-6 col-sm-6 col-xs-12 m-t-md\">
                <h4>Ajouter une nouvelle adresse</h4>
                <form action=\"{{ path('livraison') }}\" method=\"POST\" >

                    {{ form_widget(form) }}
                    <button class=\"btn miva waves-effect waves-light m-t-md\" type=\"submit\">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    </main>
{% endblock %}", "EcommerceBundle:Default:panier/layout/livraison.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/livraison.html.twig");
    }
}

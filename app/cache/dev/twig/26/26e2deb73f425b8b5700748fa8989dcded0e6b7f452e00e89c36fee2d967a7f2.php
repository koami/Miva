<?php

/* EcommerceBundle:Administration:Produits/layout/index.html.twig */
class __TwigTemplate_f7132f2c81e4f74c8ff9bf5a4658badac14f536db24a5156c9ea142344bfab39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Produits/layout/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7071968965940cff06394bf2e735edbb3378a59747a31a175d9c6ecc252afc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7071968965940cff06394bf2e735edbb3378a59747a31a175d9c6ecc252afc6a->enter($__internal_7071968965940cff06394bf2e735edbb3378a59747a31a175d9c6ecc252afc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7071968965940cff06394bf2e735edbb3378a59747a31a175d9c6ecc252afc6a->leave($__internal_7071968965940cff06394bf2e735edbb3378a59747a31a175d9c6ecc252afc6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f7fee8698f3d3482065c4387ce5a041be08c224b3a6fad49ffa22d16c119c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7fee8698f3d3482065c4387ce5a041be08c224b3a6fad49ffa22d16c119c30->enter($__internal_9f7fee8698f3d3482065c4387ce5a041be08c224b3a6fad49ffa22d16c119c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produits list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantite</th>
                <th>Sous-catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "subCategorie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a class=\"btn miva waves-effect waves-light\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_9f7fee8698f3d3482065c4387ce5a041be08c224b3a6fad49ffa22d16c119c30->leave($__internal_9f7fee8698f3d3482065c4387ce5a041be08c224b3a6fad49ffa22d16c119c30_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  93 => 29,  83 => 25,  79 => 24,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layoutAdmin.html.twig' %}

{% block body -%}
    <h1>Produits list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantite</th>
                <th>Sous-catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td>{{ entity.nom }}</td>
                <td>{{ entity.prix }}</td>
                <td>{{ entity.quantite }}</td>
                <td>{{ entity.subCategorie.nom }}</td>
                <td>
                    <a href=\"{{ path('adminProduits_show', { 'id': entity.id }) }}\"><i class=\"icon-book\"></i></a>
                    <a href=\"{{ path('adminProduits_edit', { 'id': entity.id }) }}\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a class=\"btn miva waves-effect waves-light\" href=\"{{ path('adminProduits_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "EcommerceBundle:Administration:Produits/layout/index.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/Produits/layout/index.html.twig");
    }
}

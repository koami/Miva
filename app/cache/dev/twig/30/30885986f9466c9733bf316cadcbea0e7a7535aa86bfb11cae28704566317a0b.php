<?php

/* EcommerceBundle:Administration:Categories/layout/index.html.twig */
class __TwigTemplate_e8250a0b22afefff6ef469a07f5d51cd70e73d042da8c2540e99d66e60150955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Categories/layout/index.html.twig", 1);
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
        $__internal_fcb4b8a473df38dd62d8b2cf610e1911e08474cf96fd8e281999ee7b4aecc2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb4b8a473df38dd62d8b2cf610e1911e08474cf96fd8e281999ee7b4aecc2f7->enter($__internal_fcb4b8a473df38dd62d8b2cf610e1911e08474cf96fd8e281999ee7b4aecc2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Categories/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb4b8a473df38dd62d8b2cf610e1911e08474cf96fd8e281999ee7b4aecc2f7->leave($__internal_fcb4b8a473df38dd62d8b2cf610e1911e08474cf96fd8e281999ee7b4aecc2f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e47b416c9783b19604d303e289fb386533090c00afaea4cb0c8ada5485bea070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47b416c9783b19604d303e289fb386533090c00afaea4cb0c8ada5485bea070->enter($__internal_e47b416c9783b19604d303e289fb386533090c00afaea4cb0c8ada5485bea070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Categories list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a class=\"btn miva waves-effect waves-light\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_e47b416c9783b19604d303e289fb386533090c00afaea4cb0c8ada5485bea070->leave($__internal_e47b416c9783b19604d303e289fb386533090c00afaea4cb0c8ada5485bea070_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Categories/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  85 => 25,  75 => 21,  71 => 20,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Categories list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('adminCategories_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.nom }}</td>
                <td>
                    <a href=\"{{ path('adminCategories_show', { 'id': entity.id }) }}\"><i class=\"icon-book\"></i></a>
                    <a href=\"{{ path('adminCategories_edit', { 'id': entity.id }) }}\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a class=\"btn miva waves-effect waves-light\" href=\"{{ path('adminCategories_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "EcommerceBundle:Administration:Categories/layout/index.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/Categories/layout/index.html.twig");
    }
}

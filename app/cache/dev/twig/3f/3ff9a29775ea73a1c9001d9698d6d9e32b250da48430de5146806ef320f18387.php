<?php

/* EcommerceBundle:Administration:Produits/layout/new.html.twig */
class __TwigTemplate_186e34ba3af52ca1ad3c9ad4e9842c44bc5d59c1230bcd080d79d4a2c9facf12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Produits/layout/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74e8e4a287b40c4b8efc1b6e7954f829a2f706b9fc80fc2e17818ce19b7258aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e8e4a287b40c4b8efc1b6e7954f829a2f706b9fc80fc2e17818ce19b7258aa->enter($__internal_74e8e4a287b40c4b8efc1b6e7954f829a2f706b9fc80fc2e17818ce19b7258aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74e8e4a287b40c4b8efc1b6e7954f829a2f706b9fc80fc2e17818ce19b7258aa->leave($__internal_74e8e4a287b40c4b8efc1b6e7954f829a2f706b9fc80fc2e17818ce19b7258aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d01d93ed3845a27cdcac74799ce2adec7e76831d3264ee658dbb133cb9747dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d01d93ed3845a27cdcac74799ce2adec7e76831d3264ee658dbb133cb9747dd->enter($__internal_6d01d93ed3845a27cdcac74799ce2adec7e76831d3264ee658dbb133cb9747dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
    <h1 class=\"m-t-md\">Produits creation</h1>

    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_create");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\"
          class=\"adminProduits\">

        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reduction", array()), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partenaire", array()), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garantie", array()), 'row');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategorie", array()), 'row');
        echo "

            <ul class=\"descriptions\" data-prototype=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptions", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
                ";
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 24
            echo "                    <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["description"], "description", array()), 'row');
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>
        ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        ";
        // line 30
        echo "    </form>

    <ul class=\"record_actions m-t-md\">
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits");
        echo "\" class=\"orange-text\">
                 <i class=\"fa fa-arrow-circle-left\"></i> Back to the list
            </a>
        </li>
    </ul>
    </div>
    </div>
";
        
        $__internal_6d01d93ed3845a27cdcac74799ce2adec7e76831d3264ee658dbb133cb9747dd->leave($__internal_6d01d93ed3845a27cdcac74799ce2adec7e76831d3264ee658dbb133cb9747dd_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f58d6280c52843d24652cc40289d49205616612d4e5f264acff2da29a997c86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58d6280c52843d24652cc40289d49205616612d4e5f264acff2da29a997c86e->enter($__internal_f58d6280c52843d24652cc40289d49205616612d4e5f264acff2da29a997c86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    var \$collectionHolder;

    // setup an \"add a description\" link
    var \$addDescriptionLink = \$('<i href=\"#\" class=\"add_description_link fa fa-plus\"></i>');
    var \$newLinkLi = \$('<li></li>').append(\$addDescriptionLink);

    jQuery(document).ready(function() {
        // Get the ul that holds the collection of descriptions
        \$collectionHolder = \$('ul.descriptions');

        // add a delete link to all of the existing decription form li elements
        \$collectionHolder.find('li').each(function() {
            addDescriptionFormDeleteLink(\$(this));
        });

        // add the \"add a description\" anchor and li to the descriptions ul
        \$collectionHolder.append(\$newLinkLi);

        // count the current form inputs we have (e.g. 2), use that as the new
        // index when inserting a new item (e.g. 2)
        \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

        \$addDescriptionLink.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // add a new description form (see next code block)
            addDescriptionForm(\$collectionHolder, \$newLinkLi);
        });
    });

    function addDescriptionForm(\$collectionHolder, \$newLinkLi) {
        // Get the data-prototype explained earlier
        var prototype = \$collectionHolder.data('prototype');

        // get the new index
        var index = \$collectionHolder.data('index');

        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);

        // increase the index with one for the next item
        \$collectionHolder.data('index', index + 1);

        // Display the form in the page in an li, before the \"Add a description\" link li
        var \$newFormLi = \$('<li></li>').append(newForm);
        \$newLinkLi.before(\$newFormLi);

        // add a delete link to the new form
        addDescriptionFormDeleteLink(\$newFormLi)
    }

    function addDescriptionFormDeleteLink(\$descriptionFormLi) {
        var \$removeFormA = \$('<i href=\"#\" class=\"fa fa-remove\"></i>');
        \$descriptionFormLi.append(\$removeFormA);

        \$removeFormA.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // remove the li for the description form
            \$descriptionFormLi.remove();
        });
    }
</script>

";
        
        $__internal_f58d6280c52843d24652cc40289d49205616612d4e5f264acff2da29a997c86e->leave($__internal_f58d6280c52843d24652cc40289d49205616612d4e5f264acff2da29a997c86e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  139 => 44,  124 => 34,  118 => 30,  113 => 27,  110 => 26,  101 => 24,  96 => 23,  92 => 21,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
    <h1 class=\"m-t-md\">Produits creation</h1>

    <form action=\"{{ path('adminProduits_create') }}\" {{ form_enctype(form) }} method=\"POST\"
          class=\"adminProduits\">

        {{ form_start(form) }}
            {{ form_row(form.nom) }}
            {{ form_row(form.prix) }}
            {{ form_row(form.quantite) }}
            {{ form_row(form.reduction) }}
            {{ form_row(form.image) }}
            {{ form_row(form.partenaire) }}
            {{ form_row(form.garantie) }}
            {{ form_row(form.subCategorie) }}

            <ul class=\"descriptions\" data-prototype=\"{{ form_widget(form.descriptions.vars.prototype)|e('html_attr') }}\">
                {# iterate over each existing description and render its only field: name #}
                {% for description in form.descriptions %}
                    <li>{{ form_row(description.description) }}</li>
                {% endfor %}
            </ul>
        {{ form_end(form) }}

        {#{{ form_widget(form) }}#}
    </form>

    <ul class=\"record_actions m-t-md\">
        <li>
            <a href=\"{{ path('adminProduits') }}\" class=\"orange-text\">
                 <i class=\"fa fa-arrow-circle-left\"></i> Back to the list
            </a>
        </li>
    </ul>
    </div>
    </div>
{% endblock %}


{% block javascripts %}
{{ parent() }}
<script>
    var \$collectionHolder;

    // setup an \"add a description\" link
    var \$addDescriptionLink = \$('<i href=\"#\" class=\"add_description_link fa fa-plus\"></i>');
    var \$newLinkLi = \$('<li></li>').append(\$addDescriptionLink);

    jQuery(document).ready(function() {
        // Get the ul that holds the collection of descriptions
        \$collectionHolder = \$('ul.descriptions');

        // add a delete link to all of the existing decription form li elements
        \$collectionHolder.find('li').each(function() {
            addDescriptionFormDeleteLink(\$(this));
        });

        // add the \"add a description\" anchor and li to the descriptions ul
        \$collectionHolder.append(\$newLinkLi);

        // count the current form inputs we have (e.g. 2), use that as the new
        // index when inserting a new item (e.g. 2)
        \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

        \$addDescriptionLink.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // add a new description form (see next code block)
            addDescriptionForm(\$collectionHolder, \$newLinkLi);
        });
    });

    function addDescriptionForm(\$collectionHolder, \$newLinkLi) {
        // Get the data-prototype explained earlier
        var prototype = \$collectionHolder.data('prototype');

        // get the new index
        var index = \$collectionHolder.data('index');

        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);

        // increase the index with one for the next item
        \$collectionHolder.data('index', index + 1);

        // Display the form in the page in an li, before the \"Add a description\" link li
        var \$newFormLi = \$('<li></li>').append(newForm);
        \$newLinkLi.before(\$newFormLi);

        // add a delete link to the new form
        addDescriptionFormDeleteLink(\$newFormLi)
    }

    function addDescriptionFormDeleteLink(\$descriptionFormLi) {
        var \$removeFormA = \$('<i href=\"#\" class=\"fa fa-remove\"></i>');
        \$descriptionFormLi.append(\$removeFormA);

        \$removeFormA.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // remove the li for the description form
            \$descriptionFormLi.remove();
        });
    }
</script>

{% endblock %}", "EcommerceBundle:Administration:Produits/layout/new.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/Produits/layout/new.html.twig");
    }
}

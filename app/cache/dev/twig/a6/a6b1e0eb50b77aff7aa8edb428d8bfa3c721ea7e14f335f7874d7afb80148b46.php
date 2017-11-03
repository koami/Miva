<?php

/* EcommerceBundle:Administration:Categories/layout/new.html.twig */
class __TwigTemplate_2db888cefa36d3e3fba736ed41edeb6499c9d1f45a1745ec412aa5267523c0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Categories/layout/new.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f731e192b4c7c719510691a4296d47c385a5d79522b8a7841c6e02b2897d8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f731e192b4c7c719510691a4296d47c385a5d79522b8a7841c6e02b2897d8c8->enter($__internal_6f731e192b4c7c719510691a4296d47c385a5d79522b8a7841c6e02b2897d8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Categories/layout/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f731e192b4c7c719510691a4296d47c385a5d79522b8a7841c6e02b2897d8c8->leave($__internal_6f731e192b4c7c719510691a4296d47c385a5d79522b8a7841c6e02b2897d8c8_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_480d55fe91eb4da6287865fd981a67502c10dd4a35b53713fa99283d6d00bccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480d55fe91eb4da6287865fd981a67502c10dd4a35b53713fa99283d6d00bccb->enter($__internal_480d55fe91eb4da6287865fd981a67502c10dd4a35b53713fa99283d6d00bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Categorie";
        
        $__internal_480d55fe91eb4da6287865fd981a67502c10dd4a35b53713fa99283d6d00bccb->leave($__internal_480d55fe91eb4da6287865fd981a67502c10dd4a35b53713fa99283d6d00bccb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1617e46c8f21f4734153431660e23d766941dc3f101d26ed7e6e862c92f238bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1617e46c8f21f4734153431660e23d766941dc3f101d26ed7e6e862c92f238bd->enter($__internal_1617e46c8f21f4734153431660e23d766941dc3f101d26ed7e6e862c92f238bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">

            <h1>Categories creation</h1>

            <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories_create");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\" >

                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        // line 19
        echo "

                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rayon", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rayon")));
        // line 25
        echo "

                <label for=\"file\" class=\"label-file btn miva\">
                    <i class=\"fa fa-camera\"></i>
                    Choisir une image
                    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'widget', array("attr" => array("class" => "form-control fa fa-camera")));
        // line 33
        echo "
                </label>



                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom image")));
        // line 42
        echo "

                ";
        // line 51
        echo "
                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-large waves-effect waves-light btn-block login-button miva", "target" => "_blank", "type" => "submit", "label" => "Click me")));
        // line 59
        echo "
            ";
        // line 61
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </form>

            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits");
        echo "\" class=\"orange-text\">
                        <i class=\"fa fa-arrow-circle-left\"></i> Back to the list
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
";
        
        $__internal_1617e46c8f21f4734153431660e23d766941dc3f101d26ed7e6e862c92f238bd->leave($__internal_1617e46c8f21f4734153431660e23d766941dc3f101d26ed7e6e862c92f238bd_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Categories/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 66,  107 => 61,  104 => 59,  102 => 52,  99 => 51,  95 => 42,  93 => 38,  86 => 33,  84 => 30,  77 => 25,  75 => 21,  71 => 19,  69 => 15,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block titre %}MIVA | Categorie{% endblock %}

{% block body %}

<div class=\"\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">

            <h1>Categories creation</h1>

            <form action=\"{{ path('adminCategories_create') }}\" {{ form_enctype(form) }} method=\"post\" >

                {{  form_widget(form.nom,
                {'attr':{
                    'class':'form-control',
                    'placeholder':'Nom' }})
                }}

                {{ form_widget(form.rayon,
                {'attr':{
                    'class':'form-control',
                    'placeholder':'Rayon' }})
                }}

                <label for=\"file\" class=\"label-file btn miva\">
                    <i class=\"fa fa-camera\"></i>
                    Choisir une image
                    {{ form_widget(form.image.file,
                    {'attr':{
                        'class':'form-control fa fa-camera'}})
                    }}
                </label>



                {{ form_widget(form.image.name,
                {'attr':{
                    'class':'form-control',
                    'placeholder':'Nom image' }})
                }}

                {#{% block file_widget %}
                    {% spaceless %}
                     <td>{% set type = type|default('file') %}
                         <input type=\"{{ type }}\" {{ block('widget_attributes') }} />
                     </td>
                    {% endspaceless %}
                {% endblock file_widget %}#}

                {{ form_widget(form.submit,
                {'attr':{
                    'class' : 'btn btn-large waves-effect waves-light btn-block login-button miva',
                    'target' :  '_blank',
                    'type' : 'submit',
                    'label': 'Click me'
                    }})
                }}
            {#{{ form(form) }}#}
                {{ form_widget(form) }}
            </form>

            <ul class=\"record_actions\">
                <li>
                    <a href=\"{{ path('adminProduits') }}\" class=\"orange-text\">
                        <i class=\"fa fa-arrow-circle-left\"></i> Back to the list
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
{% endblock %}", "EcommerceBundle:Administration:Categories/layout/new.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/Categories/layout/new.html.twig");
    }
}

<?php

/* UtilisateursBundle:Default:layout/contact.html.twig */
class __TwigTemplate_534e2a002202daf854bc3c7026412a047bc810999a1c4f4b60f1a18f58071c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "UtilisateursBundle:Default:layout/contact.html.twig", 1);
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
        $__internal_bfdd0889f5a1f54befb9298eb98114c9c2f0e5091d8f2b32118f2641249f73cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdd0889f5a1f54befb9298eb98114c9c2f0e5091d8f2b32118f2641249f73cf->enter($__internal_bfdd0889f5a1f54befb9298eb98114c9c2f0e5091d8f2b32118f2641249f73cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:layout/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdd0889f5a1f54befb9298eb98114c9c2f0e5091d8f2b32118f2641249f73cf->leave($__internal_bfdd0889f5a1f54befb9298eb98114c9c2f0e5091d8f2b32118f2641249f73cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_604309202fbb091dce1e9eee143dbe9486def5626f044f227af4725712af31aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604309202fbb091dce1e9eee143dbe9486def5626f044f227af4725712af31aa->enter($__internal_604309202fbb091dce1e9eee143dbe9486def5626f044f227af4725712af31aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row m-b-lg\">
    <div class=\"col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12\">
        <h5 class=\"white-text\">Nous contacter</h5>
        <p class=\"grey-text text-lighten-1\">
            Ravi de recevoir vos messages.
        </p>

        <div class=\"\">
            <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactUs");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
                ";
        // line 15
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet", array()), 'row');
        echo "
                <div class=\"m-t-lg\">
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "
                </div>

                ";
        // line 24
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <button class=\"btn miva waves-effect waves-light m-t-md\" type=\"submit\">Envoyer</button>
            </form>
        </div>

    </div>
    </div>
</div>

";
        
        $__internal_604309202fbb091dce1e9eee143dbe9486def5626f044f227af4725712af31aa->leave($__internal_604309202fbb091dce1e9eee143dbe9486def5626f044f227af4725712af31aa_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  79 => 24,  73 => 20,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
<div class=\"container\">
    <div class=\"row m-b-lg\">
    <div class=\"col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12\">
        <h5 class=\"white-text\">Nous contacter</h5>
        <p class=\"grey-text text-lighten-1\">
            Ravi de recevoir vos messages.
        </p>

        <div class=\"\">
            <form action=\"{{ path('contactUs') }}\" method=\"POST\" {{ form_enctype(form) }} >
                {#{{ form_errors(form) }}#}

                {{ form_row(form.name) }}
                {{ form_row(form.email) }}
                {{ form_row(form.sujet) }}
                <div class=\"m-t-lg\">
                {{ form_row(form.message) }}
                </div>

                {#{{ form_rest(form) }}#}

                {{ form_widget(form) }}
                <button class=\"btn miva waves-effect waves-light m-t-md\" type=\"submit\">Envoyer</button>
            </form>
        </div>

    </div>
    </div>
</div>

{% endblock %}", "UtilisateursBundle:Default:layout/contact.html.twig", "C:\\wamp64\\www\\Miva\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/layout/contact.html.twig");
    }
}

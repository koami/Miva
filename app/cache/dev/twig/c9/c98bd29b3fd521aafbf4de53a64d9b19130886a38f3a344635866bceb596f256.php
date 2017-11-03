<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b0cc2660ec80f6a9c0144bafac3a93333875b3b540d213a26996ec95c060f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49a2ab1618c878c2a7e68dccd5bb26e4df809945b5a1263dde61b4e4f4ff1792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a2ab1618c878c2a7e68dccd5bb26e4df809945b5a1263dde61b4e4f4ff1792->enter($__internal_49a2ab1618c878c2a7e68dccd5bb26e4df809945b5a1263dde61b4e4f4ff1792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49a2ab1618c878c2a7e68dccd5bb26e4df809945b5a1263dde61b4e4f4ff1792->leave($__internal_49a2ab1618c878c2a7e68dccd5bb26e4df809945b5a1263dde61b4e4f4ff1792_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2ff5b3c5d9ee997a2de1c7ecce461dc298b49084fe99e056bbbd460d8553608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ff5b3c5d9ee997a2de1c7ecce461dc298b49084fe99e056bbbd460d8553608->enter($__internal_d2ff5b3c5d9ee997a2de1c7ecce461dc298b49084fe99e056bbbd460d8553608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2ff5b3c5d9ee997a2de1c7ecce461dc298b49084fe99e056bbbd460d8553608->leave($__internal_d2ff5b3c5d9ee997a2de1c7ecce461dc298b49084fe99e056bbbd460d8553608_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_414135a636119a6172823ccbd637b28412a1a7c0ba809501ec361694713874de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414135a636119a6172823ccbd637b28412a1a7c0ba809501ec361694713874de->enter($__internal_414135a636119a6172823ccbd637b28412a1a7c0ba809501ec361694713874de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_414135a636119a6172823ccbd637b28412a1a7c0ba809501ec361694713874de->leave($__internal_414135a636119a6172823ccbd637b28412a1a7c0ba809501ec361694713874de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6e9671f33b657e48bad110608b23f80db4579d96d6949d21f84119ed36538d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e9671f33b657e48bad110608b23f80db4579d96d6949d21f84119ed36538d5->enter($__internal_c6e9671f33b657e48bad110608b23f80db4579d96d6949d21f84119ed36538d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6e9671f33b657e48bad110608b23f80db4579d96d6949d21f84119ed36538d5->leave($__internal_c6e9671f33b657e48bad110608b23f80db4579d96d6949d21f84119ed36538d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Miva\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ffb8d94fac6e0d41edba5fa536dfca508896fbada9645c2b64fd387135f6bc62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eefb2c72554a66908c24c90cd5b8ded347e17aace631acb587adf0bad04371ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefb2c72554a66908c24c90cd5b8ded347e17aace631acb587adf0bad04371ab->enter($__internal_eefb2c72554a66908c24c90cd5b8ded347e17aace631acb587adf0bad04371ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefb2c72554a66908c24c90cd5b8ded347e17aace631acb587adf0bad04371ab->leave($__internal_eefb2c72554a66908c24c90cd5b8ded347e17aace631acb587adf0bad04371ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24053cd1fedd5533a8911bf353949caedc23e3bdfa06d8f925d1991f7ceb014b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24053cd1fedd5533a8911bf353949caedc23e3bdfa06d8f925d1991f7ceb014b->enter($__internal_24053cd1fedd5533a8911bf353949caedc23e3bdfa06d8f925d1991f7ceb014b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24053cd1fedd5533a8911bf353949caedc23e3bdfa06d8f925d1991f7ceb014b->leave($__internal_24053cd1fedd5533a8911bf353949caedc23e3bdfa06d8f925d1991f7ceb014b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86d3b2691fcafbbcbd3c18ef2006e2fd973f28c6bcb6f3ab64c9757cfa3dcc42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d3b2691fcafbbcbd3c18ef2006e2fd973f28c6bcb6f3ab64c9757cfa3dcc42->enter($__internal_86d3b2691fcafbbcbd3c18ef2006e2fd973f28c6bcb6f3ab64c9757cfa3dcc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86d3b2691fcafbbcbd3c18ef2006e2fd973f28c6bcb6f3ab64c9757cfa3dcc42->leave($__internal_86d3b2691fcafbbcbd3c18ef2006e2fd973f28c6bcb6f3ab64c9757cfa3dcc42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8137ab8ccd018e5ef9df1ac708ddcadf088bcf830a8814367b01a51afe184a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8137ab8ccd018e5ef9df1ac708ddcadf088bcf830a8814367b01a51afe184a7e->enter($__internal_8137ab8ccd018e5ef9df1ac708ddcadf088bcf830a8814367b01a51afe184a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8137ab8ccd018e5ef9df1ac708ddcadf088bcf830a8814367b01a51afe184a7e->leave($__internal_8137ab8ccd018e5ef9df1ac708ddcadf088bcf830a8814367b01a51afe184a7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Miva\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

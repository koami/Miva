<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e8033d30ddc8c7301b77ac688b06a17b6fadce79a18ce196031a97b1e1a19a46 extends Twig_Template
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
        $__internal_dab71a917bdeb196a6a23b25550cb70dc278b5360de07c816ee061d72be21e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab71a917bdeb196a6a23b25550cb70dc278b5360de07c816ee061d72be21e10->enter($__internal_dab71a917bdeb196a6a23b25550cb70dc278b5360de07c816ee061d72be21e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dab71a917bdeb196a6a23b25550cb70dc278b5360de07c816ee061d72be21e10->leave($__internal_dab71a917bdeb196a6a23b25550cb70dc278b5360de07c816ee061d72be21e10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ffa7a24e4103e39bc8c9edb6aa4fd742ec944f179bb13304de6215fed213def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffa7a24e4103e39bc8c9edb6aa4fd742ec944f179bb13304de6215fed213def->enter($__internal_4ffa7a24e4103e39bc8c9edb6aa4fd742ec944f179bb13304de6215fed213def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ffa7a24e4103e39bc8c9edb6aa4fd742ec944f179bb13304de6215fed213def->leave($__internal_4ffa7a24e4103e39bc8c9edb6aa4fd742ec944f179bb13304de6215fed213def_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c47629c52d9e0acb7e15f4f693908c298bceae4760939d67449d3f6494503981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47629c52d9e0acb7e15f4f693908c298bceae4760939d67449d3f6494503981->enter($__internal_c47629c52d9e0acb7e15f4f693908c298bceae4760939d67449d3f6494503981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c47629c52d9e0acb7e15f4f693908c298bceae4760939d67449d3f6494503981->leave($__internal_c47629c52d9e0acb7e15f4f693908c298bceae4760939d67449d3f6494503981_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a61ed43d4322a949fc14de88be2f6ba447506aecac185a4d18150983eceef121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61ed43d4322a949fc14de88be2f6ba447506aecac185a4d18150983eceef121->enter($__internal_a61ed43d4322a949fc14de88be2f6ba447506aecac185a4d18150983eceef121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a61ed43d4322a949fc14de88be2f6ba447506aecac185a4d18150983eceef121->leave($__internal_a61ed43d4322a949fc14de88be2f6ba447506aecac185a4d18150983eceef121_prof);

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

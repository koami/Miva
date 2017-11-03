<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e029d99db570fdb2126cad055b4454030c847a58b932eb1ee8a3d0584d3dc967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/defaultLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_001a41bd1059df7db797561d8feda071bdfb73d5be38d2ee628937334a05fb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001a41bd1059df7db797561d8feda071bdfb73d5be38d2ee628937334a05fb75->enter($__internal_001a41bd1059df7db797561d8feda071bdfb73d5be38d2ee628937334a05fb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001a41bd1059df7db797561d8feda071bdfb73d5be38d2ee628937334a05fb75->leave($__internal_001a41bd1059df7db797561d8feda071bdfb73d5be38d2ee628937334a05fb75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9935f0fdefac3a0852ad28f46d1eb61f4195ad7fffb747185e3f59737b4c1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9935f0fdefac3a0852ad28f46d1eb61f4195ad7fffb747185e3f59737b4c1a2->enter($__internal_f9935f0fdefac3a0852ad28f46d1eb61f4195ad7fffb747185e3f59737b4c1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_f9935f0fdefac3a0852ad28f46d1eb61f4195ad7fffb747185e3f59737b4c1a2->leave($__internal_f9935f0fdefac3a0852ad28f46d1eb61f4195ad7fffb747185e3f59737b4c1a2_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5775c81f2397ae2961a23ffe18cdf640d8fa6831a5ecca1634944f8b01d2e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5775c81f2397ae2961a23ffe18cdf640d8fa6831a5ecca1634944f8b01d2e53->enter($__internal_a5775c81f2397ae2961a23ffe18cdf640d8fa6831a5ecca1634944f8b01d2e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_a5775c81f2397ae2961a23ffe18cdf640d8fa6831a5ecca1634944f8b01d2e53->leave($__internal_a5775c81f2397ae2961a23ffe18cdf640d8fa6831a5ecca1634944f8b01d2e53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
    {% endfor %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Miva\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}

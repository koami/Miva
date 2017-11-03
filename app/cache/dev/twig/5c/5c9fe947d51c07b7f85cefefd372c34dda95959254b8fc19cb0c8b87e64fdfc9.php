<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ffd92c87b3850efee48ca1930f7f857a3848ed0a485e28914d1a8ccebbfb5b0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_7b644b40efc8c0fcf9795463fc89885c21bd55554aecc6e3433fcc082c629f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b644b40efc8c0fcf9795463fc89885c21bd55554aecc6e3433fcc082c629f5d->enter($__internal_7b644b40efc8c0fcf9795463fc89885c21bd55554aecc6e3433fcc082c629f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b644b40efc8c0fcf9795463fc89885c21bd55554aecc6e3433fcc082c629f5d->leave($__internal_7b644b40efc8c0fcf9795463fc89885c21bd55554aecc6e3433fcc082c629f5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cf0eaaa21b5f10fa0b9254949e040d15a4f7d060c043b5243b3b64660a90203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf0eaaa21b5f10fa0b9254949e040d15a4f7d060c043b5243b3b64660a90203->enter($__internal_1cf0eaaa21b5f10fa0b9254949e040d15a4f7d060c043b5243b3b64660a90203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cf0eaaa21b5f10fa0b9254949e040d15a4f7d060c043b5243b3b64660a90203->leave($__internal_1cf0eaaa21b5f10fa0b9254949e040d15a4f7d060c043b5243b3b64660a90203_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89b4542d09206939993e9efbfa89e312fca554e64f28e3b419f90613a11f4ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b4542d09206939993e9efbfa89e312fca554e64f28e3b419f90613a11f4ae6->enter($__internal_89b4542d09206939993e9efbfa89e312fca554e64f28e3b419f90613a11f4ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_89b4542d09206939993e9efbfa89e312fca554e64f28e3b419f90613a11f4ae6->leave($__internal_89b4542d09206939993e9efbfa89e312fca554e64f28e3b419f90613a11f4ae6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\Miva\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

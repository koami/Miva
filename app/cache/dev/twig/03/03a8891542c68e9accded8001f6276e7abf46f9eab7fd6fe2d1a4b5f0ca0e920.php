<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_5329d221ec1913c695b3befd7e0c4843e9d145f7432191b4697e93033b79921b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eec9883855ec534636ce934580ec350bdbee2e69c717558a5eb3f05bf616705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eec9883855ec534636ce934580ec350bdbee2e69c717558a5eb3f05bf616705->enter($__internal_2eec9883855ec534636ce934580ec350bdbee2e69c717558a5eb3f05bf616705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eec9883855ec534636ce934580ec350bdbee2e69c717558a5eb3f05bf616705->leave($__internal_2eec9883855ec534636ce934580ec350bdbee2e69c717558a5eb3f05bf616705_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f37aed6bbf9d750700f12be3df82d664e1480a1957fa68c2b74816b05c65cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f37aed6bbf9d750700f12be3df82d664e1480a1957fa68c2b74816b05c65cb9->enter($__internal_3f37aed6bbf9d750700f12be3df82d664e1480a1957fa68c2b74816b05c65cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        // line 7
        echo "    <div align=\"center\" class=\"m-t-md m-b-md\">
        <img class=\"img-responsive\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/congrat.png"), "html", null, true);
        echo "\"/>
    </div>
    ";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 11
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 12
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 13
            echo "    ";
        }
        
        $__internal_3f37aed6bbf9d750700f12be3df82d664e1480a1957fa68c2b74816b05c65cb9->leave($__internal_3f37aed6bbf9d750700f12be3df82d664e1480a1957fa68c2b74816b05c65cb9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  55 => 12,  52 => 11,  50 => 10,  45 => 8,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    {#<p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>#}
    <div align=\"center\" class=\"m-t-md m-b-md\">
        <img class=\"img-responsive\" src=\"{{ asset('img/congrat.png') }}\"/>
    </div>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>{% endif %}
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Miva\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}

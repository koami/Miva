<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_31f0f6392f6dae6986e07514a7106fe36426ad3b9262ed235f6d0cdfd019d211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_35739d28b3f30975e7994e3a77a9b556a26167966b1e2cc5cc3571f579ef4bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35739d28b3f30975e7994e3a77a9b556a26167966b1e2cc5cc3571f579ef4bb7->enter($__internal_35739d28b3f30975e7994e3a77a9b556a26167966b1e2cc5cc3571f579ef4bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35739d28b3f30975e7994e3a77a9b556a26167966b1e2cc5cc3571f579ef4bb7->leave($__internal_35739d28b3f30975e7994e3a77a9b556a26167966b1e2cc5cc3571f579ef4bb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f846a4c43372edd18ef65af581745d2fa4e164b07fec41c19bf19564f75125d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f846a4c43372edd18ef65af581745d2fa4e164b07fec41c19bf19564f75125d->enter($__internal_0f846a4c43372edd18ef65af581745d2fa4e164b07fec41c19bf19564f75125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_0f846a4c43372edd18ef65af581745d2fa4e164b07fec41c19bf19564f75125d->leave($__internal_0f846a4c43372edd18ef65af581745d2fa4e164b07fec41c19bf19564f75125d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Miva\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}

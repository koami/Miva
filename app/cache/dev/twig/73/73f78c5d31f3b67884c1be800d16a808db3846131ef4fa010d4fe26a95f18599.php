<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_318d275d458723671b4253cd17ca54a88507d04a96003daea41605fa6314a472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_660997e5fe98b37c58ce5401832350fd980e627f8fbbc6ad75f2f4f1ff4b492f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660997e5fe98b37c58ce5401832350fd980e627f8fbbc6ad75f2f4f1ff4b492f->enter($__internal_660997e5fe98b37c58ce5401832350fd980e627f8fbbc6ad75f2f4f1ff4b492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660997e5fe98b37c58ce5401832350fd980e627f8fbbc6ad75f2f4f1ff4b492f->leave($__internal_660997e5fe98b37c58ce5401832350fd980e627f8fbbc6ad75f2f4f1ff4b492f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02cc7a55a5b9e98adc759199c13e98662847c297e596d485939b2ac83e306248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cc7a55a5b9e98adc759199c13e98662847c297e596d485939b2ac83e306248->enter($__internal_02cc7a55a5b9e98adc759199c13e98662847c297e596d485939b2ac83e306248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_02cc7a55a5b9e98adc759199c13e98662847c297e596d485939b2ac83e306248->leave($__internal_02cc7a55a5b9e98adc759199c13e98662847c297e596d485939b2ac83e306248_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Miva\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}

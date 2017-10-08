<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_45338388885514def20483579e0f1f80aff7e29043b6e0f8faa1c80413b7155d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8f7f05aa444a77eacb564d99f311be4e0ead8753b0fbf9abc13ba59d1767ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f7f05aa444a77eacb564d99f311be4e0ead8753b0fbf9abc13ba59d1767ac4->enter($__internal_e8f7f05aa444a77eacb564d99f311be4e0ead8753b0fbf9abc13ba59d1767ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f7f05aa444a77eacb564d99f311be4e0ead8753b0fbf9abc13ba59d1767ac4->leave($__internal_e8f7f05aa444a77eacb564d99f311be4e0ead8753b0fbf9abc13ba59d1767ac4_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d61a242703d4c13445ee1b66c238afe8c95c2018d52b184b32cc911bab5260d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61a242703d4c13445ee1b66c238afe8c95c2018d52b184b32cc911bab5260d4->enter($__internal_d61a242703d4c13445ee1b66c238afe8c95c2018d52b184b32cc911bab5260d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Registration";
        
        $__internal_d61a242703d4c13445ee1b66c238afe8c95c2018d52b184b32cc911bab5260d4->leave($__internal_d61a242703d4c13445ee1b66c238afe8c95c2018d52b184b32cc911bab5260d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_facbcbcd739f35e97cca18407870388a033b73fde2df0359b346b0559ef91665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facbcbcd739f35e97cca18407870388a033b73fde2df0359b346b0559ef91665->enter($__internal_facbcbcd739f35e97cca18407870388a033b73fde2df0359b346b0559ef91665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_facbcbcd739f35e97cca18407870388a033b73fde2df0359b346b0559ef91665->leave($__internal_facbcbcd739f35e97cca18407870388a033b73fde2df0359b346b0559ef91665_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block titre %}MIVA | Registration{% endblock %}
{% block fos_user_content %}
    {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Miva\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}

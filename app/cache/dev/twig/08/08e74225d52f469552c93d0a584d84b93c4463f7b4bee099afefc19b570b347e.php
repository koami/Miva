<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_8067f5eef854acee27f64b8f950bacf5931a3ad236672e45118db6aa80633ddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01fdf8e5798c043b55b716f88eb10fd12b5dc78c4c72093e8e1f48be43aaa1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fdf8e5798c043b55b716f88eb10fd12b5dc78c4c72093e8e1f48be43aaa1f2->enter($__internal_01fdf8e5798c043b55b716f88eb10fd12b5dc78c4c72093e8e1f48be43aaa1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01fdf8e5798c043b55b716f88eb10fd12b5dc78c4c72093e8e1f48be43aaa1f2->leave($__internal_01fdf8e5798c043b55b716f88eb10fd12b5dc78c4c72093e8e1f48be43aaa1f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f19fe75a3f1696b68697d48e9e1f8061e815ba03be88e72087d2df99c76fa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f19fe75a3f1696b68697d48e9e1f8061e815ba03be88e72087d2df99c76fa1e->enter($__internal_3f19fe75a3f1696b68697d48e9e1f8061e815ba03be88e72087d2df99c76fa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_3f19fe75a3f1696b68697d48e9e1f8061e815ba03be88e72087d2df99c76fa1e->leave($__internal_3f19fe75a3f1696b68697d48e9e1f8061e815ba03be88e72087d2df99c76fa1e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Miva\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}

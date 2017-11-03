<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_45b52a602744401fcbcce7ec006066236c2d0b7866890b377846c038fff13be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4938baecdbdd9f6db20d63c6541020963d3e6f1bd7387d0ee5479204588c19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4938baecdbdd9f6db20d63c6541020963d3e6f1bd7387d0ee5479204588c19d->enter($__internal_c4938baecdbdd9f6db20d63c6541020963d3e6f1bd7387d0ee5479204588c19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_c4938baecdbdd9f6db20d63c6541020963d3e6f1bd7387d0ee5479204588c19d->leave($__internal_c4938baecdbdd9f6db20d63c6541020963d3e6f1bd7387d0ee5479204588c19d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b6ac45b80b36ceda129c3a74d901687c4d1eaf3622385eeb5a8296f14871adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6ac45b80b36ceda129c3a74d901687c4d1eaf3622385eeb5a8296f14871adb->enter($__internal_0b6ac45b80b36ceda129c3a74d901687c4d1eaf3622385eeb5a8296f14871adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_0b6ac45b80b36ceda129c3a74d901687c4d1eaf3622385eeb5a8296f14871adb->leave($__internal_0b6ac45b80b36ceda129c3a74d901687c4d1eaf3622385eeb5a8296f14871adb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43ec48f2449c4abb5671645c8216e63bf32c4c0b02cd3b7ec9c2ab2a865f11b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ec48f2449c4abb5671645c8216e63bf32c4c0b02cd3b7ec9c2ab2a865f11b9->enter($__internal_43ec48f2449c4abb5671645c8216e63bf32c4c0b02cd3b7ec9c2ab2a865f11b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_43ec48f2449c4abb5671645c8216e63bf32c4c0b02cd3b7ec9c2ab2a865f11b9->leave($__internal_43ec48f2449c4abb5671645c8216e63bf32c4c0b02cd3b7ec9c2ab2a865f11b9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cae6399ebb573adc745ce7747396fedf5290c552e93d9facc07462c14283e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cae6399ebb573adc745ce7747396fedf5290c552e93d9facc07462c14283e5a->enter($__internal_5cae6399ebb573adc745ce7747396fedf5290c552e93d9facc07462c14283e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_5cae6399ebb573adc745ce7747396fedf5290c552e93d9facc07462c14283e5a->leave($__internal_5cae6399ebb573adc745ce7747396fedf5290c552e93d9facc07462c14283e5a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8ec8863e86232ef60015ce181aa4ae79fc31b2f2c982c1b8c012e35be59a57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ec8863e86232ef60015ce181aa4ae79fc31b2f2c982c1b8c012e35be59a57a->enter($__internal_a8ec8863e86232ef60015ce181aa4ae79fc31b2f2c982c1b8c012e35be59a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_a8ec8863e86232ef60015ce181aa4ae79fc31b2f2c982c1b8c012e35be59a57a->leave($__internal_a8ec8863e86232ef60015ce181aa4ae79fc31b2f2c982c1b8c012e35be59a57a_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "C:\\wamp64\\www\\Miva\\vendor\\coresphere\\console-bundle/Resources/views/base.html.twig");
    }
}

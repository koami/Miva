<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_0b35162d3c638cb619be569d69567642e4a9f0e5c9f54e25dab63d489d3b8f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a6d2e8eec1e864636003943043c72fdcbfb8dcd5bb00c6663617031d714feaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6d2e8eec1e864636003943043c72fdcbfb8dcd5bb00c6663617031d714feaa->enter($__internal_7a6d2e8eec1e864636003943043c72fdcbfb8dcd5bb00c6663617031d714feaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 7
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <!-- For the Rating stars -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />

        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>

        <header>
        <nav class=\"navbar navbar-toggleable-md navbar-dark\">
        <div class=\"container\">
            <button class=\"navbar-toggler navbar-toggler-right\"
                    type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarNav1\" aria-controls=\"navbarNav1\"
                    aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">
                <div id=\"logo\" class=\"logo\"></div>
            </a>

            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">
                            Accueil
                            <span class=\"sr-only\"></span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"#\">
                            Commande(s) en cours
                            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:CommandesAdmin:menu"), array());
        // line 53
        echo "                        </a>
                    </li>
                </ul>

                <form class=\"form-inline waves-effect waves-light\">
                    <input class=\"form-control\" type=\"text\"
                           placeholder=\"Search\">
                </form>

                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item dropdown btn-group\">

                        ";
        // line 66
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 67
            echo "                            ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig", "::layout/layoutAdmin.html.twig", 67)->display($context);
            // line 68
            echo "                        ";
        } else {
            // line 69
            echo "                            <a class=\"nav-link\"
                               href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" >
                                <i class=\"fa fa-user\"></i>
                                Connexion
                            </a>
                        ";
        }
        // line 75
        echo "                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
                            <i class=\"fa fa-shopping-cart\"></i> Panier
                            ";
        // line 81
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Panier:menu"), array());
        // line 82
        echo "                        </a>
                    </li>
                </ul>


            </div>

            ";
        // line 93
        echo "        </div>
        </nav>
        </header>
        <div class=\"container\">
        <div class=\"m-t-lg m-b-lg\">
        ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "        </div>
        </div>

        <!--Footer-->
        <footer class=\"page-footer center-on-small-only\">

        <!--Footer Links-->
        <div class=\"container-fluid\">
            <div class=\"row\">

                <!--First column-->
                <div class=\"col-md-3 offset-lg-1 hidden-lg-down\">
                    <h5 class=\"title\">ABOUT</h5>
                    <p>Nous sommes a votre service pour vous fournir
                        les meilleurs produits a des prix defiants toutes
                        concurrences.</p>
                </div>
                <!--/.First column-->

                <hr class=\"hidden-md-up\">

                <!--Second column-->
                <div class=\"col-lg-2 col-md-4 offset-lg-1\">
                    <h5 class=\"title\">Nous contacter</h5>
                    <ul>
                        <li>
                            <i class=\"icon-phone\"></i>
                            &nbsp;Tel: ";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "
                        </li>

                        <li>
                            <i class=\"icon-print\"></i>
                            &nbsp;Fax: ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <center>
            <div class=\"footer-copyright\"
                 style=\"background-color: #3b0a0a;
                         margin-left: -15px;margin-right: -15px\">
                <div class=\"container-fluid\">
                    <p>&copy; ";
        // line 147
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright | Miva</p>
                </div>
            </div>
        </center>
        <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type=\"text/javascript\"
            src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- Bootstrap tooltips -->
        <script type=\"text/javascript\"
            src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- Bootstrap core JavaScript -->
        <script type=\"text/javascript\"
            src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- MDB core JavaScript -->
        <script type=\"text/javascript\"
            src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- Rating Stars -->
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\">

        </script>

        <script>
            \$(\".button-collapse\").sideNav();
            \$('.collapsible').collapsible();
        </script>

        <script>
        \$('.button-collapse').sideNav({
                menuWidth: 300, // Default is 240
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
        );
        </script>

        <script>
            new WOW().init();
        </script>

        <script type=\"text/javascript\"
            src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\">

        </script>

        <script type=\"text/javascript\"
            src=\"";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\">

        </script>

        ";
        // line 215
        $this->displayBlock('javascripts', $context, $blocks);
        // line 216
        echo "    </body>
</html>";
        
        $__internal_7a6d2e8eec1e864636003943043c72fdcbfb8dcd5bb00c6663617031d714feaa->leave($__internal_7a6d2e8eec1e864636003943043c72fdcbfb8dcd5bb00c6663617031d714feaa_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_7edd9951e98df49f381e287eadd3d989d57887958428847b0a0d2168d017c25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edd9951e98df49f381e287eadd3d989d57887958428847b0a0d2168d017c25f->enter($__internal_7edd9951e98df49f381e287eadd3d989d57887958428847b0a0d2168d017c25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Home";
        
        $__internal_7edd9951e98df49f381e287eadd3d989d57887958428847b0a0d2168d017c25f->leave($__internal_7edd9951e98df49f381e287eadd3d989d57887958428847b0a0d2168d017c25f_prof);

    }

    // line 7
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_fab1fdcb88065153f11f5dbee192c5114fcd16aeadf43131443b4c26788ebc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab1fdcb88065153f11f5dbee192c5114fcd16aeadf43131443b4c26788ebc46->enter($__internal_fab1fdcb88065153f11f5dbee192c5114fcd16aeadf43131443b4c26788ebc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_fab1fdcb88065153f11f5dbee192c5114fcd16aeadf43131443b4c26788ebc46->leave($__internal_fab1fdcb88065153f11f5dbee192c5114fcd16aeadf43131443b4c26788ebc46_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_c750b87a1b224f1eda353993794df25344991202dfde4dc63790c975a94070ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c750b87a1b224f1eda353993794df25344991202dfde4dc63790c975a94070ba->enter($__internal_c750b87a1b224f1eda353993794df25344991202dfde4dc63790c975a94070ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_c750b87a1b224f1eda353993794df25344991202dfde4dc63790c975a94070ba->leave($__internal_c750b87a1b224f1eda353993794df25344991202dfde4dc63790c975a94070ba_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e968cec11cc6f5b59a76645ea4c517abe92603b3db7f03f02cbf4fcdbbaba30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e968cec11cc6f5b59a76645ea4c517abe92603b3db7f03f02cbf4fcdbbaba30c->enter($__internal_e968cec11cc6f5b59a76645ea4c517abe92603b3db7f03f02cbf4fcdbbaba30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e968cec11cc6f5b59a76645ea4c517abe92603b3db7f03f02cbf4fcdbbaba30c->leave($__internal_e968cec11cc6f5b59a76645ea4c517abe92603b3db7f03f02cbf4fcdbbaba30c_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f2a4ef61bf78ed90dcb0a78958d1a7389eb0a6bb461979c96682b152c3eac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f2a4ef61bf78ed90dcb0a78958d1a7389eb0a6bb461979c96682b152c3eac1->enter($__internal_d4f2a4ef61bf78ed90dcb0a78958d1a7389eb0a6bb461979c96682b152c3eac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4f2a4ef61bf78ed90dcb0a78958d1a7389eb0a6bb461979c96682b152c3eac1->leave($__internal_d4f2a4ef61bf78ed90dcb0a78958d1a7389eb0a6bb461979c96682b152c3eac1_prof);

    }

    // line 215
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2110aa11815461cbe1a36f3d73bfbe5d026eb8b7ddfab2b66d0eb4b5d71717d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2110aa11815461cbe1a36f3d73bfbe5d026eb8b7ddfab2b66d0eb4b5d71717d->enter($__internal_f2110aa11815461cbe1a36f3d73bfbe5d026eb8b7ddfab2b66d0eb4b5d71717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f2110aa11815461cbe1a36f3d73bfbe5d026eb8b7ddfab2b66d0eb4b5d71717d->leave($__internal_f2110aa11815461cbe1a36f3d73bfbe5d026eb8b7ddfab2b66d0eb4b5d71717d_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 215,  386 => 98,  375 => 19,  364 => 8,  353 => 7,  341 => 6,  333 => 216,  331 => 215,  324 => 211,  316 => 206,  290 => 183,  282 => 178,  273 => 172,  264 => 166,  255 => 160,  239 => 147,  220 => 131,  212 => 126,  183 => 99,  181 => 98,  174 => 93,  165 => 82,  163 => 81,  158 => 79,  152 => 75,  144 => 70,  141 => 69,  138 => 68,  135 => 67,  133 => 66,  118 => 53,  116 => 52,  103 => 42,  93 => 35,  74 => 20,  72 => 19,  67 => 17,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  35 => 6,  28 => 1,);
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
        <title>{% block titre %}MIVA | Home{% endblock %}</title>
        <meta name=\"keywords\" content=\"{% block motsCles %}{% endblock %}\" />
        <meta name=\"description\" content=\"{% block description %}{% endblock %}\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

        <link rel=\"stylesheet\" href=\"{{ asset('font-awesome/css/font-awesome.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/mdb.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
        <!-- For the Rating stars -->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/dcsrating/css/rating.css') }}\" />

        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>

        <header>
        <nav class=\"navbar navbar-toggleable-md navbar-dark\">
        <div class=\"container\">
            <button class=\"navbar-toggler navbar-toggler-right\"
                    type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarNav1\" aria-controls=\"navbarNav1\"
                    aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a class=\"navbar-brand\" href=\"{{ path('produits') }}\">
                <div id=\"logo\" class=\"logo\"></div>
            </a>

            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('produits') }}\">
                            Accueil
                            <span class=\"sr-only\"></span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"#\">
                            Commande(s) en cours
                            {% render(controller('EcommerceBundle:CommandesAdmin:menu')) %}
                        </a>
                    </li>
                </ul>

                <form class=\"form-inline waves-effect waves-light\">
                    <input class=\"form-control\" type=\"text\"
                           placeholder=\"Search\">
                </form>

                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item dropdown btn-group\">

                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {% include 'UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig' %}
                        {% else %}
                            <a class=\"nav-link\"
                               href=\"{{ path('fos_user_security_login') }}\" >
                                <i class=\"fa fa-user\"></i>
                                Connexion
                            </a>
                        {% endif %}
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"{{ path('panier') }}\">
                            <i class=\"fa fa-shopping-cart\"></i> Panier
                            {% render(controller('EcommerceBundle:Panier:menu')) %}
                        </a>
                    </li>
                </ul>


            </div>

            {#<a class=\"brand\" href=\"{{ path('produits') }}\">Miva</a>
            <div class=\"nav-collapse collapse\">
                {% render(controller('EcommerceBundle:Produits:recherche')) %}
            </div>#}
        </div>
        </nav>
        </header>
        <div class=\"container\">
        <div class=\"m-t-lg m-b-lg\">
        {% block body %}{% endblock %}
        </div>
        </div>

        <!--Footer-->
        <footer class=\"page-footer center-on-small-only\">

        <!--Footer Links-->
        <div class=\"container-fluid\">
            <div class=\"row\">

                <!--First column-->
                <div class=\"col-md-3 offset-lg-1 hidden-lg-down\">
                    <h5 class=\"title\">ABOUT</h5>
                    <p>Nous sommes a votre service pour vous fournir
                        les meilleurs produits a des prix defiants toutes
                        concurrences.</p>
                </div>
                <!--/.First column-->

                <hr class=\"hidden-md-up\">

                <!--Second column-->
                <div class=\"col-lg-2 col-md-4 offset-lg-1\">
                    <h5 class=\"title\">Nous contacter</h5>
                    <ul>
                        <li>
                            <i class=\"icon-phone\"></i>
                            &nbsp;Tel: {{ telephone }}
                        </li>

                        <li>
                            <i class=\"icon-print\"></i>
                            &nbsp;Fax: {{ fax }}
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <center>
            <div class=\"footer-copyright\"
                 style=\"background-color: #3b0a0a;
                         margin-left: -15px;margin-right: -15px\">
                <div class=\"container-fluid\">
                    <p>&copy; {{ \"now\"|date('Y') }} Copyright | Miva</p>
                </div>
            </div>
        </center>
        <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type=\"text/javascript\"
            src=\"{{ asset('js/jquery-2.2.3.min.js') }}\">

        </script>

        <!-- Bootstrap tooltips -->
        <script type=\"text/javascript\"
            src=\"{{ asset('js/tether.min.js') }}\">

        </script>

        <!-- Bootstrap core JavaScript -->
        <script type=\"text/javascript\"
            src=\"{{ asset('js/bootstrap.min.js') }}\">

        </script>

        <!-- MDB core JavaScript -->
        <script type=\"text/javascript\"
            src=\"{{ asset('js/mdb.min.js') }}\">

        </script>

        <!-- Rating Stars -->
        <script src=\"{{ asset('bundles/dcsrating/js/rating.js') }}\">

        </script>

        <script>
            \$(\".button-collapse\").sideNav();
            \$('.collapsible').collapsible();
        </script>

        <script>
        \$('.button-collapse').sideNav({
                menuWidth: 300, // Default is 240
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
        );
        </script>

        <script>
            new WOW().init();
        </script>

        <script type=\"text/javascript\"
            src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\">

        </script>

        <script type=\"text/javascript\"
            src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\">

        </script>

        {% block javascripts %}{% endblock %}
    </body>
</html>", "::layout/layoutAdmin.html.twig", "C:\\wamp64\\www\\Miva\\app/Resources\\views/layout/layoutAdmin.html.twig");
    }
}

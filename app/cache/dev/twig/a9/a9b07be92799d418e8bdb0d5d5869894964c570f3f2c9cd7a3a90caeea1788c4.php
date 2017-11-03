<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_37685feec2fb048915969e2118191a43973cc5ae8826ef43fafdc8a58b414e6a extends Twig_Template
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
        $__internal_2859f56c779e1c00bcde9bda6d1699fe7955ad54385b7126c87882092a9274ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2859f56c779e1c00bcde9bda6d1699fe7955ad54385b7126c87882092a9274ed->enter($__internal_2859f56c779e1c00bcde9bda6d1699fe7955ad54385b7126c87882092a9274ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    
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
                                <a class=\"nav-link\" href=\"#\">
                                    Hommes
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">
                                    Dames
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">
                                    Articles
                                </a>
                            </li>
                        </ul>
                                    
                        <form class=\"form-inline waves-effect waves-light\">
                            <input class=\"form-control\" type=\"text\" 
                                   placeholder=\"Search\">
                        </form>

                        <ul class=\"navbar-nav mr-auto\">
                            
                            <li class=\"nav-item dropdown btn-group\">
                                
                                ";
        // line 76
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 77
            echo "                                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "::layout/layout.html.twig", 77)->display($context);
            echo "   
                                ";
        } else {
            // line 79
            echo "                                    <a class=\"nav-link\" 
                                       href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" >
                                        <i class=\"fa fa-user\"></i>
                                        Connexion
                                    </a>
                                ";
        }
        // line 85
        echo "                            </li>
                            
                            <li class=\"nav-item\">
                                <a class=\"nav-link\"
                                   href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\"> 
                                    <i class=\"fa fa-shopping-cart\"></i> Panier
                                    ";
        // line 91
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Panier:menu"), array());
        // line 92
        echo "                                </a>
                            </li>
                        </ul>


                    </div>

                    ";
        // line 103
        echo "                </div>
            </nav>
        </header>

        ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "        
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
        // line 133
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "
                            </li>
                            
                            <li>
                                <i class=\"icon-print\"></i>
                                &nbsp;Fax: ";
        // line 138
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
        // line 154
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
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- Bootstrap tooltips -->
        <script type=\"text/javascript\"
                src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- Bootstrap core JavaScript -->
        <script type=\"text/javascript\"
                src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- MDB core JavaScript -->
        <script type=\"text/javascript\"
                src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\">

        </script>

        <!-- Rating Stars -->
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\">

        </script>

        <script>
            // Initialize collapse button
            \$(\".button-collapse\").sideNav();
            // Initialize collapsible (uncomment the line below if you use the dropdown variation)
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
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\">

        </script>

        <script type=\"text/javascript\"
                src=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\">

        </script>
        ";
        // line 222
        $this->displayBlock('javascripts', $context, $blocks);
        // line 223
        echo "    </body>
</html>";
        
        $__internal_2859f56c779e1c00bcde9bda6d1699fe7955ad54385b7126c87882092a9274ed->leave($__internal_2859f56c779e1c00bcde9bda6d1699fe7955ad54385b7126c87882092a9274ed_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_70a3a6950d87d23602a7d7bf4a90e21c436f57c33e25848185e4dfb0260ced4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a3a6950d87d23602a7d7bf4a90e21c436f57c33e25848185e4dfb0260ced4c->enter($__internal_70a3a6950d87d23602a7d7bf4a90e21c436f57c33e25848185e4dfb0260ced4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Home";
        
        $__internal_70a3a6950d87d23602a7d7bf4a90e21c436f57c33e25848185e4dfb0260ced4c->leave($__internal_70a3a6950d87d23602a7d7bf4a90e21c436f57c33e25848185e4dfb0260ced4c_prof);

    }

    // line 7
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_ad7d4557f230d63e2713641f41bfe5191eec52852b59335c1febb586dc44a5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7d4557f230d63e2713641f41bfe5191eec52852b59335c1febb586dc44a5a7->enter($__internal_ad7d4557f230d63e2713641f41bfe5191eec52852b59335c1febb586dc44a5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_ad7d4557f230d63e2713641f41bfe5191eec52852b59335c1febb586dc44a5a7->leave($__internal_ad7d4557f230d63e2713641f41bfe5191eec52852b59335c1febb586dc44a5a7_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_ff1286de70ea8ecec658f2e76ce1971bdd62933fd829f80850b933e850ec4cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1286de70ea8ecec658f2e76ce1971bdd62933fd829f80850b933e850ec4cd8->enter($__internal_ff1286de70ea8ecec658f2e76ce1971bdd62933fd829f80850b933e850ec4cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_ff1286de70ea8ecec658f2e76ce1971bdd62933fd829f80850b933e850ec4cd8->leave($__internal_ff1286de70ea8ecec658f2e76ce1971bdd62933fd829f80850b933e850ec4cd8_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c1ad8e4d48c12504f53bd322976f147d2626e6d354c26adf2075d381fb53205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1ad8e4d48c12504f53bd322976f147d2626e6d354c26adf2075d381fb53205->enter($__internal_1c1ad8e4d48c12504f53bd322976f147d2626e6d354c26adf2075d381fb53205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c1ad8e4d48c12504f53bd322976f147d2626e6d354c26adf2075d381fb53205->leave($__internal_1c1ad8e4d48c12504f53bd322976f147d2626e6d354c26adf2075d381fb53205_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_de2f5cccac5701bded6962406ba10bbd7ea798008d86990d0325f07e41b2ef84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2f5cccac5701bded6962406ba10bbd7ea798008d86990d0325f07e41b2ef84->enter($__internal_de2f5cccac5701bded6962406ba10bbd7ea798008d86990d0325f07e41b2ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de2f5cccac5701bded6962406ba10bbd7ea798008d86990d0325f07e41b2ef84->leave($__internal_de2f5cccac5701bded6962406ba10bbd7ea798008d86990d0325f07e41b2ef84_prof);

    }

    // line 222
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6399acb2be37e7bde8631fc7adeff24954173882ca4f6dc6ed22f924e6112579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6399acb2be37e7bde8631fc7adeff24954173882ca4f6dc6ed22f924e6112579->enter($__internal_6399acb2be37e7bde8631fc7adeff24954173882ca4f6dc6ed22f924e6112579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6399acb2be37e7bde8631fc7adeff24954173882ca4f6dc6ed22f924e6112579->leave($__internal_6399acb2be37e7bde8631fc7adeff24954173882ca4f6dc6ed22f924e6112579_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 222,  390 => 107,  379 => 19,  368 => 8,  357 => 7,  345 => 6,  337 => 223,  335 => 222,  329 => 219,  321 => 214,  293 => 189,  285 => 184,  276 => 178,  267 => 172,  258 => 166,  243 => 154,  224 => 138,  216 => 133,  189 => 108,  187 => 107,  181 => 103,  172 => 92,  170 => 91,  165 => 89,  159 => 85,  151 => 80,  148 => 79,  142 => 77,  140 => 76,  103 => 42,  93 => 35,  74 => 20,  72 => 19,  67 => 17,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  35 => 6,  28 => 1,);
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
<html lang=\"en\">
    
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
                                <a class=\"nav-link\" href=\"#\">
                                    Hommes
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">
                                    Dames
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">
                                    Articles
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
                                    {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}   
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

        {% block body %}{% endblock %}
        
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
            // Initialize collapse button
            \$(\".button-collapse\").sideNav();
            // Initialize collapsible (uncomment the line below if you use the dropdown variation)
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
</html>", "::layout/layout.html.twig", "C:\\wamp64\\www\\Miva\\app/Resources\\views/layout/layout.html.twig");
    }
}

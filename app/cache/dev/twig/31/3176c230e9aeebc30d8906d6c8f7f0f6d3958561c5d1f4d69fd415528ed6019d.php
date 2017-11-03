<?php

/* ::layout/defaultLayout.html.twig */
class __TwigTemplate_909eb9b2a2540c8f35106da6a1b75eb0a72106c8b37fd73e1510adc64d8772f2 extends Twig_Template
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
        $__internal_51aeb3cd0ee06226d596fb44cc54d68571c73e296a1124e3c943933022e94f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51aeb3cd0ee06226d596fb44cc54d68571c73e296a1124e3c943933022e94f38->enter($__internal_51aeb3cd0ee06226d596fb44cc54d68571c73e296a1124e3c943933022e94f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/defaultLayout.html.twig"));

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
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/search.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style_rating.css"), "html", null, true);
        echo "\" />
    <!-- For the Rating stars -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />

    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">
                <div id=\"logo\" class=\"logo\"></div>
            </a>

            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 43
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
                        <a class=\"nav-link\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirPlus");
        echo "\">
                            Articles
                        </a>
                    </li>
                    <li>
                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 68
        echo "                    </li>

                </ul>




                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item dropdown btn-group\">

                        <div class=\"dropdown\">

                        ";
        // line 81
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 82
            echo "
                            ";
            // line 83
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 84
                echo "                                ";
                $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig", "::layout/defaultLayout.html.twig", 84)->display($context);
                // line 85
                echo "                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 86
                echo "                                ";
                $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "::layout/defaultLayout.html.twig", 86)->display($context);
                // line 87
                echo "                            ";
            }
            // line 88
            echo "
                        ";
        } else {
            // line 90
            echo "                            <a class=\"nav-link\"
                               href=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" >
                                <i class=\"fa fa-user\"></i>
                                Connexion
                            </a>
                        ";
        }
        // line 96
        echo "                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
                            <i class=\"fa fa-shopping-cart\"></i> Panier
                            ";
        // line 103
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Panier:menu"), array());
        // line 104
        echo "                        </a>
                    </li>
                </ul>


            </div>

            ";
        // line 115
        echo "        </div>
    </nav>

    <div class=\"resultats\">
        <ul class=\"aja\">

        </ul>
    </div>

</header>

";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "
<!--Footer-->
<footer class=\"page-footer center-on-small-only\">

    <!--Footer Links-->
    <div class=\"container\">
        <div class=\"row\">

            <!--First column-->
            <div class=\"col-md-4 col-sm-6\">
                <h5 class=\"title\">A propos</h5>
                <p>Nous sommes a votre service pour vous fournir
                    les meilleurs produits a des prix defiants toutes
                    concurrences.</p>
            </div>
            <!--/.First column-->

            <hr class=\"hidden-md-up\">

            <!--Second column-->
            <div class=\"col-md-4 col-sm-6\">
                <h5 class=\"title\">Nous contacter</h5>
                <ul>
                    <li>
                        <i class=\"icon-phone\"></i>
                        &nbsp;Tel: ";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "
                    </li>

                    <li>
                        <i class=\"icon-print\"></i>
                        &nbsp;Fax: ";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "
                    </li>
                    <li>
                        <p class=\"grey-text text-lighten-1 m-t-md\">
                            Ravi de recevoir
                            vos messages.
                        </p>
                        <a class=\"btn miva waves-effect waves-light m-b-lg\" href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactUs");
        echo "\"><i class=\"fa fa-envelope\"></i> ENVOYER MAIL</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->
            <div class=\"col-md-4 col-sm-6 m-t-md\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-4\"><a href=\"#\"><dd class=\"social\"><i class=\"fa fa-facebook m-t-md\"></i></dd></a></div>
                    <div class=\"col-md-4 col-sm-4 col-xs-4\"><a href=\"#\"><dd class=\"social\"><i class=\"fa fa-google-plus m-t-md\"></i></dd></a></div>
                    <div class=\"col-md-4 col-sm-4 col-xs-4\"><a href=\"#\"><dd class=\"social\"><i class=\"fa fa-twitter m-t-md\"></i></dd></a></div>
                </div>



            </div>
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
        // line 189
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
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\">

</script>

<!-- Bootstrap tooltips -->
<script type=\"text/javascript\"
        src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\">

</script>

<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\"
        src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\">

</script>

<!-- recherche core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

<!-- MDB core JavaScript -->
<script type=\"text/javascript\"
        src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\">

</script>

<!-- Rating Stars -->
<script src=\"";
        // line 227
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
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\">

</script>

<script type=\"text/javascript\"
        src=\"";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\">

</script>

<script type=\"text/javascript\"
        src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/rating/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\"
        src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/rating/precise-star-rating.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\"
        src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/elevatezoom/jquery.elevatezoom.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\"></script>

<script>
    var loader = \"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/loader-small.gif"), "html", null, true);
        echo "\"; //link to the animated loader-small.gif
    var ROOT_URL = \"";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("produits");
        echo "\"; //your root URL, used in autocomplete-countries.js file
</script>

";
        // line 277
        $this->displayBlock('javascripts', $context, $blocks);
        // line 278
        echo "</body>
</html>
";
        
        $__internal_51aeb3cd0ee06226d596fb44cc54d68571c73e296a1124e3c943933022e94f38->leave($__internal_51aeb3cd0ee06226d596fb44cc54d68571c73e296a1124e3c943933022e94f38_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_3746c0023d98ca86599902aa489988d7eb6f92ad5ee52876b58ebb984af01afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3746c0023d98ca86599902aa489988d7eb6f92ad5ee52876b58ebb984af01afe->enter($__internal_3746c0023d98ca86599902aa489988d7eb6f92ad5ee52876b58ebb984af01afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Home";
        
        $__internal_3746c0023d98ca86599902aa489988d7eb6f92ad5ee52876b58ebb984af01afe->leave($__internal_3746c0023d98ca86599902aa489988d7eb6f92ad5ee52876b58ebb984af01afe_prof);

    }

    // line 7
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_d120130fa2ed66cee4def2ac3897f4696c2996f6b203aaad3bc65cd81f99b734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d120130fa2ed66cee4def2ac3897f4696c2996f6b203aaad3bc65cd81f99b734->enter($__internal_d120130fa2ed66cee4def2ac3897f4696c2996f6b203aaad3bc65cd81f99b734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_d120130fa2ed66cee4def2ac3897f4696c2996f6b203aaad3bc65cd81f99b734->leave($__internal_d120130fa2ed66cee4def2ac3897f4696c2996f6b203aaad3bc65cd81f99b734_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_d28361558505e36542f9b3ba44c6d936ef2bba7adbec3a2411d9f7b56777dbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28361558505e36542f9b3ba44c6d936ef2bba7adbec3a2411d9f7b56777dbf6->enter($__internal_d28361558505e36542f9b3ba44c6d936ef2bba7adbec3a2411d9f7b56777dbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_d28361558505e36542f9b3ba44c6d936ef2bba7adbec3a2411d9f7b56777dbf6->leave($__internal_d28361558505e36542f9b3ba44c6d936ef2bba7adbec3a2411d9f7b56777dbf6_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee0706ff8dc1ac663852e4032ec8491bbdc4bda4097b4a8d6205afb7d86713e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0706ff8dc1ac663852e4032ec8491bbdc4bda4097b4a8d6205afb7d86713e3->enter($__internal_ee0706ff8dc1ac663852e4032ec8491bbdc4bda4097b4a8d6205afb7d86713e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee0706ff8dc1ac663852e4032ec8491bbdc4bda4097b4a8d6205afb7d86713e3->leave($__internal_ee0706ff8dc1ac663852e4032ec8491bbdc4bda4097b4a8d6205afb7d86713e3_prof);

    }

    // line 126
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc9ffbba1a17be7e86fe244da6563e26544454bf043ce3431cc5481f6ad75ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9ffbba1a17be7e86fe244da6563e26544454bf043ce3431cc5481f6ad75ef0->enter($__internal_cc9ffbba1a17be7e86fe244da6563e26544454bf043ce3431cc5481f6ad75ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc9ffbba1a17be7e86fe244da6563e26544454bf043ce3431cc5481f6ad75ef0->leave($__internal_cc9ffbba1a17be7e86fe244da6563e26544454bf043ce3431cc5481f6ad75ef0_prof);

    }

    // line 277
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c338c7090b38a7772d66c3ce8d8dfdd3b87c7cd6df46ab86da76caa42432530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c338c7090b38a7772d66c3ce8d8dfdd3b87c7cd6df46ab86da76caa42432530->enter($__internal_3c338c7090b38a7772d66c3ce8d8dfdd3b87c7cd6df46ab86da76caa42432530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3c338c7090b38a7772d66c3ce8d8dfdd3b87c7cd6df46ab86da76caa42432530->leave($__internal_3c338c7090b38a7772d66c3ce8d8dfdd3b87c7cd6df46ab86da76caa42432530_prof);

    }

    public function getTemplateName()
    {
        return "::layout/defaultLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 277,  491 => 126,  480 => 20,  469 => 8,  458 => 7,  446 => 6,  437 => 278,  435 => 277,  429 => 274,  425 => 273,  419 => 270,  414 => 268,  408 => 265,  402 => 262,  394 => 257,  386 => 252,  358 => 227,  350 => 222,  343 => 218,  335 => 213,  326 => 207,  317 => 201,  302 => 189,  274 => 164,  264 => 157,  256 => 152,  229 => 127,  227 => 126,  214 => 115,  205 => 104,  203 => 103,  198 => 101,  191 => 96,  183 => 91,  180 => 90,  176 => 88,  173 => 87,  170 => 86,  167 => 85,  164 => 84,  162 => 83,  159 => 82,  157 => 81,  142 => 68,  140 => 67,  132 => 62,  110 => 43,  100 => 36,  81 => 21,  79 => 20,  74 => 18,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  43 => 8,  39 => 7,  35 => 6,  28 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/search.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/style_rating.css') }}\" />
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
                        <a class=\"nav-link\" href=\"{{ path('voirPlus') }}\">
                            Articles
                        </a>
                    </li>
                    <li>
                        {% render(controller('EcommerceBundle:Produits:recherche')) %}
                    </li>

                </ul>




                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item dropdown btn-group\">

                        <div class=\"dropdown\">

                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                            {%  if is_granted('ROLE_ADMIN') %}
                                {% include 'UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig' %}
                            {% elseif is_granted('ROLE_USER') %}
                                {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
                            {% endif %}

                        {% else %}
                            <a class=\"nav-link\"
                               href=\"{{ path('fos_user_security_login') }}\" >
                                <i class=\"fa fa-user\"></i>
                                Connexion
                            </a>
                        {% endif %}
                        </div>
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

    <div class=\"resultats\">
        <ul class=\"aja\">

        </ul>
    </div>

</header>

{% block body %}{% endblock %}

<!--Footer-->
<footer class=\"page-footer center-on-small-only\">

    <!--Footer Links-->
    <div class=\"container\">
        <div class=\"row\">

            <!--First column-->
            <div class=\"col-md-4 col-sm-6\">
                <h5 class=\"title\">A propos</h5>
                <p>Nous sommes a votre service pour vous fournir
                    les meilleurs produits a des prix defiants toutes
                    concurrences.</p>
            </div>
            <!--/.First column-->

            <hr class=\"hidden-md-up\">

            <!--Second column-->
            <div class=\"col-md-4 col-sm-6\">
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
                    <li>
                        <p class=\"grey-text text-lighten-1 m-t-md\">
                            Ravi de recevoir
                            vos messages.
                        </p>
                        <a class=\"btn miva waves-effect waves-light m-b-lg\" href=\"{{ path('contactUs') }}\"><i class=\"fa fa-envelope\"></i> ENVOYER MAIL</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->
            <div class=\"col-md-4 col-sm-6 m-t-md\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-4\"><a href=\"#\"><dd class=\"social\"><i class=\"fa fa-facebook m-t-md\"></i></dd></a></div>
                    <div class=\"col-md-4 col-sm-4 col-xs-4\"><a href=\"#\"><dd class=\"social\"><i class=\"fa fa-google-plus m-t-md\"></i></dd></a></div>
                    <div class=\"col-md-4 col-sm-4 col-xs-4\"><a href=\"#\"><dd class=\"social\"><i class=\"fa fa-twitter m-t-md\"></i></dd></a></div>
                </div>



            </div>
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

<!-- recherche core JavaScript -->
<script type=\"text/javascript\" src=\"{{ asset('js/search.js') }}\"></script>

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

<script type=\"text/javascript\"
        src=\"{{ asset('js/rating/jquery.cookie.js') }}\"></script>

<script type=\"text/javascript\"
        src=\"{{ asset('js/rating/precise-star-rating.js') }}\"></script>

<script type=\"text/javascript\"
        src=\"{{ asset('js/elevatezoom/jquery.elevatezoom.js') }}\"></script>

<script src=\"{{ asset('bundles/dcsrating/js/rating.js') }}\"></script>

<script>
    var loader = \"{{ asset('img/loader-small.gif') }}\"; //link to the animated loader-small.gif
    var ROOT_URL = \"{{ url('produits')}}\"; //your root URL, used in autocomplete-countries.js file
</script>

{% block javascripts %}{% endblock %}
</body>
</html>
", "::layout/defaultLayout.html.twig", "C:\\wamp64\\www\\Miva\\app/Resources\\views/layout/defaultLayout.html.twig");
    }
}

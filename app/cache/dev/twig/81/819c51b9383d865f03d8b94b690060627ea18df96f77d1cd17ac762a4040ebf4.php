<?php

/* ::layout/defaultLayout.html.twig */
class __TwigTemplate_2a55238deb8bb96a981023e4b6048752c6101703333089e7f92d2419c603adad extends Twig_Template
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
        $__internal_15a099fadd8cdd600b561a1a982b59d05fa6d253637a2d75319591aa682638d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a099fadd8cdd600b561a1a982b59d05fa6d253637a2d75319591aa682638d4->enter($__internal_15a099fadd8cdd600b561a1a982b59d05fa6d253637a2d75319591aa682638d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/defaultLayout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/search.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style_rating.css"), "html", null, true);
        echo "\" />
    <!-- For the Rating stars -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />

    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
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
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">
                <div id=\"logo\" class=\"logo\"></div>
            </a>

            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 44
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
                    <li>
                        ";
        // line 68
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 69
        echo "                    </li>

                </ul>




                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item dropdown btn-group\">

                        <div class=\"dropdown\">

                        ";
        // line 82
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 83
            echo "
                            ";
            // line 84
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 85
                echo "                                ";
                $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/adminConnecte.html.twig", "::layout/defaultLayout.html.twig", 85)->display($context);
                // line 86
                echo "                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 87
                echo "                                ";
                $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "::layout/defaultLayout.html.twig", 87)->display($context);
                // line 88
                echo "                            ";
            }
            // line 89
            echo "
                        ";
        } else {
            // line 91
            echo "                            <a class=\"nav-link\"
                               href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" >
                                <i class=\"fa fa-user\"></i>
                                Connexion
                            </a>
                        ";
        }
        // line 97
        echo "                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
                            <i class=\"fa fa-shopping-cart\"></i> Panier
                            ";
        // line 104
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Panier:menu"), array());
        // line 105
        echo "                        </a>
                    </li>
                </ul>


            </div>

            ";
        // line 116
        echo "        </div>
    </nav>

    <div class=\"resultats\">
        <ul class=\"aja\">

        </ul>
    </div>

</header>

";
        // line 127
        $this->displayBlock('body', $context, $blocks);
        // line 128
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
        // line 153
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "
                    </li>

                    <li>
                        <i class=\"icon-print\"></i>
                        &nbsp;Fax: ";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "
                    </li>
                    <li>
                        <p class=\"grey-text text-lighten-1 m-t-md\">
                            Ravi de recevoir
                            vos messages.
                        </p>
                        <a class=\"btn miva\" href=\"\"><i class=\"fa fa-envelope\"></i> ENVOYER MAIL</a>
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

                <form role=\"form\" id=\"form-contact\" autocomplete=\"off\" method=\"post\" action=\"\">
                    <div class=\"row\">
                        <div class=\"input-field col-md-6 col-sm-12\">
                            <input name=\"name\" type=\"text\" class=\"validate\" required=\"true\">
                            <label for=\"name\" style=\"left: 0.75rem;\">Nom</label>
                        </div>
                        <div class=\"input-field col-md-6 col-sm-12\">
                            <input name=\"email\" type=\"email\" class=\"validate\" required=\"true\">
                            <label for=\"email\" style=\"left: 0.75rem;\">Email</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col-md-12 col-sm-12\">
                            <textarea name=\"message\" rows=\"5\" class=\"validate materialize-textarea\" style=\"border:0 solid #000;border-bottom:1px solid #999;height: 50px\"> </textarea>
                            <label for=\"message\" style=\"left: 0.75rem;\">Message</label>
                        </div>
                    </div>
                    <div class=\"row\">

                        <button type=\"submit\" title=\"Se connecter\" class=\"btn miva m-b-lg\" data-style=\"slide-right\" id=\"valid_mail\">
                            <span class=\"ladda-label\">Envoyer &nbsp;&nbsp;<i class=\"mdi-content-send\" style=\"font-size: 1rem;\"></i></span>
                            <span class=\"ladda-spinner\"></span>
                        </button>
                        <button type=\"reset\" id=\"reset_mail\" class=\"m-b-lg\"> <i class=\"fa fa-eraser\"></i> </button>
                    </div>
                </form>

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
        // line 216
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
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\">

</script>

<!-- Bootstrap tooltips -->
<script type=\"text/javascript\"
        src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\">

</script>

<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\"
        src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\">

</script>

<!-- recherche core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

<!-- MDB core JavaScript -->
<script type=\"text/javascript\"
        src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\">

</script>

<!-- Rating Stars -->
<script src=\"";
        // line 254
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
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\">

</script>

<script type=\"text/javascript\"
        src=\"";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\">

</script>

<script type=\"text/javascript\"
        src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/rating/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\"
        src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/rating/precise-star-rating.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\"
        src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/elevatezoom/jquery.elevatezoom.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\"></script>

<script>
    var loader = \"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/loader-small.gif"), "html", null, true);
        echo "\"; //link to the animated loader-small.gif
    var ROOT_URL = \"";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("produits");
        echo "\"; //your root URL, used in autocomplete-countries.js file
</script>

";
        // line 304
        $this->displayBlock('javascripts', $context, $blocks);
        // line 305
        echo "</body>
</html>
";
        
        $__internal_15a099fadd8cdd600b561a1a982b59d05fa6d253637a2d75319591aa682638d4->leave($__internal_15a099fadd8cdd600b561a1a982b59d05fa6d253637a2d75319591aa682638d4_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_0f1bd410b6aca00c0c3fb6bd92b0ce320af3907d8c505f58388683e924ba5af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1bd410b6aca00c0c3fb6bd92b0ce320af3907d8c505f58388683e924ba5af0->enter($__internal_0f1bd410b6aca00c0c3fb6bd92b0ce320af3907d8c505f58388683e924ba5af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Home";
        
        $__internal_0f1bd410b6aca00c0c3fb6bd92b0ce320af3907d8c505f58388683e924ba5af0->leave($__internal_0f1bd410b6aca00c0c3fb6bd92b0ce320af3907d8c505f58388683e924ba5af0_prof);

    }

    // line 7
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_cbcb541a6205f65e1be25a0aa5f7222884eb9e302f23977464d27e1068081aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcb541a6205f65e1be25a0aa5f7222884eb9e302f23977464d27e1068081aa4->enter($__internal_cbcb541a6205f65e1be25a0aa5f7222884eb9e302f23977464d27e1068081aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_cbcb541a6205f65e1be25a0aa5f7222884eb9e302f23977464d27e1068081aa4->leave($__internal_cbcb541a6205f65e1be25a0aa5f7222884eb9e302f23977464d27e1068081aa4_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_255235b15cfbd3ea5940f846c2576b6558f36fda3c239e67db0aa9c2c1e20e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255235b15cfbd3ea5940f846c2576b6558f36fda3c239e67db0aa9c2c1e20e29->enter($__internal_255235b15cfbd3ea5940f846c2576b6558f36fda3c239e67db0aa9c2c1e20e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_255235b15cfbd3ea5940f846c2576b6558f36fda3c239e67db0aa9c2c1e20e29->leave($__internal_255235b15cfbd3ea5940f846c2576b6558f36fda3c239e67db0aa9c2c1e20e29_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2b0248f294d90ed06b5a1fb97dcda5a0749a48d7f279aaf865421ec48d82dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b0248f294d90ed06b5a1fb97dcda5a0749a48d7f279aaf865421ec48d82dc6->enter($__internal_a2b0248f294d90ed06b5a1fb97dcda5a0749a48d7f279aaf865421ec48d82dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2b0248f294d90ed06b5a1fb97dcda5a0749a48d7f279aaf865421ec48d82dc6->leave($__internal_a2b0248f294d90ed06b5a1fb97dcda5a0749a48d7f279aaf865421ec48d82dc6_prof);

    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        $__internal_5152d25292675f578c3205b1d691fb0ebca263edc5febafd350c9ab7a1a0d023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5152d25292675f578c3205b1d691fb0ebca263edc5febafd350c9ab7a1a0d023->enter($__internal_5152d25292675f578c3205b1d691fb0ebca263edc5febafd350c9ab7a1a0d023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5152d25292675f578c3205b1d691fb0ebca263edc5febafd350c9ab7a1a0d023->leave($__internal_5152d25292675f578c3205b1d691fb0ebca263edc5febafd350c9ab7a1a0d023_prof);

    }

    // line 304
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6b1368f175d63511d7b8b1fdda827af9be04d79c4b66a687eaaec7fc280ed26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b1368f175d63511d7b8b1fdda827af9be04d79c4b66a687eaaec7fc280ed26->enter($__internal_a6b1368f175d63511d7b8b1fdda827af9be04d79c4b66a687eaaec7fc280ed26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6b1368f175d63511d7b8b1fdda827af9be04d79c4b66a687eaaec7fc280ed26->leave($__internal_a6b1368f175d63511d7b8b1fdda827af9be04d79c4b66a687eaaec7fc280ed26_prof);

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
        return array (  523 => 304,  512 => 127,  501 => 21,  490 => 8,  479 => 7,  467 => 6,  458 => 305,  456 => 304,  450 => 301,  446 => 300,  440 => 297,  435 => 295,  429 => 292,  423 => 289,  415 => 284,  407 => 279,  379 => 254,  371 => 249,  364 => 245,  356 => 240,  347 => 234,  338 => 228,  323 => 216,  262 => 158,  254 => 153,  227 => 128,  225 => 127,  212 => 116,  203 => 105,  201 => 104,  196 => 102,  189 => 97,  181 => 92,  178 => 91,  174 => 89,  171 => 88,  168 => 87,  165 => 86,  162 => 85,  160 => 84,  157 => 83,  155 => 82,  140 => 69,  138 => 68,  111 => 44,  101 => 37,  82 => 22,  80 => 21,  75 => 19,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  35 => 6,  28 => 1,);
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
                        <a class=\"nav-link\" href=\"#\">
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
                        <a class=\"btn miva\" href=\"\"><i class=\"fa fa-envelope\"></i> ENVOYER MAIL</a>
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

                <form role=\"form\" id=\"form-contact\" autocomplete=\"off\" method=\"post\" action=\"\">
                    <div class=\"row\">
                        <div class=\"input-field col-md-6 col-sm-12\">
                            <input name=\"name\" type=\"text\" class=\"validate\" required=\"true\">
                            <label for=\"name\" style=\"left: 0.75rem;\">Nom</label>
                        </div>
                        <div class=\"input-field col-md-6 col-sm-12\">
                            <input name=\"email\" type=\"email\" class=\"validate\" required=\"true\">
                            <label for=\"email\" style=\"left: 0.75rem;\">Email</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col-md-12 col-sm-12\">
                            <textarea name=\"message\" rows=\"5\" class=\"validate materialize-textarea\" style=\"border:0 solid #000;border-bottom:1px solid #999;height: 50px\"> </textarea>
                            <label for=\"message\" style=\"left: 0.75rem;\">Message</label>
                        </div>
                    </div>
                    <div class=\"row\">

                        <button type=\"submit\" title=\"Se connecter\" class=\"btn miva m-b-lg\" data-style=\"slide-right\" id=\"valid_mail\">
                            <span class=\"ladda-label\">Envoyer &nbsp;&nbsp;<i class=\"mdi-content-send\" style=\"font-size: 1rem;\"></i></span>
                            <span class=\"ladda-spinner\"></span>
                        </button>
                        <button type=\"reset\" id=\"reset_mail\" class=\"m-b-lg\"> <i class=\"fa fa-eraser\"></i> </button>
                    </div>
                </form>

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

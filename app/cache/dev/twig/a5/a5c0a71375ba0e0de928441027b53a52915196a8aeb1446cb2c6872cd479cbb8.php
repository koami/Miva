<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_c1bd811b770c3e3d1f37f3109ec1e0c20ff71649908f9777e42cfa4c353802c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/defaultLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f78976e6ea348ebee55fe50827294d4ea4d0f282e42fed7cd4f1d87c0d9e1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f78976e6ea348ebee55fe50827294d4ea4d0f282e42fed7cd4f1d87c0d9e1f9->enter($__internal_4f78976e6ea348ebee55fe50827294d4ea4d0f282e42fed7cd4f1d87c0d9e1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f78976e6ea348ebee55fe50827294d4ea4d0f282e42fed7cd4f1d87c0d9e1f9->leave($__internal_4f78976e6ea348ebee55fe50827294d4ea4d0f282e42fed7cd4f1d87c0d9e1f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fa51b6347bca239e836f3d4b83af9919ecf7084a4f26e9320dd490650e86c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa51b6347bca239e836f3d4b83af9919ecf7084a4f26e9320dd490650e86c56->enter($__internal_0fa51b6347bca239e836f3d4b83af9919ecf7084a4f26e9320dd490650e86c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<div align=\"center\" >
    <img class=\"img-responsive\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ban.jpg"), "html", null, true);
        echo "\">
</div>
    
<main>

    <!--Main layout-->
    <div class=\"container\">
        <div class=\"row\">

            <!--Sidebar-->
            <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--/. Sidebar navigation -->
                <div class=\"panel-group\" id=\"accordion\">

                    ";
        // line 21
        $context["ray"] = 1;
        // line 22
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rayons"]) ? $context["rayons"] : $this->getContext($context, "rayons")));
        foreach ($context['_seq'] as $context["_key"] => $context["rayon"]) {
            // line 23
            echo "
                    <div class=\"panel panel-default\">

                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">

                                ";
            // line 29
            if ((((isset($context["ray"]) ? $context["ray"] : $this->getContext($context, "ray")) % 2) == 0)) {
                // line 30
                echo "                                <a data-toggle=\"collapse\" data-parent=\"#accordion\"
                                   href=\"#";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["rayon"], "nom", array()), "html", null, true);
                echo "\" class=\"btn grey\"
                                   style=\"display: block\">
                                    ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["rayon"], "nom", array()), "html", null, true);
                echo "
                                </a>
                                ";
            } else {
                // line 36
                echo "                                <a data-toggle=\"collapse\" data-parent=\"#accordion\"
                                   href=\"#";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["rayon"], "nom", array()), "html", null, true);
                echo "\" class=\"btn orange\"
                                   style=\"display: block\">
                                    ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["rayon"], "nom", array()), "html", null, true);
                echo "
                                </a>
                                ";
            }
            // line 42
            echo "                            </h4>
                        </div>

                        ";
            // line 45
            $context["cat"] = 0;
            // line 46
            echo "                        <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rayon"], "nom", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                            <div class=\"list-group\">
                                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rayon"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 49
                echo "
                                    ";
                // line 50
                if (((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")) == 0)) {
                    // line 51
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                    echo "\"
                                       class=\"list-group-item active\">
                                        ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo "
                                    </a>
                                    ";
                } else {
                    // line 56
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                    echo "\"
                                       class=\"list-group-item\">
                                        ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo "
                                    </a>
                                    ";
                }
                // line 61
                echo "                                    ";
                $context["cat"] = 1;
                // line 62
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                            </div>
                        </div>

                    </div>
                    ";
            // line 67
            $context["ray"] = ((isset($context["ray"]) ? $context["ray"] : $this->getContext($context, "ray")) + 1);
            // line 68
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rayon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div>

                <br/>

                <div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
                    <h4>NEWSLETTERS</h4>
                    <br>
                    <div class=\"card\">
                        <div class=\"card-block\">
                            <p><strong>Souscrire aux newsletter</strong></p>
                            <p>Vous recevrez un mail de confirmation dans votre boite.</p>
                            <div class=\"md-form\">
                                <i class=\"fa fa-user prefix\"></i>
                                <label for=\"form1\">Votre nom</label>
                                <input type=\"text\" id=\"form1\" class=\"\">
                            </div>
                            <div class=\"md-form\">
                                <i class=\"fa fa-envelope prefix\"></i>
                                <label for=\"form2\">Votre mail</label>
                                <input type=\"text\" id=\"form2\" class=\"\">
                            </div>
                            <button class=\"btn btn-large miva waves-effect waves-light\">S'abonner</button>

                        </div>
                    </div>
                </div>
                <div align=\"center\">
                    <img class=\"img-responsive\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/miva-lay.jpg"), "html", null, true);
        echo "\"/>
                </div>

            </div>
            <!--/.Sidebar-->

            <!--Main column-->
            <div class=\"col-lg-8\">

                <!--First row-->
                <div class=\"row wow fadeIn\" data-wow-delay=\"0.4s\">
                    <div class=\"col-lg-12\">
                        <div class=\"divider-new\">
                            <h2 class=\"h2-responsive\">
                                Qu'y a t-il de nouveau?
                            </h2>
                        </div>

                        <!--Carousel Wrapper-->
                        <div id=\"carousel-example-1\"
                             class=\"carousel slide carousel-fade\"
                             data-ride=\"carousel\">

                            <!--Indicators-->
                            <ol class=\"carousel-indicators\">

                                <li data-target=\"#carousel-example-1z\"
                                    data-slide-to=\"0\" class=\"active\"></li>

                                <li data-target=\"#carousel-example-1z\"
                                    data-slide-to=\"1\"></li>

                                <li data-target=\"#carousel-example-1z\"
                                    data-slide-to=\"2\"></li>
                            </ol>
                            <!--/.Indicators-->

                            <!--Slides-->
                            <div class=\"carousel-inner\" role=\"listbox\">
                                    <!--First slide-->
                                    <div class=\"carousel-item active\">
                                        <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-1.jpg"), "html", null, true);
        echo "\"
                                             alt=\"First slide\">
                                        <div class=\"carousel-caption\">
                                            <h4>Collection</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/First slide-->

                                    <!--Second slide-->
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-2.jpg"), "html", null, true);
        echo "\"
                                             alt=\"Second slide\">
                                        <div class=\"carousel-caption\">
                                            <h4>Tout neuf</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Second slide-->

                                    <!--Third slide-->
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-3.jpg"), "html", null, true);
        echo "\"
                                             alt=\"Third slide\">
                                        <div class=\"carousel-caption\">
                                            <h4>Seulement a 15.000 francs</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Third slide-->
                            </div>
                            <!--/.Slides-->

                            <!--Controls-->
                            <a class=\"carousel-control-prev\"
                               href=\"#carousel-example-1z\" role=\"button\"
                               data-slide=\"prev\" style=\"width: 5%\">
                                <span class=\"carousel-control-prev-icon\"
                                      aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>

                            <a class=\"carousel-control-next\"
                               href=\"#carousel-example-1z\" role=\"button\"
                               data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\"
                                      aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            <!--/.Controls-->

                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                </div>
                <!--/.First row-->

                <br>
                <hr class=\"extra-margins\">

                <!--Second row-->
                <div class=\"row\" align=\"center\">
                    <!--First columnn-->
                    ";
        // line 200
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 201
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 202
                echo "                            <div class=\"m-t-md col-lg-4 col-md-4 col-sm-6\">
                                <div class=\"card  wow fadeIn\" data-wow-delay=\"0.4s\">

                                    <a href=\"#\" style=\"text-decoration: none\">

                                        ";
                // line 207
                if (($this->getAttribute($context["produit"], "garantie", array()) != null)) {
                    // line 208
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/gar.png"), "html", null, true);
                    echo "\"
                                                 style=\"position: absolute;
                                                        width: 65px;margin-left:-15px;
                                                        margin-top:-15px;z-index: 1\"/>
                                        ";
                }
                // line 213
                echo "
                                        <div class=\"pub\">

                                            <!--Card image-->
                                            <div class=\"view overlay hm-zoom\">
                                                <a href=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">
                                                <img
                                                    src=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produitThumb"), "html", null, true);
                echo "\"
                                                    alt=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\"
                                                    class=\"img-fluid\" >
                                                </a>
                                            </div>

                                            <div class=\"price\">
                                                ";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo "F CFA
                                            </div>

                                            <img src=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/prod.png"), "html", null, true);
                echo "\" class=\"pos\"/>

                                            <div class=\"card-block\">

                                                <!--Title-->
                                                <p style=\"position: absolute\">
                                                <span class=\"card-title\" style=\"font-size: 20px\">
                                                    ";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "
                                                </span>

                                                ";
                // line 241
                echo "                                                ";
                if (($this->getAttribute($context["produit"], "reduction", array()) != 0)) {
                    // line 242
                    echo "                                                    <span class=\"badge green \" style=\"font-weight: 700\">
                                                        - ";
                    // line 243
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reduction", array()), "html", null, true);
                    echo "%
                                                    </span>
                                                    <br>
                                                ";
                }
                // line 247
                echo "                                                </p>

                                                <div style=\"margin-top: 70px\">
                                                ";
                // line 250
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 251
                    echo "                                                    <a class=\"btn btn-large waves-effect waves-light miva produitAjax\"
                                                       style=\"float: left;\" id=\"pro";
                    // line 252
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
                    echo "\"
                                                       data-path=\"";
                    // line 253
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\" >
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </a>

                                                ";
                }
                // line 258
                echo "                                                </div>

                                            </div>

                                            <div class=\"icon\" style=\"margin-top: 15px;margin-left: 130px;\" id=\"rating\">
                                                <p>";
                // line 263
                echo $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\StarRatingExtension')->myStarBar(5, $this->getAttribute($context["produit"], "id", array()), 15);
                echo "</p>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "
                    ";
        } else {
            // line 274
            echo "                        Aucun produit

                    ";
        }
        // line 277
        echo "                    <!--First columnn-->

                </div>
                <div class=\"row m-t-md\">
                    <a class=\"red-text text-darken-4 btn-large waves-effect waves-light\"
                       href=\"";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirPlus");
        echo "\" style=\"display:block\"> <i class=\"fa fa-arrow-right\"></i> TOUS LES ARTICLES
                    </a>
                </div>
                <!--/.Second row-->

            </div>
            <!--/.Main column-->

        </div>
    
    </div>
    <!--/.Main layout-->
    <!--Partenaire-->
    <div id=\"partenaire\" class=\"zone\">
        <div>
            <h3>Qui sont nos partenaires ?</h3>
            <p style=\"margin-top: 20px\">Nous avons des entites derriere nous comme:</p>
        </div>


        <!--Carousel Wrapper-->
        <div id=\"carousel-example-1\" class=\"carousel slide carousel-fade\"
             data-ride=\"carousel\">
            <!--Indicators-->
            <!--/.Indicators-->

            <!--Slides-->
            <div class=\"carousel-inner\" role=\"listbox\">

                <!--First slide-->
                <div class=\"carousel-item active\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>
                    </div>
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class=\"carousel-item\">
                    <div class=\"row\">

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>
                    </div>
                </div>
                <!--/Second slide-->
            </div>
            <!--/.Slides-->

            <!--Controls-->
            <div style=\"\">
                <a class=\"carousel-control-prev\" href=\"#carousel-example-1\"
                   role=\"button\" data-slide=\"prev\">
                    <span class=\"fa fa-chevron-left\" style=\"font-size: 2em;margin-top: 30px\"
                          aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"carousel-control-next\"
                   href=\"#carousel-example-1\" role=\"button\"
                   data-slide=\"next\">
                    <span class=\"fa fa-chevron-right\" style=\"font-size: 2em;margin-top: 30px\"
                          aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <!--/.Controls-->

        </div>
        <!--/.Carousel Wrapper-->

    </div>
    <!--End Partenaire-->

</main>

";
        
        $__internal_0fa51b6347bca239e836f3d4b83af9919ecf7084a4f26e9320dd490650e86c56->leave($__internal_0fa51b6347bca239e836f3d4b83af9919ecf7084a4f26e9320dd490650e86c56_prof);

    }

    // line 408
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_887ef0483508a7af32f7c817b5d8d7257b781ca9163a483c421a22a79791f6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887ef0483508a7af32f7c817b5d8d7257b781ca9163a483c421a22a79791f6cb->enter($__internal_887ef0483508a7af32f7c817b5d8d7257b781ca9163a483c421a22a79791f6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 409
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Panier -->
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/panier.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_887ef0483508a7af32f7c817b5d8d7257b781ca9163a483c421a22a79791f6cb->leave($__internal_887ef0483508a7af32f7c817b5d8d7257b781ca9163a483c421a22a79791f6cb_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 411,  641 => 409,  635 => 408,  592 => 371,  584 => 366,  576 => 361,  568 => 356,  561 => 352,  553 => 347,  538 => 335,  531 => 331,  524 => 327,  517 => 323,  510 => 319,  503 => 315,  467 => 282,  460 => 277,  455 => 274,  451 => 272,  436 => 263,  429 => 258,  421 => 253,  417 => 252,  414 => 251,  412 => 250,  407 => 247,  400 => 243,  397 => 242,  394 => 241,  388 => 237,  378 => 230,  372 => 227,  363 => 221,  359 => 220,  354 => 218,  347 => 213,  338 => 208,  336 => 207,  329 => 202,  324 => 201,  322 => 200,  278 => 159,  264 => 148,  250 => 137,  206 => 96,  177 => 69,  171 => 68,  169 => 67,  163 => 63,  157 => 62,  154 => 61,  148 => 58,  142 => 56,  136 => 53,  130 => 51,  128 => 50,  125 => 49,  121 => 48,  115 => 46,  113 => 45,  108 => 42,  102 => 39,  97 => 37,  94 => 36,  88 => 33,  83 => 31,  80 => 30,  78 => 29,  70 => 23,  65 => 22,  63 => 21,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/defaultLayout.html.twig\" %}

{% block body %}
    
<div align=\"center\" >
    <img class=\"img-responsive\" src=\"{{ asset('img/ban.jpg') }}\">
</div>
    
<main>

    <!--Main layout-->
    <div class=\"container\">
        <div class=\"row\">

            <!--Sidebar-->
            <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--/. Sidebar navigation -->
                <div class=\"panel-group\" id=\"accordion\">

                    {% set ray = 1 %}
                    {% for rayon in rayons %}

                    <div class=\"panel panel-default\">

                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">

                                {% if (ray % 2) == 0  %}
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\"
                                   href=\"#{{ rayon.nom }}\" class=\"btn grey\"
                                   style=\"display: block\">
                                    {{ rayon.nom }}
                                </a>
                                {% else %}
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\"
                                   href=\"#{{ rayon.nom }}\" class=\"btn orange\"
                                   style=\"display: block\">
                                    {{ rayon.nom }}
                                </a>
                                {% endif %}
                            </h4>
                        </div>

                        {% set cat = 0 %}
                        <div id=\"{{ rayon.nom }}\" class=\"panel-collapse collapse\">
                            <div class=\"list-group\">
                                {% for categorie in rayon.categories %}

                                    {% if cat == 0 %}
                                    <a href=\"{{ path('articles', { 'id' : categorie.id }) }}\"
                                       class=\"list-group-item active\">
                                        {{ categorie.nom }}
                                    </a>
                                    {% else %}
                                    <a href=\"{{ path('articles', { 'id' : categorie.id }) }}\"
                                       class=\"list-group-item\">
                                        {{ categorie.nom }}
                                    </a>
                                    {% endif %}
                                    {% set cat = 1 %}
                                {% endfor %}
                            </div>
                        </div>

                    </div>
                    {% set ray = ray + 1 %}
                    {% endfor %}
                </div>

                <br/>

                <div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
                    <h4>NEWSLETTERS</h4>
                    <br>
                    <div class=\"card\">
                        <div class=\"card-block\">
                            <p><strong>Souscrire aux newsletter</strong></p>
                            <p>Vous recevrez un mail de confirmation dans votre boite.</p>
                            <div class=\"md-form\">
                                <i class=\"fa fa-user prefix\"></i>
                                <label for=\"form1\">Votre nom</label>
                                <input type=\"text\" id=\"form1\" class=\"\">
                            </div>
                            <div class=\"md-form\">
                                <i class=\"fa fa-envelope prefix\"></i>
                                <label for=\"form2\">Votre mail</label>
                                <input type=\"text\" id=\"form2\" class=\"\">
                            </div>
                            <button class=\"btn btn-large miva waves-effect waves-light\">S'abonner</button>

                        </div>
                    </div>
                </div>
                <div align=\"center\">
                    <img class=\"img-responsive\" src=\"{{ asset('img/miva-lay.jpg') }}\"/>
                </div>

            </div>
            <!--/.Sidebar-->

            <!--Main column-->
            <div class=\"col-lg-8\">

                <!--First row-->
                <div class=\"row wow fadeIn\" data-wow-delay=\"0.4s\">
                    <div class=\"col-lg-12\">
                        <div class=\"divider-new\">
                            <h2 class=\"h2-responsive\">
                                Qu'y a t-il de nouveau?
                            </h2>
                        </div>

                        <!--Carousel Wrapper-->
                        <div id=\"carousel-example-1\"
                             class=\"carousel slide carousel-fade\"
                             data-ride=\"carousel\">

                            <!--Indicators-->
                            <ol class=\"carousel-indicators\">

                                <li data-target=\"#carousel-example-1z\"
                                    data-slide-to=\"0\" class=\"active\"></li>

                                <li data-target=\"#carousel-example-1z\"
                                    data-slide-to=\"1\"></li>

                                <li data-target=\"#carousel-example-1z\"
                                    data-slide-to=\"2\"></li>
                            </ol>
                            <!--/.Indicators-->

                            <!--Slides-->
                            <div class=\"carousel-inner\" role=\"listbox\">
                                    <!--First slide-->
                                    <div class=\"carousel-item active\">
                                        <img src=\"{{ asset('img/img-1.jpg') }}\"
                                             alt=\"First slide\">
                                        <div class=\"carousel-caption\">
                                            <h4>Collection</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/First slide-->

                                    <!--Second slide-->
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('img/img-2.jpg') }}\"
                                             alt=\"Second slide\">
                                        <div class=\"carousel-caption\">
                                            <h4>Tout neuf</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Second slide-->

                                    <!--Third slide-->
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('img/img-3.jpg') }}\"
                                             alt=\"Third slide\">
                                        <div class=\"carousel-caption\">
                                            <h4>Seulement a 15.000 francs</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Third slide-->
                            </div>
                            <!--/.Slides-->

                            <!--Controls-->
                            <a class=\"carousel-control-prev\"
                               href=\"#carousel-example-1z\" role=\"button\"
                               data-slide=\"prev\" style=\"width: 5%\">
                                <span class=\"carousel-control-prev-icon\"
                                      aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>

                            <a class=\"carousel-control-next\"
                               href=\"#carousel-example-1z\" role=\"button\"
                               data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\"
                                      aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            <!--/.Controls-->

                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                </div>
                <!--/.First row-->

                <br>
                <hr class=\"extra-margins\">

                <!--Second row-->
                <div class=\"row\" align=\"center\">
                    <!--First columnn-->
                    {% if produits|length != 0 %}
                        {% for produit in produits %}
                            <div class=\"m-t-md col-lg-4 col-md-4 col-sm-6\">
                                <div class=\"card  wow fadeIn\" data-wow-delay=\"0.4s\">

                                    <a href=\"#\" style=\"text-decoration: none\">

                                        {% if produit.garantie != null %}
                                            <img src=\"{{ asset('img/gar.png') }}\"
                                                 style=\"position: absolute;
                                                        width: 65px;margin-left:-15px;
                                                        margin-top:-15px;z-index: 1\"/>
                                        {% endif %}

                                        <div class=\"pub\">

                                            <!--Card image-->
                                            <div class=\"view overlay hm-zoom\">
                                                <a href=\"{{ path('presentation', { 'id' : produit.id }) }}\">
                                                <img
                                                    src=\"{{ produit.image.AssetPath|imagine_filter('produitThumb') }}\"
                                                    alt=\"{{ produit.image.name }}\"
                                                    class=\"img-fluid\" >
                                                </a>
                                            </div>

                                            <div class=\"price\">
                                                {{ produit.prix }}F CFA
                                            </div>

                                            <img src=\"{{ asset('img/prod.png') }}\" class=\"pos\"/>

                                            <div class=\"card-block\">

                                                <!--Title-->
                                                <p style=\"position: absolute\">
                                                <span class=\"card-title\" style=\"font-size: 20px\">
                                                    {{ produit.nom }}
                                                </span>

                                                {# Reduction #}
                                                {% if produit.reduction != 0 %}
                                                    <span class=\"badge green \" style=\"font-weight: 700\">
                                                        - {{ produit.reduction }}%
                                                    </span>
                                                    <br>
                                                {% endif %}
                                                </p>

                                                <div style=\"margin-top: 70px\">
                                                {% if panier[produit.id] is not defined %}
                                                    <a class=\"btn btn-large waves-effect waves-light miva produitAjax\"
                                                       style=\"float: left;\" id=\"pro{{ produit.id }}\"
                                                       data-path=\"{{ path('ajouterPanier', { 'id' : produit.id }) }}\" >
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </a>

                                                {% endif %}
                                                </div>

                                            </div>

                                            <div class=\"icon\" style=\"margin-top: 15px;margin-left: 130px;\" id=\"rating\">
                                                <p>{{ starBar(5, produit.id, 15)|raw }}</p>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>

                        {% endfor %}

                    {% else %}
                        Aucun produit

                    {% endif %}
                    <!--First columnn-->

                </div>
                <div class=\"row m-t-md\">
                    <a class=\"red-text text-darken-4 btn-large waves-effect waves-light\"
                       href=\"{{ path('voirPlus') }}\" style=\"display:block\"> <i class=\"fa fa-arrow-right\"></i> TOUS LES ARTICLES
                    </a>
                </div>
                <!--/.Second row-->

            </div>
            <!--/.Main column-->

        </div>
    
    </div>
    <!--/.Main layout-->
    <!--Partenaire-->
    <div id=\"partenaire\" class=\"zone\">
        <div>
            <h3>Qui sont nos partenaires ?</h3>
            <p style=\"margin-top: 20px\">Nous avons des entites derriere nous comme:</p>
        </div>


        <!--Carousel Wrapper-->
        <div id=\"carousel-example-1\" class=\"carousel slide carousel-fade\"
             data-ride=\"carousel\">
            <!--Indicators-->
            <!--/.Indicators-->

            <!--Slides-->
            <div class=\"carousel-inner\" role=\"listbox\">

                <!--First slide-->
                <div class=\"carousel-item active\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>
                    </div>
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class=\"carousel-item\">
                    <div class=\"row\">

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>

                        <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-6\">
                            <img class=\"img-thumbnail\"
                                 src=\"{{ asset('img/partenaire.jpg')}}\" alt=\"First slide\">
                        </div>
                    </div>
                </div>
                <!--/Second slide-->
            </div>
            <!--/.Slides-->

            <!--Controls-->
            <div style=\"\">
                <a class=\"carousel-control-prev\" href=\"#carousel-example-1\"
                   role=\"button\" data-slide=\"prev\">
                    <span class=\"fa fa-chevron-left\" style=\"font-size: 2em;margin-top: 30px\"
                          aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"carousel-control-next\"
                   href=\"#carousel-example-1\" role=\"button\"
                   data-slide=\"next\">
                    <span class=\"fa fa-chevron-right\" style=\"font-size: 2em;margin-top: 30px\"
                          aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <!--/.Controls-->

        </div>
        <!--/.Carousel Wrapper-->

    </div>
    <!--End Partenaire-->

</main>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Panier -->
    <script src=\"{{ asset('js/panier.js') }}\"></script>
{% endblock %}", "EcommerceBundle:Default:produits/layout/produits.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/produits.html.twig");
    }
}

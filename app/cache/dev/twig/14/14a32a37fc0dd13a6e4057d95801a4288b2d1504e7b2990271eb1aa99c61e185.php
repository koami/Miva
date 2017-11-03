<?php

/* EcommerceBundle:Default:produits/layout/articles.html.twig */
class __TwigTemplate_6d7b64fcbfe51ca5653cc41b77d4c1fc1b5dd7aa2282807e9d6784f0f300f0ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/defaultLayout.html.twig", "EcommerceBundle:Default:produits/layout/articles.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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
        $__internal_63b8be7a973f15094ae78e9ca053155e244887e66c7d07ef32a59421cb5843b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b8be7a973f15094ae78e9ca053155e244887e66c7d07ef32a59421cb5843b7->enter($__internal_63b8be7a973f15094ae78e9ca053155e244887e66c7d07ef32a59421cb5843b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b8be7a973f15094ae78e9ca053155e244887e66c7d07ef32a59421cb5843b7->leave($__internal_63b8be7a973f15094ae78e9ca053155e244887e66c7d07ef32a59421cb5843b7_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_71d276b343661f1977c4b14cb3a8f78b18204668bb55791ecfeb8b223d92f637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d276b343661f1977c4b14cb3a8f78b18204668bb55791ecfeb8b223d92f637->enter($__internal_71d276b343661f1977c4b14cb3a8f78b18204668bb55791ecfeb8b223d92f637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MIVA | Articles";
        
        $__internal_71d276b343661f1977c4b14cb3a8f78b18204668bb55791ecfeb8b223d92f637->leave($__internal_71d276b343661f1977c4b14cb3a8f78b18204668bb55791ecfeb8b223d92f637_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_82a948099efbb51919fc675256ea51fa57482012f89849c5b779f654b257f778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a948099efbb51919fc675256ea51fa57482012f89849c5b779f654b257f778->enter($__internal_82a948099efbb51919fc675256ea51fa57482012f89849c5b779f654b257f778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <main>

        <!--Main layout-->
        <div class=\"container\">
            <CENTER>
                <div id=\"categorie\">
                    <!--Carousel Wrapper-->
                    <div id=\"carousel-example-1z\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

                        <!--Slides-->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <!--First slide-->
                            <div class=\"carousel-item active\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 grey lighten-4 \">
                                            <a href=\"\"><h2 class=\"style\">Vetement</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 pink lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Chaussure</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 green lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Bijoux</h2></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class=\"carousel-item\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 blue lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Cuisine</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 orange lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Consommable</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 yellow lighten-4\">
                                            <a href=\"\"></a><h2 class=\"style\">Meuble</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Second slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\" style=\"color: black\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" style=\"box-shadow: 0 2px 2px rgba(0,0,0,0.5);background-color: black;\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\" style=\"box-shadow: 0 2px 2px rgba(0,0,0,0.5);background-color: black;\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
                <!--End Partenaire-->

            </CENTER>

            <hr/>

            <div class=\"row\">

                <!--Sidebar-->
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.2s\">

                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 79
            echo "                        <div class=\"widget-wrapper\">
                            ";
            // line 80
            $context["i"] = 0;
            // line 81
            echo "                            <div class=\"list-group\">
                                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cate"], "subCategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategorie"]) {
                // line 83
                echo "                                    ";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2) == 0)) {
                    // line 84
                    echo "                                        <a href=\"#\" class=\"list-group-item active\">
                                            ";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subCategorie"], "nom", array()), "html", null, true);
                    echo "
                                        </a>
                                    ";
                } else {
                    // line 88
                    echo "                                        <a href=\"#\" class=\"list-group-item\">
                                            ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subCategorie"], "nom", array()), "html", null, true);
                    echo "
                                        </a>
                                    ";
                }
                // line 92
                echo "                                    ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 93
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class=\"col-lg-8\">
                    <div class=\"row\" align=\"center\">
                        <!--First columnn-->
                        ";
        // line 105
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 106
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 107
                echo "                                <div class=\"m-t-md col-lg-4 col-md-4 col-sm-6\">
                                    <div class=\"card  wow fadeIn\" data-wow-delay=\"0.4s\">

                                        <a href=\"#\" style=\"text-decoration: none\">

                                            ";
                // line 112
                if (($this->getAttribute($context["produit"], "garantie", array()) != null)) {
                    // line 113
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/gar.png"), "html", null, true);
                    echo "\"
                                                     style=\"position: absolute;
                                                        width: 65px;margin-left:-15px;
                                                        margin-top:-15px;z-index: 1\"/>
                                            ";
                }
                // line 118
                echo "
                                            <div class=\"pub\">

                                                <!--Card image-->
                                                <div class=\"view overlay hm-zoom\">
                                                    <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">
                                                        <img
                                                                src=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produitThumb"), "html", null, true);
                echo "\"
                                                                alt=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\"
                                                                class=\"img-fluid\" >
                                                    </a>
                                                </div>

                                                <div class=\"price\">
                                                    ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo "F CFA
                                                </div>

                                                <img src=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/prod.png"), "html", null, true);
                echo "\" style=\"position:
                                                 absolute;width: 75px; margin-left:153px;margin-top: -15px; z-index: 1\"/>

                                                <div class=\"card-block\">

                                                    <!--Title-->
                                                    <p style=\"position: absolute\">
                                                <span class=\"card-title\" style=\"font-size: 20px\">
                                                    ";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "
                                                </span>

                                                        ";
                // line 147
                echo "                                                        ";
                if (($this->getAttribute($context["produit"], "reduction", array()) != 0)) {
                    // line 148
                    echo "                                                            <span class=\"badge green \" style=\"font-weight: 700\">
                                                        - ";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reduction", array()), "html", null, true);
                    echo "%
                                                    </span>
                                                            <br>
                                                        ";
                }
                // line 153
                echo "                                                    </p>

                                                    <div style=\"margin-top: 70px\">
                                                        ";
                // line 156
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 157
                    echo "                                                            <a class=\"btn btn-large waves-effect waves-light miva produitAjax\"
                                                               style=\"float: left;\" id=\"pro";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
                    echo "\"
                                                               data-path=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\" >
                                                                <i class=\"fa fa-shopping-cart\"></i>
                                                            </a>

                                                        ";
                }
                // line 164
                echo "                                                    </div>

                                                </div>

                                                <div class=\"icon\" style=\"margin-top: 15px;margin-left: 130px;\" id=\"rating\">
                                                    <p>";
                // line 169
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
            // line 178
            echo "
                        ";
        } else {
            // line 180
            echo "                            <div align=\"center\">
                                <img class=\"img-responsive\" src=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fiasco.jpg"), "html", null, true);
            echo "\"/>
                            </div>

                        ";
        }
        // line 185
        echo "                        <!--First columnn-->

                    </div>

                    <div class=\"row\">
                        ";
        // line 190
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        echo "
                    </div>
                </div>
                <!--/.Main column-->

            </div>

        </div>
        <!--/.Main layout-->

    </main>

";
        
        $__internal_82a948099efbb51919fc675256ea51fa57482012f89849c5b779f654b257f778->leave($__internal_82a948099efbb51919fc675256ea51fa57482012f89849c5b779f654b257f778_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d8f48d81fbe0db5ee070302566766fb3182c72fff546324dee98640818cacb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8f48d81fbe0db5ee070302566766fb3182c72fff546324dee98640818cacb2->enter($__internal_0d8f48d81fbe0db5ee070302566766fb3182c72fff546324dee98640818cacb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Panier -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/panier.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0d8f48d81fbe0db5ee070302566766fb3182c72fff546324dee98640818cacb2->leave($__internal_0d8f48d81fbe0db5ee070302566766fb3182c72fff546324dee98640818cacb2_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 207,  368 => 205,  362 => 204,  342 => 190,  335 => 185,  328 => 181,  325 => 180,  321 => 178,  306 => 169,  299 => 164,  291 => 159,  287 => 158,  284 => 157,  282 => 156,  277 => 153,  270 => 149,  267 => 148,  264 => 147,  258 => 143,  247 => 135,  241 => 132,  232 => 126,  228 => 125,  223 => 123,  216 => 118,  207 => 113,  205 => 112,  198 => 107,  193 => 106,  191 => 105,  181 => 97,  173 => 94,  167 => 93,  164 => 92,  158 => 89,  155 => 88,  149 => 85,  146 => 84,  143 => 83,  139 => 82,  136 => 81,  134 => 80,  131 => 79,  127 => 78,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
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

{% block titre %}MIVA | Articles{% endblock %}
{#{% block description %}{{ produit.description }}{% endblock %#}

{% block body %}

    <main>

        <!--Main layout-->
        <div class=\"container\">
            <CENTER>
                <div id=\"categorie\">
                    <!--Carousel Wrapper-->
                    <div id=\"carousel-example-1z\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

                        <!--Slides-->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <!--First slide-->
                            <div class=\"carousel-item active\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 grey lighten-4 \">
                                            <a href=\"\"><h2 class=\"style\">Vetement</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 pink lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Chaussure</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 green lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Bijoux</h2></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class=\"carousel-item\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 blue lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Cuisine</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 orange lighten-4\">
                                            <a href=\"\"><h2 class=\"style\">Consommable</h2></a>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 yellow lighten-4\">
                                            <a href=\"\"></a><h2 class=\"style\">Meuble</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Second slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\" style=\"color: black\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" style=\"box-shadow: 0 2px 2px rgba(0,0,0,0.5);background-color: black;\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\" style=\"box-shadow: 0 2px 2px rgba(0,0,0,0.5);background-color: black;\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
                <!--End Partenaire-->

            </CENTER>

            <hr/>

            <div class=\"row\">

                <!--Sidebar-->
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.2s\">

                    {% for cate in categorie %}
                        <div class=\"widget-wrapper\">
                            {% set i = 0 %}
                            <div class=\"list-group\">
                                {% for subCategorie in cate.subCategories %}
                                    {% if (i % 2) == 0 %}
                                        <a href=\"#\" class=\"list-group-item active\">
                                            {{ subCategorie.nom }}
                                        </a>
                                    {% else %}
                                        <a href=\"#\" class=\"list-group-item\">
                                            {{ subCategorie.nom }}
                                        </a>
                                    {% endif %}
                                    {% set i = i + 1 %}
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class=\"col-lg-8\">
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

                                                <img src=\"{{ asset('img/prod.png') }}\" style=\"position:
                                                 absolute;width: 75px; margin-left:153px;margin-top: -15px; z-index: 1\"/>

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
                            <div align=\"center\">
                                <img class=\"img-responsive\" src=\"{{ asset('img/fiasco.jpg') }}\"/>
                            </div>

                        {% endif %}
                        <!--First columnn-->

                    </div>

                    <div class=\"row\">
                        {{ knp_pagination_render(produits) }}
                    </div>
                </div>
                <!--/.Main column-->

            </div>

        </div>
        <!--/.Main layout-->

    </main>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Panier -->
    <script src=\"{{ asset('js/panier.js') }}\"></script>
{% endblock %}", "EcommerceBundle:Default:produits/layout/articles.html.twig", "C:\\wamp64\\www\\Miva\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/articles.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_a360baa531179eb21428768d4b88fc2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <!-- Header
    <header class=\"bg-warning py-5\">
        <div class=\"container px-4 px-lg-5 my-5\">
            <div class=\"text-center text-white\">
                <h1 class=\"display-4 fw-bolder\">Vos course simplifiées </h1>
                <p class=\"lead fw-normal text-black-50 text-capitalize shadow mb-0 bg-gradient\">Avec My French Epicery !</p>
            </div>
        </div>
    </header>-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <!-- Section-->
    <div class=\"bg-gradient\">
        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"Rechercher\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Hero Start -->
        <div class=\"container-fluid py-5 mb-5 hero-header\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-12 col-lg-7\">
                        <h4 class=\"mb-3 text-secondary\">Les meilleurs produits</h4>
                        <h1 class=\"mb-5 display-3 text-warning text-dark\">Fruits et légumes frais 100% français </h1>
                        <div class=\"position-relative mx-auto\">
                            <input class=\"form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Rechercher un produit frais\">
                            <button type=\"submit\" class=\"btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100 bg-black\" style=\"top: 0; right: 25%;\">Chercher</button>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-5\">
                        <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active rounded\">
                                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-img-1.png"), "html", null, true);
        echo "\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                                </div>
                                <div class=\"carousel-item rounded\">
                                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-img-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Légumes</a>
                                </div>
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Previous</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Featurs Section Start -->
        <div class=\"container-fluid features py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-car-side fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Livraison gratuite</h5>
                                <p class=\"mb-0\">Gratuite à partir de 30€</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-user-shield fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Paiement sécurisé</h5>
                                <p class=\"mb-0\">Sécurité à 100%</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Produits de qualité</h5>
                                <p class=\"mb-0\">Direct des producteurs</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Toujours à votre service</h5>
                                <p class=\"mb-0\">Nous sommes là pour vous</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->

        <!-- Fruits Shop Start-->
        <div class=\"container-fluid fruite py-5\">
            <div class=\"container py-5\">
                <div class=\"tab-class text-center\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-4 text-start\">
                            <h1>Notre sélections</h1>
                        </div>
                        <div class=\"col-lg-8 text-end\">
                            <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Tout les produits</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex py-2 m-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Vegetables</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Fruits</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-4\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Bread</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-5\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Meat</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"tab-content\">
                        <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raisins</h4>
                                                    <p>Plongez dans une expérience gustative exquise avec notre Raisin de Qualité Supérieure,
                                                        cultivé avec soin pour apporter à votre table le meilleur de la nature.
                                                        Savourez la fraîcheur sucrée de ces délicieuses baies,
                                                        cueillies à la perfection pour garantir une qualité exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€2.50 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raisins</h4>
                                                    <p>Plongez dans une expérience gustative exquise avec notre Raisin de Qualité Supérieure,
                                                        cultivé avec soin pour apporter à votre table le meilleur de la nature.
                                                        Savourez la fraîcheur sucrée de ces délicieuses baies,
                                                        cueillies à la perfection pour garantir une qualité exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€2.50 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Framboise</h4>
                                                    <p>Plongez dans l'expérience succulente de nos Framboises Fraîches, des baies d'une fraîcheur incomparable qui éveilleront vos papilles.
                                                        Cultivées avec soin, ces petites merveilles offrent une explosion de saveur à chaque dégustation.
                                                    </p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€1.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Découvrez l'ultime délice fruité avec nos Abricots Gourmands,
                                                        une expérience gustative raffinée alliant fraîcheur et douceur en chaque bouchée.
                                                        Cultivés avec passion et amour, ces fruits juteux sont le choix parfait
                                                        pour une expérience fruitée exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$3.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banane</h4>
                                                    <p>Découvrez la délicatesse sucrée de nos Bananes Mûres,
                                                        des fruits qui captureront votre palais dès la première bouchée.
                                                        Cultivées avec expertise, ces bananes offrent une expérience gustative crémeuse et nutritive,
                                                        parfaites pour satisfaire vos envies de douceur.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€1.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Explorez l'expérience rafraîchissante de nos Oranges Juteuses,
                                                        des agrumes soigneusement sélectionnés pour vous offrir une dose de vitamines et de saveurs éclatantes.
                                                        Cultivées avec attention pour apporter une note de fraîcheur à vos plats.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€3.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Découvrez l'ultime délice fruité avec nos Abricots Gourmands,
                                                        une expérience gustative raffinée alliant fraîcheur et douceur en chaque bouchée.
                                                        Cultivés avec passion et amour, ces fruits juteux sont le choix parfait
                                                        pour une expérience fruitée exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$3.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raisins</h4>
                                                    <p>Plongez dans une expérience gustative exquise avec notre Raisin de Qualité Supérieure,
                                                        cultivé avec soin pour apporter à votre table le meilleur de la nature.
                                                        Savourez la fraîcheur sucrée de ces délicieuses baies,
                                                        cueillies à la perfection pour garantir une qualité exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€2.50 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apple</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-4\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-5\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banana</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->

        <!-- Featurs Start -->
        <div class=\"container-fluid service py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 justify-content-center\">
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\" class=\"text-decoration-none\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/featur-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom bg-white\">
                                    <div class=\"service-content bg-white text-center p-4 rounded\">
                                        <h5 class=\"text-black\">Pommes Fraîches</h5>
                                        <h3 class=\"mb-0 text-black\">À - 20%</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\" class=\"text-decoration-none\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/featur-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom bg-white\">
                                    <div class=\"service-content bg-white text-center p-4 rounded\">
                                        <h5 class=\"text-black\">Rouge passion</h5>
                                        <h3 class=\"mb-0 text-black\">À savourer</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\" class=\"text-decoration-none\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/featur-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom bg-white\">
                                    <div class=\"service-content bg-white text-center p-4 rounded\">
                                        <h5 class=\"text-black\">Le vert pour la santé</h5>
                                        <h3 class=\"mb-0 text-black\">À ne pas rater</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->


        <!-- Banner Section Start-->
        <div class=\"container-fluid banner bg-light my-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"py-4\">
                            <h1 class=\"display-3 text-white\">Large Choix De Fruits</h1>
                            <p class=\"fw-normal display-3 text-dark mb-4\">dans Notre Épicerie</p>
                            <p class=\"mb-4 text-dark\">Explorez un paradis de saveurs et de couleurs avec notre rayon de fruits frais,
                                où la fraîcheur rencontre l'abondance,
                                offrant une palette vibrante de délices naturels prêts à égayer vos sens.</p>
                            <a href=\"#\" class=\"banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5\">ACHETER</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/baner-1.png"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute\" style=\"width: 140px; height: 140px; top: 0; left: 0;\">
                                <h1 style=\"font-size: 100px;\">1</h1>
                                <div class=\"d-flex flex-column\">
                                    <span class=\"h2 mb-0\">50€</span>
                                    <span class=\"h4 text-muted mb-0\">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
                    <h1 class=\"display-4\">Les plus vendus</h1>
                    <p>Découvrez notre rayon des produits les plus vendus, où l'excellence rencontre la popularité.
                        Chaque article soigneusement sélectionné incarne la satisfaction client,
                        offrant une expérience d'achat exceptionnelle à chaque instant</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/best-product-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle w-100\" alt=\"orange-img\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Orange BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">2.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-white\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/best-product-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Framboise BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/best-product-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Banane BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">2.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/best-product-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Abricot BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">4.50 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/best-product-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Raisin BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.50 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/best-product-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Pomme BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">1.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Orange BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">2.99 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Framboise BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.50 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Banane BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">2.99 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fruite-item-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Abricot BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"bg-light p-5 rounded\">
                    <div class=\"row g-4 justify-content-center\">

                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Nombre de clients satisfaits</h4>
                                <h1>3969</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>qualité du service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Certificats de qualités</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Produits disponibles</h4>
                                <h1>1789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class=\"container-fluid testimonial py-5\">
            <div class=\"container py-5\">
                <div class=\"testimonial-header text-center\">
                    <h4 class=\"text-warning\">Notre testament</h4>
                    <h1 class=\"display-5 mb-5 text-dark\">Paroles de nos clients  !</h1>
                </div>
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">John Doe</h4>
                                    <p class=\"m-0 pb-3\">Professeur</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Absolument conquise par cette épicerie en ligne ! Les produits sont d'une qualité exceptionnelle, chaque article respire la fraîcheur. La diversité de l'assortiment m'a permis de découvrir de nouveaux favoris. Le service client est efficace, répondant rapidement à mes questions. De plus, la livraison a été ponctuelle, assurant une expérience d'achat parfaite du début à la fin
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Craig Toumi</h4>
                                    <p class=\"m-0 pb-3\">Acteur</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Mon coup de cœur pour les courses en ligne ! La sélection de produits est impressionnante, allant des fruits frais aux produits secs. La navigation sur le site est intuitive, facilitant la recherche des articles désirés.
                                    La livraison a été rapide, les produits étaient soigneusement emballés.
                                    Un grand bravo à cette épicerie qui a su allier qualité, variété et efficacité logistique.
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sting.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Sting</h4>
                                    <p class=\"m-0 pb-3\">Chanteur</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Une expérience client exceptionnelle ! Les produits sont non seulement de première qualité, mais la présentation visuelle sur le site a également rendu le processus de commande agréable. La communication avec le service client était chaleureuse et professionnelle. Ma commande est arrivée à temps, les produits étaient frais et délicieux.
                                    Cette épicerie en ligne est devenue ma référence pour des achats alimentaires en toute confiance
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->
    </div>


    <!-- JavaScript Libraries -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1098 => 910,  1068 => 883,  1040 => 858,  960 => 781,  940 => 764,  920 => 747,  900 => 730,  878 => 711,  854 => 690,  830 => 669,  806 => 648,  782 => 627,  758 => 606,  725 => 576,  690 => 544,  674 => 531,  658 => 518,  624 => 487,  605 => 471,  586 => 455,  559 => 431,  540 => 415,  513 => 391,  494 => 375,  467 => 351,  448 => 335,  418 => 308,  396 => 289,  375 => 271,  353 => 252,  331 => 233,  310 => 215,  288 => 196,  266 => 177,  144 => 58,  137 => 54,  98 => 17,  88 => 16,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block header %}
    <!-- Header
    <header class=\"bg-warning py-5\">
        <div class=\"container px-4 px-lg-5 my-5\">
            <div class=\"text-center text-white\">
                <h1 class=\"display-4 fw-bolder\">Vos course simplifiées </h1>
                <p class=\"lead fw-normal text-black-50 text-capitalize shadow mb-0 bg-gradient\">Avec My French Epicery !</p>
            </div>
        </div>
    </header>-->
{% endblock %}
{% block content %}
    <!-- Section-->
    <div class=\"bg-gradient\">
        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"Rechercher\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Hero Start -->
        <div class=\"container-fluid py-5 mb-5 hero-header\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-12 col-lg-7\">
                        <h4 class=\"mb-3 text-secondary\">Les meilleurs produits</h4>
                        <h1 class=\"mb-5 display-3 text-warning text-dark\">Fruits et légumes frais 100% français </h1>
                        <div class=\"position-relative mx-auto\">
                            <input class=\"form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Rechercher un produit frais\">
                            <button type=\"submit\" class=\"btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100 bg-black\" style=\"top: 0; right: 25%;\">Chercher</button>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-5\">
                        <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active rounded\">
                                    <img src=\"{{ asset('img/hero-img-1.png') }}\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                                </div>
                                <div class=\"carousel-item rounded\">
                                    <img src=\"{{ asset('img/hero-img-2.jpg') }}\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Légumes</a>
                                </div>
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Previous</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Featurs Section Start -->
        <div class=\"container-fluid features py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-car-side fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Livraison gratuite</h5>
                                <p class=\"mb-0\">Gratuite à partir de 30€</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-user-shield fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Paiement sécurisé</h5>
                                <p class=\"mb-0\">Sécurité à 100%</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Produits de qualité</h5>
                                <p class=\"mb-0\">Direct des producteurs</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Toujours à votre service</h5>
                                <p class=\"mb-0\">Nous sommes là pour vous</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->

        <!-- Fruits Shop Start-->
        <div class=\"container-fluid fruite py-5\">
            <div class=\"container py-5\">
                <div class=\"tab-class text-center\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-4 text-start\">
                            <h1>Notre sélections</h1>
                        </div>
                        <div class=\"col-lg-8 text-end\">
                            <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Tout les produits</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex py-2 m-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Vegetables</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Fruits</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-4\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Bread</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-5\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Meat</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"tab-content\">
                        <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-5.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raisins</h4>
                                                    <p>Plongez dans une expérience gustative exquise avec notre Raisin de Qualité Supérieure,
                                                        cultivé avec soin pour apporter à votre table le meilleur de la nature.
                                                        Savourez la fraîcheur sucrée de ces délicieuses baies,
                                                        cueillies à la perfection pour garantir une qualité exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€2.50 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-5.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raisins</h4>
                                                    <p>Plongez dans une expérience gustative exquise avec notre Raisin de Qualité Supérieure,
                                                        cultivé avec soin pour apporter à votre table le meilleur de la nature.
                                                        Savourez la fraîcheur sucrée de ces délicieuses baies,
                                                        cueillies à la perfection pour garantir une qualité exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€2.50 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-2.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Framboise</h4>
                                                    <p>Plongez dans l'expérience succulente de nos Framboises Fraîches, des baies d'une fraîcheur incomparable qui éveilleront vos papilles.
                                                        Cultivées avec soin, ces petites merveilles offrent une explosion de saveur à chaque dégustation.
                                                    </p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€1.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-4.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Découvrez l'ultime délice fruité avec nos Abricots Gourmands,
                                                        une expérience gustative raffinée alliant fraîcheur et douceur en chaque bouchée.
                                                        Cultivés avec passion et amour, ces fruits juteux sont le choix parfait
                                                        pour une expérience fruitée exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$3.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-3.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banane</h4>
                                                    <p>Découvrez la délicatesse sucrée de nos Bananes Mûres,
                                                        des fruits qui captureront votre palais dès la première bouchée.
                                                        Cultivées avec expertise, ces bananes offrent une expérience gustative crémeuse et nutritive,
                                                        parfaites pour satisfaire vos envies de douceur.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€1.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-1.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Explorez l'expérience rafraîchissante de nos Oranges Juteuses,
                                                        des agrumes soigneusement sélectionnés pour vous offrir une dose de vitamines et de saveurs éclatantes.
                                                        Cultivées avec attention pour apporter une note de fraîcheur à vos plats.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€3.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-4.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Découvrez l'ultime délice fruité avec nos Abricots Gourmands,
                                                        une expérience gustative raffinée alliant fraîcheur et douceur en chaque bouchée.
                                                        Cultivés avec passion et amour, ces fruits juteux sont le choix parfait
                                                        pour une expérience fruitée exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$3.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-5.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raisins</h4>
                                                    <p>Plongez dans une expérience gustative exquise avec notre Raisin de Qualité Supérieure,
                                                        cultivé avec soin pour apporter à votre table le meilleur de la nature.
                                                        Savourez la fraîcheur sucrée de ces délicieuses baies,
                                                        cueillies à la perfection pour garantir une qualité exceptionnelle.</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€2.50 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-white\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-5.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-2.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-1.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-6.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <!-- <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div> -->
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apple</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-4\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-5.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-4.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-5\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-3.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banana</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-2.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/fruite-item-1.jpg') }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->

        <!-- Featurs Start -->
        <div class=\"container-fluid service py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 justify-content-center\">
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\" class=\"text-decoration-none\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"{{ asset('img/featur-1.jpg') }}\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom bg-white\">
                                    <div class=\"service-content bg-white text-center p-4 rounded\">
                                        <h5 class=\"text-black\">Pommes Fraîches</h5>
                                        <h3 class=\"mb-0 text-black\">À - 20%</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\" class=\"text-decoration-none\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"{{ asset('img/featur-2.jpg') }}\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom bg-white\">
                                    <div class=\"service-content bg-white text-center p-4 rounded\">
                                        <h5 class=\"text-black\">Rouge passion</h5>
                                        <h3 class=\"mb-0 text-black\">À savourer</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\" class=\"text-decoration-none\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"{{ asset('img/featur-3.jpg') }}\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom bg-white\">
                                    <div class=\"service-content bg-white text-center p-4 rounded\">
                                        <h5 class=\"text-black\">Le vert pour la santé</h5>
                                        <h3 class=\"mb-0 text-black\">À ne pas rater</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->


        <!-- Banner Section Start-->
        <div class=\"container-fluid banner bg-light my-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"py-4\">
                            <h1 class=\"display-3 text-white\">Large Choix De Fruits</h1>
                            <p class=\"fw-normal display-3 text-dark mb-4\">dans Notre Épicerie</p>
                            <p class=\"mb-4 text-dark\">Explorez un paradis de saveurs et de couleurs avec notre rayon de fruits frais,
                                où la fraîcheur rencontre l'abondance,
                                offrant une palette vibrante de délices naturels prêts à égayer vos sens.</p>
                            <a href=\"#\" class=\"banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5\">ACHETER</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative\">
                            <img src=\"{{ asset('img/baner-1.png') }}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute\" style=\"width: 140px; height: 140px; top: 0; left: 0;\">
                                <h1 style=\"font-size: 100px;\">1</h1>
                                <div class=\"d-flex flex-column\">
                                    <span class=\"h2 mb-0\">50€</span>
                                    <span class=\"h4 text-muted mb-0\">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
                    <h1 class=\"display-4\">Les plus vendus</h1>
                    <p>Découvrez notre rayon des produits les plus vendus, où l'excellence rencontre la popularité.
                        Chaque article soigneusement sélectionné incarne la satisfaction client,
                        offrant une expérience d'achat exceptionnelle à chaque instant</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('img/best-product-1.jpg') }}\" class=\"img-fluid rounded-circle w-100\" alt=\"orange-img\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Orange BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">2.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-white\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('img/best-product-2.jpg') }}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Framboise BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('img/best-product-3.jpg') }}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Banane BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">2.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('img/best-product-4.jpg') }}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Abricot BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">4.50 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('img/best-product-5.jpg') }}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Raisin BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.50 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('img/best-product-6.jpg') }}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5 text-decoration-none text-black\">Pomme BIO</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">1.99 €</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{ asset('img/fruite-item-1.jpg') }}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Orange BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">2.99 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{ asset('img/fruite-item-2.jpg') }}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Framboise BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.50 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{ asset('img/fruite-item-3.jpg') }}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Banane BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">2.99 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{ asset('img/fruite-item-4.jpg') }}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5 text-decoration-none text-black\">Abricot BIO</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star text-warning\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 €</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 bg-success text-warning\"><i class=\"fa fa-shopping-bag me-2 text-warning\"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"bg-light p-5 rounded\">
                    <div class=\"row g-4 justify-content-center\">

                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Nombre de clients satisfaits</h4>
                                <h1>3969</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>qualité du service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Certificats de qualités</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Produits disponibles</h4>
                                <h1>1789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class=\"container-fluid testimonial py-5\">
            <div class=\"container py-5\">
                <div class=\"testimonial-header text-center\">
                    <h4 class=\"text-warning\">Notre testament</h4>
                    <h1 class=\"display-5 mb-5 text-dark\">Paroles de nos clients  !</h1>
                </div>
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"{{ asset('img/testimonial-1.jpg') }}\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">John Doe</h4>
                                    <p class=\"m-0 pb-3\">Professeur</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Absolument conquise par cette épicerie en ligne ! Les produits sont d'une qualité exceptionnelle, chaque article respire la fraîcheur. La diversité de l'assortiment m'a permis de découvrir de nouveaux favoris. Le service client est efficace, répondant rapidement à mes questions. De plus, la livraison a été ponctuelle, assurant une expérience d'achat parfaite du début à la fin
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"{{ asset('img/testimonial-1.jpg') }}\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Craig Toumi</h4>
                                    <p class=\"m-0 pb-3\">Acteur</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Mon coup de cœur pour les courses en ligne ! La sélection de produits est impressionnante, allant des fruits frais aux produits secs. La navigation sur le site est intuitive, facilitant la recherche des articles désirés.
                                    La livraison a été rapide, les produits étaient soigneusement emballés.
                                    Un grand bravo à cette épicerie qui a su allier qualité, variété et efficacité logistique.
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"{{ asset('img/sting.jpg') }}\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Sting</h4>
                                    <p class=\"m-0 pb-3\">Chanteur</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                        <i class=\"fas fa-star text-warning\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Une expérience client exceptionnelle ! Les produits sont non seulement de première qualité, mais la présentation visuelle sur le site a également rendu le processus de commande agréable. La communication avec le service client était chaleureuse et professionnelle. Ma commande est arrivée à temps, les produits étaient frais et délicieux.
                                    Cette épicerie en ligne est devenue ma référence pour des achats alimentaires en toute confiance
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->
    </div>


    <!-- JavaScript Libraries -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>

{% endblock %}


", "home/index.html.twig", "/Users/massinissa/Documents/PROJETS/mafrenchepicerie/templates/home/index.html.twig");
    }
}

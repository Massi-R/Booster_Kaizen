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

/* base.html.twig */
class __TwigTemplate_0723b30732ba790bf5d7a6b1005a684e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!--------------------------------------------------------------------------------------------------------------->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\"
          rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<!---------------------------------------------------------------------------------------------------------------->
<body>

<!-- Spinner Start -->
<div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
    <div class=\"spinner-grow text-primary\" role=\"status\"></div>
</div>
<!-- Spinner End -->



<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light bg-dark text-white\">
    <div class=\"container px-4 px-lg-5\">
        <a class=\"navbar-brand text-white\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">My French Epicery</a>
        <button class=\"navbar-toggler bg-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                aria-controls=\"navbarNav\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                <li class=\"nav-item\"><a class=\"nav-link active text-white\" aria-current=\"page\"
                                        href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\">Produits</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"#!\">À propos</a></li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Courses</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item text-dark\" href=\"#!\">All Products</a></li>
                        <li>
                            <hr class=\"dropdown-divider text-dark\"/>
                        </li>
                        <li><a class=\"dropdown-item text-dark\" href=\"#!\">Popular Items</a></li>
                        <li><a class=\"dropdown-item text-dark\" href=\"#!\">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>

            ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            echo "                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">
                            Mon compte <small>  (";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "firstName", [], "any", false, false, false, 76), "html", null, true);
            echo ") </small>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <span class=\"nav-link text-white\">|</span>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            Déconnexion
                        </a>
                    </li>
                </ul>
            ";
        } else {
            // line 89
            echo "                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                            Connexion
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <span class=\"nav-link text-white\">|</span>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                            S'enregistrer
                        </a>
                    </li>
                </ul>
            ";
        }
        // line 105
        echo "            <form class=\"d-flex\">
                ";
        // line 106
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", ["_route"], "method", false, false, false, 106) == "app_home")) {
            // line 107
            echo "                    <button class=\"btn btn-outline-warning text-white\" type=\"submit\">
                        <i class=\"bi-cart-fill me-1 text-white fa fa-shopping-bag\"></i>

                        <span class=\"badge bg-white text-dark ms-1 rounded-pill\">0</span>
                    </button>
                ";
        }
        // line 113
        echo "            </form>

        </div>
    </div>
</nav>
<!-- End navbar -->



";
        // line 122
        $this->displayBlock('header', $context, $blocks);
        // line 125
        echo "

";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('footer', $context, $blocks);
        // line 210
        echo "

<!-- Bootstrap core JS-->
<!-- Bootstrap JS and Popper.js -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"
        integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js\"
        integrity=\"sha384-eUH1/X+qF5C3s2wNl3pibdjKf0l/J9O5AQ5R8aQVPLDGlW6Y6LZbXrv25SuQxFig\"
        crossorigin=\"anonymous\"></script>
<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

</body>


<!-- JavaScript Libraries -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>


<div id=\"sfwdt134118\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\"></div>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Shop Homepage - Ma French Epicerie ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 123
        echo "    <!-- Header-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "    <!-- Section-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 132
        echo "    <!-- Footer-->

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;\">
                <div class=\"row g-4\">
                    <div class=\"\">
                        <a href=\"#\">
                            <h1 class=\"text-warning mb-0\">My French Epicery</h1>
                            <p class=\"text-secondary mb-0\">Produits frais</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">Pourquoi nous choisir !</h4>
                        <p class=\"mb-4\">Nous choisir, c'est opter pour une expérience d'achat exceptionnelle.
                            Avec la garantie de produits de qualité, un assortiment diversifié répondant à tous les
                            goûts,
                            et un service attentionné, chaque visite devient une aventure culinaire inoubliable.</p>
                        <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-warning\">En apprendre
                            plus</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Informations</h4>
                        <a class=\"btn-link text-decoration-none\" href=\"\">À propos </a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Nous contacter</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Politique de confidentialité</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">FAQs & Aide</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Comptes</h4>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Mon compte</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Détails de commandes</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Historique de commande</a>

                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">Contact</h4>
                        <p>Address: 10 rue de Montmartre, Paris</p>
                        <p>Email: myfrenchepicery@gmail.com</p>
                        <p>Phone: +33 1 98 65 21 12</p>
                        <p>Moyens de paiements</p>
                        <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/payment.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class=\"container-fluid copyright bg-dark py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    <span class=\"text-light text-decoration-none\">Tous droits réservés © 2024.</span>
                </div>
                <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
                    Réalisé par <a class=\"text-decoration-none\" href=\"#\">Massi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  412 => 184,  358 => 132,  348 => 131,  337 => 128,  327 => 127,  316 => 123,  306 => 122,  287 => 8,  271 => 236,  265 => 233,  261 => 232,  257 => 231,  253 => 230,  231 => 210,  229 => 131,  226 => 130,  224 => 127,  220 => 125,  218 => 122,  207 => 113,  199 => 107,  197 => 106,  194 => 105,  185 => 99,  174 => 91,  170 => 89,  161 => 83,  151 => 76,  147 => 75,  143 => 73,  141 => 72,  122 => 56,  111 => 48,  91 => 31,  85 => 28,  79 => 25,  75 => 24,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!--------------------------------------------------------------------------------------------------------------->
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %} Shop Homepage - Ma French Epicerie {% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\"
          rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('lib/lightbox/css/lightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
</head>

<!---------------------------------------------------------------------------------------------------------------->
<body>

<!-- Spinner Start -->
<div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
    <div class=\"spinner-grow text-primary\" role=\"status\"></div>
</div>
<!-- Spinner End -->



<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light bg-dark text-white\">
    <div class=\"container px-4 px-lg-5\">
        <a class=\"navbar-brand text-white\" href=\"{{ path('app_home') }}\">My French Epicery</a>
        <button class=\"navbar-toggler bg-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                aria-controls=\"navbarNav\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                <li class=\"nav-item\"><a class=\"nav-link active text-white\" aria-current=\"page\"
                                        href=\"{{ path('app_products') }}\">Produits</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"#!\">À propos</a></li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Courses</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item text-dark\" href=\"#!\">All Products</a></li>
                        <li>
                            <hr class=\"dropdown-divider text-dark\"/>
                        </li>
                        <li><a class=\"dropdown-item text-dark\" href=\"#!\">Popular Items</a></li>
                        <li><a class=\"dropdown-item text-dark\" href=\"#!\">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>

            {% if app.user %}
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"{{ path('app_account') }}\">
                            Mon compte <small>  ({{ app.user.firstName }}) </small>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <span class=\"nav-link text-white\">|</span>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"{{ path('app_logout') }}\">
                            Déconnexion
                        </a>
                    </li>
                </ul>
            {% else %}
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"{{ path('app_login') }}\">
                            Connexion
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <span class=\"nav-link text-white\">|</span>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"{{ path('app_register') }}\">
                            S'enregistrer
                        </a>
                    </li>
                </ul>
            {% endif %}
            <form class=\"d-flex\">
                {% if app.request.attributes.get('_route') == 'app_home' %}
                    <button class=\"btn btn-outline-warning text-white\" type=\"submit\">
                        <i class=\"bi-cart-fill me-1 text-white fa fa-shopping-bag\"></i>

                        <span class=\"badge bg-white text-dark ms-1 rounded-pill\">0</span>
                    </button>
                {% endif %}
            </form>

        </div>
    </div>
</nav>
<!-- End navbar -->



{% block header %}
    <!-- Header-->
{% endblock %}


{% block content %}
    <!-- Section-->
{% endblock %}

{% block footer %}
    <!-- Footer-->

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;\">
                <div class=\"row g-4\">
                    <div class=\"\">
                        <a href=\"#\">
                            <h1 class=\"text-warning mb-0\">My French Epicery</h1>
                            <p class=\"text-secondary mb-0\">Produits frais</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">Pourquoi nous choisir !</h4>
                        <p class=\"mb-4\">Nous choisir, c'est opter pour une expérience d'achat exceptionnelle.
                            Avec la garantie de produits de qualité, un assortiment diversifié répondant à tous les
                            goûts,
                            et un service attentionné, chaque visite devient une aventure culinaire inoubliable.</p>
                        <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-warning\">En apprendre
                            plus</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Informations</h4>
                        <a class=\"btn-link text-decoration-none\" href=\"\">À propos </a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Nous contacter</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Politique de confidentialité</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">FAQs & Aide</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Comptes</h4>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Mon compte</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Détails de commandes</a>
                        <a class=\"btn-link text-decoration-none\" href=\"\">Historique de commande</a>

                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">Contact</h4>
                        <p>Address: 10 rue de Montmartre, Paris</p>
                        <p>Email: myfrenchepicery@gmail.com</p>
                        <p>Phone: +33 1 98 65 21 12</p>
                        <p>Moyens de paiements</p>
                        <img src=\"{{ asset('img/payment.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class=\"container-fluid copyright bg-dark py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    <span class=\"text-light text-decoration-none\">Tous droits réservés © 2024.</span>
                </div>
                <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
                    Réalisé par <a class=\"text-decoration-none\" href=\"#\">Massi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
{% endblock %}


<!-- Bootstrap core JS-->
<!-- Bootstrap JS and Popper.js -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"
        integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js\"
        integrity=\"sha384-eUH1/X+qF5C3s2wNl3pibdjKf0l/J9O5AQ5R8aQVPLDGlW6Y6LZbXrv25SuQxFig\"
        crossorigin=\"anonymous\"></script>
<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

</body>


<!-- JavaScript Libraries -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('lib/lightbox/js/lightbox.min.js') }}\"></script>
<script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>

<!-- Template Javascript -->
<script src=\"{{ asset('js/main.js') }}\"></script>


<div id=\"sfwdt134118\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\"></div>
</html>
", "base.html.twig", "/Users/massinissa/Documents/PROJETS/mafrenchepicerie/templates/base.html.twig");
    }
}

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

/* cart/index.html.twig */
class __TwigTemplate_b424f0ceef9358772d01eb3e6230795b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <!-- Cart Page Start -->
    ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 6, $this->source); })())) > 0)) {
            // line 7
            echo "    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Produits</th>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 22
            $context["totalCartPrice"] = null;
            // line 23
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
                // line 24
                echo "                        <tr>
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 27), "illustration", [], "any", false, false, false, 27)), "html", null, true);
                echo "\"
                                         class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                                </div>
                            </th>
                            <td>
                                <p class=\"mb-0 mt-4\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</p><br />
                                <small>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 33), "subtitle", [], "any", false, false, false, 33), "html", null, true);
                echo "</small>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\"> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36), "html", null, true);
                echo "  €</p>
                            </td>
                            <td>
                                <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                    <div class=\"input-group-btn\">
                                        <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\">
                                            <i class=\"fa fa-minus\"></i>
                                        </button>
                                    </div>
                                    <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "quantity", [], "any", false, false, false, 45), "quantity", [], "array", false, false, false, 45), "html", null, true);
                echo "\">

                                    <div class=\"input-group-btn\">
                                        <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                            <i class=\"fa fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\">";
                // line 55
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "quantity", [], "any", false, false, false, 55), "quantity", [], "array", false, false, false, 55) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 55), "price", [], "any", false, false, false, 55)), "html", null, true);
                echo "  €</p>
                            </td>
                            <td>
                                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"
                                   class=\"btn btn-md rounded-circle bg-light border mt-4\">
                                    <i class=\"fa fa-times text-danger\"></i>
                                </a>
                            </td>
                        </tr>
                        ";
                // line 64
                $context["totalCartPrice"] = ((isset($context["totalCartPrice"]) || array_key_exists("totalCartPrice", $context) ? $context["totalCartPrice"] : (function () { throw new RuntimeError('Variable "totalCartPrice" does not exist.', 64, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "quantity", [], "any", false, false, false, 64), "quantity", [], "array", false, false, false, 64) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 64), "price", [], "any", false, false, false, 64)));
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    </tbody>
                </table>
            </div>
            <div class=\"mt-5\">
                <input type=\"text\" class=\"border-0 border-bottom rounded me-5 py-3 mb-4\" placeholder=\"Code Promo\">
                <button class=\"btn border-secondary rounded-pill px-4 py-3 text-primary\" type=\"button\">Appliquer le code promo</button>
            </div>
            <div class=\"row g-4 justify-content-end\">
                <div class=\"col-8\"></div>
                <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                    <div class=\"bg-light rounded\">
                        <div class=\"p-4\">
                            <h1 class=\"display-6 mb-4\">Total du panier <span class=\"fw-normal\"></span></h1>
                            <div class=\"d-flex justify-content-between mb-4\">
                                <h5 class=\"mb-0 me-4\">Nombre de produits :</h5>
                                <p class=\"mb-0\"> ";
            // line 81
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 81, $this->source); })())), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <h5 class=\"mb-0 me-4\">Livraison :</h5>
                                <div class=\"\">
                                    <p class=\"mb-0\">Forfait : Gratuite</p>
                                </div>
                            </div>
                            <p class=\"mb-0 text-end\">Livraison en France.</p>
                        </div>
                        <div class=\"py-4 mb-4 border-top border-bottom d-flex justify-content-between\">
                            <h5 class=\"mb-0 ps-4 me-4\">Total</h5>
                            <p class=\"mb-0 pe-4\">";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["totalCartPrice"]) || array_key_exists("totalCartPrice", $context) ? $context["totalCartPrice"] : (function () { throw new RuntimeError('Variable "totalCartPrice" does not exist.', 93, $this->source); })()), "html", null, true);
            echo " €</p>
                        </div>
                        <a href=\"\"
                           class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\">
                            Procéder au paiement
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 105
            echo "    <div class=\"container d-grid min-vh-100 w-100\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"text-center\">Votre panier est vide... si on le remplissait ?</h1>
            </div>
        </div>
    </div>
    ";
        }
        // line 113
        echo "    <!-- Cart Page End -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  228 => 113,  218 => 105,  203 => 93,  188 => 81,  171 => 66,  165 => 65,  163 => 64,  154 => 58,  148 => 55,  135 => 45,  123 => 36,  117 => 33,  113 => 32,  106 => 28,  102 => 27,  97 => 24,  92 => 23,  90 => 22,  73 => 7,  71 => 6,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# cart/index.html.twig #}
{% extends 'base.html.twig' %}

{% block content %}
    <!-- Cart Page Start -->
    {% if cart | length > 0 %}
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Produits</th>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% set totalCartPrice = null %}
                    {% for cartItem in cart %}
                        <tr>
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset(cartItem.product.illustration) }}\"
                                         class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"{{ cartItem.product.name }}\">
                                </div>
                            </th>
                            <td>
                                <p class=\"mb-0 mt-4\">{{ cartItem.product.name }}</p><br />
                                <small>{{ cartItem.product.subtitle }}</small>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\"> {{ cartItem.product.price }}  €</p>
                            </td>
                            <td>
                                <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                    <div class=\"input-group-btn\">
                                        <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\">
                                            <i class=\"fa fa-minus\"></i>
                                        </button>
                                    </div>
                                    <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"{{ cartItem.quantity['quantity'] }}\">

                                    <div class=\"input-group-btn\">
                                        <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                            <i class=\"fa fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\">{{ cartItem.quantity['quantity']* cartItem.product.price}}  €</p>
                            </td>
                            <td>
                                <a href=\"{{ path('app_delete_cart', {'id': cartItem.product.id}) }}\"
                                   class=\"btn btn-md rounded-circle bg-light border mt-4\">
                                    <i class=\"fa fa-times text-danger\"></i>
                                </a>
                            </td>
                        </tr>
                        {% set totalCartPrice = totalCartPrice + cartItem.quantity['quantity']* cartItem.product.price %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"mt-5\">
                <input type=\"text\" class=\"border-0 border-bottom rounded me-5 py-3 mb-4\" placeholder=\"Code Promo\">
                <button class=\"btn border-secondary rounded-pill px-4 py-3 text-primary\" type=\"button\">Appliquer le code promo</button>
            </div>
            <div class=\"row g-4 justify-content-end\">
                <div class=\"col-8\"></div>
                <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                    <div class=\"bg-light rounded\">
                        <div class=\"p-4\">
                            <h1 class=\"display-6 mb-4\">Total du panier <span class=\"fw-normal\"></span></h1>
                            <div class=\"d-flex justify-content-between mb-4\">
                                <h5 class=\"mb-0 me-4\">Nombre de produits :</h5>
                                <p class=\"mb-0\"> {{ cart | length }}</p>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <h5 class=\"mb-0 me-4\">Livraison :</h5>
                                <div class=\"\">
                                    <p class=\"mb-0\">Forfait : Gratuite</p>
                                </div>
                            </div>
                            <p class=\"mb-0 text-end\">Livraison en France.</p>
                        </div>
                        <div class=\"py-4 mb-4 border-top border-bottom d-flex justify-content-between\">
                            <h5 class=\"mb-0 ps-4 me-4\">Total</h5>
                            <p class=\"mb-0 pe-4\">{{ totalCartPrice}} €</p>
                        </div>
                        <a href=\"\"
                           class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\">
                            Procéder au paiement
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% else %}
    <div class=\"container d-grid min-vh-100 w-100\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"text-center\">Votre panier est vide... si on le remplissait ?</h1>
            </div>
        </div>
    </div>
    {% endif %}
    <!-- Cart Page End -->

{% endblock %}
", "cart/index.html.twig", "/Users/massinissa/Documents/PROJETS/mafrenchepicerie/templates/cart/index.html.twig");
    }
}

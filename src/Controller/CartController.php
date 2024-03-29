<?php

namespace App\Controller;

use App\Cart\Cart;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/mon-panier', name: 'app_cart')]

    public function index(Cart $cart): Response
    {

        //dd($cart->getFull());
        return $this->render('cart/index.html.twig', [

            'cart' => $cart->getFull()
        ]);
    }

    #[Route('/cart/add/{id}', name: 'app_add_cart')]
    public function add(Cart $cart, int $id): Response
    {
        // Utilisez $cart pour ajouter le produit avec l'identifiant $id
        $cart->add($id);

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/cart/remove/{id}', name: 'app_remove_cart')]
    public function remove(Cart $cart): Response
    {
        // Utilisez $cart pour supprimer le produit avec l'identifiant $id

        $cart->remove();

        return $this->redirectToRoute('app_products');
    }

    #[Route('/cart/delete/{id}', name: 'app_delete_cart')]
    public function delete(Cart $cart, int $id): Response
    {
        // Utilisez $cart pour supprimer le produit avec l'identifiant $id

        $cart->delete($id);

        return $this->redirectToRoute('app_cart');
    }
}

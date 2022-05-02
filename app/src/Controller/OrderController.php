<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Order;
use App\Entity\Product;

class OrderController extends AbstractController
{
     /**
     * @Route ("/api/orders", name="order_all", methods={"GET"})
     */
    public function display_orders(): Response
    {
        $order = $this->getDoctrine()
        ->getRepository(Order::class)
        -> findAll();
        $product = $this->getDoctrine()
        ->getRepository(Product::class)
        -> findAll();

        if (!$order){
            return $this->json('No order found', 404);
        }

        $data = [];

        foreach ($order as $order){
            $data[] = [
                'id' => $order->getId(),
                'totalPrice' => $order->getTotalPrice(),
                'creationDtae' => $order->getCreationDate(),
                'products' => $product->getProduct(),
                
            ];
        }

        return $this->json($data,200,["Content-Type"=>"application/json"]);
    }

    /**
     * @Route ("/api/order/{id}", name="order_id", methods={"GET"})
     */
    public function getaorder(int $id): Response
    {
        $order = $this->getDoctrine()
        ->getRepository(Order::class)
        -> find($id);
        $product = $this->getDoctrine()
        ->getRepository(Product::class)
        -> find($id);

        $data = [
            'id' => $order->getId(),
            'totalPrice' => $order->getTotalPrice(),
            'creationDtae' => $order->getCreationDate(),
            'products' => $order->getProduct(),
        ];
        return $this->json($data,200);
    }
}

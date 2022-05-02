<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class ProductController extends AbstractController
{
    /**
     * @Route ("/api/products", name="product_all", methods={"GET"})
     */
    public function display_product(): Response
    {
        $product = $this->getDoctrine()
        ->getRepository(Product::class)
        -> findAll();

        if (!$product){
            return $this->json('No project found', 404);
        }

        $data = [];

        foreach ($product as $product){
            $data[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'description' => $product->getDescription(),
                'photo' => $product->getPhoto(),
                'price' => $product->getPrice()
            ];
        }

        return $this->json($data,200,["Content-Type"=>"application/json"]);
    }

    /**
     * @Route ("/api/products/{id}", name="product_id", methods={"GET"})
     */
    public function getaproduct(int $id): Response
    {
        $product = $this->getDoctrine()
        ->getRepository(product::class)
        -> find($id);

        $data = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'photo' => $product->getPhoto(),
            'price' => $product->getPrice()
        ];
        return $this->json($data,200);
    }

    /**
     * @Route ("/api/products", name="add_product", methods={"POST"})
     */
    public function add_product(Request $request): Response
    {
        

        $product = new Product();
        $parameter = json_decode($request->getContent(),true);
        $product->setName($parameter['name']);
        $product->setDescription($parameter['description']);
        $product->setPhoto($parameter['photo']);
        $product->setPrice($parameter['price']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->json ([
            'Insert noice'
        ],200);
    }

    /**
     * @Route ("/api/products/{id}", name="edit_product", methods={"PUT"})
     */
    public function edit_product(Request $request, int $id): Response
    {

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);
        
        if (!$product){
            return $this->json('error: no product found', 404);
        }
        $product = new Product();
        $parameter = json_decode($request->getContent(),true);
        $product->setName($parameter['name']);
        $product->setDescription($parameter['description']);
        $product->setPhoto($parameter['photo']);
        $product->setPrice($parameter['price']);
        $em->persist($product);
        $em->flush();

        $data = [
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'photo' => $product->getPhoto(),
            'price' => $product->getPrice(),
        ];
        

        return $this->json ($data,200);
    }

    /**
     * @Route ("/api/products/{id}", name="delete_product", methods={"DELETE"})
     */
    public function delete_product(int $id): Response
    {

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);
        
        if (!$product){
            return $this->json('error: no product found', 404);
        }
        $em->remove($product);
        $em->flush();
        

        return $this->json ('delete succes',200);
    }


}

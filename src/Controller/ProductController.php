<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Route ("/product", methods={"POST"})
     */

    public function addProduct(): JsonResponse
    {
        $request = Request::createFromGlobals();
        $content = $request->toArray();

        $product = new Product();

       $product->setName($content["name"]);
       $product->setDescription($content["description"]);
       $product->setAmount($content["amount"]);
       $product->setPrice($content["price"]);

       $this->productRepository->save($product);

       return $this->json(
           "ok ".$product->getId()
       );
    }
}
<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render("ShopBundle:Site:index.html.twig");
    }

    public function createAction()
    {
        echo "EDDDDDJ";
        exit;
        $product = new Products();
        $product->setName('KIWI');
        $product->setPrice(19.99);
        $product->setCount(2);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        /*return new Response('Saved new product with id '.$product->getId());*/
        return $this->render("ShopBundle:Site:create.html.twig");
    }
}
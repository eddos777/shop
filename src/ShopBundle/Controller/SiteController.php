<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine();
        $products = $em
            ->getRepository('ShopBundle:Products')->findAll();
        return $this->render("ShopBundle:Site:index.html.twig", [ "products" => $products]);

    }

    public function createAction(Request $request)
    {
        if(is_null($request->request->get('name'))){
            return $this->render("ShopBundle:Site:create.html.twig");
        }
        $product = new Products();
        $product->setName($request->get("name"));
        $product->setPrice($request->get("price"));
        $product->setCount($request->get("count"));
        var_dump($request->request->all());
        exit;


        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        /*return new Response('Saved new product with id '.$product->getId());*/
        return $this->redirect("ShopBundle:Site:index.html.twig");
    }
}
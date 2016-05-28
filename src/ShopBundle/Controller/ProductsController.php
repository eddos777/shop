<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ProductsController
 * @package ShopBundle\Controller
 */
class ProductsController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $products = $em
            ->getRepository('ShopBundle:Products')
            ->findAll();
        foreach ($products as $product){
            $product->setType(Products::$types[$product->getType()]);
        }
        
        return $this->render('ShopBundle:Products:index.html.twig', compact('products'));
    }
}
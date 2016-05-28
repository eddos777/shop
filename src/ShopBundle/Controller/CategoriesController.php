<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $categories = $em
            ->getRepository('ShopBundle:Categories')
            ->findAll();
        return $this->render('ShopBundle:Categories:index.html.twig', compact('categories'));
    }
}
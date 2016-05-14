<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Products;
use ShopBundle\Form\ProductForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT p FROM ShopBundle:Products p";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('ShopBundle:Site:index.html.twig', ['pagination' => $pagination]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $product = new Products();

        $productForm = $this->createForm(
            new ProductForm(),
            $product
        );

        if ($request->isMethod('POST')) {
            $productForm->handleRequest($request);

            if ($productForm->isValid()) {
                $productData = $productForm->getData();

                $em->persist($productData);
                $em->flush();

                return $this->redirect("ShopBundle:Site:index.html.twig");
            }
        }
        return $this->render("ShopBundle:Site:create.html.twig",['form'=> $productForm->createView()]);


    }
}
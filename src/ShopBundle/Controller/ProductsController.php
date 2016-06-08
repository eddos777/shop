<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Products;
use ShopBundle\Entity\Role;
use ShopBundle\Entity\User;
use ShopBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

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
        $categories = $em
            ->getRepository('ShopBundle:Category')
            ->findAll();
        foreach ($products as $product) {
//            TODO
//            $product->setType(Products::$types[$product->getType()]);
            $images = $em
                ->getRepository('ShopBundle:ProductPictures')
                ->findBy(
                    ["productId" => $product->getId()]
                );
            $product->setImages($images);
        }
        return $this->render('ShopBundle:Products:index.html.twig', compact('products', 'categories'));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'ShopBundle:Products:login.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error,
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function signupAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $role = new Role();
            $role->setName('ROLE_USER');
            $em = $this->getDoctrine()->getManager();
            $em->persist($role);
            $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
            $password = $encoder->encodePassword($user->getPassword(), md5(time()));
            $user->setPassword($password);
            $user->getUserRoles()->add($role);
            $em->persist($user);
            $em->flush();
            $this->setToken($user, $request);
            return $this->redirectToRoute('index');
        }
        return $this->render(
            'ShopBundle:Products:signup.html.twig', [
                'form' => $form->createView()
            ]
        );
    }

    public function logoutAction()
    {
        return $this->redirectToRoute('index');
    }

    /**
     * @param User $user
     * @param Request $request
     */
    private function setToken(User $user, Request $request)
    {
        $token = new UsernamePasswordToken(
            $user->getUsername(),
            $user->getPassword(),
            'main',
            $user->getRoles()
        );
        $this->get('security.context')->setToken($token);
        $request->getSession()->set('_security_secured_area', serialize($token));
    }
}
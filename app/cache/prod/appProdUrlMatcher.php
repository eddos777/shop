<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin/products')) {
            // site
            if ($pathinfo === '/admin/products') {
                return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::indexAction',  '_route' => 'site',);
            }

            // create
            if ($pathinfo === '/admin/products/create') {
                return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::createAction',  '_route' => 'create',);
            }

            // view
            if ($pathinfo === '/admin/products/view') {
                return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::viewAction',  '_route' => 'view',);
            }

            // update
            if ($pathinfo === '/admin/products/update') {
                return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::updateAction',  '_route' => 'update',);
            }

            // delete
            if ($pathinfo === '/admin/products/delete') {
                return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::deleteAction',  '_route' => 'delete',);
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'ShopBundle\\Controller\\ProductsController::indexAction',  '_route' => 'index',);
        }

        // categories
        if ($pathinfo === '/categories') {
            return array (  '_controller' => 'ShopBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'ShopBundle\\Controller\\ProductsController::loginAction',  '_route' => 'login',);
        }

        // signup
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'ShopBundle\\Controller\\ProductsController::signupAction',  '_route' => 'signup',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'ShopBundle\\Controller\\ProductsController::logoutAction',  '_route' => 'logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

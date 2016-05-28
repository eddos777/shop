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

        // site
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site');
            }

            return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::indexAction',  '_route' => 'site',);
        }

        // create
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::createAction',  '_route' => 'create',);
        }

        // view
        if ($pathinfo === '/view') {
            return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::viewAction',  '_route' => 'view',);
        }

        // update
        if ($pathinfo === '/update') {
            return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::updateAction',  '_route' => 'update',);
        }

        // delete
        if ($pathinfo === '/delete') {
            return array (  '_controller' => 'ShopBundle\\Controller\\SiteController::deleteAction',  '_route' => 'delete',);
        }

        // index
        if ($pathinfo === '/products') {
            return array (  '_controller' => 'ShopBundle\\Controller\\ProductsController::indexAction',  '_route' => 'index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

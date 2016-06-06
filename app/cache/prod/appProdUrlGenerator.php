<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\SiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/products',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\SiteController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/products/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'view' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\SiteController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/products/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\SiteController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/products/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\SiteController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/products/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\ProductsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\CategoriesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\ProductsController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\ProductsController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ShopBundle\\Controller\\ProductsController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

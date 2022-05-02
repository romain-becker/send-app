<?php

namespace ContainerTMtAGHd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VzeOj7RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VzeOj7R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VzeOj7R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.carts' => ['privates', 'security.event_dispatcher.carts', 'getSecurity_EventDispatcher_CartsService', true],
            'security.event_dispatcher.carts_id' => ['privates', 'security.event_dispatcher.carts_id', 'getSecurity_EventDispatcher_CartsIdService', true],
            'security.event_dispatcher.login' => ['privates', 'security.event_dispatcher.login', 'getSecurity_EventDispatcher_LoginService', true],
            'security.event_dispatcher.main' => ['privates', 'security.event_dispatcher.main', 'getSecurity_EventDispatcher_MainService', false],
            'security.event_dispatcher.orders' => ['privates', 'security.event_dispatcher.orders', 'getSecurity_EventDispatcher_OrdersService', true],
            'security.event_dispatcher.orders_id' => ['privates', 'security.event_dispatcher.orders_id', 'getSecurity_EventDispatcher_OrdersIdService', true],
            'security.event_dispatcher.products' => ['privates', 'security.event_dispatcher.products', 'getSecurity_EventDispatcher_ProductsService', true],
            'security.event_dispatcher.products_id' => ['privates', 'security.event_dispatcher.products_id', 'getSecurity_EventDispatcher_ProductsIdService', true],
            'security.event_dispatcher.users' => ['privates', 'security.event_dispatcher.users', 'getSecurity_EventDispatcher_UsersService', true],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.carts' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.carts_id' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.login' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.main' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.orders' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.orders_id' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.products' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.products_id' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.users' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}

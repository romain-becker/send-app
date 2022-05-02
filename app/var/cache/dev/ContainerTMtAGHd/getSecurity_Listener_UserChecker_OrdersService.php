<?php

namespace ContainerTMtAGHd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_UserChecker_OrdersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.user_checker.orders' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserCheckerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/UserCheckerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserChecker.php';

        return $container->privates['security.listener.user_checker.orders'] = new \Symfony\Component\Security\Http\EventListener\UserCheckerListener(($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker())));
    }
}

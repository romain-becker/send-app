<?php

namespace ContainerTMtAGHd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Guard_Products_0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.guard.products.0' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Authenticator\GuardBridgeAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Authenticator/GuardBridgeAuthenticator.php';

        return $container->privates['security.authenticator.guard.products.0'] = new \Symfony\Component\Security\Guard\Authenticator\GuardBridgeAuthenticator(($container->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $container->load('getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService')), ($container->privates['security.user.provider.concrete.in_database'] ?? $container->load('getSecurity_User_Provider_Concrete_InDatabaseService')));
    }
}

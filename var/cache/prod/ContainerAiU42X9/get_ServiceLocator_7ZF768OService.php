<?php

namespace ContainerAiU42X9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7ZF768OService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.7ZF768O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7ZF768O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'team' => ['privates', '.errored..service_locator.7ZF768O.App\\Entity\\Team', NULL, 'Cannot autowire service ".service_locator.7ZF768O": it needs an instance of "App\\Entity\\Team" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'team' => 'App\\Entity\\Team',
        ]);
    }
}

<?php

namespace ContainerAiU42X9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HBWOX4XService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.HBWOX4X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HBWOX4X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentaire' => ['privates', '.errored..service_locator.HBWOX4X.App\\Entity\\Commentaires', NULL, 'Cannot autowire service ".service_locator.HBWOX4X": it needs an instance of "App\\Entity\\Commentaires" but this type has been excluded in "config/services.yaml".'],
        ], [
            'commentaire' => 'App\\Entity\\Commentaires',
        ]);
    }
}

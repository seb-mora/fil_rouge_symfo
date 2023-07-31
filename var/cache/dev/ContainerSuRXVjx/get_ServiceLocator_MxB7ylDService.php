<?php

namespace ContainerSuRXVjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MxB7ylDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MxB7ylD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MxB7ylD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentairesRepository' => ['privates', 'App\\Repository\\CommentairesRepository', 'getCommentairesRepositoryService', true],
        ], [
            'commentairesRepository' => 'App\\Repository\\CommentairesRepository',
        ]);
    }
}

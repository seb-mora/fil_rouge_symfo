<?php

namespace ContainerAiU42X9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentairesControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\CommentairesController' shared autowired service.
     *
     * @return \App\Controller\Admin\CommentairesController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\CommentairesController'] = $instance = new \App\Controller\Admin\CommentairesController();

        $instance->setContainer(($container->privates['.service_locator.5NV8kkv'] ?? $container->load('get_ServiceLocator_5NV8kkvService'))->withContext('App\\Controller\\Admin\\CommentairesController', $container));

        return $instance;
    }
}

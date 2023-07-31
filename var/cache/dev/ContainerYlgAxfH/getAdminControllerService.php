<?php

namespace ContainerYlgAxfH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\AdminController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AdminController.php';

        $container->services['App\\Controller\\Admin\\AdminController'] = $instance = new \App\Controller\Admin\AdminController();

        $instance->setContainer(($container->privates['.service_locator.5NV8kkv'] ?? $container->load('get_ServiceLocator_5NV8kkvService'))->withContext('App\\Controller\\Admin\\AdminController', $container));

        return $instance;
    }
}

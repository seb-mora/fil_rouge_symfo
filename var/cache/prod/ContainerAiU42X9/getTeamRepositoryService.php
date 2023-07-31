<?php

namespace ContainerAiU42X9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeamRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TeamRepository' shared autowired service.
     *
     * @return \App\Repository\TeamRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TeamRepository'] = new \App\Repository\TeamRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}

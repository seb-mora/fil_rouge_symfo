<?php

namespace ContainerAiU42X9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeamTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\TeamType' shared autowired service.
     *
     * @return \App\Form\TeamType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\TeamType'] = new \App\Form\TeamType();
    }
}

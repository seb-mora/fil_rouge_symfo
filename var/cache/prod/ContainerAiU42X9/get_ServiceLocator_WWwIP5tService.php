<?php

namespace ContainerAiU42X9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WWwIP5tService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.WWwIP5t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WWwIP5t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'article' => ['privates', '.errored..service_locator.WWwIP5t.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.WWwIP5t": it needs an instance of "App\\Entity\\Article" but this type has been excluded in "config/services.yaml".'],
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'deleteFolder' => [(\dirname(__DIR__, 4).'/public/uploads')],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fileUploaderService' => ['privates', 'App\\Service\\FileUploaderService', 'getFileUploaderServiceService', true],
            'publicUploadDir' => ['/uploads'],
        ], [
            'article' => 'App\\Entity\\Article',
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'deleteFolder' => '?',
            'entityManager' => '?',
            'fileUploaderService' => 'App\\Service\\FileUploaderService',
            'publicUploadDir' => '?',
        ]);
    }
}

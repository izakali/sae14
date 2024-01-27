<?php

namespace ContainerKFoUnqc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_DatabaseCreateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($container->services['doctrine'] ?? self::getDoctrineService($container)));

        $instance->setName('doctrine:database:create');

        return $instance;
    }
}

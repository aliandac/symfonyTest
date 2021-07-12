<?php

namespace ContainerByCRYth;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobServiceCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\JobServiceCommand' shared autowired service.
     *
     * @return \App\Command\JobServiceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/JobServiceCommand.php';

        $container->privates['App\\Command\\JobServiceCommand'] = $instance = new \App\Command\JobServiceCommand();

        $instance->setName('app:job-get');

        return $instance;
    }
}

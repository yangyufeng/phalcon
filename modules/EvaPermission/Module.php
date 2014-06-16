<?php

namespace Eva\EvaPermission;

use Phalcon\Loader;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Eva\EvaEngine\Module\StandardInterface;

class Module implements ModuleDefinitionInterface, StandardInterface
{
    public static function registerGlobalAutoloaders()
    {
        return array(
            'Eva\EvaPermission' => __DIR__ . '/src/EvaPermission',
        );
    }

    public static function registerGlobalEventListeners()
    {
        return array(
            'dispatch' => 'Eva\EvaPermission\Events\DispatchListener',
        );
    }

    public static function registerGlobalViewHelpers()
    {
    }

    /**
     * Registers the module auto-loader
     */
    public function registerAutoloaders()
    {
    }

    /**
     * Registers the module-only services
     *
     * @param Phalcon\DI $di
     */
    public function registerServices($di)
    {
        $dispatcher = $di->getDispatcher();
        $dispatcher->setDefaultNamespace('Eva\EvaPermission\Controllers');
    }

}
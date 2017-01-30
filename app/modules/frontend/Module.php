<?php
namespace App\Modules\Frontend;

use App\Navigation;
use App\User;
use App\Cart;
use Phalcon\Mvc\Dispatcher;
use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Events\Manager as EventsManager;
use App\Modules\Frontend\Plugins\SecurityPlugin;

class Module implements ModuleDefinitionInterface
{
    /**
     * Registers an autoloader related to the module
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'App\Modules\Frontend\Controllers' => __DIR__ . '/controllers/',
            'App\Modules\Frontend\Models' => __DIR__ . '/models/',
            'App\Modules\Frontend\Plugins' => __DIR__ . '/plugins/',
        ]);

        $loader->register();
    }

    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
        /**
         * Setting up the view component
         */
        $di->set('view', function () {
            $view = new View();
            $view->setDI($this);
            $view->setViewsDir(__DIR__ . '/views/');

            $view->registerEngines([
                '.volt'  => 'voltShared',
                '.phtml' => PhpEngine::class
            ]);

            return $view;
        });

        $di->set('dispatcher', function() {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace('App\Modules\Frontend\Controllers');

            $eventsManager = new EventsManager;
            $eventsManager->attach(
                'dispatch',
                new SecurityPlugin
            );
            $dispatcher->setEventsManager($eventsManager);

            return $dispatcher;
        });

        $di->setShared('navigation', new Navigation);
        $di->set('user', new User, true);
        $di->set('cart', new Cart, true);

    }
}

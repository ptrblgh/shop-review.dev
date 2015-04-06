<?php

namespace Shopreview\Mvc;

use Shopreview\Helper\Helper;

class Application
{
    protected $appConfig = array();

    /**
     * Prevent creating a new instance
     */
    protected function __construct()
    {
    }

    /**
     * Create the singleton instance
     *
     * Returns the singleton instance of the application and sets the
     * configuration parameters.
     * 
     * @param  array  $config application configuration parameters
     * @return object singleton
     */
    public static function init($config = array())
    {
        static $instance = null;

        if (null === $instance) {
            $instance = new static();
            $instance->appConfig = $config;  
        }

        return $instance;
    }

    /**
     * Run the application
     */
    public function run()
    {
        Helper::removeMagicQuotes();
        Helper::unregisterGlobals();

        $router = new Router($_GET['route']);
        $router->dispatch();
    }

    /**
     * Prevent unserializing
     */
    private function __wake()
    {
    }

    /**
     * Prevent cloning
     */
    private function __clone()
    {
    }
}

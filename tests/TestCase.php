<?php

namespace Skeleton;

use Rougin\Slytherin\Component\Collector;

/**
 * Selenium TestCase
 *
 * @package Skeleton
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected $components;

    /**
     * Loads the helpers.
     *
     * @return void
     */
    public function setUp()
    {
        $dotenv = new \Dotenv\Dotenv(base_path());

        $dotenv->load();

        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI']    = '/';
        $_SERVER['SERVER_NAME']    = 'localhost';
        $_SERVER['SERVER_PORT']    = '8000';

        // Loads the components
        $this->components = Collector::get(config('app.container'), config('app.components'));

        $GLOBALS['container'] = $this->components->getContainer();
    }
}

<?php

namespace Skeleton;

/**
 * Helpers Test
 *
 * @package Skeleton
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class HelpersTest extends TestCase
{
    /**
     * Tests base_path().
     *
     * @return void
     */
    public function testBasePath()
    {
        $file = base_path('src/helpers.php');

        $this->assertTrue(file_exists($file));
    }

    /**
     * Tests config().
     *
     * @return void
     */
    public function testConfig()
    {
        $expected = 'http://localhost:8000';

        $this->assertEquals($expected, config('app.base_url'));
    }

    /**
     * Tests middleware().
     *
     * @return void
     */
    public function testMiddleware()
    {
        $this->assertEmpty(middleware());
    }

    /**
     * Tests redirect().
     *
     * @runInSeparateProcess
     *
     * @return void
     */
    public function testRedirect()
    {
        redirect('/', array('foo' => 'bar'), false);

        $header = 'Location: http://localhost:8000/';

        if (function_exists('xdebug_get_headers')) {
            $this->assertContains($header, xdebug_get_headers());
        } else {
            $this->assertTrue(true);
        }
    }

    /**
     * Tests session().
     *
     * @runInSeparateProcess
     *
     * @return void
     */
    // public function testSession()
    // {
    //     $expected = 'foobar';

    //     $_SESSION['foo'] = array('bar' => $expected);

    //     $this->assertEquals($expected, session('foo.bar'));
    // }

    /**
     * Tests url().
     *
     * @return void
     */
    public function testUrl()
    {
        $expected = config('app.base_url') . 'test';

        $this->assertEquals($expected, url('test'));
    }

    /**
     * Tests validate().
     *
     * @runInSeparateProcess
     *
     * @return void
     */
    public function testValidate()
    {
        if (! class_exists('Valitron\Validator')) {
            $this->markTestSkipped('Valitron is not installed.');
        }

        $this->assertCount(3, validate('Skeleton\Validators\UserValidator', array(), false));
    }

    /**
     * Tests view().
     *
     * @runInSeparateProcess
     *
     * @return void
     */
    public function testView()
    {
        $view = view('welcome/index', array('url' => config('app.base_url')));

        $this->assertRegexp('/Hello/', $view);
    }
}
